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
<div class="x-nav">
      <span class="layui-breadcrumb">
        <a><cite>预约看房</cite></a>
      </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right;padding-top: 6px"
       href="javascript:location.replace(location.href);" title="刷新">
        刷新</a>
</div>
<div class="x-body">
    <blockquote class="layui-elem-quote">
        <span class="x-red">*</span>
        预约看房列表
        <span class="x-right" style="line-height:40px;">
            &nbsp;&nbsp;&nbsp;共有数据：&nbsp;<span id="count"><?php echo ($count); ?></span>&nbsp;条
        </span>
    </blockquote>
    <div id="panel" lay-filter="panel">
        <div class="layui-form">
            <table class="layui-table">
                <thead>
                <tr>
                    <th width="14%">ID</th>
                    <th width="14%">用户</th>
                    <th width="14%">联系电话</th>
                    <th width="14%">预约时间</th>
                    <th width="14%">状态</th>
                    <th width="14%">处理人</th>
                    <th width="14%">操作</th>
                </thead>
                <tbody id="x-img">
                <?php if(is_array($bespeak_list)): $i = 0; $__LIST__ = $bespeak_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vo["id"]); ?></td>
                        <td><?php echo ($vo["user_id"]); ?></td>
                        <td><?php echo ($vo["phone"]); ?></td>
                        <td><?php echo (date('Y-m-d H:i:s',$vo["add_time"])); ?></td>
                        <td class="td-status">
                            <?php if(($vo["status"]) == "1"): ?><span class="layui-badge layui-bg-green">已联系</span>
                                <?php else: ?>
                                <span class="layui-badge layui-bg-red">未联系</span><?php endif; ?>
                        </td>
                        <td class="admin-username"><?php echo ($vo["username"]); ?></td>
                        <td class="td-manage">
                            <?php if(($vo["status"]) == "1"): ?><a class="layui-btn layui-btn-small"
                                   style="line-height:1.6em;margin-top:3px;padding-top: 6px;cursor: default;opacity: 0.2;"
                                   href="javascript:void(0);" onclick="return false;">
                                    已联系?点击更改状态</a>
                                <?php else: ?>
                                <a class="layui-btn layui-btn-small"
                                   style="line-height:1.6em;margin-top:3px;padding-top: 6px"
                                   href="javascript:void(0);"
                                   onclick="member_stop(this,'<?php echo ($vo["id"]); ?>','<?php echo (session('admin_id')); ?>');">
                                    已联系?点击更改状态</a><?php endif; ?>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <div class="page">

            </div>
        </div>
        <div class="layui-hide" id="username"><?php echo (session('username')); ?></div>
    </div>
</div>
<script>
    layui.use(['layer', 'form'], function () {
        let form = layui.form;
        form.render();

        //无刷新分页
        $('body').on('click', '.page a', function () {
            let url = $(this).attr('href');
            if (typeof(url) != "undefined") {
                $.get(url, function (data) {
                    $('#panel').html(data);
                    form.render();
                });
            }
            return false;
        });
    });

    /*隐藏*/
    function member_stop(obj, id, admin_id) {
        layer.confirm('已联系？确认要更改状态吗？', function () {
            let username = $('#username').html();
                //发异步把用户状态进行更改
                $.post("<?php echo U('Bespeak/setStatus');?>", {
                    id: id,
                    admin_id:admin_id
                }, function (res) {
                    if (res == 200) {
                        $(obj).attr('onclick', 'return false');
                        $(obj).css({'cursor':'default','opacity':'0.2'});
                        $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-bg-gray').addClass('layui-bg-green').html('已处理');
                        $(obj).parents("tr").find(".admin-username").html(username);
                        layer.msg('已更改', {icon: 1, time: 1500});
                    } else if (res == 0) {
                        layer.msg('更改失败', {icon: 2, time: 1500});
                    }
                });
            return false;
        });
    }
</script>
</body>
</html>