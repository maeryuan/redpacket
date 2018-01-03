<?php

#使用模板添加数据

namespace app\index\controller;

use think\Controller;
use app\index\model\User;

class Index extends Controller {

    public function index() {
        #访问app\index\view\index.html  
        
        
        #create([参数一],参数二)返回的是对象
        #参数一：是一个要插入数据的数组；
        #参数二是用来控制添加方式：true->排除不存在的字段值，
        #['username','email']->设定要添加的字段
//        $res = User::create([
//            'username'=>'imooc',
//            'password'=>  md5('imooc'),
//            'email'=>'imooc@qq.com',
//            'num'=>100,
//            'demo'=>123
//        ],['username','email']);
//          dump($res->toarray());//返回的是一个user对象
//       
//       
//        #  #save()返回的是影响行数
//        $userModel = new User;
//        $userModel->username = '17771258';
//        $userModel->email = '17771258@qq.com';
//        $userModel->save();
//        
//        $userModel = new User;
//        $res = $userModel->allowField('username')//alloeField被插入的字段，其他字段过滤
//                ->save([
//                    'username'=>'imooc1',
//                    'password'=>  md5('imooc1'),
//                    'demo'=>'123'
//                ]);dump($res);//返回影响的行数
//         // dump($userModel->id);//获取自增id
//       
//       
        #  #saveAll()参数接收一个数组，返回值是数组，并且数组的每一位是一个对象
        $userModel=new User;
        $res= $userModel->saveAll([
           ['email'=>'177771258@qq.com' ],
            ['email'=>'177771358@qq.com']
        ]);
        foreach ($res as $val){
            dump($val->toarray());
        }
      
       dump($res);//返回一个数组，数组的每一位是一个userModel对象
        return $this->fetch();
    }

}
