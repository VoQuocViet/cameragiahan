<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request {

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
			'sltParent' => 'required',
			'txtName' => 'required|unique:products,name',
			'fImages' => 'required'
		];
	}
	public function messages() {
		return [
			'sltParent.required' => 'Please enter Category!',
			'txtName.required' => 'Please enter Name Product!',
			'txtName.unique' => 'Name Product is exist!',
			'fImages.required' => 'Please choose Image!',
			'fImages.image' => 'This file is not Image!'
		];
	}

}
