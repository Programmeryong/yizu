$(function(){
    $('.aboutus_ul>li').touchClick(function(){
        let i = $(this).index();
        $('.aboutus_ul>li').removeClass('aboutus_topli');
        $('.bom_ul>li').addClass('bom_ulli');
        $('.aboutus_ul>li:eq('+i+')').addClass('aboutus_topli');
        $('.bom_ul>li:eq('+i+')').removeClass('bom_ulli');
    })
})