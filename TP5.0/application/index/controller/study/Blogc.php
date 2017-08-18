<?php
/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/10
 * Time: 18:45
 */

namespace app\admin\controller;

use app\admin\model\Blog;
use app\admin\model\Users;
use think\Controller;
use think\Db;
use think\Image;
use think\Request;
use think\Session;


class Blogc extends Controller
{

    //----------------------------界面跳转开始---------------------------------


//    /**
//     * 进入到管理博客界面
//     */
//    public function manageblog(){
//        //user_id=1 是超级管理员id，就行下面的1,
//        $list = Blog::where('user_id','=' ,1)->select();//查找user_id=1的数据意思
//        $this->assign('list',$list);
//        $this->assign('count', count($list));
//        return $this->fetch();
//
//    }

//    /**
//     * 进入更新blog信息界面
//     *
//     */
//     public function  updatepage($tid){
//         $list = Blog::where('tid','=' ,$tid)->select();
//         $this->assign('list',$list);
//         return $this->fetch(); //以当前方法名updatepage找到名为updatepage.html的界面并跳转和带数据过去
//     }

    //----------------------------界面跳转结束---------------------------------


    //-----------------------------数据库操作----------------------------------
//    /**
//     * 添加博客
//     */
//    public function  add(Request $request){
//        $blog = new Blog();
//        if(!request()->isPost()){
////            $this->redirect('blogc/blogc');
//        }
//         // 获取表单上传文件
//        $file = $request->file('blogimg');
//        if (true !== $this->validate(['blogimg' => $file], ['blogimg' => 'require|image'])) {
//            $this->error('请选择图像文件');
//        }else{
//            $image = Image::open($file); //打开图片
//            $image->thumb(100, 100, 1); //缩略图片
//            // 保存图片（以当前时间戳）
//            $saveName = $request->time() . '.png';
//            $image->save(ROOT_PATH . 'public/uploads/' . $saveName);
//        }
//        //默认user_id是 1
//        $blog['user_id']=1;
//
//        $blog['blogimg']=  '/uploads/'.$saveName;
//        $blog->title=input('post.title');
//        $blog->author=input('post.author');
//        $blog->create_time=date("Y-m-d H:i:s");// 当前时间年月日 时分秒
//        $blog->content=input('post.content');
////        dump($blogc);die;
//        $data=[
//            'user_id'=>$blog->user_id,
//            'blogimg'=>$blog->blogimg,
//            'title'=>$blog->title,
//            'author'=>$blog->author,
//            'create_time'=>$blog->create_time,
//            'content'=>$blog->content
//        ];
////        dump($data);die;
//        if (!$blog->allowField(true)->validate(true)->save($data)) {
//            exit(json_encode(array('status' => 0, 'msg' => $blog->getError())));
//        }
//        $this->success('添加博客成功','blogc/addblog');
//
//    }
//    /**
//     * 显示博客表数据界面
//     */
//
//    public function index(){
//        //user_id=1 是超级管理员id，就行下面的1,
//        $list = Blog::where('user_id','=' ,1)->select();//查找user_id=1的数据意思
//        $this->assign('list',$list);
//        $this->assign('count', count($list));
////        dump($list); die();
//        return $this->fetch(); //以当前方法名index找到名为index.html的界面并跳转和带数据过去
//    }



//    /**
//     * 删除博客
//     */
//     public function delblog($tid){
//        // 删除数据库数据
//        Db::table('blog')
//            ->where('tid', $tid)
//            ->delete();
//         $this->success('删除博客成功','blogc/manageblog');
//     }
//     /**
//      * 修改博客
//      */
//     public function  updateblog(Request $request,$tid){
////         dump(input('post.blogimg'));die();
//         // 获取表单上传文件
//         $file = $request->file('newblogimg');
//         if($file !==null) {
//             if (true !== $this->validate(['newblogimg' => $file], ['newblogimg' => 'require|image'])) {
//                 $this->error('请选择图像文件');
//             } else {
//                 $image = Image::open($file); //打开图片
//                 $image->thumb(100, 100, 1); //缩略图片
//                 // 保存图片（以当前时间戳）
//                 $saveName = $request->time() . '.png';
//                 $image->save(ROOT_PATH . 'public/uploads/' . $saveName);
//
//             //删除服务器中的修改前的图片
//             unlink(ROOT_PATH . 'public' . input('post.blogimg'));
//
//             // 更新记录
//             Db::table('blog')
//                 ->where('tid', $tid)
//                 ->update(['title' => input('post.title'),
//                     'author' =>input('post.author') ,
//                     'content' =>input('post.content'),
//                     'blogimg'=>'/uploads/'.$saveName,
//                     'update_time'=>date("Y-m-d H:i:s")]);
//
//             $this->success('修改博客成功','blogc/manageblog');
//             }
//         }else{
//             // 更新记录
//             Db::table('blog')
//                 ->where('tid', $tid)
//                 ->update(['title' => input('post.title'),
//                     'author' =>input('post.author') ,
//                     'content' =>input('post.content'),
//                     'update_time'=>date("Y-m-d H:i:s")]);
//
//             $this->success('修改博客成功','blogc/manageblog');
//         }
//
//
//
//     }


//
//     /**
//      * 登录判断和session存储还有cookied存储+验证码操作
//      */
//
//     public function  logincheck($code=''){
//         $captcha = new \think\captcha\Captcha();
//         if (!$captcha->check($code)) {
//             $this->error('验证码错误');
//         } else {
////             $this->success('验证码正确');
//
//             $users = new Users();
//             $username = input('post.username');
//             $password= input('post.password');
//             $data = [
//                 'username'=>$username,
//                 'password'=>$password
//             ];
//
//
//             if (!$users->allowField(true)->validate(true)->save($data)) {
//                 exit(json_encode(array('status' => 0, 'msg' => $users->getError())));
//             }else{
//                  $user = Users::get(['username' => $username]);
//                 if(($username==$user['username'])&&($password==$user['password'])){
//
//                     //写入日志
//                     $data['ip'] = $login['loginip'] = request()->ip();
//                     $data['userid'] = $user['user_id'];
//                     $data['datetime'] = $login['logintime'] = time();
//                    // Db::name('log')->insert($data);
//                    // Db::name('admin')->where('id',$info['id'])->update($login);
//                     //登入成功，存入session
//                     Session::set('AdminUser',['username' => $user['username'],'user_id' => $user['user_id'],'login_time' => time()]);
////                     // 取值（当前作用域）
////                     Session::get('AdminUser');
////                     dump( Session::get('AdminUser'));die();
//                     $this->success('个人博客欢迎您，'.$user['username'],'blogc/index');
//                 }
//             }
//         }
//
//
//
//     }

}