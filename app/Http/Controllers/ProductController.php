<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use App\Cate;
use App\Http\Requests\ProductRequest;
use App\Product;
use Input,File,DB;
use App\ProductImage;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller {

	// Hệ Client
	public function getProduct($id){
		$product = DB::table('products')->where('id', $id)->first();
		return view('san-pham', compact('product'));
	}
	// view catalog
	public function getProductList(){
		$product_list = Product::select('id','name','alias','price','price_old','price_agency','promote_percent','intro','content','image','keywords','description','user_id','cate_id')->orderBy('id','DESC')->get()->toArray();
		return view('category', compact('product_list'));
	}
	public function search(Request $request)
	{
		$product_list = Product:orderBy('name');
		$name = $request ->input('name');
		if(!empty($name))
		{
			$product_list->where('name','LIKE','%'.$name.'%');
		}
		return view('category', compact('product_list'));
	}
	public function show($id)
	{
		$product = Product::with('categories.parent')->findOrFail($id);
		$categories = $product->categories->groupBy('parent_id');

		$category = Cate::findOrFail($id);
		$children = $category->children;
		
		$products = Product::getAllProducts();
		return Response::json($products);
	}
	// Hệ Admin
	public function getList(){
		$data = Product::select('id','name','price','cate_id','created_at')->orderBy('id','DESC')->get()->toArray();
		return view('admin.product.list', compact('data'));
	}
	public function getAdd(){
		$cate = Cate::select('name','id','parent_id')->get()->toArray();
		return view('admin.product.add', compact('cate'));
	}
	public function postAdd(ProductRequest $product_request){
		$file_name = $product_request->file('fImages')->getClientOriginalName();
		$product = new Product();
		$product->name = $product_request->txtName;
		$product->alias = changeTitle($product_request->txtName);
		// gia niem yet
		$product->price_old = $product_request->txtPriceOld;
		// khuyen mai
		$product->promote_percent = $product_request->txtPromotePercent/100;
		// gia
		if($product_request->txtPrice =="")
		{
			$product->price = $product_request->txtPriceOld * (1- $product_request->txtPromotePercent/100);
		}
		else if($product_request->txtPrice !="")
		{
			$product->price = $product_request->txtPrice;
		}
		//$product->price = $product_request->txtPriceOld * (1- $product_request->txtPromotePercent/100);
		//$product->price = $product_request->txtPrice;
		$product->intro = $product_request->txtIntro;
		$product->content = $product_request->txtContent;
		$product->image = $file_name;
		$product->keywords = $product_request->txtKeywords;
		$product->description = $product_request->txtDescription;
		$product->user_id = Auth::user()->id;
		$product->cate_id = $product_request->sltParent;
		$product_request->file('fImages')->move('resources/upload/',$file_name);
		$product->save();
		
		$product_id = $product->id;
		if(Input::hasFile('fProductDetail')){
			foreach (Input::file('fProductDetail') as $file){
				$product_img = new ProductImage();
				if(isset($file)){
					// Tiến hành upload hình lên server
					$product_img->image = $file->getClientOriginalName();
					$product_img->product_id = $product_id;
					$file->move('resources/upload/detail/',$file->getClientOriginalName());
					
					// Lưu vào table product_image
					$product_img->save();
				}
			}
		}
		return redirect()->route('admin.product.list')->with(['flash_level'=>'success','flash_message'=>'Success!! Complete Add Product']);
	}
	public function getDelete($id){
		
		//Bước 1: xóa hình Detail (table product_image)
		$product_detail = Product::find($id)->pimages->toArray();
		/*
		echo "<pre>";
		print_r($product_detail);
		echo "</pre>";
		*/
		foreach ($product_detail as $value){
			File::delete('resources/upload/detail/'.$value["image"]);
		}
		
		// Bước 2: Xóa hình chính (table Product)
		$product = Product::find($id);
		File::delete('resources/upload/'.$product->image);// image : trường trong csdl
		
		// Bước 3: Xóa Product (khi xóa Product sẽ tự động xóa trong Detail, do đã có ràng buộc 
		$product->delete($id);
		
		// Sau khi xóa thì chuyển trang về ListProduct
		return redirect()->route('admin.product.list')->with(['flash_level'=>'success','flash_message'=>'Success!! Complete Delete Product']);
	}
	
	public function getEdit($id){
		$cate = Cate::select('id','name','parent_id')->get()->toArray();
		$product = Product::find($id);
		$product_image = Product::find($id)->pimages;
		return view('admin.product.edit', compact('cate','product','product_image'));
	}
	public function postEdit($id, Request $request){
		
// 		if(!empty(Request::file('fEditDetail'))){
// 			print_r(Request::file('fEditDetail'));
// 		}
		
// 		die();
		$product = Product::find($id);
		$product->name = Request::input('txtName');
		$product->alias = changeTitle(Request::input('txtName'));
		// gia niem yet
		$product->price_old = Request::input('txtPriceOld');
		// khuyen mai
		$product->promote_percent = Request::input('txtPromotePercent');
		//gia
		// gia
		if(Request::input('txtPrice') =="")
		{
			$product->price = Request::input('txtPriceOld') * (1- Request::input('txtPromotePercent'));
		}
		else if(Request::input('txtPrice') !="")
		{
			$product->price = Request::input('txtPrice');
		}

		//$product->price = Request::input('txtPrice');
		$product->intro = Request::input('txtIntro');
		$product->content = Request::input('txtContent');
		$product->keywords = Request::input('txtKeywords');
		$product->description = Request::input('txtDescription');
		$product->user_id = Auth::user()->id;
		$product->cate_id = Request::input('sltParent');
		$img_current = 'resources/upload/'.Request::input('img_current');
		if(!empty(Request::file('fImages'))){
			$file_name = Request::file('fImages')->getClientOriginalName();
			//echo $file_name;
			$product->image = $file_name;
			Request::file('fImages')->move('resources/upload/', $file_name);
			if(File::exists($img_current)){
				File::delete($img_current);
			}
		} else {
			echo "Không có file";
		}
		$product->save();		
		if(!empty(Request::file('fEditDetail'))){
			foreach(Request::file('fEditDetail') as $file){
				$product_img = new ProductImage();
				if(isset($file)){
					$product_img->image = $file->getClientOriginalName();
					$product_img->product_id = $id;
					$file->move('resources/upload/detail/', $file->getClientOriginalName());
					$product_img->save();
				}
			}			
		}
		
		return redirect()->route('admin.product.list')->with(['flash_level'=>'success','flash_message'=>'Success!! Complete Update Product']);
	}
	public function getDelImg($id){
		if(Request::ajax()){
			$idHinh = (int)Request::get('idHinh');
			$image_detail = ProductImage::find($idHinh);
			if(!empty($image_detail)){
				$img = 'resources/upload/detail'.$image_detail->$image;
				if(File::exists($img)){
					File::delete($img);
				}
				$image_detail->delete();
			}
			return "OK";
		}
	}
}
