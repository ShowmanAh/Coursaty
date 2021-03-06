<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoursesRequest extends FormRequest
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
            'price' => 'required'
        ];
    }
    public function messages(){
        return [
            'image.required_without'=> '   الصوره مطلوبه ',
            'name.required'=> '  الاسم مطلوب ',
            'price.required' => 'السعر مطلوب',

        ];
    }
}
