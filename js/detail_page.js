$(document).ready(function(){
	
	/*电话号码中间用****代替*/
	/*function phone(id) {
		var phone = $('.'+id+' .userId').text();
		var mphone = phone.substr(0, 3) + '****' + phone.substr(7);
		$('.'+id+' .userId').text(mphone)
	}; 
	phone(123456);
	phone(1234);
	phone(123);*/
	
	
	/*评论的星星和标签*/
	var arr = [1,4];
	var arr1 = [2,3,4];
	var arr2 = [2,3];
	function starAndcommend(id,sum,commend,arr){/*id是li下的div,sum是星星数量,commend是推荐力度，arr是标签数组*/
		/*星星*/
		for (var i = 0; i<sum; i++) {
			$("."+id+" .star span").eq(i).css({"background":"url(images/icon/star-yellow.png) no-repeat", "background-size": "22px 22px"});
		}
		$("."+id+" .commend").html(commend);
		
		/*标签*/
		$("."+id+" .biaoqian span").hide();
		for (var i in arr) {
			var arrI = arr[i]-1;
			$("."+id+" .biaoqian span").eq(arrI).show();
		}
		
		/*电话号码中间用****代替*/
		var phone = $('.'+id+' .userId').text();
		var mphone = phone.substr(0, 3) + '****' + phone.substr(7);
		$('.'+id+' .userId').text(mphone)
		
	}
	starAndcommend(123456,3,"推荐",arr);
	starAndcommend(1234,1,"一般",arr1);
	starAndcommend(123,4,"非常推荐",arr2);
	

	
	/*导航滑动到顶端固定*/
	function hua(){
		var oTop = $(".middle").offset().top;
		var sTop = 0;
		$(window).scroll(function(){
			sTop = $(this).scrollTop();
			if(sTop >= oTop){
				$('.middle').addClass('navbar-fixed-top');
				$('.middle').removeClass("posit");
			}else{
				$('.middle').removeClass('navbar-fixed-top');
				$('.middle').addClass("posit");
			}
		});
		
	}
	hua();
	
	
	
	
	var s = $(document).scrollTop();
	function xuanka2(){
		$('.middle_title ul li').on('click',function(){
			$('.middle_title ul li').removeClass("active");
			$(this).addClass("active");
			let indexs = $(this).index();
			switch (indexs){
				case 0:
						navs(".houseinfo",500);
					break;
				case 1:
						navs(".house_present",800);
					break;
				case 2:
						navs("#around",1000);
					break;
				case 3:
						navs(".lovely",1200);
					break;
				default:
					break;
			}
		});
	}
	function navs(id,time){$("html,body").animate({scrollTop:$(id).offset().top-30},time);}
	xuanka2();
	
	

	
	/*提交成功后提示*/
	/*$("input[type='submit']").click(function(){
		$(".succe").show(500,function(){
		    $(".succe").fadeOut(6000);
		});
	})*/
	
	/*提交出错后提示*/
	/*$("input[type='submit']").click(function(){
		$(".error").show(500,function(){
			$(".close_error").click(function(){
				$(".error").hide(500);
			})
		    $(".error").fadeOut(6000);
		});
	})*/
	//ifsucce("succe","哈哈","hkjhjkhj");
	function ifsucce(id,title,info){
		$("."+id+"_title").html(title);
		$(".juese_"+id).html(info);
		
		$("."+id).show(500).delay(10).fadeOut(4000);
		
		/*提示框慢慢消失，如果鼠标移到上面，显示回来，鼠标移出继续消失*/
		$("."+id).hover(function(){
			$(this).fadeIn(500).delay(10).stop();
		},function(){
			$(this).fadeOut(2500);
		})
		
		/*点击关闭xx,关闭提示框*/
		$(".close_"+id).click(function(){
			$("."+id).stop().delay(10).hide(500);
		})
		
	}
	
	
	
	/*委托找房*/
	$("input[type='tel']").change(function(){
		$("#telText").css("display","none");
	});
	
	
	
	$("form").submit(function(){
		let tel = $("#tel").val();
		let phone = /^[1][3,4,5,7,8][0-9]{9}$/;  
		let telText = document.getElementById("telText");
		if (tel==null || tel=="") {
			telText.style.display = "block";
			telText.innerHTML="手机号不能为空";
			return false;
		}else if(!phone.test(tel)){
			telText.style.display = "block";
			telText.innerHTML="请输入正确的手机号";
			return false
		}else{
			telText.innerHTML="";
		}
	})
	
	
	/*鼠标移入，显示上下一页按钮*/
 	$("#lovely").mouseover(function(){
 		$(".pre,.next").css("display","block");
 	})
 	/*鼠标移出，隐藏上下一页按钮*/
 	$("#lovely").mouseout(function(){
 		$(".pre,.next").css("display","none");
 	})
 	
	$(".pre").mouseover(function(){
        $(".pre img:first-child").css("display","none");
        $(".pre img:last-child").css("display","block");
    })
    $(".pre").mouseout(function(){
        $(".pre img:first-child").css("display","block");
        $(".pre img:last-child").css("display","none");
    })
    $(".next").mouseover(function(){
    	$(".next img:first-child").css("display","none");
        $(".next img:last-child").css("display","block");
    })
    $(".next").mouseout(function(){
    	$(".next img:first-child").css("display","block");
        $(".next img:last-child").css("display","none");
    })

	// 地图模块
	var map_x = 113.2956311606;
	var map_y = 23.2085909690;
	$('.map_top ul li').on('click',function(){
		$('.map_top ul li').css({'border-top-color':'#f4f4f4','background':'rgba(0,0,0,.04)'});
		$('.map_bom ul li').hide();
		let i = $(this).index();
		switch(i){
			case 0: 
				$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#87c4e5','background':'#fff'});
				$('.map_bom > ul > li:eq('+i+')').show();
				thismap('公交车',map_x,map_y);
			break;
			case 1: 
				$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#f6b674','background':'#fff'});
				$('.map_bom > ul > li:eq('+i+')').show();
				thismap('餐饮',map_x,map_y);
			break;
			case 2: 
				$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#ed93b1','background':'#fff'});
				$('.map_bom > ul > li:eq('+i+')').show();
				thismap('娱乐',map_x,map_y);
			break;
			case 3: 
				$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#b0e0a3','background':'#fff'});
				$('.map_bom > ul > li:eq('+i+')').show();
				thismap('银行',map_x,map_y);
			break;
			case 4: 
				$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#f1c493','background':'#fff'});
				$('.map_bom > ul > li:eq('+i+')').show();
				thismap('酒店',map_x,map_y);
			break;
			case 5: 
				$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#dfaadf','background':'#fff'});
				$('.map_bom > ul > li:eq('+i+')').show();
			break;
		}
	})
	$('.map_top ul li:eq(0)').click();

	function thismap(typename,x,y){
		var map = new BMap.Map("allmap");            // 创建Map实例
		var mPoint = new BMap.Point(x,y);  //中心点的经纬度
	  	var marker = new BMap.Marker(mPoint); 
	    map.addOverlay(marker);
	    marker.setAnimation(BMAP_ANIMATION_BOUNCE);
		map.enableScrollWheelZoom();
		map.centerAndZoom(mPoint,15);
		var circle = new BMap.Circle(mPoint,1000,{fillColor:"blue", strokeWeight: 1 ,fillOpacity: 0.3, strokeOpacity: 0.3});//画圈半径一千米
	    map.addOverlay(circle);
	    var local =  new BMap.LocalSearch(map, {renderOptions: {map: map, autoViewport: true,panel: "r-result",imagesUrl:'./images/icon/traffic.png',detail_info:2}});  
	    local.searchNearby(typename,mPoint,1000);
	    console.log(local);
	}	

})

	
	

