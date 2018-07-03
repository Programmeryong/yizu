$(function(){
	let img_info = $(".img_info");
 	/*第一个函数是鼠标悬停，第二个函数是鼠标移出*/
 	$(".center ul li").hover(function(){
 		let index = $(this).index();
 		/*console.log("index"+index);*/
 		$(img_info[index]).stop();
 		$(img_info[index]).animate({top:"-220px"},500)
 	},function(){
 		let index = $(this).index();
 		$(img_info[index]).stop();
 		$(img_info[index]).animate({top:"0px"},500)
 	})
 	
 	
 	
 	/*选卡（全部，待看房，待确认，待评价）*/
	function xuanka(){
		$('.house_listnav>ul>li').on('click',function(){
			$('.house_listnav>ul>li').removeClass("act");
			$(this).addClass("act");
		});
	}
	xuanka();
 
 
 	/*发表评论*/
 	
	$(".state span").click(function(){
		$(".comment").css({"display":"block"});
	})
	
	$(".close_but").click(function(){
		$(".comment").css({"display":"none"});
	})
	
 	$('.ulradio li').on('click',function(){
		let i = $(this).index();
		console.log(i);
		$('.ulradio li').css({"background-image":"url(./images/icon/btn_off.png)"});
		$('.ulradio li:eq('+i+')').css({"background-image":"url(./images/icon/btn_on.png)"});
	})
	$('.ulradio li:eq(0)').click();
})