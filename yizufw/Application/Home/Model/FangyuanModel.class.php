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
	 * @param  [array] $map        条件查寻
	 * @return [type]  $res    	   返回数据
	 */
	public function search($map)
	{	 
        //查询出客户输入的内容进行比配
	    $result = M('fangyuan f')
		    ->field('s.site_name,m.metro_name,d.district_name,f.danjia_wei,f.fengmian_img,f.zhun_cg,f.sheshi,f.fangyuanname,f.mianji,f.danjia,f.id,f.identity,u.unit')
	   		->join('yz_guangzhou_district d on d.id = f.district')
	   		->join('yz_metro m on m.id = f.metro')
	   		->join('yz_site s on s.id = f.site')
	   		->join('yz_unit u on u.id = f.danjia_wei')
	   		->where($map)
	   		->select();
        $Page  = new \Think\Page(count($result),8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
  //       foreach($map as $key=>$val) {
		// 	$Page->parameter[$map] = urlencode($val);
		// }
        // $Page->parameter['text'] = urlencode(0);
        $show  = $Page->show();// 分页显示输出
        $result = M('fangyuan f')
		    ->field('s.site_name,m.metro_name,d.district_name,f.danjia_wei,f.fengmian_img,f.zhun_cg,f.sheshi,f.fangyuanname,f.mianji,f.danjia,f.id,f.identity,u.unit')
	   		->join('yz_guangzhou_district d on d.id = f.district')
	   		->join('yz_metro m on m.id = f.metro')
	   		->join('yz_site s on s.id = f.site')
	   		->join('yz_unit u on u.id = f.danjia_wei')
	   		->limit($Page->firstRow.','.$Page->listRows)
	   		->where($map)
	   		->order('id desc')
	   		->select();	   		
	    $res =array('fy_list' => $result,'page' => $show);// 赋值数据集
	    return $res;
	}

	
}