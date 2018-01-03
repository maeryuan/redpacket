<?php

#主页

namespace app\index\controller;

use think\Controller;
use app\index\model\User;

class Index extends Controller {

    public function index() {
        #访问app\index\view\index.html  
       
        return $this->fetch();
    }

}
