<?php
namespace app\admin\controller;
use app\admin\model\Blog;
use think\Image;
use think\Request;

/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/14
 * Time: 17:04
 */



class Addblog extends Base
{

    //进入后台添加博客界面
    public function addblog(){
        return view("blogc/addblog"); //根据当前方法名寻找admin下该方法名的html文件并打开
    }

    /**
     * 添加博客
     */
    public function  add(Request $request){
        $blog = new Blog();
        if(!request()->isPost()){
//            $this->redirect('blogc/blogc');
        }
        // 获取表单上传文件
        $file = $request->file('blogimg');
        if (true !== $this->validate(['blogimg' => $file], ['blogimg' => 'require|image'])) {
            $this->error('请选择图像文件');
        }else{
            $image = Image::open($file); //打开图片
            $image->thumb(100, 100, 1); //缩略图片
            // 保存图片（以当前时间戳）
            $saveName = $request->time() . '.png';
            $image->save(ROOT_PATH . 'public/uploads/' . $saveName);
        }
        //默认user_id是 1
        $blog['user_id']=1;

        $blog['blogimg']=  '/uploads/'.$saveName;
        $blog->title=input('post.title');
        $blog->author=input('post.author');
        $blog->create_time=date("Y-m-d H:i:s");// 当前时间年月日 时分秒
        $blog->content=input('post.content');
//        dump($blogc);die;
        $data=[
            'user_id'=>$blog->user_id,
            'blogimg'=>$blog->blogimg,
            'title'=>$blog->title,
            'author'=>$blog->author,
            'create_time'=>$blog->create_time,
            'content'=>$blog->content
        ];
//        dump($data);die;
        if (!$blog->allowField(true)->validate(true)->save($data)) {
            exit(json_encode(array('status' => 0, 'msg' => $blog->getError())));
        }
        $this->success('添加博客成功','addblog/addblog');

    }
}