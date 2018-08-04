<?php
namespace Admin\Controller;
use Think\Controller;
class HouseController extends Controller {

    public function house_list(){
        $table = M('user');
        $res = $table->select();
        // dump($res);
        $this->assign('data',$res);
    	$this->display('House/house_list');
        
    }

    public function house_add(){
        $this->display('House/house_add');
    }
    //房源添加验证
    /**
     * @param [type] $house_name [楼盘名字]
     * @param [type] $acreage [面积]
     * @param [type] $price [单价]
     * @param [type] $property_fee [物业费]
     * @param [type] $house_user [联系人]
     * @param [type] $telephone [联系电话]
     * @return [type] [description]
     */
    public function house_add_validate(){
        $house_name = I('house_name');
        $acreage = I('acreage');
        $price = I('price');
        $property_fee = I('property_fee');
        $house_user = I('house_user');
        $telephone = I('telephone');

        // $this->ajaxReturn($house_name);

        if ($house_name == '') { $this->ajaxReturn(21);}
        if ($acreage == '') { $this->ajaxReturn(22);}
        if ($price == '') { $this->ajaxReturn(23);}
        if ($property_fee == '') { $this->ajaxReturn(24);}
        if ($house_user == '') { $this->ajaxReturn(25);}
        if ($telephone == '') { $this->ajaxReturn(26);}

        $table_house = M('fangyuan');
        $table_user = M('user');

        $data_house = array(
            'fangyuanname' => $house_name,
            'mianji' => $acreage,
            'danjia' => $price,
            'wuyefei' => $property_fee,
            'add_time' => time(),
        );

        $res1 = $table_house->add($data_house); 

        if ($res1) {$house_id = $res1;}
        else{ $this->ajaxReturn(2);}

        $data_user = array(
            'username' => $house_user,
            'telephone' => $telephone,
            'house_id' => $house_id,
            'add_time'=>time(),
        );

        $res2 = $table_user->add($data_user); 

        if ($res2) {$this->ajaxReturn(1);}
        else{ $this->ajaxReturn(2);}
        
    }
} 