<?php

namespace Admin\Model;

use Think\Model;
use Think\Page;

class UserNewsModel extends Model
{
    //从数据库中查询所以数据
    public function readUserNews()
    {
        $userNews = M('UserNews as a');//主表
        $list = M('UserNews')->select();
        $count = count($list);//总数据数
        $Page = new Page($count, 5);// 实例化分页类 传入总记录数和每页显示的记录数
        $res = $userNews->join("yz_user b on a.user_id = b.id")
            ->field("a.id,b.phone,a.title,a.content,a.time,a.status")//需要显示的字段
            ->limit($Page->firstRow . ',' . $Page->listRows)
            ->select();
        $show = $Page->show();// 分页显示输出
        return array('userNews_list' => $res, 'count' => $count, 'page' => $show);// 赋值数据集
    }

    //增加
    public function adduserNews($data)
    {
        $userNews = M('userNews');
        $userNews->startTrans();  //开启事务userNews
        $res = $userNews->add($data);  //处理数据
        if ($res) {
            $userNews->commit();   //全部完成,则提交事物
            return $res;
        } else {
            $userNews->rollback();  //事物回滚
            return false;
        }
    }

    //删除
    public function deleteuserNews($id)
    {
        $userNews = M('userNews');
        $img_src = $userNews->where('id=' . $id)->getField('img_src');
        if (!empty($img_src)) {
            $url = '.' . $img_src;
            $userNews->startTrans();  //开启事务userNews
            $res = $userNews->delete($id);
            if ($res) {
                $userNews->commit();   //全部完成,则提交事物
                if (unlink($url)) {//删除图片文件
                    return $res;
                }
            } else {
                $userNews->rollback();  //事物回滚
                return false;
            }
        } else {
            return false;
        }
        return '';
    }

    //同时删除多个
    public function deleteAlluserNews($data)
    {
        //图片地址数组
        $img = array();
        $where['id'] = array("in", $data);
        $userNews = M('userNews');
        $res = $userNews->where($where)->select();
        $count = count($res);
        for ($i = 0; $i < $count; $i++) {
            $img[$i] = $res[$i]["img_src"];//遍历组装图片地址数组
        }
        $userNews->startTrans();  //开启事务userNews
        $result = $userNews->where($where)->delete();
        if ($result) {
            $userNews->commit();   //全部完成,则提交事物
            for ($i = 0; $i < $count; $i++) {
                unlink('.' . $img[$i]); //删除图片文件
            }
            return true;
        } else {
            $userNews->rollback();  //事物回滚
            return false;
        }
    }

    //修改显示状态
    public function updateStatus($id, $status)
    {
        $userNews = M('userNews');
        $data['status'] = $status;
        $userNews->startTrans();  //开启事务userNews
        $res = $userNews->where('id=' . $id)->save($data);
        if ($res) {
            $userNews->commit();   //全部完成,则提交事物
            return $res;
        } else {
            $userNews->rollback();  //事物回滚
            return false;
        }
    }
}