<?php

namespace Home\Controller;

use Home\Common\BaseController;
use Think\Upload;

class UserController extends BaseController
{

    public function index($id)
    {
        $this->isLogin();
        $user = D('User');
        $res = $user->getID($id);
        $this->assign('user_info',$res);
        $this->display('User/my_collection');
    }

    public function setUser($id){
        $this->isLogin();
        $user = D('User');
        $res = $user->getID($id);
        $this->assign('user_info',$res);
        $this->display('User/editme');
    }

    //更改昵称
    public function updateNickname(){
        $name = I('post.nickname');
        $id = I('post.id');
        $user = D('User');
        $res = $user->updateNickname($id,$name);
        if ($res != false){
            $this->ajaxReturn(200);
        }
    }
    //更改头像
    public function updateImg(){
        $url = I('post.img_url');
        $id = I('post.id');
        $user = D('User');
        $res = $user->updateImg($id,$url);
        if ($res != false){
            session('img_url',$url);
            cookie('img_url',$url);
            $this->ajaxReturn(200);
        }
    }

    //图片上传
    public function upload()
    {
        $upload = new Upload();// 实例化上传类
//        $upload->maxSize   =  3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/Home/images/upload/user/'; // 设置附件上传根目录
        // 上传单个文件
        $info = $upload->uploadOne($_FILES['file']);
        if (!$info) {
            // 上传错误提示错误信息
            $this->ajaxReturn(array('status' => 0, 'src' => ''));
        } else {// 上传成功 获取上传文件信息
            $infopath = '/Public/Home/images/upload/user/' . $info['savepath'] . $info['savename'];
            $this->ajaxReturn(array('status' => 1, 'src' => $infopath));
        }
    }
}