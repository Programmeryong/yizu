$(function(){
	/*选卡（全部，写字楼，创意园，出租屋）*/
	function xuanka(){
		$('.house_listnav>ul>li').on('click',function(){
			$('.house_listnav>ul>li').removeClass("active");
			$(this).addClass("active");
		});
	}
	xuanka();


	/*评论的星星和标签*/
	var arr = [1,4];
	var arr1 = [2,3,4];
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
	starAndcommend(789,3,"推荐",arr);
	starAndcommend(456,1,"一般",arr1);
	starAndcommend(123,4,"非常推荐",arr2);
	
	
})