<?php

#使用模型删除数据

namespace app\index\controller;

use think\Controller;
use app\index\model\User;

class Index extends Controller {

    public function index() {
        #访问app\index\view\index.html  

     #静态方法User::destroy三种方式
     #一User::destroy(1)/直接使用主键id的值
     #二User::destroy(['id'=>2])/使用数组[''=>'']
     #三使用闭包函数
        $res = User::destroy(function($query){
            $query->where("id","<",5);
        });
       # get()获取数据，直接执行delete
        $userModel = User::get(7);
        $res = $userModel->delete();
        
    #User::where()->delete()
      $res = User::where("id","<","8")->delete();
        dump($res);
        return $this->fetch();
    }

}
