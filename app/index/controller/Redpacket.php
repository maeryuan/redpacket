<?php

namespace app\index\controller;

use think\Controller;
use think\Db;

class Redpacket extends Controller{
    
   
    #展示所有红包信息
     public function index(){
          #连接数据库
        $db = Db::name('redpacket_model');
       $list=$db->select();
        
      // $this->assign("res",$res);
    /*  $list = [
           'user1'=>[
               'name'=>'xiao',
               'num'=>'123'
               ],
           'user2'=>[
               'name'=>'xi',
               'num'=>'3333'
               ],
           'user3'=>[
               'name'=>'imooc',
               'num'=>'17777'
               ]
       ];*/
       //dump($list);exit;
       $this->assign('list',$list);
       
       return $this->fetch();
    }

    
}

