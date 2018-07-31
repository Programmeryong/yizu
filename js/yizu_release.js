$(function(){
	//经纪人房源表模仿单选按钮效果
	$('.ulradio li').on('click',function(){
		let i = $(this).index();
		// console.log($('.thanradio'));
		$('.thanradio:eq('+i+')').click();
		$('.ulradio li').css({"background-image":"url(./images/icon/btn_on.png)"});
		$('.ulradio li:eq('+i+')').css({"background-image":"url(./images/icon/btn_off.png)"});
	});
	$('.ulradio li:eq(0)').click();

	$('.ulradio1 li').on('click',function(){
		let i = $(this).index();
		// console.log($('.thanradio'));
		$('.thanradio1:eq('+i+')').click();
		$('.ulradio1 li').css({"background-image":"url(./images/icon/btn_on.png)"});
		$('.ulradio1 li:eq('+i+')').css({"background-image":"url(./images/icon/btn_off.png)"});
	});
	$('.ulradio1 li:eq(1)').click();

	//房东房源表模仿单选按钮效果
	$('.brokerage li').on('click',function(){
		let i = $(this).index();
		$('.hiderad:eq('+i+')').click();
		$('.brokerage li').css({'border':'1px solid rgba(0,0,0,.15)','color':'rgba(0,0,0,.25)','background-color':'rgba(0,0,0,.01)'});
		$('.brokerage li:eq('+i+')').css({'border':'1px solid #198cff','color':'#fff','background-color':'#198cff'})
	});
	$('.brokerage li:eq(1)').click();

	// 配套设施的标签效果
	var arr=[];
	//给JS的数组对象定义一个函数，用于查找指定的元素在数组中的位置，即索引
	Array.prototype.indexOf = function(val) { 
		for (var i = 0; i < this.length; i++) { 
			if (this[i] == val) return i; 
		} 
		return -1; 
	};
	//通过得到这个元素的索引，使用js数组自己固有的函数去删除这个元素
	Array.prototype.remove = function(val) { 
		var index = this.indexOf(val); 
		if (index > -1) { 
			this.splice(index, 1); 
		} 
	};
	//这里是经纪人表的
	function cs(){
		$('.tabnavbox1 li').on('click',function(){
			let i = $(this).index();
			let than = $('.tabnavbox1 li:eq('+i+')');
			let thancolor = than.css('background-color') ;
			switch(i){
				case 0: 
					if(than.css('background-color') == 'rgb(255, 247, 230)'){
						textcolor(than,'#FFB319','#fff');
						$('.Tabnavbox2 :checkbox').eq(0).click();
						arr.push('0');
					}else{
						textcolor(than,'rgb(255, 247, 230)','#ffb319');
						$('.Tabnavbox2 :checkbox').eq(0).click();
						arr.remove('0');
					};
				break;
				case 1: 
					if(than.css('background-color') == 'rgb(255, 235, 236)'){
						textcolor(than,'#F52230','#fff');
						$('.Tabnavbox2 :checkbox').eq(1).click();
						arr.push('1');
					}else{
						textcolor(than,'rgb(255, 235, 236)','#f52230');
						$('.Tabnavbox2 :checkbox').eq(1).click();
						arr.remove('1');
					};
				break;
				case 2: 
					if(than.css('background-color') == 'rgb(245, 255, 235)'){
						textcolor(than,'#52C41A','#fff');
						$('.Tabnavbox2 :checkbox').eq(2).click();
						arr.push('2');
					}else{
						textcolor(than,'rgb(245, 255, 235)','#52c41a');
						$('.Tabnavbox2 :checkbox').eq(2).click();
						arr.remove('2');
					};
				break;
				case 3: 
					if(than.css('background-color') == 'rgb(235, 245, 255)'){
						textcolor(than,'#2D96FF','#fff');
						$('.Tabnavbox2 :checkbox').eq(3).click();
						arr.push('3');
					}else{
						textcolor(than,'rgb(235, 245, 255)','#198cff');
						$('.Tabnavbox2 :checkbox').eq(3).click();
						arr.remove('3');
					};
				break;
				case 4: 
					if(than.css('background-color') == 'rgb(235, 255, 253)'){
						textcolor(than,'#13c2c2','#fff');
						$('.Tabnavbox2 :checkbox').eq(4).click();
						arr.push('4');
					}else{
						textcolor(than,'rgb(235, 255, 253)','#13c2c2');
						$('.Tabnavbox2 :checkbox').eq(4).click();
						arr.remove('4');
					};
				break;
				case 5: 
					if(than.css('background-color') == 'rgb(243, 237, 255)'){
						textcolor(than,'#722ed1','#fff');
						$('.Tabnavbox2 :checkbox').eq(5).click();
						arr.push('5');
					}else{
						textcolor(than,'rgb(243, 237, 255)','#722ed1');
						$('.Tabnavbox2 :checkbox').eq(5).click();
						arr.remove('5');
					};
				break;
			}
			console.log($('.Tabnavbox2 :checkbox'));
			arrcs(arr);
			});
	}
	cs();

	// 数组去重
	function arrcs(arr){
		var thisarr = arr;
		var thanarr = [0,1,2,3,4,5];
		for(var i=0;i<=thisarr.length;++i){
			for(var j=0;j<=thanarr.length;++j){
				if(thisarr[i] == thanarr[j] ){
					thanarr.remove(thanarr[j]);//这里就剩下了不同的
				}
			}
		}
		if(thanarr.length == 3){
			for(var a = 0;a<thanarr.length;a++){
				var k = thanarr[a];
				$('.tabnavbox1 li:eq('+k+')').hide();
			}
		}else if(thisarr.length < 3){
			$('.tabnavbox1 li').show();
		}

	}

	function textcolor(than,bg,col){
		than.css({'background':bg,'color':col});
	}

	// 模拟点击提交事件
	$('.releasethis').click(function(){
		$('.clicksubmit').click();
	});
	$('.releasethis1').click(function(){
		$('.clicksubmit1').click();
	});
	// 模拟点击上传单张图片事件
	$('.analogclick1').click(function(){
		$('.filestyle1').click();
	});
	/*
		正则判断 
		纯中文 textchines()
		中文英文加数字 识别个别特殊字符 textEC()
		判断字数	textnumber() 
		判断数值是否小于零以及大于999999 textmaxnum()
		判断输入的数值不能为空并且不能小于零 textnull()
	*/
	function textchines(thisdiv){	
		let Utext = $(thisdiv).val();
		let Thisterm = /[\u4e00-\u9fa5]{2,30}/;
		if(Thisterm.test(Utext)==false || Utext==''){
			$(thisdiv).css({'border':'1px solid #F52230'});
			return false;
		}else if(Thisterm.test(Utext)==true){
			$(thisdiv).css({'border':'1px solid #5FCC29'});
			return true;
		}
	}
	function textEC(thisdiv){
		let list=['weix','维信','weixin','w信','VX','微信'];//这里还要加上关键字的判断 replace
		let Utext = $(thisdiv).val();
		let Thisterm = /[\u4e00-\u9fa5_a-zA-Z0-9_]{2,50}/;
		if(Thisterm.test(Utext)==false || Utext==''){
			$(thisdiv).css({'border':'1px solid #F52230'});
		}else if(Thisterm.test(Utext)==true){
			$(thisdiv).css({'border':'1px solid #5FCC29'});
		}
	}
	function textnumber(thisdiv){
		let Utext = $(thisdiv).val();
		if(Utext.length<10&&Utext.length>0 || Utext.length > 500){
			$(thisdiv).css({'border':'1px solid #F52230'})
		}else if(Utext.length<=500 && Utext.length>10){
			$(thisdiv).css({'border':'1px solid #5FCC29'});
		}else if(Utext.length == 0){
			$(thisdiv).css({'border':'1px solid rgba(0,0,0,.15)'});
		}
	}
	function textmaxnum(thisdiv){
		let Utext = $(thisdiv).val();
		if(Utext >999999 || Utext <0 ||Utext ==''){
			$(thisdiv).css({'border':'1px solid #F52230'});
			return false;
		}else if(Utext <999999 && Utext >0){
			$(thisdiv).css({'border':'1px solid #5FCC29'});
			return true;
		}
	}
	function textnull(thisdiv){
		let Utext = $(thisdiv).val();
		if(Utext == '' || Utext <0){
			$(thisdiv).css({'border':'1px solid #F52230'});
		}else if(Utext >0){
			$(thisdiv).css({'border':'1px solid #5FCC29'});
		}
	}
	function textphone(thisclass){
		let Uphone = $(thisclass).val();
		let Tphone = /^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}$/;
		if(Tphone.test(Uphone) == false|| Uphone == ''){
			$(thisclass).css({'border':'1px solid #F52230'});
		}else if(Tphone.test(Uphone)==true){
			$(thisclass).css({'border':'1px solid #5FCC29'});
		}
	}
	// 名字的验证
	function textname(thisname){
		let Uname = $(thisname).val();
		let Tname = /^[\u4e00-\u9fa5]{2,4}$/;
		if(Tname.test(Uname)==false||Uname==''){
			$(thisname).css({'border':'1px solid #F52230'});
			return false;
		}else if(Tname.test(Uname)==true){
			$(thisname).css({'border':'1px solid #5FCC29'});
			return true;
		}
	}
	function Dropdown(thisname){
		let Uname = $(thisname).val();
		if(Uname=='' || Uname== 0){
			$(thisname).css({'border':'1px solid #F52230'});
			return false;
		}else{
			$(thisname).css({'border':'1px solid #5FCC29'});
			return true;
		}
	}
	//提交时的表单验证
	$('#form').submit(function(){
		if(textname('.username')==true && textchines('.housename1')==true && 
		   textmaxnum('.number1')==true && textmaxnum('.number2')==true && 
		   textmaxnum('.number3')==true && Dropdown('.dropdown1') ==true &&
		   Dropdown('.dropdown2')==true){
			return true;
		}else{
			return false;
		}	
	})
	$('#form1').submit(function(){
		if(textname('.housename1')==true && textchines('.address1')==true && 
		   textmaxnum('.number4')==true ){
			return true;
		}else{
			return false;
		}	
	})
	
})