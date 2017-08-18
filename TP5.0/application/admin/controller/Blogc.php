<?php
namespace app\admin\controller;
use app\admin\model\Blog;

/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/14
 * Time: 17:03
 */



class Blogc extends Base
{



    /**
     * 显示博客表数据界面
     */

    public function index(){
        //user_id=1 是超级管理员id，就行下面的1,
        $list = Blog::where('user_id','=' ,1)->select();//查找user_id=1的数据意思
        $this->assign('list',$list);
        $this->assign('count', count($list));
//        dump($list); die();
        return $this->fetch();
    }

}