var Sculpt = {

	init: function(){
		function Build(){
			var self = this,
				$body = $('body')
				$windwow = $(window);
		};

		this.headerOffset();

		return Build;
	},

	headerOffset: function(){
		var self = this;

		$(window).scroll(function(){
			if ($(window).scrollTop() > 1) {
				$('.header').addClass('has-scrolled');
			} else {
				$('.header').removeClass('has-scrolled');
			}
		});
	}

};

$(document).ready(Sculpt.init());