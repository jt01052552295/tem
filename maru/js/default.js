/************************************************************************************/
/**  달력 자동생성 스크립트  **/
/************************************************************************************/
var inputName	= "";
var now			= new Date();
var todayY		= now.getFullYear();
var todayM		= now.getMonth()+1;
var todayD		= now.getDate();
var today		= todayY + "-" + todayM + "-" + todayD;
var selectedInput = "";

function showCalendar(y, m){
	var text = '<div style="margin:0 auto;">';
	text += '	<div style="width:135px;margin:0 auto;">';
	text += '		<div style="float:left;cursor:pointer;padding:16px 10px 0 0;" onclick="showCalendar('+(y-1)+','+m+')"><img src="/img/btn_prev.gif" /><img src="/img/btn_prev.gif" /></div>';
	text += '		<div style="float:left;cursor:pointer;padding:16px 10px 0 10px;" onclick="showCalendar('+(m==1?(y-1)+','+12:y+','+(m-1))+')"><img src="/img/btn_prev.gif" /></div>'; 
	text += '		<div style="float:left;"><div style="width:50px;font-size:12px;text-align:center;">' + y + '</div><div style="width:50px;text-align:center;font-size:16px;font-weight:bold;padding:0 0 0 0;">' + ((m < 10) ? ('' + m) : m) + '</div></div>'; 
	text += '		<div style="float:left;cursor:pointer;padding:16px 10px 0 10px;" onclick="showCalendar('+(m==12?(y+1)+','+1:y+','+(m+1))+')"><img src="/img/btn_next.gif" /></div>';
	text += '		<div style="float:left;cursor:pointer;padding:16px 0 0 10px;" onclick="showCalendar('+(y+1)+','+m+')"><img src="/img/btn_next.gif" /><img src="/img/btn_next.gif" /></div>';
	text += '		<br style="clear:both;" />';
	text += '	</div>';
	text += '</div>';
	text += '<div style="background-color:#eeeeee; height:10px; padding: 10px 0px; margin-top:10px; border-top:1px solid #d5d5d5;">';
	text += '	<div style="margin:0 auto; width:280px;">';
	text += '		<div style="float:left;padding:0 15px 0 14px;font-weight:bold;">일</div>';
	text += '		<div style="float:left;padding:0 15px 0 14px;font-weight:bold;">월</div>';
	text += '		<div style="float:left;padding:0 15px 0 14px;font-weight:bold;">화</div>';
	text += '		<div style="float:left;padding:0 15px 0 14px;font-weight:bold;">수</div>';
	text += '		<div style="float:left;padding:0 15px 0 14px;font-weight:bold;">목</div>';
	text += '		<div style="float:left;padding:0 15px 0 14px;font-weight:bold;">금</div>';
	text += '		<div style="float:left;padding:0 15px 0 14px;font-weight:bold;">토</div>';
	text += '		<br style="clear:both;" />';
	text += '	</div>';
	text += '</div>';
	text += '<div style="margin:0 auto; width:280px;">';
	text += '	<div>';

	var d1 = (y+(y-1-(y-1)%4)/4-(y-1-(y-1)%100)/100+(y-1-(y-1)%400)/400+m*2+(m*5-m*5%9)/9-(m>2?y%4||y%100==0&&y%400?4:3:2)) % 7;
	for (i = 0; i < 42; i++) {
		if (i%7==0) text += '</div><div>';
		if (i < d1 || i >= d1+(m*9-m*9%8)/8%2+(m==2?y%4||y%100==0&&y%400?28:29:30)) 
			text += '<div class="cn"> </div>'; 
		else 
			if(today == (y)+"-"+(m)+"-"+(i+1-d1)){ // 오늘이면
				text += '<div class="cn_o" onClick="clickCalendar(\''+y+'\',\''+m+'\',\''+(i+1-d1)+'\');" style="cursor:hand;"' + (i%7 ? '' : ' style="color:red;"') + ((i%7)==6 ? ' style="color:#389bf7;"' : '') + '>' + (i+1-d1) + '</div>'; 
			}else{
				text += '<div class="cn" onClick="clickCalendar(\''+y+'\',\''+m+'\',\''+(i+1-d1)+'\');" style="cursor:hand;" onMouseOver="this.className=\'cn_o\';" onMouseOut="this.className=\'cn\';"' + (i%7 ? '' : ' style="color:red;"') + ((i%7)==6 ? ' style="color:#389bf7;"' : '') + '>' + (i+1-d1) + '</div>';
			}
	}
	document.getElementById('divCalendarLee').innerHTML = text + '</div></div>';
}

function clickCalendar(y,m,d){
	if(m < 10){m = "0" + m};
	if(d < 10){d = "0" + d};
	$('#'+selectedInput).attr('value',y+"."+m+"."+d);
	$('#divCalendarLee').hide();
}

/* ----------------------------------------------------------------------------
 * 특정 날짜에 대해 지정한 값만큼 가감(+-)한 날짜를 반환
 * pInterval : "yyyy" 는 연도 가감, "m" 은 월 가감, "d" 는 일 가감
 * pAddVal  : 가감 하고자 하는 값 (정수형)
 * pYyyymmdd : 가감의 기준이 되는 날짜
 * pDelimiter : pYyyymmdd 값에 사용된 구분자를 설정 (없으면 "" 입력)
 * 반환값 ----
 * yyyymmdd 또는 함수 입력시 지정된 구분자를 가지는 yyyy?mm?dd 값
 * 사용예 ---
 * 2008-01-01 에 3 일 더하기 ==> addDate("d", 3, "2008-08-01", "-");
 * 20080301 에 8 개월 더하기 ==> addDate("m", 8, "20080301", "");
 --------------------------------------------------------------------------- */
function addDate(pInterval, pAddVal, pYyyymmdd, pDelimiter){
 var yyyy;
 var mm;
 var dd;
 var cDate;
 var oDate;
 var cYear, cMonth, cDay;
 
 if (pDelimiter != "") {
  pYyyymmdd = pYyyymmdd.replace(eval("/\\" + pDelimiter + "/g"), "");
 }
 
 yyyy = pYyyymmdd.substr(0, 4);
 mm  = pYyyymmdd.substr(4, 2);
 dd  = pYyyymmdd.substr(6, 2);
 
 if (pInterval == "yyyy") {
  yyyy = (yyyy * 1) + (pAddVal * 1); 
 } else if (pInterval == "m") {
  mm  = (mm * 1) + (pAddVal * 1);
 } else if (pInterval == "d") {
  dd  = (dd * 1) + (pAddVal * 1);
 }
 
 cDate = new Date(yyyy, mm - 1, dd) // 12월, 31일을 초과하는 입력값에 대해 자동으로 계산된 날짜가 만들어짐.
 cYear = cDate.getFullYear();
 cMonth = cDate.getMonth() + 1;
 cDay = cDate.getDate();
 
 cMonth = cMonth < 10 ? "0" + cMonth : cMonth;
 cDay = cDay < 10 ? "0" + cDay : cDay;
 
 if (pDelimiter != "") {
  return cYear + pDelimiter + cMonth + pDelimiter + cDay;
 } else {
  return cYear + cMonth + cDay;
 } 
}

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

// 숫자만 입력
// onKeypress="javascript:OnlyNumber()" style="IME-MODE: disabled"  - input box 적용
function OnlyNumber(){
	var key = event.keyCode;
	if(!(key==8||key==9||key==13||key==46||key==144||(key>=48&&key<=57)||key==110||key==190)){
		//alert('숫자만 입력 가능합니다');
		event.returnValue = false;
	}
}
//천단위 콤마찍기 
function numberFormat(num)
{ 
	num = unNumberFormat(num);
	var pattern = /(-?[0-9]+)([0-9]{3})/;
	while(pattern.test(num)) {
		num = num.replace(pattern,"$1,$2");
	}

	return num; 
}
//천단위 콤마제거 
function unNumberFormat(num) 
{
	return (num.replace(/\,/g,"")); 
}

//숫자 세 자리마다 콤마 찍기 함수
function commify(n) {
	var reg = /(^[+-]?\d+)(\d{3})/;		// 정규식
	n += '';							// 숫자를 문자열로 변환

	while (reg.test(n))
		n = n.replace(reg, '$1' + ',' + '$2');
	return n;
}

// 엑셀 스타일의 반올림 함수 정의
function roundXL(n, digits) {
	if (digits >= 0) return parseFloat(n.toFixed(digits)); // 소수부 반올림

	digits = Math.pow(10, digits); // 정수부 반올림
	var t = Math.round(n * digits) / digits;

	return parseFloat(t.toFixed(0));
}

$(function() {
	$(".fancybox").fancybox();
});

///////// 출근체크하기 /////////
$(document).on('click','.btnCheckWork',function(){
	try{
		var jqxhr = $.get('/proc/empl_work_proc.php', {strType:'work'}, function(d,e){
			var res = d.split('|');
			if(res[0] == "err"){
				alert(res[1]);
				return false;
			}else if(res[0] == "ok"){
				alert(res[1]);
				location.reload();
			}
		});
	}catch(e){
		alert('작업중 에러가 발생하였습니다.   ');
	}
});
///////// 퇴근체크하기 /////////
$(document).on('click','.btnCheckWork2',function(){
	try{
		var jqxhr = $.get('../proc/empl_work2_proc.php', {strType:'work'}, function(d,e){
			var res = d.split('|');
			if(res[0] == "err"){
				alert(res[1]);
				return false;
			}else if(res[0] == "ok"){
				alert(res[1]);
				location.reload();
			}
		});
	}catch(e){
		alert('작업중 에러가 발생하였습니다.   ');
	}
});

///////// 팝업 레이어 닫기 (공통) /////////	
$(document).on('click','.btnClosePopup',function(){
	bg_layer_pop_close();
});
///////// 달력 창 띄우기 /////////
$(document).on('click','.btnPopupCalendar',function(e){
	$('#divCalendarLee').fadeIn();
	$('#divCalendarLee').animate({left:e.pageX+10+'px'},{queue:false, duration:500, easing:'easeOutExpo'});
	$('#divCalendarLee').animate({top:e.pageY+10+'px'},{queue:false, duration:500, easing:'easeOutExpo'});
	//$('#divCalendarLee').css('left',e.pageX+'px');
	//$('#divCalendarLee').css('top',e.pageY+'px');
	showCalendar(now.getFullYear(), now.getMonth()+1);
	selectedInput = $(this).attr('name');
});
///////// 업무일지 창 띄우기 /////////
$(document).on('click','.btnPopupBusiness',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	bg_layer_pop('popupBusiness.php?intId=' + num);
});	
///////// 월간계획표 창 띄우기 /////////
$(document).on('click','.btnPopupMonthly',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	var strWriter = $(this).attr('strWriter');
	bg_layer_pop('popupMonthly.php?intId=' + num + '&strWriter=' + strWriter);
});
///////// 월간계획표 창 띄우기 /////////
$(document).on('click','.btnPopupMonthlyC',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	var strWriter = $(this).attr('strWriter');
	bg_layer_pop('popupMonthlyConstruct.php?intId=' + num + '&strWriter=' + strWriter);
});

///////// 공지사항 창 띄우기 /////////
$(document).on('click','.btnPopupNotice',function(){
	bg_layer_pop_close();
	try{
		var num = $(this).attr('num');
		var num2 = $(this).attr('num2');
	}catch(e){}
	bg_layer_pop('popupNotice.php?strType=' + num + '&intId=' + num2);
});
///////// 직원게시판 창 띄우기 /////////
$(document).on('click','.btnPopupNotice2',function(){
	bg_layer_pop_close();
	try{
		var num = $(this).attr('num');
		var num2 = $(this).attr('num2');
	}catch(e){}
	bg_layer_pop('popupNotice2.php?strType=' + num + '&intId=' + num2);
});
///////// 메세지관리 창 띄우기 /////////
$(document).on('click','.btnPopupMessage',function(){
	bg_layer_pop_close();
	var strTo = $(this).attr('strTo');
	var num = $(this).attr('num');
	bg_layer_pop('popupMessage.php?strTo=' + strTo + '&num=' + num);
});
///////// 업무일지전송 창 띄우기 /////////
$(document).on('click','.btnPopupLMS',function(){
	bg_layer_pop_close();
	bg_layer_pop('popupLMS.php');
});
///////// 게시판 기본설정 창 띄우기 /////////
$(document).on('click','.btnPopupBBSSetting',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	bg_layer_pop('popupBBSSetting.php?intId=' + num);
});

///////// 지사관리 창 띄우기 /////////
$(document).on('click','.btnPopupCompany',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	bg_layer_pop('popupCompany.php?strCode=' + num);
});
///////// 직원관리 창 띄우기 /////////
$(document).on('click','.btnPopupEmployee',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	bg_layer_pop('popupEmployee.php?strCode=' + num);
});
///////// 부서관리 창 띄우기 /////////
$(document).on('click','.btnPopupDepartment',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	bg_layer_pop('popupDepartment.php?strCode=' + num);
});
///////// 부서관리 창 띄우기 /////////
$(document).on('click','.btnPopupPosition',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	bg_layer_pop('popupPosition.php?strCode=' + num);
});
///////// 문서양식 창 띄우기 /////////
$(document).on('click','.btnFormAdd',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	bg_layer_pop('popupDocumentForm.php?strId=' + num);
});

$(document).on('click','.logchk',function(){
		bg_layer_pop_close();
		intId=$(this).attr('num');
		bg_layer_pop('popupPW.php?intId='+intId);
});

$(document).on('click','.btnFindPasswordBBS',function(){
	if($('#findPasswordId').attr('value') == ''){
		alert('비밀번호를 정확하게 입력해 주십시오.   ');
		$('#findPasswordId').focus();
		return false;
	}
	
	try{
		var jqxhr = $.get('/proc/bbs_proc.php', {strType:'findPassword',intId:$("input[name='intId']").val(),pw:$("input[name='findPasswordId']").val()}, function(d,e){
			
			var res = d.split('|');
			if(res[0] == "err"){
				alert(res[1]);
				return false;
			}else if(res[0] == "ok"){
				location.href='./?path=buildRequest&intId='+intId+'&bType=view';
			}
		});
	}catch(e){
		alert('작업중 에러가 발생하였습니다.   ');
	}
});



$(document).on('click','.callPop',function(){
		bg_layer_pop_close();
		intId=$(this).attr('num');

		bg_layer_call_pop('popIntro.php?intId='+intId);
});




///////// 서비스목록관리 창 띄우기 /////////
$(document).on('click','.btnPopupServiceList',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	bg_layer_pop('popupServiceList.php?strCode=' + num);
});
///////// 서비스관리 창 띄우기 /////////
$(document).on('click','.btnPopupService',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	var strTo = $(this).attr('strTo');
	bg_layer_pop('popupService.php?intId=' + num + '&strMemberId=' + strTo);
});
///////// 회원관리 창 띄우기 /////////
$(document).on('click','.btnPopupMember',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	bg_layer_pop('popupMember.php?strCode=' + num);
});
///////// 회원관리 창 띄우기 NEW /////////
$(document).on('click','.btnOpenMember',function(){
	var popMember = window.open('/empl/memberDetail.php?strCode='+$(this).attr('num'),'member','top=10, left=10, width=900, height=700');
});
///////// 전화통화관리 창 띄우기 /////////
$(document).on('click','.btnPopupPhone',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	var strTo = $(this).attr('strTo');
	bg_layer_pop('popupPhone.php?intId=' + num + '&strMemberId=' + strTo);
});
///////// 예약관리 창 띄우기 /////////
$(document).on('click','.btnPopupReservation',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	var strTo = $(this).attr('strTo');
	bg_layer_pop('popupReservation.php?intId=' + num + '&strMemberId=' + strTo);
});
///////// 상담관리 창 띄우기 /////////
$(document).on('click','.btnPopupConsult',function(){
	bg_layer_pop_close();
	var num = $(this).attr('num');
	var strTo = $(this).attr('strTo');
	bg_layer_pop('popupConsult.php?intId=' + num + '&strMemberId=' + strTo);
});

///////// 주소검색 창 띄우기 /////////
$(document).on('click','#strPost',function(){
	var popZipcode = window.open('/zipcode/search_zipcode.php','zipcode','top=10, left=10, width=635, height=500, scrollbars=yes');
});

var arrDatePicker = {
		changeMonth: true, // 월을 바꿀수 있는 셀렉트 박스를 표시한다.
		changeYear: true, // 년을 바꿀 수 있는 셀렉트 박스를 표시한다.
		minDate: '-100y', // 현재날짜로부터 100년이전까지 년을 표시한다.
		nextText: '다음 달', // next 아이콘의 툴팁.
		prevText: '이전 달', // prev 아이콘의 툴팁.
		numberOfMonths: [1,1], // 한번에 얼마나 많은 월을 표시할것인가. [2,3] 일 경우, 2(행) x 3(열) = 6개의 월을 표시한다.
		//stepMonths: 3, // next, prev 버튼을 클릭했을때 얼마나 많은 월을 이동하여 표시하는가. 
		yearRange: 'c-100:c+10', // 년도 선택 셀렉트박스를 현재 년도에서 이전, 이후로 얼마의 범위를 표시할것인가.
		showButtonPanel: true, // 캘린더 하단에 버튼 패널을 표시한다. 
		currentText: '오늘 날짜' , // 오늘 날짜로 이동하는 버튼 패널
		closeText: '닫기',  // 닫기 버튼 패널
		dateFormat: "yy.mm.dd", // 텍스트 필드에 입력되는 날짜 형식.
		showAnim: "fade", //애니메이션을 적용한다.
		showMonthAfterYear: true , // 월, 년순의 셀렉트 박스를 년,월 순으로 바꿔준다. 
		dayNamesMin: ['일','월', '화', '수', '목', '금', '토'], // 요일의 한글 형식.
		monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'] // 월의 한글 형식.
	};
/********** 레이어 팝업 함수 **********/
function bg_layer_pop_close(){
	$('#divCalendarLee').hide();
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
	$("body").append("<div id=\"layer_bg\" class=\"opa50 black_bg\"></div><div id=\"layer_contents\" class=\"opa50\"></div>");
	$("#layer_bg").bind("click",function(){
		bg_layer_pop_close();
	});
	window.scrollTo(0,0);
	layer_pop_draw(gb_url, windowWidth);
}

function bg_layer_call_pop(gb_url){
	var windowWidth;
	var windowHeight;
	if(document.body.scrollHeight != "undefined"){
		windowWidth = document.body.scrollWidth;
		windowHeight = document.body.scrollHeight;
	}
	$("body").append("<div id=\"layer_bg\" class=\"opa50 black_bg\"></div><div id=\"layer_contents\" class=\"opa50\"></div>");
	$("#layer_bg").bind("click",function(){
		bg_layer_pop_close();
	});
	window.scrollTo(0,0);
	layer_callpop_draw(gb_url, windowWidth);
}

function layer_callpop_draw(gb_url, windowWidth){
	$.get(gb_url,function(d,e){
		$("#layer_contents").hide();
		$("#layer_contents").html(d);
		$("#layer_contents").fadeIn();


		var contentWidth = parseInt((windowWidth - parseInt($("#layer_contents").css('width')))/2) + "px";
		$("#layer_contents").css('left','350px');

		$('#layer_contents').animate({opacity:1},{queue:false, duration:500, easing:'easeOutExpo'});
		$('#layer_contents').animate({top:'350px'},{queue:false, duration:500, easing:'easeOutExpo'});
	});         
}

function layer_pop_draw(gb_url, windowWidth){
	$.get(gb_url,function(d,e){
		$("#layer_contents").hide();
		$("#layer_contents").html(d);
		$("#layer_contents").fadeIn();


		var contentWidth = parseInt((windowWidth - parseInt($("#layer_contents").css('width')))/2) + "px";
		$("#layer_contents").css('left',contentWidth);

		$('#layer_contents').animate({opacity:1},{queue:false, duration:500, easing:'easeOutExpo'});
		$('#layer_contents').animate({top:'70px'},{queue:false, duration:500, easing:'easeOutExpo'});
	});         
}

$(document).ready(function(){
	$(window).resize(function(){
		$('#section_cen_fix').css('height',$(window).height()-86);
	});
	$('#section_cen_fix').css('height',$(window).height()-86);
});


$(document).ready(function(){
	$('#closeLeft').css('cursor','pointer').click(function(){
		$('#closeLeft').hide();
		$('#openLeft').show();
		$('#section_cen').css('margin','0 0 0 0');
		$('#section_cen_fix').css('margin','0 0 0 0');
		$('#nav_snb').css('left','-220px');
		SetCookie('leftOpen','N');
	});
	$('#openLeft').css('cursor','pointer').click(function(){
		$('#openLeft').hide();
		$('#closeLeft').show();
		$('#section_cen').css('margin','0 0 0 -220px');
		$('#section_cen_fix').css('margin','0 -220px 0 440px');
		$('#nav_snb').css('left','0');
		SetCookie('leftOpen','Y');
	});
	
	$(".datePicker").datepicker(arrDatePicker);

	$('.btnPopupAccounting').css('cursor','pointer').live('click',function(){
		$('.ld_line1').fadeIn();
		$('#loadingTitle').text('회계관리 프로그램은 준비중 입니다.');
		setTimeout(function(){
			$('.ld_line1').fadeOut();		
		},1500);
	});

	$('#searchDepartment').change(function(){
		var department = $(this).attr('value');
		location.href = $('#reloadURL').attr('value') + "?department=" + department;
	});

	$('.ld_line1').fadeOut();

	if(GetCookie('leftOpen') == "N"){
		$('#closeLeft').click();
	}
	
	//$('tr:odd').css('background-color','#fdfdfd');
	$('.classTr').mouseover(function(){
		$(this).css('background','#f9f9f9');
	});
	$('.classTr').mouseout(function(){
		$(this).css('background','#fff');
	});
});

///////// 로그인 창 띄우기 /////////
function btnPopupLogin() {
	bg_layer_pop_close();
	bg_layer_pop('popupLogin.php');
}