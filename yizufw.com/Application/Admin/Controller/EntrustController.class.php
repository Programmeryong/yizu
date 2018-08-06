<?php

namespace Admin\Controller;

use Admin\Common\BaseController;

class EntrustController extends BaseController
{
    public function index()
    {
        $this->isLogin();
        $entrust = D('Entrust');
        $res = $entrust->readEntrust();
        $this->assign($res);
        if (IS_AJAX) {
            $this->display('Entrust/panel/table');
        } else {
            $this->display('Entrust/entrust_list');
        }
    }

    //修改显示状态
    public function setStatus($id, $admin_id, $require)
    {
        $Entrust = D('Entrust');
        $res = $Entrust->updateStatus($id, $admin_id, $require);
        if ($res != false) {
            $this->ajaxReturn(200);
        }

    }

    //查看用户要求
    public  function read($id){
        $entrust = D('Entrust');
        $res = $entrust->read($id);
        $this->assign($res);
        $this->display('Entrust/entrust_content');
    }
}