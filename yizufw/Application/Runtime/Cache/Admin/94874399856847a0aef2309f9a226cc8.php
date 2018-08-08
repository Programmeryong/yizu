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
        <a><cite>系统设置</cite></a>
      </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right;padding-top: 6px"
       href="javascript:location.replace(location.href);" title="刷新">
        刷新</a>
</div>
<div class="x-body">
    <blockquote class="layui-elem-quote"><span class="x-red">*</span>乙租网
    </blockquote>
    <form class="layui-form" enctype="multipart/form-data" method="post" id="config">
        <?php if(is_array($system)): $i = 0; $__LIST__ = $system;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$system): $mod = ($i % 2 );++$i;?><div class="layui-form-item">
            <label class="layui-form-label">
                网站名称
            </label>
            <div class="layui-input-inline">
                <input type="text" name="site_name" required lay-verify="required" autocomplete="off"
                       class="layui-input"
                       value="<?php echo ($system["site_name"]); ?>" id="site_name">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                网址
            </label>
            <div class="layui-input-inline">
                <input type="text" name="site_url" required lay-verify="required" autocomplete="off" class="layui-input"
                       value="<?php echo ($system["site_url"]); ?>" id="site_url">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                站点邮箱
            </label>
            <div class="layui-input-inline">
                <input type="text" name="site_email" required lay-verify="required" autocomplete="off"
                       class="layui-input"
                       value="<?php echo ($system["site_email"]); ?>" id="site_email">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                关键字
            </label>
            <div class="layui-input-inline">
                <input type="text" name="keyword" required lay-verify="required" autocomplete="off" class="layui-input"
                       value="<?php echo ($system["keyword"]); ?>" id="keyword">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                咨询电话
            </label>
            <div class="layui-input-inline">
                <input type="text" name="config_tel" required lay-verify="required" autocomplete="off"
                       class="layui-input"
                       value="<?php echo ($system["config_tel"]); ?>" id="config_tel">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                电子邮箱
            </label>
            <div class="layui-input-inline">
                <input type="text" name="email" required lay-verify="required" autocomplete="off" class="layui-input"
                       value="<?php echo ($system["email"]); ?>" id="email">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                QQ
            </label>
            <div class="layui-input-inline">
                <input type="text" name="qq" required lay-verify="required" autocomplete="off" class="layui-input"
                       value="<?php echo ($system["qq"]); ?>" id="qq">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                新浪微博
            </label>
            <div class="layui-input-inline">
                <input type="text" name="sina" required lay-verify="required" autocomplete="off" class="layui-input"
                       value="<?php echo ($system["sina"]); ?>" id="sina">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                咨询时间
            </label>
            <div class="layui-input-inline">
                <input type="text" name="worktime" required lay-verify="required" autocomplete="off"
                       class="layui-input" value="<?php echo ($system["worktime"]); ?>" id="worktime">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                备案号
            </label>
            <div class="layui-input-inline">
                <input type="text" name="beian" required lay-verify="required" autocomplete="off" class="layui-input"
                       value="<?php echo ($system["beian"]); ?>" id="beian">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                传真
            </label>
            <div class="layui-input-inline">
                <input type="text" name="fax" required lay-verify="required" autocomplete="off" class="layui-input"
                       value="<?php echo ($system["fax"]); ?>" id="fax">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                联系人
            </label>
            <div class="layui-input-inline">
                <input type="text" name="contact" required lay-verify="required" autocomplete="off" class="layui-input"
                       value="<?php echo ($system["contact"]); ?>" id="contact">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                邮编
            </label>
            <div class="layui-input-inline">
                <input type="text" name="codzend" required lay-verify="required" autocomplete="off" class="layui-input"
                       value="<?php echo ($system["codzend"]); ?>" id="codzend">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                固定电话
            </label>
            <div class="layui-input-inline">
                <input type="text" name="gu_tel" required lay-verify="required" autocomplete="off" class="layui-input"
                       value="<?php echo ($system["gu_tel"]); ?>" id="gu_tel">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                公司名称
            </label>
            <div class="layui-input-inline">
                <input type="text" name="company" required lay-verify="required" autocomplete="off" class="layui-input"
                       value="<?php echo ($system["company"]); ?>" id="company">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                公司简介
            </label>
            <div class="layui-input-block">
                <input type="text" name="description" required lay-verify="required" autocomplete="off"
                       class="layui-input"
                       value="<?php echo ($system["description"]); ?>" id="description">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                公司地址
            </label>
            <div class="layui-input-block">
                <input type="text" name="address" required lay-verify="required" autocomplete="off" class="layui-input"
                       value="<?php echo ($system["address"]); ?>" id="address">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                版权信息
            </label>
            <div class="layui-input-block">
                <input type="text" name="copyright" required lay-verify="required" autocomplete="off"
                       class="layui-input"
                       value="<?php echo ($system["copyright"]); ?>" id="copyright">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                最后修改时间
            </label>
            <div class="layui-input-inline">
                <input type="text" name="add_time" required lay-verify="required" autocomplete="off" class="layui-input laydate-disabled"
                       value="<?php echo (date('Y-m-d H:i:s',$system["add_time"])); ?>" id="add_time" disabled>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="save">保存</button>
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </form>
</div>

</div>
<script>
    layui.use('form', function () {
        let form = layui.form;
        form.render();
        //监听提交
        form.on('submit(save)', function () {
            $.ajax({
                type: "POST",
                url: "<?php echo U('Setting/update');?>",
                data: $('.layui-form').serialize(),
                dataType: "json",
                success: function (res) {
                    if (res == 200){
                        layer.msg('更新成功', {icon: 1, time: 1500});
                    }else{
                        layer.msg('更新失败', {icon: 2, time: 1500});
                    }
                }
            });
            return false;
        });
    });
</script>
</body>
</html>