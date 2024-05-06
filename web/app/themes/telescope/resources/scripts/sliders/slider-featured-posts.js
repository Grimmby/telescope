import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

const selector = 'js__slider-featured-posts';

const elements = document.querySelectorAll(
	`.${selector}`
);

if (elements !== null) {
	for (const element of elements) {
		buildSwiper(element);
	}
}

function buildSwiper(swiperElement) {
	const sliderIdentifier = swiperElement.dataset.swiperId;
	return new Swiper(`#swiper-${sliderIdentifier}`, {
		modules: [Navigation],
		loop: true,
		slidesPerView: 1.2,
		spaceBetween: 20,
		navigation: {
			nextEl: `.js-slider-featured-posts-btn-next-${sliderIdentifier}`,
			prevEl: `.js-slider-featured-posts-btn-prev-${sliderIdentifier}`,
		},
		breakpoints: {
			440: {
				slidesPerView: 1.5,
				spaceBetween: 20,
			},
			550: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			850: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
		},
	});
}
