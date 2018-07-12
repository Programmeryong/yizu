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