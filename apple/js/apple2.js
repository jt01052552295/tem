(function($) {	
	var jQuery = $;

	var defaults = {
		itemsSelector: ".chapternav-items",
		leftPaddleSelector: ".chapternav-paddle-left",
		rightPaddleSelector: ".chapternav-paddle-right",
		scrollEasing: "ease-out",
		scrollDuration: .4,
		scrollPageCount: 0,
		scrollPageCurrent:0
	}

	$.fn.chapternav = function(options){

		var slider = {},el = this,windowWidth = $(window).width(),windowHeight = $(window).height();
		var childCount = $(el).find('li').length;


		var init = function(){
			slider.settings = $.extend({}, defaults, options);	
			slider.settings.scrollStart = document.querySelector(slider.settings.itemsSelector).scrollLeft;
			slider.settings.wrapperWidth = document.querySelector(slider.settings.itemsSelector).offsetWidth;
			slider.settings.contentWidth = document.querySelector(slider.settings.itemsSelector).scrollWidth;
			

			$( slider.settings.leftPaddleSelector ).on('click', _onPaddleStartClick);
			$( slider.settings.rightPaddleSelector ).on('click', _onPaddleEndClick);


			//console.info(slider.settings);
			$(window).bind('resize', resizeWindow);
			_updatePaddleDisplay(slider.settings.wrapperWidth, slider.settings.contentWidth);
			initTouch();
		};

		var _updatePaddleDisplay = function(w, c){
			//console.info(w,c);

			slider.settings.scrollPageCount = Math.floor(c/w);
			if(w < c ){
				document.querySelector(slider.settings.leftPaddleSelector).disabled = true;
				document.querySelector(slider.settings.rightPaddleSelector).disabled = false;
			} else {
				document.querySelector(slider.settings.leftPaddleSelector).disabled = true;
				document.querySelector(slider.settings.rightPaddleSelector).disabled = true;
			}

		};

		var resizeWindow = function(){
			slider.settings.wrapperWidth = document.querySelector(slider.settings.itemsSelector).offsetWidth;
			slider.settings.contentWidth = document.querySelector(slider.settings.itemsSelector).scrollWidth;
			_updatePaddleDisplay(slider.settings.wrapperWidth, slider.settings.contentWidth);
		};

		
		var _onPaddleStartClick = function(e) {
			e.preventDefault();
			var leftPos = $(slider.settings.itemsSelector).scrollLeft();

			$(slider.settings.itemsSelector).animate({
				scrollLeft: leftPos - slider.settings.wrapperWidth
			}, 800, function(){
				slider.settings.scrollPageCurrent--;
				document.querySelector(slider.settings.rightPaddleSelector).disabled = false;
				if(slider.settings.scrollPageCurrent <= 0){
					document.querySelector(slider.settings.leftPaddleSelector).disabled = true;
					slider.settings.scrollPageCurrent = 0;
				}
			});
		};

		var _onPaddleEndClick = function(e) {
			e.preventDefault();
			var leftPos = $(slider.settings.itemsSelector).scrollLeft();

			$(slider.settings.itemsSelector).animate({
				scrollLeft: leftPos + slider.settings.wrapperWidth
			}, 800, function(){
				slider.settings.scrollPageCurrent++;

				document.querySelector(slider.settings.leftPaddleSelector).disabled = false;
				if(slider.settings.scrollPageCurrent >= slider.settings.scrollPageCount){
					document.querySelector(slider.settings.rightPaddleSelector).disabled = true;
					slider.settings.scrollPageCurrent = slider.settings.scrollPageCount;
				}
			});
		};



		var initTouch = function() {
			slider.touch = {
				start: {x: 0, y: 0},
				end: {x: 0, y: 0}
			  };
			$(slider.settings.itemsSelector).bind('touchstart MSPointerDown pointerdown', onTouchStart);
			
		};

		var onTouchStart = function(e) {

			// record the original position when touch starts
			slider.touch.originalPos = el.position();
			var orig = e.originalEvent, touchPoints = (typeof orig.changedTouches !== 'undefined') ? orig.changedTouches : [orig];
			// record the starting touch x, y coordinates
			slider.touch.start.x = touchPoints[0].pageX;
			slider.touch.start.y = touchPoints[0].pageY;
			$(slider.settings.itemsSelector).bind('touchmove MSPointerMove pointermove', onTouchMove);


		};

		var onTouchMove = function(e) {

			var leftPos = $(slider.settings.itemsSelector).scrollLeft();
			var rightPos = slider.settings.contentWidth - slider.settings.wrapperWidth;

			//console.info(leftPos, rightPos)

			if(leftPos > 0 ){
				document.querySelector(slider.settings.leftPaddleSelector).disabled = false;
			}  else {
			 	document.querySelector(slider.settings.leftPaddleSelector).disabled = true;
			}


			if(leftPos < rightPos ){
				document.querySelector(slider.settings.rightPaddleSelector).disabled = false;
			}  else {
			 	document.querySelector(slider.settings.rightPaddleSelector).disabled = true;
			}


		};


		
		init();


		

	};
	
	

}(jQuery3_3_1));

jQuery3_3_1(document).ready(function($){
	var jQuery = $;

	$('#chapter-scroll').chapternav();
});