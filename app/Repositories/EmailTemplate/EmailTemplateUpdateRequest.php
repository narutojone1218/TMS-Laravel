<?php namespace App\Repositories\EmailTemplate;

use App\Http\Requests\Request;

/**
 * Validation rules that are used when we try to update an EmailTemplate entity via api request
 */
class EmailTemplateUpdateRequest extends Request {

	protected $message = 'Request parameters for EmailTemplate are not valid.';

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */

	public function rules()
	{
		return [
            // laravel validatoins here
		];
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}
}
