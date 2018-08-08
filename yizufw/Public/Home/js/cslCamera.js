$.Pgater=(function(){
	var agent=navigator.userAgent.toLowerCase();
	var iswx=agent.indexOf('qqbrowser') >= 0;
	if(iswx){
		var File=$("<input type='file' id='csl_gater_file' accept='image/*' name='imgname' capture='camera' multiple='multiple'>");
	}else{
		var File=$("<input type='file' id='csl_gater_file' accept='image/*' name='imgname' multiple='multiple'>");
	};
	File.css('display','none');
	return function(target,callBack){
		this.ele=File;
		this.parent=target;
		this.parent.append(this.ele);
		this.bindClk(this.parent,this.ele[0]);
		this.bindFuc(this.ele,callBack);
	};
})();
//这里是循环打印上传的图片，但是数组不是一整个的
var thisarr=[];
$.Pgater.prototype.bindFuc=function(ele,callBack){
	ele.on("change",function(){
		var all=ele[0].files;
		var reader = new FileReader();
		var album=[];
		var length=all.length;
		var i=0;
		var recur=function(){
			reader.readAsDataURL(all[i]);
			var One=all[i];
			reader.onload=function(e){
				One.data=this.result;
				album.push(One);
				thisarr.push(One);
				i++;
				if(i<length){
					recur();
				}else{
					ele.value = '';
					callBack(album,img);
				};
			};
			console.log(thisarr);
		};
		recur();
	});
};

$.Pgater.prototype.bindClk=function(ele,tar){
	ele.on('click',function(){
		tar.click();
	});
};
$(function(){
	$('.clickthisul').on('click','li',function(){
		var thanarr = thisarr;
		var i = $(this).index();
		$('.clickthisul li:eq('+i+')').remove();
		thanarr.splice(i,1);
	})
})