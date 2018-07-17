<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="乙租网 - 写字楼、厂房、创意园区专业互联网服务平台,精品写字楼,广州楼盘全覆盖,真实房源,现场实勘,专业顾问2对1服务!预约看房,免费咨询请拨打 400-886-6391">
	<title>乙租网</title>
	<link rel="shortcut icon" href="/yizufw.com/Public/Home/images/yz.ico">
	<link rel="stylesheet" type="text/css" href="/yizufw.com/Public/Home/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/yizufw.com/Public/Home/css/index_style.css">
	<link rel="stylesheet" type="text/css" href="/yizufw.com/Public/Home/css/yizu_release.css">
	<script type="text/javascript" src="/yizufw.com/Public/Home/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/yizufw.com/Public/Home/js/vue.min.js"></script>
	<script type="text/javascript" src="/yizufw.com/Public/Home/js/index_style.js"></script>
	<script type="text/javascript" src="/yizufw.com/Public/Home/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/yizufw.com/Public/Home/js/yizu_release.js"></script>
</head>
<body style="background:rgba(0,0,0,.04)">
	<!-- 中部 -->
<main id="thisapp" class="container" style="margin-bottom: 8rem;">
	<form>
		<h1 class="fsize18 fw_bold">发布房源</h1>
		<div class="row marpad margin40 border04">
			<div class="col-md-4">
				<div class="col-md-2">
					<div class="round round2">1</div>
				</div>
				<div class="col-md-3 fsize18 fw_bold marpad">填写信息</div>
				<div class="col-md-7" style="border-bottom: 1px solid #198cff;padding:0;line-height: 10px;">&nbsp;</div>
				<div class="col-md-8 text45">
					处理描述有点多有点多不得不换行
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-2">
					<div class="round text45">2</div>
				</div>
				<div class="col-md-3 text45 fsize18 fw_bold marpad">等待审核</div>
				<div class="col-md-7 text45" style="border-bottom: 1px solid rgba(0,0,0,0.15);padding:0;line-height: 10px;">&nbsp;</div>
				<div class="col-md-8 text45">
					处理描述有点多有点多不得不换行
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-2">
					<div class="round text45">3</div>
				</div>
				<div class="col-md-3 text45 fsize18 fw_bold marpad">完成发布</div>
				<div class="col-md-7 text45" style="border-bottom: 1px solid rgba(0,0,0,0.15);padding:0;line-height: 10px;">&nbsp;</div>
				<div class="col-md-8 text45">
					处理描述有点多有点多不得不换行
				</div>
			</div>
		</div>
		<h1 class="fsize18 fw_bold">来源和类型</h1>
		<div class="row marpad margin40 border04">
			<div>
				<div class="col-md-2 text-right fsize14 edirt_text"><i>*</i>身份</div>
				<div class="col-md-10 controls" style="margin-top: -5px;">
					<ul class="ulradio">
						<li class="fsize14" value="0">个人</li>
						<li class="fsize14" value="1">经纪人</li>
					</ul>
				</div>
			</div>
			<div style="margin: 40px 0;">
				<div class="col-md-2 text-right fsize14 edirt_text"><i>*</i>类型</div>
				<div class="col-md-10 controls">
					<select class="fw_toptype form-control" name="cars" style="width:115px;margin-top: -8px;padding:4px 4px;">
						<option>请选择类型</option>
						<option v-for="x in toptypelist" v-bind:value="x.listid">{{x.listtext}}</option>
						<!-- <option value="0">写字楼</option>
						<option value="1" selected="selected">厂房</option>
						<option value="2">创意园</option> -->
					</select>
				</div>
			</div>
			
		</div>
		<h1 class="fsize18 fw_bold">楼盘基本信息</h1>
		<div class="fw_bigbox" v-if="">
			<!-- 这里是厂房表单 -->
			<div class="row marpad margin40 border04">
				<div class="col-md-12 marpad mar_t ">
					<div class="col-md-2 text-right fsize14 edirt_text"><i>*</i>楼盘名称</div>
					<div class="col-md-10 controls" style="margin-top: -5px;">
						<input class="input423 fsize14 housename" type="text" name="" placeholder="请输入2-30字，不能填写电话、微信、QQ或特殊字符">
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text"><i>*</i>所在区域</div>
					<div class="col-md-10 controls">
						<select class="pull-left form-control select30" name="cars" style="padding:4px 4px; width: 115px">
							<option>请选择区域</option>
							<option value="0">写字楼</option>
							<option value="1">厂房</option>
							<option value="2">创意园</option>
						</select>
						<select class="pull-left form-control select30" name="cars" style="padding:4px 4px; width: 115px">
							<option>请选择商圈</option>
							<option value="0">写字楼</option>
							<option value="1">厂房</option>
							<option value="2">创意园</option>
						</select>
						<input class="pull-left input423 fsize14 Address" type="text" name="" placeholder="请输入详细地址">
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text"><i>*</i>面积</div>
					<div class="col-md-10 controls">
						<input class="input284 thannum fsize14 " type="number" name="" placeholder="请输入6位数以内大于零的整数">
						<i class="text65">㎡</i>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text"><i>*</i>单价</div>
					<div class="col-md-10 controls">
						<input class="pull-left thannum1 input284" type="number" name="" placeholder="请输入单价" style="margin-right: 10px;">
						<select class="pull-left form-control select30" name="cars" style="padding:4px 4px; width: 115px">
							<option>请选择单价</option>
							<option value="0">写字楼</option>
							<option value="1">厂房</option>
						</select>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text"><i>*</i>物业费</div>
					<div class="col-md-10 controls">
						<input class="input284 thannum2 fsize14" type="number" name="" placeholder="请输入物业费">
						<i class="text65">元/月</i>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text">配套设施</div>
					<div class="col-md-10 controls">
						<ul class="tabnavbox">
							<li class="fsize14 tabcolor1">货梯</li>
							<li class="fsize14 tabcolor2">消防</li>
							<li class="fsize14 tabcolor3">环评</li>
							<li class="fsize14 tabcolor4">带电</li>
						</ul>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text">总楼层</div>
					<div class="col-md-4 controls">
						<input class="input284 fsize14" type="number" min="0" name="">
						<i class="text65">层</i>
					</div>
					<div class="col-md-1 text-right fsize14 releaseline edirt_text">建筑面积</div>
					<div class="col-md-5 controls">
						<input class="input284 fsize14" type="number" name="" placeholder="请输入整栋楼面积">
						<i class="text65">㎡</i>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text">车位数</div>
					<div class="col-md-4 controls">
						<input class="input284 fsize14" type="number" name="">
						<i class="text65">个</i>
					</div>
					<div class="col-md-1 text-right fsize14 releaseline edirt_text">准层高</div>
					<div class="col-md-5 controls">
						<input class="input284 fsize14" type="number" name="">
						<i class="text65">米</i>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text">客梯数</div>
					<div class="col-md-4 controls">
						<input class="input284 fsize14" type="number" name="">
						<i class="text65">个</i>
					</div>
					<div class="col-md-1 text-right fsize14 releaseline edirt_text">开发商</div>
					<div class="col-md-5 controls">
						<input class="input284 fsize14" type="text" name="">
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text">物业公司</div>
					<div class="col-md-4 controls">
						<input class="input284 fsize14" type="text" name="">
					</div>
					<div class="col-md-1 text-right fsize14 releaseline edirt_text">适合行业</div>
					<div class="col-md-5 controls">
						<input class="input284 fsize14" type="text" name="" placeholder="例:电子、电器、服装、展厅">
					</div>
				</div>
			</div>
		</div>
		<div class="fw_bigbox2" style="display: none">
			<!-- 这里是写字楼和创意园表单 -->
			<div class="row marpad margin40 border04">
				<div class="col-md-12 marpad mar_t ">
					<div class="col-md-2 text-right fsize14 edirt_text"><i>*</i>楼盘名称</div>
					<div class="col-md-10 controls" style="margin-top: -5px;">
						<input class="input423 fsize14 housename1" type="text" name="" placeholder="请输入2-30字，不能填写电话、微信、QQ或特殊字符">
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text"><i>*</i>所在区域</div>
					<div class="col-md-10 controls">
						<select class="pull-left form-control select30" name="cars" style="padding:4px 4px; width: 115px">
							<option>请选择区域</option>
							<option value="0">写字楼</option>
							<option value="1">厂房</option>
							<option value="2">创意园</option>
						</select>
						<select class="pull-left form-control select30" name="cars" style="padding:4px 4px; width: 115px">
							<option>请选择商圈</option>
							<option value="0">写字楼</option>
							<option value="1">厂房</option>
							<option value="2">创意园</option>
						</select>
						<input class="pull-left input423 fsize14 Address1" type="text" name="" placeholder="请输入详细地址">
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text"><i>*</i>面积</div>
					<div class="col-md-10 controls">
						<input class="input284 fsize14" type="number" name="" placeholder="请输入6位数以内大于零的整数">
						<i class="text65">㎡</i>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text"><i>*</i>单价</div>
					<div class="col-md-10 controls">
						<input class="pull-left input284" type="number" name="" placeholder="请输入单价" style="margin-right: 10px;">
						<select class="pull-left form-control select30" name="cars" style="padding:4px 4px; width: 115px">
							<option>请选择单价</option>
							<option value="0">写字楼</option>
							<option value="1">厂房</option>
						</select>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text"><i>*</i>物业费</div>
					<div class="col-md-10 controls">
						<input class="input284 fsize14" type="number" name="" placeholder="请输入物业费">
						<i class="text65">元/平方/月</i>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text">配套设施</div>
					<div class="col-md-10 controls">
						<ul class="tabnavbox1">
							<li class="fsize14 tabcolor1">地铁十分钟</li>
							<li class="fsize14 tabcolor2">稀缺房源</li>
							<li class="fsize14 tabcolor3">带办公家具</li>
							<li class="fsize14 tabcolor4">知名物业</li>
							<li class="fsize14 tabcolor5">免费车位</li>
							<li class="fsize14 tabcolor6">知名开发商</li>
						</ul>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text">总楼层</div>
					<div class="col-md-4 controls">
						<input class="input284 fsize14" type="number" name="">
						<i class="text65">层</i>
					</div>
					<div class="col-md-1 text-right fsize14 releaseline edirt_text">建筑面积</div>
					<div class="col-md-5 controls">
						<input class="input284 fsize14" type="number" name="" placeholder="请输入整栋楼面积">
						<i class="text65">㎡</i>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text">车位数</div>
					<div class="col-md-4 controls">
						<input class="input284 fsize14" type="number" name="">
						<i class="text65">个</i>
					</div>
					<div class="col-md-1 text-right fsize14 releaseline edirt_text">准层高</div>
					<div class="col-md-5 controls">
						<input class="input284 fsize14" type="number" name="">
						<i class="text65">米</i>
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text">客梯数</div>
					<div class="col-md-4 controls">
						<input class="input284 fsize14" type="number" name="">
						<i class="text65">个</i>
					</div>
					<div class="col-md-1 text-right fsize14 releaseline edirt_text">开发商</div>
					<div class="col-md-5 controls">
						<input class="input284 fsize14" type="text" name="">
					</div>
				</div>
				<div class="col-md-12 marpad mar_t">
					<div class="col-md-2 text-right fsize14 releaseline edirt_text">物业公司</div>
					<div class="col-md-4 controls">
						<input class="input284 fsize14" type="text" name="">
					</div>
				</div>
			</div>
		</div>
		<h1 class="fsize18 fw_bold">详细信息</h1>
		<div class="row marpad margin40 border04">
			<div class="col-md-12 marpad mar_t ">
				<div class="col-md-2 text-right fsize14 edirt_text">补充信息</div>
				<div class="col-md-10 controls">
					<textarea class="textfield fsize14" placeholder="请在10～500字内，描述配套设施、交通情况等。"></textarea>
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
							<img id="preview" class="analogclick1" src="/yizufw.com/Public/Home/images/icon/Group.png" >
						</li>
					</ul>
				</div>
				<div class="col-md-10 col-md-offset-2 fsize14 text45">最大文件不超过500kb，只支持.jpg .png 格式，建议上传外观图。</div>
			</div>
			<div class="col-md-12 marpad mar_t">
				<div class="col-md-2 text-right fsize14 edirt_text">上传图片:</div>
				<div class="col-md-10 controls">
					<ul class="filenav_1">
						<li>
							<input id="" class="filestyle2" type="file" name="">
							<img id="" class="analogclick2" src="/yizufw.com/Public/Home/images/icon/Group.png">
						</li>
					</ul>
				</div>
				<div class="col-md-10 col-md-offset-2 fsize14 text45">只能上传房屋图片，不能包含有文字、数字、网址、名片等。最多上传10张，每张最大不超过2Mb，只支持.jpg .png 格式。</div>
			</div>
			<div class="col-md-12 marpad mar_t">
				<div class="col-md-2 text-right fsize14 edirt_text">上传户型图:</div>
				<div class="col-md-10 controls">
					<ul class="filenav_1">
						<li>
							<input id="g" class="filestyle3" type="file" name="" onchange="change('preview2','g')">
							<img id="preview2" class="analogclick3" src="/yizufw.com/Public/Home/images/icon/Group.png">
						</li>
					</ul>
				</div>
			</div>
		</div>
		<h1 class="fsize18 fw_bold">联系方式</h1>
		<!-- 这里的联系方式默认填用户自己的 -->
		<div class="row marpad margin40 ">
			<div class="col-md-12 marpad mar_t ">
				<div class="col-md-2 text-right fsize14 edirt_text"><i>*</i>联系人</div>
				<div class="col-md-10 controls" style="margin-top: -5px;">
					<input class="input284 fsize14 username" type="text" name="">
				</div>
			</div>
			<div class="col-md-12 marpad mar_t ">
				<div class="col-md-2 text-right fsize14 edirt_text"><i>*</i>联系电话</div>
				<div class="col-md-10 controls" style="margin-top: -5px;">
					<input class="input284 fsize14 userphone" type="text" name="">
				</div>
			</div>
		</div>
		<div class="row marpad margin40">
			<div class="col-md-12 marpad mar_t ">
				<div class="col-md-10 col-md-offset-2">
					<span class="releasethis">确认发布</span>
				</div>
			</div>
			<input class="clicksubmit" type="submit" name="" >
		</div>
		
	</form>
</main>
	<!-- 底部 -->

</body>
<script type="text/javascript">
	let app = new Vue({
		el:"#thisapp",
		data:{
			toptypelist:[
			{
				'listid':'1',
				'listtext':'写字楼'
			},
			{
				'listid':'2',
				'listtext':'厂房'
			},
			{
				'listid':'3',
				'listtext':'创意园'
			}
			],
			list_type1:true,
			list_type2:false,
		}
	});
</script>
</html>