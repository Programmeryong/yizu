<?php

namespace Admin\Controller;

use Admin\Common\BaseController;

class TestController extends BaseController
{

    public function index()
    {
        $news = D('Home/News');
        $res = $news->indexNews();
        dump($res);
//        $this->ajaxReturn();
    }
}