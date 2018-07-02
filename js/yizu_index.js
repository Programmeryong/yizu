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
})