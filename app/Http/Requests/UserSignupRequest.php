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
			"username" => ['required', 'min:3', 'max:16','unique:users', 'alpha_dash'],
            // "mobile" => ['required','min:11','max:11'],
            "password" => ['required','min:8','max:16','confirmed'],
            "name" => ['required'],
            "contact_info" => ['required'],
            "company_name" => ['required'],
            "legal_person" => ['required'],
            "reg_address" => ['required'],
            "office_address" => ['required'],
            "staff_num" => ['required'],
            "agreement" => ['accepted'],
            // "verify_code" => ['required','digits:4'],
		];
	}

}
