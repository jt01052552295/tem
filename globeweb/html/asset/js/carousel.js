;(function($){

	$.fn.carousel = function(){

		const TRANSITION_DURATION = 600;
		const Direction = {
		    NEXT     : 'next',
		    PREV     : 'prev',
		    LEFT     : 'left',
		    RIGHT    : 'right'
		}
		const ClassName = {
		    ACTIVE   : 'active',
		    RIGHT    : 'right',
		    LEFT     : 'left',
		    NEXT     : 'next',
		    PREV     : 'prev',
		    ITEM     : 'item'
		}

		var _items = [];
		function _getItemIndex(element) {
	      _items = $.makeArray($(element).parent().find('.item'))
	      return _items.indexOf(element)
	    }

	    function _getItemByDirection(direction, activeElement){
	    	const isNextDirection = direction === Direction.NEXT
      		const isPrevDirection = direction === Direction.PREV
      		const activeIndex     = _getItemIndex(activeElement)

      		const lastItemIndex   = _items.length - 1
      		const isGoingToWrap   = isPrevDirection && activeIndex === 0 || isNextDirection && activeIndex === lastItemIndex

      		console.log(isGoingToWrap, activeIndex)
      		

		    const delta     = direction === Direction.PREV ? -1 : 1
      		const itemIndex = (activeIndex + delta) % _items.length;

      		if (isGoingToWrap) {
		        return activeElement
		    }

	    	return itemIndex === -1 ? _items[_items.length - 1] : _items[itemIndex]
	    }



		$('button.portfolioArrow').on('click', function() {
			var direction = $(this).attr('data-slide');
			var delta     = direction === 'prev' ? -1 : 1;
			var _isSliding = true;		

			var activeElement   = $(this).siblings("div.itemInner").find(".active")[0];
			var nextElement = activeElement && _getItemByDirection(direction, activeElement)


			// console.log('-------------------------------nextElement----------------------------------------')
			// console.log(nextElement)
			// console.log('-------------------------------nextElement----------------------------------------')

			let directionalClassName
			let orderClassName
			let eventDirectionName

			if (direction === Direction.NEXT) {
				directionalClassName = ClassName.LEFT
				orderClassName = ClassName.NEXT
				eventDirectionName = Direction.LEFT
			} else {
				directionalClassName = ClassName.RIGHT
				orderClassName = ClassName.PREV
				eventDirectionName = Direction.RIGHT
			}


			if (nextElement && $(nextElement).hasClass(ClassName.ACTIVE)) { console.log('stop1'); _isSliding = false; return; }
			if (!activeElement || !nextElement) { console.log('stop2'); return; }

			_isSliding = true;

			//_setActiveIndicatorElement(nextElement) 페이징
			if(_isSliding){
				
				$(nextElement).addClass(orderClassName)
			 
	   			setTimeout(function() {
				   	$(activeElement).addClass(directionalClassName)
	   				$(nextElement).addClass(directionalClassName)
				}, 0);
				
				$(activeElement).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					// setTimeout(function() {
						$(nextElement).removeClass(directionalClassName+' '+orderClassName).addClass(ClassName.ACTIVE)
						$(activeElement).removeClass(ClassName.ACTIVE+' '+orderClassName+' '+directionalClassName)					
					// }, 0); 
					_isSliding = false
				})

				// 트랜지션X
				// $(activeElement).removeClass(ClassName.ACTIVE)
	   // 			$(nextElement).addClass(ClassName.ACTIVE)
			}



		});

	};

})(jQuery);

$(document).ready(function(){
	$.fn.carousel();
});