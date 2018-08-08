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
	 * @param  [array] $field  		字段
	 * @param  [array] $surface     表名
	 * @param  [array] $sort        字段排序
	 * @param  [array] $name        条件查寻
	 * @return [type]       	    查出的数据 
	 */
	public function search($name,$sort)
	{	 
   		$map['f.fangyuanname|d.district_name|m.metro_name|s.site_name'] = array('like','%'.$name.'%'); 		
	    if(!empty($name)){
	        //查询出客户输入的内容进行比配
		    $result = M('fangyuan f')
			    ->field('s.site_name,m.metro_name,d.district_name,f.danjia_wei,f.fengmian_img,f.zhun_cg,f.sheshi,f.fangyuanname,f.mianji,f.danjia,f.id,f.identity,u.unit')
		   		->join('yz_guangzhou_district d on d.id = f.district')
		   		->join('yz_metro m on m.id = f.metro')
		   		->join('yz_site s on s.id = f.site')
		   		->join('yz_unit u on u.id = f.danjia_wei')
		   		// ->join('yz_set_up p on p.id = '.array_count_values('f.sheshi'))
		   		->order($sort)
		   		->where($map)
		   		->select();

	        $Page  = new \Think\Page(count($result),4);// 实例化分页类 传入总记录数和每页显示的记录数(25)
	        $show  = $Page->show();// 分页显示输出
	        $result = M('fangyuan f')
			    ->field('s.site_name,m.metro_name,d.district_name,f.danjia_wei,f.fengmian_img,f.zhun_cg,f.sheshi,f.fangyuanname,f.mianji,f.danjia,f.id,f.identity,u.unit')
		   		->join('yz_guangzhou_district d on d.id = f.district')
		   		->join('yz_metro m on m.id = f.metro')
		   		->join('yz_site s on s.id = f.site')
		   		->join('yz_unit u on u.id = f.danjia_wei')
		   		->limit($Page->firstRow.','.$Page->listRows)
		   		->order($sort)
		   		->where($map)
		   		->select();
		    return $result;
		    // return array('k1'=> $result,'k2'=>$show);
      	}else{
      		return null;
      	}
    }
}