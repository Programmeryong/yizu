<?php

namespace Admin\Controller;

use Admin\Common\BaseController;

class AdminController extends BaseController
{

    public function index()
    {
        $this->isLogin();
        $this->assign("session", $_SESSION);
        $this->display('Index/index');
    }
}