<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SnoteRequest extends FormRequest
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
            'filename' => 'required'
        ];
    }

    public function messages(){
        return [
            'cls.required' => 'Please Select Class!',
			'sub.required' => 'Subject Cannot be Empty!',
			'filename.required' => 'Please upload File!'
        ];
    }
}
