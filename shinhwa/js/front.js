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

		var $topNavBg = $('.gnb_nav_bg');
		var $topNavSub = $('.nav_2nd');

		var _menuShowSpeed = 100;
		var heights = $topNavSub.map(function(){
			return $(this).outerHeight(true);
		}).get(),
		maxHeight = Math.max.apply(null, heights);
		//console.log(maxHeight)
		//$topNavSub.show();
		//$topNavBg.animate({height:maxHeight},_menuShowSpeed);
		 $('.nav_1st li.menu_list').hover(
		 	function(){
				//$(this).find('a.menu_link').addClass('on');
		 		$topNavBg.stop().show().animate({height:maxHeight},_menuShowSpeed);
		 		$topNavSub.show();
		 		$topNavSub.stop().animate({height:maxHeight},_menuShowSpeed);
		 	},function(){
				//$(this).find('a.menu_link').removeClass('on');
		 		$topNavBg.stop().hide().animate({height:0},_menuShowSpeed);
		 		$topNavSub.hide();
		 		$topNavSub.stop().animate({height:0},_menuShowSpeed);
		 	}
		 );
		
	}; // topMenu

	$.fn.subTitleEffect = function(){
		
		var $txtElm = $('.txt_fade_effect');

		$txtElm.each(function(index){
			var $_this = $(this);
			var basic = 300;
			var top = 80;
			var opacity = 70;
			var delay = basic*index;
			var position = top+(index * 30 );
			var opa_value = opacity + (index * 30 );
			$_this.stop().delay(delay).animate({opacity:opa_value, top:position},basic);
		});
	}; // subTitleEffect

	$(window).scroll(function() {
		var win = $(window);
		var winHeight = win.height();
		var scTop = $(this).scrollTop();
		//console.info(winHeight, scTop);
	});

})(jQuery);

$(document).ready(function(){
	$.fn.topMenu();
	$.fn.subTitleEffect();
});