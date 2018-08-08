<?php

namespace Admin\Controller;

use Admin\Common\BaseController;

class TestController extends BaseController
{

    public function index()
    {
        $banner = M('NewsBanner');
        $where['id'] = 69;
        $data['sort'] = time();
        $banner->startTrans();  //开启事务
        $res = $banner->where($where)->save($data);
        dump($res);
//        $this->ajaxReturn();
    }
}