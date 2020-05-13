$(document).ready(function($) {
	$( '#content_detail' ).sliderPro({
		width: 950,
		height: 640,
		orientation: 'horizontal',
		loop: false,
		arrows: true,
		touchSwipe: false,
		reachVideoAction:'playVideo',
		leaveVideoAction:'stopVideo',
		buttons: false,
		autoplay: false,
		gotoSlide: function( event ) {
			var current_slide = event.index;

			var animatedFlash = 'animated bounce';
			var animatedTada = 'animated tada';
			var animatedRubberBand = 'animated rubberBand';
			var animatedLightSpeedIn = 'animated lightSpeedIn';
			var animatedSlideInUp = 'animated slideInUp';
			var animatedPulse = 'animated pulse';
			var animatedShake = 'animated shake';
			var animatedEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationend';


			if($('.sp-slide').eq(current_slide).find('.aPulse')){
				$('.sp-slide').eq(current_slide).find('.aPulse').addClass(animatedPulse).one(animatedEnd, function(){
					$(this).removeClass(animatedPulse)
				});
			}
			if($('.sp-slide').eq(current_slide).find('.aShake')){
				$('.sp-slide').eq(current_slide).find('.aShake').addClass(animatedShake).one(animatedEnd, function(){
					$(this).removeClass(animatedShake)
				});
			}

			if($('.sp-slide').eq(current_slide).find('.abounce')){
				$('.sp-slide').eq(current_slide).find('.abounce').addClass(animatedFlash).one(animatedEnd, function(){
					$(this).removeClass(animatedFlash)
				});
			}

			if($('.sp-slide').eq(current_slide).find('.atada')){
				$('.sp-slide').eq(current_slide).find('.atada').addClass(animatedTada).one(animatedEnd, function(){
					$(this).removeClass(animatedTada)
				});
			}

			if($('.sp-slide').eq(current_slide).find('.arubberBand')){
				$('.sp-slide').eq(current_slide).find('.arubberBand').addClass(animatedRubberBand).one(animatedEnd, function(){
					$(this).removeClass(animatedRubberBand)
				});
			}

			if($('.sp-slide').eq(current_slide).find('.alightSpeedIn')){
				$('.sp-slide').eq(current_slide).find('.alightSpeedIn').addClass(animatedLightSpeedIn).one(animatedEnd, function(){
					$(this).removeClass(animatedLightSpeedIn)
				});
			}

			if($('.sp-slide').eq(current_slide).find('.aslideInUp')){
				$('.sp-slide').eq(current_slide).find('.aslideInUp').addClass(animatedSlideInUp).one(animatedEnd, function(){
					$(this).removeClass(animatedSlideInUp)
				});
			}

		},
	});
	
	// 상단메뉴 클릭 -> 해당 레프트메뉴 첫 슬라이드 이동
	$( '.tmenu > a' ).on( 'click', function( event ) {
		event.preventDefault();
		$(".tmenu > a").removeClass("active");
		$(this).addClass("active");
		var showLeftMenu = $(this).data( "menu" );

		$(".sp-thumbnail").css("display","none");
		$(".sp-thumbnail").parent( ".sp-thumbnail-container" ).css("display","none");				
		$("."+showLeftMenu).css("display","block");
		$("."+showLeftMenu).parent( ".sp-thumbnail-container" ).css("display","block");
		
		var go_index = $("."+showLeftMenu).first().children('a').data("role");


		$( '#content_detail' ).sliderPro( 'gotoSlide', go_index );		
	});


	// 레프트메뉴 클릭 -> 해당 슬라이드 이동
	$( '.sp-thumbnail a' ).on( 'click', function( event ) {
		event.preventDefault();
		var go_index = $(this).data( "role" );
		$( '#content_detail' ).sliderPro( 'gotoSlide', go_index );
	});



	// 슬라이드 활성화
	$( '#content_detail' ).on( 'gotoSlide', function( event ) {
		var current_slide = event.index;
		//console.log(current_slide);
		$('.sp-thumbnail a').removeClass('active')
		for(var i=0; i<$('.sp-thumbnail a').length; i++){
			if( i ==  current_slide) {
				$('.sp-thumbnail a').eq(i).addClass('active');
			}
		}

		for(var i=0; i<$('.sp-slide').length; i++){
			if( i ==  current_slide) {
				var active_menu =$('.sp-slide').eq(i).data('menu');		
				//console.log(active_menu)

				$(".sp-thumbnail").css("display","none");
				$(".sp-thumbnail").parent( ".sp-thumbnail-container" ).css("display","none");				
				$("."+active_menu).css("display","block");
				$("."+active_menu).parent( ".sp-thumbnail-container" ).css("display","block");
		
				$(".tmenu > a.btn").removeClass("active");
				$('.tmenu > a#'+active_menu).addClass('active')
			}
		}

		// var active_menu = $('.sp-slide').eq(current_slide).data('menu');
		// $(".tmenu > a").removeClass("active");
		// $(".tmenu > a"+"."+active_menu).addClass("active");
		

	});


	// 처음실행시, 레프트메뉴 초기화 
	for(var i=2; i<=$( '.tmenu > a' ).length; i++){
		$(".leftMenu"+i).css("display","none");
		$(".leftMenu"+i).parent(".sp-thumbnail-container" ).css("display","none");
	}
	$(".leftMenu1").css("display","block");
	$(".leftMenu1").parent(".sp-thumbnail-container" ).css("display","block");

});