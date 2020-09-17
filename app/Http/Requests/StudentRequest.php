<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'image' => 'required_without:id|mimes:jpg,jpeg,png',
            'name' => 'required',
            'email'=> 'required|unique:students,email',
            'password' => 'required',

        ];

    }
    public function messages()
    {
        return [
            'image.required' => 'الصوره مطلوبه',
            'name.required' => 'الاسم مطلوب',
            'email.required'=> ' البريد الاكترونى مطلوب ',
            'email.email'=> 'ادخل بريد الكترونى صالح',
            'password.required' => 'كلمه المرور مطلوبه',

        ];
    }
}
