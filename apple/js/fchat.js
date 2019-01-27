(function($) {	
	var jQuery = $;

	var keyword = {'11': '11111', '22': '22222', '33': '33333'};

	//keyword.11 = 400;
	//keyword["11"] = 500;


	$.fn.sendTime = function(){

		var mnow = new Date();
		var hours = mnow.getHours();
		var minutes = mnow.getMinutes();
		var ampm = hours >= 12 ? 'PM' : 'AM';
		hours = hours % 12;
		hours = hours ? hours : 12;
		hours = hours < 10 ? '0'+hours : hours;
		minutes = minutes < 10 ? '0'+minutes : minutes;
		return ampm+ ' ' +hours + ':' + minutes;

	};

	$.fn.dispTime = function(){

		var mnow = new Date();
		var yy = mnow.getFullYear();
		var mm = mnow.getMonth() + 1;
		var dd = mnow.getDate();

		return yy+ '년 ' +mm + '월 ' + dd+ '일';

	};

	$.fn.dispTxt = function(param){

		if(!param) return;
		if(param == 'time'){
			var sendTime = $.fn.sendTime();
			$(this).html(sendTime)
		}

		if(param == 'date'){
			var dispTime = $.fn.dispTime();
			$(this).html(dispTime)
		}
	};

	$.fn.makeMsgWrap = function(message){
		if(!message) return;
		var sendTime = $.fn.sendTime();
		var messageWrap = '';

		messageWrap += '<div class="chat-msg-customer">';
		messageWrap += '	<div class="container-msg">';
		messageWrap += '		<div class="input-msg">'+message+'</div>';
		messageWrap += '	</div>';
		messageWrap += '	<div class="time">'+sendTime+'</div>';
		messageWrap += '</div>';

		return messageWrap;

	};

	$.fn.wrongMsg = function(){
			var sendTime = $.fn.sendTime();

			var message = '';

			message += '<div  class="chat-robot-msg">'
			message += '	<div  class="response">'
			message += '		<div  class="head-icon"><img  src="https://www.ncloud.com/public/img/icon/chat-robot-msg.png"></div>'
			message += '		<div  class="cont">'
			message += '			<div  class="msg">'
			message += '				<div  class="text-part">앗! 적절한 답변을 찾지 못했어요.<br>아래 링크를 눌러주세요.</div>'
			message += '				<ul  class="link-part">'
			message += '					<li ><a  href="#">자주하는 질문 바로가기</a></li>'
			message += '				</ul>'
			message += '			</div>'
			message += '			<p  class="time">오전 11:36</p>'
			message += '		</div>'
			message += '	</div>'
			message += '</div>'


			$('.content-chat-inner').append(message); 
			$('#chatContent').scrollTop($('.content-chat-inner').outerHeight())		
	}

	$.fn.chatSend = function(){
		
		$('#chatContent').scrollTop($('.content-chat-inner').outerHeight())
		$(this).on("click", function(e) {
			var message = $(this).siblings('input').val();
			var messageWrap = '';

			if(!message) return;

			

			$.fn.sendMessage(message);

			$(this).siblings('input').val('')
		});
	};


	$.fn.chatEnter = function(){
		
		$('#chatContent').scrollTop($('.content-chat-inner').outerHeight())
		$(this).on("keypress", function(e) {

			if (e.which == 13) {

				var message = $(this).val();
				var messageWrap = '';

				if(!message) return;

				$.fn.sendMessage(message);

				$(this).val('')

			}
		});
	};


	$.fn.sendMessage = function(message){
		var messageWrap = $.fn.makeMsgWrap(message);
		$('.content-chat-inner').append(messageWrap); 
		$('#chatContent').scrollTop($('.content-chat-inner').outerHeight());

		var chkKeyword = false;
		var findKeyword = '';
		$.each(keyword, function(key, value) {
			if(message == key) { 
				chkKeyword = true;
				findKeyword = value;
			}
		});

		if(!chkKeyword) $.fn.wrongMsg();

		console.info(findKeyword) // 답변 매크로 설정해야됨 2018-12-01
		
	}

	$.fn.chatAll = function(){
		$('#chatContent').scrollTop($('.content-chat-inner').outerHeight())
		$(this).on("click", function(e) {

			var sendTime = $.fn.sendTime();
			var dispTime = $.fn.dispTime();

			var message = '';

			message += '<div  class="chat-robot-msg">'
			message += '	<p  class="date">'+dispTime+'</p>'
			message += '	<div  class="response">'
			message += '		<div  class="head-icon"><img  src="https://www.ncloud.com/public/img/icon/chat-robot-msg.png"></div>'
			message += '		<div  class="cont">'
			message += '			<div  class="msg">'
			message += '				<div  class="open-container">'
			message += '					<div  class="open-msg">'
			message += '						<div  class="row">'
			message += '							<div ><img  src="https://www.ncloud.com/public/img/icon/icon-1.svg" alt="">'
			message += '								회원 문의'
			message += '							</div>'
			message += '							<div ><img  src="https://www.ncloud.com/public/img/icon/icon-2.svg" alt="">'
			message += '								상품 문의'
			message += '							</div>'
			message += '						</div>'
			message += '						<div  class="row">'
			message += '							<div ><img  src="https://www.ncloud.com/public/img/icon/icon-3.svg" alt="">'
			message += '								구매 문의'
			message += '							</div>'
			message += '							<div ><img  src="https://www.ncloud.com/public/img/icon/icon-4.svg" alt="">'
			message += '								기타 문의'
			message += '							</div>'
			message += '						</div>'
			message += '					</div>'
			message += '				</div>'
			message += '			</div>'
			message += '			<p  class="time">'+sendTime+'</p>'
			message += '		</div>'
			message += '	</div>'
			message += '</div>'

			$('.content-chat-inner').append(message); 
			$('#chatContent').scrollTop($('.content-chat-inner').outerHeight())
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
	$('.msgSend').chatSend();
	$('.msgInput').chatEnter();

	$('#view-chatAll').chatAll();


	$('#nowDispDate').dispTxt('date');
	$('#nowDispTime').dispTxt('time');
		

	//console.log('%c 디자인스킨 default 채팅 작업 중... ', 'color: #bada55; font-size:3.0em;');
});