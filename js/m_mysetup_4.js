$(function(){
	var mheight =  $(document.body).height();
	$('#demo1').css({'height':(mheight*0.6)});

    $('.thansubmit').touchClick(function(){
        $('.thissubmit').click();
    })
    $('#demo1').touchClick(function(){
    	$('#test1').click();
    })
})