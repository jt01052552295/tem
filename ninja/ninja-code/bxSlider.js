/**
 * bxSlider v4.2.1d
 * Copyright 2013-2017 Steven Wanderski
 * Written while drinking Belgian ales and listening to jazz
 * Licensed under MIT (http://opensource.org/licenses/MIT)
 */

;(function($) {



	var defaults = {

		// GENERAL
		mode: 'horizontal',
		slideSelector: '',
		infiniteLoop: true,
		hideControlOnEnd: false,
		speed: 500,
		easing: null,
		slideMargin: 0,
		startSlide: 0,
		randomStart: false,
		captions: false,
		ticker: false,
		tickerHover: false,
		adaptiveHeight: false,
		adaptiveHeightSpeed: 500,
		video: false,
		useCSS: true,
		preloadImages: 'visible',
		responsive: true,
		slideZIndex: 50,
		wrapperClass: 'bx-wrapper',

		// TOUCH
		touchEnabled: true,
		swipeThreshold: 50,
		oneToOneTouch: true,
		preventDefaultSwipeX: true,
		preventDefaultSwipeY: false,

		// ACCESSIBILITY
		ariaLive: true,
		ariaHidden: true,

		// KEYBOARD
		keyboardEnabled: false,

		// PAGER
		pager: true,
		pagerType: 'full',
		pagerShortSeparator: ' / ',
		pagerSelector: null,
		buildPager: null,
		pagerCustom: null,

		// CONTROLS
		controls: true,
		nextText: 'Next',
		prevText: 'Prev',
		nextSelector: null,
		prevSelector: null,
		autoControls: false,
		startText: 'Start',
		stopText: 'Stop',
		autoControlsCombine: false,
		autoControlsSelector: null,

		// AUTO
		auto: false,
		pause: 4000,
		autoStart: true,
		autoDirection: 'next',
		stopAutoOnClick: false,
		autoHover: false,
		autoDelay: 0,
		autoSlideForOnePage: false,

		// CAROUSEL
		minSlides: 1,
		maxSlides: 1,
		moveSlides: 0,
		slideWidth: 0,
		shrinkItems: false,

		// CALLBACKS
		onSliderLoad: function() { return true; },
		onSlideBefore: function() { return true; },
		onSlideAfter: function() { return true; },
		onSlideNext: function() { return true; },
		onSlidePrev: function() { return true; },
		onSliderResize: function() { return true; },
		onAutoChange: function() { return true; } //calls when auto slides starts and stops
	};


	$.fn.bxSlider = function(options) {
		if (this.length === 0) {
		  return this;
		}

		// support multiple elements
		if (this.length > 1) {
		  this.each(function() {
		    $(this).bxSlider(options);
		  });
		  return this;
		}

		// create a namespace to be used throughout the plugin
		var slider = {},
		// set a reference to our slider element
		el = this,
		// get the original window dimens (thanks a lot IE)
		windowWidth = $(window).width(),
		windowHeight = $(window).height();

		// Return if slider is already initialized
		if ($(el).data('bxSlider')) { return; }
		

		/**
		 * ===================================================================================
		 * = PRIVATE FUNCTIONS
		 * ===================================================================================
		 */

		/**
		 * Initializes namespace settings to be used throughout plugin
		 */
		var init = function() {
			console.log('init')
			// Return if slider is already initialized
			if ($(el).data('bxSlider')) { return; }
			// merge user-supplied options with the defaults
			slider.settings = $.extend({}, defaults, options);
			console.log(slider.settings)
			// parse slideWidth setting
			slider.settings.slideWidth = parseInt(slider.settings.slideWidth);
			// store the original children
			slider.children = el.children(slider.settings.slideSelector);
			// check if actual number of slides is less than minSlides / maxSlides
			if (slider.children.length < slider.settings.minSlides) { slider.settings.minSlides = slider.children.length; }
			if (slider.children.length < slider.settings.maxSlides) { slider.settings.maxSlides = slider.children.length; }
			// if random start, set the startSlide setting to random number
			//if (slider.settings.randomStart) { slider.settings.startSlide = Math.floor(Math.random() * slider.children.length); }

	      // perform all DOM / CSS modifications
	      setup();
	    };

	    /**
	     * Performs all DOM and CSS modifications
	     */
	    var setup = function() {
	    	console.log('setup')
	    	var preloadSelector = slider.children.eq(slider.settings.startSlide); // set the default preload selector (visible)

			if (preloadSelector === null) {
				start();
			} else {
				loadElements(preloadSelector, start);
			}
			
	    };

	    var loadElements = function(selector, callback) {
		      var total = selector.find('img:not([src=""]), iframe').length, count = 0;
		      if (total === 0) {
		        callback();
		        return;
		      }
		      selector.find('img:not([src=""]), iframe').each(function() {
		        $(this).one('load error', function() {
		        	console.log(count, total)
		          if (++count === total) { callback(); console.log('callback')}
		        }).each(function() {
		          if (this.complete || this.src == '') { $(this).trigger('load');console.log('load')}
		        });
		      });
	    };


	    /**
	     * Start the slider
	     */
	    var start = function() {
	    	console.log('start')

	    };



	    init();
	    $(el).data('bxSlider', this);

	    // returns the current jQuery object
	    return this; 
	};
})(jQuery);