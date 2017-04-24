$(function() {
/*************************************/
var frmName	= 'frmBuild';
var frmURL	= '/proc/_buildProc.php';
/*************************************/
function registerForm(){
	var f_opt = {
		url: frmURL,
		type: 'post',
		dataType: 'text',
		success: function(d,e){
			if (e=="success"){ 
				var res = d.split('|');
				if(res[0] == "ok"){
					_loc=String(document.location).split('?');
					location.href =_loc[0];
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
	return true;
}

$(document).on('click','#btnRegistDefault',function(){
	if($('#strType').attr('value') == ""){
		alert("공사코드를 정확하게 입력하여 주십시오.   ");
		$('#strType').focus();
		return false;
	}
	if($('#strName').attr('value') == ""){
		alert("공사명칭을 정확하게 입력하여 주십시오.   ");
		$('#strName').focus();
		return false;
	}
	registerForm();
});

$(document).on('click','#btnDeleteDefault',function(){
	if(confirm("삭제된 데이터는 복구되지 않습니다.   \n\n정말로 삭제하시겠습니까?   ")){				
		var strCode	= $("input[name='strCode']").val();
		try{
			var jqxhr = $.get(frmURL, {bType:'delete',strCode:strCode}, function(d,e){
				var res = d.split('|');
				if(res[0] == "ok"){
					alert(res[1]);
					_loc=String(document.location).split('?');
					location.href =_loc[0];
				}if(res[0] == "err"){
					alert(res[1]);
				}
			});
		}catch(e){
			alert('작업중 에러가 발생하였습니다.   ');
		}
	}
});

	$(document).on('keyup','#intCostNumber3',function(){
		var strCostVAT = $('input[name=strCostVAT]').attr('value');
		var number = numberFormat($('#intCostNumber3').attr('value'));
		if($('input[name=strCostVAT][value=Y]').attr('checked') == "checked"){
			number2 = numberFormat(",," + parseInt(unNumberFormat(number) * 1.1));
			number3 = numberFormat(",," + parseInt(unNumberFormat(number) * 0.1));
			$('#intCostNumber3').attr('value', number);
			$('#intCostNumber').attr('value', number2);
			$('#intCostNumber2').attr('value', number3);
		}else{
			number2 = number;
			number3 = 0;
			$('#intCostNumber3').attr('value', number);
			$('#intCostNumber').attr('value', number2);
			$('#intCostNumber2').attr('value', number3);
		}
	});
	$(document).on('click','input[name=strCostVAT]',function(){
		var strCostVAT = $(this).attr('value');
		var number = numberFormat($('#intCostNumber3').attr('value'));
		if(strCostVAT == "Y"){
			number2 = numberFormat(",," + parseInt(unNumberFormat(number) * 1.1));
			number3 = numberFormat(",," + parseInt(unNumberFormat(number) * 0.1));
			$('#intCostNumber3').attr('value', number);
			$('#intCostNumber').attr('value', number2);
			$('#intCostNumber2').attr('value', number3);
		}else{
			number2 = number;
			number3 = 0;
			$('#intCostNumber3').attr('value', number);
			$('#intCostNumber').attr('value', number2);
			$('#intCostNumber2').attr('value', number3);
		}
	});

$(function() {
	_loc2=location.href;
	_pno=_loc2.match(/perPage=[0-9]+/gi);

	if(_pno) $('select[name=perPage] option[value='+String(_pno).replace('perPage=','')+']').attr('selected',true)
	$(document).on('change','select[name=perPage]',function(){
		_loc=String(document.location).split('?');
		if(_loc[1]) {
			_param1=_loc[1].replace(_pno,'');
		} else {
			_param1="";
		}
		if(_param1) {
			
			_param="?"+_param1+"&perPage="+$(this).val();
		} else {
			_param="?perPage="+$(this).val();
		}
		location.href =_loc[0]+_param;
	});

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
	$(".datePicker").datepicker(arrDatePicker);
});

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




$(document).on('click','.Bulid_more',function(e) {
	e.preventDefault();
	cnt  = $(".ingTable").length;
	exPath1 = location.href.split('?');
	exPath2 = exPath1[1].split('=');
	
	var jqxhr = $.get('/proc/_build.php', {path:exPath2[1].replace('#',''),cnt:cnt}, function(d,e){
		var res = d.split('|');
		if(res[0] == "err"){
			alert(res[1]);
			return false;
		}else if(res[0] == "ok"){
			$(".gallery").append(res[1]);
			return false;
		}
	});
});

$(document).on('click','.Bulid_more2',function(e) {
	e.preventDefault();
	cnt  = $(".ingTable").length;
	exPath1 = location.href.split('?');
	exPath2 = exPath1[1].split('=');
	
	var jqxhr = $.get('/proc/_build2.php', {path:exPath2[1].replace('#',''),cnt:cnt}, function(d,e){
		var res = d.split('|');
		if(res[0] == "err"){
			alert(res[1]);
			return false;
		}else if(res[0] == "ok"){
			$(".gallery").append(res[1]);
			return false;
		}
	});
});

