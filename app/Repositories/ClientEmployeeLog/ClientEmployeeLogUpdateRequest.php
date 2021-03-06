<?php namespace App\Repositories\ClientEmployeeLog;

use App\Http\Requests\Request;

/**
 * Validation rules that are used when we try to update an ClientEmployeeLog entity via api request
 */
class ClientEmployeeLogUpdateRequest extends Request {

	protected $message = 'Request parameters for ClientEmployeeLog are not valid.';

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */

	public function rules()
	{
		return [
            // laravel validation
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
