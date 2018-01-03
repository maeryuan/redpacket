<?php

#模型聚合操作，最大值，最小值，平均值，数据条数

namespace app\index\controller;

use think\Controller;
use app\index\model\User;

class Index extends Controller {

    public function index() {
        #访问app\index\view\index.html  
        #count()数据的条数
        $res = User::count();
        $res = User::where("id","<",5)
                ->count();
        #max()最大值
        $res = User::max('num');
        $res = User::where("id","<",5)
                ->max('num');
        #sum()相加
        $res = User::sum('num');
        $res = User::where("id",">",8)
                ->sum('num');
        #avg()平均值
        $res = User::avg('num');
        $res = User::where("id","<",7)
                ->avg('num');
        #min()最小值
        $res = User::min('num');
        $res = User::where("id","<",5)
                ->min('num');
        dump($res);
        return $this->fetch();
    }

}
