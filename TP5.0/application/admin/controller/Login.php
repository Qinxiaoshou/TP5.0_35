<?php
/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/14
 * Time: 16:41
 */

namespace app\admin\controller;
use app\admin\model\Users;
use think\Controller;
use think\Session;

class Login extends Controller
{
    /**
     * 管理员进入登录界面
     */
    public function login(){
        return view("blogc/login");
    }
    /**
     * 登录判断和session存储还有cookied存储+验证码操作
     */

    public function  logincheck($code=''){
        $captcha = new \think\captcha\Captcha();
        if (!$captcha->check($code)) {
            $this->error('验证码错误');
        } else {
//             $this->success('验证码正确');

            $users = new Users();
            $username = input('post.username');
            $password= input('post.password');
            $data = [
                'username'=>$username,
                'password'=>$password
            ];


            if (!$users->allowField(true)->validate(true)->save($data)) {
                exit(json_encode(array('status' => 0, 'msg' => $users->getError())));
            }else{
                $user = Users::get(['username' => $username]);
                if(($username==$user['username'])&&($password==$user['password'])){

                    //写入日志
                    $data['ip'] = $login['loginip'] = request()->ip();
                    $data['userid'] = $user['user_id'];
                    $data['datetime'] = $login['logintime'] = time();
                    // Db::name('log')->insert($data);
                    // Db::name('admin')->where('id',$info['id'])->update($login);
                    //登入成功，存入session
                    Session::set('AdminUser',['username' => $user['username'],'user_id' => $user['user_id'],'login_time' => time()]);
//                     // 取值（当前作用域）
//                     Session::get('AdminUser');
//                     dump( Session::get('AdminUser'));die();
                    $this->success('个人博客欢迎您，'.$user['username'],'blogc/index');
                }
            }
        }



    }
}