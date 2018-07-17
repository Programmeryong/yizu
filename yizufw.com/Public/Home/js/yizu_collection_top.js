$(function(){
	/*选卡（房源投放,我的收藏,我的优惠券,委托找房,看房记录,推荐拿佣金）*/
	function xuanka(){
		$('.listnav>ul>li').on('click',function(){
			$(".middle>div").removeClass("curr");
			$('.listnav>ul>li').removeClass("active");
			$(this).addClass("active");
			let indexs = $(this).index();
			$("#indexs"+indexs).addClass("curr");
		});
	}
	xuanka();

	

})