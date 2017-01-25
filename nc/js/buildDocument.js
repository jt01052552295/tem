$(function() {
	/*************************************/
	var frmName	= 'frmDefault';
	var frmURL	= '/proc/_buildDocumentProc.php';
	/*************************************/
	function registerForm(){
		var f_opt = {
			url: frmURL,
			type: 'post',
			dataType: 'text',
			success: function(d,e){
				//alert(d);
				if (e=="success"){ 
					var res = d.split('|');
					if(res[0] == "ok"){
						alert(res[1]);
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
			var strCode	= $(this).attr('num');
			try{
				var jqxhr = $.get(frmURL, {bType:'delete',strCode:strCode}, function(d,e){
					var res = d.split('|');
					if(res[0] == "ok"){
						alert(res[1]);
						location.href = "<?=$_SERVER['PHP_SELF']?>?strType=<?=$strType?>";
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
	/*************************************/

	var fileNumber = 0;
	$(document).on('click','.btnAddFile',function(){
		++fileNumber;
		if(fileNumber > 10){
			alert('업로드 파일은 10개 까지로 제한합니다.   ');
		}
		$('#divFileLayer'+fileNumber).show();
		//$('#divFileList').append('<div style="padding:2px 0 0 0;"><input type="file" id="file'+fileNumber+'" name="file'+fileNumber+'" style="width:300px;height:20px;" ></div>');
	});

	$(document).on('click','input[name=strType]',function(){
		if($(this).attr('value') == 1){
			$('.divCompany').hide();
		}else{
			$('.divCompany').show();
		}
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