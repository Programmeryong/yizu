<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>乙租网</title>
    <link rel="shortcut icon" href="/Public/Home/images/yz.ico">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/yizu_index.css">
    <script type="text/javascript" src="/Public/Home/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/yizu_index.js"></script>
    <!-- <script type="text/javascript" src="/Public/Home/js/index_style.js"></script> -->
</head>
<body style="background:#fff">
<!-- 首页公共顶部 -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description"
          content="乙租网 - 写字楼、厂房、创意园区专业互联网服务平台，精品写字楼，广州楼盘全覆盖，真实房源，现场实勘，专业顾问2对1服务！预约看房，免费咨询请拨打 400-886-6391">
    <title>乙租网</title>
    <link rel="shortcut icon" href="/Public/Home/images/yz.ico">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/index_style.css">
    <!--<script type="text/javascript" src="/Public/Home/js/jquery-3.3.1.min.js"></script>-->
    <script type="text/javascript" src="/Public/Home/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/yizu_index.js"></script>
    <script type="text/javascript" src="/Public/Home/js/index_style.js"></script>
    <script type="text/javascript" src="/Public/Home/js/cslCamera.js"></script>
</head>
<body style="background:#fff">

<!--用于弹框后一层阴影铺满浏览器-->
<?php if(($is_login) == "0"): ?><div class="temp"></div><?php endif; ?>

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
                <li><a href="<?php echo U('AboutUs/index');?>">关于乙租</a></li>
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
                            <?php if(($is_login) == "1"): ?><li><a href="<?php echo U('UserNews/index');?>?id=<?php echo (session('user_id')); ?>">消息</a></li>
                                <li><a href="<?php echo U('User/setUser');?>?id=<?php echo (session('user_id')); ?>">账号设置</a></li>
                                <li><a href="<?php echo U('User/index');?>?id=<?php echo (session('user_id')); ?>">个人中心</a></li><?php endif; ?>
                            <?php if(($is_login) == "2"): ?><li><a href="<?php echo U('UserNews/index');?>?id=<?php echo (cookie('user_id')); ?>">消息</a></li>
                            <li><a href="<?php echo U('User/setUser');?>?id=<?php echo (cookie('user_id')); ?>">账号设置</a></li>
                            <li><a href="<?php echo U('User/index');?>?id=<?php echo (cookie('user_id')); ?>">个人中心</a></li><?php endif; ?>
                            <li><a href="<?php echo U('login/logout');?>">退出</a></li>
                        </ul>
                    </li><?php endif; ?>
                <li id="nav_rightbtn_li"><a href="#" class="nav_rightbtn">发布房源</a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="nav_bot">
    <div class="container top_bigbox">
        <div class="row">
            <div class="col-md-2">
                <div class="col-md-8 top_logo">
                    <img src="/Public/Home/images/logo/max_logo.png">
                </div>
                <div class="col-md-4 marpad logo_text">广州</div>
            </div>
            <div class="col-md-7 marpad">
                <div class="col-md-12 marpad" style="margin:1rem 0 .5rem">
                    <ul class="bigbox_top">
                        <li><a href="#">写字楼</a></li>
                        <li><a href="#">创意园</a></li>
                        <li><a href="#">厂房</a></li>
                        <li><a href="#">装修服务</a></li>
                        <li><a href="#">工商注册</a></li>
                        <li><a href="#">财税</a></li>
                        <li><a href="#">办公设备</a></li>
                        <li><a href="#">品牌推广</a></li>
                        <li><a href="#">活动策划</a></li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <form action="<?php echo U('Like/vague_like');?>" id="top_like" enctype="multipart/form-data"  method="get">
						<input class="top_search" type="text" name="title" placeholder="请输入区域、商圈或名称开始找房" value="<?php echo ($title); ?>">
						<input class="top_submit" type="submit" name="" style="position: absolute;top: -999px;opacity: 0;">
						<span class="top_buttom"><img src="/Public/Home/images/icon/magnifier.png"></span>
					</form>

                </div>
            </div>
            <div class="col-md-3 marpad">
                <div class="col-md-4 marpad minnav">
                    <a href="#">
                        <div class="col-md-12 marpad"><img src="/Public/Home/images/icon/map_y.png"></div>
                        <div class="col-md-12 marpad">地图找房</div>
                    </a>
                </div>
                <div class="col-md-4 marpad minnav">
                    <a href="#">
                        <div class="col-md-12 marpad"><img src="/Public/Home/images/icon/edifice_2.png"></div>
                        <div class="col-md-12 marpad">租房补贴</div>
                    </a>
                </div>
                <div class="col-md-4 marpad minnav">
                    <a href="#">
                        <div class="col-md-12 marpad"><img src="/Public/Home/images/icon/service.png"></div>
                        <div class="col-md-12 marpad">乙租服务</div>
                    </a>
                </div>
            </div>
        </div>

    </div>
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
</body>
</html>
<!-- 广告-优惠券-->
<?php if(($is_login) == "0"): ?><div class="coupon clearfix">
<span class="close_coupon">
<img src="/Public/Home/images/icon/close_white.png" style="width: 12px; height: 12px;"/>
<i class="glyphicon glyphicon-remove-circle fsize24"></i>
</span>
    <div class="coupon_img">
        <img src="/Public/Home/images/icon/coupon.png"/>
    </div>
</div><?php endif; ?>
<!-- 中部  -->
<main class="container">
    <div class="row main_box1" style="margin-bottom: 1rem;">
        <!-- 轮播图 -->
        <div class="col-md-9 pad">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- 小圆点 -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- 图片 -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/Public/Home/images/banner/banner_1.jpg">
                    </div>
                    <div class="item">
                        <img src="/Public/Home/images/banner/banner_2.jpg">
                    </div>
                    <div class="item">
                        <img src="/Public/Home/images/banner/banner_3.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!-- 轮播图右边 -->
        <div class="col-md-3 box1_r">
            <!-- 上 -->
            <div class="col-md-12" style="margin-top: 15px;">
                <div class="col-md-12 tac fw_bold fsize18">已成交面积</div>
                <div class="col-md-12 tac"><span class="tr_numbre">1203750</span><i class="trmin_numebr fsize14">/m²</i>
                </div>
                <div class="col-md-12 tac fw_bold">业主的放心之选</div>
                <div class="col-md-12 tac fsize18" style="margin-top: 2rem;">
                    <span class="tr_btn">闪电出租</span>
                </div>
            </div>
            <!-- 下 新闻资讯 -->
            <div class="col-md-12 new_box">
                <div class="col-md-12 pad new_box_t">
                    <a href="#"><span class="newtit_l fsize18">新闻资讯</span></a>
                    <a href="#"><i class="newtit_r fsize12">更多</i></a>
                </div>
                <div class="col-md-12 pad">
                    <ul class="pad ">
                        <li class="minnew"><a href="#"><i class="minjump fsize14">行业</i></a><a
                                href="#">最适合在办公室养的10种小植物</a></li>
                        <li class="minnew"><a href="#"><i class="minjump fsize14">攻略</i></a><a href="#">办公室里的那些事儿</a>
                        </li>
                        <li class="minnew"><a href="#"><i class="minjump fsize14">行业</i></a><a
                                href="#">最适合在办公室养的10种小植物</a></li><!--
							<li class="minnew"><a href="#"><i class="minjump fsize14">行业</i></a><a href="#">最适合在办公室养的10种小植物</a></li>
							<li class="minnew"><a href="#"><i class="minjump fsize14">行业</i></a><a href="#">最适合在办公室养的10种小植物</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row main_box2">
        <div class="col-md-12 pad">
            <h1 class="fsize24">乙租服务</h1>
            <div class="col-md-12 col-xs-12 marpad">
                <p class="fsize14" style="float: left;">一站式服务帮您省更多的钱</p>
                <p style="float:right;"><a class="fsize14" href="#">查看内容</a></p>
            </div>
            <div class="col-md-12 marpad" style="margin-top: 15px">
                <!-- 这里要做成轮播 -->
                <ul class="yizu_service marpad">
                    <li>
                        <img src="/Public/Home/images/icon/fixture.png">
                        <p>装修服务</p>
                    </li>
                    <li>
                        <img src="/Public/Home/images/icon/edifice.png">
                        <p>工商注册</p>
                    </li>
                    <li>
                        <img src="/Public/Home/images/icon/accbook.png">
                        <p>代理记账</p>
                    </li>
                    <li>
                        <img src="/Public/Home/images/icon/printer.png">
                        <p>办公设备</p>
                    </li>
                    <li>
                        <img src="/Public/Home/images/icon/printer.png">
                        <p>办公设备</p>
                    </li>
                    <li>
                        <img src="/Public/Home/images/icon/crown.png">
                        <p>办公家具</p>
                    </li>
                    <li>
                        <img src="/Public/Home/images/icon/gift.png">
                        <p>广告宣传</p>
                    </li>
                    <li>
                        <img src="/Public/Home/images/icon/office.png">
                        <p>办公协同系统</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 知名物业PC端 -->
    <div class="row main_box3">
        <h1 class="fsize24">知名物业</h1>
        <div class="col-md-12 col-xs-12 marpad">
            <p class="fsize14" style="float: left;">交通便利 环境优美</p>
            <p style="float:right;"><a class="fsize14" href="#">查看内容</a></p>
        </div>
        <!-- 小轮播 -->
        <div class="col-md-12 box3_nav">
            <div class="movebox">
                <ul>
                    <li>
                        <img src="/Public/Home/images/banner/banner_1.jpg">
                        <div>
                            <p>黑豹振金加工厂</p>
                            <p>￥62<i>/m²</i></p>
                        </div>
                    </li>
                    <li>
                        <img src="/Public/Home/images/banner/banner_2.jpg">
                        <div>
                            <p>钢铁侠科技大楼</p>
                            <p>￥62<i>/m²</i></p>
                        </div>
                    </li>
                    <li>
                        <img src="/Public/Home/images/banner/banner_1.jpg">
                        <div>
                            <p>黑豹振金加工厂</p>
                            <p>￥62<i>/m²</i></p>
                        </div>
                    </li>
                    <li>
                        <img src="/Public/Home/images/banner/banner_2.jpg">
                        <div>
                            <p>钢铁侠科技大楼</p>
                            <p>￥62<i>/m²</i></p>
                        </div>
                    </li>
                    <li>
                        <img src="/Public/Home/images/banner/banner_1.jpg">
                        <div>
                            <p>黑豹振金加工厂</p>
                            <p>￥62<i>/m²</i></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row reserve">
        <!-- 预留位 -->
        <div>

        </div>
    </div>
    <div class="row main_box4">
        <h1 class="fsize24">广州精选写字楼</h1>
        <div class="col-md-12 col-xs-12 marpad">
            <p class="fsize14" style="float: left;">高性价 高格调 超大面积</p>
            <p style="float:right;"><a class="fsize14" href="#">查看内容</a></p>
        </div>
        <div class="col-md-12 marpad">
            <ul class="pad box4_nav">
                <li>
                    <img src="/Public/Home/images/banner/banner_1.jpg">
                    <div class="col-md-12">
                        <p class="fsize18 box4_tit">绿巨人写字楼</p>
                        <p>
                            <span class="box4_tit_l fsize14">写字楼出租 <i>50</i>m²</span>
                            <span class="box4_tit_r fsize14"><i class="fsize24">73</i>元/m²/月</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/banner/banner_1.jpg">
                    <div class="col-md-12">
                        <p class="fsize18 box4_tit">绿巨人写字楼</p>
                        <p>
                            <span class="box4_tit_l fsize14">写字楼出租 <i>50</i>m²</span>
                            <span class="box4_tit_r fsize14"><i class="fsize24">73</i>元/m²/月</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/banner/banner_1.jpg">
                    <div class="col-md-12">
                        <p class="fsize18 box4_tit">绿巨人写字楼</p>
                        <p>
                            <span class="box4_tit_l fsize14">写字楼出租 <i>50</i>m²</span>
                            <span class="box4_tit_r fsize14"><i class="fsize24">73</i>元/m²/月</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/banner/banner_1.jpg">
                    <div class="col-md-12">
                        <p class="fsize18 box4_tit">绿巨人写字楼</p>
                        <p>
                            <span class="box4_tit_l fsize14">写字楼出租 <i>50</i>m²</span>
                            <span class="box4_tit_r fsize14"><i class="fsize24">73</i>元/m²/月</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/banner/banner_1.jpg">
                    <div class="col-md-12">
                        <p class="fsize18 box4_tit">绿巨人写字楼</p>
                        <p>
                            <span class="box4_tit_l fsize14">写字楼出租 <i>50</i>m²</span>
                            <span class="box4_tit_r fsize14"><i class="fsize24">73</i>元/m²/月</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/banner/banner_1.jpg">
                    <div class="col-md-12">
                        <p class="fsize18 box4_tit">绿巨人写字楼</p>
                        <p>
                            <span class="box4_tit_l fsize14">写字楼出租 <i>50</i>m²</span>
                            <span class="box4_tit_r fsize14"><i class="fsize24">73</i>元/m²/月</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/banner/banner_1.jpg">
                    <div class="col-md-12">
                        <p class="fsize18 box4_tit">绿巨人写字楼</p>
                        <p>
                            <span class="box4_tit_l fsize14">写字楼出租 <i>50</i>m²</span>
                            <span class="box4_tit_r fsize14"><i class="fsize24">73</i>元/m²/月</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/banner/banner_1.jpg">
                    <div class="col-md-12">
                        <p class="fsize18 box4_tit">绿巨人写字楼</p>
                        <p>
                            <span class="box4_tit_l fsize14">写字楼出租 <i>50</i>m²</span>
                            <span class="box4_tit_r fsize14"><i class="fsize24">73</i>元/m²/月</span>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row advert_1 ">
        <div class="col-md-6 advert_l marpad">
            <img src="/Public/Home/images/banner/banner_2.jpg">
        </div>
        <div class="col-md-6 advert_r marpad" style="position: relative;">
            <form>
                <input type="text" name="dd" placeholder="请输入手机号码，预约找房，5分钟内回复">
                <input class="advert_submit" type="submit" name="" style="position: absolute;right:9999px;opacity: 0;">
                <span class="advert_call">立即咨询</span>
            </form>
        </div>
    </div>
    <div class="row main_box4 cyGraden">
        <h1 class="fsize24">广州精选创意园</h1>
        <div class="col-md-12 col-xs-12 marpad">
            <p class="fsize14" style="float: left;">高性价 高格调 超大面积</p>
            <p style="float:right;"><a class="fsize14" href="#">查看内容</a></p>
        </div>
        <div class="col-md-12 marpad">
            <ul class="pad box4_nav">
                <li>
                    <img src="/Public/Home/images/banner/banner_1.jpg">
                    <div class="col-md-12">
                        <p class="fsize18 box4_tit">绿巨人写字楼</p>
                        <p>
                            <span class="box4_tit_l fsize14">写字楼出租 <i>50</i>m²</span>
                            <span class="box4_tit_r fsize14"><i class="fsize24">73</i>元/m²/月</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/banner/banner_1.jpg">
                    <div class="col-md-12">
                        <p class="fsize18 box4_tit">绿巨人写字楼</p>
                        <p>
                            <span class="box4_tit_l fsize14">写字楼出租 <i>50</i>m²</span>
                            <span class="box4_tit_r fsize14"><i class="fsize24">73</i>元/m²/月</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/banner/banner_1.jpg">
                    <div class="col-md-12">
                        <p class="fsize18 box4_tit">绿巨人写字楼</p>
                        <p>
                            <span class="box4_tit_l fsize14">写字楼出租 <i>50</i>m²</span>
                            <span class="box4_tit_r fsize14"><i class="fsize24">73</i>元/m²/月</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/banner/banner_1.jpg">
                    <div class="col-md-12">
                        <p class="fsize18 box4_tit">绿巨人写字楼</p>
                        <p>
                            <span class="box4_tit_l fsize14">写字楼出租 <i>50</i>m²</span>
                            <span class="box4_tit_r fsize14"><i class="fsize24">73</i>元/m²/月</span>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row main_box4 factory">
        <h1 class="fsize24">广州精选厂房</h1>
        <div class="col-md-12 col-xs-12 marpad">
            <p class="fsize14" style="float: left;">高性价 高格调 超大面积</p>
            <p style="float:right;"><a class="fsize14" href="#">查看内容</a></p>
        </div>
        <div class="col-md-12 marpad">
            <ul class="pad box4_nav">
                <li>
                    <img src="/Public/Home/images/banner/banner_1.jpg">
                    <div class="col-md-12">
                        <p class="fsize18 box4_tit">绿巨人写字楼</p>
                        <p>
                            <span class="box4_tit_l fsize14">写字楼出租 <i>50</i>m²</span>
                            <span class="box4_tit_r fsize14"><i class="fsize24">73</i>元/m²/月</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/banner/banner_1.jpg">
                    <div class="col-md-12">
                        <p class="fsize18 box4_tit">绿巨人写字楼</p>
                        <p>
                            <span class="box4_tit_l fsize14">写字楼出租 <i>50</i>m²</span>
                            <span class="box4_tit_r fsize14"><i class="fsize24">73</i>元/m²/月</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/banner/banner_1.jpg">
                    <div class="col-md-12">
                        <p class="fsize18 box4_tit">绿巨人写字楼</p>
                        <p>
                            <span class="box4_tit_l fsize14">写字楼出租 <i>50</i>m²</span>
                            <span class="box4_tit_r fsize14"><i class="fsize24">73</i>元/m²/月</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/banner/banner_1.jpg">
                    <div class="col-md-12">
                        <p class="fsize18 box4_tit">绿巨人写字楼</p>
                        <p>
                            <span class="box4_tit_l fsize14">写字楼出租 <i>50</i>m²</span>
                            <span class="box4_tit_r fsize14"><i class="fsize24">73</i>元/m²/月</span>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row main_box5">
        <h1 class="fsize24">新闻资讯</h1>
        <div class="col-md-12 col-xs-12 marpad">
            <p class="fsize14" style="float: left;">了解行业形态 把握市场脉搏</p>
            <p style="float:right;"><a class="fsize14" href="#">查看内容</a></p>
        </div>
        <!-- 这里循环输出三次 -->
        <?php if(is_array($index_news)): $i = 0; $__LIST__ = $index_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="row new_summary">
            <div class="col-md-4">
                <img src="<?php echo ($vo["img_url"]); ?>">
            </div>
            <div class="col-md-6">
                <div class="new_tit">
                    <h1 class="fsize18">【<a href="<?php echo U('News/getNews');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>】<a href="<?php echo U('News/getNews');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["news_title"]); ?></a></h1>
                </div>
                <div class="new_cen">
                    <p><?php echo ($vo["describe"]); ?></p>
                </div>
            </div>
            <div class="col-md-2 new_summary_r">
                <p><?php echo (date('m-d',$vo["time"])); ?></p>
                <span>
                    <a href="<?php echo U('News/getNews');?>?id=<?php echo ($vo["id"]); ?>"><img src="/Public/Home/images/icon/arrow_r.png"></a>
                </span>
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <!-- 这里要判断是否为登录状态，如果没有登录就显示，登录就隐藏 -->
    <div class="row main_box6">
        <a href="#">
            <img src="/Public/Home/images/banner/banner_2.jpg">
        </a>
    </div>
    <!--  -->
    <div class="row main_box7">
        <div class="col-md-3 marpad">
            <div class="col-md-4 box7_img">
                <img src="/Public/Home/images/icon/Group_6.png">
            </div>
            <div class="col-md-8 box7_text">
                <h1 style="font-weight: 700;font-size: 18px!important;">租房首单优惠</h1>
                <p style="font-size: 12px!important; color:rgba(0,0,0,.5)">租金最高可减20%</p>
            </div>
        </div>
        <div class="col-md-3 marpad">
            <div class="col-md-4 box7_img">
                <img src="/Public/Home/images/icon/Group_6.png">
            </div>
            <div class="col-md-8 box7_text">
                <h1 style="font-weight: 700;font-size: 18!important;">720°全景看房</h1>
                <p style="font-size: 12px!important; color:rgba(0,0,0,.5)">租金最高可减20%</p>
            </div>
        </div>
        <div class="col-md-3 marpad">
            <div class="col-md-4 box7_img">
                <img src="/Public/Home/images/icon/Group_6.png">
            </div>
            <div class="col-md-8 box7_text">
                <h1 style="font-weight: 700;font-size: 18!important;">地图找房</h1>
                <p style="font-size: 12px!important; color:rgba(0,0,0,.5)">租金最高可减20%</p>
            </div>
        </div>
        <div class="col-md-3 marpad">
            <div class="col-md-4 box7_img">
                <img src="/Public/Home/images/icon/Group_6.png">
            </div>
            <div class="col-md-8 box7_text">
                <h1 style="font-weight: 700;font-size: 18!important;">推荐赚佣金</h1>
                <p style="font-size: 12px!important; color:rgba(0,0,0,.5)">租金最高可减20%</p>
            </div>
        </div>
    </div>
</main>
<div class="right_box marpad">
    <ul class="right_icon marpad">
        <li>
            <p><img src="/Public/Home/images/logo/min_logo.png"></p>
            <p class="fsize18">服务</p>
        </li>
        <li>
            <p><img src="/Public/Home/images/icon/custom.png"></p>
            <p class="fsize18">客服</p>
        </li>
        <li>
            <p><img src="/Public/Home/images/icon/scan.png"></p>
            <p class="fsize18">扫码</p>
        </li>
        <li>
            <p><img src="/Public/Home/images/icon/groon.png"></p>
            <p class="fsize18">推荐</p>
        </li>
        <li>
            <p><img src="/Public/Home/images/icon/feedback.png"></p>
            <p class="fsize18">反馈</p>
        </li>
        <li>
            <p><img src="/Public/Home/images/icon/arrow_top.png"></p>
        </li>
    </ul>
</div>
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
</body>
</html>