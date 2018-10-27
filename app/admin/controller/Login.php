<?php

namespace app\admin\controller;

use app\admin\model\User;
use think\Controller;
class Login extends Controller {

    public function index() {
        return $this->fetch('login');
    }

    public function doLogin() {
        #获取表单
        $username = input('post.username');
        $password = md5(input('post.password'));
        #根据表单信息查询是否存在该用户
        $user = User::get([
                    'username' => $username,
                    'password' => $password
        ]);
        #验证
        if (!$user) {
            return $this->error('登录失败');
        } else {
            $id = $user->id;
            session('username', $username);
            session('id', $id);
            $this->success('登陆成功', 'index/indexPage');
        }
    }

}
