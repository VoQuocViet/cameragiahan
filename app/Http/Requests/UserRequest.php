<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'txtUser' => 'required|unique:users,username',
			'txtPass' => 'required',
			'txtRePass' => 'required|same:txtPass',
			'txtEmail' => 'required|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/'
		];
	}
	public function messages(){
		return [
			'txtUser.required'	=> "Please enter Username",
			'txtUser.unique'	=> "User is exists",
			'txtPass.required'	=> "Please enter Password",
			'txtRePass.required'	=> "Please enter Re-Password",
			'txtRePass.same:txtPass'	=> "Two Password don\'t match!",
			'txtEmail.required'	=> "Please enter Email",
			'txtEmail.regex'	=> "Email error syntax",
		];
	}

}
