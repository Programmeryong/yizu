$(function(){
	// 模仿单选按钮效果
	$('.ulradio li').on('click',function(){
		let i = $(this).index();
		// console.log(i);
		$('.ulradio li').css({"background-image":"url(./images/icon/btn_on.png)"});
		$('.ulradio li:eq('+i+')').css({"background-image":"url(./images/icon/btn_off.png)"});
	});
	$('.ulradio li:eq(0)').click();

	//表单的切换
	// $('.fw_toptype').click(function(){
	// 	let i = $('.fw_toptype').val();
	// 	if(i==0||i==2){
	// 		$('.fw_bigbox').hide();
	// 		$('.fw_bigbox2').show();
	// 	}else if(i==1||i==''){
	// 		$('.fw_bigbox').show();
	// 		$('.fw_bigbox2').hide();
	// 	}
	// })

	// 配套设施的标签效果
	$('.tabnavbox li').on('click',function(){
		let i = $(this).index();
		let than = $('.tabnavbox li:eq('+i+')');
		let thancolor = than.css('background-color') ;
		switch(i){
			case 0: (than.css('background-color') == 'rgb(255, 247, 230)') ? textcolor(than,'#FFB319','#fff') : textcolor(than,'rgb(255, 247, 230)','#ffb319');
			break;
			case 1: (than.css('background-color') == 'rgb(255, 235, 236)') ? textcolor(than,'#F52230','#fff') : textcolor(than,'rgb(255, 235, 236)','#f52230');
			break;
			case 2: (than.css('background-color') == 'rgb(245, 255, 235)') ? textcolor(than,'#52C41A','#fff') : textcolor(than,'rgb(245, 255, 235)','#52c41a');
			break;
			case 3: (than.css('background-color') == 'rgb(235, 245, 255)') ? textcolor(than,'#2D96FF','#fff') : textcolor(than,'rgb(235, 245, 255)','#198cff');
			break;
		}
	});
	$('.tabnavbox1 li').on('click',function(){
		let i = $(this).index();
		let than = $('.tabnavbox1 li:eq('+i+')');
		let thancolor = than.css('background-color') ;
		switch(i){
			case 0: (than.css('background-color') == 'rgb(255, 247, 230)') ? textcolor(than,'#FFB319','#fff') : textcolor(than,'rgb(255, 247, 230)','#ffb319');
			break;
			case 1: (than.css('background-color') == 'rgb(255, 235, 236)') ? textcolor(than,'#F52230','#fff') : textcolor(than,'rgb(255, 235, 236)','#f52230');
			break;
			case 2: (than.css('background-color') == 'rgb(245, 255, 235)') ? textcolor(than,'#52C41A','#fff') : textcolor(than,'rgb(245, 255, 235)','#52c41a');
			break;
			case 3: (than.css('background-color') == 'rgb(235, 245, 255)') ? textcolor(than,'#2D96FF','#fff') : textcolor(than,'rgb(235, 245, 255)','#198cff');
			break;
			case 4: (than.css('background-color') == 'rgb(235, 255, 253)') ? textcolor(than,'#13c2c2','#fff') : textcolor(than,'rgb(235, 255, 253)','#13c2c2');
			break;
			case 5: (than.css('background-color') == 'rgb(243, 235, 255)') ? textcolor(than,'#722ed1','#fff') : textcolor(than,'rgb(243, 235, 255)','#722ed1');
			break;
		}
	});
	function textcolor(than,bg,col){
		than.css({'background':bg,'color':col});
	}

	// 模拟点击提交事件
	$('.releasethis').click(function(){
		$('.clicksubmit').click();
	});
	$('.analogclick1').click(function(){
		$('.filestyle1').click();
	});
	$('.analogclick2').click(function(){
		$('.filestyle2').click();
	});
	$('.analogclick3').click(function(){
		$('.filestyle3').click();
	});
	
	/*
		正则判断 
		纯中文 textchines()
		中文英文加数字 识别个别特殊字符 textEC()
		判断字数	textnumber() 
		判断数值是否小于零以及大于999999
		判断不能为空
		判断不能
	*/
	function textchines(thisdiv){	
		$(thisdiv).blur(function(){
			let Utext = $(thisdiv).val();
			let Thisterm = /[\u4e00-\u9fa5]{2,30}/;
			if(Thisterm.test(Utext)==false || Utext==''){
				$(thisdiv).css({'border':'1px solid #F52230'})
			}else if(Thisterm.test(Utext)==true){
				$(thisdiv).css({'border':'1px solid #5FCC29'});
			}
		})
	}
	function textEC(thisdiv){
		let list=['weix','维信','weixin','w信','VX','微信'];//这里还要加上关键字的判断 replace
		$(thisdiv).blur(function(){
			let Utext = $(thisdiv).val();
			let Thisterm = /[\u4e00-\u9fa5_a-zA-Z0-9_]{2,50}/;
			if(Thisterm.test(Utext)==false || Utext==''){
				$(thisdiv).css({'border':'1px solid #F52230'})
			}else if(Thisterm.test(Utext)==true){
				$(thisdiv).css({'border':'1px solid #5FCC29'});
			}
		})
	}
	function textnumber(thisdiv){
		$(thisdiv).blur(function(){
			let Utext = $(thisdiv).val();
			if(Utext.length<10&&Utext.length>0 || Utext.length > 500){
				$(thisdiv).css({'border':'1px solid #F52230'})
			}else if(Utext.length<=500 && Utext.length>10){
				$(thisdiv).css({'border':'1px solid #5FCC29'});
			}else if(Utext.length == 0){
				$(thisdiv).css({'border':'1px solid rgba(0,0,0,.15)'});
			}
		})
	}
	function textmaxnum(thisdiv){
		$(thisdiv).blur(function(){
			let Utext = $(thisdiv).val();
			if(Utext >999999 || Utext <0 ||Utext ==''){
				$(thisdiv).css({'border':'1px solid #F52230'})
			}else if(Utext <999999 && Utext >0){
				$(thisdiv).css({'border':'1px solid #5FCC29'});
			}
		})
	}
	function textnull(thisdiv){
		$(thisdiv).blur(function(){
			let Utext = $(thisdiv).val();
			if(Utext == '' || Utext <0){
				$(thisdiv).css({'border':'1px solid #F52230'})
			}else if(Utext >0){
				$(thisdiv).css({'border':'1px solid #5FCC29'});
			}
			// else{
			// 	$(thisdiv).css({'border':'1px solid rgba(0,0,0,.15)'});
			// }
		})
	}
	function textphone(thisclass){
			$(thisclass).blur(function(){
				let Uphone = $(thisclass).val();
				let Tphone = /^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}$/;
				if(Tphone.test(Uphone) == false|| Uphone == ''){
					$(thisclass).css({'border':'1px solid #F52230'});
				}else if(Tphone.test(Uphone)==true){
					$(thisclass).css({'border':'1px solid #5FCC29'});
				}
			})
		}
	// 名字的验证
	function textname(thisname){
		$(thisname).blur(function(){
			let Uname = $(thisname).val();
			let Tname = /^[\u4e00-\u9fa5]{2,4}$/;
			if(Tname.test(Uname)==false||Uname==''){
				$(thisname).css({'border':'1px solid #F52230'})
			}else if(Tname.test(Uname)==true){
				$(thisname).css({'border':'1px solid #5FCC29'});
			}
		})
	}
	// $("form").submit( function () {return false;} );
	// 房源名称
	textchines('.housename');
	textchines('.housename1');
	// 
	textEC('.Address');
	textEC('.Address1');
	textnumber('.textfield');
	textmaxnum('.thannum');
	textnull('.thannum1');
	textnull('.thannum2');
	// textnull('.thannum3');
	// textnull('.thannum4');
	// textnull('.thannum5');
	// textnull('.thannum6');
	// 联系人
	textphone('.userphone');
	textname('.username');
	// console.log($('.housename').css('border'));
	//检查表单
	function checkform(){
		if($('.housename').css('border')=='1px solid rgb(95,204,41)'){
			if($('.Address').css('border')=='1px solid rgb(95,204,41)'){
				if($('.thannum').css('border')=='1px solid rgb(95,204,41)'){
					if($('.thannum1').css('border')=='1px solid rgb(95,204,41)'){
						if($('.thannum2').css('border')=='1px solid rgb(95,204,41)'){
							if($('.userphone').css('border')=='1px solid rgb(95,204,41)'){
								if($('.username').css('border')=='1px solid rgb(95,204,41)'){
									console.log(1111);
								}
							}
						}
					}
				}
			}
		}else{
			console.log(2);
		}
		//  $("form").submit( function () {return false;} );
		// console.log($('.housename').css('border'));
		
	}
	$('.releasethis').click(function(){
		 $("form").submit( function () {return false;} );
		checkform()
	})
})