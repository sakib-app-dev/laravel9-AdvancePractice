<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        
        return [
            'title' => 'required|unique:products|max:255|min:3',
            'image' => 'required|mimes:png,jpg,jpeg,gif',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'title.unique' => 'DB te ace new kisu dew..',
        ];
    }
}
