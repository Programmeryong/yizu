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
	
	
	
	
	/*精选写字楼*/
	jinxuan(".box4_nav li",".box4_nav li div");
	
	/*精选创意园*/
	jinxuan(".cyGraden .box4_nav li",".cyGraden .box4_nav li div");
	
	/*精选厂房*/
	jinxuan(".factory .box4_nav li",".factory .box4_nav li div");
	
	/*精选函数（写字楼，创意园，厂房）*/
	function jinxuan(lilist,divlist){
		$(lilist).hover(function(){
		let indexs = $(this).index();
		$(this).stop(); $(this).animate({top:"-2px"},200); $(divlist).eq(indexs).css({"box-shadow": "0px 4px 6px rgb(0,0,0,0.15)"});
		},function(){
			let indexs = $(this).index();
			$(this).stop(); $(this).animate({top:"0px"},200);  $(divlist).eq(indexs).css({"box-shadow": "0px 0px 0px rgb(0,0,0,0.15)"});
		})
	}
	
	
	
	
	
	
	
})