<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserChangepwdRequest extends Request {

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
            // "password" => ['required','min:8','max:16'],
            "newpassword" => ['required','min:8','max:16','confirmed'],
		];
	}

}
