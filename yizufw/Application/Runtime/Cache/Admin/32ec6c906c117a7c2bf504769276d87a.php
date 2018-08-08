<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
<body class="login-bg">
<div class="login">
    <div class="message">乙租管理系统</div>
    <div id="darkbannerwrap"></div>
    <form method="post" class="layui-form">
        <input name="username" type="text" lay-verify="username" class="layui-input" placeholder="用户名">
        <hr class="hr15">
        <input name="password" lay-verify="pass" placeholder="密码" type="password" class="layui-input">
        <hr class="hr15">
        <input id="code" name="code" class="layui-input" type="text" placeholder="验证码" maxlength="4">
        <hr class="hr15">
        <img id="vc_img" src="<?php echo U('login/verify_code');?>">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a id="kanbuq" href="javascript:void(0);">看不清，换一张</a>
        <hr class="hr15">
        <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="submit" id="login_btn">
        <hr class="hr20">
    </form>
</div>
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
<script>
    $(function () {
        layui.use('form', function () {
            let form = layui.form;
            form.render();
            //自定义验证规则
            form.verify({
                username: function (value, item) { //value：表单的值、item：表单的DOM对象
                    if (!new RegExp("^[a-zA-Z0-9_.@-]{5,30}$").test(value)) {
                        return '5到30位（字母，数字，下划线，减号，英文句号，@）';
                    }
                    if (/(^\_)|(\__)|(\_+$)/.test(value)) {
                        return '用户名首尾不能出现下划线\'_\'';
                    }
                    if (/^\d+\d+\d$/.test(value)) {
                        return '用户名不能全为数字';
                    }
                },
                pass: [/^[\S]{5,16}$/, '密码必须5到16位，且不能出现空格']
            });


            //点击图片更换验证码
            $("#kanbuq").click(function () {
                $("#vc_img").attr("src", "<?php echo U('login/verify_code');?>");
            });

            //监听提交
            form.on('submit(login)', function () {
                $.ajax({
                    type: "POST",
                    url: "<?php echo U('login/check');?>",
                    data: $('.layui-form').serialize(),
                    dataType: "json",
                    success: function (res) {
                        if (res.status == 1) {
                            $('.login').hide();
                            layer.msg(res.message, {
                                icon: 16
                                , shade: 0.01
                            }, function () {
                                location.href = "<?php echo U('index/index');?>";
                            });
                        } else {
                            layer.msg(res.message, function () {
                                //关闭后的操作
                            });
                            return false;
                        }
                    }
                });
                return false;
            });
        });
    });
</script>
<!-- 底部结束 -->
</body>
</html>