<?php

namespace Home\Model;

use Think\Model;
use Think\Page;

class NewsModel extends Model
{
//    public function new_page($table)
//    {
//        $User = M($table); // 实例化User对象
//        $count = $User->field('id,title')->count();// 查询满足要求的总记录数
//        // dump($count);
//        $Page = new Page($count, 2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
//        $show = $Page->show();// 分页显示输出
//        $res = M('news n')
//            ->join('yz_cassify_news c on c.id = n.cassify_news_id')
//            ->field('n.id,n.news_title,n.time,n.new_img,n.author,n.new_text,c.title')
//            ->limit($Page->firstRow . ',' . $Page->listRows)
//            ->select();
//        return $res;
//        return $show;
//    }

    //首页新闻渲染(按最新时间)
    public function indexNews()
    {
        $news = M('News as a');
        $res = $news->join("yz_news_type b on a.news_type_id = b.id")
            ->field("a.id,a.news_title,b.title,a.img_url,a.status,a.time,a.keyword,a.describe,a.new_text")//需要显示的字段
            ->where('status = 1')
            ->order('time desc')
            ->limit(3)
            ->select();
        return $res;
    }

    //新闻资讯页全部新闻渲染(按最新时间)
    public function allNews()
    {
        $news = M('News as a');//主表
        $list = M('News')->where('status = 1')->select();
        $count = count($list);//总数据数
        $p = getpage($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
        $res = $news->join("yz_news_type b on a.news_type_id = b.id")
            ->field("a.id,a.news_title,b.title,a.img_url,a.status,a.time,a.keyword,a.describe,a.new_text")//需要显示的字段
            ->where('status = 1')
            ->order('time desc')
            ->limit($p->firstRow, $p->listRows)
            ->select();
        $p->parameter['tag']= urlencode(0);
        $show = $p->show();// 分页显示输出
        return array('news_list' => $res, 'count' => $count, 'page' => $show);// 赋值数据集
    }

    //新闻类型更新数据
    public function getList($type_id){
        $news = M('News as a');//主表
        $list = M('News')->where('status = 1 and news_type_id = '. $type_id)->select();
        $count = count($list);//总数据数
        $p = getpage($count,1);// 实例化分页类 传入总记录数和每页显示的记录数
        $res = $news->join("yz_news_type b on a.news_type_id = b.id")
            ->field("a.id,a.news_title,b.title,a.img_url,a.status,a.time,a.keyword,a.describe,a.new_text")//需要显示的字段
            ->where('status = 1 and news_type_id = '. $type_id)
            ->order('time desc')
            ->limit($p->firstRow, $p->listRows)
            ->select();
        $p->parameter['tag']= urlencode($type_id);
        $show = $p->show();// 分页显示输出
        return array('res' => $res, 'count' => $count, 'page' => $show);// 赋值数据集
    }

    //获取某篇文章
    public function getNews($id){
        $news = M('News as a');//主表
        $news1 = M('News');
        //获取该id新闻内容
        $res = $news->join("yz_news_type b on a.news_type_id = b.id")
            ->join("yz_admin c on a.author_id = c.id")
            ->field("a.id,a.news_title,b.title,a.img_url,a.status,a.time,a.keyword,a.describe,a.new_text,c.username,a.page_view")//需要显示的字段
            ->where('a.status = 1 and a.id='.$id)
            ->find();
        // 上一篇
        $prevRecord = $news1->where('id<'.$id)->order('id desc')->find();
        $prev = !$prevRecord ? '没有了' : $prevRecord;

        // 下一篇
        $nextRecord = $news1->where('id>'.$id)->order('id asc')->find();
        $next = !$nextRecord ? '没有了' : $nextRecord;

        return array('news'=>$res,'prev'=>$prev,'next'=>$next);
    }

    //增加浏览量
    public function addPageView($id){
        $news = M('News');
        $res = $news->find($id);
        $data['page_view'] = $res['page_view']+1;
        $news->where('id='.$id)->save($data);
    }
}