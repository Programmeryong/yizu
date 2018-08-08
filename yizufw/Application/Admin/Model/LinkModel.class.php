<?php

namespace Admin\Model;

use Think\Model;
use Think\Page;

class LinkModel extends Model
{
    //从数据库中查询所以数据
    public function readLink()
    {
        $link = M('Link as a');//主表
        $list = M('Link')->select();
        $count = count($list);//总数据数
        $Page = new Page($count, 15);// 实例化分页类 传入总记录数和每页显示的记录数
        $res = $link->join("yz_admin b on a.add_id = b.id")
            ->field("a.id,a.link_name,a.link_url,b.username,a.link_desc,a.status,a.add_time")//需要显示的字段
            ->limit($Page->firstRow . ',' . $Page->listRows)
            ->select();
        $show = $Page->show();// 分页显示输出
        return array('link_list' => $res, 'count' => $count, 'page' => $show);// 赋值数据集
    }

    //查询某条数据
    public function readId($id){
        return M('Link')->select($id);
    }

    //增加
    public function addLink($data)
    {
        $link = M('Link');
        $link->startTrans();  //开启事务
        $res =  $link->add($data);
        if($res){
            $link->commit();   //全部完成,则提交事物
            return $res;
        }else{
            $link->rollback();  //事物回滚
            return false;
        }
    }

    //删除
    public function deleteLink($id)
    {
        $link = M('link');
        $link->startTrans();  //开启事务
        $res = $link->delete($id);
        if($res){
            $link->commit();   //全部完成,则提交事物
            return $res;
        }else{
            $link->rollback();  //事物回滚
            return false;
        }
    }

    //同时删除多个
    public function deleteAllLink($data)
    {
        $where['id'] = array("in",$data);
        $link = M('link');
        $link->startTrans();  //开启事务
        $result = $link->where($where)->delete();
        if ($result) {
            $link->commit();   //全部完成,则提交事物
            return true;
        } else {
            $link->rollback();  //事物回滚
            return false;
        }
    }

    //修改显示状态
    public function updateStatus($id, $status)
    {
        $link = M('link');
        $data['status'] = $status;
        $link->startTrans();  //开启事务
        $res = $link->where('id=' . $id)->save($data);
        if($res){
            $link->commit();   //全部完成,则提交事物
            return $res;
        }else{
            $link->rollback();  //事物回滚
            return false;
        }
    }

    //修改
    public function update($id, $data)
    {
        $link = M('link');
        $link->startTrans();  //开启事务
        $res = $link->where('id=' . $id)->save($data);
        if($res){
            $link->commit();   //全部完成,则提交事物
            return $res;
        }else{
            $link->rollback();  //事物回滚
            return false;
        }
    }

}