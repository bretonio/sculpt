jQuery(function($){

	var Sculpt = {

		init: function(){

			this.general();
			this.headerOffset();
			this.offCanvas();

			if ($('.js-video-play').length) {
				this.wistia.init();
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
			video: {},
			embed: {},
			init: function(){
				video = this.video;

				$('.js-video-play').on('click', function(){
					var $play = $(this), // play button
						$outer_container = $play.parent('.js-videoEmbed'), // outer container
						$placeholder = $outer_container.css('background-image'), // store original background image

						$player_container = $play.siblings('.js-player-container'), // player wrapper
						$player = $player_container.find('.js-player'), // player
						ID = $player.attr('data-src'),
						playerID = 'wistia_' + ID;

					video['ID'] = {
						id: ID,
						ID: playerID,
						outer_container: $outer_container,
						player_container: $player_container,
						player: $player,
						placeholder: $placeholder,
						play_button: $play
					}

					if ($outer_container.hasClass('is-loaded')){
						Sculpt.wistia.play(embed[video['ID'].id], video['ID']);
					} else if (!$outer_container.hasClass('is-loaded')) {
						Sculpt.wistia.load(video['ID']);
					}
		    	});
			},
			load: function(player){
				embed = this.embed;

				player.play_button.fadeOut(300);
				player.outer_container.css('background-image', '').append('<div class="loader"></div>');

				embed[player.id] = Wistia.embed(player.id, {
				  container: player.ID,
				  videoFoam: true,
				  endVideoBehavior: 'reset',
				  playerColor: 'ff9254' // sculpt orange
				});

				embed[player.id].ready(function(){
					player.outer_container.addClass('is-loaded');
					Sculpt.wistia.play(embed[player.id], player);
				});
			},
			play: function(embed, player){
				console.log(player);

				player.outer_container.css('background-image', '');
				player.player_container.css({'bottom' : 0}).siblings('.loader').fadeOut(300);

				setTimeout(function(){
					player.player_container.css({'opacity' : 1});
					embed.play();

					embed.bind('end', function(){
						Sculpt.wistia.hide(player);

						return this.unbind;
					});
				}, 600);
			},
			hide: function(player){
				player.play_button.fadeIn(300);
				player.player_container.css({'opacity': 0, 'bottom' : '100%'});
				player.outer_container.css('background-image', player.placeholder);
			}
		}
	};

	Sculpt.init()

});