<?php
/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/14
 * Time: 16:31
 */

namespace app\admin\controller;
use think\Controller;
use think\Session;

//过滤器
class Base extends Controller
{
    public function _initialize()
    {

//        dump(session('AdminUser'));die();
       if(!session('AdminUser')){
           $this->error('请登录后台','login/login');
       }


    }
}