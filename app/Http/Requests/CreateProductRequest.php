<?php namespace fooCart\Http\Requests;

use fooCart\Http\Requests\Request;

class CreateProductRequest extends Request {

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
            'sku' => 'required',
            'manufacturer_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'name' => 'required',
            'active' => 'required|numeric',
            'start' => 'required|numeric'
		];
	}

}
