<?php
/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/14
 * Time: 20:38
 */

namespace app\before\controller;


use app\before\model\Blog;
use think\Controller;

class Ablogshow extends Controller
{
    public function ablogshow($title){
        //user_id=1 是超级管理员id，就行下面的1,
        $list = Blog::where('title','=' ,$title)->select();
        $this->assign('list',$list);
        $this->assign('count', count($list));
        return $this->fetch('blogc/blog');
    }
}