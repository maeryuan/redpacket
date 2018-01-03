<?php

#使用模型更新数据

namespace app\index\controller;

use think\Controller;
use app\index\model\User;

class Index extends Controller {

    public function index() {
        #访问app\index\view\index.html  

     #Model类提供的静态方法update/不能用于判断数据是否被更新
//        $res =User::update([      //一个参数
//            'id'=>1,
//            'username'=>'xixi'
//        ]); 
//        $res =User::update([        //第二个参数,有where的作用一样，是条件
//            'username'=>'xixi'
//        ],['id'=>2]); //第二个参数是数组，更新id为2的这条信息的username值
//       返回值为对象
//         $res =User::update([
//            'username'=>'xixi'
//        ],  function($query){       //第二个参数是一个闭包函数
//            $query->where("id","<",5);
//        }); 
//        
        #建议使用这种方式
//        ##where()->update()返回值为被影响的数据行数，
//        $res = User::where("id","<",6)
//                ->update([
//                    'username'=>'lili'
//                ]);
        #对模型属性的操作
//       # $userModel = User::get(1);
//        $userModel->username ='123';
//        $userModel->email ="123@qq.com";
//        $res=$userModel->save();
//        dump($res);
//         
         ##建议使用
       # $userModel = new User;
//        $res = $userModel->save([
//            'email'=>'222@qq.com'
//        ],function($query){
//            $query->where("id","<",5);
//        });
//       #不建议使用
//        $userModel = new User;
//        $userModel->saveAll([
//            ['id'=>1,'username'=>1],
//            ['id'=>2,'username'=>2]
//        ]);
//        dump($res);
        return $this->fetch();
    }

}
