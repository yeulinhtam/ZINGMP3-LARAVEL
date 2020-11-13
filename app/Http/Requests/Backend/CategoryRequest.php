<?php

namespace App\Http\Requests\Backend;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|unique:categories,name_category'
        ];
    }


    public function messages(){
        return [
            'name.required' => 'Please enter category name!',
            'name.unique' => 'Category name is not available!'
        ];
    }
}
