$(function(){
	/*位置区域*/
	$('.list_tit1').click(function(){
		$('.list_tit1').addClass('clickcolor');
		$('.list_tit2').removeClass('clickcolor');
		$('.top_tab2').addClass('dispaly');
		$('.top_tab1').removeClass('dispaly');
		$(".quyu,.ditie").slideUp();
	});
	$('.list_tit2').click(function(){
		$('.list_tit2').addClass('clickcolor');
		$('.list_tit1').removeClass('clickcolor');
		$('.top_tab1').addClass('dispaly');
		$('.top_tab2').removeClass('dispaly');
		$(".quyu,.ditie").slideUp();
	});
	/*面积单价*/
	$('.list_tit3').click(function(){
		$('.list_tit3').addClass('clickcolor');
		$('.list_tit4').removeClass('clickcolor');
		$('.top_tab4').addClass('dispaly');
		$('.top_tab3').removeClass('dispaly');
	});
	$('.list_tit4').click(function(){
		$('.list_tit4').addClass('clickcolor');
		$('.list_tit3').removeClass('clickcolor');
		$('.top_tab3').addClass('dispaly');
		$('.top_tab4').removeClass('dispaly');
	});

	/*选卡（全部，写字楼，创意园，出租屋）*/
	function xuanka(){
		$('.house_listnav>ul>li').on('click',function(){
			$('.house_listnav>ul>li').removeClass("active");
			$(this).addClass("active");
		});
	}
	xuanka();

	/*点击区域*/
	$(".top_tab1>li").click(function(){
		var quyu = $(this).index();
		$(".top_tab1>li").removeClass("clickcolor");
		if($(".quyu").eq(quyu).css("display")=="none") {
			
			$(this).addClass("clickcolor")
			$(".quyu").not(quyu).hide();
			$(".quyu").eq(quyu).show();
		} else{
			$(".quyu").eq(quyu).slideUp();
			$(this).removeClass("clickcolor");
		}
		
	})
	
	$(".quyu>li").click(function(){
		var i = $(this).index();
		$(".quyu>li").not(i).removeClass("clickcolor");
		$(this).addClass("clickcolor");
	})
	
	
	/*点击地铁线路*/
	var ditie;
	$(".top_tab2>li").click(function(){
		ditie = $(this).index();
		$(".top_tab2>li").removeClass("clickcolor");
		if($(".ditie").eq(ditie).css("display")=="none") {
			
			$(this).addClass("clickcolor")
			$(".ditie").not(ditie).hide();
			$(".ditie").eq(ditie).show();
			
		} else{
			$(".ditie").eq(ditie).slideUp();
			$(this).removeClass("clickcolor");
		}
		
	})
	
	/*类型*/
	var type;
	$(".screen_type>li").click(function(){
		type = $(this).index();
		$(".screen_type>li").not(type).removeClass("active");
		$(this).addClass("active");
	})
	$(".screen_type>li").eq(0).click();
	
	/*来源*/
	var pj;
	$(".screen_from>li").click(function(){
		var station = $(this).index();
		$(".screen_from>li").not(station).removeClass("clickcolor");
		$(this).addClass("clickcolor");
		pj = $(this).index();
	})
	$(".screen_from>li").eq(0).click();
	
	/*点击地铁站点*/
	$(".ditie>li").click(function(){
		var station = $(this).index();
		$(".ditie>li").not(station).removeClass("clickcolor");
		$(this).addClass("clickcolor");
		console.log(type+","+pj+","+ditie);
	})
	
	/*面积*/
	$(".mianji>li").click(function(){
		var mianji = $(this).index();
		$(".mianji>li").not(mianji).removeClass("clickcolor");
		$(this).addClass("clickcolor");
	})
	$(".mianji>li").eq(0).click();
	
	/*单价*/
	$(".top_tab3>li").click(function(){
		var danjia = $(this).index();
		$(".top_tab3>li").not(danjia).removeClass("clickcolor");
		$(this).addClass("clickcolor");
	})
	$(".top_tab3>li").eq(0).click();
	
	/*总价*/
	$(".top_tab4>li").click(function(){
		var zongjia = $(this).index();
		$(".top_tab4>li").not(zongjia).removeClass("clickcolor");
		$(this).addClass("clickcolor");
	})
	$(".top_tab4>li").eq(0).click();
	
	
	
	   
	
	/*只能输入数字*/
	$('input').keypress(function(event){
		var key = event.keyCode;
		if(key == 46 || key == 43 || key == 45 || key ==189 || key == "undefined" || key == null || key == '')
	    {
	       return false;
	    }
	})
	
	
	/*服务标签*/
	$(".biao").hide();
	var posit = $(".posit");
	for (var i = 0; i < posit.length; i++) {
		var str = $(".str").eq(i).html();
		console.log(str);
	 	var arr = new Array(); 
	 	arr = str.split(""); 
	 	console.log(arr);
		for(var j in arr){
			var biao = arr[j]-1;
			$(".posit:eq("+i+") .biao:eq("+biao+")").show();
		}
	}
	/*服务标签结束*/
	
	
})