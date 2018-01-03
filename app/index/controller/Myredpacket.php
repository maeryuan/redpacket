<?php

namespace app\index\controller;

use think\Controller;
use think\Loader;

class Myredpacket extends Controller {
    #展示当前登陆用户：我的红包 内容

    public function index() {

        #使用session获取用户名，用户id

        $real_name = "xixi";//test



        #实例化UserMain查询user_id值
        $usermain = Loader::model("UserMain");
        $user_id = $usermain::where("real_name", "eq", "$real_name")->value('user_id');

        #实例化RedpacketRecord查询redpacket_model_id
        $redpacketrecord = Loader::model("RedpacketRecord");
        $redpacket_model_id = $redpacketrecord::where("user_id", "eq", "$user_id")
                ->field("redpacket_model_id")
                ->column('redpacket_model_id');
        #实例化RedpacketModel查询redpacket_model_id的数据信息
        $redpacketmodel = Loader::model("RedpacketModel");
        $res = $redpacketmodel::all($redpacket_model_id);
        #assign将变量传递到模板
        $this->assign("res", $res);

        return $this->fetch('test');
    }

}
