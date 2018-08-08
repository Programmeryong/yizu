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
    let dian = 0;
    $(".login .checkb").click(function(){
        dian++;
        if(dian%2==1){$(this).css({"background":"url(./images/icon/checkbox-checked-o.png) 1px 11px no-repeat","background-size": "18px 18px"});
                        $(".login input[type='checkbox']").prop("checked",true);
        }else{$(this).css({"background":"url(./images/icon/checkbox-o.png) 0px 9px no-repeat","background-size": "21px 21px"});
                $(".login input[type='checkbox']").prop("checked",false);}
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
		var time = 60;
		if (ifclick==true) {
			ding = setInterval(function(){
				ifclick = false;
		        $("input[type='button']").val(time+"s 重试");
		        //$("input[type='button']").disable=true;
		        //disabled=ture;
		        time--;
		        if(time==-2){
			    	ifclick = true;
			    	clearInterval(ding);
			    	$("input[type='button']").val("获取验证码");
			    }
		    },1000);
		} 
	})
	/*获取验证码 60s后重试结束*/
	
    
    $(".login input[type='tel']").click(function(){$(this).css({"border":"none"});})
    $(".login input[type='text']").click(function(){$(this).css({"border":"none"});})
    
    textphone('.phone',/^[1][3,4,5,7,8][0-9]{9}$/);//手机号码
    textphone('.yzm',/^[0-9]{4}$/) //验证码
    
    function textphone(thisclass,zengze){
        $(thisclass).blur(function(){
            let Uphone = $(thisclass).val();
            let Tphone = zengze;
            if(Tphone.test(Uphone) == false || Uphone == ''){
                $(thisclass).css({'border':'1px solid #F52230'});
            }else if(Tphone.test(Uphone)==true){
                $(thisclass).css({'border':'1px solid #5FCC29'})
            }
        })
    }
    
    $(".login form").submit(function(){
        let mobile = $(".login input[type='tel']");
        let tel = mobile.val();
        let yanzm = $(".login input[type='text']");
        let yanzm_value = $(yanzm).val();
        let phone = /^[1][3,4,5,7,8][0-9]{9}$/;
        if(tel==null || tel=="" || !phone.test(tel)){
            $(".login input[type='tel']").css({"border":"1px solid #F52230"});
            //return false;
        }else{$(".login input[type='tel']").css({"border":"1px solid #5FCC29"});}       
        if(yanzm_value==""){
            $(".login input[type='text']").css({"border":"1px solid #F52230"});
            return false;
        }else{
            $(yanzm).css({"border":"1px solid #5FCC29"});
            if(tel==null || tel=="" || !phone.test(tel)){
                $(".login input[type='tel']").css({"border":"1px solid #F52230"});
                return false;
            }
        }
    })

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

    // function baidumap(l,r,thismap){
    //     // 百度地图API功能
    //     // l:经度 r:维度 this:传入要搜索的内容
    //     var map = new BMap.Map("allmap");            // 创建Map实例
    //     var mPoint = new BMap.Point(l, r);  
    //     map.enableScrollWheelZoom();
    //     map.centerAndZoom(mPoint,18);
    //     var marker = new BMap.Marker(mPoint); 
    //     marker.setAnimation(BMAP_ANIMATION_BOUNCE);
    //     var circle = new BMap.Circle(mPoint,1000,{fillColor:"blue", strokeWeight: 1 ,fillOpacity: 0.3, strokeOpacity: 0.3});
    //     map.addOverlay(circle);
    //     var local =  new BMap.LocalSearch(map, {renderOptions: {map: map, panel: "r-result", autoViewport: true}});  
    //     local.searchNearby(thismap,mPoint,1000);
    // }
    // baidumap(113.295105, 23.243797,'餐馆')
})
 