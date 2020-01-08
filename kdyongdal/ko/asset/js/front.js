;(function($){

	$.fn.topMenu = function(){

		var $topNavBg = $('.subMenuBg');
		var $topNavSub = $('.subNavi');

		var _menuShowSpeed = 300;
		var heights = $topNavSub.map(function(){
			return $(this).outerHeight(true);
		}).get(),
		maxHeight = Math.max.apply(null, heights);

		 $('#gnbnav li.nav1').hover(
		 	function(){
				//$(this).find('a.menu_link').addClass('on');
				//$('header').addClass('bg');
				if($('header').find('.header_wrap').hasClass('topPosition')){
					//$('header').find('.header_wrap').addClass('active');
				}
				
				// $topNavSub.show();			
		 	// 	$topNavSub.stop().animate({height:maxHeight},_menuShowSpeed);
		 	// 	$topNavBg.stop().show().animate({height:maxHeight},_menuShowSpeed);

		 	}, function(){
		 	// 	$topNavSub.hide();
				// $topNavSub.stop().animate({height:0},_menuShowSpeed);
		 	// 	$topNavBg.stop().hide().animate({height:0},_menuShowSpeed);

		 	}
		 );
		 // $('#gnbnav').hover(
		 // 	function(){
			// 	$('#header_overlay').fadeIn(150);
		 // 	}, function(){
			// 	$('#header_overlay').fadeOut(150);
		 // 	}
		 // );

		// $('.menu_link').focus(
		// 	function(){
		// 		var html = $(this).html();
		// 		//$topNavBg.animate({height:maxHeight},_menuShowSpeed);
		// 		//$('header').find('.subMenuBg').show();
		// 		//$topNavSub.show();
		// 		//$topNavSub.animate({height:maxHeight},_menuShowSpeed);
		// 	}
		// );
		// $('.subLink53').focusout(
		// 	function(){
		// 		var html = $(this).html();
		// 		//$topNavBg.animate({height:maxHeight},_menuShowSpeed);
		// 		//$('header').find('.subMenuBg').hide();
		// 		//$topNavSub.hide();
		// 		//$topNavSub.stop().animate({height:0},_menuShowSpeed);
		// 	}
		// );
		
	};


	

	$(window).scroll(function() {
		var win = $(window);
		var winHeight = win.height();
		var scTop = $(this).scrollTop();

		if(scTop > 0){

			// $("#header").addClass("m-fixed");
		    //$(".header_wrap").addClass("active");
        } else {
        	// $("#header").removeClass("m-fixed");
            //$(".header_wrap").removeClass("active");
        }



	});

	$.fn.scMenu = function(){
		var $_section1 	= $('#service_section').offset().top;
		var $_section2 	= $('#car_section').offset().top;
		var $_section3 	= $('#inquiry_section').offset().top;
		var $_section4 	= $('#price_section').offset().top;
		var $_section5 	= $('#ban_section').offset().top;


		$('.linkA').on('click', function(e){
			e.preventDefault();
			var href = $(this).attr('data-href');

			switch (href){
                case 'service': $('html, body').animate({scrollTop : $_section1}, 400); break;
                case 'car': 	$('html, body').animate({scrollTop : $_section2}, 400); break;
                case 'inquiry': $('html, body').animate({scrollTop : $_section3}, 400); break;
                case 'price': 	$('html, body').animate({scrollTop : $_section4}, 400); break;
                case 'ban': 	$('html, body').animate({scrollTop : $_section5}, 400); break;
            }

		});

	};

})(jQuery);

$(document).ready(function(){
	$.fn.topMenu();
	$.fn.scMenu();

	$('#message_box_close_btn').on('click', function(e){
		e.preventDefault();
		$('#message_box').slideUp('fast')
	});

	// 전체 메뉴
	$("#totalMenu").click(function(){
		$(".total_menu_contain").fadeIn();
		// $(".total_menu_contain").css("height", $(document).height() );
	});

	$(".total_menu_close").click(function(){
		$(".total_menu_contain").fadeOut();
	});


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


    $("#lang_btn").click(function(e){
    	e.preventDefault();
        $(".lang_sub").slideToggle();
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




 //    $(".subNav1st > .navi_dp1").hover(
	// 	function(){
	// 		var $topNavSub = $(this).find('a.dp1').siblings(".subNav2nd");
	// 		$topNavSub.slideDown()
	// 		$(this).addClass('active');
	// 	},
	// 	function(){
	// 		var $topNavSub = $(this).find('a.dp1').siblings(".subNav2nd");
	// 		$topNavSub.slideUp()
	// 		$(this).removeClass('active');
	// 	}
	// );


	$(".subNav1st > .navi_dp1").on('click', function(e){
		e.preventDefault();
		$(".subNav2nd").stop().slideUp();
		$(".subNav1st > .navi_dp1").removeClass('active');

		$(this).addClass('active');
		$(this).find('a.dp1').siblings(".subNav2nd").stop().slideDown();
	});

	$(".subNav1st > .navi_dp1").on('mouseleave', function(e){
		$(".subNav2nd").stop().slideUp();
		$(".subNav1st > .navi_dp1").removeClass('active');

	});



	// $('a.dp1').focus(
	// 	function(){
	// 		var $topNavSub = $(this).siblings(".subNav2nd");
	// 		var heights = $topNavSub.map(function(){
	// 			return $(this).outerHeight(true);
	// 		}).get(), maxHeight = Math.max.apply(null, heights);
	// 		$topNavSub.fadeIn()
	// 		//$topNavSub.stop().animate({height:maxHeight}, 100);
	// 		//$(this).addClass('active');
	// 	}
	// );

	// $('.navi_dp2:last-child').focusout(
	// 	function(){
	// 		var $topNavSub = $(this).parent('ul.subNav2nd');
	// 		$topNavSub.fadeOut()
	// 		//$topNavSub.stop().animate({height:0}, 100);
	// 		$(this).parent('ul.subNav2nd').parent('.navi_dp1').removeClass('active');
	// 	}
	// );

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