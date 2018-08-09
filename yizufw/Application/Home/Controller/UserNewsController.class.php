<?php

namespace Home\Controller;

use Home\Common\BaseController;

class UserNewsController extends BaseController
{
    public function index()
    {
        $this->isLogin();
        $this->display('UserNews/index');


    }
}