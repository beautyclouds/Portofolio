<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'name' => 'required|max:100',
            'number' => 'required|max:15',
            'provinsi' => 'required',
            'gender' => 'required',
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required'    => 'A Email is required',
            'name.required'    => 'A Name is required',
            'number.required'    => 'A Number is required',
            'provinsi.required'    => 'A Provinsi is required',
            'gender.required'    => 'A Gender is required',
            'message.required'    => 'A Message is required'
        ];
    }
}
