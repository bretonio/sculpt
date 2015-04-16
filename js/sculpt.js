jQuery(function($){

	var site = {
		w: $(window),
		b: $('body')
	}

	var Sculpt = {

		init: function(){

			this.headerOffset();

			if ($('pre').length) {
				this.syntax();
			}

			if ($('#mc-embedded-subscribe-form').length){
				this.mcValidate();
			}
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