<?php

namespace Admin\Controller;

use Admin\Common\BaseController;
use Think\Upload;

class UserNewsController extends BaseController
{
    public function index()
    {
        $this->isLogin();
        $userNews = D('UserNews');
        $array = $userNews->readUserNews();
        $this->assign($array);
        if (IS_AJAX) {
            $this->display('UserNews/panel/table');
        } else {
            $this->display('UserNews/user_news_list');
        }
    }

    public function addShow()
    {
        $this->display('UserNews/UserNews_add');
    }

    //图片上传
    public function upload()
    {
        $upload = new Upload();// 实例化上传类
//        $upload->maxSize   =  3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/Admin/images/upload/'; // 设置附件上传根目录
        // 上传单个文件
        $info = $upload->uploadOne($_FILES['file']);
        if (!$info) {
            // 上传错误提示错误信息
            $this->ajaxReturn(array('status' => 0, 'src' => ''));
        } else {// 上传成功 获取上传文件信息
            $infopath = '/Public/Admin/images/upload/' . $info['savepath'] . $info['savename'];
            $this->ajaxReturn(array('status' => 1, 'src' => $infopath));
        }
    }

    //增加轮播图
    public function add()
    {
        //获取前台发送的数据
        $data = array(
            'img_src' => I('post.img_src'),
            'remark' => I('post.remark'),
            'upload_id' => I('post.upload_id'),
            'upload_time' => time()
        );
        //实例化UserNews模型
        $UserNews = D('UserNews');
        $res = $UserNews->addUserNews($data);
        if ($res != false) {
            $this->ajaxReturn(200);
        }
    }

    //删除
    public function delete($id)
    {
        $UserNews = D('UserNews');
        $res = $UserNews->deleteUserNews($id);
        if ($res != false) {
            $this->ajaxReturn(200);
        }
    }

    //同时删除多个资源
    public function delAll($data)
    {
        $UserNews = D('UserNews');
        $res = $UserNews->deleteAllUserNews($data);
        if ($res == true) {
            $this->ajaxReturn(200);
        }
    }

    //修改显示状态
    public function setStatus($id, $status)
    {
        if ($status == 0) {
            $UserNews = D('UserNews');
            $res = $UserNews->updateStatus($id, 1);
            if ($res != false) {
                $this->ajaxReturn(200);
            }
        } else {
            $UserNews = D('UserNews');
            $res = $UserNews->updateStatus($id, 0);
            if ($res != false) {
                $this->ajaxReturn(200);
            }
        }
    }
}