;(function($){

	$.fn.carousel = function(){

		var _items = [];
		function _getItemIndex(element) {
	      _items = $.makeArray($(element).parent().find('.item'))
	      return _items.indexOf(element)
	    }

	    function _getItemByDirection(itemIndex){
	    	return itemIndex === -1 ? _items[_items.length - 1] : _items[itemIndex]
	    }


	    $.support.transition = (function () {

		      var transitionEnd = (function () {

		        var el = document.createElement('bootstrap')
		          , transEndEventNames = {
		               'WebkitTransition' : 'webkitTransitionEnd'
		            ,  'MozTransition'    : 'transitionend'
		            ,  'OTransition'      : 'oTransitionEnd otransitionend'
		            ,  'transition'       : 'transitionend'
		            }
		          , name

		        for (name in transEndEventNames){
		          if (el.style[name] !== undefined) {
		            return transEndEventNames[name]
		          }
		        }

		      }())

		      return transitionEnd && {
		        end: transitionEnd
		      }

	    })()


    			  // http://blog.alexmaccaw.com/css-transitions
		  $.fn.emulateTransitionEnd = function (duration) {
		    var called = false
		    var $el = this
		    $(this).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () { called = true })
		    var callback = function () { if (!called) $($el).trigger($.support.transition.end) }
		    setTimeout(callback, duration)
		    return this
		  }



		$('button.portfolioArrow').on('click', function() {
			var direction = $(this).attr('data-slide');
			var delta     = direction === 'prev' ? -1 : 1;
			var _isSliding = false;
			var duration = 600;

			var activeElement   = $(this).siblings("div.itemInner").find(".active")[0];
			var activeIndex = _getItemIndex(activeElement)
			var itemIndex = (activeIndex + delta) % _items.length

			var nextElement = _getItemByDirection(itemIndex)

			if (nextElement && $(nextElement).hasClass('active')) {
		        _isSliding = false
		        return
		      }

		      _isSliding = true

			//_setActiveIndicatorElement(nextElement) 페이징
			if(_isSliding){
				$(nextElement).addClass("next")
			  	$(activeElement).addClass("left")
	   			$(nextElement).addClass("left")
				
				$(activeElement).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					$(nextElement).removeClass("next left").addClass("active")
					$(activeElement).removeClass("active left")
					_isSliding = false
				}).emulateTransitionEnd(duration)
			}



		});

	};

})(jQuery);

$(document).ready(function(){
	$.fn.carousel();
});