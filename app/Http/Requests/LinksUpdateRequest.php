<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinksUpdateRequest extends FormRequest
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
            'link_title' => 'required',
            'link_url' => 'required|url',
            'link_desc' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'link_title.required' => '链接标题不能为空',
            'link_url.required' => '链接网址不能为空',
            'link_url.url' => '链接网址格式不正确',
            'link_logo.required' => '链接logo不能为空',
            'link_desc.required' => '链接描述不能为空',
        ];
    }
}
