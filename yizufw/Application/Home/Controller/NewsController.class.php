<?php

namespace Home\Controller;

use Home\Common\BaseController;
use Think\Page;

class NewsController extends BaseController
{
    public function index()
    {
        $this->isLogin();
        $this->getNewsType();//获取新闻类型
        $this->allNews();//获取全部新闻
        $news_1 = $this->getList(1);//获取第一类新闻
        $news_2 = $this->getList(2);//获取第二类新闻
        $news_3 = $this->getList(3);//获取第三类新闻
        $this->assign(array('news_1'=> $news_1['res'],'page1'=>$news_1['page']));
        $this->assign(array('news_2'=> $news_2['res'],'page2'=>$news_2['page']));
        $this->assign(array('news_3'=> $news_3['res'],'page3'=>$news_3['page']));
        if (IS_AJAX){
            if (I('get.tag') == 1){
//                $news_1 = $this->getList(1);//获取第一类新闻
//                $this->assign(array('news_1'=> $news_1['res'],'page1'=>$news_1['page']));
                $this->display('News/panel/list1');
            }
            if (I('get.tag') == 2){
//                $news_2 = $this->getList(2);//获取第二类新闻
//                $this->assign(array('news_2'=> $news_2['res'],'page2'=>$news_2['page']));
                $this->display('News/panel/list2');
            }
            if (I('get.tag') == 3){
//                $news_3 = $this->getList(3);//获取第三类新闻
//                $this->assign(array('news_3'=> $news_3['res'],'page3'=>$news_3['page']));
                $this->display('News/panel/list3');
            }
            if (I('get.tag') == 0){
//                $this->allNews();//获取全部新闻
                $this->display('News/panel/list');
            }
        }else{

            $this->display('News/news');
        }

    }

    //获取某篇文章
    public function getNews($id)
    {
        $this->isLogin();
        $news = D('News');
        $res = $news->getNews($id);
        $news->addPageView($id);//增加1点击量
        $this->assign($res);
        $this->display('News/news_personal');

    }

    //新闻资讯页面查询全部新闻(加载时调用)
    public function allNews()
    {
        $news = D('News');
        $array = $news->allNews();
        $this->assign($array);
    }

    //新闻资讯页面新闻标题(加载时调用)
    public function getNewsType()
    {
        $type = D('NewsType');
        $res = $type->checkAll();
        $this->assign('type', $res);
    }

    //点击新闻类型更新数据
    public function getList($type_id)
    {
        $type = D('News');
        $res = $type->getList($type_id);
        return $res;
    }

    //点击新闻类型更新数据
    public function getAllList()
    {
        $this->getNewsType();
        $this->allNews();
        $this->display('News/panel/list');
    }

}