<?php

namespace app\admin\validate;

use think\Validate;

class AdminValidate extends Validate {

    protected $rule = [
        ['username', 'require', '用户名不能为空'],
        ['username', 'max:25', '用户名最大25字节'],
        ['password', 'require', '密码不能为空'],
        ['password', 'min:4', '密码长度最小4字节']
    ];

}
