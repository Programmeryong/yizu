<?php

namespace Home\Controller;

use Think\Controller;

class TestController extends Controller
{

    public function index()
    {
        $user = M('User');
        $where['id'] = 1;
        $data['nickname'] = '123';
        $res = $user->where($where)->save($data);
        dump($res);
    }
}