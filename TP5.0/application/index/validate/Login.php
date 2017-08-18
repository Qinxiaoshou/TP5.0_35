<?php
/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/8
 * Time: 15:41
 */

namespace app\index\validate;


use think\Validate;

class Login extends Validate
{
    protected $rule = [
        'username' => 'require|max:25|min:4',
        'email' => 'email',
        'password' => 'require|max:25|min:4',
        'repassword' => 'repassword'
    ];

    protected $message = [
        'username.require' => '用户名必须',
        'username.max' => '用户名最多不能超过25个字符',
        'username.min' => '用户名最少4个字符',
        'password.require' => '密码必须',
        'password.min' => '密码长度至少4位',
        'email' => '邮箱格式错误',
        //'repassword.require' => '确认密码必须',
        'repassword.confirm' => '两次密码必须一致'
    ];

}