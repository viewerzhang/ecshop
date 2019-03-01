<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'user_name' => 'required|regex:/^[a-zA-Z0-9]{6,16}$/',
            'password' => 'required|regex:/^[a-zA-Z0-9]{6,16}$/',
            'user_phone' => 'required|regex:/^1{1}[3456789]{1}[0-9]{9}$/',
            'yzm' => 'required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'user_name.required' => '请填写用户名',
            'user_name.regex' => '请输入6到16位用户名,仅可用数字和字母',
            'password.required' => '请填写密码',
            'password.regex' => '请输入6到16位密码,仅可用数字和字母',
            'user_phone.required' => '请填写手机号',
            'user_phone.regex' => '请填写正确手机号',
            'yzm.required' => '请填写验证码',
        ];
    }
}
