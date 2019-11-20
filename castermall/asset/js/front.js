;(function($){

	$.fn.topMenu = function(){

		var $topNavBg = $('.subMenuBg');
		var $topNavSub = $('.subNavi');

		var _menuShowSpeed = 300;
		var heights = $topNavSub.map(function(){
			return $(this).outerHeight(true);
		}).get(),
		maxHeight = Math.max.apply(null, heights);	
	};



	$(window).scroll(function() {
		var win = $(window);
		var winHeight = win.height();
		var scTop = $(this).scrollTop();

		if(scTop > $("#main").offset().top){
			$("#message_box").addClass("m-fixed");
			$(".mainNav").addClass("m-fixed");
			$(".quickWrap").addClass("m-fixed");
		 	$(".subQuickMenu").addClass("m-fixed");
		} else {
			$("#message_box").removeClass("m-fixed");
			$(".mainNav").removeClass("m-fixed");
			$(".quickWrap").removeClass("m-fixed");
		    $(".subQuickMenu").removeClass("m-fixed");
				 
		}   


	});

})(jQuery);

$(document).ready(function(){
	var _scTop = $(this).scrollTop();
	$("#goToTop").on("click", function() {
		_scTop = 0;
		$("html, body").animate({scrollTop:_scTop}, '500');
		return false;
	});

})