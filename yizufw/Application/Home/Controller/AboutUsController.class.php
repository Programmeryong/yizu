<?php

namespace Home\Controller;

use Home\Common\BaseController;

class AboutUsController extends BaseController
{
    public function index()
    {
        $this->isLogin();
        $this->display('AboutUs/index');


    }
}