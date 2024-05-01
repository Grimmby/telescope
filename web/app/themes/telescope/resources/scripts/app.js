import domReady from '@roots/sage/client/dom-ready';
import { animationsScript } from '@scripts/theme/animations';

/**
 * Application entrypoint
 */
domReady(async () => {
	animationsScript();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
