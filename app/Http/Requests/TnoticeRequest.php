<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TnoticeRequest extends FormRequest
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
            'teacherid' => 'required',
			'sub' => 'required',
			'message' => 'required'
        ];
    }

    public function messages(){
        return [
            'teacherid.required' => 'Please Select Teacher!',
			'sub.required' => 'Subject Cannot be Empty!',
			'message.required' => 'Message Cannot be Empty!'
        ];
    }
}
