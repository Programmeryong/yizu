<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){

        $this->display('News/news');
    }

    public function news_personal(){
    	
        $this->display('News/news_personal');
        
    }
}