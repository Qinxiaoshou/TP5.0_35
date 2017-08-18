<?php
/**
 * Created by PhpStorm.
 * User: huizhou
 * Date: 2017/8/14
 * Time: 20:34
 */

namespace app\before\controller;


use think\Controller;

class About extends Controller
{
    public function about(){
            return view("blogc/about");
        }

}