$(function(){
	$('.aboutus_nav > ul > li').on('click',function(){
		let i = $(this).index();
		// 蠢办法，还可以继续优化
		$('.aboutus_nav > ul > li').removeClass('clicktab');
		$('.aboutus_bigbox > ul > li').addClass('dinode');
		$(this).addClass('clicktab');
		$('.aboutus_bigbox > ul > li:eq('+i+')').removeClass('dinode');
		$('.mintext li').css({'display':'block'});
	});
	$(document).ready(function(){
		// 模拟点击事件
		$('.aboutus_nav > ul > li:eq(0)').click();
	});
})