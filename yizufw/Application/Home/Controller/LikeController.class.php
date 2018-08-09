<?php
namespace Home\Controller;
use Think\Controller;
class LikeController extends Controller {
	public function index(){
		//查出全部房源数据和分页
		$res = D('fangyuan')->search($map);
		$this->assign($res);
		if(IS_AJAX){
			$this->display('Like/screen');
		}else{
			//查出区域
			$district = M('guangzhou_district')->field('id,district_name')->select();
			//查出地铁线号	
			$metro = M('metro')->field('id,metro_name')->select();
			//查出地铁站点
			$site = D('site')->siteErgodic();
			$this->assign($site);
			$this->assign('district',$district);
			$this->assign('metro',$metro);
			$this->display('Like/listpage');	
		}
	   	
	}
	
	public function screen(){
		//获取筛选房源条件数据
		$data['f.type'] = I('get.type');
		$data['f.metro'] = I('get.metro');
		$data['f.site'] = I('get.site');
		$data['f.identity'] = I('get.identity');
		$data['f.type'] = I('get.type');
		//判断是否为空
		if(!empty(I('get.mianji1')) and !empty(I('get.mianji2'))){

			$data['f.mianji'] = array(array('gt',I('get.mianji1')),array('lt',I('get.mianji2')));
		}
		if(!empty(I('get.danjia1')) and !empty(I('get.danjia2'))){

			$data['f.danjia'] = array(array('gt',I('get.danjia1')),array('lt',I('get.danjia2')));
		}
		//遍历是否为空如果为空删除$k
		foreach($data as $k=>$v){   
    		if( $v == "" )   
        	unset($data[$k] );        	
		} 
		$res = D('fangyuan')->search($data);		
		$this->assign($res);
		// echo M('fangyuan')->getLastSql();
		// 判断是否Ajax
		if(IS_AJAX){
			$this->display('Like/screen');
		}else{
			$this->display('Like/index');
		}
	}
	public function vague_like(){
		$title= I('get.title');
		//模糊搜索条件
		$map['f.fangyuanname|d.district_name|m.metro_name|s.site_name'] = array('like','%'.$title.'%'); 
		$res = D('fangyuan')->search($map);		
		$this->assign($res);
		$this->assign('title',$title);
		//Ajax分页
		if(IS_AJAX){
			$this->display('Like/screen');
		}else{
			//查出区域
			$district = M('guangzhou_district')->field('id,district_name')->select();
			//查出地铁线号	
			$metro = M('metro')->field('id,metro_name')->select();
			//查出地铁站点
			$site = D('site')->siteErgodic();
			$this->assign($site);
			$this->assign('district',$district);
			$this->assign('metro',$metro);
			$this->display('Like/listpage');	
		}
	}
}