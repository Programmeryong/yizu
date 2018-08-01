$(function(){

/*
  这个位置先放着，反正已经写好了，回头想个方法放到对应位置上
*/
function add0(m){return m<10?'0'+m:m };
// 年月日
function getDate_1(shijianchuo) {
  var time = new Date(shijianchuo);
  var y = time.getFullYear();
  var m = time.getMonth()+1;
  var d = time.getDate();
  var h = time.getHours();
  var mm = time.getMinutes();
  var s = time.getSeconds();
  return y+'-'+add0(m)+'-'+add0(d);
};  
// 月日
function getDate_2(shijianchuo) {
  var time = new Date(shijianchuo);
  var y = time.getFullYear();
  var m = time.getMonth()+1;
  var d = time.getDate();
  var h = time.getHours();
  var mm = time.getMinutes();
  var s = time.getSeconds();
  return add0(m)+'-'+add0(d);
};  
var thistime = getDate_1(1533043509);
console.log(thistime);
})
