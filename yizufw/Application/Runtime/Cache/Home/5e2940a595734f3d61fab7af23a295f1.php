<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>新闻资讯-详情页</title>
    <link rel="shortcut icon" href="/Public/Home/images/yz.ico">
    <!--<link rel="stylesheet" type="text/css" href="/Public/Home/css/bootstrap.min.css"/>-->
    <link rel="stylesheet" href="/Public/Home/css/news_personal.css"/>
    <!--<script type="text/javascript" src="/Public/Home/js/jquery-3.3.1.min.js"></script>-->
    <!--<script type="text/javascript" src="/Public/Home/js/bootstrap.min.js"></script>-->
</head>


<body style="background: rgba(0,0,0,0.04);">
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
    <script type="text/javascript" src="/Public/Home/js/jquery-3.3.1.min.js"></script>
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
</body>
</html>
<nav class="url">
    <p>首页>新闻资讯><?php echo ($news["title"]); ?>><?php echo ($news["news_title"]); ?></p>
</nav>
<!--主题-->
<main class="clearfix">
    <div class="main_left">
        <h3><?php echo ($news["news_title"]); ?></h3>
        <ul>
            <li>作者：<?php echo ($news["username"]); ?></li>
            <li>来源：中国新闻网</li>
            <li>时间：<?php echo (date('Y-m-d',$news["time"])); ?></li>
            <li>浏览量：<?php echo ($news["page_view"]); ?></li>
            <li><a href="">分享到：<img src="/Public/Home/images/icon/weixin.png"/></a></li>
        </ul>
        <?php echo ($news["new_text"]); ?>
        <p class="clearfix">
            <span class="pre">
                前一篇：
                <?php if($prev == '没有了'): ?>没有了
                    <?php else: ?>
                    <a href="<?php echo U('News/getNews', array('id'=>$prev[id]));?>"><?php echo ($prev["news_title"]); ?></a><?php endif; ?>
            </span>
            <span class="next">
                后一篇：
                <?php if($next == '没有了'): ?>没有了
                    <?php else: ?>
                    <a href="<?php echo U('News/getNews', array('id'=>$next[id]));?>"><?php echo ($next["news_title"]); ?></a><?php endif; ?>
            </span>
        </p>
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
                <p style="color: #FA541C;"><a href="" style="color: #FA541C;">1 乙租帮您实现如何租赁写字楼最优惠！</a></p>
                <p style="color: #FA541C;"><a href="" style="color: #FA541C;">2 什么？推广费高？办公室租不出去？第几个收到了看见</a></p>
                <p style="color: #FA541C;"><a href="" style="color: #FA541C;">3 广州写字楼资金领涨，上海和深圳租金的说法都是</a></p>
                <p><a href="">4 办公室装修设计公司解读如何打造智能的说法都是第三方都是 </a></p>
                <p><a href="">5 最适合在办公室养的10种植物。</a></p>
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
</html>