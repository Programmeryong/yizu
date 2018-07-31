$(function(){
	/*我的收藏*/
	let img_info = $(".center .img_info");
	let img_infos = $(".upload .img_info");
 	/*第一个函数是鼠标悬停，第二个函数是鼠标移出*/
 	$(".center ul li").hover(function(){
 		let index = $(this).index();
 		/*console.log("index"+index);*/
 		$(img_info[index]).stop();
 		$(img_info[index]).animate({top:"-220px"},500)
 	},function(){
 		let index = $(this).index();
 		$(img_info[index]).stop();
 		$(img_info[index]).animate({top:"0px"},500)
 	})
 	
 	
 	/*上传的房源*/
 	$(".upload ul li").hover(function(){
 		let index = $(this).index();
 		/*console.log("index"+index);*/
 		$(img_infos[index]).stop();
 		$(img_infos[index]).animate({top:"-220px"},500)
 	},function(){
 		let index = $(this).index();
 		$(img_infos[index]).stop();
 		$(img_infos[index]).animate({top:"0px"},500)
 	})
 	
 	
 	
 	/*选卡（全部，待看房，待确认，待评价）*/
	function xuanka(){
		$('.house_listnav>ul>li').on('click',function(){
			$('.house_listnav>ul>li').removeClass("act");
			$(this).addClass("act");
		});
	}
	xuanka();
 
 
 	/*发表评论*/
 	$(".comment .ok").click(function(){//点击class为ok的按钮时模拟点击submit按钮
 		$(".comment input[type='submit']").click();
 	})
 	
	$(".state span").click(function(){
		$(".comment").css({"display":"block"});
		$(".temp").css({"visibility":"visible"});//添加一层膜
	})
	
	$(".close_but,.cancel").click(function(){
		$(".comment").css({"display":"none"});
		$(".temp").css({"visibility":"hidden"});
	})
	
	/*单选按钮*/
 	/*$('.ulradio li').on('click',function(){
		let i = $(this).index();
		$('.ulradio li').css({"background-image":"url(./images/icon/btn_on.png)"});
		$('.ulradio li:eq('+i+')').css({"background-image":"url(./images/icon/btn_off.png)"});
	})
	$('.ulradio li:eq(0)').click();*/
	
	
	/*服务标签*/
	let i= 0;
	let i1=0;
	let i2=0;
	let i3 = 0;
	let sum = 0;
	var arr = [];
	$(".metro_lable").click(function(){
		i++;
		if(i%2==1){$(this).css({"background":"#FFB319","color":"#fff"}); sum++;
			arr.push(1);
		}else{$(this).css({"background":"#FFF7E6","color":"#FFB319"}); sum--; arr.splice(arr.indexOf(1),1);}
		$(".label_sum").html(sum);
	})
	
	$(".less_lable").click(function(){
		i1++;
		if(i1%2==1){$(this).css({"background":"#F52230","color":"#fff"}); sum++; arr.push(2);
		}else{$(this).css({"background":"#FFEBEC","color":"#F52230"}); sum--; arr.splice(arr.indexOf(2),1);}
		$(".label_sum").html(sum);
	})
	
	$(".worked_jiaju").click(function(){
		i2++;
		if(i2%2==1){$(this).css({"background":"#52C41A","color":"#fff"}); sum++; arr.push(3);
		}else{$(this).css({"background":"#F5FFEB","color":"#52C41A"}); sum--; arr.splice(arr.indexOf(3),1);}
		$(".label_sum").html(sum);
	})
	
	$(".property").click(function(){
		i3++;
		if(i3%2==1){$(this).css({"background":"#2D96FF","color":"#fff"}); sum++; arr.push(4);
		}else{$(this).css({"background":"#EBF5FF","color":"#198CFF"}); sum--; arr.splice(arr.indexOf(4),1);}
		$(".label_sum").html(sum);
	})
	
	/*星星*/
	$(".stars").click(function(){
		$(".stars").css({"background":"url(images/icon/star.png) no-repeat","background-size":"20px 20px"});
		var indexs = ($(this).index())+1;
		$(".stars:lt("+indexs+")").css({"background":"url(images/icon/star-yellow.png) no-repeat","background-size":"20px 20px"});
		$(".star_sum").html(indexs);
		commend(indexs);
	})
	$('.stars:eq(4)').click();
	
	function commend(stars){
		
		switch (stars){
			case 1:
				$(".commend").html("一般");
				break;
			case 2:
				$(".commend").html("推荐");
				break;
			case 3:
			$(".commend").html("推荐");
			break;
			case 4:
				$(".commend").html("非常推荐");
				break;
			case 5:
				$(".commend").html("非常推荐");
				break;
			default:
				break;
		}
	}
	
	/*文本域*/
	
	/*委托找房*/
	$(".entrust_once").click(function(){$(".application").css({"display":"block"});
		$(".temp").css({"visibility":"visible"});//添加一层膜
		$(".temp").show();
		$(".temp").click(function(){
			$(this).hide();
			$(".application").css({"display":"none"});
		})
	})
	
	$(".close_applic").click(function(){$(".application").css({"display":"none"});
		$(".temp").css({"visibility":"hidden"});
		$(".application .error").html("");
	})
		
	$(".application form").submit(function(){
		let tel = /^[1][3,4,5,7,8][0-9]{9}$/;  
		let phone = $("input[type='text']").val();
		let txt = $(".application .error");
		if(phone==null||phone==""){
			txt.html("手机号不能为空!");
			return false;
		}else if(!tel.test(phone)){
			txt.html("请输入正确的手机号");
			return false;
		}else{txt.html(""); $(".temp").css({"visibility":"hidden"});}
	})
	
	$("input[type='text']").change(function(){
		$(".application .error").html("");
	});
	
	
	/*推荐用户*/
	$(".rcdcmn_once").click(function(){$(".rcdcmn_box").css({"display":"block"});
		$(".temp").css({"visibility":"visible"});//添加一层膜
		$(".temp").show();
		$(".temp").click(function(){
			$(this).hide();
			$(".rcdcmn_box").css({"display":"none"});
		})
	})
	$(".close_rcdcmn_box").click(function(){$(".rcdcmn_box").css({"display":"none"});
		$(".temp").css({"visibility":"hidden"});
		$(".rcdcmn_box .error").html("");
	})
	
	$(".rcdcmn_box form").submit(function(){
		let tel = /^[1][3,4,5,7,8][0-9]{9}$/;  
		let phone = $(".rcdcmn_box input[type='text']").val();
		let txt = $(".rcdcmn_box .error");
		if(phone==null||phone==""){
			txt.html("手机号不能为空!");
			return false;
		}else if(!tel.test(phone)){
			txt.html("请输入正确的手机号");
			return false;
		}else{txt.html(""); $(".temp").css({"visibility":"hidden"});}
	})
	
	$("input[type='text']").change(function(){
		$(".rcdcmn_box .error").html("");
	});
})