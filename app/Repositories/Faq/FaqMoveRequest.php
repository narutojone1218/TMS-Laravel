<?php

namespace App\Repositories\Faq;

use App\Http\Requests\Request;

/**
 * Validation rules that are used when we try to create an Faq via api request
 */
class FaqMoveRequest extends Request {

    protected $message = 'Request parameters for Faq are not valid.';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'direction' => 'required|in:'.Faq::DIRECTION_UP.','.Faq::DIRECTION_DOWN,
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
