<?php
namespace app\api\controller;
use app\index\model\News;
use think\Controller;
use think\Db;
use think\Url;
use app\index\model\Users;
use think\Validate;
class User extends Controller
{
    
 // 获取用户信息
    public function test32($id = 0)
    {
        // 官网案例
//        $user = Rigest::get($id);
//        if ($user) {
//            return json($user);
//        } else {                        
//            return json(['error' => '用户不存在'], 404);            
//        }
//        // 我们使用
//        $user = Rigest::get($id);
//        if ($user) {
//            return json(array(
//                'status' => 1,
//                'msg'    => '查询成功',
//                'data'   => $user,
//            ));
//        } else {
//            return json(array(
//                'status' => -1,
//                'msg'    => '用户不存在',
//                'data'   => '',
//            ));
//        }
//
//        // 我们使用 手机api
//        $news = News::get($id);
//        if ($news) {
//            return json(array(
//                'status' => 1,
//                'msg'    => '查询成功',
//                'data'   => $news,
//            ));
//        } else {
//            return json(array(
//                'status' => -1,
//                'msg'    => '用户不存在',
//                'data'   => '',
//            ));
//        }



        //模拟提交测试
        $author = input('post.author');
        $news = News::get(['author'=>$author]);
        if ( $news) {
            return json(array(
                'status' => 1,
                'msg'    => '查询成功',
                'data'   =>  $news,
            ));
        } else {
            return json(array(
                'status' => -1,
                'msg'    => '用户不存在',
                'data'   => '',
            ));
        }
//         //模拟提交测试
//        $nickname = input('post.nickname');
//        $email    = input('post.email');
//        $user = Rigest::get(['nickname'=>$nickname, 'email'=>$email]);
//        if ($user) {
//            return json(array(
//                'status' => 1,
//                'msg'    => '查询成功',
//                'data'   => $user,
//            ));
//        } else {
//            return json(array(
//                'status' => -1,
//                'msg'    => '用户不存在',
//                'data'   => '',
//            ));
//        }
    }
}
