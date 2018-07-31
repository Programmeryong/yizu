$(function(){
	$('.map_top ul li').on('click',function(){
	$('.map_top ul li').css({'border-top-color':'#f4f4f4','background':'rgba(0,0,0,.04)'});
	$('.map_bom ul li').hide();
	let i = $(this).index();
	switch(i){
		case 0: 
			$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#87c4e5','background':'#fff'});
			$('.map_bom > ul > li:eq('+i+')').show();
			thismap('公交车');
		break;
		case 1: 
			$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#f6b674','background':'#fff'});
			$('.map_bom > ul > li:eq('+i+')').show();
			thismap('餐饮');
		break;
		case 2: 
			$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#ed93b1','background':'#fff'});
			$('.map_bom > ul > li:eq('+i+')').show();
			thismap('娱乐');
		break;
		case 3: 
			$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#b0e0a3','background':'#fff'});
			$('.map_bom > ul > li:eq('+i+')').show();
			thismap('银行');
		break;
		case 4: 
			$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#f1c493','background':'#fff'});
			$('.map_bom > ul > li:eq('+i+')').show();
			thismap('酒店');
		break;
		case 5: 
			$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#dfaadf','background':'#fff'});
			$('.map_bom > ul > li:eq('+i+')').show();
		break;
	}
	})
	$('.map_top ul li:eq(0)').click();
	function thismap(thisname){
		var map = new BMap.Map("allmap");            // 创建Map实例
		var mPoint = new BMap.Point(113.2956311606, 23.2085909690);  
		map.enableScrollWheelZoom();
		map.centerAndZoom(mPoint,15);
		var circle = new BMap.Circle(mPoint,1000,{fillColor:"blue", strokeWeight: 1 ,fillOpacity: 0.3, strokeOpacity: 0.3});
	    map.addOverlay(circle);
	    var local =  new BMap.LocalSearch(map, {renderOptions: {map: map, autoViewport: false}});  
	    local.searchNearby(thisname,mPoint,1000);
	}
})

