jQuery(function($){

	var site = {
		w: $(window),
		b: $('body')
	}

	var Sculpt = {

		init: function(){

			this.headerOffset();
			this.offCanvas();
			if ($('pre').length) { this.syntax(); }
			if ($('#mc-embedded-subscribe-form').length){ this.mcValidate(); }

			// Lazy Load
			// $(window).load(function(){

			//     $('.lazyload').each(function() {

			//         var lazy = $(this);
			//         var src = lazy.attr('data-src');

			//         $('<img>').attr('src', src).load(function(){
			//             lazy.find('img.spinner').remove();
			//             lazy.css('background-image', 'url("'+src+'")');
			//         });

			//     });

			// });
		},

		headerOffset: function(){
			var $header = $('.header');

			site.w.scroll(function(){
				if (site.w.scrollTop() > 1) {
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

		syntax: function(){
			var code = $('pre');
			$('pre code').each(function(i, block) {
				hljs.highlightBlock(code);
			});
			console.log('pre');
		},

		mcValidate: function(){
			var script = document.createElement("script");

			script.type = "text/javascript";
			script.src = "http://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js";
			$("head").append(script);
		}

	};

	Sculpt.init()

});