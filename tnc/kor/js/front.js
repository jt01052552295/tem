;(function($){
	
	$.fn.tab = function(options){
		var _options = {
			trigger: (options && options.trigger) ? options.trigger : "click"
		};
		this.each(function(){
			var _tab = this;
			this._targetId = [];
			this._eventTrigger = ($(this).attr("data-tab-event")) ? $(this).attr("data-tab-event").toLowerCase() : _options.trigger;
			
			$(this).find("> li > a").each(function(){
				var thisId = $(this).attr("href");
				if(thisId.match(/^#/)){
					var eventHandler = function(e){
						e.preventDefault();
						$(_tab).find("li a.selected").removeClass("selected");
						$(e.target).addClass("selected");
						$(_tab._targetId.join(", ")).not(thisId).hide();
						$(thisId).show();
					};
					
					switch(_tab._eventTrigger){
						case "click": 
							$(this).click(function(e){
								eventHandler(e);
							});
							break;
						case "mouseover": 
							$(this).mouseover(function(e){
								eventHandler(e);
							});
							$(this).click(function(e){
								e.preventDefault();
							});
							break;
						default:
							break;
					}

					_tab._targetId.push(thisId);
				};
			});
		});
	}; //tab

	$.fn.topMenu = function(){

		var $topNavBg = $('.subMenuBg');
		var $topNavSub = $('.subNavi');

		var _menuShowSpeed = 100;
		var heights = $topNavSub.map(function(){
			return $(this).outerHeight(true);
		}).get(),
		maxHeight = Math.max.apply(null, heights);

		 $('.gnb_list li.nav1').hover(
		 	function(){
				$(this).find('a.menu_link').addClass('on');
				// if($('header').find('.header_wrap').hasClass('topPosition')){
				// 	$('header').find('.header_wrap').addClass('active');
				// }
				$(this).find('ul.subNavi').addClass('on');
		 		$topNavBg.stop().show().animate({height:maxHeight},_menuShowSpeed);
		 		$topNavSub.show();
		 		$topNavSub.stop().animate({height:maxHeight},_menuShowSpeed);
		 	}, function(){
				$(this).find('a.menu_link').removeClass('on');
				// if($('header').find('.header_wrap').hasClass('topPosition')){
				// 	$('header').find('.header_wrap').removeClass('active');
				// }
				$(this).find('ul.subNavi').removeClass('on');
		 		$topNavBg.stop().hide().animate({height:0},_menuShowSpeed);
		 		$topNavSub.hide();
		 		$topNavSub.stop().animate({height:0},_menuShowSpeed);
		 	}
		 );

		$('.menu_link').focus(
			function(){
				var html = $(this).html();
				$topNavBg.animate({height:maxHeight},_menuShowSpeed);
				$('header').find('.subMenuBg').show();
				$topNavSub.show();
				$topNavSub.animate({height:maxHeight},_menuShowSpeed);
			}
		);
		$('.subLink53').focusout(
			function(){
				var html = $(this).html();
				$topNavBg.animate({height:maxHeight},_menuShowSpeed);
				$('header').find('.subMenuBg').hide();
				$topNavSub.hide();
				$topNavSub.stop().animate({height:0},_menuShowSpeed);
			}
		);
		
	};




	var active_once=1;
	$.fn.scrollContent = function(){
		var scrollPos = $(document).scrollTop();
		var activePoint = parseInt($(window).height()-$(window).height()/4);
		var removePoint = parseInt(0);


		$('.scrollAnimate').each(function(e){
			var currLink = $(this)
			if (currLink.offset().top - activePoint <= scrollPos && currLink.offset().top + currLink.height()  > scrollPos + removePoint) {
				currLink.addClass("active");
			} else {
				if(active_once!=1 || active_once==null){
				currLink.removeClass("active");
				}
			}
		});

	};


	var scroll_active_once=1;
	$.fn.scrollMain = function(){
		var scrollPos = $(document).scrollTop();
		var activePoint = parseInt($(window).height()-$(window).height()/4);
		var removePoint = parseInt(0);


		$('.scrollOpacity').each(function(e){
			var currLink = $(this)
			if (currLink.offset().top - activePoint <= scrollPos && currLink.offset().top + currLink.height()  > scrollPos + removePoint) {
				currLink.addClass("active");
			} else {
				if(scroll_active_once!=1 || scroll_active_once==null){
				currLink.removeClass("active");
				}
			}
		});

	};


	var currentScroll=0;
	$(window).scroll(function() {
	    var wScroll = $(this).scrollTop();   
	    var currentScroll = $(this).scrollTop();

		$.fn.scrollContent();
		$.fn.scrollMain();

	    var heights = $('header').map(function(){
			return $(this).outerHeight(true);
		}).get();

	    if(wScroll > 107){
	        $('.leftQuick').addClass('m-fixed');
	    }else{
	        $('.leftQuick').removeClass('m-fixed');
	    } 
	});


	$(window).scroll(function() {
		var win = $(window);
		var winHeight = win.height();
		var scTop = $(this).scrollTop();
		//if(scTop == 0){
			//$(".header_wrap").addClass("topPosition");
		//} else {
			//$(".header_wrap").removeClass("topPosition");
		//}
		if(scTop > 0){
			$('header').addClass('m-fixed');
            $(".header_wrap").addClass("active");
        } else {
        	$('header').removeClass('m-fixed');
            $(".header_wrap").removeClass("active");
        }      


	});

})(jQuery);

$(document).ready(function(){
	$.fn.topMenu();
	$.fn.scrollContent();
	$('.goToMain').click(function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        $('html, body').animate({scrollTop : 0}, 400);
    });	
})

$(function () {
      $('#m_menu').click(function (e) {
        e.preventDefault();
        $('.m_menu_wrap').fadeIn();
      });
      $('.btn-x, .dim').click(function (e) {
        e.preventDefault();
        $('.m_menu_wrap').fadeOut();
      });

    $('.sub_menu:eq(0)').show();

    $('.mName').on('click', function(e){
    		e.preventDefault();
        if($(this).hasClass('on')){

        } else {
            $('.mName').removeClass('on').addClass('off');
            $(this).removeClass('off').addClass('on');
            $('.sub_menu').slideUp(200).css({'opacity':0});
            $(this).siblings('.sub_menu').slideDown(200).animate({opacity:1},200);
        }
    });
});