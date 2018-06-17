;(function($){
	var defaults = {
		// GENERAL
		mode: 'horizontal',
		infiniteLoop: true,
		speed: 500,
		slideZIndex: 50,
		wrapperClass: 'bx-wrapper',
		// CALLBACKS
		onSliderLoad: function() { return true; },
		onSlideBefore: function() { return true; },
		onSlideAfter: function() { return true; },
		onSlideNext: function() { return true; },
		onSlidePrev: function() { return true; },
		onSliderResize: function() { return true; },
		onAutoChange: function() { return true; } //calls when auto slides starts and stops
	};

	$.fn.jtSlider = function(options) {
		if (this.length === 0) {return this;}
	    if (this.length > 1) {
	      this.each(function() {
	        $(this).jtSlider(options);
	      });
	      return this;
	    }
	    var slider = {}, el = this, windowWidth = $(window).width(), windowHeight = $(window).height();
	    var init = function() {
	    	slider.settings = $.extend({}, defaults, options);


	    	console.log(slider.settings)
	    };


	    init();
	};
})(jQuery);