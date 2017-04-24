$(function() {
	//상단메뉴 이벤트
	$.fn.topMenu = function(){
		var $topNavSub = $('.gnbM2');

		var _menuShowSpeed = 100;
		var heights = $topNavSub.map(function(){
			return $(this).outerHeight(true);
		}).get(),
		maxHeight = Math.max.apply(null, heights);


		$('.gnbM1').hover(
			function(){
				$(this).children('.gnbM2').show();
				//$topNavSub.stop().animate({height:118},_menuShowSpeed);
			},function(){
				// $topNavBg.stop().animate({height:0},_menuShowSpeed);
				$(this).children('.gnbM2').hide();
				//$topNavSub.stop().animate({height:0},_menuShowSpeed);
			}
		);
	}

});

$(document).ready(function(){
	//$.fn.topMenu();
});


