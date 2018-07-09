$(document).ready(function(){
	
	
	/*选项卡（平面图，全景图，户型图）*/
	function xuanka(){
		$('.tabs_li ul li').on('click',function(){
			$('.tabs_li ul li').removeClass("active");
			$(this).addClass("active");
			let num = $(this).val();
			let offset = 848;
			// console.log(num);
			$(".xuanka_in").animate({"left":"-"+offset*num+"px"},500);
		});
		
	}
	xuanka();
	
	
	function xuanka2(){
		$('.middle_title ul li').on('click',function(){
			$('.middle_title ul li').removeClass("active");
			$(this).addClass("active");
			/*let num = $(this).val();
			let offset = 848;
			console.log(num);
			$(".xuanka_in").animate({"left":"-"+offset*num+"px"},500);*/
		});
		
	}
	xuanka2();

	/*大图片轮播*/
	function lunbo(div_id, auto_time){
		// 把常用的对象或变量先进行定义
	    let box = document.getElementById(div_id);
	    //let pre_btn = box.getElementsByClassName('pre')[0];
	    let next_btn = box.getElementsByClassName('next')[0];
	    let list = box.getElementsByClassName('tabs_img_big_lun')[0];
	    let list_box = box.getElementsByClassName('tabs_img_big_lun')[0].getElementsByTagName("div")[0];
	    /*let dots = box.getElementsByClassName('tabs_img_small')[0].getElementsByTagName('li');*/
	    let dots = box.getElementsByClassName('img_hadow')[0].getElementsByTagName('li');
		//let hadow = box.getElementsByClassName("img_hadow")[0].getElementsByTagName("li");
	    // 图片数量
	    let img_num = list.getElementsByTagName('img').length;
	    // 图片索引的最大值
	    let max_index = dots.length - 1;
	    // 图片索引
	    let index = 0;
	    // 窗口、图片的高度
		let height = 496;
	    let status = false;
	    // 上一页的事件
	   /* pre_btn.onclick = function(){
	        // index--;
	        // if( index < 0){
	        //     index = 4;
	        // }
	        let new_index = index;
	        new_index--;
	        if(new_index < -1){
	            new_index = 4;
	        }
	        console.log(index);
	        console.log(new_index);
	        new_top = -width* (new_index+1);
	        animate(new_top, new_index);
	    }*/
	    // 下一页的事件
	    next_btn.onclick = function(){
	        let new_index = index;
	        new_index++;
	        if(new_index > max_index+1){
	            new_index = 0;
	        }
	        /*console.log(index);
	        console.log(new_index);*/
	
	        let new_top =-height* (new_index+1);
	        animate(new_top, new_index);
	    }
	    for(let i=0; i<dots.length; i++){
	        dots[i].onclick = function(){
		        let new_index = this.getAttribute('index');
		        let new_top = (-height * new_index)-496;
		        animate(new_top, new_index);
	        }
	    }
	    // 通过JS触发事件来完成轮播功能
	    let auto = setInterval(function(){
	        next_btn.onclick();
	    },auto_time);
	    // 为了提升用户体验，当用鼠标移进轮播图时就停止轮播功能
	    box.onmouseover = function(){
	        clearInterval(auto);
	    }
	    box.onmouseout = function(){
	        auto = setInterval(function(){
	            next_btn.onclick();
	        },auto_time);
	    }
	    // 图片转换的动画方法
	    function animate(new_top, new_index){
	        // 如果当前有动画在执行中，则不一执行本次动画 
	        if(status){
	            return;
	        }
	        status = true;
	        let offset = new_top - parseInt(list.style.top);
	        let time = 300;
	        let interval = 10;          // 速度的时间单位
	        let speed = offset / (time/interval);
	        index = new_index;
	        function go(){
	            if( speed < 0 && parseInt(list.style.top) > new_top || speed > 0 && parseInt(list.style.top) < new_top){
	                list.style.top = parseInt(list.style.top)+speed +'px';
	                setTimeout(function(){
	                    go();
	                }, interval);
	            }else{
	                // console.log(new_top);
	                // console.log(index);
	                if(new_top == -2976){
	                    list.style.top = '-496px';
	                    index = 0;
	                }else if(new_top == 0){
	                    list.style.top = '-2480px';
	                    index = 4;
	                }else{
	                    list.style.top = new_top +'px';
	                }
	                 status = false;
	                 showDot();
	            }
	        }
	        go();
	    }
	
	    // 控制显示焦点图标的方法
	    function showDot(){
	        for(let i=0; i<dots.length; i++){
	            dots[i].className = '';
	        }
	
	        dots[index].className = 'curr';
	    }
	}
		
	lunbo("lunbo_box",5000);
	/*大图片轮播结束*/
	
	
	/*委托找房*/
	
	$("input[type='tel']").change(function(){
		$("#telText").css("display","none");
	});
	
	/*document.getElementById("tel").onfocus = function(){
		document.getElementById("telText").style.display = "none";
	}*/
	
	
	$("form").submit(function(){
		let tel = $("#tel").val();
		let phone = /^[1][3,4,5,7,8][0-9]{9}$/;  
		let telText = document.getElementById("telText");
		if (tel==null || tel=="") {
			telText.style.display = "block";
			telText.innerHTML="手机号不能为空";
			return false;
		}else if(!phone.test(tel)){
			telText.style.display = "block";
			telText.innerHTML="请输入正确的手机号";
			return false
		}else{
			telText.innerHTML="";
		}
	})


	// 地图模块
	$('.map_top ul li').on('click',function(){
		$('.map_top ul li').css({'border-top-color':'#f4f4f4','background':'rgba(0,0,0,.04)'});
		$('.map_bom ul li').hide();
		let i = $(this).index();
		switch(i){
			case 0: 
				$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#87c4e5','background':'#fff'});
				$('.map_bom > ul > li:eq('+i+')').show();
				thismap('公交车');
			break;
			case 1: 
				$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#f6b674','background':'#fff'});
				$('.map_bom > ul > li:eq('+i+')').show();
				thismap('餐饮');
			break;
			case 2: 
				$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#ed93b1','background':'#fff'});
				$('.map_bom > ul > li:eq('+i+')').show();
				thismap('娱乐');
			break;
			case 3: 
				$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#b0e0a3','background':'#fff'});
				$('.map_bom > ul > li:eq('+i+')').show();
				thismap('银行');
			break;
			case 4: 
				$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#f1c493','background':'#fff'});
				$('.map_bom > ul > li:eq('+i+')').show();
				thismap('酒店');
			break;
			case 5: 
				$('.map_top > ul > li:eq('+i+')').css({'border-top-color':'#dfaadf','background':'#fff'});
				$('.map_bom > ul > li:eq('+i+')').show();
			break;
		}
	})
	$('.map_top ul li:eq(0)').click();

	function thismap(typename){
		var map = new BMap.Map("allmap");            // 创建Map实例
		var mPoint = new BMap.Point(113.2956311606, 23.2085909690);  //中心点的经纬度
	  	var marker = new BMap.Marker(mPoint); 
	    map.addOverlay(marker);
	    marker.setAnimation(BMAP_ANIMATION_BOUNCE);
		map.enableScrollWheelZoom();
		map.centerAndZoom(mPoint,15);
		var circle = new BMap.Circle(mPoint,1000,{fillColor:"blue", strokeWeight: 1 ,fillOpacity: 0.3, strokeOpacity: 0.3});//画圈半径一千米
	    map.addOverlay(circle);
	    var local =  new BMap.LocalSearch(map, {renderOptions: {map: map, autoViewport: true,panel: "r-result",imagesUrl:'./images/icon/traffic.png',detail_info:2}});  
	    local.searchNearby(typename,mPoint,1000);
	    // local.Icon({imagesUrl:'./images/icon/traffic.png'});
	    console.log(local);
	}	
})

