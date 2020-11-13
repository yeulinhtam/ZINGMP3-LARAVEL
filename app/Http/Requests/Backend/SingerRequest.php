<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class SingerRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'status' => 'required'
        ];
    }

    public function messages(){
        return [
            // 'name.require' => 'Singer name is required!',
            // 'description' => 'Description is required!',
            // 'image.required' => 'File image is required!',
            // 'image.max' => 'File size is greater than 2MB',
            // 'image.mimes' => 'File extension not allowed(jpg,png,gif)',
            // 'status.required' => 'Status is required!'
        ];
    }
}
