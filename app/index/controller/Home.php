<?php
namespace app\index\controller;

use think\Controller;
use think\View;

class Home extends Controller{
    
    public function index(){
        $view = new View();
        return $view->fetch();
    }
            
     public function home(){
       
        return $this->fetch('home');
    }
}