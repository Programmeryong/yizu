<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){
    	$news = M('cassify_news');
    	$data = $news->field('id,title')->select();
     //    $res = M('news')->field('')->where("cassify_news_id =".$data[2]['id'])->limit(8)->select();
    

        $User = M('news'); // 实例化User对象
        $count  = $User->field('id,title')->count();// 查询满足要求的总记录数
        // dump($count);
        $Page  = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        $res = M('news n')
        ->join('yz_cassify_news c on c.id = n.cassify_news_id')
        ->field('n.id,n.news_title,n.time,n.new_img,n.author,n.new_text,c.title')
        ->limit($Page->firstRow.','.$Page->listRows)
        ->select();
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('res',$res);
    	$this->assign('data',$data);
        $this->display('News/news');
      
    }

    public function news_personal(){
    	
        $this->display('News/news_personal');
        
    }
    public function shuju(){
        $id = I('get.id');
        if ($id == '') { $this->ajaxReturn(21);}
        $res = M('news n')
        ->join('yz_cassify_news c on c.id = n.cassify_news_id')
        ->field('n.id,n.news_title,n.time,n.new_img,n.author,n.new_text,c.title')
        ->where("cassify_news_id =".$id)
        ->limit(6)
        ->select();
        $this->ajaxReturn($res);
                       
    }
    public function new_whole(){
        $res = M('news n')
        ->join('yz_cassify_news c on c.id = n.cassify_news_id')
        ->field('n.id,n.news_title,n.time,n.new_img,n.author,n.new_text,c.title')
        ->limit(6)
        ->select();
        $this->ajaxReturn($res);
        // if ($res) { $this->ajaxReturn($res);}
        // else{ $this->ajaxReturn(null);}           
    }
    public function page(){
        $data = D('news')->new_page('news');
       
        dump($res);
        dump($data);
    }

}