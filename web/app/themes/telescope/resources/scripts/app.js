import domReady from '@roots/sage/client/dom-ready';
import { animationsScript } from '@scripts/theme/animations';
import { headerScript } from '@scripts/theme/header';
import './sliders/slider-featured-posts';
import 'swiper/css';

/**
 * Application entrypoint
 */
domReady(async () => {
	animationsScript();
	headerScript();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
