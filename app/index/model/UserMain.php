<?php

namespace app\index\model;

use think\Model;
use SoftDelete;

class UserMain extends Model {

   // use SoftDelete;

    protected $autoWriteTimestamp = true;
    protected $createTime = 'reg_time';
    protected $updateTime = 'update_time'; //数据更新时，同事更新字段

    //protected $deleteTime = 'delete_at';
    
    #根据搜索条件$where获取用户信息
    public function getInfoByWhere($where) {
        return $this->where($where)->find();                        
    }
    /**
     * 根据搜索条件获取所有的用户数量
     * @param $where
     */
    public function getAllUsers($where)
    {
        return $this->where($where)->count();
    }
  #插入用户信息/注册信息
    public function insertUser($param){
       return $this->save($param);       
    }
    #删除用户
}
