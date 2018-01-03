<?php

namespace app\index\controller;

use think\Controller;
use think\Db;
use app\index\model\RedpacketRecord;

class Invest extends Controller {

    #用户投资

    public function index() {

        
        $redpacket_model_id = input("param.redpacket_model_id");
        //dump($redpacket_model_id);exit;
        $list=Db::name("redpacket_model")
                ->where("redpacket_model_id","eq","$redpacket_model_id")
                ->select();
       // dump($list);exit;
       $this->assign("list",$list);
        return $this->fetch("index");
        
        }
        public function invest(){
            $rd = new RedpacketRecord();
            $rd->redpacket_model_id = input("session.redpacket_model_id");
            $rd->user_id = input("session.user_id");
            $rd->create_time = time();
            dump($rd);exit;
            if($rd->save()){
                return $this->success('投资成功');
            }  else {
                return $this->success('投资失败，请再次尝试');
            }
        }

}
