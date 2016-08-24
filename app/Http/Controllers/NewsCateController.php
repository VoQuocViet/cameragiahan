<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CateRequest;
use App\NewsCate;
use App\Product;
use Response;
use DB;
use Route;
use Illuminate\Support\Collection;

class NewsCateController extends Controller {


	public function getList(){
		$data = NewsCate::select('id','name','alias','menu')->orderBy('id','DESC')->get()->toArray();
		return view('admin.newscate.list',compact('data'));
	}
	public function getAdd() {
		$parent = Cate::select('id','name','alias','menu')->get()->toArray();
		return view('admin.newscate.add',compact('parent'));
	}
	
	public function postAdd(CateRequest $request) {
		$cate = new Cate();
		$cate->name 		= $request->txtCateName;
		$cate->alias 		= changeTitle($request->txtCateName);
		$cate->order 		= $request->txtOrder;
		$cate->parent_id 	= $request->sltParent;;
		$cate->keywords 	= $request->txtKeywords;
		$cate->description 	= $request->txtDescription;
		$cate->save();
		return redirect()->route('admin.newscate.list')->with(['flash_level'=>'success','flash_message'=>'Success!! Complete Add Category']);
	}
	public function getDelete($id){
		$parent = Cate::where('parent_id',$id)->count();
		if($parent == 0) {
			$cate = Cate::find($id);
			$cate->delete($id);
			return redirect()->route('admin.newscate.list')->with(['flash_level'=>'success','flash_message'=>'Success!! Complete Delete Category']);
		}
		else {
			echo "<script type='text/javascript'>
					alert('Sorry! You can not delete this category!');
					window.location = '";
						echo route('admin.newscate.list');
					echo "';
				  </script>";
		}		
		
	}
	public function getEdit($id){
		$data = Cate::findOrFail($id)->toArray();
		$parent = Cate::select('id','name','parent_id')->get()->toArray();
		return view('admin.newscate.edit',compact('parent','data'));
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
		return redirect()->route('admin.newscate.list')->with(['flash_level'=>'success','flash_message'=>'Success!! Complete Edit Category']);
	}
}
