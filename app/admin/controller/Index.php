<?php

namespace app\admin\controller;

use think\Controller;
use think\View;

class Index extends Controller {

    public function index() {
        
        return $this->fetch('index');      
    }
    
  
    public function home(){
        return $this->fetch('home'); 
    }
     
    public function menu(){
        return $this->fetch('menu');
    }
    public function test(){
        return $this->fetch('topp');
    }
}
