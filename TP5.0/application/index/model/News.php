<?php
namespace app\index\model;
use think\Model;

class News extends Model {
      // // 类型转换huizhou.test
      //  protected $type = array(
      //              'hits' => 'timestamp:Y-m-d H s', 
      //              'source' => 'serialize',	
      //  );   

	// author查询
   protected function scopeAuthor($query) // ,$e
   {
       $query->where('author', 'unusual米22');
       //$query->where('email', $e);        
   }
   // 查询信息
   protected function scopeHits($query){
   	   $query->where('hits',2333);
   }
}