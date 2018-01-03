<?php

#循环插入20条数据到数据库

namespace app\index\controller;

use think\Controller;
use app\index\model\User;

class Index extends Controller {

    public function index() {
        #访问app\index\view\index.html  

        $data = [];
        for ($i = 1; $i < 21; $i++) {
            $data[] = [
                'username' => "imooc_{$i}",
                'email' => "imocc_{$i}@qq.com",
                'password' => md5("imooc_{$i}"),
                'num' => $i + 100
            ];
        }
        $userModel = new User;
        $res = $userModel->saveAll($data);
        dump($res);
        return $this->fetch();
    }

}
