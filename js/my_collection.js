$(function(){
	/*选卡（）*/
	function xuanka(){
		$('.listnav>ul>li').on('click',function(){
			$('.listnav>ul>li').removeClass("active");
			$(this).addClass("active");
		});
	}
	xuanka();



})