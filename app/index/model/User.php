<?php

namespace app\index\model;

use think\Model;
use traits\model\SoftDelete;
class User extends Model {
    
    use SoftDelete;
    protected $autoWriteTimestamp = true;
    protected $createTime = false;
   // protected $updateTime = 'update_at';//数据更新时，同事更新字段
   //protected $deleteTime = 'delete_at';
    
    
}
