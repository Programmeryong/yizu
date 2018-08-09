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
        添加新闻
    </blockquote>
    <form class="layui-form" method="post" id="add_article_type" enctype="multipart/form-data">
        <div class="layui-form-item">
            <label class="layui-form-label">
                <span class="x-red">*</span>新闻类别
            </label>
            <div class="layui-input-inline">
                <div class="layui-input-inline layui-form" lay-filter="type-div">
                    <select id="type" lay-verify="required" lay-filter="type">
                        <?php if(is_array($type_list)): $i = 0; $__LIST__ = $type_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                <span class="x-red">*</span>展示缩略图
            </label>
            <div class="layui-input-block">
                <img class="layui-upload-img" id="preview"
                     style="width: 424px;height: 235px; border: 1px dashed #cccccc">
            </div>
            <input type="hidden" name="img_url" id="img_url"/>
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
                <span class="x-red">*</span>文章标题
            </label>
            <div class="layui-input-block">
                <input type="text" name="news_title" required lay-verify="news_title" autocomplete="off" class="layui-input"
                       id="news_title">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                <span class="x-red">*</span>新闻关键字
            </label>
            <div class="layui-input-block">
                <input type="text" name="keyword" required lay-verify="keyword" autocomplete="off" class="layui-input"
                       id="keyword">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                <span class="x-red">*</span>新闻摘要
            </label>
            <div class="layui-input-block">
                <input type="text" name="describe" required lay-verify="describe" autocomplete="off" class="layui-input"
                       id="describe">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                <span class="x-red">*</span>文章内容
            </label>
            <div class="layui-input-block">
                <textarea id="simeditor" name="simeditor" autofocus></textarea>
            </div>
        </div>
        <input id="author_id" value="<?php echo (session('admin_id')); ?>" type="hidden">
        <div class="layui-form-item">
            <label class="layui-form-label">
            </label>
            <button class="layui-btn" lay-filter="add" lay-submit="">
                保存
            </button>
            <button class="layui-btn" id="preview1">
                预览
            </button>
        </div>
    </form>
</div>
<script>
    layui.use(['form', 'layer', 'upload'], function () {
        let $ = layui.jquery,
            form = layui.form,
            layer = layui.layer,
            upload = layui.upload;
        form.render();
        //初始化文本编辑器
        let editor = new Simditor({
            //textarea的id
            textarea: $('#simeditor'),
            //工具条都包含哪些内容
            toolbar: [
                'title',
                'fontScale',
                'italic',
                'underline',
                'strikethrough',
                'bold',
                'color',
                'ol',// ordered list
                'ul',// unordered list
                'blockquote',
                'code',//code block
                'table',
                'link',
                'image',
                'hr',//horizontal ruler
                'indent',
                'outdent',
                'alignment'
            ],
            //若需要上传功能，上传的参数设置。
            upload: {
                url: '<?php echo U('News/uploadNewsImg');?>', //文件上传的接口地址
                params: null, //键值对,指定文件上传接口的额外参数,上传的时候随文件一起提交
                fileKey: 'FileName', //服务器端获取文件数据的参数名
                connectionCount: 15,//可以同时上传多少张图片;
                leaveConfirm: '上传正在进行中，您一定要离开这个页面吗？'
            },
            pasteImage: true,//支持从剪贴板粘贴图片上传。与uploadFirefox和Chrome 一起工作，只有Firefox和Chrome支持。
            cleanPaste: true,//自动删除粘贴内容中的所有样式。
            toolbarFloat: true
        });

        //图片上传
        let uploadInst = upload.render({
            elem: '#img',
            url: '<?php echo U('News/upload');?>',
            accept: 'images', //允许上传的文件类型
            exts: 'jpg|png|gif',
            // size: 500, //最大允许上传的文件大小
            before: function (obj) {
                //预读本地文件示例，不支持ie8
                obj.preview(function (index, file, result) {
                    $('#preview').attr('src', result); //图片链接（base64）
                });
            },
            done: function (res) {
                //如果上传失败
                if (res.status == 0) {
                    layer.msg('上传失败', {icon: 2, time: 1500});
                    $('.reload').removeClass('layui-hide').on('click', function () {
                        uploadInst.upload();
                    });
                } else if (res.status == 1) {
                    //上传成功
                    $('.reload').addClass('layui-hide');
                    $('#img_url').val(res.src);
                    layer.msg('上传成功', {icon: 1, time: 1500});
                }
            },
            error: function () {
                //演示失败状态，并实现重传
                layer.msg('上传失败', {icon: 2, time: 1500});
                $('.reload').removeClass('layui-hide').on('click', function () {
                    uploadInst.upload();
                });
            }
        });

        //监听提交
        form.on('submit(add)', function () {
            let img_url = $('#img_url').val();
            let news_title = $('#news_title').val();
            let keyword = $('#keyword').val();
            let describe = $('#describe').val();
            let author_id = $('#author_id').val();
            let type = $('#type').val();
            let content = editor.getValue();
            if (img_url != ''){
                if (content != ''){
                    //发异步，把数据提交给php
                    $.post("<?php echo U('News/save');?>", {
                        img_url: img_url,
                        news_title: news_title,
                        keyword: keyword,
                        type: type,
                        describe:describe,
                        author_id:author_id,
                        content: content
                    }, function (res) {
                        if (res == 200) {
                            layer.alert("添加成功，请刷新查看", {icon: 1}, function () {
                                // 获得frame索引
                                let index = parent.layer.getFrameIndex(window.name);
                                //关闭当前frame
                                parent.layer.close(index);
                            });
                        } else {
                            layer.msg("添加失败", {icon: 2, time: 1500});
                        }
                    });
                }else {
                    layer.msg("文章内容不能为空", {icon: 5, time: 1500});
                }
            }else {
                layer.msg("请选择要上传的图片", {icon: 5, time: 1500});
            }
            return false;
        });

        //预览
        $('body').on('click', '#preview1', function () {
            let content = editor.getValue();
            layer.open({
                type: 1,
                area: [700 + 'px', 650 + 'px'],
                fix: false, //不固定
                maxmin: true,
                shadeClose: true,
                shade: 0.4,
                title: '预览',
                content: '<div style="padding: 10px;margin: 10px">'+ content +'</div>'
            });
            return false;
        });
    });
</script>
</body>
</html>