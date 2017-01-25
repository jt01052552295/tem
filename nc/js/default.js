/************************************************************************************/
/**  쿠키관련 스크립트  **/
/************************************************************************************/
function SetCookie(cKey, cValue) {
    var date = new Date(); // 오늘 날짜
    // 만료시점 : 오늘날짜+10 설정
    var validity = 10;
    date.setDate(date.getDate() + validity);
    // 쿠키 저장
    document.cookie = cKey + '=' + escape(cValue) + ';expires=' + date.toGMTString();
    //alert(cKey+" 쿠키 생성 완료!!! ");
}
function DelCookie(cKey) {
    // 동일한 키(name)값으로
    // 1. 만료날짜 과거로 쿠키저장
    // 2. 만료날짜 설정 않는다. 
    //    브라우저가 닫힐 때 제명이 된다    

    var date = new Date(); // 오늘 날짜 
    var validity = -1;
    date.setDate(date.getDate() + validity);
    document.cookie =
          cKey + "=;expires=" + date.toGMTString();
}
function GetCookie(cKey) {
    var allcookies = document.cookie;
    //alert(allcookies);  
    var cookies = allcookies.split("; ");
    for (var i = 0; i < cookies.length; i++) {
        var keyValues = cookies[i].split("=");
        if (keyValues[0] == cKey) {
            return unescape(keyValues[1]);
        }
    }
    return "";
}

function consDown() {
	this.location='./_download.php?f=/upload/txt/construction.pdf&fn=공사지명원.pdf';
}


function btnlogout() {
	this.location='./_logout.php';
}

/********** 한글 초성, 중성, 종성 구분함수 **********/
var arr_1st = new Array('','ㄱ','ㄲ','ㄴ','ㄷ','ㄸ','ㄹ','ㅁ','ㅂ','ㅃ','ㅅ','ㅆ','ㅇ','ㅈ','ㅉ','ㅊ','ㅋ','ㅌ','ㅍ','ㅎ'); //초성 19개 
var arr_2nd = new Array('','ㅏ','ㅐ','ㅑ','ㅒ','ㅓ','ㅔ','ㅕ','ㅖ','ㅗ','ㅘ','ㅙ','ㅚ','ㅛ','ㅜ','ㅝ','ㅞ','ㅟ','ㅠ','ㅡ','ㅢ','ㅣ'); //중성 21개 
var arr_3th = new Array('','ㄱ','ㄲ','ㄳ','ㄴ','ㄵ','ㄶ','ㄷ','ㄹ','ㄺ','ㄻ','ㄼ','ㄽ','ㄾ','ㄿ','ㅀ','ㅁ','ㅂ','ㅄ','ㅅ','ㅆ','ㅇ','ㅈ','ㅊ','ㅋ','ㅌ','ㅍ','ㅎ'); //종성 28개

function getJamoCodes(t) { 
    var c = t.charCodeAt(0), c = c<0x3130?0:c<0x3164?c-0x3130:c<0xac00?0:c<0xd7a5?c+68:0; 
    if (c>51) return Array((c-c%588)/588-74,((c-c%28)/28)%21+1,c%28); 
    return Array(c<3?c:c<4?0:c<5?c-1:c<7?0:c<10?c-3:c<17?0:c<20?c-10:c<21?0:c<31?c-11:0,c<31?0:c-30,0); 
} 
var arr = getJamoCodes("황"); 
//document.write(arr_1st[arr[0]]+","+arr_2nd[arr[1]]+","+arr_3th[arr[2]]); 

/********** 디버그 함수 **********/
function debug(txt){
	if(document.getElementById('debugText').value != "undefined"){
		document.getElementById('debugText').value = txt;
	}
}

/********** 컴퓨터/모바일 체크 함수 **********/
function checkMobile(){
	var isie=(/msie/i).test(navigator.userAgent); //ie
	var isie6=(/msie 6/i).test(navigator.userAgent); //ie 6
	var isie7=(/msie 7/i).test(navigator.userAgent); //ie 7
	var isie8=(/msie 8/i).test(navigator.userAgent); //ie 8
	var isie9=(/msie 9/i).test(navigator.userAgent); //ie 9
	var isfirefox=(/firefox/i).test(navigator.userAgent); //firefox
	var isapple=(/applewebkit/i).test(navigator.userAgent); //safari,chrome
	var isopera=(/opera/i).test(navigator.userAgent); //opera
	var isios=(/(ipod|iphone|ipad)/i).test(navigator.userAgent);//ios
	var isipad=(/(ipad)/i).test(navigator.userAgent);//ipad
	var isandroid=(/android/i).test(navigator.userAgent);//android
	var device;

	if(isie7 || isie8 || isie9){
		isie6 = false;
	}
	if(isie9){
		isie = false;
	}
	if(isapple || isios || isipad || isandroid){
		return "mobile"; 
	}else{
		return "classic";
	}
}

//////// 즐겨찾기 ////////
function bookmark() {
	window.external.AddFavorite('http://www.cmhouse.co.kr','CM종합건설(주) :: 건축주가 웃습니다.');
}
	$(function() {
		$(".fancybox").fancybox();
	});

///////// 경력사항 창 띄우기 /////////
$(document).on('click','.btnPopupProfile',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	bg_layer_pop('popupProfile.php?strCode=' + num);
});	


///////// 로그인 창 띄우기 /////////
function btnPopupLogin(){
	bg_layer_pop_close();
	bg_layer_pop('popupLogin.php');
}

/********** 레이어 팝업 함수 **********/
function bg_layer_pop_close(){
	//$('#divCalendarLee').hide();
	$("#layer_contents").remove();
	$("#layer_bg").remove();           
}

function bg_layer_pop(gb_url){
	
	var windowWidth;
	var windowHeight;
	if(document.body.scrollHeight != "undefined"){
		windowWidth = document.body.scrollWidth;
		windowHeight = document.body.scrollHeight;
	}
	$("#header").append("<div id=\"layer_bg\" class=\"opa50 black_bg\"></div><div id=\"layer_contents\" class=\"opa50\"></div>");
	$("#layer_bg").css('height',windowHeight+'px');
	$("#layer_bg").bind("click",function(){
		bg_layer_pop_close();
	});
	//window.scrollTo(0,0);
	layer_pop_draw(gb_url, windowWidth);
}
function layer_pop_draw(gb_url, windowWidth){
	var position = jQuery(window).scrollTop();
	$.get(gb_url,function(d,e){
		$("#layer_contents").hide();
		$("#layer_contents").html(d);
		$("#layer_contents").fadeIn();
		var contentWidth = parseInt((windowWidth - parseInt($("#layer_contents").css('width')))/2) + "px";
		$("#layer_contents").css('left',contentWidth);

		$('#layer_contents').css('top',(position+100)+'px');
		$('#layer_contents').animate({opacity:1},{queue:false, duration:500, easing:'easeOutExpo'});
		$('#layer_contents').animate({top:(position+150)+'px'},{queue:false, duration:500, easing:'easeOutExpo'});
	});         
}

///////// 팝업 레이어 닫기 (공통) /////////	
$(document).on('click','.btnClosePopup',function(){
	bg_layer_pop_close();
});

$(document).on('click','.btnAgreement',function(){
	if($('input:checkbox[name=chkAgreement1]').prop('checked') == false){
		alert('이용약관에 동의하셔야 회원가입이 가능합니다.   ');
		$('input:checkbox[name=chkAgreement1]').focus();
		return false;
	}
	if($('input:checkbox[name=chkAgreement2]').prop('checked') == false){
		alert('개인정보 수집 활용에 동의하셔야 회원가입이 가능합니다.   ');
		$('input:checkbox[name=chkAgreement2]').focus();
		return false;
	}
	location.href = "./?path=joinInput&bType=write";
});

///////// 로그인 하기 /////////
$(document).on('click','#btnLogin',function(){
	if($('#uid').val() == ''){
		alert('아이디를 정확하게 입력하여 주십시오.   ');
		$('#uid').focus();
		return false;
	}
	else if($('#upw').val() == ''){
		alert('비밀번호를 정확하게 입력하여 주십시오.   ');
		$('#upw').focus();
		return false;
	}
		
	var f_opt = {
		url: '/proc/member_proc.php',
		type: 'post',
		dataType: 'text',
		success: function(d,e){
			//alert(d);
			if (e=="success"){
				var res = d.split('|');
				if(res[0] == "ok"){
					location.href = "/";
				}else{
					alert(res[1]);
				}
			}else{
				alert('서버통신에러! 다시 시도해 주십시오.   ');
			}
		},
		error:function(){
			alert('서버통신에러! 다시 시도해 주십시오.   ');
		}	
	}   
	$("#frmLogin").ajaxSubmit(f_opt);
});

///////// 아이디찾기 창 띄우기 /////////
$(document).on('click','.btnPopupFindId',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	bg_layer_pop('popupFindID.php?intId=' + num);
});	
$(document).on('click','.btnFindId',function(){
	if($('#findIdPhone1').val() == '' || $('#findIdPhone2').val() == '' || $('#findIdPhone3').val() == ''){
		alert('전화번호를 정확하게 입력해 주십시오.   ');
		$('#findIdPhone1').focus();
		return false;
	}
	var strPhone = $('#findIdPhone1').val() + $('#findIdPhone2').val() + $('#findIdPhone3').val();
		
	try{
		var jqxhr = $.get('/proc/member_proc.php', {strType:'findId',strPhone:strPhone}, function(d,e){
			var res = d.split('|');
			if(res[0] == "err"){
				alert(res[1]);
				return false;
			}else if(res[0] == "ok"){
				$('#divFindId1').hide();
				$('#divFindId2').show();
				$('#divFindIdId').text(res[1]);
			}
		});
	}catch(e){
		alert('작업중 에러가 발생하였습니다.   ');
	}
});
///////// 비밀번호찾기 창 띄우기 /////////
$(document).on('click','.btnPopupFindPassword',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	bg_layer_pop('popupFindPW.php?intId=' + num);
});	
$(document).on('click','.btnFindPassword',function(){
	if($('#findPasswordId').val() == ''){
		alert('아이디를 정확하게 입력해 주십시오.   ');
		$('#findPasswordId').focus();
		return false;
	}
	var strId = $('#findPasswordId').val();
		
	try{
		var jqxhr = $.get('/proc/member_proc.php', {strType:'findPassword',strId:strId}, function(d,e){
			var res = d.split('|');
			if(res[0] == "err"){
				alert(res[1]);
				return false;
			}else if(res[0] == "ok"){
				$('#divFindPassword1').hide();
				$('#divFindPassword2').show();
				$('#divFindPasswordPhone').text(res[1]);
			}
		});
	}catch(e){
		alert('작업중 에러가 발생하였습니다.   ');
	}
});
$(document).on('click','.btnFindPassword2',function(){

	//try{
		var jqxhr = $.get('/proc/sms_proc.php', {strType:'sendPassword',strId:$('#findPasswordId').val()}, function(d,e){
			//alert(d);
			var res = d.split('|');
			if(res[0] == "err"){
				alert(res[1]);
				return false;
			}else if(res[0] == "ok"){
				alert('고객님의 비밀번호가 정상적으로 전송되었습니다.   ');
				$('.btnClosePopup').click();
			}
		});
	//}catch(e){
	//	alert('작업중 에러가 발생하였습니다.   ');
	//}
});