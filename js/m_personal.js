$(function(){
	var wwid = $(window).width();
	var whei = $(window).height();
	var hei = $(document).height();
	$('.entrustbox').css({'width':wwid,'height':hei});
	$('.entrustbox div').css({'height':(whei*0.9)});
	$(".next").touchClick(function(){
		$(".swiper-button-next").click();
	})
	$(".entrustbox").on('touchmove',function(e){
	    e.preventDefault();
	})
	$('.brokerbtm').touchClick(function(){
		$('.entrustbox').show();
	})
	$('.entrustbox').touchClick(function(){
		$('.entrustbox').hide();
	})

	function thanmin(p,id1,id2){
		var P = $(p).html();
		if(P == ''){
			$(id1).hide();
			$(id2).show();
		}else{
			$(id1).show();
			$(id2).hide();
		}
	}
	thanmin('.minp1','.Entrustbox1','.Entrustbox2');
	thanmin('.minp2','.brokerage1','.brokerage2');
})