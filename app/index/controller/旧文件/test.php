<?php

namespace app\index\controller;

use think\Controller;
use think\View;
use app\index\model\User;

class Login extends Controller {
    
    #渲染模板文件
    
    public function index() {
        $view = new View();
                
       // return $view->fetch('login');     //进入到app\index\view\login\login.html
        return $view->fetch();              //进入到app\index\view\login\index.html
    }

    #响应请求，对登陆进行逻辑判断
    public function login($real_name='',$password='') {
       #获得模板传来的参数
     //dump($real_name);dump($password);exit;//验证表单是否提交到
        session('real_name',"$real_name");
        #调用model层，类User中的get方法,得到一个对象
        $user=User::get([
            'real_name'=>$real_name,
            'password'=>md5($password)
        ]);
        
        //dump($user);exit;
        #if判断对象是否存在，存在--登陆成功，不存在--登陆失败
        if($user){
              //echo '登录成功'.$real_name.md5($password);
           $user_id = $user->user_id;
            session('user_id',$user_id);           
              $this->success('登陆成功', 'home/home');  
        }else{
            return $this->error('登录失败');
        }
        
        
    }
   
}
