<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>乙租管理系统</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--<meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />-->
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="shortcut icon" href="/Public/Admin/images/yz.ico">
</head>
<link rel="stylesheet" href="/Public/Admin/css/font.css">
<link rel="stylesheet" href="/Public/Admin/css/xadmin.css">
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/simditor.css"/>
<body>
<!-- 顶部开始 -->
<div class="container">
    <div class="logo">
        <a href="./index.html">乙租管理系统</a>
    </div>
    <div class="left_open">
        <i title="展开左侧栏" class="iconfont">&#xe699;</i>
    </div>
    <ul class="layui-nav right" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:void(0);"><?php echo (session('username')); ?></a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                <dd><a href="javascript:void(0);" onclick="x_admin_show()">个人信息</a></dd>
                <dd><a href="javascript:void(0);" onclick="x_admin_show()">修改密码</a></dd>
                <dd><a href="<?php echo U('login/logout');?>">退出</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item to-index"><a href="/">前台首页</a></li>
    </ul>

</div>
<!-- 顶部结束 -->
<!-- 中部开始 -->
<!-- 左侧菜单开始 -->
<div class="left-nav">
    <div id="side-nav">
        <ul id="nav">
            <li>
                <a href="javascript:void(0);">
                    <i class="iconfont">&#xe705;</i>
                    <cite>内容管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="<?php echo U('Banner/index');?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>轮播图管理</cite>

                        </a>
                    </li>
                    <li>
                        <a _href="<?php echo U('News/index');?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>新闻管理</cite>

                        </a>
                    </li>
                    <li>
                        <a _href="<?php echo U('NewsBanner/index');?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>新闻大轮播管理</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="<?php echo U('Link/index');?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>友链管理</cite>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="iconfont">&#xe735;</i>
                    <cite>房源管理</cite>
                    <span class="layui-badge" id="msg_count1">1</span>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>上传房源</cite>

                        </a>
                    </li>
                    <li>
                        <a _href="">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>审核房源</cite>
                            <span class="layui-badge" id="msg_count2">1</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a _href="">
                    <i class="layui-icon">&#xe63c;</i>
                    <cite>评论审核</cite>
                </a>
            </li>
            <li>
                <a _href="<?php echo U('UserNews/index');?>">
                    <i class="layui-icon">&#xe6b2;</i>
                    <cite>用户消息</cite>
                </a>
            </li>
            <li>
                <a _href="<?php echo U('Entrust/index');?>">
                    <i class="layui-icon">&#xe62a;</i>
                    <cite>委托找房</cite>
                    <span class="layui-badge" id="msg_count3">1</span>
                </a>
            </li>
            <li>
                <a _href="<?php echo U('Bespeak/index');?>">
                    <i class="layui-icon">&#xe60a;</i>
                    <cite>预约看房</cite>
                    <span class="layui-badge" id="msg_count">1</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="iconfont">&#xe726;</i>
                    <cite>用户管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>网站用户</cite>
                        </a>
                    </li>
                </ul>
                <ul class="sub-menu">
                    <li>
                        <a _href="">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>后台管理员</cite>
                        </a>
                    </li>
                </ul>
                <ul class="sub-menu">
                    <li>
                        <a _href="">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>角色管理</cite>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="iconfont">&#59054;</i>
                    <cite>系统管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="<?php echo U('Setting/index');?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>系统设置</cite>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
<!-- <div class="x-slide_left"></div> -->
<!-- 左侧菜单结束 -->
<!-- 右侧主体开始 -->
<div class="page-content">
    <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
        <ul class="layui-tab-title">
            <li>我的桌面</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <iframe src="<?php echo U('Index/welcome');?>" frameborder="0" scrolling="yes" class="x-iframe"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="page-content-bg"></div>
<!-- 右侧主体结束 -->
<!-- 中部结束 -->
<!-- 底部开始 -->
<div class="footer">
    <div class="copyright">Copyright ©2018 All Rights Reserved</div>
</div>
<!-- 底部结束 -->
<!--<script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>-->
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<script src="/Public/Admin/lib/layui/layui.js" charset="utf-8"></script>
<script type="text/javascript" src="/Public/Admin/js/xadmin.js"></script>

<!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
<!--[if lt IE 9]>-->
  <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
  <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<!--<![endif]-->
<script type="text/javascript" src="/Public/Admin/scripts/module.js"></script>
<script type="text/javascript" src="/Public/Admin/scripts/hotkeys.js"></script>
<script type="text/javascript" src="/Public/Admin/scripts/uploader.js"></script>
<script type="text/javascript" src="/Public/Admin/scripts/simditor.js"></script>
</body>
<script>
    setInterval(function getMsgCount(){
        $.get('<?php echo U("Index/getBespeakCount");?>',function (res) {
            $('#msg_count').html(res);
        });
        $.get('<?php echo U("Index/getEntrustCount");?>',function (res) {
            $('#msg_count3').html(res);
        })
    },10000);
</script>
</html>