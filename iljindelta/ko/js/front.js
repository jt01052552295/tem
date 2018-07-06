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

		    var header = $('#header');
            var head = $('.head');
            var nav = $('.nav');

            var $topNavBg = $('.subMenuBg');
            var $topNavSub = $('.subNavi');


            var _menuShowSpeed = 100;
            var heights = $topNavSub.map(function(){
                return $(this).outerHeight(true);
            }).get(),
            maxHeight = Math.max.apply(null, heights);

			// $topNavBg.stop().show().animate({height:maxHeight},_menuShowSpeed);
   //          $topNavSub.show();
   //          $topNavSub.stop().animate({height:maxHeight},_menuShowSpeed);
         
            $(document).on({
                mouseenter: function(){

                    $topNavBg.stop().show().animate({height:maxHeight},_menuShowSpeed);
                    $topNavSub.show();
                    $topNavSub.stop().animate({height:maxHeight},_menuShowSpeed);
                },
                mouseleave: function(){


                    $topNavBg.stop().hide().animate({height:0},_menuShowSpeed);
                    $topNavSub.hide();
                    $topNavSub.animate({height:0},_menuShowSpeed);
                }
            }, '.nav');

            

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


	var currentScroll=0;
	$(window).scroll(function() {
	    var wScroll = $(this).scrollTop();   
	    var currentScroll = $(this).scrollTop();
	});


	$(window).scroll(function() {
		var win = $(window);
		var winHeight = win.height();
		var scTop = $(this).scrollTop();



	});

})(jQuery);

$(document).ready(function(){
	$.fn.topMenu();
	$('.goToMain').click(function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        $('html, body').animate({scrollTop : 0}, 400);
    });	

    $(".lang_nemo a").hover(function(){
        $(".lang_nemo a").removeClass('lang_active');
        $(this).addClass('lang_active');
    },function(){
        $(".lang_nemo a").removeClass('lang_active');
        $(".curr_lang").addClass('lang_active');
    });
    $("#lang_bg").click(function(){
        $(this).fadeOut();
    });

    $("#lang_btn").click(function(){
        $("#lang_bg").fadeIn();
    })

	$("a.openMovieLayer").click(function(e){
    	e.preventDefault();
    	$(".videoBg").fadeIn();
    });
    $(".videoBg, a.closeBtn").click(function(e){
    	e.preventDefault();
    	$('#youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
        $(".videoBg").fadeOut();
    }); 

})



$(function () {

});