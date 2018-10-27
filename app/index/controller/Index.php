<?php

#主页

namespace app\index\controller;

use think\Controller;
use app\index\model\User;
use think\cache\driver\Redis;
class Index extends Controller {

    public function index() {
        #访问app\index\view\index.html  
       
        return $this->fetch();
    }
    
    public function toredis(){
        $redis = new Redis();
        $str = 'aaaaaaa';
        $redis->set('name',$str,3600);
        echo $redis->get('name');
    }
    public function showInfo(){
        phpinfo();
    }
}
