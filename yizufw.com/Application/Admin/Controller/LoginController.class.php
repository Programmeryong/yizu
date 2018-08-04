<?php

namespace Admin\Controller;

use Admin\Model\AdminModel;
use Think\Controller;
use Think\Verify;

class LoginController extends Controller
{
    public function index()
    {
        $this->display('Login/index');
    }

    //验证用户身份
    public function check()
    {
        if (IS_AJAX) {
            //设置status
            $status = 0;
            //获取一下表单提交的数据，并保存在变量
            $userName = I('post.username');
            $passWord = I('post.password');
            //校验验证码
            $code = I('post.code');
            if ($this->check_verify($code) === true) {
                //实例化Model
                $admin = D('Admin');
                $res = $admin->checkNamePwd($userName, $passWord);
                if ($res == false) {
                    $message = '用户名或密码错误';
                    $this->ajaxReturn(array(
                        'status' => $status, 'message' => $message
                    ), 'json');
                } else {
                    //将用户登录的信息保存到session中，供其他控制器进行登录判断
                    session("username", $res['username']);
                    session("admin_id", $res['id']);

                    $status = 1;
                    $message = '登录成功，正在跳转进入后台……';
                    $this->ajaxReturn(array(
                        'status' => $status, 'message' => $message
                    ), 'json');
                }
            } else {
                $message = '验证码错误';
                $this->ajaxReturn(array(
                    'status' => 0, 'message' => $message
                ), 'json');
            }
        } else {
            $this->error('非法请求');
        }
    }

    //生成验证码
    public function verify_code()
    {
        $Verify = new Verify();
        $Verify->fontSize = 20;// 验证码字体大小
        $Verify->length = 4; // 验证码位数
        $Verify->useNoise = false;// 关闭验证码杂点
        $Verify->imageW = 160;
        $Verify->imageH = 50;
        $Verify->entry();
    }

    public function check_verify($code)
    {
        $verify = new Verify();
        return $verify->check($code);
    }

//    //生成随机数,用于生成salt
//    public function random_str($length)
//    {
//        //生成一个包含 大写英文字母, 小写英文字母, 数字 的数组
//        $arr = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));
//        $str = '';
//        $arr_len = count($arr);
//        for ($i = 0; $i < $length; $i++) {
//            $rand = mt_rand(0, $arr_len - 1);
//            $str .= $arr[$rand];
//        }
//        return $str;
//    }

    //退出登录
    public function logout()
    {
        session(null);
//        setcookie('auth', '', time() - 1);
        $this->redirect("login/index");
    }

}