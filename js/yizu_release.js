$(function(){
	// 模仿单选按钮效果
	$('.ulradio li').on('click',function(){
		let i = $(this).index();
		// console.log(i);
		$('.ulradio li').css({"background-image":"url(./images/icon/btn_on.png)"});
		$('.ulradio li:eq('+i+')').css({"background-image":"url(./images/icon/btn_off.png)"});
	});
	$('.ulradio li:eq(0)').click();

	// 配套设施的标签效果
	$('.tabnavbox li').on('click',function(){
		let i = $(this).index();
		let than = $('.tabnavbox li:eq('+i+')');
		let thancolor = than.css('background-color') ;
		switch(i){
			case 0: (than.css('background-color') =='rgb(255, 247, 230)') ? textcolor(than,'#FFB319','#fff') : textcolor(than,'rgb(255, 247, 230)','#ffb319');
			break;
			case 1: (than.css('background-color') =='rgb(255, 235, 236)') ? textcolor(than,'#F52230','#fff') : textcolor(than,'rgb(255, 235, 236)','#f52230');
			break;
			case 2: (than.css('background-color') =='rgb(245, 255, 235)') ? textcolor(than,'#52C41A','#fff') : textcolor(than,'rgb(245, 255, 235)','#52c41a');
			break;
			case 3: (than.css('background-color') =='rgb(235, 245, 255)') ? textcolor(than,'#2D96FF','#fff') : textcolor(than,'rgb(235, 245, 255)','#198cff');
			break;
		}
	});
	function textcolor(than,bg,col){
		than.css({'background':bg,'color':col});
	}

	// 模拟点击提交事件
	$('.releasethis').click(function(){
		$('.clicksubmit').click();
	})
	$('.analogclick1').click(function(){
		$('.filestyle1').click();
	})
	$('.analogclick2').click(function(){
		$('.filestyle2').click();
	})
	$('.analogclick3').click(function(){
		$('.filestyle3').click();
	})


	
})