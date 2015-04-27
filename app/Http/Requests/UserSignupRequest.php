<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserSignupRequest extends Request {

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
			"email" => ['required','email','unique:users'],
            // "mobile" => ['required','min:11','max:11'],
            "password" => ['required','min:6','max:16','confirmed'],
            // "verify_code" => ['required','digits:4'],
		];
	}

}
