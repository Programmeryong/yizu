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
	$(".top_tab2>li").click(function(){
		var quyu = $(this).index();
		$(".top_tab2>li").removeClass("clickcolor");
		if($(".ditie").eq(quyu).css("display")=="none") {
			
			$(this).addClass("clickcolor")
			$(".ditie").not(quyu).hide();
			$(".ditie").eq(quyu).show();
			
		} else{
			$(".ditie").eq(quyu).slideUp();
			$(this).removeClass("clickcolor");
		}
		
	})
	
	/*类型*/
	$(".screen_type>li").click(function(){
		var station = $(this).index();
		$(".screen_type>li").not(station).removeClass("active");
		$(this).addClass("active");
	})
	
	/*来源*/
	$(".screen_from>li").click(function(){
		var station = $(this).index();
		$(".screen_from>li").not(station).removeClass("clickcolor");
		$(this).addClass("clickcolor");
	})
	
	/*点击地铁站点*/
	$(".ditie>li").click(function(){
		var station = $(this).index();
		$(".ditie>li").not(station).removeClass("clickcolor");
		$(this).addClass("clickcolor");
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
})