<?php
/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/15
 * Time: 12:36
 */

namespace app\before\controller;

//分页功能
use app\before\model\Blog;
use think\Controller;

class Paging extends Controller
{
    public function paging(){
        //user_id=1 是超级管理员id，就行下面的1,
        // 查询状态为1的用户数据 并且每页显示10条数据
        $list = Blog::where('user_id',1)->paginate(10);
        $this->assign('list',$list);
        $this->assign('count', count($list));
        return $this->fetch('blogc/index');
    }
}