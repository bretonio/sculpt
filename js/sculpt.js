jQuery(function($){

	var Sculpt = {

		init: function(){

			this.general();
			this.headerOffset();
			this.offCanvas();
		},

		general: function(){
			// Fast click
		    FastClick.attach(document.body);

	    	$('.js-lazy').append('<span class="loader"></div>');

	    	$('.js-lazy').lazyload({
	    		effect: "fadeIn"
	    	});

			/*
			 * Header
			 */
			$('.sub-menu').closest('li').addClass('has-sub-menu');
			$('.has-sub-menu .sub-menu .current-menu-item').closest('.has-sub-menu').addClass('current-menu-item');

			/*
			 * Blog Listing hovers
			 */
		 	var $post_title = $('.blogListing .post .blog-title');

			$post_title.hover(function(){
				$(this).closest('.post').addClass('is-visible');
			}, function(){
				$(this).closest('.post').removeClass('is-visible');
			});
		},

		headerOffset: function(){
			var $header = $('.header'),
				$w = $(window);

			$w.scroll(function(){
				if ($w.scrollTop() > 1) {
					$header.addClass('has-scrolled');
				} else {
					$header.removeClass('has-scrolled');
				}
			});
		},

		offCanvas: function(){
			var	$body = $('body'),
				$bodyOverlay = $('.bodyOverlay');

			$body.on('click', '.js-menuToggle', function(e){
				e.preventDefault();

				var $this = $(this);

				if ($body.hasClass('nav--is-visible')){
					$body.addClass('nav--is-hiding');
					setTimeout(function(){
						$body.removeClass('nav--is-visible');
						$body.removeClass('nav--is-hiding');
					}, 300);
				} else {
					$body.addClass('nav--is-visible');
				}
			}); 
		}
	};

	Sculpt.init()

});