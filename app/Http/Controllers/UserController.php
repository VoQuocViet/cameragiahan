<?php 
namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\User;
use Hash;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller {

	public function getList() {
		$user = User::select('id','username','level')->orderBy('id','DESC')->get()->toArray();
		return view('admin.user.list', compact('user'));
	}
	public function getAdd() {
		return view('admin.user.add');
	}
	public function postAdd(UserRequest $request) {
		$user = new User();
		$user->username = $request->txtUser;
		$user->password = Hash::make($request->txtPass);
		$user->email = $request->txtEmail;
		$user->level = $request->rdoLevel;
		$user->remember_token = $request->_token;
		$user->save();
		
		return redirect()->route('admin.user.list')->with(['flash_level'=>'success','flash_message'=>'Success!! Complete Add User!']);
	}
	public function getDelete($id) {
		$user_current_login = Auth::user()->id;
		$user = User::find($id);
		if(($id == 2) || ($user_current_login != 2 && $user["level"] == 1)){
			return redirect()->route('admin.user.list')->with(['flash_level'=>'danger','flash_message'=>'Sorry! You cannot detete User!']);
		} else {
			$user->delete($id);
			return redirect()->route('admin.user.list')->with(['flash_level'=>'success','flash_message'=>'Success!! Complete Delete User!']);
		}
	}
	public function getEdit($id) {
		$data = User::find($id);
		// Kiểm soát cho  phép sửa, có 2 trường hợp cấm sửa
		// 1. Đăng nhập là admin thường mà sửa Super Admin
		// 2. Đăng nhập là admin thường mà sửa admin mà admin không phải là chính mình
		if((Auth::user()->id != 2) && ($id == 2 || ($data["level"] == 1 && (Auth::user()->id != $id)))){
			return redirect()->route('admin.user.list')->with(['flash_level'=>'danger','flash_message'=>'Sorry! You cannot edit User!']);
		}
		return view('admin.user.edit', compact('data','id'));
	}
	public function postEdit($id, Request $request) {
		$user = User::find($id);
		if($request->input('txtPass')){
			$this->validate($request, 
				[ 'txtRePass' => 'same:txtPass' ],
				[ 'txtRePass.same' => 'Password and RePassword do not match' ]
			);
			$pass = $request->input('same:txtPass');
			$user->password = Hash::make($pass);
		}
		$user->email = $request->txtEmail;
		$user->level = $request->rdoLevel;
		$user->remember_token = $request->_token;
		$user->save();
		return redirect()->route('admin.user.list')->with(['flash_level'=>'success','flash_message'=>'Success!! Complete Update User!']);
	}
}
