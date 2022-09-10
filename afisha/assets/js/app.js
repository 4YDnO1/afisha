const swiper = new Swiper('.swiper', {
	direction: 'vertical',
	loop: true,
	draggable: false,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
		renderBullet: function (index, className) {
			return '<div class="' + className + '">' + ++index + '<span></span></div>';
		},
	},	

	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},

	// scrollbar: {
    //     el: '.swiper-scrollbar',
    //     draggable: true,
    // },
});