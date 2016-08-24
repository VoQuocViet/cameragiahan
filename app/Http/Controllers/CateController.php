<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CateRequest;
use App\Cate;
use App\Product;
use Response;
use DB;
use Route;
use Illuminate\Support\Collection;

class CateController extends Controller {

	public function getHierarchicalCates($id = 13)
	{	
		$arr_list = [];
		$cate = Cate::find($id);
		$arr_list[] = $cate;
		$cate_list = Cate::select('id','parent_id')->where('parent_id',$id)->get()->toArray();
		
		foreach ($cate_list as $key => $value) {
			$arr_list[] = $value;
			$cate_list_1 = Cate::where('parent_id',$value["id"])->get()->toArray();
			foreach ($cate_list_1 as $key => $value) {
				$arr_list[] = $value;
			}
		}
		$product_list = [];
		foreach ($arr_list as $value) {
			$product = Product::select('id','name','alias','price','price_old','price_agency','promote_percent','intro','content','image','keywords','description','user_id','cate_id')->where('cate_id',$value["id"])->orderBy('id','DESC')->get()->toArray();
			if($product)
			{
				foreach ($product as $key => $value) {
					$product_list[] = $value;
				}
			}
		}
		//return json_encode($product_list);
		return view('danh-muc', compact('product_list'));
	}
	
	// Hệ Client
	public function getProductList(){
		$product_list = Product::select('id','name','price','cate_id','created_at')->orderBy('id','DESC')->get()->toArray();
		return view('category', compact('product_list'));
	}
	public function category($id)
	{
		$cate = Cate::find($id)->products;
		
		//$product_list = Product::select('id','name','price','classify','cate_id','created_at')->orderBy('id','DESC')->where('cate_id',$id)->get()->toArray();
		$product_list = Product::with('cate')->get()->find($id);
		return Response::json($product_list);
	}
	
	
	public function getList(){
		$data = Cate::select('id','name','parent_id')->orderBy('id','DESC')->get()->toArray();
		return view('admin.cate.list',compact('data'));
	}
	public function getAdd() {
		$parent = Cate::select('id','name','parent_id')->get()->toArray();
		return view('admin.cate.add',compact('parent'));
	}
	
	public function postAdd(CateRequest $request) {
		//print_r($request->txtCateName);
		$cate = new Cate();
		$cate->name 		= $request->txtCateName;
		$cate->alias 		= changeTitle($request->txtCateName);
		$cate->order 		= $request->txtOrder;
		$cate->parent_id 	= $request->sltParent;;
		$cate->keywords 	= $request->txtKeywords;
		$cate->description 	= $request->txtDescription;
		$cate->save();
		return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Success!! Complete Add Category']);
	}
	public function getDelete($id){
		$parent = Cate::where('parent_id',$id)->count();
		if($parent == 0) {
			$cate = Cate::find($id);
			$cate->delete($id);
			return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Success!! Complete Delete Category']);
		}
		else {
			echo "<script type='text/javascript'>
					alert('Sorry! You can not delete this category!');
					window.location = '";
						echo route('admin.cate.list');
					echo "';
				  </script>";
		}		
		
	}
	public function getEdit($id){
		$data = Cate::findOrFail($id)->toArray();
		$parent = Cate::select('id','name','parent_id')->get()->toArray();
		return view('admin.cate.edit',compact('parent','data'));
	}
	public function postEdit(Request $request, $id){
		$this->validate($request, 
				["txtCateName" => "required"], //Mảng đối tượng cần kiểm tra
				["txtCateName.required" => "Please enter name category!"] //Mảng thông báo lỗi
				);
		$cate = Cate::find($id);
		$cate->name 		= $request->txtCateName;
		$cate->alias 		= changeTitle($request->txtCateName);
		$cate->order 		= $request->txtOrder;
		$cate->parent_id 	= $request->sltParent;;
		$cate->keywords 	= $request->txtKeywords;
		$cate->description 	= $request->txtDescription;
		$cate->save();
		return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Success!! Complete Edit Category']);
	}
}
