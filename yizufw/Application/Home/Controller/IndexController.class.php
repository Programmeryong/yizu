<?php

namespace Home\Controller;

use Home\Common\BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        $this->isLogin();
        $this->indexNews();
        $this->display('Index/yizu_index');
    }

    //    public function Add(){
    //    	$search = D('user')->yongqing();
    //    	dump($search);
    //    	$this->display('Add/yizu_release');
    //    }

    public function search()
    {
        $name = 'dfaf';
        $user = D('fangyuan')->search('fangyuan', 'fangyuanname', $name, 'id');
        dump($user);
        if ($user[0] == null) {
            echo "没有你搜索的内容";
        }

    }

    //首页新闻渲染(按最新时间倒叙)
    public function indexNews()
    {
        $news = D('News');
        $res = $news->indexNews();
        $this->assign('index_news', $res);
    }
}