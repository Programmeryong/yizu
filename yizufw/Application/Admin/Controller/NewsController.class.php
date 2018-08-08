<?php

namespace Admin\Controller;

use Admin\Common\BaseController;
use Think\Upload;

class NewsController extends BaseController
{
    public function index()
    {
        $this->isLogin();
        $news = D('News');
        $array = $news->readNews();
        $this->assign($array);
        if (IS_AJAX) {
            $this->display('News/panel/table');
        } else {
            $this->display('News/news_list');
        }
    }

    //增加新闻页面渲染
    public function addShow()
    {
        $res = D('News')->readType();
        $this->assign('type_list', $res);
        $this->display('News/news_add');
    }

    //图片上传
    public function upload()
    {
        $upload = new Upload();// 实例化上传类
//        $upload->maxSize   =  3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/Admin/images/upload/news/mini_img/'; // 设置附件上传根目录
        // 上传单个文件
        $info = $upload->uploadOne($_FILES['file']);
        if (!$info) {
            // 上传错误提示错误信息
            $this->ajaxReturn(array('status' => 0, 'src' => ''));
        } else {// 上传成功 获取上传文件信息
            $infopath = '/Public/Admin/images/upload/news/mini_img/' . $info['savepath'] . $info['savename'];
            $this->ajaxReturn(array('status' => 1, 'src' => $infopath));
        }
    }

    //保存新建的资源
    public function save($content)
    {
        $data = array(
            'img_url' => I('post.img_url'),
            'news_title' => I('post.news_title'),
            'keyword' => I('post.keyword'),
            'news_type_id' => I('post.type'),
            'describe' => I('post.describe'),
            'author_id' => I('post.author_id'),
            'new_text' => $content,
            'time' => time()
        );
        //实例化Banner模型
        $banner = D('News');
        $res = $banner->addNews($data);
        if ($res != false) {
            $this->ajaxReturn(200);
        }
    }

    //保存新建的资源
    public function update($content)
    {
        $data = array(
            'img_url' => I('post.img_url'),
            'news_title' => I('post.news_title'),
            'keyword' => I('post.keyword'),
            'news_type_id' => I('post.type'),
            'describe' => I('post.describe'),
            'author_id' => I('post.author_id'),
            'new_text' => $content,
            'time' => time()
        );
        $id = I('post.id');
        //实例化Banner模型
        $banner = D('News');
        $res = $banner->updateNews($id,$data);
        if ($res != false) {
            $this->ajaxReturn(200);
        }
    }

    //新闻图片上传
    public function uploadNewsImg()
    {
        $infopath = '';
        $upload = new Upload();// 实例化上传类
//        $upload->maxSize   =  3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/Admin/images/upload/news/'; // 设置附件上传根目录
        // 上传单个文件
        $info = $upload->uploadOne($_FILES['FileName']);
        if (!$info) {
            // 上传错误提示错误信息
            $this->ajaxReturn(array('success' => false, 'msg' => '上传失败', 'file_path' => $infopath));
        } else {// 上传成功 获取上传文件信息
            $infopath = '/Public/Admin/images/upload/news/' . $info['savepath'] . $info['savename'];
            $this->ajaxReturn(array('success' => true, 'msg' => '上传成功', 'file_path' => $infopath));
        }
    }

    //显示指定的文章内容页面
    public function read($id)
    {
        $news = D('News');
        $res = $news->read($id);
        $this->assign('content', $res);
        $this->display('News/news_content');
    }

    //显示修改页面
    public function editShow($id)
    {
        $news = D('News');
        $res = $news->edit($id);
        $this->assign($res);
        $this->display('News/news_edit');
    }

    //删除
    public function delete($id)
    {
        $news = D('News');
        $res = $news->deleteNews($id);
        if ($res != false) {
            $this->ajaxReturn(200);
        }
    }

    //同时删除多个资源
    public function delAll($data)
    {
        $news = D('News');
        $res = $news->deleteAllNews($data);
        if ($res == true) {
            $this->ajaxReturn(200);
        }
    }

    //修改显示状态
    public function setStatus($id, $status)
    {
        if ($status == 0) {
            $news = D('News');
            $res = $news->updateStatus($id, 1);
            if ($res != false) {
                $this->ajaxReturn(200);
            }
        } else {
            $news = D('News');
            $res = $news->updateStatus($id, 0);
            if ($res != false) {
                $this->ajaxReturn(200);
            }
        }
    }
}