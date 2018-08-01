
/*查看图片*/
$(document).ready(function() {

	$(".banner .carousel-inner>div").click(function() {
		var i = $(this).index();
		$(".show-img").css("visibility", "visible");/*点击图片显示*/
		swiper('.show_big_img', i)
	})
	
	/*点击关闭*/
	$(".close_show_img").click(function(){$(".show-img").css("visibility", "hidden");})
	
	
	/*showi（打开默认显示showi张）*/
	function swiper(name, showi) {
		var mySwiper = new Swiper(name, {

			initialSlide: showi,
			speed:800,/*滑动完成时间*/
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			spaceBetween: 20,

			/*添加信息*/
			pagination: {
				el: '.swiper-pagination',
				type: 'custom',
				renderCustom: function(swiper, current, total) {
					return '房源图片  (' + current + ' / ' + total + ')';
				}
			},

			/*切换效果*/
			effect: 'coverflow',
			centeredSlides: true,

			coverflowEffect: {
				rotate: 70,
				stretch: 10,
				depth: 60,
				modifier: 1,
				slideShadows: true
			}

		})
	}

})
/*查看图片结束*/