<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/Public/Home/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/Public/Home/css/yizu_collection_top.css"/>
    <link rel="stylesheet" href="/Public/Home/css/my_collection.css"/>
    <link rel="stylesheet" href="/Public/Home/css/yizu_paging.css"/>
    <link rel="stylesheet" href="/Public/Home/css/yizu_collection_bottom.css"/>
    <script type="text/javascript" src="/Public/Home/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/index_style.css">
    <title></title>
</head>
<!--用于弹框后一层阴影铺满浏览器-->
<!--<div class="temp"></div>-->

<!-- 登录 -->
<div class="login">
    <div class="title">
        <p class="fsize24 clearfix">快捷登录 <span class="closed"></span></p>
        <p class="fsize14">登录享受更多优惠服务</p>
    </div>
    <form action="" method="post" class="clearfix" id="login">
        <input type="tel" class="phone" name="phone" id="phone" placeholder="手机号码"/>
        <input type="text" class="yzm" name="code" id="code" placeholder="验证码" maxlength="4"/>
        <input type="button" name="getCode" id="getCode" value="获取验证码"/>
        <input type="text" name="is_seven" id="is_seven" value="0" style="display: none"/>
        <p class="clearfix"><span class="checkb fsize14" data-id="0">7天内免登录</span></p>
        <p id="error_tips" class="clearfix" style="display: none;color: #F52230">验证码错误，登录失败</p>
        <input type="submit" value="确    定"/>
    </form>
</div>

<!-- 顶部导航栏开始 -->
<nav class="navbar navbar-default top_bg mar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul id="top_text" class="nav navbar-nav">
                <li><a href="/">首页</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">出租 <span class="caret"></span></a>
                    <ul id="nav_mintext" class="dropdown-menu nav_mintext">
                        <li><a href="#">写字楼出租</a></li>
                        <li><a href="#">创意园出租</a></li>
                        <li><a href="#">厂房出租</a></li>
                    </ul>
                </li>
                <!-- <li><a href="#">地图找房</a></li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">乙租服务 <span class="caret"></span></a>
                    <ul id="nav_mintext" class="dropdown-menu">
                        <li><a href="#">装修服务</a></li>
                        <li><a href="#">工商服务</a></li>
                        <li><a href="#">财税</a></li>
                        <li><a href="#">办公设备</a></li>
                        <li><a href="#">品牌推广</a></li>
                        <li><a href="#">活动策划</a></li>
                        <li><a href="#">办公协同系统</a></li>
                        <li><a href="#">搬家服务</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo U('News/index');?>">新闻资讯</a></li>
                <li><a href="#">关于乙租</a></li>
            </ul>
            <ul id="nav_right" class="nav navbar-nav navbar-right">
                <?php if(($is_login) == "0"): ?><li class="rightclick1 login_btn"><a href="#">登录</a></li>
                    <li class="login_btn"><span>｜</span></li>
                    <li class="rightclick2 login_btn"><a href="#">注册</a></li>
                    <?php else: ?>
                    <li class="dropdown righthis">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false" style="padding-bottom: 5px;">
                            <?php if(($is_login) == "1"): ?><img src="<?php echo (session('img_url')); ?>"><?php endif; ?>
                            <?php if(($is_login) == "2"): ?><img src="<?php echo (session('img_url')); ?>"><?php endif; ?>
                        </a>
                        <ul id="nav_mintext" class="dropdown-menu nav_mintext">
                            <?php if(($is_login) == "1"): ?><li><a href="<?php echo (session('user_id')); ?>">消息</a></li>
                                <li><a href="<?php echo U('User/setUser');?>?id=<?php echo (session('user_id')); ?>">账号设置</a></li>
                                <li><a href="<?php echo U('User/index');?>?id=<?php echo (session('user_id')); ?>">个人中心</a></li><?php endif; ?>
                            <?php if(($is_login) == "2"): ?><li><a href="<?php echo (cookie('user_id')); ?>">消息</a></li>
                                <li><a href="<?php echo U('User/setUser');?>?id=<?php echo (cookie('user_id')); ?>">账号设置</a></li>
                                <li><a href="<?php echo U('User/index');?>?id=<?php echo (cookie('user_id')); ?>">个人中心</a></li><?php endif; ?>
                            <li><a href="<?php echo U('login/logout');?>">退出</a></li>
                        </ul>
                    </li><?php endif; ?>
                <li><a href="#" class="nav_rightbtn">发布房源</a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="editmeimg">
    <img src="/Public/Home/images/banner/banner_2.jpg">
</header>
<script>
    $(function () {
        /*获取验证码 60s后重试*/
        let ding = null;
        let ifclick = true;
        $('#getCode').click(function () {
            let phone = $('#phone').val();
            $.post('<?php echo U("Login/sendPhone");?>', {
                phone: phone
            }, function (res) {
                if (res['result'] == 0) {
                    let time = 60;
                    if (ifclick == true) {
                        ding = setInterval(function () {
                            ifclick = false;
                            $("input[type='button']").val(time + "s 后重发").attr('disabled', true);
                            time--;
                            if (time == -2) {
                                ifclick = true;
                                clearInterval(ding);
                                $("input[type='button']").val("获取验证码").attr('disabled', false);
                            }
                        }, 1000);
                    }
                }
            });
            return false;
        });
    });

    $(".login form").submit(function (e) {
        let checkb = $(".login .checkb").attr('data-id');
        let mobile = $(".login input[type='tel']");
        let tel = mobile.val();
        let yanzm = $(".login input[type='text']");
        let yanzm_value = $(yanzm).val();
        let phone = /^[1][3,4,5,7,8][0-9]{9}$/;
        let yzm = /^[0-9]{4}$/;

        if (tel == null || tel == "" || !phone.test(tel)) {
            $(".login input[type='tel']").css({"border": "1px solid #F52230"});//错误
            // return false;
        } else {
            $(".login input[type='tel']").css({"border": "1px solid #5FCC29"});//正确
        }

        if (yanzm_value == "" || yanzm_value == null || !yzm.test(yanzm_value)) {
            $(".login input[type='text']").css({"border": "1px solid #F52230"});//错误
            return false;
        } else {
            $(yanzm).css({"border": "1px solid #5FCC29"});//正确
            if (tel == null || tel == "" || !phone.test(tel)) {
                $(".login input[type='tel']").css({"border": "1px solid #F52230"});//错误
                return false;
            }
        }
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "<?php echo U('login/login');?>",
            data: $('#login').serialize(),
            dataType: "json",
            success: function (res) {
                if (res.status == 1) {
                    $('.login').hide();
                    $('.temp').hide();
                    $('.login_btn').hide();
                    $('#nav_rightbtn_li').before(
                        "<li class=\"dropdown righthis\">" +
                        "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\""+
                        "role=\"button\" aria-haspopup=\"true\"" +
                        "aria-expanded=\"false\" style=\"padding-bottom: 5px;\">" +
                        "<img src=\"" + res.user_img_url + "\"></a>" +
                        "<ul id=\"nav_mintext\" class=\"dropdown-menu nav_mintext\">" +
                        "<li><a href=\"" + res.user_id + "\">消息</a></li>" +
                        "<li><a href=\"<?php echo U('User/setUser');?>?id=" + res.user_id + "\">账号设置</a></li>" +
                        "<li><a href=\"<?php echo U('User/index');?>?id=" + res.user_id + "\">个人中心</a></li>" +
                        "<li><a href=\"<?php echo U('login/logout');?>\">退出</a></li></ul></li>"
                    );
                } else {
                    $(".login input[type='text']").css({"border": "1px solid #F52230"});//错误
                    $('#error_tips').css('display','inline');
                    return false;
                }
            }
        });

    })
</script>

<body>
<!--用于弹框后一层阴影铺满浏览器-->
<?php if(($is_login) == "0"): ?><div class="temp"></div><?php endif; ?>
<!--头部-->
<div class="top">

    <nav class="info">
        <div class="info_from">
            <div class="from_img"><img src="<?php echo ($user_info["img_url"]); ?>" width="100%" height="100%">
            </div>
            <p><span class="name fontSize18"><?php echo ($user_info["nickname"]); ?></span></p>
            <p><span class="tel"><?php echo ($user_info["phone"]); ?></span></p>
            <a href="<?php echo ($user_info["type_id"]); ?>"><p><span class="fontSize18">我要发布房源</span></p></a>
        </div>
        <!--菜单栏-->
        <div class="listnav">
            <ul class="nav nav-pills">
                <li role="presentation" class="active">房源投放</li>
                <li role="presentation">我的收藏</li>
                <li role="presentation">我的优惠券</li>
                <li role="presentation">委托找房</li>
                <li role="presentation">看房记录</li>
                <li role="presentation">推荐拿佣金</li>
            </ul>
        </div>
    </nav>
</div>
<!--中部-->
<div class="middle">
    <!--房源投放-->
    <div class="throw curr" id="indexs0">
        <!--审核房源-->
        <h3>审核房源</h3>
        <div class="shenhe container-fluid">
            <ul class="row">
                <li class="col-md-6">
                    <div>
                        <div class="media">
                            <div class="media-left house_img">
                                <a href="#">
                                    <img class="media-object" src="/Public/Home/images/test/5ae2c75458309.jpg"
                                         alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <p class="clearfix"><span class="shenhe_state fontSize24">审核不通过</span> <span
                                        class="time">2018-06-06 13:55</span></p>
                                <p class="shenhe_info fontSize14">已发布，乙租平台24小时内内完成审核成功方可展示。</p>
                                <p class="floor_name fontSize18">绿巨人写字楼绿巨人写字楼绿巨人写字楼绿巨</p>
                                <p class="typeandmoney">
                                    <img src="/Public/Home/images/icon/edifice.png">
                                    <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                </p>
                                <p class="operation clearfix">
                                    <a href="#"><span>修改</span></a>
                                    <a href="#"><span>查看</span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-md-6">
                    <div>
                        <div class="media">
                            <div class="media-left house_img">
                                <a href="#">
                                    <img class="media-object" src="/Public/Home/images/test/5ae2c75458309.jpg"
                                         alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <p class="clearfix"><span class="shenhe_state fontSize24">审核中</span> <span class="time">2018-06-06 13:55</span>
                                </p>
                                <p class="shenhe_info fontSize14">已发布，乙租平台24小时内内完成审核成功方可展示。</p>
                                <p class="floor_name fontSize18">绿巨人写字楼</p>
                                <p class="typeandmoney">
                                    <img src="/Public/Home/images/icon/edifice.png">
                                    <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                </p>
                                <p class="operation clearfix">
                                    <a href="#"><span>修改</span></a>
                                    <a href="#"><span>查看</span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <!--上传房源-->
        <h3>共上传<span class="fontSize24">23</span>个房源</h3>
        <div class="upload">
            <ul class="row">
                <li class="col-md-3">
                    <a href="#">
                        <div>
                            <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                                <div class="img_info">
                                    <p><span class="fontSize24">审核中</span></p>
                                    <p>已发布，乙租平台24小时内完成审核，成功方可展示</p>
                                    <p class="clearfix"><span class="update">修改</span><span class="del">删除</span></p>
                                </div>
                            </div>
                            <p class="house_name fontSize18">杨桃子创意园</p>
                            <p id="money_type" class="clear">
                                <img src="/Public/Home/images/icon/edifice.png">
                                <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                            </p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#">
                        <div>
                            <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                                <div class="img_info">
                                    <p><span class="fontSize24">审核不通过</span></p>
                                    <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                    <p class="clearfix"><span class="update">修改</span><span class="del">删除</span></p>
                                </div>
                            </div>
                            <p class="house_name fontSize18">杨桃子创意园</p>
                            <p id="money_type" class="clear">
                                <img src="/Public/Home/images/icon/edifice.png">
                                <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                            </p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#">
                        <div>
                            <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                                <div class="img_info">
                                    <p><span class="fontSize24">审核中</span></p>
                                    <p>已发布，乙租平台24小时内完成审核，成功方可展示</p>
                                    <p class="clearfix"><span class="update">修改</span><span class="del">删除</span></p>
                                </div>
                            </div>
                            <p class="house_name fontSize18">杨桃子创意园</p>
                            <p id="money_type" class="clear">
                                <img src="/Public/Home/images/icon/edifice.png">
                                <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                            </p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#">
                        <div>
                            <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                                <div class="img_info">
                                    <p><span class="fontSize24">审核中</span></p>
                                    <p>已发布，乙租平台24小时内完成审核，成功方可展示</p>
                                    <p class="clearfix"><span class="update">修改</span><span class="del">删除</span></p>
                                </div>
                            </div>
                            <p class="house_name fontSize18">杨桃子创意园</p>
                            <p id="money_type" class="clear">
                                <img src="/Public/Home/images/icon/edifice.png">
                                <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                            </p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#">
                        <div>
                            <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                                <div class="img_info">
                                    <p><span class="fontSize24">审核中</span></p>
                                    <p>已发布，乙租平台24小时内完成审核，成功方可展示</p>
                                    <p class="clearfix"><span class="update">修改</span><span class="del">删除</span></p>
                                </div>
                            </div>
                            <p class="house_name fontSize18">杨桃子创意园</p>
                            <p id="money_type" class="clear">
                                <img src="/Public/Home/images/icon/edifice.png">
                                <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                            </p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#">
                        <div>
                            <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                                <div class="img_info">
                                    <p><span class="fontSize24">审核不通过</span></p>
                                    <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                    <p class="clearfix"><span class="update">修改</span><span class="del">删除</span></p>
                                </div>
                            </div>
                            <p class="house_name fontSize18">杨桃子创意园</p>
                            <p id="money_type" class="clear">
                                <img src="/Public/Home/images/icon/edifice.png">
                                <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                            </p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#">
                        <div>
                            <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                                <div class="img_info">
                                    <p><span class="fontSize24">审核不通过</span></p>
                                    <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                    <p class="clearfix"><span class="update">修改</span><span class="del">删除</span></p>
                                </div>
                            </div>
                            <p class="house_name fontSize18">杨桃子创意园</p>
                            <p id="money_type" class="clear">
                                <img src="/Public/Home/images/icon/edifice.png">
                                <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                            </p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#">
                        <div>
                            <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                                <div class="img_info">
                                    <p><span class="fontSize24">审核不通过</span></p>
                                    <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                    <p class="clearfix"><span class="update">修改</span><span class="del">删除</span></p>
                                </div>
                            </div>
                            <p class="house_name fontSize18">杨桃子创意园</p>
                            <p id="money_type" class="clear">
                                <img src="/Public/Home/images/icon/edifice.png">
                                <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                            </p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#">
                        <div>
                            <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                                <div class="img_info">
                                    <p><span class="fontSize24">审核不通过</span></p>
                                    <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                    <p class="clearfix"><span class="update">修改</span><span class="del">删除</span></p>
                                </div>
                            </div>
                            <p class="house_name fontSize18">杨桃子创意园</p>
                            <p id="money_type" class="clear">
                                <img src="/Public/Home/images/icon/edifice.png">
                                <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                            </p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#">
                        <div>
                            <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                                <div class="img_info">
                                    <p><span class="fontSize24">审核不通过</span></p>
                                    <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                    <p class="clearfix"><span class="update">修改</span><span class="del">删除</span></p>
                                </div>
                            </div>
                            <p class="house_name fontSize18">杨桃子创意园</p>
                            <p id="money_type" class="clear">
                                <img src="/Public/Home/images/icon/edifice.png">
                                <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                            </p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#">
                        <div>
                            <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                                <div class="img_info">
                                    <p><span class="fontSize24">审核不通过</span></p>
                                    <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                    <p class="clearfix"><span class="update">修改</span><span class="del">删除</span></p>
                                </div>
                            </div>
                            <p class="house_name fontSize18">杨桃子创意园</p>
                            <p id="money_type" class="clear">
                                <img src="/Public/Home/images/icon/edifice.png">
                                <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                            </p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#">
                        <div>
                            <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                                <div class="img_info">
                                    <p><span class="fontSize24">审核不通过</span></p>
                                    <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                    <p class="clearfix"><span class="update">修改</span><span class="del">删除</span></p>
                                </div>
                            </div>
                            <p class="house_name fontSize18">杨桃子创意园</p>
                            <p id="money_type" class="clear">
                                <img src="/Public/Home/images/icon/edifice.png">
                                <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                            </p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#">
                        <div>
                            <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                                <div class="img_info">
                                    <p><span class="fontSize24">审核不通过</span></p>
                                    <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                    <p class="clearfix"><span class="update">修改</span><span class="del">删除</span></p>
                                </div>
                            </div>
                            <p class="house_name fontSize18">杨桃子创意园</p>
                            <p id="money_type" class="clear">
                                <img src="/Public/Home/images/icon/edifice.png">
                                <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                            </p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#">
                        <div>
                            <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                                <div class="img_info">
                                    <p><span class="fontSize24">审核不通过</span></p>
                                    <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                    <p class="clearfix"><span class="update">修改</span><span class="del">删除</span></p>
                                </div>
                            </div>
                            <p class="house_name fontSize18">杨桃子创意园</p>
                            <p id="money_type" class="clear">
                                <img src="/Public/Home/images/icon/edifice.png">
                                <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                            </p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#">
                        <div>
                            <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                                <div class="img_info">
                                    <p><span class="fontSize24">审核不通过</span></p>
                                    <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                    <p class="clearfix"><span class="update">修改</span><span class="del">删除</span></p>
                                </div>
                            </div>
                            <p class="house_name fontSize18">杨桃子创意园</p>
                            <p id="money_type" class="clear">
                                <img src="/Public/Home/images/icon/edifice.png">
                                <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                            </p>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#">
                        <div>
                            <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                                <div class="img_info">
                                    <p><span class="fontSize24">审核不通过</span></p>
                                    <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                    <p class="clearfix"><span class="update">修改</span><span class="del">删除</span></p>
                                </div>
                            </div>
                            <p class="house_name fontSize18">杨桃子创意园</p>
                            <p id="money_type" class="clear">
                                <img src="/Public/Home/images/icon/edifice.png">
                                <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                            </p>
                        </div>
                    </a>
                </li>
            </ul>
            <nav aria-label="Page navigation" class="paging">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&lt;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&gt;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!--房源投放结束-->

    <!--我的收藏-->
    <div class="center collection" id="indexs1">
        <p>共收藏<span>23</span>个房源</p>
        <ul class="row">
            <li class="col-md-3">
                <a href="#">
                    <div>
                        <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                            <div class="img_info">
                                <p><span class="fontSize24">审核中</span></p>
                                <p>已发布，乙租平台24小时内完成审核，成功方可展示</p>
                                <p class="clearfix"><span class="select">查看</span><span class="update">修改</span></p>
                            </div>
                        </div>
                        <p class="house_name fontSize18">杨桃子创意园</p>
                        <p id="money_type" class="clear">
                            <img src="/Public/Home/images/icon/edifice.png">
                            <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                            <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                        </p>
                    </div>
                </a>
            </li>
            <li class="col-md-3">
                <a href="#">
                    <div>
                        <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                            <div class="img_info">
                                <p><span class="fontSize24">审核不通过</span></p>
                                <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                <p class="clearfix"><span class="select">查看</span><span class="update">修改</span></p>
                            </div>
                        </div>
                        <p class="house_name fontSize18">杨桃子创意园</p>
                        <p id="money_type" class="clear">
                            <img src="/Public/Home/images/icon/edifice.png">
                            <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                            <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                        </p>
                    </div>
                </a>
            </li>
            <li class="col-md-3">
                <a href="#">
                    <div>
                        <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                            <div class="img_info">
                                <p><span class="fontSize24">审核中</span></p>
                                <p>已发布，乙租平台24小时内完成审核，成功方可展示</p>
                                <p class="clearfix"><span class="select">查看</span><span class="update">修改</span></p>
                            </div>
                        </div>
                        <p class="house_name fontSize18">杨桃子创意园</p>
                        <p id="money_type" class="clear">
                            <img src="/Public/Home/images/icon/edifice.png">
                            <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                            <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                        </p>
                    </div>
                </a>
            </li>
            <li class="col-md-3">
                <a href="#">
                    <div>
                        <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                            <div class="img_info">
                                <p><span class="fontSize24">审核中</span></p>
                                <p>已发布，乙租平台24小时内完成审核，成功方可展示</p>
                                <p class="clearfix"><span class="select">查看</span><span class="update">修改</span></p>
                            </div>
                        </div>
                        <p class="house_name fontSize18">杨桃子创意园</p>
                        <p id="money_type" class="clear">
                            <img src="/Public/Home/images/icon/edifice.png">
                            <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                            <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                        </p>
                    </div>
                </a>
            </li>
            <li class="col-md-3">
                <a href="#">
                    <div>
                        <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                            <div class="img_info">
                                <p><span class="fontSize24">审核中</span></p>
                                <p>已发布，乙租平台24小时内完成审核，成功方可展示</p>
                                <p class="clearfix"><span class="select">查看</span><span class="update">修改</span></p>
                            </div>
                        </div>
                        <p class="house_name fontSize18">杨桃子创意园</p>
                        <p id="money_type" class="clear">
                            <img src="/Public/Home/images/icon/edifice.png">
                            <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                            <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                        </p>
                    </div>
                </a>
            </li>
            <li class="col-md-3">
                <a href="#">
                    <div>
                        <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                            <div class="img_info">
                                <p><span class="fontSize24">审核不通过</span></p>
                                <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                <p class="clearfix"><span class="select">查看</span><span class="update">修改</span></p>
                            </div>
                        </div>
                        <p class="house_name fontSize18">杨桃子创意园</p>
                        <p id="money_type" class="clear">
                            <img src="/Public/Home/images/icon/edifice.png">
                            <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                            <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                        </p>
                    </div>
                </a>
            </li>
            <li class="col-md-3">
                <a href="#">
                    <div>
                        <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                            <div class="img_info">
                                <p><span class="fontSize24">审核不通过</span></p>
                                <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                <p class="clearfix"><span class="select">查看</span><span class="update">修改</span></p>
                            </div>
                        </div>
                        <p class="house_name fontSize18">杨桃子创意园</p>
                        <p id="money_type" class="clear">
                            <img src="/Public/Home/images/icon/edifice.png">
                            <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                            <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                        </p>
                    </div>
                </a>
            </li>
            <li class="col-md-3">
                <a href="#">
                    <div>
                        <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                            <div class="img_info">
                                <p><span class="fontSize24">审核不通过</span></p>
                                <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                <p class="clearfix"><span class="select">查看</span><span class="update">修改</span></p>
                            </div>
                        </div>
                        <p class="house_name fontSize18">杨桃子创意园</p>
                        <p id="money_type" class="clear">
                            <img src="/Public/Home/images/icon/edifice.png">
                            <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                            <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                        </p>
                    </div>
                </a>
            </li>
            <li class="col-md-3">
                <a href="#">
                    <div>
                        <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                            <div class="img_info">
                                <p><span class="fontSize24">审核不通过</span></p>
                                <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                <p class="clearfix"><span class="select">查看</span><span class="update">修改</span></p>
                            </div>
                        </div>
                        <p class="house_name fontSize18">杨桃子创意园</p>
                        <p id="money_type" class="clear">
                            <img src="/Public/Home/images/icon/edifice.png">
                            <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                            <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                        </p>
                    </div>
                </a>
            </li>
            <li class="col-md-3">
                <a href="#">
                    <div>
                        <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                            <div class="img_info">
                                <p><span class="fontSize24">审核不通过</span></p>
                                <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                <p class="clearfix"><span class="select">查看</span><span class="update">修改</span></p>
                            </div>
                        </div>
                        <p class="house_name fontSize18">杨桃子创意园</p>
                        <p id="money_type" class="clear">
                            <img src="/Public/Home/images/icon/edifice.png">
                            <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                            <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                        </p>
                    </div>
                </a>
            </li>
            <li class="col-md-3">
                <a href="#">
                    <div>
                        <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                            <div class="img_info">
                                <p><span class="fontSize24">审核不通过</span></p>
                                <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                <p class="clearfix"><span class="select">查看</span><span class="update">修改</span></p>
                            </div>
                        </div>
                        <p class="house_name fontSize18">杨桃子创意园</p>
                        <p id="money_type" class="clear">
                            <img src="/Public/Home/images/icon/edifice.png">
                            <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                            <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                        </p>
                    </div>
                </a>
            </li>
            <li class="col-md-3">
                <a href="#">
                    <div>
                        <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                            <div class="img_info">
                                <p><span class="fontSize24">审核不通过</span></p>
                                <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                <p class="clearfix"><span class="select">查看</span><span class="update">修改</span></p>
                            </div>
                        </div>
                        <p class="house_name fontSize18">杨桃子创意园</p>
                        <p id="money_type" class="clear">
                            <img src="/Public/Home/images/icon/edifice.png">
                            <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                            <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                        </p>
                    </div>
                </a>
            </li>
            <li class="col-md-3">
                <a href="#">
                    <div>
                        <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                            <div class="img_info">
                                <p><span class="fontSize24">审核不通过</span></p>
                                <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                <p class="clearfix"><span class="select">查看</span><span class="update">修改</span></p>
                            </div>
                        </div>
                        <p class="house_name fontSize18">杨桃子创意园</p>
                        <p id="money_type" class="clear">
                            <img src="/Public/Home/images/icon/edifice.png">
                            <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                            <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                        </p>
                    </div>
                </a>
            </li>
            <li class="col-md-3">
                <a href="#">
                    <div>
                        <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                            <div class="img_info">
                                <p><span class="fontSize24">审核不通过</span></p>
                                <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                <p class="clearfix"><span class="select">查看</span><span class="update">修改</span></p>
                            </div>
                        </div>
                        <p class="house_name fontSize18">杨桃子创意园</p>
                        <p id="money_type" class="clear">
                            <img src="/Public/Home/images/icon/edifice.png">
                            <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                            <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                        </p>
                    </div>
                </a>
            </li>
            <li class="col-md-3">
                <a href="#">
                    <div>
                        <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                            <div class="img_info">
                                <p><span class="fontSize24">审核不通过</span></p>
                                <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                <p class="clearfix"><span class="select">查看</span><span class="update">修改</span></p>
                            </div>
                        </div>
                        <p class="house_name fontSize18">杨桃子创意园</p>
                        <p id="money_type" class="clear">
                            <img src="/Public/Home/images/icon/edifice.png">
                            <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                            <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                        </p>
                    </div>
                </a>
            </li>
            <li class="col-md-3">
                <a href="#">
                    <div>
                        <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg">
                            <div class="img_info">
                                <p><span class="fontSize24">审核不通过</span></p>
                                <p><span>审核不通过，房源信息不符合请修改后上传</span></p>
                                <p class="clearfix"><span class="select">查看</span><span class="update">修改</span></p>
                            </div>
                        </div>
                        <p class="house_name fontSize18">杨桃子创意园</p>
                        <p id="money_type" class="clear">
                            <img src="/Public/Home/images/icon/edifice.png">
                            <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                            <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                        </p>
                    </div>
                </a>
            </li>
        </ul>
        <nav aria-label="Page navigation" class="paging">
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&lt;</span>
                    </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&gt;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!--我的收藏结束-->

    <!--我的优惠券-->
    <!--<div class="coupon" id="indexs2">-->
        <!--我的优惠券-->
    <!--</div>-->
    <!--我的优惠券结束-->

    <!--委托找房-->
    <div class="findhouse" id="indexs3">
        <div class="top_box col-md-12">
            <h3>填写租赁要求</h3>
            <p>10分钟内客服联系您</p>
            <span class="entrust_once fontSize18">委托找房</span>
        </div>

        <!--委托找房列表标题-->
        <div class="findhouse_list_title col-md-12">
            <p class="list_time col-md-3">时间</p>
            <p class="list_require col-md-6">租赁要求</p>
            <p class="list_state col-md-2">状态</p>
        </div>

        <!--委托找房列表-->
        <div class="findhouse_list col-md-12">
            <ul>
                <li>
                    <div>
                        <p class="list_time col-md-3">2018-05-20</p>
                        <p class="list_require col-md-6">广商贸中心，200平方写字楼，精装带办公桌，租金120元/平方米/月，附近有地铁</p>
                        <p class="list_state col-md-2">已委托，客服会根据您的具体要求联系您。</p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="list_time col-md-3">2018-05-20</p>
                        <p class="list_require col-md-6">广商贸中心，200平方写字楼，精装带办公桌，租金120元/平方米/月，附近有地铁</p>
                        <p class="list_state col-md-2">已委托，客服会根据您的具体要求联系您。</p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="list_time col-md-3">2018-05-20</p>
                        <p class="list_require col-md-6">广商贸中心，200平方写字楼，精装带办公桌，租金120元/平方米/月，附近有地铁</p>
                        <p class="list_state col-md-2">已委托，客服会根据您的具体要求联系您。</p>
                    </div>
                </li>
            </ul>
        </div>

        <!--弹框-->
        <div class="application">
            <div>
                <form action="" method="post">
                    <h4 class="clearfix">提交申请，免费委托找房<span class="close_applic"><img
                            src="/Public/Home/images/icon/close.png"/></span></h4>
                    <input type="text" name="phone" placeholder="输入您的手机号"/>
                    <input type="submit" value="免费委托找房"/>
                    <p class="error"></p>
                </form>
            </div>
        </div>
    </div>
    <!--委托找房结束-->

    <!--看房记录-->
    <div class="house_record" id="indexs4">
        <!--房源列表-->
        <div class="house_listbox">
            <!--菜单栏-->
            <div class="house_listnav">
                <ul class="nav nav-pills nav-justified">
                    <li role="presentation" class="act">全 部</li>
                    <li role="presentation">待看房</li>
                    <li role="presentation">待确认</li>
                    <li role="presentation">待评价</li>
                </ul>
                <span>共有<span class="fontSize18">17</span> 个房源</span>
            </div>

            <!--列表项-->
            <div class="house_lists">
                <ul>
                    <li>
                        <div class="house_list_out">
                            <div class="media">
                                <div class="media-left house_list_img">
                                    <a href="#">
                                        <img class="media-object" src="/Public/Home/images/test/5ae2c75458309.jpg"
                                             alt="...">
                                    </a>
                                </div>
                                <div class="media-body">

                                    <div class="clearfix">
                                        <h3 class="media-heading">蝙蝠侠创意园</h3>
                                        <span class="allowance"><a href="#">平台租金补贴</a></span>
                                    </div>

                                    <p><span class="where" title="地址：广州市天河区体育西路57号红盾大厦 ">
															地址：广州市天河区体育西路57号红盾大厦 </span><br/>
                                    </p>

                                    <p><span class="area">面积：285 ㎡</span><span class="floor">楼层：底区楼层</span></p>
                                    <p><span class="from">来自：平台房源</span></p>
                                    <p class="clearfix metro_house_money">
                                        <span class="metro cursor fontSize14">地铁十分钟</span>
                                        <span class="less_house cursor fontSize14">稀缺房源</span>
                                        <span>
										    		<span style="color: #FF3333;">￥<span
                                                            style="font-size: 24px;">49</span></span>/㎡
										    	</span>
                                    </p>
                                </div>
                                <div class="media-right">
                                    <div class="state">
                                        <a href="#"><span>确认看房</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="house_list_out">
                            <div class="media">
                                <div class="media-left house_list_img">
                                    <a href="#">
                                        <img class="media-object" src="/Public/Home/images/test/5ae2c75458309.jpg"
                                             alt="...">
                                    </a>
                                </div>
                                <div class="media-body">

                                    <div class="clearfix">
                                        <h3 class="media-heading">蝙蝠侠创意园</h3>
                                        <span class="allowance"><a href="#">平台租金补贴</a></span>
                                    </div>

                                    <p><span class="where" title="地址：广州市天河区体育西路57号红盾大厦 ">
															地址：广州市天河区体育西路57号红盾大厦 </span><br/>
                                    </p>

                                    <p><span class="area">面积：285 ㎡</span><span class="floor">楼层：底区楼层</span></p>
                                    <p><span class="from">来自：平台房源</span></p>
                                    <p class="clearfix metro_house_money">
                                        <span class="metro cursor fontSize14">地铁十分钟</span>
                                        <span class="less_house cursor fontSize14">稀缺房源</span>
                                        <span>
										    		<span style="color: #FF3333;">￥<span
                                                            style="font-size: 24px;">49</span></span>/㎡
										    	</span>
                                    </p>
                                </div>

                                <div class="media-right">
                                    <div class="state">
                                        <a href="#"><span>评论</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="house_list_out">
                            <div class="media">
                                <div class="media-left house_list_img">
                                    <a href="#">
                                        <img class="media-object" src="/Public/Home/images/test/5ae2c75458309.jpg"
                                             alt="...">
                                    </a>
                                </div>
                                <div class="media-body">

                                    <div class="clearfix">
                                        <h3 class="media-heading">蝙蝠侠创意园</h3>
                                        <span class="allowance"><a href="#">平台租金补贴</a></span>
                                    </div>

                                    <p><span class="where" title="地址：广州市天河区体育西路57号红盾大厦 ">
															地址：广州市天河区体育西路57号红盾大厦 </span><br/>
                                    </p>

                                    <p><span class="area">面积：285 ㎡</span><span class="floor">楼层：底区楼层</span></p>
                                    <p><span class="from">来自：平台房源</span></p>
                                    <p class="clearfix metro_house_money">
                                        <span class="metro cursor fontSize14">地铁十分钟</span>
                                        <span class="less_house cursor fontSize14">稀缺房源</span>
                                        <span>
										    		<span style="color: #FF3333;">￥<span
                                                            style="font-size: 24px;">49</span></span>/㎡
										    	</span>
                                    </p>
                                </div>

                                <div class="media-right">
                                    <div class="state">
                                        <a href="#"><span>待看房</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="house_list_out">
                            <div class="media">
                                <div class="media-left house_list_img">
                                    <a href="#">
                                        <img class="media-object" src="/Public/Home/images/test/5ae2c75458309.jpg"
                                             alt="...">
                                    </a>
                                </div>
                                <div class="media-body">

                                    <div class="clearfix">
                                        <h3 class="media-heading">蝙蝠侠创意园</h3>
                                        <span class="allowance"><a href="#">平台租金补贴</a></span>
                                    </div>

                                    <p><span class="where" title="地址：广州市天河区体育西路57号红盾大厦 ">
															地址：广州市天河区体育西路57号红盾大厦 </span><br/>
                                    </p>

                                    <p><span class="area">面积：285 ㎡</span><span class="floor">楼层：底区楼层</span></p>
                                    <p><span class="from">来自：平台房源</span></p>
                                    <p class="clearfix metro_house_money">
                                        <span class="metro cursor fontSize14">地铁十分钟</span>
                                        <span class="less_house cursor fontSize14">稀缺房源</span>
                                        <span>
										    		<span style="color: #FF3333;">￥<span
                                                            style="font-size: 24px;">49</span></span>/㎡
										    	</span>
                                    </p>
                                </div>

                                <div class="media-right">
                                    <div class="state">
                                        <a href="#"><span>确认看房</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!--分页按钮-->
            <nav aria-label="Page navigation" class="paging">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&lt;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&gt;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!--评论-->
        <div class="comment row">
            <form action="" method="post">
                <div class="title clearfix">
                    <span class="fontSize18">发表评论</span>
                    <span class="close_but"><img src="/Public/Home/images/icon/close.png"/></span>
                </div>
                <span class="col-md-2 fontSize16">房源评价</span>
                <ul class="ulradio col-md-10 clearfix">
                    <li value="0">非常推荐</li>
                    <li value="1">推荐</li>
                    <li value="2">一般</li>
                </ul>

                <ul class="service_lable clearfix col-md-12">
                    <li class="fontSize16"><span>服务标签</span></li>
                    <li><span class="metro_lable">地铁十分钟</span></li>
                    <li><span class="less_lable">稀缺房源</span></li>
                    <li><span class="worked_jiaju">带办公家具</span></li>
                    <li><span class="property">知名物业</span></li>
                    <li>已选<span class="label_sum">0</span>个</li>
                </ul>
                <p class="house_service col-md-12 fontSize16">看房服务
                    <span class="stars" id="star1"></span>
                    <span class="stars" id="star2"></span>
                    <span class="stars" id="star3"></span>
                    <span class="stars" id="star4"></span>
                    <span class="stars" id="star5"></span>
                    <span class="star_sum"></span> 星
                </p>
                <div class="com_conten col-md-12 clearfix">
                    <span class="fontSize16">发表评论</span><textarea placeholder="对房源评价经纪人评价"></textarea>
                </div>
                <p class="clearfix"><span class="ok">立即委托</span><span class="cancel">取 消</span></p>
                <input type="submit" value="立即委托"/>
            </form>
        </div>
        <!--评论结束-->

    </div>
    <!--看房记录结束-->

    <!--推荐拿佣金-->
    <div class="rcdcmn" id="indexs5">

        <div class="top_box col-md-12">
            <h3>推荐拿佣金</h3>
            <p>推荐用户促成交易，乙租将返现10%</p>
            <span class="rcdcmn_once fontSize18">推荐用户</span>
        </div>

        <!--推荐列表标题-->
        <div class="rcdcmn_list_title col-md-12">
            <p class="list_name col-md-2">名称</p>
            <p class="list_tel col-md-2">手机号</p>
            <p class="list_money col-md-2">返现额度</p>
            <p class="list_time col-md-2">时间</p>
            <p class="list_state col-md-2">状态</p>
        </div>

        <!--推荐用户列表-->
        <div class="rcdcmn_list col-md-12">
            <ul>
                <li>
                    <div>
                        <p class="list_name col-md-2">金鱼钰</p>
                        <p class="list_tel col-md-2">15678810990</p>
                        <p class="list_money col-md-2">返现10%</p>
                        <p class="list_time col-md-2">返现10%</p>
                        <p class="list_state col-md-2">返现10%</p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="list_name col-md-2">金鱼钰</p>
                        <p class="list_tel col-md-2">15678810990</p>
                        <p class="list_money col-md-2">返现10%</p>
                        <p class="list_time col-md-2">返现10%</p>
                        <p class="list_state col-md-2">返现10%</p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="list_name col-md-2">金鱼钰</p>
                        <p class="list_tel col-md-2">15678810990</p>
                        <p class="list_money col-md-2">返现10%</p>
                        <p class="list_time col-md-2">返现10%</p>
                        <p class="list_state col-md-2">返现10%</p>
                    </div>
                </li>
            </ul>
        </div>

        <!--弹框-->
        <div class="rcdcmn_box">
            <div>
                <form action="" method="post">
                    <h4 class="clearfix">提交申请，免费委托找房<span class="close_rcdcmn_box"><img
                            src="/Public/Home/images/icon/close.png"/></span></h4>
                    <input type="text" name="phone" placeholder="输入您的手机号"/>
                    <input type="submit" value="推荐用户"/>
                    <p class="error"></p>
                </form>
            </div>
        </div>
    </div>

    <!--推荐拿佣金结束-->
</div>
<!--底部-->
<div class="foot">

    <div class="foot_conten">
        <div class="tubiao">

        </div>
        <h3 class="fontSize24">最近浏览</h3>
        <div class="recently_viewed" id="recently_viewed">
            <div class="pre"><img src="/Public/Home/images/icon/pre.png"/><img
                    src="/Public/Home/images/icon/pre_blue.png"/></div>
            <div class="next"><img src="/Public/Home/images/icon/next1.png"/><img
                    src="/Public/Home/images/icon/next_blue.png"/></div>
            <div class="lunbo">
                <ul class="clearfix">
                    <li class="biaozhi">
                        <a href="#">
                            <div>
                                <div class="imgbox"><img src="/Public/Home/images/banner/banner_1.png"/></div>
                                <p class="house_name fontSize18">杨桃子创意园</p>
                                <p id="money_type" class="clear">
                                    <img src="/Public/Home/images/icon/edifice.png"/>
                                    <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                    <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <div class="imgbox"><img src="/Public/Home/images/banner/banner_2.jpg"/></div>
                                <p class="house_name fontSize18">杨桃子创意园</p>
                                <p id="money_type" class="clear">
                                    <img src="/Public/Home/images/icon/edifice.png"/>
                                    <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                    <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <div class="imgbox"><img src="/Public/Home/images/banner/banner_3.jpg"/></div>
                                <p class="house_name fontSize18">杨桃子创意园</p>
                                <p id="money_type" class="clear">
                                    <img src="/Public/Home/images/icon/edifice.png"/>
                                    <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                    <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg"/></div>
                                <p class="house_name fontSize18">杨桃子创意园</p>
                                <p id="money_type" class="clear">
                                    <img src="/Public/Home/images/icon/edifice.png"/>
                                    <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                    <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg"/></div>
                                <p class="house_name fontSize18">杨桃子创意园</p>
                                <p id="money_type" class="clear">
                                    <img src="/Public/Home/images/icon/edifice.png"/>
                                    <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                    <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                                </p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <div>
                                <div class="imgbox"><img src="/Public/Home/images/banner/banner_1.png"/></div>
                                <p class="house_name fontSize18">杨桃子创意园</p>
                                <p id="money_type" class="clear">
                                    <img src="/Public/Home/images/icon/edifice.png"/>
                                    <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                    <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <div class="imgbox"><img src="/Public/Home/images/banner/banner_2.jpg"/></div>
                                <p class="house_name fontSize18">杨桃子创意园</p>
                                <p id="money_type" class="clear">
                                    <img src="/Public/Home/images/icon/edifice.png"/>
                                    <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                    <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <div class="imgbox"><img src="/Public/Home/images/banner/banner_3.jpg"/></div>
                                <p class="house_name fontSize18">杨桃子创意园</p>
                                <p id="money_type" class="clear">
                                    <img src="/Public/Home/images/icon/edifice.png"/>
                                    <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                    <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <div class="imgbox"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg"/></div>
                                <p class="house_name fontSize18">杨桃子创意园</p>
                                <p id="money_type" class="clear">
                                    <img src="/Public/Home/images/icon/edifice.png"/>
                                    <span class="type">写字楼出租&nbsp;&nbsp;<span class="howBig">50</span>㎡</span>
                                    <span class="howMoney"><span class="moneys">58</span><span>元/㎡/月</span></span>
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
<script type="text/javascript" src="/Public/Home/js/yizu_collection_top.js"></script>
<script type="text/javascript" src="/Public/Home/js/yizu_collection_bottom.js"></script>
<script type="text/javascript" src="/Public/Home/js/my_collection.js"></script>
<script type="text/javascript">
    window.onload = function () {
        lunbo2('recently_viewed', 3000, 305);
    }
</script>
</html>
<!--<link rel="stylesheet" type="text/css" href="/Public/Home/css/footerstyle.css">-->
</head>
<body>
<footer class="pc">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="col-md-12 foot_leftbox">
                    <div class="col-md-1 foot_logo pad"><img src="/Public/Home/images/logo/min_logo_1.png"></div>
                    <div class="col-md-11 foot_title">广州乙租信息科技有限公司</div>
                </div>
                <div class="col-md-12" style="margin-top:3rem;">
                    <div class="col-md-6 foot_list_l pad">
                        <div class="col-md-12 pad" style="color:#fff">关于乙租</div>
                        <div class="col-md-12 pad">
                            <ul class="f_min_list">
                                <li><a href="#">联系我们</a></li>
                                <li><a href="#">商务合作</a></li>
                                <li><a href="#">网站地图</a></li>
                                <li><a href="#">常见问题</a></li>
                                <li><a href="#">用户协议</a></li>
                                <li><a href="#">隐私条款</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 pad foot_list_r">
                        <p>地址：<span>广州市白云大道北广贸商务中心C栋401</span></p>
                        <p>电话：<span>400-8866-3911</span></p>
                        <p>邮箱：<span>epassrent@163.com</span></p>
                    </div>
                </div>
                <div class="col-md-12 foot_link">
                    <p>友情链接</p>
                    <ul>
                        <li><a href="#">今日头条</a></li>
                        <li><a href="#">今日头条</a></li>
                        <li><a href="#">今日头条</a></li>
                        <li><a href="#">今日头条</a></li>
                        <li><a href="#">今日头条</a></li>
                        <li><a href="#">今日头条</a></li>
                        <li><a href="#">今日头条</a></li>
                        <li><a href="#">今日头条</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="foot_qrcode">
                    <li><img src="/Public/Home/images/qrcode/qrcode_1.jpg"></li>
                    <li><img src="/Public/Home/images/qrcode/qrcode_1.jpg"></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 foot_t">Copyright © 2017 广州乙租信息科技有限公司 粤ICP备18010088号</div>
        </div>
    </div>
</footer>
</body>
</html>