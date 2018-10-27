<?php

namespace app\admin\controller;

use think\Controller;
use think\View;

class Index extends Controller {

    /**
     * 后台登陆界面
     * @return type
     */
    public function index() {

        return $this->fetch('main');
    }

    /*
     * 后台默认页面
     */

    public function indexPage() {
        return $this->fetch('index');
    }

    public function menu() {
        return $this->fetch('menu');
    }

    public function test() {
        return $this->fetch('topp');
    }

}
