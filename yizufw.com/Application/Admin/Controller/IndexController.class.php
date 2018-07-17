<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	 $this->display('Index/yizu_index');
        
    }
    public function main(){
    	 $this->display('Index/Index_main');
        
    }
}