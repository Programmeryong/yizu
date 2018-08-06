<?php

namespace Admin\Model;

use Think\Model;
use Think\Page;

class WebsiteModel extends Model
{
    //从数据库中查询所以数据
    public function read()
    {
        $w = M('Website');
        return $w->select(1);
    }

    //增加
    public function update($data)
    {
        $table = M('Website');
        $condition = array('id' => 1);
        $table->startTrans();  //开启事务
        $res =  $table->where($condition)->save($data);
        if($res){
            $table->commit();   //全部完成,则提交事物
            return $res;
        }else{
            $table->rollback();  //事物回滚
            return false;
        }
    }
}