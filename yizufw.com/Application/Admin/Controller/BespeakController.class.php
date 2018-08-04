<?php

namespace Admin\Controller;

use Admin\Common\BaseController;

class BespeakController extends BaseController
{
    public function index()
    {
        $this->isLogin();
        $bespeak = D('Bespeak');
        $res = $bespeak->readBespeak();
        $this->assign($res);
        if (IS_AJAX) {
            $this->display('Bespeak/panel/table');
        } else {
            $this->display('Bespeak/bespeak_list');
        }
    }

    //修改显示状态
    public function setStatus($id, $admin_id)
    {
        $bespeak = D('Bespeak');
        $res = $bespeak->updateStatus($id, $admin_id);
        if ($res != false) {
            $this->ajaxReturn(200);
        }

    }
}