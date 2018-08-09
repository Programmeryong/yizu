<?php

namespace Admin\Model;

use Think\Model;
use Think\Page;

//预约看房表模型
class BespeakModel extends Model
{
    //从数据库中查询所以数据
    public function readBespeak()
    {
        $bespeak = M('Bespeak as a');//主表
        $list = M('Bespeak')->select();
        $count = count($list);//总数据数
        $Page = new Page($count, 15);// 实例化分页类 传入总记录数和每页显示的记录数
        $res = $bespeak->join("yz_admin b on a.admin_id = b.id")
            ->field("a.id,a.user_id,a.phone,b.username,a.add_time,a.status")//需要显示的字段
            ->limit($Page->firstRow . ',' . $Page->listRows)
            ->select();
        $show = $Page->show();// 分页显示输出
        return array('bespeak_list' => $res, 'count' => $count, 'page' => $show);// 赋值数据集
    }

    //修改显示状态
    public function updateStatus($id, $admin_id)
    {
        $bespeak = M('Bespeak');
        $data['admin_id'] = $admin_id;
        $data['status'] = 1;
        $bespeak->startTrans();  //开启事务bespeak
        $res = $bespeak->where('id=' . $id)->save($data);
        if ($res) {
            $bespeak->commit();   //全部完成,则提交事物
            return $res;
        } else {
            $bespeak->rollback();  //事物回滚
            return false;
        }
    }

    //获取未处理数据
    public function getStatus(){
        $bespeak = M('Bespeak');
        return count($bespeak->where('status = 0')->select());
    }
}