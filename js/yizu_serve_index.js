$(function(){
	$('.flexul li').hover(function(){
		let indexs = $(this).index();
		$(".flexulinfo").eq(indexs).stop();
		$(".flexulinfo").eq(indexs).animate({top:"0px"},500);
	},function(){
		let indexs = $(this).index();
		$(".flexulinfo").eq(indexs).stop();
		$(".flexulinfo").eq(indexs).animate({top:"-278px"},500);
	})

	$(".tese-serve>div").hover(function(){
		let indexs = $(this).index();
		$(".info").eq(indexs).stop();
		$(".info").eq(indexs).animate({top:"-480px"},500);
	},function(){let indexs = $(this).index();
		$(".info").eq(indexs).stop();
		$(".info").eq(indexs).animate({top:"0px"},500);
	})
	
	
})
