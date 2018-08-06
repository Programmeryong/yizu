<?php

namespace Admin\Model;

use Think\Model;
use Think\Page;

class NewsModel extends Model
{
    //从数据库中查询所以数据
    public function readNews()
    {
        $news = M('News as a');//主表
        $list = M('News')->select();
        $count = count($list);//总数据数
        $Page = new Page($count, 10);// 实例化分页类 传入总记录数和每页显示的记录数
        $res = $news->join("yz_admin b on a.author_id = b.id")
            ->join("yz_news_type c on a.news_type_id = c.id")
            ->field("a.id,a.news_title,c.title,b.username,a.img_url,a.status,a.time,a.keyword,a.describe")//需要显示的字段
            ->limit($Page->firstRow . ',' . $Page->listRows)
            ->select();
        $show = $Page->show();// 分页显示输出
        return array('news_list' => $res, 'count' => $count, 'page' => $show);// 赋值数据集
    }

    //查询某条数据
    public function readId($id)
    {
        return M('news')->select($id);
    }

    //查询新闻类别
    public function readType()
    {
        return M('News_type')->select();
    }

    //增加
    public function addNews($data)
    {
        $news = M('news');
        $news->startTrans();  //开启事务
        $res = $news->add($data);
        if ($res) {
            $news->commit();   //全部完成,则提交事物
            return $res;
        } else {
            $news->rollback();  //事物回滚
            return false;
        }
    }

    //增加
    public function updateNews($id, $data)
    {
        $news = M('news');
        $news->startTrans();  //开启事务
        $res = $news->where('id=' . $id)->save($data);
        if ($res) {
            $news->commit();   //全部完成,则提交事物
            return $res;
        } else {
            $news->rollback();  //事物回滚
            return false;
        }
    }

    //显示指定的资源
    public function read($id)
    {
        $news = M('News');
        $result = $news->find($id);
        return $result['new_text'];
    }

    //修改显示状态
    public function updateStatus($id, $status)
    {
        $news = M('News');
        $data['status'] = $status;
        $news->startTrans();  //开启事务
        $res = $news->where('id=' . $id)->save($data);
        if ($res) {
            $news->commit();   //全部完成,则提交事物
            return $res;
        } else {
            $news->rollback();  //事物回滚
            return false;
        }
    }

    //修改
    public function update($id, $data)
    {
        $news = M('news');
        $news->startTrans();  //开启事务
        $res = $news->where('id=' . $id)->save($data);
        if ($res) {
            $news->commit();   //全部完成,则提交事物
            return $res;
        } else {
            $news->rollback();  //事物回滚
            return false;
        }
    }


    //删除
    public function deleteNews($id)
    {
        $news = M('News');
        $res = $news->find($id);
        if (!is_null($res)) {
            $img_src = $res['img_url'];
            $img_src2 = $res['new_text'];
            if ($img_src) {
                $news->startTrans();  //开启事务
                $res = $news->delete($id);//删除文章
                if ($res) {
                    $news->commit();   //全部完成,则提交事物
                    if ($img_src2) {//如果文章内有图片，删除
                        $pattern = "/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
                        preg_match_all($pattern, $img_src2, $match);
                        $arrLength = count($match[1]);
                        for ($i = 0; $i < $arrLength; $i++) {
                            unlink('.' . $match[1][$i]);//循环删除文章中图文件
                        }
                        unlink('.' . $img_src);//删除缩略图文件
                    } else {
                        unlink('.' . $img_src);//删除缩略图文件
                    }
                    return true;
                } else {
                    $news->rollback();  //事物回滚
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    //同时删除多个
    public function deleteAllBanner($data)
    {
        $pattern = "/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
        $where['id'] = array("in", $data);
        $news = M('News');
        $res = $news->where($where)->select();//查出符合id的所有的数据
        $count = count($res);//统计有多少条数据
        for ($i = 0; $i < $count; $i++) {
            unlink('.' . $res[$i]['img_url']);//删除缩略图
            preg_match_all($pattern, $res[$i]['new_text'], $match);
            $arrLength = count($match[1]);
            for ($j = 0; $j < $arrLength; $j++) {
                unlink('.' . $match[1][$j]);//删除文章内图片
            }
        }
        $news->startTrans();  //开启事务
        $result = $news->where($where)->delete();
        if ($result) {
            $news->commit();   //全部完成,则提交事物
            return true;
        } else {
            $news->rollback();  //事物回滚
            return false;
        }
    }

    //显示编辑资源表单页.
    public
    function edit($id)
    {
        $type_res = $this->readType();
        $news = M('News as a');//主表
        $newa_res = $news->where('a.id=' . $id)
            ->find();
        return array('type_list' => $type_res, 'news' => $newa_res);
    }

//    //保存更新的资源
//    public function update($id, $img_src, $title, $updater, $type, $content)
//    {
//        Db::startTrans();
//        try {
//            //设置更新条件
//            $where = ['id' => $id];
//            //创建数据
//            $data = [];
//            $data['img_src'] = $img_src;
//            $data['title'] = $title;
//            $data['updater'] = $updater;
//            $data['type'] = $type;
//            $data['content'] = $content;
//            $data['update_time'] = time();
//            //将数据参数传入,将原始数据写入表中,并返回影响记录数
//            $state = ArticleModel::update($data, $where);
//            Db::commit();
//            //成功返回:1,否则:0
//            echo $state ? 1 : 0;
//        } catch (\Exception $e) {
//            Db::rollback();
//            echo 0;
//        }
//    }

}