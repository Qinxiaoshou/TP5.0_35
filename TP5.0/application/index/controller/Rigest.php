<?php
/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/8
 * Time: 14:08
 */

namespace app\index\controller;
use app\index\model\Users;
use think\Controller;
use think\Db;

class Rigest extends Controller
{
    //创建注册界面
    public function rigest(){
        return view();
    }

    //验证和添加用户
    public function add(){
        $users = new Users();
        if ($users->allowField(true)->validate(true)->save(input('get.'))) {
            return '用户[ ' . $users->username . ':' . $users->id . ' ]新增成功';
        } else {
            return $users->getError();
        }

    }
    //登录界面
    public function index(){
        //验证是否登录成功
        if (Session::has('userinfo')) {
            $this->redirect('index/index');
        }
        return $this->fetch();//按照系统的默认规则定位模板文件到：[模板文件目录]/当前控制器名（小写+下划线）/当前操作名（小写）.html，即view/login_index.html
    }

    //登录操作
    public function logining(){
        return view("user/login");
    }
    public function login(){
        if(!request()->isPost()){
            $this->redirect('index/index');
        }
        $name = input('post.username');
        $passwd = input('post.password');
//        $captcha = input('post.captcha');

        $data1 = [
            'username'=>$name,
            'password'=>$passwd
        ];
        $validate = \think\Loader::validate('Login');
        if(!$validate->check($data1)){//验证数据
            exit(json_encode(array('status' => 0, 'msg' => $validate->getError())));
        }

        if (!$name || !$passwd) {
            exit(json_encode(array('status' => 0, 'msg' => '用户名和密码不能为空')));
        }

//        if(!captcha_check($captcha)){
//            exit(json_encode(array('status' => 0, 'msg' => '请输入正确的验证码')));
//        }

            $info = Db::name('users')->where('username',$name)->find();
//        $md5_passwd = md5(md5(trim($passwd)).$info['encrypt']);

//        if (!$info || $md5_passwd != $info['password']) {
//            exit(json_encode(array('status' => 0, 'msg' => '用户名或密码错误，请重新输入')));
//        }
        if (!$info||$passwd!= $info['password']) {
            exit(json_encode(array('status' => 0, 'msg' => '用户名或密码错误，请重新输入')));
        }

//        if ($info['islock'] == 1) {
//            exit(json_encode(array('status' => 0, 'msg' => '您的账户已被锁定，请联系超级管理员')));
//        }

        //写入日志
        $data['ip'] = $login['loginip'] = request()->ip();
        $data['userid'] = $info['id'];
        $data['datetime'] = $login['logintime'] = time();
//        Db::name('log')->insert($data);
//
//        Db::name('admin')->where('id',$info['id'])->update($login);

        //登入成功，存入session
//        Session::set('userinfo',['name' => $name,'id' => $info['id'],'login_time' => time()]);
//
        exit(json_encode(array('status' => 1, 'msg' => '登录成功', 'url' => url('user/rigest'))));

    }

}