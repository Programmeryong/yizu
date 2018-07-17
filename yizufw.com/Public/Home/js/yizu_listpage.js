$(function(){
	/*位置区域*/
	$('.list_tit1').click(function(){
		$('.list_tit1').addClass('clickcolor');
		$('.list_tit2').removeClass('clickcolor');
		$('.top_tab2').addClass('dispaly');
		$('.top_tab1').removeClass('dispaly');
	});
	$('.list_tit2').click(function(){
		$('.list_tit2').addClass('clickcolor');
		$('.list_tit1').removeClass('clickcolor');
		$('.top_tab1').addClass('dispaly');
		$('.top_tab2').removeClass('dispaly');
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

})