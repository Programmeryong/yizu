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
	<!-- yizu_index.html -->
<!-- 中部开始 -->
	<main>
	
	<div class="container-fluid" style="background: #fff;">
		<div class="list_box1 col-md-8 col-md-offset-2">
			<div class="col-md-12">
				<ul class="screen_type" style="padding-left: 0; margin: 0; border-bottom: 2px solid #198CFF;">
					<li class="active" type="0">全部类型</li>
					<li type="1">创意园</li>
					<li type="2">写字楼</li>
				</ul>	
			</div>
			
			<div class="col-md-12">
				<span>来源：</span>
				<ul class="screen_from">
					<li class="clickcolor" identity="0">全部</li>
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
					<li >面积不限</li>
					<li>0-100㎡</li>
					<li>100-200㎡</li>
					<li>200-300㎡</li>
					<li>300-500㎡</li>
					<li>500-1000㎡</li>
					<li>1000㎡以上</li>
					<li><span><input type="number" name="">-<input type="number" name=""></span>&nbsp;㎡ <i>筛选</i></li>
				</ul>
			</div>
			<div class="col-md-12">
				<span>价格：</span>
				<ul class="box1_list_tit">
					<li class="list_tit3 clickcolor">单价</li>
					<!-- <li class="list_tit4 ">总价</li> -->
				</ul>	
			</div>
			<div class="col-md-12" style="padding-left: 5.2%;">
				<ul class="top_tab3">
					<li>单价不限</li>
					<li>40元以下</li>
					<li>40-60元</li>
					<li>60-80元</li>
					<li>80-120元</li>
					<li>120-140元</li>
					<li>140元以上</li>
					<li><span><input type="number" name="">-<input type="number" name=""></span>&nbsp;㎡ <i>确定</i></li>
				</ul>
			</div>
		</div>	
	</div>
	<div class="container">
	<div class="row list_box2">
		<!-- 左边 -->
		<div class="col-md-9">
			<!--房源列表-->
			<div class="house_listbox">
				
				<!--菜单栏-->
				<div class="house_listnav">
					<ul class="nav nav-pills nav-justified">
					  	<li role="presentation" class="active">默认排序</li>
						<li role="presentation">价格</li>
						<li role="presentation">最新</li>
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
					<ul>
						<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
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
										    	<!-- <li>325㎡</li>
										    	<li>425㎡</li>
										    	<li>725㎡</li>
										    	<li>1285㎡</li> -->
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
				</div>
				<!--分页按钮--> <?php echo ($page); ?>
				<nav aria-label="Page navigation" class="paging">
				    <ul class="pagination">
					    <li>
					        <a href="#" aria-label="Previous">
					           <span aria-hidden="true"><</span>
					        </a>
					    </li>
					   
					    <!-- <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li><a href="#">6</a></li>
					    <li><a href="#">7</a></li>
					    <li><a href="#">8</a></li> -->
					    <li>
					        <a href="#" aria-label="Next">
					           <span aria-hidden="true">></span>
					        </a>
					    </li>
				    </ul>
				</nav>
			</div>
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
$(document).ready(function(){
	var type;
	var identity;
	var metro;
	var site;
	$(".screen_type li").click(function(){
		type = $(this).attr("type");
		$.post(
			"<?php echo U('Like/screen');?>",
			{'type':type},
			function(result){
	    		console.log(result);
    	});
	})
	$(".screen_from li").click(function(){
		identity = $(this).attr("identity");
		$.post(
			"<?php echo U('Like/screen');?>",
			{'type':type,'identity':identity},
			function(result){
	    		console.log(result);
    	});
	})
	$(".top_tab2 li").click(function(){
		metro = $(this).attr("metro");
		$.post(
			"<?php echo U('Like/screen');?>",
			{'type':type,'identity':identity,'metro':metro},
			function(result){
	    		console.log(result);
    	});
	})
	$(".ditie li").click(function(){
		// console.log(type+","+identity+","+metro+","+site);
		site = $(this).attr("site");
		$.post(
			"<?php echo U('Like/screen');?>",
			{'type':type,'identity':identity,'metro':metro,'site':site},
			function(result){
	    		console.log(result);
    	});
		

	});
		
	})
	
</script>