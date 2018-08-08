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
<div class="x-nav">
      <span class="layui-breadcrumb">
        <a><cite>链接管理</cite></a>
      </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right;padding-top: 6px"
       href="javascript:location.replace(location.href);" title="刷新">
        刷新</a>
</div>
<div class="x-body">
    <blockquote class="layui-elem-quote">
        <span class="x-red">*</span>最多显示7条友情链接，如果大于7条，将从ID大小降序显示
    </blockquote>
    <xblock>
        <button class="layui-btn layui-btn-danger" onclick="delAll()">
            <i class="layui-icon">&#xe640;</i>批量删除
        </button>
        <button class="layui-btn" onclick="x_admin_show('添加友情链接','<?php echo U('link/addShow');?>',700,420)">
            <i class="layui-icon">&#xe608;</i>添加
        </button>
        <span class="x-right" style="line-height:40px;">
            &nbsp;&nbsp;&nbsp;共有数据：&nbsp;<span id="count"><?php echo ($count); ?></span>&nbsp;条
        </span>
    </xblock>
    <div id="panel" lay-filter="panel">
        <div class="layui-form">
            <table class="layui-table">
                <thead>
                <tr>
                    <th width="20">
                        <input type="checkbox" class="-checkbox -header" lay-skin="primary" lay-filter="allChoose">
                    </th>
                    <th width="30">ID</th>
                    <th width="150">链接名称</th>
                    <th width="200">链接URL</th>
                    <th width="400">网站简介</th>
                    <th width="80">添加人</th>
                    <th width="150">添加时间</th>
                    <th width="50">显示状态</th>
                    <th width="50">操作</th>
                </thead>
                <tbody>
                <?php if(is_array($link_list)): $i = 0; $__LIST__ = $link_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><td>
                        <input type="checkbox" class="-checkbox" lay-skin="primary" lay-filter="itemChoose"
                               data-id='<?php echo ($vo["id"]); ?>'>
                    </td>
                    <td><?php echo ($vo["id"]); ?></td>
                    <td><?php echo ($vo["link_name"]); ?></td>
                    <td><?php echo ($vo["link_url"]); ?></td>
                    <td><?php echo ($vo["link_desc"]); ?></td>
                    <td><?php echo ($vo["username"]); ?></td>
                    <td><?php echo (date("Y-m-d H:i:s",$vo["add_time"])); ?></td>
                    <td class="td-status">
                        <?php if(($vo["status"]) == "1"): ?><span class="layui-badge layui-bg-green">已显示</span>
                        <?php else: ?>
                        <span class="layui-badge layui-bg-gray">已隐藏</span><?php endif; ?>
                    </td>
                    <td class="td-manage">
                        <?php if(($vo["status"]) == "1"): ?><a onclick="member_stop(this,'<?php echo ($vo["id"]); ?>','<?php echo ($vo["status"]); ?>')"
                           href="javascript:void(0);" title="隐藏">
                            <i class="layui-icon">&#xe6af;</i>
                        </a>
                        <?php else: ?>
                        <a onclick="member_stop(this,'<?php echo ($vo["id"]); ?>','<?php echo ($vo["status"]); ?>')"
                           href="javascript:void(0);" title="显示">
                            <i class="layui-icon">&#xe69c;</i>
                        </a><?php endif; ?>
                        <a title="修改" onclick="x_admin_show('修改','<?php echo U('Link/updateShow');?>'+'?id='+<?php echo ($vo["id"]); ?>,700,420)"
                           href="javascript:void(0);">
                            <i class="layui-icon">&#xe642;</i>
                        </a>
                        <a title="删除" onclick="member_del(this,'<?php echo ($vo["id"]); ?>')"
                           href="javascript:void(0);">
                            <i class="layui-icon">&#xe640;</i>
                        </a>
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

    layui.use(['layer', 'form', 'laydate'], function () {
        let layer = layui.layer,
            form = layui.form;
        form.render();
    });


    /*隐藏*/
    function member_stop(obj, id, status) {
        layer.confirm('确认要更改状态吗？', function () {
            if ($(obj).attr('title') == '显示') {
                //发异步把用户状态进行更改
                $.post("<?php echo U('Link/setStatus');?>", {
                    id: id,
                    status: status
                }, function (res) {
                    if (res == 200) {
                        $(obj).attr('title', '隐藏');
                        $(obj).find('i').html('&#xe6af;');

                        $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-bg-gray').addClass('layui-bg-green').html('已显示');
                        layer.msg('已显示!', {icon: 1, time: 3000});
                    } else {
                        layer.msg('显示失败!', {icon: 2, time: 1000});
                    }
                });
            } else {
                //发异步把用户状态进行更改
                $.post("<?php echo U('Link/setStatus');?>", {
                    id: id,
                    status: status
                }, function (res) {
                    if (res == 200) {
                        $(obj).attr('title', '显示');
                        $(obj).find('i').html('&#xe69c;');

                        $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-bg-green').addClass('layui-bg-gray').html('已隐藏');
                        layer.msg('已隐藏!', {icon: 1, time: 3000});
                    } else {
                        layer.msg('隐藏失败!', {icon: 2, time: 1000});
                    }
                });
            }
            return false;
        });
    }

    /*删除*/
    function member_del(obj, id) {
        layer.confirm('确认要删除吗？', function () {
            //发异步删除数据
            $.post("<?php echo U('Link/delete');?>", {
                id: id
            }, function (res) {
                if (res == 200) {
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!', {icon: 1, time: 1000});
                } else {
                    layer.msg('删除失败!', {icon: 2, time: 1000});
                }
            });
            return false;
        });
    }


    function delAll() {
        let data = tableCheck.getData();
        if (data != '') {
            layer.confirm('确认要删除吗？', function () {
                //捉到所有被选中的，发异步进行删除
                $.post("<?php echo U('Link/delAll');?>", {
                    data: data
                }, function (res) {
                    if (res == 200) {
                        layer.msg('删除成功', {icon: 1});
                        $(".layui-form-checked").not('.header').parents('tr').remove();
                    } else {
                        layer.msg('删除失败', {icon: 2});
                    }
                });
            });
        } else {
            layer.msg('请勾选需要删除的数据', function () {
            });
        }
    }
</script>
</body>
</html>