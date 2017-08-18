<?php
/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/6
 * Time: 21:01
 */

namespace app\index\validate;


use think\Validate;

class Site extends validate
{
    // 验证规则
    protected $rule = [
        ['webname', 'require|min:5', '昵称必须|昵称不能短于5个字符'],
    ];


}