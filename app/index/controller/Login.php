<?php

namespace app\index\controller;

use think\Controller;
use think\View;
use app\index\model\UserMain;

class Login extends Controller {
    #进入登陆页面

    public function index() {

        return $this->fetch('login');
    }

    #登陆操作

    public function login() {
        #获取表单
        $real_name = input('post.real_name');
        $password = input('post.password');
        #根据表单信息查询是否存在该用户
        $user = UserMain::get([
                    'real_name' => $real_name,
                    'password' => $password
        ]);
        #验证
        if (!$user) {
            return $this->error('登录失败');
        } else {
            $user_id = $user->user_id;
            session('real_name', $real_name);
            session('user_id', $user_id);
            $this->success('登陆成功', 'home/home');
        }
    }

    #退出

    public function loginOut() {
        session('real_name', null);
        session('user_id', null);
        return $this->fetch('home/index');
    }

}
