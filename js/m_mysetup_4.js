$(function(){
	var mheight =  $(document.body).height();
	$('.m_bigbox').css({'height':(mheight*0.6)});
    $('.newhead span').touchClick(function(){
        $('#m_img').click();
    })
    $('.thansubmit').touchClick(function(){
        $('.thissubmit').click();
    })
})