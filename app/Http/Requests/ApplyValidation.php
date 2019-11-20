<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyValidation extends FormRequest
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
            'full_name' => 'required|min:5|string',
            'email' => 'required|email',
            'contact_no'=>'required|min:7|max:13',
            'areaOfInterest'=>'required',
            'coverLetter'=>'required',
            'expectation'=>'required',
            'internRequired'=>'required',
            'applyBy'=>'required',
            'earliest_date'=>'required',
        ];
    }
}
