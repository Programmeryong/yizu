<?php

namespace Admin\Controller;

use Admin\Common\BaseController;

class IndexController extends BaseController
{

    public function index()
    {
        $this->isLogin();
        $this->display('Index/index');
    }

    public function welcome()
    {
        $this->isLogin();
        $this->info();
        $this->display('Index/welcome');
    }

    public function info()
    {
        $info = array(
            '操作系统' => PHP_OS,
            '运行环境' => $_SERVER["SERVER_SOFTWARE"],
            '主机名' => $_SERVER['SERVER_NAME'],
            '服务器域名/IP' => $_SERVER['SERVER_NAME'] . ' [ ' . gethostbyname($_SERVER['SERVER_NAME']) . ' ]',
            'WEB服务端口' => $_SERVER['SERVER_PORT'],
            '网站文档目录' => $_SERVER["DOCUMENT_ROOT"],
            '浏览器信息' => substr($_SERVER['HTTP_USER_AGENT'], 0, 40),
//            '浏览器信息' => $this->get_client_browser(),
            '通信协议' => $_SERVER['SERVER_PROTOCOL'],
            '请求方法' => $_SERVER['REQUEST_METHOD'],
            'PHP版本' => PHP_VERSION,
//            'MySQL版本'=>mysql_get_server_info(),
            'ThinkPHP版本' => THINK_VERSION,
            '上传附件限制' => ini_get('upload_max_filesize'),
            '执行时间限制' => ini_get('max_execution_time') . '秒',
//            '服务器时间' => date("Y年n月j日 H:i:s"),
//            '北京时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
            '服务器时间' => "<span class='show-time' style='font-size: 14px'></span>",
            '北京时间' => "<span class='show-time' style='font-size: 14px'></span>",
//            '用户的IP地址'=>$_SERVER['REMOTE_ADDR'],
            '剩余空间' => round((disk_free_space(".") / (1024 * 1024)), 2) . 'M(约'.round((disk_free_space(".") / (1024 * 1024)/1024), 2).'G)',
        );
        $this->assign('info', $info);
    }

    //预约看房未处理信息提醒
    public function getBespeakCount(){
        $bespeak = D('Bespeak');
        $res = $bespeak->getStatus();
        $this->ajaxReturn($res);
    }
    //预约看房未处理信息提醒
    public function getEntrustCount(){
        $entrust = D('Entrust');
        $res = $entrust->getStatus();
        $this->ajaxReturn($res);
    }
} 