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

$(function() {

$(document).on('click','#popupClose',function() {
	if($("input[name=toDayNone]").is(':checked')) {
		_toDay = $.datepicker.formatDate($.datepicker.ATOM, new Date()); 
		SetCookie('popToday',_toDay);
	} else {
		
	}
	$(".popupSize").css({"display":"none"});
});
	
	$("#mainPop").draggable();

	// 상단메뉴 효과
	$(".gnb_act .topMenu").mouseover(function() {

		$('.bgGnb').animate({height:'50px'});
		$(".subGnb").hide();
		$(".subGnb").css({"top":"90px"});
		_no = $(this).attr('id').replace('topMenu','');
		$("#subGnb"+_no).css({"display":"block"});
		//$("#subGnb"+_no).animate({top:'90px'});
	});

	$(".gnb_noact .topMenu").mouseover(function() {

		$('.bgGnb').animate({height:'0px'});
		$(".subGnb").hide();
		_no = $(this).attr('id').replace('topMenu','');
		$("#subGnb"+_no).css({"display":"none"});
	});
	


	$('.main_video_popup').on('click', function(){
		
		bg_layer_pop_close();
		bg_layer_pop('./video_pop.html');
	
	});

	//사업안내 이미지상세보기
	$(".btn_popB").click(function() {
		
	});
	
	$("select[name='selectbox']").change(function() {
		_val = $(this).val();
		alert('111');
		if(_val) window.open(_val,'_blank');
	});

	// 우측메뉴 액션
	$("#btn_menuR").click(function() {
		$(".util_wrap").fadeIn();
	});

	$(window).resize(function() {
		_width=$(window).width();
		if(_width>960) {
			$(".util_wrap").css({"display":"none"});
			$(".menuR").removeClass('on');
			$(".subm").css({"display":"none"});
		}
	});

	$(".menuR").mouseover(function() {
		$(".menuR").removeClass('on');
		$(".subm").css({"display":"none"});
		_no = $(this).attr('id').replace('m0','');
		$(this).addClass('on');
		$("#sm"+_no).css({"display":"block"});
	});
	

	$("#btn_menuC").click(function() {
		$(".util_wrap").fadeOut();
	});

	//게시판 검색버튼
	$("#boardNormalList_btn_Search").click(function() {
		$("#frm_search").submit();
	});

	//게시판 등록
	$("#btn_regist").click(function() {	
		strCate1=$("input[name=strCate1]").val();
		if(strCate1=='counsel') {
			_frm  = 'strWriter,wr_email,wr_phone1,wr_phone2,wr_phone3,strTitle,strContent';
			_type = 'input,input,input,input,input,input,textarea';
			_msg  = '이름,이메일,연락처,연락처,연락처,제목,내용';
		} else {
			oEditors.getById["strContent"].exec("UPDATE_CONTENTS_FIELD", []);
			_frm  = 'strTitle';
			_type = 'input';
			_msg  = '제목';
		}
		var frmName	= 'frmDefault';	
		var frmURL	= '/common/bbs/bbsAction.php';

		if(frmChk(_frm, _type, _msg)===true) {
			var f_opt = {
				url: frmURL,
				type: 'post',
				dataType: 'text',
				success: function(d,e){
					if (e=="success"){
						var res = d.split('|');
						if(res[0] == "ok"){
							if(strCate1=='counsel') {
								alert('정상적으로 문의되었습니다.');
								location.reload();
								return false;
							} else {
								alert(res[1]);
								_bType=$("input[name=bType]").val();
								if(_bType=='write') {
									location.href=location.pathname;
								} else {
									location.href=location.href.replace('edit','view');
								}
							}
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
			$("#"+frmName).ajaxSubmit(f_opt);
		}
	
	});
	
	//게시판 게시물 삭제
	$("#btn_delete").click(function() {
		_loc    = location.pathname.split('/');
		_chkloc = _loc[_loc.length-1];
		var frmURL	= '/common/bbs/bbsAction.php';
		
		if(confirm("삭제된 데이터는 복구되지 않습니다.   \n\n정말로 삭제하시겠습니까?")){	
			var intId		= $(this).attr('num');
			try{
				var jqxhr = $.get(frmURL, {bType:'delete',intId:intId}, function(d,e){
					var res = d.split('|');
					if(res[0] == "ok"){
						alert(res[1]);
						location.href=location.href.replace('view','list');
					}if(res[0] == "err"){
						alert(res[1]);
					}
				});
			}catch(e){
				alert('작업중 에러가 발생하였습니다.   ');
			}
		}
	});
	
	//게시판 파일삭제
	$(".btnDeleteFile").click(function() {
		var frmURL	= '/common/bbs/bbsAction.php';
		if(confirm("삭제된 파일은 복구되지 않습니다.   \n\n정말로 삭제하시겠습니까?   ")){
			_no=$(this).attr('id').split('_');
			var intId	= _no[1];				
			var strFileVar	= _no[2];
			try{
				var jqxhr = $.get(frmURL, {bType:'deleteFile',intId:intId,strFileVar:strFileVar}, function(d,e){
					var res = d.split('|');
					if(res[0] == "ok"){
						location.reload();
					}if(res[0] == "err"){
						alert(res[1]);
					}
				});
			}catch(e){
				alert('작업중 에러가 발생하였습니다.   ');
			}
		}
	});

	$(".btn_popB").click(function() {
		no = $(this).attr('num');
		bg_layer_pop_close();
		bg_layer_pop('/business/popBusiness.php?no='+no);
	});
///////// 팝업 레이어 닫기 (공통) /////////	
$(document).on('click','.btnClosePopup',function(){
	bg_layer_pop_close();
});

	//폼 체크 
	function frmChk(_frm, _type, _msg) {
		_arrFrm  = _frm.split(',');
		_arrType = _type.split(',');
		_arrMsg  = _msg.split(',');
		_sdate   = "";
		_edate	 = "";
		//sdate, edate 유형을 입력하면 날짜를 비교한다.
		
		for(i=0;i<=_arrFrm.length-1;i++) {
			if(_arrType[i]=='sdate' || _arrType[i]=='edate' ) {
				if(_arrType[i]=='sdate') {
					_sdate    = $("input[name='"+_arrFrm[i]+"']").val().replace(".", "").replace(".", "");
					_sdateMsg = _arrMsg[i];
				}
				if(_arrType[i]=='edate') {
					_edate    = $("input[name='"+_arrFrm[i]+"']").val().replace(".", "").replace(".", "");
					_edateMsg = _arrMsg[i];
				}
			} else {
				if(!$(_arrType[i]+"[name='"+_arrFrm[i]+"']").val()) {
					if(_arrFrm[i]=="strSignCode") {
						alert(_arrMsg[i]+"을 최소 1명이상 되어야합니다.");
					} else if (_arrType[i]=="select") {
						alert(_arrMsg[i]+"을(를) 선택해주세요.");
					} else {
						alert(_arrMsg[i]+"을(를) 입력해주세요.");
					}
					$(_arrType[i]+"[name='"+_arrFrm[i]+"']").focus();
					return false;
				}
			}
		}

		if(_sdate && _edate ) {
			if(Number(_sdate)>Number(_edate)) {
				alert(_sdateMsg+"보다 "+_edateMsg+"이 작을 수 없습니다.");
				return false;
			}
			
		}
		return true;
	}

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
		$("#wrap").append("<div id=\"layer_bg\" class=\"opa50 black_bg\"></div><div id=\"layer_contents\" class=\"opa50\"></div>");
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
			var contentWidth = parseInt((windowWidth - parseInt($("#layer_contents").css('width')))/2) * -1 + "px";
			var contentw = parseInt($("#layer_contents").css('width')) /2 * -1;
			$("#layer_contents").css('left',"50%");
			$("#layer_contents").css('margin-left', contentw +"px");

			$('#layer_contents').css('top',(position+100)+'px');
			$('#layer_contents').animate({opacity:1},{queue:false, duration:500, easing:'easeOutExpo'});
			$('#layer_contents').animate({top:(position+100)+'px'},{queue:false, duration:500, easing:'easeOutExpo'});
		});         
	}
});