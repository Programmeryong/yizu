<?php
namespace Home\Controller;
use Think\Controller;
class ReleaseController extends Controller {
    public function index(){
        // session(array('name'=>'session_id','expire'=>3600));
        
    	$res = M('guangzhou_district')->field('id,district_name')->select();
        $user = M('user')->field('nickname,phone')->select();
    	$this->assign('res',$res);   	
    	$this->display('Release/release');
    }
    public function metro1(){
    	$id = I('post.id');

    	$res = M('guangzhou_district')->where('id ='.$id)->select();
    	$sum =$res[0]['metro'];
    	//分割字符串
    	// $pieces = explode(",",$sum);
    	// foreach($pieces as $val){
		//   echo $val."<br/>";
		// }
    	$where['id'] = array('in',$sum);
    	$data = M('metro')->field('id,metro_name')->where($where)->select();
    	$this->ajaxReturn($data);
    }
    public function metro2(){  	
    	$dis_id = I('post.dis_id');
    	$ret_id = I('post.ret_id');
    	$term['metro_id'] = $ret_id;
    	$term['area_id'] = $dis_id;
    	if($term['area_id'] == ''){
    		$this->ajaxReturn(20);
    	}elseif($term['metro_id'] == ''){
    		$this->ajaxReturn(21);
    	}else{
    		$site = M('site')->field('id,site_name')->where($term)->select();

    		$this->ajaxReturn($site);
    	}

    }
    //房源添加
    public function add_fangyuan(){
    	if(I('post.thisradio') == ''){$this->ajaxReturn(21);} // 1创意园 2写字楼
    	if(I('post.fangyuanname') == ''){$this->ajaxReturn(22);} 
    	if(I('post.cars1') == '0'){$this->ajaxReturn(23);} // 
    	if(I('post.cars2') == '0'){$this->ajaxReturn(24);} 
    	if(I('post.cars3') == '0'){$this->ajaxReturn(25);}
	    if(I('post.mianji') == ''){$this->ajaxReturn(26);}
	    if(I('post.danjie') == ''){$this->ajaxReturn(27);}
	    if(I('post.wuyefei') == ''){$this->ajaxReturn(28);}
	    if(I('post.thisradio1') == ''){$this->ajaxReturn(29);}
	    if(I('post.username') == ''){$this->ajaxReturn(30);}
	    $wuye_gs = I('post.wuye_gs');//物业公司
	    $jzmian_ji = I('post.jzmian_ji');//建筑面积
	    $zhun_cg = I('post.zhun_cg');//准层高
	    $ketishu = I('post.ketishu');//客梯数
	    $kaifashang = I('post.kaifashang');//开发商
    	$bucong_xx = I('post.bucong_xx');//补充信息
    	$danjie_wei = I('post.danjie_1');
    	$tabnavbox = 
    		I('post.tabnavbox1').
    		I('post.tabnavbox2').
    		I('post.tabnavbox3').
    		I('post.tabnavbox4').
    		I('post.tabnavbox5').
    		I('post.tabnavbox6');
        
    	$data = array(
	        'type'	=> I('post.thisradio'), 
	        'fangyuanname'    => I('post.fangyuanname'),
	        'mianji'   => I('post.mianji'),
	        'danjia'      => I('post.danjie'),
	        'wuyefei'   => I('post.wuyefei'),
	        'zhuangxiu'  => I('post.thisradio1'),
	        'wuyegongsi'  => $wuye_gs,
	        'jz_mianji' => $jzmian_ji,
	        'zhun_cg'	=> $zhun_cg,
	        'keti'	=> $ketishu,
	        'kaifashang' => $kaifashang,
	        'bucong_xx' => $bucong_xx,
	        'district'  => I('post.cars1'),
	        'metro'	=>	I('post.cars2'),
	        'site'	=>	I('post.cars3'),
	        'add_time'	=>	time(),
	        'fengmian_img'	=>	I('post.picture'),
	        'xiangqing_img' =>	I('post.detail_picture'),
	        'sheshi'	=>	$tabnavbox,
	        'danjia_wei'	=>	$danjie_wei,
	        'identity'	=>	'2',
            'xiangqing_img' => I('post.pic_all'),
            // -------------------------
            "lx_phone"  => I('post.lx_phone'),
            "fy_name"   => I('post.username'),
            'user_id'   => I('post.user_id')

	    );
    	$res = M('fangyuan')->add($data);

    	if(!empty($res)){$this->ajaxReturn(200);}
    	else{$this->ajaxReturn(404);}  
    }

    //图片上传
    public function upload_pic()
    {
        $system=I('post.');
        $upload = new \Think\Upload();
        // $upload->maxSize = 3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/';
        $upload->savePath  = './housingPic/';
        $info = $upload->upload();
        $a = '';
            foreach ($info as $key=>$value)
            {
                     $a.="#".$value['savepath'].$value['savename'];//我用符号把图片路径拼起来 
            }
        $this->ajaxReturn($a);
    }
    public function like(){
        $this->display('Release/like');
    }
}