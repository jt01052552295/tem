(function($) {	
	var jQuery = $;


	$.fn.checkScroll = function(scrollTop, scrollBottom, wH){
		var $p = $("#chkScroll");eTrigger
		$p.html( scrollTop + " | " + scrollBottom + " | " + wH );
		var $e = $("#eTrigger").offset().top;
		console.info($e)

	};

}(jQuery3_3_1));

jQuery3_3_1(document).ready(function($){
	var jQuery = $;

	console.log('%c Parallax 작업 중... ', 'color: #bada55; font-size:3.0em;');

	$('body').addClass('page-overview').addClass('ac-gn-current-iphone').addClass('theme-dark');
	
	window.setTimeout(function(){
		$('.ribbon').removeClass('ribbon-hide');
	}, 1000);

	var scrollTop, 
		bottomScroll, 
		wH,
		$window,
		anim = {};

	$window = $(window);
	wH = $window.height();

	$window.scroll(function() {
		scrollTop 	 = $window.scrollTop();  
		bottomScroll = scrollTop + wH;
		$.fn.checkScroll( scrollTop, bottomScroll, wH );
	});
	$window.resize(function(){
		wH = $window.height();
	});
});