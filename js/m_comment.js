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
	
	/*服务标签*/
	let i= 0;
	let i1=0;
	let i2=0;
	let i3 = 0;
	let sum = 0;
	var arr = [];
	$(".metro_lable").touchClick(function(){
		i++;
		if(i%2==1){$(this).css({"background":"#FFB319","color":"#fff"}); sum++;
			arr.push(1);
			$('.service_lable2 :checkbox').eq(0).click();
		}else{$(this).css({"background":"#FFF7E6","color":"#FFB319"}); sum--; arr.splice(arr.indexOf(1),1);
			$('.service_lable2 :checkbox').eq(0).click();
			}
		$(".label_sum").html(sum);
	})
	
	$(".less_lable").touchClick(function(){
		i1++;
		if(i1%2==1){$(this).css({"background":"#F52230","color":"#fff"}); sum++; arr.push(2);
			$('.service_lable2 :checkbox').eq(1).click();
		}else{$(this).css({"background":"#FFEBEC","color":"#F52230"}); sum--; arr.splice(arr.indexOf(2),1);
			$('.service_lable2 :checkbox').eq(1).click();}
		$(".label_sum").html(sum);
	})
	
	$(".worked_jiaju").touchClick(function(){
		i2++;
		if(i2%2==1){$(this).css({"background":"#52C41A","color":"#fff"}); sum++; arr.push(3);
			$('.service_lable2 :checkbox').eq(2).click();
		}else{$(this).css({"background":"#F5FFEB","color":"#52C41A"}); sum--; arr.splice(arr.indexOf(3),1);
			$('.service_lable2 :checkbox').eq(2).click();}
		$(".label_sum").html(sum);
	})
	
	$(".property").touchClick(function(){
		i3++;
		if(i3%2==1){$(this).css({"background":"#2D96FF","color":"#fff"}); sum++; arr.push(4);
			$('.service_lable2 :checkbox').eq(3).click();
		}else{$(this).css({"background":"#EBF5FF","color":"#198CFF"}); sum--; arr.splice(arr.indexOf(4),1);
			$('.service_lable2 :checkbox').eq(3).click();}
		$(".label_sum").html(sum);
	})
	
	/*星星*/
	$(".stars").click(function(){
		$(".stars").css({"background":"url(images/icon/star.png) no-repeat","background-size":"16px 16px"});
		var indexs = ($(this).index())+1;
		$(".stars:lt("+indexs+")").css({"background":"url(images/icon/star-yellow.png) no-repeat","background-size":"16px 16px"});
		$(".star_sum").html(indexs);
		commend(indexs);
	})
	$('.stars:eq(4)').click();
	
	function commend(stars){
		
		switch (stars){
			case 1:
				$(".commend").html("一般");
				break;
			case 2:
				$(".commend").html("推荐");
				break;
			case 3:
			$(".commend").html("推荐");
			break;
			case 4:
				$(".commend").html("非常推荐");
				break;
			case 5:
				$(".commend").html("非常推荐");
				break;
			default:
				break;
		}
	}
	
	
	/*点击提交评价，模拟点击提交表单*/
	$(".ok").touchClick(function(){//点击class为ok的按钮时模拟点击submit按钮
 		$("input[type='submit']").click();
 	})
	
	
	$(".textArea").touchClick(function(){
		navs(".textArea",200)
	})
	
	function navs(id,time){$("html,body").animate({scrollTop:$(id).offset().top-30},time);}
})
