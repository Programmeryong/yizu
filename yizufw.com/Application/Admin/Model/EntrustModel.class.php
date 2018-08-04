<?php

namespace Admin\Model;

use Think\Model;
use Think\Page;

//委托找房表模型
class EntrustModel extends Model
{
    //从数据库中查询所以数据
    public function readEntrust()
    {
        $Entrust = M('Entrust as a');//主表
        $list = M('Entrust')->select();
        $count = count($list);//总数据数
        $Page = new Page($count, 15);// 实例化分页类 传入总记录数和每页显示的记录数
        $res = $Entrust->join("yz_admin b on a.admin_id = b.id")
            ->field("a.id,a.user_id,a.phone,b.username,a.time,a.status")//需要显示的字段
            ->limit($Page->firstRow . ',' . $Page->listRows)
            ->select();
        $show = $Page->show();// 分页显示输出
        return array('entrust_list' => $res, 'count' => $count, 'page' => $show);// 赋值数据集
    }

    //修改显示状态
    public function updateStatus($id, $admin_id, $require)
    {
        $entrust = M('Entrust');
        $data['admin_id'] = $admin_id;
        $data['status'] = 1;
        $data['require'] = $require;
        $data['time2'] = time();
        $entrust->startTrans();  //开启事务Entrust
        $res = $entrust->where('id=' . $id)->save($data);
        if ($res) {
            $entrust->commit();   //全部完成,则提交事物
            return $res;
        } else {
            $entrust->rollback();  //事物回滚
            return false;
        }
    }

    //获取未处理数据
    public function getStatus(){
        $entrust = M('Entrust');
        return count($entrust->where('status = 0')->select());
    }

    //查询用户要求
    public function read($id){
        $entrust = M('Entrust');
        $res = $entrust->find($id);
        return array('content'=>$res['require'],'time2'=>$res['time2']);
    }
}