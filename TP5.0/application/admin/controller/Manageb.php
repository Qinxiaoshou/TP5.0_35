<?php
/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/14
 * Time: 17:21
 */

namespace app\admin\controller;


use app\admin\model\Blog;

class Manageb extends Base
{
    /**
     * 进入到管理博客界面
     */
    public function manageblog(){
        //user_id=1 是超级管理员id，就行下面的1,
        $list = Blog::where('user_id','=' ,1)->select();//查找user_id=1的数据意思
        $this->assign('list',$list);
        $this->assign('count', count($list));
        return $this->fetch('blogc/manageblog');

    }
}