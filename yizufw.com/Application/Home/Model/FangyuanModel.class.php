<?php
namespace Home\Model;
use Think\Model;
class FangyuanModel extends Model {
	/**
	 * 根据条件查寻Title表
	 * @param  [array] $field  字段
	 * @param  [array] $where   条件查寻
	 * @return [type]       	查出的数据 
	 */
	public function selectData($field,$where,$msg)
	{
		$result = $this->field($field)->where($where)->order("id desc")	->limit($msg)->select();
		return $result;
	}
	/**
	 * 根据条件查寻Title表
	 * @param  [array] $field  字段
	 * @param  [array] $where   条件查寻
	 * @return [type]       	查出的数据 
	 */
	public function search($field)
	{	 
	    header("Content-type:text/html;charset=utf-8"); 
	    // $name = I('post.name') 
	    $user = M('fangyuan');
	    $name = "";
   		$map[$field] = array('like','%'.$name.'%');
	    $result = $user->field($field)->where($map)->order($field.' desc')->select();
       //判断字符串是否小于6的
	    if(!empty($name)){
	        //like模糊比配
	        $map[$field] = array('like','%'.$name.'%');
	        //查询出客户输入的内容进行比配
	        $result = $user->field($field)->where($map)->order($field.' desc')->select();
	        return $result;
      	}else{
      		echo "内容不能为空";exit;
      	}
    }

}