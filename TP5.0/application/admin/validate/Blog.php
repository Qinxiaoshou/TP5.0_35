<?php
namespace app\admin\validate;
use think\Validate;

/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/11
 * Time: 7:52
 */

class Blog extends Validate
{

    protected $rule = [
//        'username' => 'require|max:25|min:4',
//        ['webname', 'require|min:5', '昵称必须|昵称不能短于5个字符'],
        'title' => 'require',
        'author' => 'require',
        'content'=>'require',
        'blogimg'=>'require',
        'create_time'=>'require',

    ];

    protected $message = [
//        'username.require' => '用户名必须',
//        'username.max' => '用户名最多不能超过25个字符',
//        'username.min' => '用户名最少4个字符',
        'title.require' => '标题不能为空',
        'author.require' => '作者不能为空',
        'content.require'=>'博客内容不能为空',
        'blogimg.require' => '图片路径不能为空',
        'create_time.require' => '创作时间不能为空',
    ];
}