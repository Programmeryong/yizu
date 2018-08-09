<?php

namespace Home\Controller;

use Think\Controller;
use Think\Sms\SmsSingleSender;
use Think\Sms\SmsMultiSender;
use Think\Sms\SmsSenderUtil;


class LoginController extends Controller
{
    public function login()
    {
        if (IS_AJAX) {
            $status = 0;
            $phone = I('post.phone');
            $seven = I('post.is_seven');
            $code = I('post.code');
            if (session('sms_code') == $code) {
                if (preg_match("/^1[34578]{1}\d{9}$/", $phone)) {
                    $user = D('User');
                    $res = $user->checkUser($phone);
                    if ($res) {
                        $user_id = $res['id'];
                        $nickname = $res['nickname'];
                        $phone = $res['phone'];
                        $img_url = $res['img_url'];
                        session('user_id', $user_id);
                        session('user_nickname', $nickname);
                        session('user_phone', $phone);
                        session('user_img_url', $img_url);
                        if ($seven == 1) {
                            cookie("user_id", $user_id);
                            cookie('user_nickname', $nickname);
                            cookie('user_phone', $phone);
                            cookie('user_img_url', $img_url);
                        }
                        session('sms_code', null);
                        $status = 1;//登录成功
                        $this->ajaxReturn(array('status' => $status, 'user_img_url' => $img_url, 'user_id' => $user_id));
                    } else {
                        $user1 = D('User');
                        $res = $user1->register($phone);//注册
                        $user_id = $res['id'];
                        $nickname = $res['nickname'];
                        $phone = $res['phone'];
                        $img_url = $res['img_url'];
                        session('user_id', $user_id);
                        session('user_nickname', $nickname);
                        session('user_phone', $phone);
                        session('user_img_url', $img_url);
                        if ($seven == 1) {
                            cookie("user_id", $user_id);
                            cookie('user_nickname', $nickname);
                            cookie('user_phone', $phone);
                            cookie('user_img_url', $img_url);
                        }
                        session('sms_code', null);
                        $status = 1;//注册成功
                        $this->ajaxReturn(array('status' => $status, 'user_img_url' => $img_url, 'user_id' => $user_id));
                    }
                } else {
                    $this->ajaxReturn(array('status' => $status));//登录注册失败
                }
            } else {
                $this->ajaxReturn(array('status' => $status));//登录注册失败
            }
        } else {
            $this->redirect("Index/index");
        }
    }

    public function sendPhone($phone)
    {

        $code = $this->createSMSCode(4);
        //用session保存起来，等输入验证码时就可以取出来比较
        session('sms_code', $code);

        // 短信应用SDK AppID
        $appid = 1400119058; // 1400开头

        // 短信应用SDK AppKey
        $appkey = "62edba29269eb49cafecaae4ff990cb7";

        // 需要发送短信的手机号码
        $phoneNumber = $phone;

        // 短信模板ID，需要在短信应用中申请
        $templateId = 168314;

        // 签名
        $smsSign = "乙租信息"; // 签名参数使用的是`签名内容`，而不是`签名ID`


        // 指定模板单发短信
        try {

            $ssender = new SmsSingleSender($appid, $appkey);

            $params = array($code, '10');  //这里必须要用数组的形式存进去

            $result = $ssender->sendWithParam("86", $phoneNumber, $templateId,
                $params, $smsSign, "", "");
            $rsp = json_decode($result);

            $this->ajaxReturn($rsp);
        } catch (\Exception $e) {
            echo var_dump($e);
        }
    }

    // 生成短信验证码
    public function createSMSCode($length)
    {

        $min = pow(10, ($length - 1));

        $max = pow(10, $length) - 1;

        return rand($min, $max);

    }

    //退出登录
    public function logout()
    {
        session(null);
        cookie('user_id', null);
        $this->redirect("Index/index");
    }

}