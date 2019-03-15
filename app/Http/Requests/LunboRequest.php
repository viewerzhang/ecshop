<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LunboRequest extends FormRequest
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
            'lunbo_name' => 'required|max:255',
            'lunbo_desc' => 'required|max:255',
            'lunbo_link' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'lunbo_name.required' => '轮播图名称必填',
            'lunbo_desc.required'  => '轮播图描述必填',
            'lunbo_link.required'  => '链接地址必填'
        ];
    }
}
