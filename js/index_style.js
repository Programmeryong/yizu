$(function(){
 /*模拟点击事件*/
    clicktopbut('.top_buttom','.top_submit');
    clicktopbut('.advert_call','.advert_submit');
    clicktopbut('#demo1','#test1');
    function clicktopbut(clas1,cals2){
        $(clas1).click(function(){
            $(cals2).click();
        })
    } 

    /*登录*/
    let dian1 = 0;
    let dian2 = 0;
    $(".login .checkb1").click(function(){
        dian1++;
        if(dian1%2==1){$(this).css({"background":"url(images/icon/checkbox-blue.png) 3px 12px no-repeat","background-size": "16px 16px"});
                        $("#checkbox1").prop("checked",true);
                        
        }else{$(this).css({"background":"url(images/icon/checkbox-null.png) 0px 9px no-repeat","background-size": "21px 21px"});
                $("#checkbox1").prop("checked",false);}
    })
    
    $(".login .checkb2").click(function(){
        dian2++;
        if(dian2%2==1){$(this).css({"background":"url(images/icon/checkbox-blue.png) 3px 12px no-repeat","background-size": "16px 16px"});
                        $("#checkbox2").prop("checked",true);
                        $(".checkb2").css("color","#007DDB");
        }else{$(this).css({"background":"url(images/icon/checkbox-null.png) 0px 9px no-repeat","background-size": "21px 21px"});
                $("#checkbox2").prop("checked",false);
        		$(".checkb2").css("color","rgba(0,0,0,0.65)");}
    })
    
    
    $(".rightclick1,.rightclick2").click(function(){
        $(".login").show(); 
        $(".temp").css({"visibility":"visible"}); //添加一层膜)
        $(".temp").click(function(){$(".temp").css({"visibility":"hidden"});$('.login').hide(); })
    })
    $(".login .closed").click(function(){$(".login").hide(); $(".temp").css({"visibility":"hidden"});})

    /*优惠券*/
    $(".temp").css({"visibility":"visible"});
    $(".coupon").show();
    
    let ifshow = $(".coupon").css("display");
    if (ifshow=="block") {
        $(".temp").click(function(){$(".temp").css({"visibility":"hidden"}); $(".coupon").css({"display":"none"});})
    }
    
    $(".coupon_img img").click(function(){$(".rightclick1").click(); $(".coupon").hide();})
    $(".close_coupon i").click(function(){$(".temp").css({"visibility":"hidden"}); $(".coupon").hide();})
    /*优惠券结束*/


/*登录表单验证*/

	/*获取验证码 60s后重试*/
	var ding = null;
	var ifclick = true;
	$("input[type='button']").click(function(){
		var time = 10;
		if (ifclick==true) {
			ding = setInterval(function(){
				ifclick = false;
		        $("input[type='button']").val(time+"s 重试");
		        $("input[type='button']").css({"cursor":"not-allowed","color":"rgba(0,0,0,0.65)"});
		        
		        time--;
		        if(time==-2){
			    	ifclick = true;
			    	clearInterval(ding);
			    	$("input[type='button']").val("重新获取");
			    	$("input[type='button']").css({"cursor":"pointer","color":"#F52230"});
			    }
		    },1000);
		} 
	})
	/*获取验证码 60s后重试结束*/
	
    
   
   
    $(".phone,.yzm").focus(function(){
   		$(this).css("border","1px solid #198CFF");
    })
   
    $(".phone").blur(function(){
   		var tel = $(".login input[type='tel']").val();
   		var phone = /^[1][3,4,5,7,8][0-9]{9}$/;
   		if(tel==null || tel==""){
            $(".login input[type='tel']").css({"border":"1px solid #F52230"});
            $(".tishi_phone").html("请输入手机号码！");
        }else if(!phone.test(tel)){
        	$(".login input[type='tel']").css({"border":"1px solid #F52230"});
            $(".tishi_phone").html("请输入正确的手机号码！");
        }else{$(".login input[type='tel']").css({"border":"1px solid #5FCC29"});
        		 $(".tishi_phone").html("");
        }
    })
    
    $(".yzm").blur(function(){
   		var yzm_val = $(".login input[type='text']").val();
   		var yanzm = /^[0-9]{4}$/;
   		if(yzm_val=="" || !yanzm.test(yzm_val)){
            $(".login input[type='text']").css({"border":"1px solid #F52230"});
            $(".tishi_yzm").html("请输入4位验证码！");
        }else{$(".login input[type='text']").css({"border":"1px solid #5FCC29"});
        		 $(".tishi_yzm").html("");
        }
    })
   
   
    /*表单验证*/
    $(".login form").submit(function(){
        let mobile = $(".login input[type='tel']");
        let tel = mobile.val();
        let yanzm = $(".login input[type='text']");
        let yanzm_value = $(yanzm).val();
        let phone = /^[1][3,4,5,7,8][0-9]{9}$/;
        let yzm = /^[0-9]{4}$/;
        if(tel==null || tel=="" || !phone.test(tel)){
            $(".login input[type='tel']").css({"border":"1px solid #F52230"});
            $(".tishi_phone").html("请输入正确的手机号码！");
            //return false;
        }else{$(".login input[type='tel']").css({"border":"1px solid #5FCC29"});
        		 $(".tishi_phone").html("");
        }
        
        if(yanzm_value=="" || !yzm.test(yanzm_value)){
            $(".login input[type='text']").css({"border":"1px solid #F52230"});
            $(".tishi_yzm").html("请输入4位验证码！");
            return false;
        }else{
            $(yanzm).css({"border":"1px solid #5FCC29"});
            $(".tishi_yzm").html("");
            if(tel==null || tel=="" || !phone.test(tel)){
                $(".login input[type='tel']").css({"border":"1px solid #F52230"});
                return false;
            }
        }
    })
    /*登录模块结束*/

    //上传房源弹窗模块
    $('.nav_rightbtn').click(function(){
        $('.uploadbox').show();
        $('.temp_1').show();
    })
    $('.upboxtop2').click(function(){
        $('.uploadbox').hide();
        $('.temp_1').hide();
    })
    $('.temp_1').click(function(){
         $('.uploadbox').hide();
        $('.temp_1').hide();
    })


    $('.tr_btn').click(function(){
        $('.uploadbox').show();
        $('.temp_1').show();
    })
    $('.upboxtop2').click(function(){
        $('.uploadbox').hide();
        $('.temp_1').hide();
    })
    $('.temp_1').click(function(){
         $('.uploadbox').hide();
        $('.temp_1').hide();
    })
    
    $('.upboxc1').hover(function(){
        $('.upboxc1 img').attr('src','./images/icon/Property_2.png');
        $('.upbtn1').css({'background':'#198cff'});
        $('.uptoptext1').css({'color':'#198cff'});
    },function(){
        $('.upboxc1 img').attr('src','./images/icon/Property_1.png');
        $('.upbtn1').css({'background':'#999'}); 
        $('.uptoptext1').css({'color':'#999'});
    })
    $('.upboxc2').hover(function(){
        $('.upboxc2 img').attr('src','./images/icon/Agent_2.png');
        $('.upbtn2').css({'background':'#FFB319'});
        $('.uptoptext2').css({'color':'#FFB319'});
    },function(){
        $('.upboxc2 img').attr('src','./images/icon/Agent_1.png');
        $('.upbtn2').css({'background':'#999'}); 
        $('.uptoptext2').css({'color':'#999'});
    })
})
 