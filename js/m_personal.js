// 修改手机端的click
(function(){
    var defaults={
        start:function(self,event){},
        move:function(self,event){},
        end:function(self,event){}
    }
    $.fn.touchClick=function(opts){
        if(typeof opts=="function"){
            opts=$.extend({}, defaults,{end:opts});
        }else{
            opts=$.extend({}, defaults,opts);
        }
        this.each(function(){
            var obj=$(this);
            obj.on("touchstart",function(event){
                obj.data("move",false);
                opts.start.call(this,event);
            }).on("touchmove",function(event){
                obj.data("move",true);
                opts.move.call(this,event);
            }).on("touchend",function(event){
                if(obj.data("move")){
                    return;
                }else{
                    opts.end.call(this,event);
                }
                obj.data("move",false);
            });
        });
    };
})(jQuery);

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