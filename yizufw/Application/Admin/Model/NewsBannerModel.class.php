<?php

namespace Admin\Model;

use Think\Model;
use Think\Page;

class NewsBannerModel extends Model
{
    //从数据库中查询所以数据
    public function read()
    {
        $banner = M('NewsBanner');
        $res = $banner->select();
        $n_array = array();
        $count = count($res);
        for ($i=0;$i<$count;$i++){
            $n_array[$i] = $res[$i]['news_id'];
        }
        $where['a.id'] = array("in", $n_array);

        $news = M('News as a');//主表
        $Page = new Page($count, 5);// 实例化分页类 传入总记录数和每页显示的记录数
        $res = $news->join("yz_news_banner b on a.id = b.news_id")
            ->join("yz_news_type c on a.news_type_id = c.id")
            ->field("b.id,a.news_title,c.title,a.img_url")//需要显示的字段
            ->where($where)
            ->order('sort desc')
            ->limit($Page->firstRow . ',' . $Page->listRows)
            ->select();
        $show = $Page->show();// 分页显示输出
        return array('news_list' => $res, 'count' => $count, 'page' => $show);// 赋值数据集
    }

    //上移
    public function moveUp($id)
    {
        $banner = M('NewsBanner');
        $where['id'] = $id;
        $data['sort'] = time();
        $banner->startTrans();  //开启事务
        $res = $banner->where($where)->save($data);
        if ($res) {
            $banner->commit();   //全部完成,则提交事物
            return $res;
        } else {
            $banner->rollback();  //事物回滚
            return false;
        }
    }

    //增加
    public function addNews($data)
    {
        $banner = M('NewsBanner');
        $banner->startTrans();  //开启事务
        $res = $banner->add($data);
        if ($res) {
            $banner->commit();   //全部完成,则提交事物
            return $res;
        } else {
            $banner->rollback();  //事物回滚
            return false;
        }
    }

    //删除
    public function deleteNewsBanner($id)
    {
        $banner = M('NewsBanner');
        $banner->startTrans();  //开启事务
        $res = $banner->delete($id);//删除文章
        if ($res) {
            $banner->commit();   //全部完成,则提交事物
            return true;
        } else {
            $banner->rollback();  //事物回滚
            return false;
        }
    }

    //同时删除多个
    public function deleteAllNewsBanner($data)
    {
        $where['id'] = array("in", $data);
        $banner = M('NewsBanner');
        $banner->startTrans();  //开启事务banner
        $result = $banner->where($where)->delete();
        if ($result) {
            $banner->commit();   //全部完成,则提交事物
            return true;
        } else {
            $banner->rollback();  //事物回滚
            return false;
        }
    }

    //增加
    public function saveNewsBanner($id)
    {
        $banner = M('NewsBanner');
        $data['news_id'] = $id;
        $data['sort'] = time();
        $where['news_id'] = $id;
        $res1 = $banner->where($where)->find();
        if ($res1){
            return 0;//已存在
        }else{
            $banner->startTrans();  //开启事务
            $res2 = $banner->data($data)->add();
            if ($res2) {
                $banner->commit();   //全部完成,则提交事物
                return 1;
            } else {
                $banner->rollback();  //事物回滚
                return 2;
            }
        }
    }
}