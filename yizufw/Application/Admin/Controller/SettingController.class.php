<?php

namespace Admin\Controller;

use Admin\Common\BaseController;

class SettingController extends BaseController
{

    public function index()
    {
        $table = D('Website');
        $res = $table->read();
        $this->assign('system', $res);
        $this->display('Setting/index');
    }

    public function update()
    {
        $w = D('Website');
        $data = array(
            'site_name' => I('post.site_name'),
            'site_url' => I('post.site_url'),
            'site_email' => I('post.site_email'),
            'keyword' => I('post.keyword'),
            'company' => I('post.company'),
            'description' => I('post.description'),
            'address' => I('post.address'),
            'copyright' => I('post.copyright'),
            'config_tel' => I('post.config_tel'),
            'email' => I('post.email'),
            'qq' => I('post.qq'),
            'sina' => I('post.sina'),
            'beian' => I('post.beian'),
            'worktime' => I('post.worktime'),
            'fax' => I('post.fax'),
            'contact' => I('post.contact'),
            'codzend' => I('post.codzend'),
            'gu_tel' => I('post.gu_tel'),
            'add_time' => time(),
        );
        $res = $w->update($data);
        if ($res !== false) {
            $this->ajaxReturn(200);
        }
    }

} 


