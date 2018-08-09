<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="乙租网 - 写字楼、厂房、创意园区专业互联网服务平台，精品写字楼，广州楼盘全覆盖，真实房源，现场实勘，专业顾问2对1服务！预约看房，免费咨询请拨打 400-886-6391">
	<title>乙租网</title>
	<link rel="shortcut icon" href="/Public/Home//images/yz.ico">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/index_style.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/yizu_listpage.css">
	<script type="text/javascript" src="/Public/Home/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/yizu_listpage.js"></script>
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
	<!-- yizu_index.html -->
<!-- 中部开始 -->
	<main>
	
	<div class="container-fluid" style="background: #fff;">
		<div class="list_box1 col-md-8 col-md-offset-2">
			<div class="col-md-12">
				<ul class="screen_type" style="padding-left: 0; margin: 0; border-bottom: 2px solid #198CFF;">
					<li class="active" type="">全部类型</li>
					<li type="1">创意园</li>
					<li type="2">写字楼</li>
				</ul>	
			</div>
			
			<div class="col-md-12">
				<span>来源：</span>
				<ul class="screen_from">
					<li class="clickcolor" identity="">全部</li>
					<li identity="1">平台房源</li>
					<li identity="2">经纪人</li>
				</ul>	
			</div>
			
			<div class="col-md-12">
				<span>位置：</span>
				<ul class="box1_list_tit">
					<li class="list_tit1 clickcolor">区域</li>
					<li class="list_tit2 ">地铁线</li>
				</ul>	
			</div>
			
			<div class="col-md-12 quyu-ditie">
				<ul class="top_tab1 clearfix">
					<?php if(is_array($district)): $i = 0; $__LIST__ = $district;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li district="<?php echo ($v["id"]); ?>"><?php echo ($v["district_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>

				<ul class="top_tab2 dispaly clearfix">
					<?php if(is_array($metro)): $i = 0; $__LIST__ = $metro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li metro="<?php echo ($v["id"]); ?>"><?php echo ($v["metro_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			
				<!--区域1-->
				<ul class="clearfix quyu">
					<li>1</li>
					<li>梵蒂冈</li>
					<li>问问</li>
					<li>规范</li>
					<li>被查出</li>
					<li>儿童椅</li>
					<li>经济后果</li>
					<li>千万人</li>
					<li>问问</li>
					<li>规范</li>
					<li>被查出</li>
					<li>儿童椅</li>
					<li>经济后果</li>
					<li>千万人</li>
				</ul>
				<!--区域2-->
				<ul class="clearfix quyu">
					<li>2</li>
					<li>梵蒂冈</li>
					<li>问问</li>
					<li>规范</li>
					<li>被查出</li>
					<li>儿童椅</li>
					<li>经济后果</li>
					<li>千万人</li>
					<li>问问</li>
					<li>规范</li>
					<li>被查出</li>
					<li>儿童椅</li>
					<li>经济后果</li>
					<li>千万人</li>
				</ul>
				<!--区域3-->
				<ul class="clearfix quyu">
					<li>3</li>
					<li>梵蒂冈</li>
					<li>问问</li>
					<li>规范</li>
					<li>被查出</li>
					<li>儿童椅</li>
					<li>经济后果</li>
					<li>千万人</li>
					<li>问问</li>
					<li>规范</li>
					<li>被查出</li>
					<li>儿童椅</li>
					<li>经济后果</li>
					<li>千万人</li>
				</ul>
				<!--区域4-->
				<ul class="clearfix quyu">
					<li>4</li>
					<li>梵蒂冈</li>
					<li>问问</li>
					<li>规范</li>
					<li>被查出</li>
					<li>儿童椅</li>
					<li>经济后果</li>
					<li>千万人</li>
					<li>问问</li>
					<li>规范</li>
					<li>被查出</li>
					<li>儿童椅</li>
					<li>经济后果</li>
					<li>千万人</li>
				</ul>
				<!--区域5-->
				<ul class="clearfix quyu">
					<li>5</li>
					<li>梵蒂冈</li>
					<li>问问</li>
					<li>规范</li>
					<li>被查出</li>
					<li>儿童椅</li>
					<li>经济后果</li>
					<li>千万人</li>
					<li>问问</li>
					<li>规范</li>
					<li>被查出</li>
					<li>儿童椅</li>
					<li>经济后果</li>
					<li>千万人</li>
				</ul>
				<!--区域6-->
				<ul class="clearfix quyu">
					<li>6</li>
					<li>梵蒂冈</li>
					<li>问问</li>
					<li>规范</li>
					<li>被查出</li>
					<li>儿童椅</li>
					<li>经济后果</li>
					<li>千万人</li>
					<li>问问</li>
					<li>规范</li>
					<li>被查出</li>
					<li>儿童椅</li>
					<li>经济后果</li>
					<li>千万人</li>
				</ul>
				<!--区域7-->
				<ul class="clearfix quyu">
					<li>7</li>
					<!-- <li>梵蒂冈</li>
					<li>问问</li>
					<li>规范</li>
					<li>被查出</li>
					<li>儿童椅</li>
					<li>经济后果</li>
					<li>千万人</li>
					<li>问问</li>
					<li>规范</li>
					<li>被查出</li>
					<li>儿童椅</li>
					<li>经济后果</li>
					<li>千万人</li> -->
				</ul>
				<!--区域8-->
				<ul class="clearfix quyu">
					<li>8</li>
					<!-- <li>梵蒂冈</li>
					<li>问问</li>
					<li>规范</li>
					<li>被查出</li>
					<li>儿童椅</li>
					<li>经济后果</li>
					<li>千万人</li>
					<li>问问</li>
					<li>规范</li>
					<li>被查出</li>
					<li>儿童椅</li>
					<li>经济后果</li>
					<li>千万人</li> -->
				</ul>
				
				<!--地铁-->
				<!--1号线-->
				<!-- <?php if(is_array($metro)): $i = 0; $__LIST__ = $metro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li id="<?php echo ($v["id"]); ?>"><?php echo ($v["metro_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?> -->

					<ul class="ditie">
						<?php if(is_array($site1)): $k = 0; $__LIST__ = $site1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li site="<?php echo ($vo["id"]); ?>"><?php echo ($vo["site_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					
				<!--2号线-->
				<ul class="ditie">
					<?php if(is_array($site2)): $k = 0; $__LIST__ = $site2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li site="<?php echo ($vo["id"]); ?>"><?php echo ($vo["site_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>	
				<!--3号线-->
				<ul class="ditie">
					<?php if(is_array($site3)): $k = 0; $__LIST__ = $site3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li site="<?php echo ($vo["id"]); ?>"><?php echo ($vo["site_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>	
				<!--4号线-->
				<ul class="ditie">
					<?php if(is_array($site4)): $k = 0; $__LIST__ = $site4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li site="<?php echo ($vo["id"]); ?>"><?php echo ($vo["site_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>	
				<!--5号线-->
				<ul class="ditie">
					<?php if(is_array($site5)): $k = 0; $__LIST__ = $site5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li site="<?php echo ($vo["id"]); ?>"><?php echo ($vo["site_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>	
				<!--6号线-->
				<ul class="ditie">
					<?php if(is_array($site6)): $k = 0; $__LIST__ = $site6;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li site="<?php echo ($vo["id"]); ?>"><?php echo ($vo["site_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>	
				<!--7号线-->
				<ul class="ditie">
					<?php if(is_array($site7)): $k = 0; $__LIST__ = $site7;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li site="<?php echo ($vo["id"]); ?>"><?php echo ($vo["site_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>	
				<!--8号线-->
				<ul class="ditie">
					<?php if(is_array($site8)): $k = 0; $__LIST__ = $site8;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li site="<?php echo ($vo["id"]); ?>"><?php echo ($vo["site_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>	
				<!--9号线-->
				<ul class="ditie">
					<?php if(is_array($site9)): $k = 0; $__LIST__ = $site9;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li site="<?php echo ($vo["id"]); ?>"><?php echo ($vo["site_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>	
				<!--10号线-->
				<ul class="ditie">
					<?php if(is_array($site10)): $k = 0; $__LIST__ = $site10;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li site="<?php echo ($vo["id"]); ?>"><?php echo ($vo["site_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>	
				<!--11号线-->
				<ul class="ditie">
					<?php if(is_array($site11)): $k = 0; $__LIST__ = $site11;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li site="<?php echo ($vo["id"]); ?>"><?php echo ($vo["site_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>	
				<!--12号线-->
				<ul class="ditie">
					<?php if(is_array($site12)): $k = 0; $__LIST__ = $site12;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li site="<?php echo ($vo["id"]); ?>"><?php echo ($vo["site_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<ul class="ditie">
					<?php if(is_array($site13)): $k = 0; $__LIST__ = $site13;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li site="<?php echo ($vo["id"]); ?>"><?php echo ($vo["site_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<ul class="ditie">
					<?php if(is_array($site14)): $k = 0; $__LIST__ = $site14;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li site="<?php echo ($vo["id"]); ?>"><?php echo ($vo["site_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>	
			</div>
			<div class="col-md-12">
				<span>面积：</span>
				<ul class="mianji">
					<li mianji1="0" mianji2="99999">面积不限</li>
					<li mianji1="0" mianji2="100">0-100㎡</li>
					<li mianji1="100" mianji2="200">100-200㎡</li>
					<li mianji1="200" mianji2="300">200-300㎡</li>
					<li mianji1="300" mianji2="500">300-500㎡</li>
					<li mianji1="500" mianji2="1000">500-1000㎡</li>
					<li mianji1="1000" mianji2="999999">1000㎡以上</li>
					<li><span><input type="number" name="" id="minArea">-<input type="number" name="" id="maxArea"></span>&nbsp;元 <i>确定</i></li>
					

				</ul>
			</div>
			<div class="col-md-12">
				<span>价格：</span>
				<ul class="box1_list_tit">
					<li class="list_tit3 clickcolor">单价</li>
				</ul>	
			</div>
			<div class="col-md-12" style="padding-left: 5.2%;">
				<ul class="top_tab3">
					<li danjia1="0" danjia2="99999">单价不限</li>
					<li danjia1="0" danjia2="40">40元以下</li>
					<li danjia1="40" danjia2="60">40-60元</li>
					<li danjia1="60" danjia2="80">60-80元</li>
					<li danjia1="80" danjia2="120">80-120元</li>
					<li danjia1="120" danjia2="140">120-140元</li>
					<li danjia1="140" danjia2="999999">140元以上</li>
					<!-- <li><span><input type="number" name="" class="mindanjia">-<input type="number" name="" class="maxdanjia"></span>&nbsp;㎡ <i class="queding">确定</i></li> -->
					<li><span ><input type="number" name="" id="minPrice">-<input type="number" name=maxPrice""></span>元 <i>确定</i></li>
				</ul>
			</div>
		</div>	
	</div>
	<div class="container">
	<div class="row list_box2">
		<!-- 左边 -->
		<div class="col-md-9">
			<!--房源列表-->
			<div class="house_listbox" id="screen_ajax">
				
				<!--菜单栏-->
				<div class="house_listnav">
					<ul class="nav nav-pills nav-justified">
					  	<li role="presentation" class="active">默认排序</li>
						<li role="presentation" price="danjia" class="price">价格</li>
						<li role="presentation" NewestTime="time">最新</li>
					</ul>
					<span>共有<span class="fontSize18">194</span> 个房源满足您的需求</span>
				</div>
				
				
				<!--没有找到相关房源-->
				<div class="none">
					<div>没有找到相关房源</div>
					<div><p class="fsize14">你可能对以下推荐感兴趣</p></div>
				</div>
				
				<!--列表项-->
				<div class="house_lists">
					<ul class="aa">
						<?php if(is_array($fy_list)): $i = 0; $__LIST__ = $fy_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
								<div class="house_list_out">
									<div class="media">
										<div class="media-left house_list_img">
										    <a href="#">
										        <img class="media-object" src="<?php echo ($vo["fengmian_img"]); ?>" alt="...">
										    </a>
										</div>
										<div class="media-body">
											
											<div class="title">
												<h3 class="media-heading block85"><?php echo ($vo["fangyuanname"]); ?></h3>
											</div>
											
										    <p>
										    	<span class="where">
													区域：<span class="qu"><?php echo ($vo["district_name"]); ?></span> - <span class=""><?php echo ($vo["metro_name"]); ?></span>- <span class=""><?php echo ($vo["site_name"]); ?></span>
										    	</span>
											</p>
											
										    <p><span class="from">来自：<?php echo ($vo["identity"]); ?></span></p>
										    <p><span class="floor">总层：<?php echo ($vo["zhun_cg"]); ?></span></p>	
										    
										    <ul class="pingmi clearfix">
										    	<li><?php echo ($vo["mianji"]); ?>㎡</li>
										    	<li>325㎡</li>
										    	<li>425㎡</li>
										    	<li>725㎡</li>
										    	<li>1285㎡</li>
										    	<li>更多</li>
										    </ul>
										    
										    <div class="posit">
										    	<p>
										    		<span style="color: #FF3333;">￥<span style="font-size: 28px!important;"><?php echo ($vo["danjia"]); ?></span></span><?php echo ($vo["unit"]); ?>
										    	</p>
										    	<!-- <p><span class="metro fontSize14"><?php echo ($vo["sheshi"]); ?></span></p> -->
										    	<p style="display: none;"><span class="str"><?php echo ($vo["sheshi"]); ?></span></p >
										    	<p><span class="biao metro fontSize14">地铁十分钟</span></p>
												<p><span class="biao less_house fontSize14">稀缺房源</span></p>
												<p><span class="biao dai_jiaju fontSize14">带办公家具</span></p>
												<p><span class="biao know_prop fontSize14">知名物业</span></p>
												<p><span class="biao mfcw fontSize14">免费车位</span></p>
										    	<p><span class="biao zmkfs fontSize14">知名开发商</span></p>
										    	
										    </div>
										</div>
									</div>
								</div>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
						
					</ul>
					<nav aria-label="Page navigation" class="paging">
					    <ul class="pagination" >
					    	<li>
						    <!-- <li value="<?php echo ($title); ?>"> -->
						    	<?php echo ($page); ?>

						    </li>
					    </ul>
					</nav>
			</div>
				</div>
				<!--分页按钮--> 
				
			<!--房源列表结束-->
		</div>
		<!-- 右边 -->
		<div class="col-md-3" style="background: #fff;">
			<div class="r_box1">
				<p class="fsize18 r_tit">广州<i class="fsize18 r_tit">写字楼</i>地图找房</p>
				<img src="/Public/Home/images/banner/banner_1.png">
			</div>
			<div class="r_box2" style="background: rgba(0,0,0,0.04);">
				<p class="fsize18 r_tit" style="background: #fff;">免费委托找房</p>
				<input type="tel" name="" placeholder="请输入手机号码">
				<p class="r_btn">立即委托</p>
				<p class="fsize14">客服将在10分钟内给您致电！</p>
			</div>
			<div class="r_box3">
				<p class="fsize18 r_tit">热门推荐</p>
				<ul class="marpad">
					<li>
						<img src="/Public/Home/images/banner/banner_1.png">
						<div class="col-md-12 r_box3_tit pad fsize18 fw_bold">绿巨人写字楼</div>
						<div class="col-md-12 pad">
							<span class="f_l r_box3_l fsize14">写字楼出租 <i>50</i>㎡</span>
							<span class="f_r r_box3_r fsize14"><i class="fsize24">62</i>元/㎡/月</span>
						</div>
					</li>
					<li>
						<img src="/Public/Home/images/banner/banner_1.png">
						<div class="col-md-12 r_box3_tit pad fsize18 fw_bold">绿巨人写字楼</div>
						<div class="col-md-12 pad">
							<span class="f_l r_box3_l fsize14">写字楼出租 <i>50</i>㎡</span>
							<span class="f_r r_box3_r fsize14"><i class="fsize24">62</i>元/㎡/月</span>
						</div>
					</li>
				</ul>
			</div>
			<!-- 广告位 -->
			<div class="r_box4">
				<ul class="pad r_box4_nav">
					<li>
						<a href="#">
							<img src="/Public/Home/images/banner/banner_2.jpg">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	</div>
	
	<!-- 底部猜你喜欢 -->
	<div class="row list_box3">
		<h1 class="fsize24 fw_bold" style="width: 62.5%; margin: 1rem auto;">猜你喜欢</h1>
		<ul style="width: 62.5%; display: flex; justify-content: space-between;">
			<li>
				<img src="/Public/Home/images/banner/banner_1.png">
				<div class="col-md-12 r_box3_tit pad fsize18 fw_bold">绿巨人写字楼</div>
				<div class="col-md-12 pad">
					<span class="f_l r_box3_l fsize14">写字楼出租 <i>50</i>㎡</span>
					<span class="f_r r_box3_r fsize14"><i class="fsize24">62</i>元/㎡/月</span>
				</div>
			</li>
			<li>
				<img src="/Public/Home/images/banner/banner_1.png">
				<div class="col-md-12 r_box3_tit pad fsize18 fw_bold">绿巨人写字楼</div>
				<div class="col-md-12 pad">
					<span class="f_l r_box3_l fsize14">写字楼出租 <i>50</i>㎡</span>
					<span class="f_r r_box3_r fsize14"><i class="fsize24">62</i>元/㎡/月</span>
				</div>
			</li>
			<li>
				<img src="/Public/Home/images/banner/banner_1.png">
				<div class="col-md-12 r_box3_tit pad fsize18 fw_bold">绿巨人写字楼</div>
				<div class="col-md-12 pad">
					<span class="f_l r_box3_l fsize14">写字楼出租 <i>50</i>㎡</span>
					<span class="f_r r_box3_r fsize14"><i class="fsize24">62</i>元/㎡/月</span>
				</div>
			</li>
			<li>
				<img src="/Public/Home/images/banner/banner_1.png">
				<div class="col-md-12 r_box3_tit pad fsize18 fw_bold">绿巨人写字楼</div>
				<div class="col-md-12 pad">
					<span class="f_l r_box3_l fsize14">写字楼出租 <i>50</i>㎡</span>
					<span class="f_r r_box3_r fsize14"><i class="fsize24">62</i>元/㎡/月</span>
				</div>
			</li>
		</ul>
	</div>
</main>

<!-- 底部开始 -->	
</body>
</html>
<script type="text/javascript">
$('body').on('click', 'li div a', function () {
        let url = $(this).attr('href');
        if (typeof(url) != "undefined") {
            $.get(url, function (data) {
                $('.house_lists').html(data);
            });
        } else {
        }
        return false;
    });

$(document).ready(function(){
	var type;
	var identity;
	var metro;
	var site;
	var mianji1;
	var mianji2;
	var danjia1;
	var danjia2;
	$(".screen_type li").click(function(){
		type = $(this).attr("type");
		$.get(
			"<?php echo U('Like/screen');?>",
			{'type':type,'identity':identity,'metro':metro,'site':site,'mianji1':mianji1,'mianji2':mianji2,'danjia1':danjia1,'danjia2':danjia2},
			function(result){
				console.log(result);
	    		$('.house_lists').html(result);
    	});
	})
	$(".screen_from li").click(function(){
		identity = $(this).attr("identity");
		$.get(
			"<?php echo U('Like/screen');?>",
			{'type':type,'identity':identity,'metro':metro,'site':site,'mianji1':mianji1,'mianji2':mianji2,'danjia1':danjia1,'danjia2':danjia2},
			function(result){
				console.log(result);
	    		$('.house_lists').html(result);
    	});
	})
	$(".top_tab2 li").click(function(){
		metro = $(this).attr("metro");
		console.log(metro);
		$.get(
			"<?php echo U('Like/screen');?>",
			{'type':type,'identity':identity,'metro':metro,'site':site,'mianji1':mianji1,'mianji2':mianji2,'danjia1':danjia1,'danjia2':danjia2},
			function(result){
				console.log(result);
	    		$('.house_lists').html(result);
    	});
	})
	$(".ditie li").click(function(){
		console.log(type+","+identity+","+metro+","+site);
		site = $(this).attr("site");
		$.get(
			"<?php echo U('Like/screen');?>",
			{'type':type,'identity':identity,'metro':metro,'site':site,'mianji1':mianji1,'mianji2':mianji2,'danjia1':danjia1,'danjia2':danjia2},
			function(result){
				console.log(result);
	    		$('.house_lists').html(result);
    	});
	});
	$(".mianji li").click(function(){
		var indexs = $(this).index();
		var mianji1 = $(this).attr('mianji1');
		var mianji2 = $(this).attr('mianji2');
		if(indexs==0 || indexs==7){
		}else{
			$.get(
				"<?php echo U('Like/screen');?>",
				{'type':type,'identity':identity,'metro':metro,'site':site,'mianji1':mianji1,'mianji2':mianji2,'danjia1':danjia1,'danjia2':danjia2},
				function(result){
					console.log(result);
	    		$('.house_lists').html(result);
    		});		
		}			
	});
	$(".top_tab3 li").click(function(){
		var indexs = $(this).index();
		var danjia1 = $(this).attr('danjia1');
		var danjia2 = $(this).attr('danjia2');
		if(indexs==0 || indexs==7){
		}else{
			$.get(
				"<?php echo U('Like/screen');?>",
				{'type':type,'identity':identity,'metro':metro,'site':site,'mianji1':mianji1,'mianji2':mianji2,'danjia1':danjia1,'danjia2':danjia2},
				function(result){
	    		console.log(result);
	    		$('.house_lists').html(result);
    		});			
		}			
	});


	$('body').on('click', 'div ul li i', function () {
       mianji1 = $('#minArea').val();
       mianji2 = $('#maxArea').val();
       $.get(
			"<?php echo U('Like/screen');?>",
			{'type':type,'identity':identity,'metro':metro,'site':site,'mianji1':mianji1,'mianji2':mianji2,'danjia1':danjia1,'danjia2':danjia2},
			function(result){
    		console.log(result);
    		$('.house_lists').html(result);
		});		       
    });
    $('body').on('click', 'div ul li i', function () {
       danjia1 = $('#minPrice').val();
       danjia2 = $('#maxPrice').val();
       $.get(
			"<?php echo U('Like/screen');?>",
			{'type':type,'identity':identity,'metro':metro,'site':site,'mianji1':mianji1,'mianji2':mianji2,'danjia1':danjia1,'danjia2':danjia2},
			function(result){
    		console.log(result);
    		$('.house_lists').html(result);
		});		       
    });	
    $(".price").click(function(){
    	var price = $(this).attr('price');
		console.log(price);
		$.get(
			"<?php echo U('Like/screen');?>",
			{'type':type,'identity':identity,'metro':metro,'site':site,'mianji1':mianji1,'mianji2':mianji2,'danjia1':danjia1,'danjia2':danjia2,'price':price},
			function(result){
    		console.log(result);
    		$('.house_lists').html(result);
		});			
					
	});
})
	
</script>