'use strict';

// IIFE - Immediately Invoked Function Expression
(function($, window, document) {
	// The $ is now locally scoped 
	// Listen for the jQuery ready event on the document
	$(function() {
		// The DOM is ready!
		var isTouch = Modernizr.touch;
		
		// Scroll navigation
		$(document).on('click', 'a[href^=#]', function(e) {
			var id = $(this).attr('href'),
				elemPos = Math.floor($(id).offset().top) - 56,
				delayTime = isTouch ? 0.5 : 0;

			if($(id).length) {
				e.preventDefault();

				// trigger scroll
				TweenLite.to(window, 1, {
					scrollTo: {
						y: elemPos,
						autoKill: true
					},
					delay: delayTime,
					ease: Cubic.easeInOut
				});
			}
		});

		// Show/hide mobile menu
		$('.hamburger-js').on('click', function(e) {
			e.preventDefault();

			var elem = $(this);
			elem.parent().toggleClass('header--open');
		});

		// Detect if touch is available then trigger hamburger click event
		// this will only trigger on mobile devices
		if (isTouch) {
			$('.menu-js').on('click', function(e) {
				var isLessTab = Modernizr.mq('only all and (max-width: 966px)');
				e.preventDefault();
				if (isLessTab) {
					$('.hamburger-js').trigger('click');
				}
			});
		}

		// Toggles process content
		$('.process-js').on('click', function() {
			var elem = $(this);

			if (elem.hasClass('process__item--open')) {
				elem.removeClass('process__item--open');
				elem.addClass('process__item--closed');
			} else {
				elem.addClass('process__item--open');
				elem.removeClass('process__item--closed');
			}
			
		});
	});

// The rest of the code goes here!
}(window.jQuery, window, document));