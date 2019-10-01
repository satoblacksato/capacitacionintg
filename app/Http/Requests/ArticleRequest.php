<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
           'name'=>'required|min:7',
           'description'=>'required|min:7|max:200',
           'category_id'=>'required|numeric|exists:categories,id',
           'resources'=>'required',
           'resources.*'=>'image|mimes:jpeg,png'
        ];
    }
}
