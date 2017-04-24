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

	$.fn.viewOverLay = function(){
		var $elm = $('.view_overlay');
		
		$elm.each(function(){
			var $overlay = $(this).find('.figure-overlay');
			$(this).hover(
				function(){
					$overlay.css({"opacity":"0", "display":"block" }).show().animate({opacity:0.8}, 500);
				},
				function(){
					$overlay.css({"opacity":"0.8", "display":"block" }).hide().animate({opacity:0}, 500);
				}
			);
		});
	
	}; // viewOverLay



	$(window).scroll(function() {
		var win = $(window);
		var winHeight = win.height();
		var wScroll = $(this).scrollTop();	

		//if(wScroll > 0){
			//$('.sub_wrap').addClass('m-fixed');
			//$('.header').addClass('m-fixed');
			//$('.sidebar').addClass('m-fixed');
		//}else{
			//$('.sub_wrap').removeClass('m-fixed');
			//$('.header').removeClass('m-fixed');
			//$('.sidebar').removeClass('m-fixed');
		//} 
	});


})(jQuery);

$(document).ready(function(){
	$.fn.viewOverLay();

	$('.snav_list > a.on').on('click', function(e){
		e.preventDefault();
		$(this).siblings().toggle();
	});

});