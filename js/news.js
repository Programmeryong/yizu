 $(function(){
 	
 	
 	/*鼠标移入，显示上下一页按钮*/
 	$("#brand").mouseover(function(){
 		$(".pre,.next").css("display","block");
 	})
 	/*鼠标移出，隐藏上下一页按钮*/
 	$("#brand").mouseout(function(){
 		$(".pre,.next").css("display","none");
 	})
 	
 	
 	
 	/*选卡（全部，写字楼，创意园，出租屋）*/
	function xuanka(){
		$('.tabs_li>ul>li').on('click',function(){
			$('.tabs_li>ul>li').removeClass("active");
			$(this).addClass("active");
		});
	}
	xuanka();
 	
 	
 	/*视觉盛宴*/
	let vision_box = $(".vision ul li div");
 	/*第一个函数是鼠标悬停，第二个函数是鼠标移出*/
 	$(".vision ul li").hover(function(){
 		let index = $(this).index();
 		/*console.log(index);*/
 		$(vision_box[index]).stop();
 		$(vision_box[index]).animate({top:"-194px"},500)
 	},function(){
 		let index = $(this).index();
 		$(vision_box[index]).stop();
 		$(vision_box[index]).animate({top:"0px"},500)
 	})
 		
 	
 	let new_box = $(".news .media");
 	$(".news>ul>li").hover(function(){
 		let indexs = $(this).index();
 		$(new_box[indexs]).stop();
 		$(new_box[indexs]).animate({left: "15px"},500)
 		//$(".new_type").eq(indexs).css({"color":"#F59331"});
 	},function(){
 		let indexs = $(this).index();
 		$(new_box[indexs]).stop();
 		$(new_box[indexs]).animate({left: "0px"},500)
 		//$(".new_type").eq(indexs).css({"color":"rgba(0,0,0,0.85)"});
	})
 
 })
 
 
 
 window.onload = function (){
    lunbo('brand', 3000);
    lunbo2('vision_box',3000);
    
}


function lunbo(div_id, auto_time){
	// 把常用的对象或变量先进行定义
    let box = document.getElementById(div_id);
    let pre_btn = box.getElementsByClassName('pre')[0];

    let next_btn = box.getElementsByClassName('next')[0];
    let list = box.getElementsByClassName('brand_box')[0];
    let dots = box.getElementsByClassName('brand_lists')[0].getElementsByTagName('li');

    // 图片数量
    let img_num = list.getElementsByTagName('img').length;
    // 图片索引的最大值
    let max_index = dots.length - 1;
    // 图片索引
    let index = 0;

    // 窗口、图片的宽度
    let width = 848;

    let status = false;


    // 上一页的事件
    pre_btn.onclick = function(){
        let new_index = index;
        new_index--;
        if(new_index < -1){
            new_index = 4;
        }
        
        new_left = -width* (new_index+1);
        animate(new_left, new_index);
    }

    // 下一页的事件
    next_btn.onclick = function(){
        let new_index = index;
        new_index++;
        if(new_index > max_index+1){
            new_index = 0;
        }

        let new_left =-width* (new_index+1);
        animate(new_left, new_index);
    }

    for(let i=0; i<dots.length; i++){
        dots[i].onclick = function(){
            let new_index = this.getAttribute('data-index');
            let new_left = (-width * new_index)-width;
            animate(new_left, new_index);
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
    
    pre_btn.onmouseover = function(){
        $(".pre img:first-child").css("display","none");
        $(".pre img:last-child").css("display","block");
        clearInterval(auto);
    }
    pre_btn.onmouseout = function(){
        $(".pre img:first-child").css("display","block");
        $(".pre img:last-child").css("display","none");
    }
    next_btn.onmouseover = function(){
    	$(".next img:first-child").css("display","none");
        $(".next img:last-child").css("display","block");
        clearInterval(auto);
    }
    next_btn.onmouseout = function(){
    	$(".next img:first-child").css("display","block");
        $(".next img:last-child").css("display","none");
    }

    box.onmouseout = function(){
        auto = setInterval(function(){
            next_btn.onclick();
        },auto_time);
    }

    // 图片转换的动画方法
    function animate(new_left, new_index){
        // 如果当前有动画在执行中，则不一执行本次动画 
        if(status){
            return;
        }
        status = true;
        let offset = new_left - parseInt(list.style.left);
        let time = 500;
        let interval = 10;          // 速度的时间单位
        let speed = offset / (time/interval);
        index = new_index;

        function go(){
            if( speed < 0 && parseInt(list.style.left) > new_left || speed > 0 && parseInt(list.style.left) < new_left){
                list.style.left = parseInt(list.style.left)+speed +'px';
                setTimeout(function(){
                    go();
                }, interval);
            }else{
                if(new_left == -5088){
                    list.style.left = '-848px';
                    index = 0;
                }else if(new_left == 0){
                    list.style.left = '-4240px';
                    index = 4;
                }else{
                    list.style.left = new_left +'px';
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


	function lunbo2(div_id, auto_time){
		// 把常用的对象或变量先进行定义
	    let box = document.getElementById(div_id);
	
	    let next_btn = box.getElementsByClassName('xia')[0];
	    let list = box.getElementsByClassName('vision')[0];
	
	    // 图片数量
	    let img_num = list.getElementsByTagName('li').length;
	    // 图片索引的最大值
	    let max_index = img_num;
	    // 图片索引
	    let index = -2;
	
	    // 窗口、图片的宽度
	    let width = 289;
	
	    let status = false;
	
	
	
	    // 下一页的事件
	    next_btn.onclick = function(){
	        let new_index = index;
	        new_index++;
	        if(new_index > max_index+1){
	            new_index = 0;
	        }
	        //console.log(index);
	        //console.log(new_index);
	
	        let new_left =-width* (new_index+1);
	        animate(new_left, new_index);
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
	    function animate(new_left, new_index){
	        // 如果当前有动画在执行中，则不一执行本次动画 
	        if(status){
	            return;
	        }
	        status = true;
	        let offset = new_left - parseInt(list.style.left);
	        let time = 500;
	        let interval = 10;          // 速度的时间单位
	        let speed = offset / (time/interval);
	        index = new_index;
	
	        function go(){
	            if( speed < 0 && parseInt(list.style.left) > new_left || speed > 0 && parseInt(list.style.left) < new_left){
	                list.style.left = parseInt(list.style.left)+speed +'px';
	                setTimeout(function(){
	                    go();
	                }, interval);
	            }else{
	                if(new_left == -1734){
	                    list.style.left = '0px';
	                    index = -2;
	                }/*else if(new_left == 0){
	                    list.style.left = '-2312px';
	                    index = 4;
	                }*/else{
	                    list.style.left = new_left +'px';
	                }
	                 status = false;
	            }
	        }
	        go();
	    }
	}

