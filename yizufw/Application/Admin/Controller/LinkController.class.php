<?php

namespace Admin\Controller;

use Admin\Common\BaseController;

class LinkController extends BaseController
{

    public function index()
    {
        $this->isLogin();
        $link = D('Link');
        $arry = $link->readLink();
        $this->assign($arry);
        if (IS_AJAX) {
            $this->display('Link/panel/table');
        } else {
            $this->display('Link/link_list');
        }
    }

    public function addShow()
    {
        $this->display('Link/link_add');
    }

    //增加
    public function add()
    {
        //获取前台发送的数据
        $data = array(
            'link_name' => I('post.link_name'),
            'link_url' => I('post.link_url'),
            'link_desc' => I('post.link_desc'),
            'add_id' => I('post.add_id'),
            'add_time' => time()
        );
        //实例化link模型
        $link = D('Link');
        $res = $link->addLink($data);
        if (!empty($res)) {
            $this->ajaxReturn(200);
        }
    }

    //删除
    public function delete($id)
    {
        $link = D('Link');
        $res = $link->deletelink($id);
        if ($res != false) {
            $this->ajaxReturn(200);
        }
    }

    //同时删除多个资源
    public function delAll($data)
    {
        $link = D('Link');
        $res = $link->deleteAlllink($data);
        if ($res == true) {
            $this->ajaxReturn(200);
        }
    }

    //修改显示状态
    public function setStatus($id, $status)
    {
        if ($status == 0) {
            $link = D('Link');
            $res = $link->updateStatus($id, 1);
            if ($res != false) {
                $this->ajaxReturn(200);
            }

        } else {
            $link = D('Link');
            $res = $link->updateStatus($id, 0);
            if ($res != false) {
                $this->ajaxReturn(200);
            }
        }
    }

    //渲染修改页面
    public function updateShow()
    {
        $id = I('get.id');
        $link = D('Link');
        $res = $link->readId($id);
        $this->assign('link',$res);
        $this->display('Link/link_edit');
    }

    //修改
    public function update()
    {
        $link = D('Link');
        //获取前台发送的数据
        $data = array(
            'link_name' => I('post.link_name'),
            'link_url' => I('post.link_url'),
            'link_desc' => I('post.link_desc')
        );
        $id = I('post.id');
        $res = $link->update($id, $data);
        if ($res != false) {
            $this->ajaxReturn(200);
        }
    }
} 