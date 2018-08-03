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
		$('.house_list>ul>li').touchClick(function(){
			$('.house_list>ul>li').removeClass("active");
			$(this).addClass("active");
		});
	}
	xuanka();
	
	
	$("#all_house>ul>li").touchClick(function(){
		$(this).css("background","rgba(0,0,0,0.04)")
	})
	
	$(".user_evaluate_list>ul>li").touchClick(function(){
		$(this).css("background","rgba(0,0,0,0.04)")
	})


	/*评论的星星和标签*/
	var arr = [1,4];
	var arr1 = [2,3,4,1];
	var arr2 = [2,3];
	function starAndcommend(id,sum,commend,arr){/*id是li下的div,sum是星星数量,commend是推荐力度，arr是标签数组*/
		/*星星*/
		for (var i = 0; i<sum; i++) {
			$("."+id+" .star span").eq(i).css({"background":"url(images/icon/star-yellow.png) no-repeat", "background-size": "18px 18px"});
		}
		$("."+id+" .commend").html(commend);
		
		/*标签*/
		$("."+id+" .biaoqian span").hide();
		for (var i in arr) {
			var arrI = arr[i]-1;
			$("."+id+" .biaoqian span").eq(arrI).show();
		}
		
		/*电话号码中间用****代替*/
		var phone = $('.'+id+' .userId').text();
		var mphone = phone.substr(0, 3) + '****' + phone.substr(7);
		$('.'+id+' .userId').text(mphone)
		
	}
	starAndcommend(123456,3,"推荐",arr);
	starAndcommend(1234,1,"一般",arr1);
	starAndcommend(123,4,"非常推荐",arr2);



	
	
	
})