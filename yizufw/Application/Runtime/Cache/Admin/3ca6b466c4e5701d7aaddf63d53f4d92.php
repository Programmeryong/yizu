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
<div class="x-body">
    <blockquote class="layui-elem-quote"><span class="x-red">*</span>
        sss
    </blockquote>
    <form class="layui-form" method="post" enctype="multipart/form-data">
        <div class="layui-form-item">
            <label class="layui-form-label">
                <span class="x-red">*</span>轮播图
            </label>
            <div class="layui-input-block">
                <img class="layui-upload-img" id="preview"
                     style="width: 470px;height: 200px; border: 1px dashed #cccccc">
            </div>
            <input type="hidden" name="img_src" id="img_src"/>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
            </label>
            <div class="layui-input-inline">
                <button type="button" class="layui-btn" id="img">
                    <i class="layui-icon">&#xe67c;</i>选择图片
                </button>
                <a class="layui-btn reload layui-hide">重试</a>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                备注
            </label>
            <div class="layui-input-block">
                <input type="text" name="remark" required lay-verify="remark" autocomplete="off" class="layui-input"
                       id="remark">
            </div>
        </div>

        <input name="upload_id" value="<?php echo (session('admin_id')); ?>" type="hidden">
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
    layui.use(['upload','form','layer'], function(){
        let $ = layui.jquery
            ,upload = layui.upload
            ,form = layui.form;
        form.render();
        //图片上传
        let uploadInst = upload.render({
            elem: '#img'
            ,url: '<?php echo U('Banner/upload');?>'
            ,before: function(obj){
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
                    $('#preview').attr('src', result); //图片链接（base64)
                });
            },
            done: function (res) {
                //如果上传失败
                if (res.status == 0) {
                    layer.msg('上传失败，请重新上传', {icon: 2, time: 1500});
                    $('.reload').removeClass('layui-hide').on('click', function () {
                        uploadInst.upload();
                    });
                } else if (res.status == 1) {
                    //上传成功
                    $('.reload').addClass('layui-hide');
                    $('#img_src').val(res.src);
                    layer.msg('上传成功，请点击保存', {icon: 1, time: 1500});
                }
            },
            error: function () {
                //演示失败状态，并实现重传
                layer.msg('上传失败，请重新上传', {icon: 2, time: 1500});
                $('.reload').removeClass('layui-hide').on('click', function () {
                    uploadInst.upload();
                });
            }
        });
        //监听提交
        form.on('submit(add)', function () {
            let img_64 = $('#img_64').val();
            if (img_64 != ''){
                $.ajax({
                    type: "POST",
                    url: "<?php echo U('Banner/add');?>",
                    data: $('.layui-form').serialize(),
                    dataType: "json",
                    success: function (res) {
                        if (res == 200){
                            layer.alert("添加成功，请刷新查看", {icon: 1}, function () {
                                // 获得frame索引
                                var index = parent.layer.getFrameIndex(window.name);
                                //关闭当前frame
                                parent.layer.close(index);
                            });
                        }else {
                            layer.alert("增加失败，请重新增加", {icon: 5});
                        }
                    }
                });
            }else {
                layer.msg("请选择要上传的图片", {icon: 5, time: 1500});
            }
            return false;
        });
    });
</script>
</body>
</html>