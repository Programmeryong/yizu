<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>乙租管理系统</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--<meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />-->
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
</head>
<link rel="stylesheet" href="/Public/Admin/css/font.css">
<link rel="stylesheet" href="/Public/Admin/css/xadmin.css">
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/simditor.css"/>
<body>
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
<div class="x-body">
    <blockquote class="layui-elem-quote"><span class="x-red">*</span>为必填项
    </blockquote>
    <form class="layui-form" method="post" id="add_link">
        <div class="layui-form-item">
            <label for="link_name" class="layui-form-label">
                <span class="x-red">*</span>链接名称
            </label>
            <div class="layui-input-inline">
                <input type="text" id="link_name" name="link_name" lay-verify="link_name"
                       autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux">
                <span class="x-red">*</span>用于显示的标题，一般为网站名称
            </div>
        </div>
        <div class="layui-form-item">
            <label for="link_url" class="layui-form-label">
                <span class="x-red">*</span>链接URL
            </label>
            <div class="layui-input-inline">
                <input type="text" id="link_url" name="link_url" lay-verify="link_url"
                       autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux">
                <span class="x-red">*</span>用于跳转的链接地址，一般为网站地址
            </div>
        </div>
        <div class="layui-form-item">
            <label for="link_desc" class="layui-form-label">
                网站简介
            </label>
            <div class="layui-input-block">
                <textarea name="link_desc" id="link_desc" placeholder="请输入内容" class="layui-textarea"></textarea>
            </div>
        </div>
        <input name="add_id" value="<?php echo (session('admin_id')); ?>" type="hidden">
        <div class="layui-form-item">
            <label class="layui-form-label">
            </label>
            <button class="layui-btn" lay-filter="add" lay-submit="">
                保存
            </button>
        </div>
    </form>
</div>
<script>
    layui.use(['form', 'layer'], function () {
        let $ = layui.jquery;
        let form = layui.form
            , layer = layui.layer;
        form.render();
        //自定义验证规则
        form.verify({
            link_name: [/^.{1,50}$/, '标题长度为1到50位'],
            link_url: [/^.{4,200}$/, '地址长度为4到200位']
        });

        //监听提交
        form.on('submit(add)', function () {
            $.ajax({
                type: "POST",
                url: "<?php echo U('Link/add');?>",
                data: $('.layui-form').serialize(),
                dataType: "json",
                success: function (res) {
                    if (res == 200){
                        layer.alert("添加成功，请刷新查看", {icon: 1}, function () {
                            // 获得frame索引
                            let index = parent.layer.getFrameIndex(window.name);
                            //关闭当前frame
                            parent.layer.close(index);
                        });
                    }else{
                        layer.alert("增加失败，请重新增加", {icon: 5});
                    }
                }
            });
            return false;
        });
    });
</script>
</body>
</html>