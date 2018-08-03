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
    html5Reader(file,id1);
}
 function html5Reader(file,id1){
     var file = file.files[0];
     var reader = new FileReader();
     reader.readAsDataURL(file);
     reader.onload = function(e){
         var pic = document.getElementById(id1);
         var hiede = document.getElementById('hidetext');
         pic.src=this.result;
         hiede.innerHTML=this.result;
     }
 }

 $(function(){
    $('.newhead span').touchClick(function(){
        $('#m').click();
    })
 })