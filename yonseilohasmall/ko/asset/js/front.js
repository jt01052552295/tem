;(function($){

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
				$('header').addClass('bg');
				
				if($('header').find('.header_wrap').hasClass('topPosition')){
					//$('header').find('.header_wrap').addClass('active');
				}
				$(this).find('ul.subNavi').addClass('on');
		 		$topNavBg.stop().show().animate({height:maxHeight},_menuShowSpeed);
		 		$topNavSub.show();
		 		$topNavSub.stop().animate({height:maxHeight},_menuShowSpeed);
		 	}, function(){
				$(this).find('a.menu_link').removeClass('on');
				$('header').removeClass('bg');
				
				if($('header').find('.header_wrap').hasClass('topPosition')){
					//$('header').find('.header_wrap').removeClass('active');
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

		if(scTop > 0){
			// $("header").addClass("bg");
            //$(".header_wrap").addClass("active");
        } else {
        	// $("header").removeClass("bg");
            //$(".header_wrap").removeClass("active");
        }      


	});

})(jQuery);

$(document).ready(function(){
	//$.fn.topMenu();
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

    // $('.mName').on('click', function(e){
    // 	e.preventDefault();

    // 	var size = $(this).data('size');

    // 	if(size==1){
    // 		var href = $(this).attr('href');
    // 		location.href=href;
    // 	}

    //     if($(this).hasClass('on')){

    //     } else {

    //         $('.mName').removeClass('on').addClass('off');
    //         $(this).removeClass('off').addClass('on');
    //         $('.sub_menu').slideUp(200).css({'opacity':0});
    //         $(this).siblings('.sub_menu').slideDown(200).animate({opacity:1},200);
    //     }
    // });

    $('#sideToggle').on('click', function(e){
    	e.preventDefault();

    	$("#sideToggleWrap").toggleClass("on");
        $("body").toggleClass("on-side");

    	if($(this).hasClass('on')){

        } else {

        }

    });
    $("a.close-sideToggle").on("click", function(e){
        e.preventDefault();
        $("#sideToggleWrap").removeClass("on");
        $("body").removeClass("on-side");
    });  




    $(".subNav1st > .navi_dp1").hover(
		function(){
			var $topNavSub = $(this).find('a.dp1').siblings(".subNav2nd");
			var heights = $topNavSub.map(function(){
				return $(this).outerHeight(true);
			}).get(), maxHeight = Math.max.apply(null, heights);
			$topNavSub.show()
			$(this).addClass('active');
		},
		function(){
			var $topNavSub = $(this).find('a.dp1').siblings(".subNav2nd");
			$topNavSub.hide()
			$(this).removeClass('active');
		}
	);

	$('a.dp1').focus(
		function(){
			var $topNavSub = $(this).siblings(".subNav2nd");
			var heights = $topNavSub.map(function(){
				return $(this).outerHeight(true);
			}).get(), maxHeight = Math.max.apply(null, heights);
			$topNavSub.show()
			//$topNavSub.stop().animate({height:maxHeight}, 100);
			//$(this).addClass('active');
		}
	);

	$('.navi_dp2:last-child').focusout(
		function(){
			var $topNavSub = $(this).parent('ul.subNav2nd');
			$topNavSub.hide()
			//$topNavSub.stop().animate({height:0}, 100);
			$(this).parent('ul.subNav2nd').parent('.navi_dp1').removeClass('active');
		}
	);

	$('div.serviceBox a').on("click", function(e){
        e.preventDefault();

        if($(this).hasClass('on')){
        	$(this).removeClass('on')
        	$(this).find('span.arrow').removeClass('up').addClass('down')
	        $(this).find('div.con p').removeClass('block').addClass('origin')
        } else {
        	$(this).addClass('on')
	        $(this).find('span.arrow').removeClass('down').addClass('up')
	        $(this).find('div.con p').removeClass('origin').addClass('block')
	    }

         // $(this).find('div.con p').css({'display':'-webkit-box'});
    });  

});