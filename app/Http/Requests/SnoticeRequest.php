<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SnoticeRequest extends FormRequest
{
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
            'cls' => 'required',
			'sub' => 'required',
            'reason' => 'required',
			'message' => 'required'
        ];
    }

    public function messages(){
        return [
            'cls.required' => 'Please Select Class!',
			'sub.required' => 'Subject Cannot be Empty!',
            'reason.required' => 'Reason Cannot be Empty!',
			'message.required' => 'Message Cannot be Empty!'
        ];
    }
}
