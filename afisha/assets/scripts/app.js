

// let datepicker = new Datepicker('#datepicker');

/*=== Swipers ===*/
const home_swiper = new Swiper('.home-swiper', {
	direction: 'horizontal',
	pagination: {
		el: '.swiper-pagination',
		clickable: true
	},
});


const tag_swiper = new Swiper('.tag-swiper', {
	direction: 'horizontal',
	slidesPerView: 4,
    freeMode: true,
	spaceBetween: 15,
});


const swiper = new Swiper('.bg-swiper', {
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
});
