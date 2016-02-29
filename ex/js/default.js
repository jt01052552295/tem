$(function() {

	$('.thumb').each(function(){
        var $_portInfo = $(this).find(".figure-overlay");
        var $_txt = $(this).find(".main-list-content a");

        $(this).css({'cursor':'pointer'});
        $(this).bind("mouseenter", function(event){
            $_portInfo.fadeIn(100);
            $_txt.css({'color':'#af2424'});
        });

        $(this).bind("mouseleave", function(event){
            $_portInfo.fadeOut(100);
            $_txt.css({'color':'#858585'});
        });

    });    

	var _messageBox  = $('#message_box');
	var _hideBanner  = getCookie('hideBanner');
	console.log(_hideBanner+"체크");

	if ( _hideBanner ) {
		_messageBox.css({ "display" : "none"});
	}
	$('#btn_message_box').click(
			function(){
				var topCheck = $( '#top_check' ).is(":checked");
				
				if ( topCheck ) {
					setCookie('hideBanner', 'true', 1);
				} 

				_messageBox.stop().animate({height:0}, 300);
			}
	);


	$.fn.transBanner = function(){
		var $_win_height = $(window).height();
		var $_dom_height = $(document).height();
		var $_right_banner = $('.right-fixed-banner');
		var $_btn_close = $('#btn-right-fixed-banner');
		var chatAreaTop = $_right_banner.offset().top - 0;

		$(window).scroll(function(){
			var scrollTop = $(window).scrollTop();
			var scrollBottom = $_dom_height - $_win_height - scrollTop;	
			var sum = scrollTop + chatAreaTop;
			var smallBanner = getCookie('smallBanner');
			if(!smallBanner){
				if($_dom_height < sum){
					$_right_banner.addClass('fixed');
					$_right_banner.removeClass('small');
				}else{
					$_right_banner.removeClass('fixed');
					$_right_banner.addClass('small');
				}
			} else {
				
				return false;
			}
		});
		$_btn_close.click(
			function(){
				var rightCheck = $( '#right-fixed-banner-chk' ).is(":checked");
				console.log(rightCheck+"체크");
				if ( rightCheck ) {
					setCookie('smallBanner', 'true', 1);
				} 

				$_right_banner.removeClass('fixed');
				$_right_banner.addClass('small');
			}
		);

	};//transBanner

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
		// var $topNavBg = $('.sub-menu-bg');
		var $topNavSub = $('.sub-menu-list');

		var _menuShowSpeed = 500;
		var heights = $topNavSub.map(function(){
			return $(this).outerHeight(true);
		}).get(),
		maxHeight = Math.max.apply(null, heights);

		$('.menu-list li.list').hover(
			function(){
				// $topNavBg.stop().animate({height:maxHeight},_menuShowSpeed);
				$(this).children('.sub-menu-list').show();
				$topNavSub.stop().animate({height:maxHeight},_menuShowSpeed);
			},function(){
				// $topNavBg.stop().animate({height:0},_menuShowSpeed);
				$(this).children('.sub-menu-list').hide();
				$topNavSub.stop().animate({height:0},_menuShowSpeed);
			}
		);

	} //topMenu

	$('#totalCateOpenBtn').toggle(
		function(){
			$('.total_cate').css({'display':'block'});
		}, function(){
			$('.total_cate').css({'display':'none'});
		}
	);

});//

$(document).ready(function(){
	$(".fd_area_menu[data-tab-event]").tab();
	$('.right-fixed-banner').transBanner();
	$('.fd-menu').topMenu();
	$('#wrap').pupslider({ stick: 'right', speed: 500, opacity: 0.9 });

})