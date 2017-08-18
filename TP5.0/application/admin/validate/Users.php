<?php
/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/13
 * Time: 23:30
 */

namespace app\admin\validate;


use think\Validate;

class Users extends Validate
{
    protected $rule = [
        'username'=>'require',
        'password'=>'require',

    ];

    protected $message = [
        'username.require' => '用户名不能为空',
        'password.require' => '密码不能为空',
    ];
}