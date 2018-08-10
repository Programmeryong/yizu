 
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
	
	/*
	角标 number ==> 第几个li 
	type1 ==> 状态 1 ==> 显示 2 ==> 隐藏  
	text1 ==> 文字
	*/
	function Superscript(arr){
		for(var i =0;i<arr.length;i++){
			var a =Number(arr[i].number);
			var b =Number(arr[i].type1);
			var c =arr[i].text1;
			$('.yizu_service li:eq('+a+') .superscript').text(c).append('<i class="glyphicon glyphicon-triangle-bottom"></i>');
			if(b == 1){
				$('.yizu_service li:eq('+a+') .superscript').css({'display':'block'});
			}else if(b == 0){
				$('.yizu_service li:eq('+a+') .superscript').css({'display':'none'});
			}
		}
	}
	// ajax获取到这样的数组
	var arr = [
		{'number':0,'type1':1,'text1':'9.5折'},
		{'number':1,'type1':0,'text1':'HOT'},
		{'number':2,'type1':1,'text1':'HOT'},
		{'number':3,'type1':0,'text1':'HOT'},
		{'number':4,'type1':0,'text1':'HOT'},
		{'number':5,'type1':0,'text1':'HOT'},
		{'number':6,'type1':0,'text1':'HOT'},
		{'number':7,'type1':0,'text1':'HOT'}
	];
	Superscript(arr);
	
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
	
	
	/*反馈*/
	$(".feedback textarea").focus(function(){
		$(this).css({"border":"1px solid #198CFF"});
	})
	$(".feedback textarea").blur(function(){
		$(this).css({"border":"1px solid #E1E1E1"});
	})
	
	
	var iftrue;/*声明全局变量，判断是否能提交*/
	/*获取焦点*/
	$(".feedback input[type='text']").focus(function(){
		$(this).css({"border":"1px solid #198CFF"});
		$(".tishi").html("");
	})
	
	/*失去焦点*/
	$(".feedback input[type='text']").blur(function(){
		yanzeng();
	})
	
	/*提交表单*/
	$(".feedback form").submit(function(){
		yanzeng();
		return iftrue;
	})
	
	function yanzeng(){
		
		var txt = $(".feedback input[type='text']").val();
		var email = /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.[a-zA-Z0-9]{2,6}$/;/*邮箱*/
		var phone = /^[1][3,4,5,7,8][0-9]{9}$/; /*电话号码*/
		var qq = /^[0-9]{4,12}$/; /*4-12位纯数字qq号*/
		
		if(txt=="" || txt==null){
			$(".feedback input[type='text']").css({"border":"1px solid #F52230"});
			$(".tishi").html("联系方式不能为空！");
			iftrue = false;
		}else if(!email.test(txt) && !phone.test(txt) && !qq.test(txt)){
			$(".feedback input[type='text']").css({"border":"1px solid #F52230"});
			$(".tishi").html("请输入正确的手机号码,邮箱或QQ！");
			iftrue = false;
		}else{
			$(".feedback input[type='text']").css({"border":"1px solid #5FCC29"});
			$(".tishi").html("");
			iftrue = true;
		}
	}
	/*反馈结束*/
	
	/*点击反馈*/
	$(".fankui").click(function(){
		$(".temp").css("visibility","visible");
		$(".feedback").show();
	})
	
	$(".temp,.close_feedback").click(function(){
		$(".temp").css("visibility","hidden");
		$(".feedback").hide();
	})
	
	
})