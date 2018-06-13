$(function () {

	$('.gnb_list').mouseenter(function () {
		//$('.main-sub-menu').slideDown();
	});
	//$('#container').mouseenter(function () {
		//subUp();
	//});
	//$('.gnb').mouseenter(function () {
		//subUp();
	//});

	$('.main-sub-menu').on("mouseleave", function(){
		$(this).stop().slideUp();	
		})

});
$(function () {
  $('#m_menu').click(function () {
    $('#m_menu_sub').slideToggle();
  });
  $('#m_menu_sub > li > span').click(function () {
    var next = $(this).next('ul');
    next.slideToggle();
  });
});
$('.mmenusub1').click(function () {
    $('#m_menu_sub').slideUp();
    return false;

    var cnt = 0 , page = "", ty = 0 , top = 0
	
	$(window).scroll(function(){
		if($(window).scrollTop() > 0)
		{
			$(".header_wrap").addClass("header_on");
		}
		else
		{
			$(".header_wrap").removeClass("header_on");
		}		
	});
  });
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
				//$(this).find('a.menu_link').addClass('on');
				if($('header').find('.header_wrap').hasClass('topPosition')){
					$('header').find('.header_wrap').addClass('active');
				}
				$(this).find('ul.subNavi').addClass('on');
		 		$topNavBg.stop().show().animate({height:maxHeight},_menuShowSpeed);
		 		$topNavSub.show();
		 		$topNavSub.stop().animate({height:maxHeight},_menuShowSpeed);
		 	}, function(){
				//$(this).find('a.menu_link').removeClass('on');
				if($('header').find('.header_wrap').hasClass('topPosition')){
					$('header').find('.header_wrap').removeClass('active');
				}
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

	$(window).scroll(function() {
		var win = $(window);
		var winHeight = win.height();
		var scTop = $(this).scrollTop();
		if(scTop == 0){
			$(".header_wrap").addClass("topPosition");
		} else {
			$(".header_wrap").removeClass("topPosition");
		}
		if(scTop > 0){
            $(".header_wrap").addClass("active");
        } else {
            $(".header_wrap").removeClass("active");
        }      


	});

})(jQuery);

$(document).ready(function(){
	$.fn.topMenu();
})
