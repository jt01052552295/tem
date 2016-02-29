$(function() {
	$('.con_content_mecha_a').hover(
		function(){
			$('.con_content_info', this).css({'display':'block'});
		},
		function(){
			$('.con_content_info', this).css({'display':'none'});
		}
	); // hover mask
	
	$.fn.topMenu = function(){
		var $topNavBg = $('.fd_sub_nav_bg');
		var $topNavSub = $('.fd_sub_nav_u');

		var _menuShowSpeed = 500;
		var heights = $topNavSub.map(function(){
			return $(this).outerHeight(true);
		}).get(),
		maxHeight = Math.max.apply(null, heights);

		$('.fd_nav_u li.fd_nav_l_2').hover(
			function(){
				$topNavBg.stop().animate({height:maxHeight},_menuShowSpeed);
				$topNavSub.show();
				$topNavSub.stop().animate({height:maxHeight},_menuShowSpeed);
			},function(){
				$topNavBg.stop().animate({height:0},_menuShowSpeed);
				$topNavSub.hide();
				$topNavSub.stop().animate({height:0},_menuShowSpeed);
			}
		);

		$('.nav_a').focus(function(){
			$topNavBg.animate({height:maxHeight},_menuShowSpeed);
			$topNavSub.slideDown(_menuShowSpeed);
			$topNavSub.animate({height:maxHeight},_menuShowSpeed);
		});
		$('.fd_nav_l_2 a:last').blur(function(){
			$topNavBg.animate({height:0},_menuShowSpeed);
			$topNavSub.slideUp(_menuShowSpeed);
			$topNavSub.animate({height:0},_menuShowSpeed);
		});

		$(window).scroll(function() {
			var scTop = $(this).scrollTop();

			var $topFixedNav = $('#topFixedNav');
        	var fixHeight = $('.fd_topFixMenu').outerHeight();

	        if(scTop >= fixHeight) {
	          $topFixedNav.addClass('fixedTopNav');        
	        } else {
	          $topFixedNav.removeClass('fixedTopNav');
	        }

		});

	}

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

    $('#fdnav_accord').dcAccordion({
        eventType: 'click',
        autoClose: true,
        saveState: true,
        disableLink: true,
        speed: 'slow',
        showCount: false,
        autoExpand: true,
        classExpand: 'dcjq-current-parent'
    });	

    $('.fa-bars').click(function () {
       $('#m_fd_nav').toggle();
    });

    $('.fd_tab_title a').click(
    	function () {
    		var $visible = $("#fd_tab").css("display");
       		var $_this_visible = $('#fd_tab');

       		if($visible == "none"){
       			$(this).addClass('active');
			   	$_this_visible.removeClass('hidden-xs');
			   	$_this_visible.removeClass('hidden-sm');
			   	$_this_visible.removeClass('hidden-md');
       			$_this_visible.addClass('visible-xs');
       			$_this_visible.addClass('visible-sm');
       			$_this_visible.addClass('visible-md');
			} else {
				$(this).removeClass('active');
			   	$_this_visible.removeClass('visible-xs');
			   	$_this_visible.removeClass('visible-sm');
			   	$_this_visible.removeClass('visible-md');
       			$_this_visible.addClass('hidden-xs');
       			$_this_visible.addClass('hidden-sm');
       			$_this_visible.addClass('hidden-md');
			}
    	}
    );
});

$(document).ready(function(){
	$("#fd_tab[data-tab-event]").tab();
	$.fn.topMenu();

	$('#ei-slider').eislideshow({
			animation			: 'slide',
			autoplay			: true,
			slideshow_interval	: 3000,
			titlesFactor		: 0
    });	//ei-slider
})