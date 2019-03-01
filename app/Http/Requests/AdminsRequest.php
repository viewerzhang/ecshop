<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminsRequest extends FormRequest
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
            'upic' => 'required',
            'uname' => 'required',
            'upwd' => 'required',
            'rupwd' => 'required|same:upwd',
            'group' => 'required',
            'admin_phone' => 'required',
            'admin_email' => 'required|email'
        ];
    }

    
    public function messages()
    {
        return [
            'upic.required' => '用户必须要有头像',
            'uname.required' => '用户名为必填项',
            'rupwd.same' => '两次密码不一致',
            'upwd.required' => '密码为必填项',
            'rupwd.required' => '确认密码为必填项',
            'group.required' => '用户组为必填项',
            'admin_phone.required' => '管理员手机为必填项',
            'admin_email.required' => '管理员邮箱为必填项',
            'admin_email.email' => '管理员邮箱填写错误邮箱'
        ];
    }
}
