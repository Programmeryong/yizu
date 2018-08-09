<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>新闻资讯</title>
    <link rel="shortcut icon" href="/Public/Home/images/yz.ico">
    <!--<link rel="stylesheet" type="text/css" href="/Public/Home/css/bootstrap.min.css"/>-->
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/news.css"/>
    <script type="text/javascript" src="/Public/Home/js/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src="/Public/Home/js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="/Public/Home/js/news.js"></script>
</head>
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
    <!--<script type="text/javascript" src="/Public/Home/js/index_style.js"></script>-->
</head>
<body style="background:#fff">

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
</body>
</html>

<body style="background: rgba(0,0,0,0.04);">

<!--主题-->
<main class="clearfix">
    <div class="main_left">
        <!--轮播开始-->
        <div class="brand" id="brand">
            <div class="brand_box clearfix" style="left: -848px;">
                <!--第五张-->
                <div>
                    <img src="/Public/Home/images/test/5ae2c75458309.jpg" />
                    <div>
                        <p class="fontSize24 onehide">视觉盛宴Linkdln伦敦二期创意园装修设计</p>
                        <p class="twohide">在以运动为主题的楼层，可以看到网球运动的诸多元素，以及由网球拍定制设计的天花灯具第三方士大夫地方…</p>
                    </div>
                </div>
                <div>
                    <!--第一张-->
                    <img src="/Public/Home/images/test/5abde9af0f974.jpg" />
                    <div>
                        <p class="fontSize24 onehide">视觉盛宴Linkdln伦敦二期创意园装修设计</p>
                        <p class="twohide">在以运动为主题的楼层，可以看到网球运动的诸多元素，以及由网球拍定制设计的天花灯具第三方士大夫地方…</p>
                    </div>
                </div>
                <div>
                    <!--第二张-->
                    <img src="/Public/Home/images/test/5abde9af99991.jpg" />
                    <div>
                        <p class="fontSize24 onehide">视觉盛宴Linkdln伦敦二期创意园装修设计第三方的士大夫</p>
                        <p class="twohide">在以运动为主题的楼层，可以看到网球运动的诸多元素，以及由网球拍定制设计的天花灯具第三方士大夫地方…
                            在以运动为主题的楼层，可以看到网球运动的诸多元素，以及由网球拍定制设计的天花灯具第三方士大夫地方…</p>
                    </div>
                </div>
                <div>
                    <!--第三张-->
                    <img src="/Public/Home/images/test/5add7e68d9421.jpg" />
                    <div>
                        <p class="fontSize24 onehide">视觉盛宴Linkdln伦敦二期创意园装修设计</p>
                        <p class="twohide">在以运动为主题的楼层，可以看到网球运动的诸多元素，以及由网球拍定制设计的天花灯具第三方士大夫地方…</p>
                    </div>
                </div>
                <div>
                    <!--第四张-->
                    <img src="/Public/Home/images/test/5ae2c7541ef77.jpg" />
                    <div>
                        <p class="fontSize24 onehide">视觉盛宴Linkdln伦敦二期创意园装修设计</p>
                        <p class="twohide">在以运动为主题的楼层，可以看到网球运动的诸多元素，以及由网球拍定制设计的天花灯具第三方士大夫地方…</p>
                    </div>
                </div>
                <div>
                    <!--第五张-->
                    <img src="/Public/Home/images/test/5ae2c75458309.jpg" />
                    <div>
                        <p class="fontSize24 onehide">视觉盛宴Linkdln伦敦二期创意园装修设计</p>
                        <p class="twohide">在以运动为主题的楼层，可以看到网球运动的诸多元素，以及由网球拍定制设计的天花灯具第三方士大夫地方…</p>
                    </div>
                </div>
                <div>
                    <!--第一张-->
                    <img src="/Public/Home/images/test/5abde9af0f974.jpg" />
                    <div>
                        <p class="fontSize24 onehide">视觉盛宴Linkdln伦敦二期创意园装修设计</p>
                        <p class="twohide">在以运动为主题的楼层，可以看到网球运动的诸多元素，以及由网球拍定制设计的天花灯具第三方士大夫地方…</p>
                    </div>
                </div>
            </div>

            <div class="brand_lists">
                <ul>
                    <li data-index="0" class="curr"></li>
                    <li data-index="1"></li>
                    <li data-index="2"></li>
                    <li data-index="3"></li>
                    <li data-index="4"></li>
                </ul>
            </div>
            <div class="shang"><img src="/Public/Home/images/icon/pre1.png" /> <img src="/Public/Home/images/icon/pre_blue.png" style="display: none;"/></div>
            <div class="xia"><img src="/Public/Home/images/icon/next.png"/><img src="/Public/Home/images/icon/next_blue.png" style="display: none;" /></div>
        </div>
        <!--轮播结束-->

        <!--视觉盛宴-->
        <div class="vision_box" id="vision_box">
            <div class="shang2" style="display: none;"></div>
            <div class="xia2" style="display: none;"></div>
            <div class="vision">
                <ul class="clearfix">

                    <!--第一张-->
                    <li class="biaozhi">
                        <a href="">
                            <img src="/Public/Home/images/banner/banner_1.png"/>
                            <div>
                                <span class="fontSize24">视觉盛宴</span>
                                <p>在以运动为主题的楼层，可以看到网球运动的诸多元素单方事故过过过过过过过过过过过过过过过付大东方时尚所所所所所所所所所过</p>
                            </div>
                        </a>
                    </li>
                    <!--第二张-->
                    <li>
                        <a href="">
                            <img src="/Public/Home/images/test/5ae2c7541ef77.jpg"/>
                            <div>
                                <span class="fontSize24">视觉盛宴</span>
                                <p>在以运动为主题的楼层，可以看到网球运动的诸多元素单方事故过过过过过过过过过过过过过过过付大东方时尚所所所所所所所所所过</p>
                            </div>
                        </a>
                    </li>
                    <!--第三张-->
                    <li>
                        <a href="">
                            <img src="/Public/Home/images/test/5ae2c7541ef77.jpg"/>
                            <div>
                                <span class="fontSize24">视觉盛宴</span>
                                <p>在以运动为主题的楼层，可以看到网球运动的诸多元素单方事故过过过过过过过过过过过过过过过付大东方时尚所所所所所所所所所过</p>
                            </div>
                        </a>
                    </li>
                    <!--第四张-->
                    <li>
                        <a href="">
                            <img src="/Public/Home/images/test/5ae2c7541ef77.jpg"/>
                            <div>
                                <span class="fontSize24">视觉盛宴</span>
                                <p>在以运动为主题的楼层，可以看到网球运动的诸多元素单方事故过过过过过过过过过过过过过过过付大东方时尚所所所所所所所所所过</p>
                            </div>
                        </a>
                    </li>
                    <!--第五张-->
                    <li>
                        <a href="">
                            <img src="/Public/Home/images/test/5ae2c7541ef77.jpg"/>
                            <div>
                                <span class="fontSize24">视觉盛宴</span>
                                <p>在以运动为主题的楼层，可以看到网球运动的诸多元素单方事故过过过过过过过过过过过过过过过付大东方时尚所所所所所所所所所过</p>
                            </div>
                        </a>
                    </li>
                    <!--第六张-->
                    <li>
                        <a href="">
                            <img src="/Public/Home/images/test/5ae2c7541ef77.jpg"/>
                            <div>
                                <span class="fontSize24">视觉盛宴</span>
                                <p>在以运动为主题的楼层，可以看到网球运动的诸多元素单方事故过过过过过过过过过过过过过过过付大东方时尚所所所所所所所所所过</p>
                            </div>
                        </a>
                    </li>
                    <!--第一张-->
                    <li>
                        <a href="">
                            <img src="/Public/Home/images/banner/banner_1.png"/>
                            <div>
                                <span class="fontSize24">视觉盛宴</span>
                                <p>在以运动为主题的楼层，可以看到网球运动的诸多元素单方事故过过过过过过过过过过过过过过过付大东方时尚所所所所所所所所所过</p>
                            </div>
                        </a>
                    </li>
                    <!--第二张-->
                    <li>
                        <a href="">
                            <img src="/Public/Home/images/test/5ae2c7541ef77.jpg"/>
                            <div>
                                <span class="fontSize24">视觉盛宴</span>
                                <p>在以运动为主题的楼层，可以看到网球运动的诸多元素单方事故过过过过过过过过过过过过过过过付大东方时尚所所所所所所所所所过</p>
                            </div>
                        </a>
                    </li>
                    <!--第三张-->
                    <li>
                        <a href="">
                            <img src="/Public/Home/images/test/5ae2c7541ef77.jpg"/>
                            <div>
                                <span class="fontSize24">视觉盛宴</span>
                                <p>在以运动为主题的楼层，可以看到网球运动的诸多元素单方事故过过过过过过过过过过过过过过过付大东方时尚所所所所所所所所所过</p>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>




        <!--新闻列表-->
        <div class="news">
            <div class="tabs_li">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active" value="0">全部</li>
                    <?php if(is_array($type)): foreach($type as $key=>$vo): ?><li role="presentation" class="news_li" id="news_li_<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></li><?php endforeach; endif; ?>
                </ul>
                <span><span>首页</span>><span>新闻咨询</span></span>
            </div>

            <ul>
                <?php if(is_array($news_list)): $i = 0; $__LIST__ = $news_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a href="<?php echo U('News/getNews');?>?id=<?php echo ($vo["id"]); ?>">
                        <div class="media">
                            <div class="media-left news_img">

                                <img class="media-object" src="<?php echo ($vo["img_url"]); ?>">

                            </div>
                            <div class="media-body news_info clearfix">
                                <span class="new_type fontSize18 onehide"><?php echo ($vo["title"]); ?> | <?php echo ($vo["news_title"]); ?></span>
                                <span class="time fontSize24"><?php echo (date('m-d',$vo["time"])); ?></span>
                                <p><?php echo ($vo["describe"]); ?></p>
                                <span class="arrow_right"><img src="/Public/Home/images/icon/arrow-righ.png"/></span>
                            </div>
                        </div>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <!--分页按钮-->
                <nav class="paging" id="all_news_page" style="margin: 20px 0 20px 0;text-align: center">
                    <div class="pages clearfix">
                        <?php echo ($page); ?>
                    </div>
                </nav>
                <!--分页按钮-->
            </ul>
            <ul>
            <?php if(is_array($news_1)): $i = 0; $__LIST__ = $news_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a href="<?php echo U('News/getNews');?>?id=<?php echo ($vo["id"]); ?>">
                        <div class="media">
                            <div class="media-left news_img">

                                <img class="media-object" src="<?php echo ($vo["img_url"]); ?>">

                            </div>
                            <div class="media-body news_info clearfix">
                                <span class="new_type fontSize18 onehide"><?php echo ($vo["title"]); ?> | <?php echo ($vo["news_title"]); ?></span>
                                <span class="time fontSize24"><?php echo (date('m-d',$vo["time"])); ?></span>
                                <p><?php echo ($vo["describe"]); ?></p>
                                <span class="arrow_right"><img src="/Public/Home/images/icon/arrow-righ.png"/></span>
                            </div>
                        </div>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            <!--分页按钮-->
            <nav class="paging" id="all_news_page1" style="margin: 20px 0 20px 0;text-align: center">
                <div class="pages clearfix">
                    <?php echo ($page1); ?>
                </div>
            </nav>
            <!--分页按钮-->
            </ul>
            <ul>
            <?php if(is_array($news_2)): $i = 0; $__LIST__ = $news_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a href="<?php echo U('News/getNews');?>?id=<?php echo ($vo["id"]); ?>">
                        <div class="media">
                            <div class="media-left news_img">

                                <img class="media-object" src="<?php echo ($vo["img_url"]); ?>">

                            </div>
                            <div class="media-body news_info clearfix">
                                <span class="new_type fontSize18 onehide"><?php echo ($vo["title"]); ?> | <?php echo ($vo["news_title"]); ?></span>
                                <span class="time fontSize24"><?php echo (date('m-d',$vo["time"])); ?></span>
                                <p><?php echo ($vo["describe"]); ?></p>
                                <span class="arrow_right"><img src="/Public/Home/images/icon/arrow-righ.png"/></span>
                            </div>
                        </div>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            <!--分页按钮-->
            <nav class="paging" id="all_news_page2" style="margin: 20px 0 20px 0;text-align: center">
                <div class="pages clearfix">
                    <?php echo ($page2); ?>
                </div>
            </nav>
            <!--分页按钮-->
            </ul>
            <ul>
            <?php if(is_array($news_3)): $i = 0; $__LIST__ = $news_3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a href="<?php echo U('News/getNews');?>?id=<?php echo ($vo["id"]); ?>">
                        <div class="media">
                            <div class="media-left news_img">

                                <img class="media-object" src="<?php echo ($vo["img_url"]); ?>">

                            </div>
                            <div class="media-body news_info clearfix">
                                <span class="new_type fontSize18 onehide"><?php echo ($vo["title"]); ?> | <?php echo ($vo["news_title"]); ?></span>
                                <span class="time fontSize24"><?php echo (date('m-d',$vo["time"])); ?></span>
                                <p><?php echo ($vo["describe"]); ?></p>
                                <span class="arrow_right"><img src="/Public/Home/images/icon/arrow-righ.png"/></span>
                            </div>
                        </div>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            <!--分页按钮-->
            <nav class="paging" id="all_news_page3" style="margin: 20px 0 20px 0;text-align: center">
                <div class="pages clearfix">
                    <?php echo ($page3); ?>
                </div>
            </nav>
            <!--分页按钮-->
            </ul>
        </div>
        <!--新闻列表结束-->
    </div>

    <div class="main_right_out">
        <div class="main_right">
            <div class="right_top">
                <ul>
                    <li>
                        <div><img src="/Public/Home/images/test/5ae2c75458309.jpg"/></div>
                    </li>
                    <li>
                        <div><img src="/Public/Home/images/test/5ae2c75458309.jpg"/></div>
                    </li>
                </ul>
            </div>

            <!--热门推荐-->
            <h3>热门推荐</h3>
            <div class="right_hot">
                <ul>
                    <li>
                        <div class="photo_info">
                            <div class="photo"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg" alt="..."></div>
                            <div class="info">
                                <p><span class="fontSize18">绿巨人写字楼</span></p>
                                <p><span class="info_house"><span>写字楼出租</span> <span>50</span>㎡</span>
                                    <span class="info_money"><span class="fontSize24" style="color: #FA541C;">70</span>元/㎡/月</span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="photo_info">
                            <div class="photo"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg" alt="..."></div>
                            <div class="info">
                                <p><span class="fontSize18">绿巨人写字楼</span></p>
                                <p><span class="info_house"><span>写字楼出租</span> <span>50</span>㎡</span>
                                    <span class="info_money"><span class="fontSize24" style="color: #FA541C;">70</span>元/㎡/月</span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="photo_info">
                            <div class="photo"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg" alt="..."></div>
                            <div class="info">
                                <p><span class="fontSize18">绿巨人写字楼</span></p>
                                <p><span class="info_house"><span>写字楼出租</span> <span>50</span>㎡</span>
                                    <span class="info_money"><span class="fontSize24" style="color: #FA541C;">70</span>元/㎡/月</span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="photo_info">
                            <div class="photo"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg" alt="..."></div>
                            <div class="info">
                                <p><span class="fontSize18">绿巨人写字楼</span></p>
                                <p><span class="info_house"><span>写字楼出租</span> <span>50</span>㎡</span>
                                    <span class="info_money"><span class="fontSize24" style="color: #FA541C;">70</span>元/㎡/月</span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="photo_info">
                            <div class="photo"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg" alt="..."></div>
                            <div class="info">
                                <p><span class="fontSize18">绿巨人写字楼</span></p>
                                <p><span class="info_house"><span>写字楼出租</span> <span>50</span>㎡</span>
                                    <span class="info_money"><span class="fontSize24" style="color: #FA541C;">70</span>元/㎡/月</span>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!--热门推荐结束-->

            <!--热点推荐-->
            <nav class="informal">
                <h3>热点推荐</h3>
                <p style="color: #FA541C;"><a href="" style="color: #FA541C;">1  乙租帮您实现如何租赁写字楼最优惠！</a></p>
                <p style="color: #FA541C;"><a href="" style="color: #FA541C;">2  什么？推广费高？办公室租不出去？第几个收到了看见</a></p>
                <p style="color: #FA541C;"><a href="" style="color: #FA541C;">3  广州写字楼资金领涨，上海和深圳租金的说法都是</a></p>
                <p><a href="">4  办公室装修设计公司解读如何打造智能的说法都是第三方都是 </a></p>
                <p><a href="">5  最适合在办公室养的10种植物。</a></p>
            </nav>
        </div>
    </div>
</main>
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
<script>
    //无刷新分页
    $('body').on('click', '#all_news_page .pages div a', function () {
        let url = $(this).attr('href');
        if (typeof(url) != "undefined") {
            $.get(url, function (data) {
                $('.news').html(data);
            });
        } else {
        }
        return false;
    });
    $('body').on('click', '#all_news_page1 .pages div a', function () {
        let url = $(this).attr('href');
        if (typeof(url) != "undefined") {
            $.get(url, function (data) {
                $('.news').html(data);
            });
        } else {
        }
        return false;
    });
    $('body').on('click', '#all_news_page2 .pages div a', function () {
        let url = $(this).attr('href');
        if (typeof(url) != "undefined") {
            $.get(url, function (data) {
                $('.news').html(data);
            });
        } else {
        }
        return false;
    });
    $('body').on('click', '#all_news_page3 .pages div a', function () {
        let url = $(this).attr('href');
        if (typeof(url) != "undefined") {
            $.get(url, function (data) {
                $('.news').html(data);
            });
        } else {
        }
        return false;
    });
</script>
</html>