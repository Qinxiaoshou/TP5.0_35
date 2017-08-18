<?php

use app\admin\controller\Base;
use app\admin\model\Blog;
use think\Db;
use think\Image;
use think\Request;

/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/14
 * Time: 16:50
 */



class Updateblog extends Base
{


    /**
     * 进入更新blog信息界面
     *
     */
    public function  updatepage($tid){
        $list = Blog::where('tid','=' ,$tid)->select();
        $this->assign('list',$list);
        return $this->fetch(); //以当前方法名updatepage找到名为updatepage.html的界面并跳转和带数据过去
    }
    /**
     * 修改博客
     */
    public function  update(Request $request,$tid){
//         dump(input('post.blogimg'));die();
        // 获取表单上传文件
        $file = $request->file('newblogimg');
        if($file !==null) {
            if (true !== $this->validate(['newblogimg' => $file], ['newblogimg' => 'require|image'])) {
                $this->error('请选择图像文件');
            } else {
                $image = Image::open($file); //打开图片
                $image->thumb(100, 100, 1); //缩略图片
                // 保存图片（以当前时间戳）
                $saveName = $request->time() . '.png';
                $image->save(ROOT_PATH . 'public/uploads/' . $saveName);

                //删除服务器中的修改前的图片
                unlink(ROOT_PATH . 'public' . input('post.blogimg'));

                // 更新记录
                Db::table('blog')
                    ->where('tid', $tid)
                    ->update(['title' => input('post.title'),
                        'author' =>input('post.author') ,
                        'content' =>input('post.content'),
                        'blogimg'=>'/uploads/'.$saveName,
                        'update_time'=>date("Y-m-d H:i:s")]);

                $this->success('修改博客成功','blogc/manageblog');
            }
        }else{
            // 更新记录
            Db::table('blog')
                ->where('tid', $tid)
                ->update(['title' => input('post.title'),
                    'author' =>input('post.author') ,
                    'content' =>input('post.content'),
                    'update_time'=>date("Y-m-d H:i:s")]);

            $this->success('修改博客成功','blogc/manageblog');
        }



    }

}