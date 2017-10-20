$(function() {
var strCertId = "N";
/*************************************/
var frmName	= 'frmDefault';
var frmURL	= '/proc/memberProc.php';
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
					alert(res[1]);
					if(res[2]=="edit" || res[2]=="password") {
						alert(res[1]);
						location.reload();
					} else if ( res[2]=="delete") {
						alert(res[1]);
						btnlogout();
					} else {
						_loc=String(document.location).split('?');
						_tid=$("input[name='tid']").val();
						_strType=$("input[name='strType']").val();
						_link="?";
						if(_tid) _link+="&tid="+_tid;
						if(_strType) _link+="&strType="+_strType;
						location.href =_loc[0]+_link ;
					}
				}else{
					alert(res[1]);
				}
			}else{
				alert('서버통신에러! 다시 시도해 주십시오.   ');
			}
		},
		error:function(){
			alert('서버통신에러!! 다시 시도해 주십시오.   ');
		}	
	}

	$("#"+frmName).ajaxSubmit(f_opt);
	return false;
}

$(document).on('click','#btnRegistDefault',function(e){
	e.preventDefault()
	if($('#strId').attr('value') == ""){
		alert("아이디를 정확하게 입력하여 주십시오.   ");
		$('#strId').focus();
		return false;
	}
	if($('#strPassword').attr('value') == ""){
		alert("비밀번호를 정확하게 입력하여 주십시오.   ");
		$('#strPassword').focus();
		return false;
	}
	registerForm();
});

$(document).on('blur','#strId',function(){
	if($('#strId').attr('value').length < 4){
		//alert("아이디는 4자 이상으로 입력하여 주십시오.   ");
		$('#idResult').html('<span style="color:red;">'+'아이디는 4자 이상으로 입력하여 주십시오.'+'<span>');
		$('#strId').focus();
		return false;
	}

	try{
		var jqxhr = $.get('/proc/member_proc.php', {strType:'overlap',strId:$('#strId').attr('value')}, function(d,e){
			var res = d.split('|');
			if(res[0] == "ok"){
				randNumber = res[1];
				$('#idResult').html('<span style="color:#3f8dd5;">'+'사용하셔도 좋은 아이디 입니다.'+'<span>');
				$('#strId').attr('readonly',true);
				strCertId = "Y";
			}else{
				$('#idResult').html('<span style="color:red;">'+res[1]+'<span>');
				$('#strId').focus();
				strCertId = "N";
				return false;
			}					
		});
	}catch(e){
		alert('작업중 에러가 발생하였습니다.   ');
	}
});

$(document).on('click','#btnDeleteDefault',function(){
	if(confirm("삭제된 데이터는 복구되지 않습니다.   \n\n정말로 삭제하시겠습니까?   ")){				
		var strCode	= $(this).attr('num');
		try{
			var jqxhr = $.get(frmURL, {bType:'delete',strCode:strCode}, function(d,e){
				var res = d.split('|');
				if(res[0] == "ok"){
					alert(res[1]);
					location.href = "/empl/buildMember.php?strType=9";
				}if(res[0] == "err"){
					alert(res[1]);
				}
			});
		}catch(e){
			alert('작업중 에러가 발생하였습니다.   ');
		}
	}
});

$(document).on('click','#btnRefreshBusiness',function(){
	$('#strTitle').attr('value','');
	$('#strContent').attr('value','');
	$('#strTitle').focus();
});

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