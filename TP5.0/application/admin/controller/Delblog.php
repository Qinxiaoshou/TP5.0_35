<?php
/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/14
 * Time: 17:22
 */

namespace app\admin\controller;


use think\Db;

class Delblog extends Base
{
    /**
     * 删除博客
     */
    public function delblog($tid){
        // 删除数据库数据
        Db::table('blog')
            ->where('tid', $tid)
            ->delete();
        $this->success('删除博客成功','manageb/manageblog');
    }
}