<?php

namespace Admin\Model;

use Think\Model;

class AdminModel extends Model
{

//    public $_link = array(
//        //一对一关系
//        'userinfo' => array(
//            'mapping_type' => HAS_ONE, //定义为一对一关系
//            'class_name' => 'Userinfo'
//        ),
//        //一对多关系
//        'userapp' => array(
//            'mapping_type' => HAS_MANY,//定义为一对多关系
//            'class_name' => 'Userapp',//对应的Model的类名
//            'foreign_key' => 'user_id', //对应的外键ID
//            'mapping_name' => 'Userapp', //获取值的名称
//        //'mapping_order'=>'create_time desc',
//        )
//    );

    //验证登录
    function checkNamePwd($username, $password)
    {
        //实例化模型Admin
        $admin = M("Admin");
        //接收控制器传的数据，进行判断是否一致，并且返回
        $info = $admin->getBy_username($username);
        //如果name属性数据存在则进行判断对应的密码是否一致，同时返回。
        if ($info != null) {
            //验证密码
            if ($info['password'] == md5($password)) {
                return $info;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

//    //当用户勾选"使我保持登录状态"
//    public function saveRemember($username, $identifier, $token, $timeout)
//    {
//        $admin = M("admin");
//        $data['identifier'] = $identifier;
//        $data['token'] = $token;
//        $data['timeout'] = $timeout;
//        $where['username'] = $username;
//        $res = $admin->data($data)->where($where)->save();
//        return $res;
//    }

//    //验证用户是否永久登录（使我保持登录状态）
//    public function checkRemember()
//    {
//        $arr = array();
//        $now = time();
//
//        list($identifier, $token) = explode(':', $_COOKIE['auth']);
//        if (ctype_alnum($identifier) && ctype_alnum($token)) {
//            $arr['identifier'] = $identifier;
//            $arr['token'] = $token;
//        } else {
//            return false;
//        }
//
//        $admin = M("admin");
//        $info = $admin->getByidentifier($arr['identifier']);
//        if ($info != null) {
//            if ($arr['token'] != $info['token']) {
//                return false;
//            } else if ($now > $info['timeout']) {
//                return false;
//            } else {
//                return $info;
//            }
//        } else {
//            return false;
//        }
//    }

    //从表中查询某个角色的管理员信息
    public function read($role_id)
    {
        //实例化模型
        $admin = M("Admin");
        //查找所有状态为可用的角色
        $data = $admin->where('role_id = ' . $role_id)->select();
        return $data;
    }
}