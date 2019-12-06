jQuery(function($) {
	
	// Add class active when the page is scrolling

	$(document).on("scroll", onScroll);

	$('a[href^="#"').on('click', function (e) {
		e.preventDefault();
		$(document).off("scroll");

		$('a').each(function () {
			$(this).removeClass('active');
		})
		$(this).addClass('active');
		var target = this.hash,
		$target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top+2
		}, 500, 'swing', function() {
			window.location.hash = target;
			$(document).on('scroll', onScroll);
		});
	});
});

function onScroll(event) {
	var scrollPos = $(document).scrollTop();
	$('.menu ul li a').each(function() {
		var currLink = $(this);
		console.log(currLink);
		var refElement = $(currLink.attr("href"));
		console.log(refElement);
		if(refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
			$('.menu ul li a').removeClass("active");
			currLink.addClass('active');
		} else {
			currLink.removeClass('active');
		}
	});
}

jQuery(function($) {

	//Animation elements

	//Cache reference to window and animation items
	var $animation_elements = $('.animation-element');
	var $window = $(window);


	// Scroll Position Detection
	function check_if_in_view() {
		var window_height = $window.height();
		var window_top_position = $window.scrollTop();
		var window_bottom_position = (window_top_position + window_height);

		$.each($animation_elements, function() {
			var $element = $(this);
			var element_height = $element.outerHeight();
			var element_top_position = $element.offset().top;
			var element_bottom_position = (element_top_position + element_height);

			//check to see if this current container is within viewport
			if ((element_bottom_position >= window_top_position) &&
			(element_top_position <= window_bottom_position)) {
				$element.addClass('in-view');
			} else {
				$element.removeClass('in-view');
			}
		});
	}

	//Hooking into the Scroll Event
	$window.on('scroll resize', check_if_in_view);
	$window.trigger('scroll');
});

jQuery(function($) {
	$('.mobileMenuToggle').on('click', function (e) {
	e.preventDefault();
	$(this).toggleClass('expanded').siblings('nav').slideToggle();
	});
});