<?php

namespace Admin\Model;

use Think\Model;
use Think\Page;

class BannerModel extends Model
{
    //从数据库中查询所以数据
    public function readBanner()
    {
        $banner = M('Banner as a');//主表
        $list = M('Banner')->select();
        $count = count($list);//总数据数
        $Page = new Page($count, 10);// 实例化分页类 传入总记录数和每页显示的记录数
        $res = $banner->join("yz_admin b on a.upload_id = b.id")
            ->field("a.id,a.img_src,a.remark,b.username,a.upload_time,a.status")//需要显示的字段
            ->limit($Page->firstRow . ',' . $Page->listRows)
            ->select();
        $show = $Page->show();// 分页显示输出
        return array('banner_list' => $res, 'count' => $count, 'page' => $show);// 赋值数据集
    }

    //增加
    public function addBanner($data)
    {
        $banner = M('Banner');
        $banner->startTrans();  //开启事务banner
        $res = $banner->add($data);  //处理数据
        if ($res) {
            $banner->commit();   //全部完成,则提交事物
            return $res;
        } else {
            $banner->rollback();  //事物回滚
            return false;
        }
    }

    //删除
    public function deleteBanner($id)
    {
        $banner = M('Banner');
        $img_src = $banner->where('id=' . $id)->getField('img_src');
        if (!empty($img_src)) {
            $url = '.' . $img_src;
            $banner->startTrans();  //开启事务banner
            $res = $banner->delete($id);
            if ($res) {
                $banner->commit();   //全部完成,则提交事物
                if (unlink($url)) {//删除图片文件
                    return $res;
                }
            } else {
                $banner->rollback();  //事物回滚
                return false;
            }
        } else {
            return false;
        }
        return '';
    }

    //同时删除多个
    public function deleteAllBanner($data)
    {
        //图片地址数组
        $img = array();
        $where['id'] = array("in", $data);
        $banner = M('Banner');
        $res = $banner->where($where)->select();
        $count = count($res);
        for ($i = 0; $i < $count; $i++) {
            $img[$i] = $res[$i]["img_src"];//遍历组装图片地址数组
        }
        $banner->startTrans();  //开启事务banner
        $result = $banner->where($where)->delete();
        if ($result) {
            $banner->commit();   //全部完成,则提交事物
            for ($i = 0; $i < $count; $i++) {
                unlink('.' . $img[$i]); //删除图片文件
            }
            return true;
        } else {
            $banner->rollback();  //事物回滚
            return false;
        }
    }

    //修改显示状态
    public function updateStatus($id, $status)
    {
        $banner = M('Banner');
        $data['status'] = $status;
        $banner->startTrans();  //开启事务banner
        $res = $banner->where('id=' . $id)->save($data);
        if ($res) {
            $banner->commit();   //全部完成,则提交事物
            return $res;
        } else {
            $banner->rollback();  //事物回滚
            return false;
        }
    }
}