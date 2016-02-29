$(function() {

	$.fn.topMenu = function(){
		var $topNavBg = $('.sub-menu-bg');
		var $topNavSub = $('.sub-menu-list');

		var _menuShowSpeed = 500;
		var heights = $topNavSub.map(function(){
			return $(this).outerHeight(true);
		}).get(),
		maxHeight = Math.max.apply(null, heights);

		$('.menu-list li.list').hover(
			function(){
				$topNavBg.stop().animate({height:maxHeight},_menuShowSpeed);
				$(this).children('.sub-menu-list').show();
				$topNavSub.stop().animate({height:maxHeight},_menuShowSpeed);
			},function(){
				$topNavBg.stop().animate({height:0},_menuShowSpeed);
				$(this).children('.sub-menu-list').hide();
				$topNavSub.stop().animate({height:0},_menuShowSpeed);
			}
		);

	}

	$(".selectyze").Selectyze({
		theme : 'grey',
		effectOpen : 'fade',
		effectClose : 'fade'
    });


});

$(document).ready(function(){
	// $.fn.topMenu();

})