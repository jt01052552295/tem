$(function() {
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

						var data_url = $(e.target).data('url');
						if(data_url){
							$('#bbs_more').attr('href', data_url);
						}

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
});

$(document).ready(function(){
	//$(".fd_cate_menu[data-tab-event]").tab();
	//$(".bbs_menu[data-tab-event]").tab();
	//$(".main_tab_cate[data-tab-event]").tab(); 
	$(".top1020_tab[data-tab-event]").tab();
});