<?php

namespace Admin\Controller;

class AdminRoleController extends CommonController
{
    //所有角色列表展示
    public function index()
    {
        $this->checkLong();
        $this->assign("session", $_SESSION);

        $role = D('AdminRole');
        $admin = D('Admin');
        //角色数据数组
        $role_array = $role->read();
        //计算角色数据数组数量
        $countArry = count($role_array);
        //角色id数据数组
        $role_id_array = array();
        //某个角色下管理员数组
        $admin_array = array();
        for ($i=0;$i < $countArry;$i++){
            $role_id_array = $role_array[$i]['id'];
            $admin_array[$i] = $admin->read($role_id_array);
        }
//        //把某个角色下的管理员提取出来
//        $admin_name_array = array();
//
//        for ($i=0;$i<$countArry;$i++){
//            $admin_array[$i] = $admin->read($role_id_array[$i]);
//            $admin_name_array[$i] = $admin_array[$i]['username'];
//        }
        dump($admin_array);
        //$this->display('Admin/role_index');

        //$this->assign('u',$u);
        //$this->display('index');
    }
}