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
	$('.headertopr').touchClick(function(){
		$('.headertopr input').click();
	})
    $('.thistextarea').on('keyup',function(){
         $('.thannum').text($('.thistextarea').val().length);
             if($('.thistextarea').val().length > 200){
                    $('.thannum').text(200);//长度大于100时0处显示的也只是100
                    $('.thistextarea').val($('.thistextarea').val().substring(0,200));//长度大于100时截取钱100个字符
            }
         $('.thannum').text($('.thistextarea').val().length);
    })
})