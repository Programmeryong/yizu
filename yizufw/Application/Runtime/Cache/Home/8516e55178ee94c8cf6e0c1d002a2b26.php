<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="乙租网 - 写字楼、厂房、创意园区专业互联网服务平台,精品写字楼,广州楼盘全覆盖,真实房源,现场实勘,专业顾问2对1服务!预约看房,免费咨询请拨打 400-886-6391">
	<title>乙租网</title>
	<link rel="shortcut icon" href="/Public/Home/images/yz.ico">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/index_style.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/yizu_release.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/webuploader/webuploader.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/webuploader/style.css">
	<script type="text/javascript" src="/Public/Home/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/yizu_release.js"></script>
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
	<!-- 中部 -->
	<!-- 这一块是经纪人使用的 -->
<main id="thisapp" class="container" style="margin-bottom: 8rem;">
	<form  action="javascript:;" id="add_fangyuan" enctype="multipart/form-data"  method="post">
		<h1 class="fsize18 fw_bold">发布房源</h1>
		<div class="row marpad margin40 ">
			<div class="col-md-4">
				<div class="col-md-2">
					<div class="round round2">1</div>
				</div>
				<div class="col-md-3 fsize18 fw_bold marpad">填写信息</div>
				<div class="col-md-7" style="border-bottom: 1px solid #198cff;padding:0;line-height: 10px;">&nbsp;</div>
				<div class="col-md-8 text45">
					请正确选择信息，错误会导致楼盘删除
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-2">
					<div class="round text45">2</div>
				</div>
				<div class="col-md-3 text45 fsize18 fw_bold marpad">等待审核</div>
				<div class="col-md-7 text45" style="border-bottom: 1px solid rgba(0,0,0,0.15);padding:0;line-height: 10px;">&nbsp;</div>
				<div class="col-md-8 text45">
					平台24小时内审核完成
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-2">
					<div class="round text45">3</div>
				</div>
				<div class="col-md-3 text45 fsize18 fw_bold marpad">完成发布</div>
				<div class="col-md-7 text45" style="border-bottom: 1px solid rgba(0,0,0,0.15);padding:0;line-height: 10px;">&nbsp;</div>
				<div class="col-md-8 text45">
					您可在个人中心查看您的房源
				</div>
			</div>
		</div>
		<div class="row marpad margin40 border04">
			<div>
				<div class="col-md-2 text-right fsize14 edirt_text"><i>*</i>类型</div>
				<div class="col-md-10 controls" style="margin-top: -5px;">
					<!-- 1 ==>创意园  2==>写字楼 -->
					<input type="radio" name="thisradio" value="1" class="thanradio">
					<input type="radio" name="thisradio" value="2" class="thanradio">
					<ul class="ulradio">
						<li class="fsize14" value="1">创意园</li>
						<li class="fsize14" value="2">写字楼</li>
					</ul>
				</div>
			</div>
		</div>
		<h1 class="fsize18 fw_bold">楼盘基本信息</h1>
		<div class="fw_bigbox2">
			<!-- 这里是写字楼和创意园表单 -->
			<div class="row marpad margin40 border04">
				<div class="col-md-12 marpad mar_t ">
					<div class="col-md-2 text-right fsize14 edirt_text"><i>*</i>楼盘名称</div>
					<div class="col-md-10 controls" style="margin-top: -5px;">
						<input class="input423 fsize14 housename1" type="text" name="fangyuanname" placeholder="建议写物业名称">
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text"><i>*</i>所在线路</div>
					<div class="col-md-10 controls">
						<!-- 这里要动态生成地铁线路 自行修改value值~~ -->
						<select class="pull-left form-control select30 dropdown1" name="cars1" style="padding:4px 4px; width: 115px" onclick="metro_1($(this))" id="metro">
							<option value="0">请选择区域</option>
							<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" ><?php echo ($vo["district_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>	
						</select>
						<select class="pull-left form-control select30 dropdown2" name="cars2" style="padding:4px 4px; width: 115px" onclick="metro_2($(this))" id="metro1">
							<option value="0">请选择区域</option>
							
						</select>
						<select class="pull-left form-control select30 dropdown2" name="cars3" id="metro2" style="padding:4px 4px; width: 115px">
							<option value="0">请选择站点</option>	
						</select>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text"><i>*</i>面积</div>
					<div class="col-md-10 controls">
						<input class="input284 fsize14 number1" type="number" name="mianji" placeholder="请输入6位数以内大于零的整数">
						<i class="text65">㎡</i>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text"><i>*</i>单价</div>
					<div class="col-md-10 controls">
						<input class="pull-left input284 number2" type="number" name="danjie" placeholder="请输入单价" style="margin-right: 10px;">
						<select class="pull-left form-control select30" name="danjie_1" style="padding:4px 4px; width: 115px">
							<option value="1">元/㎡/月</option>
							<!-- <option value="2">元/工位/月</option>
							<option value="3">面议</option> -->
						</select>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text"><i>*</i>物业费</div>
					<div class="col-md-10 controls">
						<input class="input284 fsize14 number3" type="number" name="wuyefei" placeholder="请输入物业费">
						<i class="text65">元/㎡/月</i>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 edirt_text"><i>*</i>类型</div>
					<div class="col-md-10 controls" style="margin-top: -5px;">
						<!-- 0 ==>简单装修  1 ==>中等装修 2 ==>精装修  -->
						<input type="radio" name="thisradio1" value="1" class="thanradio1">
						<input type="radio" name="thisradio1" value="2" class="thanradio1">
						<input type="radio" name="thisradio1" value="3" class="thanradio1">
						<ul class="ulradio1">
							<li class="fsize14" value="1">简单装修</li>
							<li class="fsize14" value="2">中等装修</li>
							<li class="fsize14" value="3">精装修</li>
						</ul>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t" style="padding-bottom: 10px;">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text">配套设施</div>
					<ul class="tabnavbox1" name="pei_1">
							<li class="fsize14 tabcolor1" >地铁十分钟</li>
							<li class="fsize14 tabcolor2" >稀缺房源</li>
							<li class="fsize14 tabcolor3" >带办公家具</li>
							<li class="fsize14 tabcolor4" >知名物业</li>
							<li class="fsize14 tabcolor5" >免费车位</li>
							<li class="fsize14 tabcolor6" >知名开发商</li>
					</ul>
					<div class="Tabnavbox2">
							<input type="checkbox" name="tabnavbox1" value="1">
							<input type="checkbox" name="tabnavbox2" value="2">
							<input type="checkbox" name="tabnavbox3" value="3">
							<input type="checkbox" name="tabnavbox4" value="4">
							<input type="checkbox" name="tabnavbox5" value="5">
							<input type="checkbox" name="tabnavbox6" value="6">
						</div>
						<i class="fsize14" style="color:rgba(0,0,0,.25)">最多可选择三个标签</i>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text">物业公司</div>
					<div class="col-md-4 controls">
						<input class="input284 fsize14" type="text" name="wuye_gs">
						<!-- <i class="text65">层</i> -->
					</div>
					<div class="col-md-1 text-right fsize14 releaseline edirt_text">建筑面积</div>
					<div class="col-md-5 controls">
						<input class="input284 fsize14" type="number" name="jzmian_ji" placeholder="请输入整栋楼面积">
						<i class="text65">㎡</i>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text">准层高</div>
					<div class="col-md-4 controls">
						<input class="input284 fsize14" type="number" name="zhun_cg">
						<i class="text65">米</i>
					</div>
					<div class="col-md-1 text-right fsize14 releaseline edirt_text">客梯数</div>
					<div class="col-md-5 controls">
						<input class="input284 fsize14" type="number" name="ketishu">
						<i class="text65">个</i>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text">开发商</div>
					<div class="col-md-4 controls">
						<input class="input284 fsize14" type="text" name="kaifashang">
					</div>
				</div>
			</div>
		</div>
		<h1 class="fsize18 fw_bold">详细信息</h1>
		<div class="row marpad margin40 border04">
			<div class="col-md-12 marpad mar_t ">
				<div class="col-md-2 text-right fsize14 edirt_text">补充信息</div>
				<div class="col-md-10 controls">
					<textarea class="textfield fsize14" placeholder="请在10～500字内，描述配套设施、交通情况等。" name="bucong_xx"></textarea>
				</div>
			</div>
		</div>
		<h1 class="fsize18 fw_bold">上传图片</h1>
		<div class="row marpad margin40">
			<div class="col-md-12 marpad mar_t">
				<div class="col-md-2 text-right fsize14 edirt_text">上传封面:</div>
				<div class="col-md-10 controls">
					<ul class="filenav_1">
						<li>
							<input id="f" class="filestyle1" type="file" name="" onchange="change('preview','f')">
							<img id="preview" class="analogclick1" src="/Public/Home/images/icon/Group.png" >
							<input type="text" id="hiedtext" name="picture"></input>
						</li>
					</ul>
				</div>
				<div class="col-md-10 col-md-offset-2 fsize14 text45">最大文件不超过500kb，只支持.jpg .png 格式，建议上传外观图。</div>
			</div>
			<div class="col-md-12 marpad mar_t">
				<div class="col-md-2 text-right fsize14 edirt_text">上传图片:</div>
				<div class="col-md-10 controls">
						<div id="wrapper">
					        <div id="container">
					            <!--头部，相册选择和格式选择-->
					            <div id="uploader">
					                <div class="queueList">
					                    <div id="dndArea" class="placeholder">
					                        <div id="filePicker"></div>
					                    </div>
					                </div>
					                <div class="statusBar" style="display:none;">
					                    <div class="progress">
					                        <span class="text">0%</span>
					                        <span class="percentage"></span>
					                    </div><div class="info"></div>
					                    <div class="btns">
					                        <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
					                    </div>
					                </div>
					            </div>
					        </div>
					    </div>
				</div>
			</div>
			<textarea class="photoArr" style="display: none;" name="pic_all"></textarea>
		</div>
		<h1 class="fsize18 fw_bold">联系方式</h1>
		<!-- 这里的联系方式默认填用户自己的 -->
		<div class="row marpad margin40 ">
			<div class="col-md-12 marpad mar_t ">
				<div class="col-md-2 text-right fsize14 edirt_text"><i>*</i>联系人</div>
				<div class="col-md-10 controls" style="margin-top: -5px;">
					<!-- 这里要把用户的名字传进来 到value里面 -->
					<input class="input284 fsize14 username" type="text" name="username" value="<?php echo (session('nickname')); ?> ">
					<input class="hidden" type="text" name="user_id" value="<?php echo (session('user_id')); ?> " >
				</div>
			</div>
			<div class="col-md-12 marpad mar_t ">
				<div class="col-md-2 text-right fsize14 edirt_text">联系电话</div>
				<div class="col-md-10 controls" style="margin-top: -5px;">
					<!-- 这里是登录的号码 -->
					<h2 style="margin: 10px 0"><?php echo (session('phone')); ?></h2>
				</div>
			</div>
		</div>
		<div class="row marpad margin40">
			<div class="col-md-12 marpad mar_t ">
				<div class="col-md-10 col-md-offset-2">
					<span class="releasethis" onclick="test()">确认发布</span>
				</div>
			</div>
			<input class="clicksubmit" type="submit" name="" >
		</div>
		
	</form>
</main>

</body>
<script type="text/javascript" src="/Public/Home/webuploader/webuploader.js"></script>
<script type="text/javascript" src="/Public/Home/webuploader/upload.js"></script>
<script type="text/javascript">
	var img=$(".img");
	var callBack=function(filenav_2){
		filenav_2.forEach(function(val,idx){
			var li=$("<li></li>");
			var img=$("<img/>");
			var min_i=$("<i></i>");
			var lll = $("<input>");
			img.attr("src",val.data);
			li.append(img);
			li.append(min_i);
			li.append(lll);
			$(".filenav_2").append(li);
			
		});
	}
	var carera=new $.Pgater($("#release_btn"),callBack);


	function metro_1($ele){
	    if(true){
	    	var url = "<?php echo U('Release/metro1');?>";	
	        $.ajax({
				type: 'POST',
				url: url,
				data: {id:$("#metro").val()},
				success: function(data){
					var str = "";
		  			for (var i=0; i<data.length; i++) {
		  				if(i == 0) {
		  					str += 	'<option value="0">请选择站点</option>';
		  				}
						str += 	'<option value='+data[i].id+'>'+data[i].metro_name+'</option>';
						$("#metro1").html(str);				
				    }
				},
				error:function(data) {
					console.log(data.msg);
				},
			});		       
	    }
	}
	function metro_2($ele){
		
	    if(true){
	    	var dis_id = $("#metro").val();
	    	var ret_id = $("#metro1").val();
	    			
	    	var url = "<?php echo U('Release/metro2');?>";
	        $.ajax({
				type: 'POST',
				url: url,
				data: {dis_id:$("#metro").val(), ret_id:$("#metro1").val()},
				dataType: "json",
				success: function(data){
					// alert(data);
					var str = "";
		  			for (var i=0; i<data.length; i++) {
		  				if(i == 0) {
		  					str += 	'<option value="0">请选择站点</option>';
		  				}
						str += 	'<option value='+data[i].id+'>'+data[i].site_name+'</option>';
						$("#metro2").html(str);				
				    }
				},
				error:function(data) {
					console.log(data.msg);
				},
			});		       
	    }
	} 


	function test() {
	  	// var data = $('.clickthisul li input').html();
	  	var form = new FormData(document.getElementById("add_fangyuan"));
        $.ajax({
            url : "<?php echo U('Release/add_fangyuan');?>",
            type:"post",
            data: form,
            processData:false,
            contentType:false,
            success: function (result) {
            	if(result == 22){alert("楼盘名称为空");}
            	if(result == 23){alert("区域为空");}
            	if(result == 24){alert("线号为空");}
            	if(result == 25){alert("站点为空");}
            	if(result == 26){alert("面积为空");}
            	if(result == 27){alert("单价为空");}
            	if(result == 28){alert("物业费为空");}
            	if(result == 30){alert("联系人不能为空");}
            	// alert(result);
                //打印服务端返回的数据(调试用)
                console.log(result);
                if (result == 200) {

                    alert("添加成功");parent.location.reload("<?php echo U('Release/index');?>");

                }
            },
            error : function() {
                alert("添加失败！");
            }
       });

    }
</script> 
</html>