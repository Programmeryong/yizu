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
    <blockquote class="layui-elem-quote">
        <span class="x-red">*</span>
        0
    </blockquote>
    <xblock>
        <span class="x-right" style="line-height:40px;">
            &nbsp;&nbsp;&nbsp;共有数据：&nbsp;<span id="count"> <?php echo ($count); ?> </span>&nbsp;条
        </span>
    </xblock>
    <div id="panel" lay-filter="panel">
        <div class="layui-form">
            <table class="layui-table">
                <thead>
                <tr>
                    <th width="10%">ID</th>
                    <th width="15%">新闻类别</th>
                    <th width="20%">展示缩略图</th>
                    <th width="45%">文章标题</th>
                    <th width="10%">操作</th>
                </thead>
                <tbody id="x-img">
                <?php if(is_array($news_list)): $i = 0; $__LIST__ = $news_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vo["id"]); ?></td>
                        <td><?php echo ($vo["title"]); ?></td>
                        <td>
                            <img class="layui-upload-img table-img" id="preview" src='<?php echo ($vo["img_url"]); ?>'>
                        </td>
                        <td><?php echo ($vo["news_title"]); ?></td>
                        <td>
                            <button class="layui-btn" id="save" data-id="<?php echo ($vo["id"]); ?>">
                                选择
                            </button>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <div class="page">
                <?php echo ($page); ?>
            </div>
        </div>
    </div>
</div>
<script>
    layui.use(['layer', 'form'], function () {
        let layer = layui.layer,
            form = layui.form;
        form.render();
        layer.ready(function () { //为了layer.ext.js加载完毕再执行
            layer.photos({
                photos: '#x-img'
                , shift: 4 //0-6的选择，指定弹出图片动画类型，默认随机
            });
        });

        //无刷新分页
        $('body').on('click', '.page a', function () {
            let url = $(this).attr('href');
            if (typeof(url) != "undefined") {
                $.get(url, function (data) {
                    $('#panel').html(data);
                    form.render();
                    layer.ready(function () { //为了layer.ext.js加载完毕再执行
                        layer.photos({
                            photos: '#x-img'
                            , shift: 4 //0-6的选择，指定弹出图片动画类型，默认随机
                        });
                    });
                });
            } else {
                layer.ready(function () { //为了layer.ext.js加载完毕再执行
                    layer.photos({
                        photos: '#x-img'
                        , shift: 4 //0-6的选择，指定弹出图片动画类型，默认随机
                    });
                });
            }
            return false;
        });
    });

    $('body').on('click', '#save', function () {
        let id = $(this).attr('data-id');
        layer.confirm('确认要选择添加吗？', function () {
            //捉到所有被选中的，发异步进行添加
            $.post("<?php echo U('NewsBanner/save');?>", {
                id: id
            }, function (res) {
                if (res.status == 0) {
                    layer.msg(res.msg, {icon: 2, time: 1500});
                }
                if (res.status == 1) {
                    layer.msg(res.msg, {icon: 1, time: 1500});
                }
                if (res.status == 2) {
                    layer.msg(res.msg, {icon: 2, time: 1500});
                }
            });
            return false;
        });
    })
</script>
</body>
</html>