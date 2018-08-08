$(function(){
	var clickthis =0;
	$('.checkb').touchClick(function(){
		clickthis++;
		if(clickthis%2==0){
			$(this).css({"background":"url(./images/icon/checkbox-checked-b.png) no-repeat","background-size": "15px 15px",'background-position': '5px 50%'});
			$('.thischeck').click();
		}else{
			$(this).css({"background":"url(./images/icon/checkbox-o.png) no-repeat","background-size": "20px 20px",'background-position': '5px 50%'});
			$('.thischeck').click();
		}
	})
	textphone('.phone',/^[1][3,4,5,7,8][0-9]{9}$/);//手机号码
    textphone('.yzm',/^[0-9]{4}$/) //验证码
    
    function textphone(thisclass,zengze){
        $(thisclass).blur(function(){
            let Uphone = $(thisclass).val();
            let Tphone = zengze;
            if(Tphone.test(Uphone) == false || Uphone == ''){
                $(thisclass).css({'outline':'1px solid #F52230'});
            }else if(Tphone.test(Uphone)==true){
                $(thisclass).css({'outline':'1px solid #5FCC29'})
            }
        })
    }

	/*获取验证码 60s后重试*/
	var ding = null;
	var ifclick = true;
	$(".yzmbtn").click(function(){
		var time = 60;
		if (ifclick==true) {
			ding = setInterval(function(){
				ifclick = false;
		        $(".yzmbtn").val(time+"s 重试");
		        //$(".yzmbtn").disable=true;
		        //disabled=ture;
		        time--;
		        if(time==-2){
			    	ifclick = true;
			    	clearInterval(ding);
			    	$(".yzmbtn").val("获取验证码");
			    }
		    },1000);
		} 
	})
})