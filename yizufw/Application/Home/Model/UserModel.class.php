<?php

namespace Home\Model;

use Think\Model;
use Think\Page;

class UserModel extends Model
{

    public function getID($id)
    {
        $user = M('User');
        $res = $user->find($id);
        return $res;
    }

    public function setLoginTimeZero($id)
    {
        $user = M('User');
        $data['login_time'] = 0;
        $user->where('id=' . $id)->save($data);
    }

    public function setLoginTime($id, $time)
    {
        $user = M('User');
        $data['login_time'] = $time;
        $res = $user->where('id=' . $id)->save($data);
        return $res;
    }

    //登录查找用户是否存在
    public function checkUser($phone)
    {
        $user = M('User');
        $res = $user->where('phone=' . $phone)->find();
        return $res;
    }

    //注册新的用户
    public function register($phone)
    {
        $user = M('User');
        $data['phone'] = $phone;
        $data['nickname'] = $phone;
        $data['add_time'] = time();
        $data['img_url'] = '/Public/Home/images/head/minhead.jpeg';
        $res = $user->create($data);
        $user->add($data);
        return $res;
    }

    //更新昵称
    public function updateNickname($id,$nickname){
        $user = M('User');
        $where['id'] = $id;
        $data['nickname'] = $nickname;
        $res = $user->where($where)->save($data);
        if ($res){
            return true;
        }else{
            return false;
        }
    }

    //更新头像
    public function updateImg($id,$img_url){
        $user = M('User');
        $where['id'] = $id;
        $data['img_url'] = $img_url;
        $res = $user->where($where)->save($data);
        if ($res){
            return true;
        }else{
            return false;
        }
    }
}