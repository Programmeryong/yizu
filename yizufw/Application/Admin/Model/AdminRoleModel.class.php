<?php

namespace Admin\Model;

use Think\Model;

class AdminRoleModel extends Model
{
    //从角色表查询全部数据
    public function read() {
        //实例化模型
        $role = M("AdminRole");
        //查找所有状态为可用的角色，、同时查找出角色下的用户
        $data = $role->where('status = 1')->select();

//        $db=M('Admin as a'); //主表
//        $data=$db ->join("yz_admin_role b on a.role_id = b.id")
//            ->where('b.status = 1')
////            ->field("a.username,b.id,b.rloename,b.remake,b.status,b.rules")//需要显示的字段
//            ->select();
        return $data;
    }
}