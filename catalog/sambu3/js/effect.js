$(function() {


	var menuActive = function(menu){

		$(".topMenu > .menu-list > li.list > a").removeClass('active');
		$(".sub_menu").css("display","none");

		switch (menu){
			case 1 :case 2 :case 3 :case 4 :case 5 :
				$(".topMenu > .menu-list > li.list > a[data-menu='topMenu1']").addClass('active');
				$(".sub_menu[data-menu='leftMenu1']").css("display","block");
				break;
			case 6 :
				$(".topMenu > .menu-list > li.list > a[data-menu='topMenu2']").addClass('active');
				$(".sub_menu[data-menu='leftMenu2']").css("display","block");
				break;
			case 7 :case 8 :case 9 :
				$(".topMenu > .menu-list > li.list > a[data-menu='topMenu3']").addClass('active');
				$(".sub_menu[data-menu='leftMenu3']").css("display","block");
				break;
			case 10 :case 11 :case 12 :case 13 :case 14 :case 15 :
				$(".topMenu > .menu-list > li.list > a[data-menu='topMenu4']").addClass('active');
				$(".sub_menu[data-menu='leftMenu4']").css("display","block");
				break;	
			case 16 :case 17 :case 18 :case 19 :case 20 :case 21 :
				$(".topMenu > .menu-list > li.list > a[data-menu='topMenu5']").addClass('active');
				$(".sub_menu[data-menu='leftMenu5']").css("display","block");
				break;	
			
				
		}

		$('.sub_menu li').find('a').removeClass('on')
		$('.sub_menu li').each(function(index, item){
			index=index+1;
			if(menu===index){
				var this_text = $(this).text();
				$(this).find('a').addClass('on');
			}
		})
	};

	$('.topMenu .menu-list li.list a').on('mouseenter focusin', function(){
		var menu = parseInt($(this).attr('data-slide-index'));
		menuActive(menu)
	});
	$('.topMenu .menu-list li.list a').on('mouseleave focusout', function(){

	});

	$('div.sub_menu a').on('click', function(e){
		e.preventDefault();
		$('div.sub_menu a').removeClass('on');
		$(this).addClass('on');
		$(this).parent().removeClass('active')
		$(this).parent().siblings().removeClass('active')
		$(this).parent().addClass('active')
	});


	var gallery_slide;
	var thumbAreaSlider;

	var gallery_settings = function() {

		//$(".movie_con").fitVids();

		var settingsBig = {
			mode:'fade',
			pager:false,
			auto:false,
			controls:false,
			ariaLive: false,
    		ariaHidden: false,
    		touchEnabled: false,
		    oneToOneTouch: false,
		    preventDefaultSwipeX: false,
		    slideSelector: '.page',
			wrapperClass: 'gallery-wrapper',
			adaptiveHeight: false,
			autoControls: false,
			infiniteLoop:true,
			onSliderLoad: function(){
				var animatedPulse = 'animated pulse';
				var animatedFade = 'animated fadeIn';			
				var animatedFadeUp = 'animated fadeInUp';
				var animatedFadeDown = 'animated fadeInDown';
				var animatedFadeLeft = 'animated fadeInLeft';
				var animatedFadeRight = 'animated fadeInRight';
				var animatedEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationend';
				if($('.page').eq(0).find('.aFade')){
					$('.page').eq(0).find('.aFade').addClass(animatedFade).one(animatedEnd, function(){
						$(this).removeClass(animatedFade)
					});
				}
				if($('.page').eq(0).find('.aFadeUp')){
					$('.page').eq(0).find('.aFadeUp').addClass(animatedFadeUp).one(animatedEnd, function(){
						$(this).removeClass(animatedFadeUp)
					});
				}
				if($('.page').eq(0).find('.aFadeDn')){
					$('.page').eq(0).find('.aFadeDn').addClass(animatedFadeDown).one(animatedEnd, function(){
						$(this).removeClass(animatedFadeDown)
					});
				}
				if($('.page').eq(0).find('.aFadeLt')){
					$('.page').eq(0).find('.aFadeLt').addClass(animatedFadeLeft).one(animatedEnd, function(){
						$(this).removeClass(animatedFadeLeft)
					});
				}
				if($('.page').eq(0).find('.aFadeRt')){
					$('.page').eq(0).find('.aFadeRt').addClass(animatedFadeRight).one(animatedEnd, function(){
						$(this).removeClass(animatedFadeRight)
					});
				}
			},
			onSlideBefore: function (slide, oldIndex, newIndex) {
				var current = gallery_slide.getCurrentSlide();




				// var vid = document.getElementById("movie"); 
				// if(current === 21){
				// 	vid.play(); 
				// } else {
				// 	vid.pause(); 
				// }


				if(current > 0){
					$('body').removeClass('mainBg').addClass('subBg')
					$('#catalog_content').addClass('sub')
					//$('.main_bt').hide();

					// $('.mainArrow').show();
				} else {
					$('body').removeClass('subBg').addClass('mainBg')
					$('#catalog_content').removeClass('sub')
					//$('.main_bt').show();

					// $('.mainArrow').hide();
				}

				menuActive(current)



				

			},
		};


		return settingsBig;

	}

	
	gallery_slide = $('.sliderWrap').bxSlider(gallery_settings());

	$(".prevContent > a").on('click', function(e){
		e.preventDefault();
		gallery_slide.goToPrevSlide();
	});
	$(".nextContent > a").on('click', function(e){
		e.preventDefault();
		gallery_slide.goToNextSlide();
	});

	$(".thumbA1").on('click', function(e){
		e.preventDefault();

		var newIndex= parseInt($(this).data("slide-index"));
		gallery_slide.goToSlide(newIndex);
	});


	$("a.thumbA").click(function(e){
			e.preventDefault();
			var newIndex= parseInt($(this).attr("data-slide-index"));

			var animatedFlash = 'animated bounce';
			var animatedTada = 'animated tada';
			var animatedRubberBand = 'animated rubberBand';
			var animatedLightSpeedIn = 'animated lightSpeedIn';
			var animatedSlideInUp = 'animated slideInUp';
			var animatedPulse = 'animated pulse';
			var animatedShake = 'animated shake';
			var animatedEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationend';

			if($('.page').eq(newIndex).find('.aPulse')){
				$('.page').eq(newIndex).find('.aPulse').addClass(animatedPulse).one(animatedEnd, function(){
					$(this).removeClass(animatedPulse)
				});
			}
			if($('.page').eq(newIndex).find('.aShake')){
				$('.page').eq(newIndex).find('.aShake').addClass(animatedShake).one(animatedEnd, function(){
					$(this).removeClass(animatedShake)
				});
			}
			if($('.page').eq(newIndex).find('.aSliUp')){
				$('.page').eq(newIndex).find('.aSliUp').addClass(animatedSlideInUp).one(animatedEnd, function(){
					$(this).removeClass(animatedSlideInUp)
				});
			}

			gallery_slide.goToSlide(newIndex);
	});

	





	
	
});