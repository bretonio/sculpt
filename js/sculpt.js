jQuery(function($){

	var Sculpt = {

		init: function(){

			this.general();
			this.headerOffset();
			this.offCanvas();

			if ($('.js-video-play').length) {
				this.wistia.bind();
			}
		},

		general: function(){
			// Fast click
		    FastClick.attach(document.body);

	    	// $('.js-lazy').append('<span class="loader"></div>');

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
		},

		wistia: {
			videos: [],
			video: {},
			bind: function(){
				$('.js-video-play').on('click', function(){
					var $player = $(this).siblings('.js-videoEmbed-inner').find('.js-video-player');

					if (!$player.hasClass('is-loaded')){
						Sculpt.video.init($(this));
					} else {
						Sculpt.video.play($(this));
					}
		    	});
			},
			init: function(play){
				var $play = $(play), // play button
					$videoEmbed = $play.parent('.js-videoEmbed'), // outer container
					$placeholder = $videoEmbed.css('background-image'), // store original background image

					$player_container = $play.siblings('.js-videoEmbed-inner'), // player wrapper
					$player = $player_container.find('.js-video-player'), // player
					ID = $player.attr('data-src'),
					playerID = 'wistia_' + ID;

				$videoEmbed.css('background-image', 'none').append('<div class="loader"></div>');
				$play.fadeOut(300);

				playerID = Wistia.embed(ID, {
				  container: playerID,
				  videoFoam: true,
				  playerColor: 'ff9254' // sculpt orange
				});

				playerID.ready(function(){
					$player.addClass('is-loaded');
					Sculpt.video.play($play);
				});

				playerID.bind('end', function(){
					Sculpt.video.hide($play);
				});
			},
			play: function(play){
				var $play = $(play), // play button

					$player_container = $play.siblings('.js-videoEmbed-inner'), // player wrapper
					$player = $player_container.find('.js-video-player'), // player
					ID = $player.attr('data-src'),
					playerID = 'wistia_' + ID;

				$player_container.css({'bottom' : 0});

				$player_container.siblings('.loader').fadeOut(300);

				setTimeout(function(){
					$player_container.css({'opacity' : 1});
					playerID.play();
				}, 600);
			},
			hide: function(play){
				var $play = $(play), // play button
					$videoEmbed = $play.parent('.js-videoEmbed'), // outer container
					$placeholder = $videoEmbed.css('background-image'), // store original background image

					$player_container = $play.siblings('.js-videoEmbed-inner'); // player wrapper

				$play.fadeIn(300);
				$player_container.css({'opacity': 0, 'bottom' : '100%'});
				$videoEmbed.css('background-image', $placeholder);
			}
		}
	};

	Sculpt.init()

});