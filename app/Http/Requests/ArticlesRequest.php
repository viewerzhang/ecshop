<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticlesRequest extends FormRequest
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
            'art_title' => 'required|max:255',
            'art_desc' => 'required|max:255',
            'art_author' => 'required|max:255',
            'art_url' => 'required|max:255',
            'art_content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'art_title.required' => '文章标题必填',
            'art_desc.required'  => '文章描述必填',
            'art_author.required'  => '作者必填',
            'art_url.required'  => '外链网址必填',
            'art_content.required'  => '文章内容必填',
        ];
    }
}
