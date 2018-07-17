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
	$('.m_top_l').touchClick(function(){
		$('.Curtain').css({'visibility': 'visible'});
		$('.menustyle').css({'visibility':'visible'});
	})
	$('.Curtain').touchClick(function(){
		$('.Curtain').css({'visibility': 'hidden'});
		$('.menustyle').css({'visibility':'hidden'});
	})
	$('.menu_img img').touchClick(function(){
		$('.Curtain').css({'visibility': 'hidden'});
		$('.menustyle').css({'visibility':'hidden'});
	})
	$('.menu_ul li').on('click',function(){
		$('.menu_ul li p').removeClass('menuul');
		let i = $(this).index();
		$('.menu_ul li:eq('+i+') p').addClass('menuul');
	})
})