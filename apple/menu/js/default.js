(function($) {	
	var jQuery = $;
	//var ttttt = $.cookie('hideBanner1')


	$.fn.topBanner = function(){
		var _messageBox  = $('#message_box');
		var _boxImg  = $('.box_img');
		var _messageClose  = $('.message_box_close');
		var _messageCloseLabel  = $('.message_box_close label');


		var _hideBanner  = $.cookie('hideBanner1');
		if(_hideBanner){
			$('#message_box').remove();
		} else {
			_boxImg.html('<img src="/web/upload/fd-img/messageBox/messageBox.png" alt="최상단배너" />');
		}

		_messageCloseLabel.click(
			function(){
				if($(this).hasClass('active')){
					$(this).removeClass('active');
				} else {
					$(this).addClass('active');
				}
			}
		);

		$('#btn_message_box').click(
			function(){
				var topCheck = $( '#top_check' ).is(":checked");
				
				
				if ( topCheck ) {
					//setCookie('hideBanner1', 'true', 1);
					$.cookie('hideBanner1', 'value', { expires: 1, path: '/' });
					//$.removeCookie('hideBanner1');
				} 
				_messageBox.stop().animate({height:0}, 300);
				_boxImg.css({ "display" : "none"});
				_messageClose.css({ "display" : "none"});
			}
		);

	};// topBanner


	$('#totalCateOpenBtn').on('click', function(e){
		e.preventDefault();
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$('.total_cate').css({'display':'none'});
			$(this).find('i').removeClass('fa-times').addClass('fa-bars');
		} else {
			$(this).addClass('active');
			$('.total_cate').css({'display':'block'});
			$(this).find('i').removeClass('fa-bars').addClass('fa-times');
		}
	});
	$('.btn_cat_close').click(
		function(e){
			e.preventDefault();
			if($('#totalCateOpenBtn').hasClass('active')){
				$('#totalCateOpenBtn').removeClass('active');
				$('.total_cate').css({'display':'none'});
				$('#totalCateOpenBtn').find('i').removeClass('fa-times').addClass('fa-bars');
			} else {
				$('#totalCateOpenBtn').addClass('active');
				$('.total_cate').css({'display':'block'});
				$('#totalCateOpenBtn').find('i').removeClass('fa-bars').addClass('fa-times');
			}
		}
	);


	$('.special-menu .menu-list li.list').on('mouseenter focusin', function(){
		$(this).find('.sub').addClass('on');
	});
	$('.special-menu .menu-list li.list').on('mouseleave focusout', function(){
		$(this).find('.sub').removeClass('on');
	});
	


	$.fn.productOptionView = function(){

		$(this).each(function(){
			var $_hidden = $(this).find(".status");
			

			$(this).bind("mouseenter", function(event){
				$_hidden.fadeIn(100);
			});

			$(this).bind("mouseleave", function(event){
				$_hidden.fadeOut(100);
			});

		});
	

	}; //  리스트 화면 마우스오버 이미지



	$('#toggle-right-bar').on('click', function(e){
		e.preventDefault();
		if($(this).hasClass('on')){
			$('#main-right-bar').css({'right':'0'});
			$(this).removeClass('on');
		} else {
			$('#main-right-bar').css({'right':'-72px'});
			$(this).addClass('on');
		}
	});
	$.fn.goTop = function(){
		$(this).click(function() {
			$('html, body').animate({
				scrollTop:0
			}, 500);
		});
	};
	$.fn.upDown = function(){
		var win = $(window);
		//$('.updown_btn .btn_down').click(function() {
			//var scrollDown = $('#wrap').height();
			//var footerScrollTop = $('#footer').offset().top;
			//var winHeight = win.height();


			//if (winHeight < scrollDown) {
				//$('html, body').animate({
					//scrollTop:footerScrollTop
				//}, 500);
			//} else {
				//$('html, body').animate({
					//scrollTop:scrollDown
				//}, 500);
			//}
		//});
	};// 화면 위아래 이동
                             

	$.fn.searchInputAction  = function(){
		var _this = $(this);
		var _btn_del = $('.input_del');
		var _unified_search = $('.unified_search');
		var _colorWord = _unified_search.find('label')


		_this.on("focusin focusout keyup keydown", function(e){
			var dInput =  e.target.value;

			switch (e.type) {
				case "focusin":
					if(!dInput){
						_btn_del.fadeOut();
					}
					_unified_search.show();
					break;
				case "focusout":
					//_unified_search.hide();
					break;
				case "keyup":
					if(!dInput){
						_btn_del.fadeOut();
					}
					break;
				case "keydown":
					_btn_del.fadeIn();
					break;
			}
		});

		_btn_del.on("click", function(e){
			e.preventDefault();
			$(this).fadeOut();
			$(this).siblings('input').val('');
		});


		_colorWord.each(function(){
			$(this).bind("click", function(e){
				var _txt = $(this).text()
				location.href="/product/search.html?banner_action=&keyword="+encodeURI(_txt);
			});
		});

		$('html').click(function (event) {
			if (_unified_search.is(":visible") && !$(event.target).is(".unified_search, .unified_search *, #keyword")) {
				if(_unified_search.is(":visible")) {
					_unified_search.hide();
				}    
			}
		});
	};

	$.fn.layerToggle = function(){
		var _layer_popup_artist_talk = $('.layer_popup_artist_talk');
		var _layer_close_artist_talk = $('.layer_close_artist_talk');


		$(this).on("click", function(e) {
			_layer_popup_artist_talk.toggle();
		});
		$(_layer_close_artist_talk).on("click", function(e) {
			_layer_popup_artist_talk.hide();
		});


	};

	$.fn.chatToggle = function(){
		var layer_chat_talk = $('.layer_chat_talk');
		var layer_close_talk = $('.msg.close');


		$(this).on("click", function(e) {
			layer_chat_talk.toggle();
		});
		$(layer_close_talk).on("click", function(e) {
			layer_chat_talk.hide();
		});


	};

	
	

}(jQuery3_3_1));



jQuery3_3_1(document).ready(function($){
	var jQuery = $;

	//if (jQuery) {
		//console.log(jQuery3_3_1.fn.jquery);
		//console.log($.fn.jquery);
		//console.log(jQuery.fn.jquery);
	//}

	$('#btn_message_box').topBanner();
	$("#product-list li.item").productOptionView();
	$('.btn_totop').goTop();
	$('.btn_artist_talk').layerToggle();
	$('.msg.open').chatToggle();
	$('#keyword').searchInputAction();

	$('.msgSend').chatSend();

	console.log('%c 디자인스킨 default 작업 중... ', 'color: #bada55; font-size:3.0em;');
});

$(window).load(function() {     

	

	setInterval(function(e){ 
		$('#fd_load').fadeOut();
	}, 1500);






});



$(document).ready(function(){

	//var _hideBanner  = $.cookie('hideBanner1');
	//if(true){
		//$('#message_box').remove();
	//}
});


