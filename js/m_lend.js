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
	
	/*切换筛选条件（类型、 区域、 面积、 价格、排序）*/
	function xuanka(){
		$('.screen_title li').touchClick(function(){
			$('.screen_title li').removeClass("active");
			$(".sort").show();
			$(".sort-blue").hide();
			var i = $(this).index();
			if ($(".screen").eq(i).css("display")=="none") {
				$(".screen").not(i).fadeOut("slow");
				$(".screen").eq(i).slideDown();
				/*$(".screen").eq(i).slideDown();*/
				$(".temp").show();
				$(".screen_title li i").not(i).removeClass("active");
				$(this).addClass("active");
				$(".screen_title li i").eq(i).addClass("active");
				
				/*判断排序*/
				if (i==4) {
					$(".sort").hide();
					$(".sort-blue").show();
				} else{
					$(".sort").show();
					$(".sort-blue").hide();
				}
				
			} else{
				/*$(".screen").eq(i).slideUp();*/
				$(".screen").eq(i).slideUp();
				$(this).removeClass("active");
				$(".screen_title li i").eq(i).removeClass("active");
				$(".temp").hide();
			}
			
			 
		});
	}
	xuanka();
	/*切换筛选条件（类型、 区域、 面积、 价格、排序）----结束*/
	
	$(".temp").touchClick(function(){
		$(this).delay(400).hide(0); /*由于点击穿透问题，延迟400ms在隐藏，否则会点到下一层的元素，hide()必须加0,否则无效*/
		$(".screen").slideUp();
		$('.screen_title li').removeClass("active");
		$(".screen_title li i").removeClass("active");
		 
	})

	
	/*筛选类型*/
	function screenType(){
		$('.screen_type li').touchClick(function(){
			$('.screen_type li').removeClass("active");
			$(this).addClass("active");
			haha();
		})
	}
	screenType();
	/*筛选类型结束*/
	
	/*区域或地铁*/
	$(".screen_quyu>ul>li").touchClick(function(){
		$(".screen_quyu>ul>li").removeClass("active2");
		var index = $(this).index();
		if($(".q-m").eq(index).css("display")=="none"){
			$(".q-m").not(index).slideUp();
			$(".q-m").eq(index).slideDown();
			$(this).addClass("active2");
		}else{$(this).addClass("active2");}
		
		if (index==0) {
			$(".quyu-metros").css({"width":"60%"});
			$(".quyu-metros").animate({left:"40%"},200);
			$(".line").hide(200);
		}
	})
	/*区域或地铁结束*/
	
	function haha(){
		$(".temp").delay(350).hide(0); 
		$(".screen").delay(500).slideUp();
		$('.screen_title li').eq(1).removeClass("active");
		$(".screen_title li i").eq(1).removeClass("active");
	}
	
	/*区域*/
	$(".quyu>ul>li").touchClick(function(){
		$(".quyu>ul>li").removeClass("active2");
		var quyu = $(this).index();
		$(this).addClass("active2");
		haha();
	})
	/*区域结束*/
	
	/*地铁*/
	$(".metros>ul>li").touchClick(function(){
		$(".metros>ul>li").removeClass("active2");
		var metro = $(this).index();
		$(this).addClass("active2");
		$(".quyu-metros").css({"width":"76%"});
		$(".quyu-metros").animate({left:"24%"},200);
		$(".line").not(metro).slideUp();
		$(".line").eq(metro).slideDown();
	})
	/*地铁结束*/
	
	/*地铁线路*/
	$(".line>ul>li").touchClick(function(){
		$(".line>ul>li").removeClass("active2");
		var quyu = $(this).index();
		$(this).addClass("active2");
		haha();
	})
	/*地铁线路结束*/
	
	/*筛选面积*/
	$('.screen_area li').touchClick(function(){
		$('.screen_area li').removeClass("active");
		$(this).addClass("active");
		 
	})
	/*筛选面积结束*/
	
	/*筛选价格*/
	$('.screen_price li').touchClick(function(){
		$('.screen_price li').removeClass("active");
		$(this).addClass("active");
		 
	})
	/*筛选价格结束*/
	
	/*点击确定*/
	$(".ok").touchClick(function(){
		var indexs = $(this).index();
		$(".temp").delay(350).hide(0); 
		$(".screen").delay(500).slideUp();
		$('.screen_title li').eq(2).removeClass("active");
		$(".screen_title li i").eq(2).removeClass("active");
		 
	})
	$(".ok1").touchClick(function(){
		var indexs = $(this).index();
		$(".temp").delay(350).hide(0); 
		$(".screen").delay(500).slideUp();
		$('.screen_title li').eq(3).removeClass("active");
		$(".screen_title li i").eq(3).removeClass("active");
		 
	})
	/*点击确定结束*/
	
	/*排序*/
	$(".screen_sort>ul>li").touchClick(function(){
		$(".screen_sort>ul>li").removeClass("active");
		var sort = $(this).index();
		$(this).addClass("active");
		haha();
	})
	/*排序结束*/
	
	/*筛选滑动到顶端悬浮顶端*/
	function hua(){
		var oTop = $(".screen_box").offset().top;
		var sTop = 0;
		$(window).scroll(function(){
			sTop = $(this).scrollTop();
			if(sTop >= oTop){
			$('.screen_box').addClass('navbar-fixed-top');
			$('.screen_box').removeClass("posit");
			}else{
			$('.screen_box').removeClass('navbar-fixed-top');
			$('.screen_box').addClass("posit");
			}
		});
		
	}
	hua();
	
	/*点击筛选滚动到顶端*/
	function navs(id,time){$("html,body").animate({scrollTop:$(id).offset().top},time);}
	$(".screen_title").touchClick(function(){
		navs(".screen_box",500);	
	})
	
	
	
	
	
	
	
	
	
})









