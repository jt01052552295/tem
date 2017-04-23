$(document).ready(function($){
	var topMenu = $('.menu');

//	$('.depth1 a').click(function() {
//		if(topMenu.attr("isOpen")=="1"){
//			topMenu.attr("isOpen","0");
//			$('.depth1 a').removeClass('active');
//			$('.depth1 ul').stop().animate({height:0},300);
//		} else {
//			topMenu.attr("isOpen","1");
//			$('.depth1 a').addClass('active');
//			$('.depth1 ul').stop().animate({height:238},300);
//		
//		}
//	});
	$('.menu').hover(function() {
		if(topMenu.attr("isOpen")=="1"){
			topMenu.attr("isOpen","0");
			$('.depth1 a').removeClass('active');
			$('.depth1 ul').stop().animate({height:0},300);
		} else {
			topMenu.attr("isOpen","1");
			$('.depth1 a').addClass('active');
			$('.depth1 ul').stop().animate({height:238},300);
		
		}
	});
});

///접근성에 맞는 탭방식
(function($){
	$(document).ready(function(){
		var Tab1 = $(".notice-box");
		var Tab2 = $(".announce-box");
		
		$('.notice-box .latest-title a').click(function(){
			
			if (Tab1.attr("isOpen")=="0") {
				Tab1.attr("isOpen","1");
				Tab2.attr("isOpen","0");
				$('.notice-box').addClass('selected');
				$('.announce-box').removeClass('selected');
				
			} else {
				Tab1.attr("isOpen","0");
				Tab2.attr("isOpen","1");
				$('.notice-box').removeClass('selected');
				$('.announce-box').addClass('selected');
				
			}
		});
		
		$('.announce-box .latest-title a').click(function(){
			
			if (Tab2.attr("isOpen")=="0") {
				Tab1.attr("isOpen","0");
				Tab2.attr("isOpen","1");
				$('.notice-box').removeClass('selected');
				$('.announce-box').addClass('selected');
				
			} else {
				Tab1.attr("isOpen","1");
				Tab2.attr("isOpen","0");
				$('.notice-box').addClass('selected');
				$('.announce-box').removeClass('selected');
				
			}
		});
	});
	
})(window.jQuery);