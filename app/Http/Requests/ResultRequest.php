<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResultRequest extends FormRequest
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
            'cls' => 'required|numeric',
			'subject' => 'required',
            'studentid' => 'required|numeric',
            'firstterm' => 'required|numeric',
			'secondterm' => 'required|numeric',
            'finalterm' => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'cls.required' => 'Please Select Class!',
			'subject.required' => 'Subject Cannot be Empty!',
            'studentid.required' => 'Student ID Cannot be Empty!',
			'firstterm.required' => 'First Term Result Cannot be Empty!',
            'secondterm.required' => 'Second Term Result Cannot be Empty!',
            'finalterm.required' => 'Final Term Result Cannot be Empty!',
            'cls.numeric' => 'Only numeric Allowed in Class!',
            'studentid.numeric' => 'Only numeric Allowed in Student ID!',
            'firstterm.numeric' => 'Only numeric Allowed in First Term Box!',
            'secondterm.numeric' => 'Only numeric Allowed in Second Term Box!',
            'finalterm.numeric' => 'Only numeric Allowed in Final Term Box!'
        ];
    }
}
