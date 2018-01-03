<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.使用说明
 */

namespace app\index\controller;

use think\Controller;
use think\View;

class Instructions extends Controller {

    public function index() {
        #向页面插入变量
        return $this->fetch('index', [], [
                    'STATIC' =>        
                        '1、红包由活动赠送获得。
                        2、红包在投资时可选择是否使用。
                        3、在红包有效期内，投资期限和投资金额达到红包使用要求方可使用。
                        4、每一笔投资最多只能使用一个红包。
                        5、红包仅限本账户使用，不得转赠。
                        6、红包不能用于债权转让产品。
                        7、若由于个人行为导致红包错误使用，不补不换。
                        8、由冒用他人身份证等非正规途径获得红包，从而取得非正当收益，笑脸金融有权拒绝支付此收益。
                        9、返现红包在投资标的支付成功后将红包奖励打入平台账户；加息红包会在原有标的年化收益率上加上加息红包年化收益率，到期后收益跟随本金和利息按不同还款方式还款到平台账户。
                        10、红包使用最终解释权归笑脸金融所有。
                        客服电话4008-900-766'
        ]);
    }
 public function instructions() {
        #向页面插入变量
        return $this->fetch('instructions', [], [
                    'STATIC' =>        
                        '1、红包由活动赠送获得。
                        2、红包在投资时可选择是否使用。
                        3、在红包有效期内，投资期限和投资金额达到红包使用要求方可使用。
                        4、每一笔投资最多只能使用一个红包。
                        5、红包仅限本账户使用，不得转赠。
                        6、红包不能用于债权转让产品。
                        7、若由于个人行为导致红包错误使用，不补不换。
                        8、由冒用他人身份证等非正规途径获得红包，从而取得非正当收益，笑脸金融有权拒绝支付此收益。
                        9、返现红包在投资标的支付成功后将红包奖励打入平台账户；加息红包会在原有标的年化收益率上加上加息红包年化收益率，到期后收益跟随本金和利息按不同还款方式还款到平台账户。
                        10、红包使用最终解释权归笑脸金融所有。
                        客服电话4008-900-766'
        ]);
    }
}
