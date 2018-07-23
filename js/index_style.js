// 单张图片上传
function change(id1,id2) {
    var pic = document.getElementById(id1),
        file = document.getElementById(id2);
    var ext=file.value.substring(file.value.lastIndexOf(".")+1).toLowerCase();
     // gif在IE浏览器暂时无法显示
     if(ext!='png'&&ext!='jpg'&&ext!='jpeg'&&ext!='png'){
         alert("图片的格式必须为png或者jpg或者jpeg格式或者png格式！"); 
         return;
     }
     var isIE = navigator.userAgent.match(/MSIE/)!= null,
         isIE6 = navigator.userAgent.match(/MSIE 6.0/)!= null;
     if(isIE) {
        file.select();
        console.log(file.select());
        var reallocalpath = document.selection.createRange().text;
        // IE6浏览器设置img的src为本地路径可以直接显示图片
         if (isIE6) {
            pic.src = reallocalpath;
         }else {
            // 非IE6版本的IE由于安全问题直接设置img的src无法显示本地图片，但是可以通过滤镜来实现
             pic.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='image',src=\"" + reallocalpath + "\")";
             // 设置img的src为base64编码的透明图片 取消显示浏览器默认图片
             pic.src = 'data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==';
         }
     }else {
        html5Reader(file,id1);
     }
}
 function html5Reader(file,id1){
    // console.log(file.files[0]);
     var file = file.files[0];
     var reader = new FileReader();
     reader.readAsDataURL(file);
     console.log(reader);
     reader.onload = function(e){
         var pic = document.getElementById(id1);
         pic.src=this.result;
     }
 }

$(function(){
 /*模拟点击事件*/
    clicktopbut('.top_buttom','.top_submit');
    clicktopbut('.advert_call','.advert_submit');
    function clicktopbut(clas1,cals2){
        $(clas1).click(function(){
            $(cals2).click();
            console.log(1);
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
    
    $("#nav_right li:first-child,#nav_right li:nth-of-type(3)").click(function(){
        $(".login").show(); 
        $(".temp").css({"visibility":"visible"}); //添加一层膜)
        $(".temp").click(function(){$(".temp").css({"visibility":"hidden"});$('.login').hide(); })
    })
    $(".login .closed").click(function(){$(".login").hide(); $(".temp").css({"visibility":"hidden"});})

    /*优惠券*/
    window.onload = function(){
        $(".temp").css({"visibility":"visible"});
        $(".coupon").show();
        
        let ifshow = $(".coupon").css("display");
        if (ifshow=="block") {
            $(".temp").click(function(){$(".temp").css({"visibility":"hidden"}); $(".coupon").css({"display":"none"});})
        }
    }
    $(".coupon_img img").click(function(){$("#nav_right li:first-child").click(); $(".coupon").hide();})
    $(".close_coupon i").click(function(){$(".temp").css({"visibility":"hidden"}); $(".coupon").hide();})
    /*优惠券结束*/


/*登录表单验证*/
    
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

    console.log([
    "                   _ooOoo_",
    "                  o8888888o",
    "                  88\" . \"88",
    "                  (| -_- |)",
    "                  O\\  =  /O",
    "               ____/`---'\\____",
    "             .'  \\\\|     |//  `.",
    "            /  \\\\|||  :  |||//  \\",
    "           /  _||||| -:- |||||-  \\",
    "           |   | \\\\\\  -  /// |   |",
    "           | \\_|  ''\\---/''  |   |",
    "           \\  .-\\__  `-`  ___/-. /",
    "         ___`. .'  /--.--\\  `. . __",
    "      .\"\" '<  `.___\\_<|>_/___.'  >'\"\".",
    "     | | :  `- \\`.;`\\ _ /`;.`/ - ` : | |",
    "     \\  \\ `-.   \\_ __\\ /__ _/   .-` /  /",
    "======`-.____`-.___\\_____/___.-`____.-'======",
    "                   `=---='",
    "^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^",
    "         佛祖保佑       永无BUG"
].join('\n'));

    // console.log([
    //     "◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◆◆◆◇◇◇◇◇◇◆◇◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◆◆◆◇◆◆◇◇◇◇◆◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◆◆◆◇◇◇◆◆◆◆◆◆◆◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◆◆◆◆◆◆◆◆◆◆◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◆◆◆◆◇◇◇◆◆◆◆◆◆◆◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◆◆◆◆◆◆◆◆◆◇◆◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◇◇◇◆◆◇◇◇◆◆◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◆◆◇◇◇◇◇◇◆◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◇◇◇◆◆◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◇◇◇◇◇◇◆◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◆◆◆◆◆◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◇◇◇◇◇◆◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◆◆◆◆◆◆◆◆◆◆◇◇◇◆◇◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◇◇◇◇◆◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◆◆◆◆◇◇◇◇◆◆◆◆◆◆◆◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◆◆◇◇◆◆◆◆◆◆◇◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◇◇◇◆◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◆◆◆◆◇◆◆◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◇◇◆◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◆◆◆◆◆◆◆◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◇◆◆◆◆◇◆◆◇◇◇◆◇◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◆◇◆◆◇◆◇◆◆◆◆◆◆◆◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◆◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◆◇◇◇◇◇◇◇◇◇◇◇◆◆◇◇◆◆◇◇◇◆◆◆◆◆◆◆◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇◇◆◆◇◇◇◆◆◇◇◇◆◆◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◆◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇◆◆◆◇◇◇◆◆◇◇◇◆◆◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇◆◆◇◇◇◇◆◆◇◇◇◆◆◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◇◇◇◆◆◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◇◇◇◆◆◇◇◇◇◇◆◆◆◆◆◇◇◇◇◇",
    //     "◇◇◇◇◇◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◇◇◇◇",
    //     "◇◇◇◇◇◇◇◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◇◆◆◆◆◆◆◆◆◆◇◇◇◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◆◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇",
    //     "◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇",
    //     ].join('\n'));

})
 