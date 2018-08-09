<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="乙租网 - 写字楼、厂房、创意园区专业互联网服务平台，精品写字楼，广州楼盘全覆盖，真实房源，现场实勘，专业顾问2对1服务！预约看房，免费咨询请拨打 400-886-6391">
    <title>乙租网</title>
    <link rel="shortcut icon" href="/Public/Home/images/yz.ico">
    <!--<link rel="stylesheet" type="text/css" href="/Public/Home/css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/index_style.css">
    <link rel="stylesheet" href="/Public/Home/css/yizu_mynews.css" />
    <script type="text/javascript" src="/Public/Home/js/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src="/Public/Home/js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="/Public/Home/js/yizu_mynews.js" ></script>
</head>
<body style="background:rgba(0,0,0,.04)">
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
                    <form action="<?php echo U('Like/index');?>" id="top_like" enctype="multipart/form-data" method="post">
                        <input class="top_search" type="text" name="search" placeholder="请输入区域、商圈或名称开始找房">
                        <input class="top_submit" type="submit" name=""
                               style="position: absolute;top: -999px;opacity: 0;">
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
<!-- 中部 -->
<main>
    <p class="fsize24 lead text-center" style="border-bottom: 2px solid rgba(0,0,0,.04);padding-bottom: 2rem;">我的消息</p>
    <div class="container my_news">
        <div class="row">
            <ul class="clearfix">
                <li class="col-md-12">
                    <div class="news_box">
                        <p class="fsize18 clearfix"><span class="new_title fsize18">最适合养的植物</span> <span class="new_time fsize18">2018-06-06</span></p>
                        <p class="">在办公室里养上一盆绿植，在使得整个办公室清新自然的情况下，还能够净化空气，让自己办公的环境更加的怡人哦~</p>
                        <p class="links"><a href="" style="color: #198CFF;"><span class="where"></span>>></a></p>
                    </div>
                </li>
                <li class="col-md-12">
                    <div class="news_box">
                        <p class="fsize18 clearfix"><span class="new_title fsize18">最适合养的植物</span> <span class="new_time fsize18">2018-06-06</span></p>
                        <p class="">在办公室里养上一盆绿植，在使得整个办公室清新自然的情况下，还能够净化空气，让自己办公的环境更加的怡人哦~</p>
                        <p class="links"><a href="" style="color: #198CFF;"><span class="where"></span>>></a></p>
                    </div>
                </li>
                <li class="col-md-12">
                    <div class="news_box">
                        <p class="fsize18 clearfix"><span class="new_title fsize18">最适合养的植物</span> <span class="new_time fsize18">2018-06-06</span></p>
                        <p class="explain">吊兰的品种也有很多，常见的是纯绿色和银白色镶边的吊兰。吊兰也是可以水培+土培的~吊兰净化空气的效果非常棒，对于办公室不常通气的朋友来说是非常不错的选择！</p>
                        <p class="links"><a href="" style="color: #198CFF;"><span class="where"></span>>></a></p>
                    </div>
                </li>
                <li class="col-md-12">
                    <div class="news_box">
                        <p class="fsize18 clearfix"><span class="new_title fsize18">白云区白云大道北带电梯写字楼</span> <span class="new_time fsize18">2018-06-06</span></p>
                        <p class="">抱歉，您的房源图片和信息不符，为审核通过，请修改正确后上传！</p>
                        <p class="links"><a href="" style="color: #198CFF;"><span class="where">立即去修改房源信息</span>>></a></p>
                    </div>
                </li>
                <li class="col-md-12">
                    <div class="news_box">
                        <p class="fsize18 clearfix"><span class="new_title fsize18">白云区白云大道北带电梯写字楼</span> <span class="new_time fsize18">2018-06-06</span></p>
                        <p class="">恭喜你，你的房源已成功上传。</p>
                        <p class="links"><a href="" style="color: #198CFF;"><span class="where">查看房源信息</span>>></a></p>
                    </div>
                </li>
                <li class="col-md-12">
                    <div class="news_box">
                        <p class="fsize18 clearfix"><span class="new_title fsize18">您的佣金已到帐</span> <span class="new_time fsize18">2018-06-06</span></p>
                        <p class="">恭喜您，您的佣金已成功入账，感谢您对乙租的支持。</p>
                        <p class="links"><a href="" style="color: #198CFF;"><span class="where"></span>>></a></p>
                    </div>
                </li>
                <li class="col-md-12">
                    <div class="news_box">
                        <p class="fsize18 clearfix"><span class="new_title fsize18">您有一笔佣金带确认</span> <span class="new_time fsize18">2018-06-06</span></p>
                        <p class="">您好，您有一笔佣金返利待确认，请联系客服。</p>
                        <p class="links"><a href="" style="color: #198CFF;"><span class="where">联系客服</span>>></a></p>
                    </div>
                </li>
                <li class="col-md-12">
                    <div class="news_box">
                        <p class="fsize18 clearfix"><span class="new_title fsize18">白云区白云大道北带电梯写字楼</span> <span class="new_time fsize18">2018-06-06</span></p>
                        <p class="">您已成功领取优惠券，将记录在您的手机号账户下，优惠券可以租金低租金使用</p>
                        <p class="links"><a href="" style="color: #198CFF;"><span class="where">联系客服</span>>></a></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <p style="margin-bottom: 12rem;"></p>
</main>
<!-- 底部 -->
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