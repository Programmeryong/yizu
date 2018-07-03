$(function(){
	// 模仿单选按钮效果
	$('.ulradio li').on('click',function(){
		let i = $(this).index();
		console.log(i);
		$('.ulradio li').css({"background-image":"url(./images/icon/btn_on.png)"});
		$('.ulradio li:eq('+i+')').css({"background-image":"url(./images/icon/btn_off.png)"});
	})
	$('.ulradio li:eq(0)').click();
	// 模仿点击隐藏按钮
	$('.clickimg').click(function(){
		$('.filetyle').click();
	})

	//抽屉效果实现方法
	$('.editme_box').each(function(){
		$(this).children('.edirt_box').hide();
	})
	$('.editmetit_r').each(function(){
		$(this).click(function(){
			if($(this).parents(".editme_box").children(".edirt_box").css("display") != "none"){  
                $(this).parents(".editme_box").children(".edirt_box").slideUp();     
            }else{  
                $(this).parents(".editme_box").children(".edirt_box").slideDown();  
            }  
		})
	})

})