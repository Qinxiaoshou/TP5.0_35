<?php
namespace app\admin\controller;


/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/14
 * Time: 19:08
 */



//登出
class Logout extends  Base
{
    public function logout(){
        session("AdminUser",null);
        $this->success('退出博客后台成功','login/login');
    }
}