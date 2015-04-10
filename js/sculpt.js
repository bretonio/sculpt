jQuery(function($){

	var site = {
		w: $(window),
		b: $('body')
	}

	var Sculpt = {

		init: function(){

			this.headerOffset();
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
		}

	};

	Sculpt.init()

});