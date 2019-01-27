(function($) {
	var jQuery = $;

    function user_function()
    {

		
        //console.log('%c 베로니카 국문 디자인스킨 front', 'color: #bada55; font-size:3.0em;');
    }

	// 회원가입 말풍선
	function bubbleEffect(){
		$('#jp').animate({ bottom: '+=5' }, 300) 
				.animate({ bottom: '-=5' }, 300)
				.animate({ bottom: '+=5' }, 300)
				.animate({ bottom: '-=5'},300, function(){
					bubbleEffect();
		});
	}

	// 쿠키 생성
	function setCookie(cName, cValue, cDay){
		var expire = new Date();
		expire.setDate(expire.getDate() + cDay);
		cookies = cName + '=' + escape(cValue) + '; path=/'; 
		if(typeof cDay != 'undefined') cookies += ';expires=' + expire.toGMTString() + ';';
		document.cookie = cookies;
	}

	// 쿠키 가져오기
	function getCookie(cName) {
		cName = cName + '=';
		var cookieData = document.cookie;
		var start = cookieData.indexOf(cName);
		var cValue = '';
		if(start != -1){
		   start += cName.length;
		   var end = cookieData.indexOf(';', start);
		   if(end == -1)end = cookieData.length;
		   cValue = cookieData.substring(start, end);
		}
		return unescape(cValue);
	}


	window.setCookie = setCookie; 
	window.getCookie = getCookie; 
    window.user_function = user_function; 
	window.bubbleEffect = bubbleEffect; 
}(jQuery3_3_1));

jQuery3_3_1(document).ready(function(){


	user_function();
	bubbleEffect();
});


