<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserSigninRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			"email" => ['required','email','unique:users'],
            // "phone_number" => ['required','min:3','max:16','unique:users'],
            "password" => ['required','min:6','max:16'],
            // "verify_code" => ['required','digits:4'],
		];
	}

}
