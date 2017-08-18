<?php
/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/14
 * Time: 19:23
 */
namespace app\before\controller;
use app\before\model\Blog;
use think\Controller;
//展示blog信息
class Showblog extends Controller
{
////        进入博客首页
//        public function index(){
//            return view("blogc/index");
//        }


        public function showblog(){
            //user_id=1 是超级管理员id，就行下面的1,
            // 查询状态为1的用户数据 并且每页显示10条数据
            $list = Blog::where('user_id',1)->paginate(2);
            // 获取分页显示
            $page = $list->render();
            // 模板变量赋值
            $this->assign('list', $list);
            $this->assign('page', $page);
            return $this->fetch('blogc/index');
        }
}