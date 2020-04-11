<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignRequest extends FormRequest
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
			'sbjid' => 'required',
			'teachername' => 'required'
        ];
    }

    public function messages(){
        return [
            'cls.required' => 'Please Select Class!',
			'sbjid.required' => 'Please Select Subject!',
			'teachername.required' => 'Please Select Teacher!'
        ];
    }
}
