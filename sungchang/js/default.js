(function($){

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
						$(_tab).find("li.on").removeClass("on");
						$(e.target).parents("li").addClass("on");
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
	};
	
	$.initDough = function(){
		$(".tab_bar[data-tab-event]").tab();	
	};
	
})(jQuery);

$(document).ready(function(){
	$.initDough();
})

function overM(obj,num) { 
	var mtype = eval('mtype_' + num);
	mtype.style.display = 'block';
}
function outM(obj,num) {
	var mtype = eval('mtype_' + num);
	mtype.style.display = 'none';
}



$(function() {
	$('.b_item').hover(
		function(){
			$('.over_mask', this).css({'display':'block'});
		},
		function(){
			$('.over_mask', this).css({'display':'none'});
		}
	); // hover mask

	$('.best-thumb').hover(
		function(){
			$('.list-info', this).css({'display':'block'});
		},
		function(){
			$('.list-info', this).css({'display':'none'});
		}
	); // hover mask

	$('.list-thumb').hover(
		function(){
			$('.list-info', this).css({'display':'block'});
		},
		function(){
			$('.list-info', this).css({'display':'none'});
		}
	); // hover mask

	
	/* updown 버튼 애니메이션 */	
	$('.quick-up').click(function() {
		$('html, body').animate({
			scrollTop:0
		}, 500);
	});
	$('.quick-down').click(function() {
		var win = $(window);
		var scrollDown = $('#wrap').height();
		var footerScrollTop = $('#fd_footer').offset().top;
		var winHeight = win.height();


		if (winHeight < scrollDown) {
			$('html, body').animate({
				scrollTop:footerScrollTop
			}, 500);
		} else {
			$('html, body').animate({
				scrollTop:scrollDown
			}, 500);
		}
	});

});


$(document).ready(function(){
    $('#mainBanner').bxSlider({
		auto: true,
		slideMargin: 0,
		controls:false
    });

	$('#mainCarousel').bxSlider({
		auto: true,
		mode: 'vertical',
		minSlides: 3,
      maxSlides: 3,
      slideWidth: 300,
      slideMargin: 0,
      wrapperClass: 'carousel-wrapper',
	  nextSelector: '#slider-next',
	  prevSelector: '#slider-prev',
      pager: false
    });

	$('#nsBanner').bxSlider({
		auto: true,
		slideMargin: 0,
		wrapperClass: 'ns-wrapper',
		pager: true,
		controls:false
    });

	$('#npBanner').bxSlider({
		auto: true,
		slideMargin: 0,
		wrapperClass: 'np-wrapper',
		pager: true,
		controls:false
    });

    $(".selectyze").Selectyze({
		theme : 'grey',
		effectOpen : 'fade',
		effectClose : 'fade'
    });

    $('.chkDeg').jqTransform();
	
});


$(document).ready(function(){
	var chatAreaTop = $('#fixedquick').offset().top - 0;
	$(window).scroll(function(){
		var scrollTop = $(window).scrollTop();

		if(scrollTop >= chatAreaTop)
		{
			$('#fixedquick').addClass('fixed');
		}
		else
		{
			$('#fixedquick').removeClass('fixed');
		}
	});
});