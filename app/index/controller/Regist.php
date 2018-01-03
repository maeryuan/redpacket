<?php

namespace app\index\controller;

use think\Controller;
use think\View;
use app\index\model\User;

class Regist extends Controller {
    #渲染模板

    public function index() {

        $view = new View(); //实例化一个View对象
        //return $view->fetch('regist');//app\index\view\register\register.html
        return $view->fetch(); //文件目录app\index\view\register\index.html
    }

    #用户注册
    public function regist() {
        #在前端使用js校验用户名是否存在，注册手机是否有效，密码是否合格
        #实例化user
        $user = new User();
        #接受前端提交表单的数据，将数据赋值给user对象的属性
        $user->real_name = input('post.real_name');
        $user->password = md5(input('post.password'));
        $user->mobile = input('post.mobile');       
       
        #提交数据库$user->save()，true 注册成功，else 注册失败
        if($user->save()){
            return $this->success('注册成功');
        }else{
            return $this->success('注册失败');
        }
    }

}
