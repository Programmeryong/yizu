/*修改手机端的click*/
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
/*修改手机端的click---结束*/





$(function(){

	/*选卡（全部，写字楼，创意园，出租屋）*/
	function xuanka(){
		$('.nav_title>li').touchClick(function(){
			$('.nav_title>li').removeClass("active");
			$(this).addClass("active");
		});
	}
	xuanka();
	
	$("a").touchClick(function(){
		$(this).css({"text-decoration":"none","color":"#00A2FF"});
	})


})






















