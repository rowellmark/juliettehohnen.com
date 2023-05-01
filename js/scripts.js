(function ($, w, d, h, b) {
	$(document).ready(function () {

		/**
		 * Construct.
		 */
		__construct = () => {
			initSidePanel();
			initNavigation();
			onScrollFixed();
			
			runFeaturdProperties();
			/// specific for homepage
			if ($(b).hasClass('home')) {
				initCounter();
				runTestimonials();
				runNeighborhoods();
			}

			AOS.init({ disable: 'mobile' });
		}

		initSidePanel = () => {
			
			const sidePanel = $('#sidePanel');
			const sidePanelLists = $('.aios-section-nav');
			const scrollSection = $('.aios-scroll-section');
			sidePanel.sideNavigation({
				navSectionAppend: '<li class="{{scroll-id}}"><a class="scroll-section-dot" href="{{scroll-id}}"><span></span><em>/</em><i></i></a></li>',
			});

			$countMaxLimit = sidePanelLists.find('li').length;
			$countMaxLimit = $countMaxLimit > 9 ? $countMaxLimit : '0'+ $countMaxLimit +'';
			$('.scroll-section-dot i').text($countMaxLimit);

			// side panel counter 
			sidePanelLists.find('li').each(function (i,v) {
				$count = i + 1;				
				$count = $count > 9 ? $count : '0' + $count + '';
				$(v).find('span').text($count);
			});


			// Scroll Container
			scrollSection.each(function (i, v) {
				$count = i + 1;
				$count = $count > 9 ? $count : '0' + $count + '';
				$(v).find('.default-title i').text($count);
			});


		}
		initNavigation = () => {
			const $nav = $('#nav');
			if ($nav.length > 0) $nav.navTabDoubleTap();
		}
		onScrollFixed = () => {

			this.onScrollFixed = () => {
				const $header = $('.header');

				$(w).on('load scroll', function () {
					let currentScroll = w.pageYOffset || d.documentElement.scrollTop;
					let isDesktop = w.matchMedia('(min-width: 992px)').matches;

					if (isDesktop) {
						if (currentScroll > 0) {
							$header.addClass('header-float');
						}
						else {
							$header.removeClass('header-float');
						}
					}
					else {
						$header.removeClass('header-float');
					}

				});
			}
			this.onScrollFixed();
		}

		runFeaturdProperties = () => {

			$property = $('.hpFeaturedPropertiesList a');

			$propertyHover = $('.hpFeaturedPropertiesListHover');



			// on property mouse enter
			$property.on('mouseenter touchstart', function () {
				$propertyHover.find('.hpFeaturedPropertiesListHoverContainer').html($(this).clone());
				$propertyHover.stop(true, true).fadeIn();
			})


			$propertyHover.on('mouseleave touchend', function () {
				$propertyHover.stop(true, true).fadeOut();
			})

		}
		commaSeparateNumber = (val) => {
			while (/(\d+)(\d{3})/.test(val.toString())) {
				val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
			}
			return val;
		}
		initCounter = () => {

			if ($('body').hasClass('home')) {
				function isScrolledIntoView(elem) {
					const docViewTop = jQuery(window).scrollTop();
					let docViewBottom = docViewTop + jQuery(window).height();

					let elemTop = jQuery(elem).offset().top;
					let elemBottom = elemTop + jQuery(elem).height();

					return elemBottom <= docViewBottom && elemTop >= docViewTop;
				}

				var shown = false;

				$(w).scroll(function () {
					var myelement = $(".hpWorkStats");
					if (isScrolledIntoView(myelement)) {
						if (!shown) {
							$(".hpWS em").each(function () {
								var $this = $(this);
								const limit = parseInt($this.attr("data-number"));

								$({ Counter: 0 }).animate(
									{ Counter: limit },
									{
										duration: 1000,
										easing: "swing",
										step: function () {
											$this.text(commaSeparateNumber(Math.ceil(this.Counter)));
										},
									}
								);
							});
						}
						shown = true;
					}
				});
			}
		}

		runTestimonials = () => {
			
			let $testimonials = new Splide('.hpTestimonaislLists', {
				type: 'loop',
				perPage: 3,
				perMove: 1,
				arrows: false,
				pagination: false,
				gap: 88,
				breakpoints: {
					991: {
						perPage: 2
					},
					767: {
						perPage: 1,
						gap: 0
					},
				},
			});

			$testimonials.mount();


			const $testiPagination = $('.testiPagination button');


			$testiPagination.on('click', function () {
				
				$buttonData = $(this).data('arrow');

				console.log($buttonData);

				if ($buttonData == 'prev') {
					$testimonials.go('<');
				}

				if ($buttonData == 'next') {
					$testimonials.go('>');
				}

			});

		}
		runNeighborhoods = () => {

			let $neighborhoods = new Splide('.hpNeighborhoodLists', {
				type: 'loop',
				perPage: 3,
				perMove: 1,
				arrows: false,
				pagination: false,
				gap: 84,
				interval: 10000,
				autoplay: true,
				breakpoints: {
					991: {
						perPage: 2
					},
					767: {
						perPage: 1,
						gap: 0
					},
				},
			});

			$neighborhoods.mount();


			const $testiPagination = $('.testiPagination button');


			$testiPagination.on('click', function () {

				$buttonData = $(this).data('arrow');

				console.log($buttonData);

				if ($buttonData == 'prev') {
					$neighborhoods.go('<');
				}

				if ($buttonData == 'next') {
					$neighborhoods.go('>');
				}

			});

		}


		/**
		 * Instant Initiate
		 */
		__construct();

	});

	$(window).on('load', function () {
		$('body').addClass('site-loaded');

	});

})(jQuery, window, document, 'html', 'body');