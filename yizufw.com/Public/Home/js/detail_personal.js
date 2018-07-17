$(function(){
	/*选卡（全部，写字楼，创意园，出租屋）*/
	function xuanka(){
		$('.house_listnav>ul>li').on('click',function(){
			$('.house_listnav>ul>li').removeClass("active");
			$(this).addClass("active");
		});
	}
	xuanka();



})