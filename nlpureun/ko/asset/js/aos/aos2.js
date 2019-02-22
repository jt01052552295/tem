;(function($){
	$.fn.do_animate_scroll = function(){

		var x = {
            offset: 120,
            delay: 0,
            easing: "ease",
            duration: 400
        }

		this.each(function(){
			var _elm = this;
			var _e = $(this);
			var target = 0;

			var a = {
                duration: 	(_e.attr("data-sos-duration")) ? _e.attr("data-sos-duration") : x.duration,
                delay: 		(_e.attr("data-sos-delay")) ? _e.attr("data-sos-delay") : x.delay,
                offset: 	(_e.attr("data-sos-offset")) ? _e.attr("data-sos-offset") : x.offset
            }

            _e.attr("data-sos-duration", parseInt(a.duration))
            _e.attr("data-sos-delay", parseInt(a.delay))
            _e.attr("data-sos-offset", parseInt(a.offset))

	        for (var t = 0, n = 0; _elm && !isNaN(_elm.offsetLeft) && !isNaN(_elm.offsetTop); ) {
	            t += _elm.offsetLeft - ("BODY" != _elm.tagName ? _elm.scrollLeft : 0),
	            n += _elm.offsetTop - ("BODY" != _elm.tagName ? _elm.scrollTop : 0),
	            _elm = _elm.offsetParent;
	        }
	        target = n + parseInt(a.offset);

	        $( window ).scroll(function(){
	        	var scTop = $(this).scrollTop() + $( window ).innerHeight();
	        	scTop > target ? _e.addClass("sos-animate") : _e.removeClass("sos-animate");
	        })

	        

		});
		
	}; //do_animate_scroll

})(jQuery);

$(document).ready(function(){
	$("*[data-sos]").do_animate_scroll();

})