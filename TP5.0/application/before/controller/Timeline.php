<?php
/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/14
 * Time: 20:24
 */

namespace app\before\controller;


use app\before\model\Blog;
use think\Controller;

class Timeline extends Controller
{
    public function timeline(){
        $list = Blog::where('user_id','=' ,1)->select();//查找user_id=1的数据意思
        $this->assign('list',$list);
        $this->assign('count', count($list));
        return $this->fetch('blogc/timeline');
    }
}