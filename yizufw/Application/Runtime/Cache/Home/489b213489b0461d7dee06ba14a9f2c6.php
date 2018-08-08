<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>乙租网-详情页-个人主页</title>
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/detail_personal.css"/>
    <script type="text/javascript" src="/Public/Home/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/detail_personal.js"></script>
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
    <script type="text/javascript" src="/Public/Home/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/yizu_index.js"></script>
    <script type="text/javascript" src="/Public/Home/js/index_style.js"></script>
</head>
<body style="background:#fff">

<!--用于弹框后一层阴影铺满浏览器-->
<div class="temp"></div>

<!-- 登录 -->
<div class="login">
    <div class="title">
        <p class="fsize24 clearfix">快捷登录 <span class="closed"></span></p>
        <p class="fsize14">登录享受更多优惠服务</p>
    </div>
    <form action="" method="post" class="clearfix">
        <input type="tel" class="phone" name="" id="" value="" placeholder="手机号码"/>
        <input type="text" class="yzm" name="" id="" value="" placeholder="验证码"/>
        <input type="button" name="" id="" value="获取验证码"/>
        <p class="clearfix"><input type="checkbox" name="" id="" value=""/><span class="checkb fsize14">7天内免登录</span>
        </p>
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
                <li><a href="#">首页</a></li>
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
                <li><a href="#">新闻资讯</a></li>
                <li><a href="#">关于乙租</a></li>
            </ul>
            <ul id="nav_right" class="nav navbar-nav navbar-right">
                <li><a href="#">登录</a></li>
                <li><span>｜</span></li>
                <li><a href="#">注册</a></li>
                <li><a href="#">消息</a></li>
                <li><a href="#" class="nav_rightbtn">发布房源</a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="editmeimg">
    <img src="/Public/Home/images/banner/banner_2.jpg">
</header>

</body>
</html>
<main>
    <nav class="house_from clear">
        <div class="photo_info clear">
            <div class="house_from_photo"><img src="/Public/Home/images/test/5ae2c7541ef77.jpg"/></div>
            <div class="house_from_info">
                <p class="fontSize18 clear"><strong>金鱼钰</strong></p>
                <p>来源：<span>经纪人</span></p>
                <p>评分:<span>5.0</span> / <span>13</span>人评价</p>
            </div>
            <p class="fontSize24">电话:<span class="fontSize24">400-866-6391</span></p>
        </div>
        <span class="tel_phone">186 0234 0005</span>

        <div class="evaluate_no">
            <span>评分 <span>5.0</span> 分</span>
            <span>评价 <span>13</span> 人</span>
            <span>出租 <span>49</span> 套</span>
        </div>
    </nav>

    <!--房源列表-->
    <div class="house_listbox">
        <!--菜单栏-->
        <div class="house_listnav">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation" class="active">全 部(<span>17</span>)</li>
                <li role="presentation">写字楼</li>
                <li role="presentation">创意园</li>
                <li role="presentation">出租屋</li>
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
                                    <span class="allowance"><a href="">平台租金补贴</a></span>
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
									    		<span style="color: #FF3333;">￥<span style="font-size: 24px;">49</span></span>/㎡
									    	</span>
                                </p>
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
                                    <span class="allowance"><a href="">平台租金补贴</a></span>
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
									    		<span style="color: #FF3333;">￥<span style="font-size: 24px;">49</span></span>/㎡
									    	</span>
                                </p>
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
                                    <span class="allowance"><a href="">平台租金补贴</a></span>
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
									    		<span style="color: #FF3333;">￥<span style="font-size: 24px;">49</span></span>/㎡
									    	</span>
                                </p>
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
                                    <span class="allowance"><a href="">平台租金补贴</a></span>
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
									    		<span style="color: #FF3333;">￥<span style="font-size: 24px;">49</span></span>/㎡
									    	</span>
                                </p>
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
                                    <span class="allowance"><a href="">平台租金补贴</a></span>
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
									    		<span style="color: #FF3333;">￥<span style="font-size: 24px;">49</span></span>/㎡
									    	</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!--手机端增加五项-->
        <!--列表项-->
        <div class="house_lists phone">
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
                                    <span class="allowance"><a href="">平台租金补贴</a></span>
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
									    		<span style="color: #FF3333;">￥<span style="font-size: 24px;">49</span></span>/㎡
									    	</span>
                                </p>
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
                                    <span class="allowance"><a href="">平台租金补贴</a></span>
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
									    		<span style="color: #FF3333;">￥<span style="font-size: 24px;">49</span></span>/㎡
									    	</span>
                                </p>
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
                                    <span class="allowance"><a href="">平台租金补贴</a></span>
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
									    		<span style="color: #FF3333;">￥<span style="font-size: 24px;">49</span></span>/㎡
									    	</span>
                                </p>
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
                                    <span class="allowance"><a href="">平台租金补贴</a></span>
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
									    		<span style="color: #FF3333;">￥<span style="font-size: 24px;">49</span></span>/㎡
									    	</span>
                                </p>
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
                                    <span class="allowance"><a href="">平台租金补贴</a></span>
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
									    		<span style="color: #FF3333;">￥<span style="font-size: 24px;">49</span></span>/㎡
									    	</span>
                                </p>
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
                        <span aria-hidden="true"><</span>
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
                        <span aria-hidden="true">></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!--房源列表结束-->

    <!--用户评价-->
    <div class="user_evaluate">
        <h1 class="fontSize24">用户评价(共找到<span class="fontSize24">12</span>条)</h1>
        <div class="user_evaluate_list">
            <ul>
                <li>
                    <div class="">
                        <p class="clear">
									<span>用户<span class="userId">****02</span>
										<span class="star">
											<img src="/Public/Home/images/icon/star.png"/>
											<img src="/Public/Home/images/icon/star.png"/>
											<img src="/Public/Home/images/icon/star.png"/>
											<img src="/Public/Home/images/icon/star.png"/>
											<img src="/Public/Home/images/icon/star.png"/>
										</span>
										<span><a href="">推荐</a></span>
									</span>
                            <span class="evaluate_time">2018-05-01</span>
                        </p>
                        <p class="evaluate_content">胡子很不错，户型可以</p>
                        <div>
                            <span class="near cursor fontSize14">熟悉社区及周边</span>
                            <span class="house_analyse cursor fontSize14">房源讲解分析到位</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="">
                        <p class="clear">
									<span>用户<span class="userId">****02</span>
										<span class="star">
											<img src="/Public/Home/images/icon/star.png"/>
											<img src="/Public/Home/images/icon/star.png"/>
											<img src="/Public/Home/images/icon/star.png"/>
											<img src="/Public/Home/images/icon/star.png"/>
											<img src="/Public/Home/images/icon/star.png"/>
										</span>
										<span><a href="">推荐</a></span>
									</span>
                            <span class="evaluate_time">2018-05-01</span>
                        </p>
                        <p class="evaluate_content">胡子很不错，户型可以</p>
                        <div>
                            <span class="near cursor fontSize14">熟悉社区及周边</span>
                            <span class="house_analyse cursor fontSize14">房源讲解分析到位</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="">
                        <p class="clear">
									<span>用户<span class="userId">****02</span>
										<span class="star">
											<img src="/Public/Home/images/icon/star.png"/>
											<img src="/Public/Home/images/icon/star.png"/>
											<img src="/Public/Home/images/icon/star.png"/>
											<img src="/Public/Home/images/icon/star.png"/>
											<img src="/Public/Home/images/icon/star.png"/>
										</span>
										<span><a href="">推荐</a></span>
									</span>
                            <span class="evaluate_time">2018-05-01</span>
                        </p>
                        <p class="evaluate_content">胡子很不错，户型可以</p>
                        <div>
                            <span class="near cursor fontSize14">熟悉社区及周边</span>
                            <span class="house_analyse cursor fontSize14">房源讲解分析到位</span>
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
                        <span aria-hidden="true"><</span>
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
                        <span aria-hidden="true">></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!--用户评价结束-->

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