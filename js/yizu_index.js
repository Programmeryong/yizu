$(function(){
	// 鼠标移入变色事件
	$('.yizu_service li').mouseover(function(){
		let i = $(this).index();
		let then =$('.yizu_service li:nth-child('+(i+1)+') img');
		$('.yizu_service li:nth-child('+(i+1)+') p').css({'color':'#198cff'});
		switch(i){
			case 0 : then.attr('src','./images/icon/fixture_1.png');
			break;
			case 1 : then.attr('src','./images/icon/edifice_1.png');
			break;
			case 2 : then.attr('src','./images/icon/accbook_1.png');
			break;
			case 3 : then.attr('src','./images/icon/printer_1.png');
			break;
			case 4 : then.attr('src','./images/icon/crown_1.png');
			break;
			case 5 : then.attr('src','./images/icon/gift_1.png');
			break;
			case 6 : then.attr('src','./images/icon/office_1.png');
			break;
			case 7 : then.attr('src','./images/icon/truck_1.png');
			break;
		}
	});
	$('.yizu_service li').mouseout(function(){
		let i = $(this).index();
		let then =$('.yizu_service li:nth-child('+(i+1)+') img');
		$('.yizu_service li:nth-child('+(i+1)+') p').css({'color':'#666666'});
		switch(i){
			case 0 : then.attr('src','./images/icon/fixture.png');
			break;
			case 1 : then.attr('src','./images/icon/edifice.png');
			break;
			case 2 : then.attr('src','./images/icon/accbook.png');
			break;
			case 3 : then.attr('src','./images/icon/printer.png');
			break;
			case 4 : then.attr('src','./images/icon/crown.png');
			break;
			case 5 : then.attr('src','./images/icon/gift.png');
			break;
			case 6 : then.attr('src','./images/icon/office.png');
			break;
			case 7 : then.attr('src','./images/icon/truck.png');
			break;
		}
	});
	
	
	/*登录*/
	/*$('.login').draggable(); */
	let dian = 0;
	$(".login .checkb").click(function(){
		dian++;
		if(dian%2==1){$(this).css({"background":"url(./images/icon/checkbox-checked-o.png) 1px 11px no-repeat","background-size": "18px 18px"});
						$(".login input[type='checkbox']").prop("checked",true);
		}else{$(this).css({"background":"url(./images/icon/checkbox-o.png) 0px 9px no-repeat","background-size": "21px 21px"});
				$(".login input[type='checkbox']").prop("checked",false);}
	})
	
	$("#nav_right li:first-child").click(function(){
		$(".login").show(); 
		$(".temp").css({"visibility":"visible"}); //添加一层膜)
		let ifshow = $(".coupon").css("display");
		if (ifshow=="block") {//判断阴影是否去掉（就是那层膜）
			$(".temp").click(function(){$(".temp").css({"visibility":"visible"}); $(".login").show();})
		}
	})
	$(".login .closed").click(function(){$(".login").hide(); $(".temp").css({"visibility":"hidden"});})
	
	
	/*优惠券*/
	window.onload = function(){
		$(".temp").css({"visibility":"visible"});
		$(".coupon").show();
		
		let ifshow = $(".coupon").css("display");
		if (ifshow=="block") {
			$(".temp").click(function(){$(".temp").css({"visibility":"hidden"}); $(".coupon").css({"display":"none"});})
		}
	}
	$(".coupon_img img").click(function(){$("#nav_right li:first-child").click(); $(".coupon").hide();})
	$(".close_coupon i").click(function(){$(".temp").css({"visibility":"hidden"}); $(".coupon").hide();})
	/*优惠券结束*/
	
	
	
	/*精选写字楼*/
	jinxuan(".box4_nav li",".box4_nav li div");
	
	/*精选创意园*/
	jinxuan(".cyGraden .box4_nav li",".cyGraden .box4_nav li div");
	
	/*精选厂房*/
	jinxuan(".factory .box4_nav li",".factory .box4_nav li div");
	
	/*精选函数（写字楼，创意园，厂房）*/
	function jinxuan(lilist,divlist){
		$(lilist).hover(function(){
		let indexs = $(this).index();
		$(this).stop(); $(this).animate({top:"-2px"},200); $(divlist).eq(indexs).css({"box-shadow": "0px 4px 6px rgb(0,0,0,0.15)"});
		},function(){
			let indexs = $(this).index();
			$(this).stop(); $(this).animate({top:"0px"},200);  $(divlist).eq(indexs).css({"box-shadow": "0px 0px 0px rgb(0,0,0,0.15)"});
		})
	}
	
	
	/*登录表单验证*/
	
	$(".login input[type='tel']").click(function(){$(this).css({"border":"none"});})
	$(".login input[type='text']").click(function(){$(this).css({"border":"none"});})
	
	textphone('.phone',/^[1][3,4,5,7,8][0-9]{9}$/);//手机号码
	textphone('.yzm',/^[0-9]{4}$/) //验证码
	
	function textphone(thisclass,zengze){
		$(thisclass).blur(function(){
			let Uphone = $(thisclass).val();
			let Tphone = zengze;
			if(Tphone.test(Uphone) == false || Uphone == ''){
				$(thisclass).css({'border':'1px solid #F52230'});
			}else if(Tphone.test(Uphone)==true){
				$(thisclass).css({'border':'1px solid #5FCC29'})
			}
		})
	}
	
	$(".login form").submit(function(){
		
		let mobile = $(".login input[type='tel']");
		let tel = mobile.val();
		let yanzm = $(".login input[type='text']");
		let yanzm_value = $(yanzm).val();
		let phone = /^[1][3,4,5,7,8][0-9]{9}$/;
		
		if(tel==null || tel=="" || !phone.test(tel)){
			$(".login input[type='tel']").css({"border":"1px solid #F52230"});
			//return false;
		}else{$(".login input[type='tel']").css({"border":"1px solid #5FCC29"});}
		
		if(yanzm_value==""){
			$(".login input[type='text']").css({"border":"1px solid #F52230"});
			return false;
		}else{
			$(yanzm).css({"border":"1px solid #5FCC29"});
			if(tel==null || tel=="" || !phone.test(tel)){
				$(".login input[type='tel']").css({"border":"1px solid #F52230"});
				return false;
			}
		}
		
	})
	
	
	
	
})