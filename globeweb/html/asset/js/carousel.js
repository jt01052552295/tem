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


		$('button.portfolioArrow').on('click', function() {
			var direction = $(this).attr('data-slide');
			var delta     = direction === 'prev' ? -1 : 1;
			var _isSliding = true;
			var duration = 600;

			var activeElement   = $(this).siblings("div.itemInner").find(".active")[0];
			var activeIndex = _getItemIndex(activeElement)
			var itemIndex = (activeIndex + delta) % _items.length
			var nextElement = _getItemByDirection(itemIndex)

			if (nextElement && $(nextElement).hasClass('active')) { _isSliding = false; return; }

			//_setActiveIndicatorElement(nextElement) 페이징
			if(_isSliding){
				
				$(nextElement).addClass("next")
			 
	   			setTimeout(function() {
				   	$(activeElement).addClass("left")
	   				$(nextElement).addClass("left")
				}, 0);

				
				
				
				// $(activeElement).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				// 	console.log($(activeElement).find('img').attr('src'))
				// 	console.log($(nextElement).find('img').attr('src'))

				// 	$(nextElement).removeClass("next left").addClass("active")
				// 	$(activeElement).removeClass("active left")
					
				// 	_isSliding = false
				// })



				// 트랜지션X
				// $(activeElement).removeClass("active")
	   // 			$(nextElement).addClass("active")
			}



		});

	};

})(jQuery);

$(document).ready(function(){
	$.fn.carousel();
});