<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // $this->display('Index/index_top');
        $this->display('Index/yizu_index');
        $this->display('Index/index_bto');
    }

 //    public function Add(){
 //    	$search = D('user')->yongqing();
 //    	dump($search);
 //    	$this->display('Add/yizu_release');
 //    }

	// public function search()
	// {	
	// 	$user = D('fangyuan')->search('fangyuanname');
	// 	dump($user);
	// 	if($user[0] == null){
	// 		echo "没有你搜索的内容";
	// 	}
				
 //    }
}