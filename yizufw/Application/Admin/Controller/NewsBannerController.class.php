<?php

namespace Admin\Controller;

use Admin\Common\BaseController;

class NewsBannerController extends BaseController
{

    //前台首页新闻资讯页面大轮播管理
    //新闻轮播列表页面渲染
    public function index()
    {
        $this->isLogin();
        $banner = D('NewsBanner');
        $res = $banner->read();
        $this->assign($res);
        if (IS_AJAX) {
            $this->display('NewsBanner/panel/banner_list_table');
        } else {
            $this->display('NewsBanner/news_banner_list');
        }
    }

    //新闻轮播增加页面渲染
    public function addNewsBannerShow(){
        $news = D('News');
        $res = $news->getStatus1();
        $this->assign($res);
        if (IS_AJAX) {
            $this->display('NewsBanner/panel/banner_add_table');
        } else {
            $this->display('NewsBanner/news_banner_add');
        }
    }

    //保存
    public function save($id)
    {
        //实例化Banner模型
        $banner = D('NewsBanner');
        $res = $banner->saveNewsBanner($id);
        if ($res == 0) {
            $this->ajaxReturn(array('status'=>0,'msg'=>'新闻已存在'));
        }
        if ($res == 1) {
            $this->ajaxReturn(array('status'=>1,'msg'=>'添加成功'));
        }
        if ($res == 2) {
            $this->ajaxReturn(array('status'=>2,'msg'=>'添加失败'));
        }
    }

    //删除
    public function delete($id)
    {
        $banner = D('NewsBanner');
        $res = $banner->deleteNewsBanner($id);
        if ($res != false) {
            $this->ajaxReturn(200);
        }
    }

    //同时删除多个资源
    public function delAll($data)
    {
        $banner = D('NewsBanner');
        $res = $banner->deleteAllNewsBanner($data);
        if ($res == true) {
            $this->ajaxReturn(200);
        }
    }

    public function moveUp($id){
        $banner = D('NewsBanner');
        $res = $banner->moveUp($id);
        if ($res == true) {
            $this->ajaxReturn(200);
        }
    }
}