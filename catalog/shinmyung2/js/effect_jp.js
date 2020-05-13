$(function() {



	var menus = [];
	var menuActive = function(menu){		

		if(menu>0){
			$(".topMenu > .menu-list > li.list > a").removeClass('active');
			$(".sub_menu").css("display","none");		
			switch (menu){
				case 1 :
					$(".topMenu > .menu-list > li.list > a[data-menu='topMenu1']").addClass('active');
					$(".sub_menu[data-menu='leftMenu1']").css("display","block");
					break;
				case 2 :case 3 :case 4 :case 5 :
					$(".topMenu > .menu-list > li.list > a[data-menu='topMenu2']").addClass('active');
					$(".sub_menu[data-menu='leftMenu2']").css("display","block");
					break;
				case 6 :case 7 :case 8 :case 9 :
					$(".topMenu > .menu-list > li.list > a[data-menu='topMenu3']").addClass('active');
					$(".sub_menu[data-menu='leftMenu3']").css("display","block");
					break;
				case 10 :case 11 :case 12 :case 13 :
					$(".topMenu > .menu-list > li.list > a[data-menu='topMenu4']").addClass('active');
					$(".sub_menu[data-menu='leftMenu4']").css("display","block");
					break;
				case 14 :case 15 :case 16 :case 17 :
					$(".topMenu > .menu-list > li.list > a[data-menu='topMenu5']").addClass('active');
					$(".sub_menu[data-menu='leftMenu5']").css("display","block");
					break;
				case 18 :case 19 :case 20 :
					$(".topMenu > .menu-list > li.list > a[data-menu='topMenu6']").addClass('active');
					$(".sub_menu[data-menu='leftMenu6']").css("display","block");
					break;
				
			}
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

	var naviActive = function(menu){
		$("#sm01").html('');
		$("#sm02").html('');
		$("h3#tit").html(''); 

		switch (menu){
			case 1 :case 2 :case 3 :case 4 :case 5 :case 6 :
				$("#sm01").html('ONE PIECE');
				$("h3#tit").html('ONE PIECE');
				$(".sub_title_bg.sub01").show();
				break;
			case 7 :case 8 :case 9 :case 10 :case 11 :
				$("#sm01").html('GARDIGAN');
				$("h3#tit").html('GARDIGAN');
					$(".sub_title_bg.sub02").show();
				break;
			case 12 :case 13 :case 14 :case 15 :case 16 :
				$("#sm01").html('COAT');
				$("h3#tit").html('COAT');
				$(".sub_title_bg.sub03").show();
				break;
			case 17 :case 18 :case 19 :
				$("#sm01").html('ETC');
				$("h3#tit").html('ETC');
				break;
			
		}
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
				var animatedFadeWidth = 'animated fadeOutWidth';
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
				if($('.page').eq(0).find('.aFadeDown')){
					$('.page').eq(0).find('.aFadeDown').addClass(animatedFadeDown).one(animatedEnd, function(){
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
				if($('.page').eq(0).find('.aFadeWidth')){
					$('.page').eq(0).find('.aFadeWidth').addClass(animatedFadeWidth).one(animatedEnd, function(){
						$(this).removeClass(animatedFadeWidth)
					});
				}
			},
			onSlideBefore: function (slide, oldIndex, newIndex) {
				var current = gallery_slide.getCurrentSlide();


				var animatedPulse = 'animated pulse';
				var animatedFade = 'animated fadeIn';			
				var animatedFadeUp = 'animated fadeInUp';
				var animatedFadeDown = 'animated fadeInDown';
				var animatedFadeLeft = 'animated fadeInLeft';
				var animatedFadeRight = 'animated fadeInRight';
				var animatedFadeWidth = 'animated fadeOutWidth';
				var animatedEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationend';

				if($('.sub_title').find('.aFade')){
					$('.sub_title').find('.aFade').addClass(animatedFade).one(animatedEnd, function(){
						$(this).removeClass(animatedFade)
					});
				}
				if($('.sub_title').find('.aFadeUp')){
					$('.sub_title').find('.aFadeUp').addClass(animatedFadeUp).one(animatedEnd, function(){
						$(this).removeClass(animatedFadeUp)
					});
				}
				if($('.sub_title').find('.aFadeDown')){
					$('.sub_title').find('.aFadeDown').addClass(animatedFadeDown).one(animatedEnd, function(){
						$(this).removeClass(animatedFadeDown)
					});
				}
				if($('.sub_title').find('.aFadeLt')){
					$('.sub_title').find('.aFadeLt').addClass(animatedFadeLeft).one(animatedEnd, function(){
						$(this).removeClass(animatedFadeLeft)
					});
				}
				if($('.sub_title').find('.aFadeRt')){
					$('.sub_title').find('.aFadeRt').addClass(animatedFadeRight).one(animatedEnd, function(){
						$(this).removeClass(animatedFadeRight)
					});
				}
				if($('.sub_title').find('.aFadeWidth')){
					$('.sub_title').find('.aFadeWidth').addClass(animatedFadeWidth).one(animatedEnd, function(){
						$(this).removeClass(animatedFadeWidth)
					});
				}




				// var vid = document.getElementById("movie"); 
				// if(current === 21){
				// 	vid.play(); 
				// } else {
				// 	vid.pause(); 
				// }


				if(current > 0){
					$('body').removeClass('mainBg').addClass('subBg')
					$('#catalog_content').addClass('sub')
					// $('.sub_menu').show();
					//$('.sub_title').show();
					// $('.mainBg').hide();
					//$('.intro_us').hide();

					//naviActive(current)
				} else {
					$('body').removeClass('subBg').addClass('mainBg')
					$('#catalog_content').removeClass('sub')
					// $('.sub_menu').show();
					//$('.sub_title').hide();
					// $('.mainBg').show();
					//$('.intro_us').show();

					
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