
	function lunbo2(div_id, auto_time, widths){
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
	    let width = widths;
	
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
	                console.log(new_left);
	                console.log(index);
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

