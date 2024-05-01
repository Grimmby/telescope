export function animationsScript() {

	( function( $ ) {
		/*====================================================
			In view animations.
		====================================================*/
		$(window).on('load', function () {
			// Remove preload on page load.
			$('body').removeClass('preload');

			// IntersectionObserver to know when an element is in view
			const sectionsReveal = document.querySelectorAll(
				'.scroll-reveal, .parent-reveal'
			);
			const observer = new IntersectionObserver(
				(entries) => {
					entries.forEach((entry) => {
						if (entry.isIntersecting) {
							// Default or parent elements with/without reveal delay.
							let delay = 0;
							const delayClass = Array.from(entry.target.classList).find(cls => cls.startsWith('reveal-delay-'));
							if (delayClass) {
								delay = parseInt(delayClass.replace('reveal-delay-', ''));
							}
							setTimeout(function () {
								entry.target.classList.add('in-view');
							}, delay);

							// Children elements with/without reveal delay.
							entry.target
								.querySelectorAll('.child-reveal')
								.forEach((child) => {
									let childDelay = 0;
									const childDelayClass = Array.from(child.classList).find(cls => cls.startsWith('reveal-delay-'));
									if (childDelayClass) {
										childDelay = parseInt(childDelayClass.replace('reveal-delay-', ''));
									}
									setTimeout(function () {
										child.classList.add('in-view');
									}, childDelay);
								});
						}
					});
				},
				{
					threshold: 0.2,
				}
			);
			sectionsReveal.forEach((section) => {
				observer.observe(section);
			});
		});
	})( jQuery );
}
