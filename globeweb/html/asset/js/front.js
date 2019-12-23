;(function($){

	$.fn.topMenu = function(){

		var $topNavSub = $('.subNavLst');

		var _menuShowSpeed = 100;
		var heights = $topNavSub.map(function(){
			return $(this).outerHeight(true);
		}).get(),
		maxHeight = Math.max.apply(null, heights);

		 $('.navLst li.navHov').hover(
		 	function(){
				$(this).find('a.menu_link').addClass('active');
				$(this).find('ul.subNavLst').addClass('active');
		 		
		 	
		 	}, function(){
				$(this).find('a.menu_link').removeClass('active');
				$(this).find('ul.subNavLst').removeClass('active');
		 		
		 		
		 	}
		 );

		
	};

	$.fn.detail_scroll_menu = function(){

		var descCon = $('.descCon').toArray();
		if(descCon.length == 0) return;

		var elm_offset_top_arr = [];
		 $('.descCon').each(function (index, item) { 
			elm_offset_top_arr.push( $(this).offset().top+100 );
		});

		 

		$('#detail_nav_bar a').on('click',function(e){
			e.preventDefault();

			var this_href = $(this).attr('href');
			if(this_href){
                $('html, body').animate({scrollTop : $(this_href).offset().top}, 400);
            }
		}); 

		

		$(window).scroll(function() {
			var win = $(window);
			var winHeight = win.height();
			var scTop = $(this).scrollTop();

			if(scTop >  $(".detail_sc_chk").offset().top){
				$("#detail_nav_bar").addClass("fixed");
	        } else {
	        	$("#detail_nav_bar").removeClass("fixed");
	        }      

	        if(scTop >= elm_offset_top_arr[0] && scTop <= elm_offset_top_arr[1]){
                $('#detail_nav_bar li').removeClass("active");
                $('#detail_nav_bar li:nth-child(1)').addClass("active");
            } 
            if(scTop >= elm_offset_top_arr[1] && scTop <= elm_offset_top_arr[2]){
                $('#detail_nav_bar li').removeClass("active");
                $('#detail_nav_bar li:nth-child(2)').addClass("active");
            } 
            if(scTop >= elm_offset_top_arr[2] && scTop <= elm_offset_top_arr[3]){
                $('#detail_nav_bar li').removeClass("active");
                $('#detail_nav_bar li:nth-child(3)').addClass("active");
            } 
            if(scTop >= elm_offset_top_arr[3]){
               $('#detail_nav_bar li').removeClass("active");
               $('#detail_nav_bar li:nth-child(4)').addClass("active");
            }  


		});

	};

	$.fn.bubbleEffect = function(){
		$('#joinBubble').animate({ top: '+=5' }, 300) 
				.animate({ top: '-=5' }, 300)
				.animate({ top: '+=5' }, 300)
				.animate({ top: '-=5' }, 300)
				.animate({ top: '57'},300, function(){
					$.fn.bubbleEffect();
		});
	};


	

	$(window).scroll(function() {
		var win = $(window);
		var winHeight = win.height();
		var scTop = $(this).scrollTop();

  


	});

})(jQuery);

$(document).ready(function(){
	// 상단메뉴 
	$.fn.topMenu();

	//회원가입 말풍선
	$.fn.bubbleEffect(); 

	//상단배너
	$('.topBannerClose > a').click(function(e){
		e.preventDefault();
		$('#top_banner').hide();
	}); 

	// 검색어자동완성 활성화
	$("#sch_str").keydown(function(e) {
    	$('.sch_auto').addClass('active')
    	$('.sch_keyword_remove').addClass('active')
    });
    $('.sch_keyword_remove').click(function(e){
		e.preventDefault();
		$("#sch_str").val('');
		$(this).removeClass('active')
		$('.sch_auto').removeClass('active')
	}); 

	//프로필 드롭다운
	$("li.profileDropDown").hover(
		function(){
			var $topNavSub = $(this).find('a.myProfile').siblings(".myInfo");
			$topNavSub.stop().slideDown();
			$(this).find('a.myProfile').addClass('active');
		},
		function(){
			var $topNavSub = $(this).find('a.myProfile').siblings(".myInfo");
			$topNavSub.stop().slideUp();
			$(this).find('a.myProfile').removeClass('active');
		}
	);

	$('.subMyInfo').on('click',function(e){
		e.preventDefault();
		var _block = $('.myInfoSub').css('display');
		if(_block === 'none'){
			$(this).addClass('active')
			$('.myInfoSub').slideDown()
		} else {
			$(this).removeClass('active')
			$('.myInfoSub').slideUp()	
		}
	}); 


	//서브화면 사이드바 드롭다운
	$("li.sideToggle").hover(
		function(){
			$(this).find('a.sideCate').addClass('active');
		},
		function(){
			$(this).find('a.sideCate').removeClass('active');
		}
	);
	$('li.sideToggle > span.on').on('click',function(e){
		e.preventDefault();
		$('li.sideToggle > span.on').removeClass('active')
		$('ul.sub2').slideUp()	
		var _block = $(this).siblings('ul.sub2').css('display');
		if(_block === 'none'){
			$(this).siblings('ul.sub2').slideDown()
			$(this).addClass('active')
		}
	}); 



	// 목록 필터 드롭다운
	$('li.filter_menu_item > a.filter_menu_item_box').on('click',function(e){
		e.preventDefault();
		var _block = $(this).siblings('ul.filter_menu_item_list').css('display');
		if(_block === 'none'){
			$('li.filter_menu_item > a.filter_menu_item_box').removeClass('active')
			$('ul.filter_menu_item_list').removeClass('active')
			$(this).siblings('ul.filter_menu_item_list').addClass('active')
			$(this).addClass('active')
		} else {
			$(this).siblings('ul.filter_menu_item_list').removeClass('active')
			$(this).removeClass('active')
		}
	}); 
	// 목록 정렬 드롭다운
	$('a.sort_select_menu').on('click',function(e){
		e.preventDefault();
		var _block = $('ul.sort_options').css('display');
		if(_block === 'none'){
			$('ul.sort_options').addClass('active')
			$(this).addClass('active')
		} else {
			$('ul.sort_options').removeClass('active')
			$(this).removeClass('active')
		}
	}); 

	// 목록 필터 박스 제거
	$('.opt_box > span.del').click(function(e){
		e.preventDefault();
		$(this).parent('.opt_box').hide();
	}); 

	// 목록 썸네일 슬라이드
	var mainSlider = $('.itemSlide').bxSlider({
		auto: false,
		mode:'horizontal',
		infiniteLoop: true,
		wrapperClass: 'item-wrapper',
		autoControls: false,
		adaptiveHeight: true,
		pager:false,
		controls: true
	});
	// 목록 썸네일 슬라이드 버튼
	$('.item_list li.itemBox').each(function (index, item) { 
		$(item).hover(
			function(){
				$(this).find('button').show();
			},
			function(){
				$(this).find('button').hide();
			}
		);
	});

	// 상세페이지 바로가기 메뉴
	$.fn.detail_scroll_menu();

	// 상세페이지 가격표 
	$('div.each_package:first-child div.pk_body').show();
	$('div.each_package > a.pk_head').on('click', function(e) {
		e.preventDefault();
		if($(this).parent().hasClass('active')) return;

		$('div.each_package').removeClass('active');
		$('div.pk_body').slideUp();

		$(this).parent().addClass('active');
		$(this).siblings('div.pk_body').slideDown();
	});

	// 상세페이지 공유버튼 
	$('.sub_share_btn_box').hover(
		function(){
			$(this).addClass('active');
		},
		function(){
			$(this).removeClass('active');
		}
	);
	// 상세페이지 찜하기 버튼 활성화 토글 
	$('button.btn_detail_wish').on('click', function() {
		$(this).toggleClass('active');

	});

	//상세페이지 가격정보 테이블 배경색
	$('table.desc_tbl td').each(function (index, item) { 
		$(item).hover(
			function(){
				var bg = $(this).attr('data-bg');
				$('table.desc_tbl td.'+bg).addClass('bg_hover');
			},
			function(){
				var bg = $(this).attr('data-bg');
				$('table.desc_tbl td.'+bg).removeClass('bg_hover');
			}
		);
	});

	

	$('button.btnItem').on('click', function() {
		var id = $(this).attr('data-slide');
		var cycle = false, delta = (id === "prev")? -1 : 1;
		var time = 600;

		var now   = $(this).siblings("div.itemInner").children(":visible");
		var first = $(this).siblings("div.itemInner").children(':first');
		var last  = $(this).siblings("div.itemInner").children(":last");
		var prev  = now.prev();
		var next = now.next();
		prev = prev.index() == -1 ? last : prev;
		next = next.index() == -1 ? first : next;

		

		if(id==="prev"){
		} else {
			// next.addClass("next")
		 //    now.addClass("left").delay(1).queue(function(){
			//     next.addClass("left").dequeue();
			// });
			// now.one('transitionend', function(){
			// 	next.removeClass("next left").addClass("active")
			// 	now.removeClass("active left")
			// })
		}

	});


});


    
