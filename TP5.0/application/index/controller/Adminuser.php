<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Site;

class Adminuser extends  Controller
{
       // 创建用户数据页面
    public function create()
    {
        return view();
       // return view("user/create");
    }

        // 新增用户数据
    public function add()
    {

        // 自动收集表单数据 input('post.')
        // 自动排除不相关字段
        // 自动校验非法字段
        // 自动生成 insert 语句 执行入库
//        return 'add()';
        $site= new Site();
        if ($site->allowField(true)->validate(true)->save(input('post.'))) {
            return '用户[ ' . $site->webname . ':' . $site->id . ' ]新增成功';
        } else {
            return $site->getError();
        }
    }
}