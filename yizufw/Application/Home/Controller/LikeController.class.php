<?php
namespace Home\Controller;
use Think\Controller;
class LikeController extends Controller {
	public function index(){
			$post = I('post.search');
		if(!empty($post)){
			$data = D('fangyuan')->search($post,'id desc');
			$this->assign('page',$show);// 赋值分页输出
			$this->assign('res',$data);
		}
		$district = M('guangzhou_district')->field('id,district_name')->select();
		$metro = M('metro')->field('id,metro_name')->select();
		$site1 = M('site')->field('id,site_name,metro_id')->where('metro_id=1')->select();
		$site2 = M('site')->field('id,site_name,metro_id')->where('metro_id=2')->select();
		$site3 = M('site')->field('id,site_name,metro_id')->where('metro_id=3')->select();
		$site4 = M('site')->field('id,site_name,metro_id')->where('metro_id=4')->select();
		$site5 = M('site')->field('id,site_name,metro_id')->where('metro_id=5')->select();
		$site6 = M('site')->field('id,site_name,metro_id')->where('metro_id=6')->select();
		$site7 = M('site')->field('id,site_name,metro_id')->where('metro_id=7')->select();
		$site8 = M('site')->field('id,site_name,metro_id')->where('metro_id=8')->select();
		$site9 = M('site')->field('id,site_name,metro_id')->where('metro_id=9')->select();
		$site10 = M('site')->field('id,site_name,metro_id')->where('metro_id=10')->select();
		$site11 = M('site')->field('id,site_name,metro_id')->where('metro_id=11')->select();
		$site12 = M('site')->field('id,site_name,metro_id')->where('metro_id=12')->select();
		$site13 = M('site')->field('id,site_name,metro_id')->where('metro_id=13')->select();
		$site14 = M('site')->field('id,site_name,metro_id')->where('metro_id=14')->select();
		// dump($site1);
		$this->assign('site1',$site1);
		$this->assign('site2',$site2);
		$this->assign('site3',$site3);
		$this->assign('site4',$site4);
		$this->assign('site5',$site5);
		$this->assign('site6',$site6);
		$this->assign('site7',$site7);
		$this->assign('site8',$site8);
		$this->assign('site9',$site9);
		$this->assign('site10',$site10);
		$this->assign('site11',$site11);
		$this->assign('site12',$site12);
		$this->assign('site13',$site13);
		$this->assign('site14',$site14);
		$this->assign('district',$district);
		$this->assign('metro',$metro);
		$this->display('Search/listpage');
	
		

	}
	public function search(){
		
			// 分割字符串
  //   	$pieces = explode($data['sheshi']);
  //   	foreach($pieces as $val){
		//   echo $val."<br/>";
		
		// for($i=0; $i<count($data);$i++){
		// 	// $arr = str_split($data[$i]['sheshi']) ;
		// 	// $arrcont = array_count_values($arr);
		// 	// dump($arrcont);
		// 	// echo 	$data[i]['sheshi'];
		// 	$id = array($i =>$data[$i]['id']);
		// 	dump($id);
		// }

		// count($arr);
		// $result = array_reduce($data, 'array_merge', array());
		// dump($data);
		// dump($result);
		
	}
	public function screen(){
		$type_id = I('post.');
		// $data['type'] = I('post.type');
		// $data['metro'] = I('post.metro');
		// $data['site'] = I('post.site');
		// $data['identity'] = I('post.identity');
		// $data['type'] = I('post.type');
		// $ss = "";
		$data['metro'] = "";
		$data['site'] = 10;
		$data['identity'] = '经纪人';
		$data['type'] = 1;
		if(!empty($data['metro'])){
			echo 111;
		}else{
			echo 222;
		}
		$res = M('fangyuan')->where($data)->select();
		 dump($res);

		// $this->ajaxReturn($res);

	}
}