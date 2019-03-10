<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscountRequest extends FormRequest
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
            'max' => 'required',
            'discount' => 'required',
            'content' => 'required',
            'dq_time' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '优惠券名字必须要填写哦',
            'max.required'  => '每人领取的最大数量必须要写哦',
            'discount.required'  => '优惠券金额必须要写哦',
            'content.required'  => '优惠卷简介必须要填哦',
            'dq_time.required'  => '到期时间没有填写',
        ];
    }
}
