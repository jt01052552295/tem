
$(function() {
	/*************************************/
	var frmName	= 'frmSmart';
	var frmURL	= '/proc/_smartProc.php';
	/*************************************/
	function registerForm(){
		var f_opt = {
			url: frmURL,
			type: 'post',
			dataType: 'text',
			success: function(d,e){
				alert(d);
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
		if($('#strBuildCode').attr('value') == ""){
			alert("공사현장을 정확하게 선택하여 주십시오.   ");
			$('#strBuildCode').focus();
			return false;
		}
		if($('#strDate').attr('value') == ""){
			alert("작업일자를 정확하게 입력하여 주십시오.   ");
			$('#strDate').focus();
			return false;
		}
		//노무
		var _kindCode="";
		var _kind2Code="";
		var _kindCount="";
		var _kindUnit="";
		var _kindMemo="";
		$("select[name='strKindCode']").each(function() {
			_kindCode+=$(this).val()+"|";
		});
		$("select[name='strKind2Code']").each(function() {
			_kind2Code+=$(this).val()+"|";
		});
		$("input[name='intKindCount']").each(function() {
			_kindCount+=$(this).val()+"|";
			_kindUnit+="명|";
		});
		$("input[name='strKindMemo']").each(function() {
			_kindMemo+=$(this).val()+"|";
		});
		$("input[name='KindCode']").val(_kindCode);
		$("input[name='Kind2Code']").val(_kind2Code);
		$("input[name='KindCount']").val(_kindCount);
		$("input[name='KindUnit']").val(_kindUnit);
		$("input[name='KindMemo']").val(_kindMemo);

		
		//자재
		var _materialCode="";
		var _material2Code="";
		var _materialCount="";
		var _materialUnit="";
		var _materialMemo="";
		$("select[name='strMaterialCode']").each(function() {
			_materialCode+=$(this).val()+"|";
		});
		$("select[name='strMaterial2Code']").each(function() {
			_material2Code+=$(this).val()+"|";
		});
		$("input[name='intMaterialCount']").each(function() {
			_materialCount+=$(this).val()+"|";
		});
		$("select[name='strMaterialUnit']").each(function() {
			_materialUnit+=$(this).val()+"|";
		});
		$("input[name='strMaterialMemo']").each(function() {
			_materialMemo+=$(this).val()+"|";
		});
		$("input[name='MaterialCode']").val(_materialCode);
		$("input[name='Material2Code']").val(_material2Code);
		$("input[name='MaterialCount']").val(_materialCount);
		$("input[name='MaterialUnit']").val(_materialUnit);
		$("input[name='MaterialMemo']").val(_materialMemo);

		//장비
		var _equipmentCode="";
		var _equipment2Code="";
		var _equipmentCount="";
		var _equipmentUnit="";
		var _equipmentMemo="";
		$("select[name='strEquipmentCode']").each(function() {
			_equipmentCode+=$(this).val()+"|";
		});
		$("select[name='strEquipment2Code']").each(function() {
			_equipment2Code+=$(this).val()+"|";
		});
		$("input[name='intEquipmentCount']").each(function() {
			_equipmentCount+=$(this).val()+"|";
		});
		$("select[name='strEquipmentUnit']").each(function() {
			_equipmentUnit+=$(this).val()+"|";
		});
		$("input[name='strEquipmentMemo']").each(function() {
			_equipmentMemo+=$(this).val()+"|";
		});
		$("input[name='EquipmentCode']").val(_equipmentCode);
		$("input[name='Equipment2Code']").val(_equipment2Code);
		$("input[name='EquipmentCount']").val(_equipmentCount);
		$("input[name='EquipmentUnit']").val(_equipmentUnit);
		$("input[name='EquipmentMemo']").val(_equipmentMemo);

		//노무
		var _kindCode_t="";
		var _kind2Code_t="";
		var _kindMemo_t="";
		$("select[name='strKindCode_t']").each(function() {
			_kindCode_t+=$(this).val()+"|";
		});
		$("select[name='strKind2Code_t']").each(function() {
			_kind2Code_t+=$(this).val()+"|";
		});
		$("input[name='strKindMemo_t']").each(function() {
			_kindMemo_t+=$(this).val()+"|";
		});
		$("input[name='KindCode_t']").val(_kindCode_t);
		$("input[name='Kind2Code_t']").val(_kind2Code_t);
		$("input[name='KindMemo_t']").val(_kindMemo_t);
		
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

	$(document).on('click','.btnDeleteFile',function(){
		if(confirm("삭제된 파일은 복구되지 않습니다.   \n\n정말로 삭제하시겠습니까?   ")){				
			var strCode	= $(this).attr('num');				
			var strFileVar	= $(this).attr('strFileVar');
			try{
				var jqxhr = $.get(frmURL, {bType:'deleteFile',strCode:strCode,strFileVar:strFileVar}, function(d,e){
					//alert(d);
					var res = d.split('|');
					if(res[0] == "ok"){
						//alert(res[1]);
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

	$(document).on('click','#btnRefreshBusiness',function(){
		$('#strTitle').attr('value','');
		$('#strContent').attr('value','');
		$('#strTitle').focus();
	});

	$("select[name='strKindCode']").live('change',function(e) {
		var box=$(e.target);
		var frmURL	= '/proc/_category.php';
		try{
			var jqxhr = $.get(frmURL, {pCate:box.val()}, function(d,e){
				var res = d.split('|');
				if(res[0] == "ok"){
					_no=box.parent().parent().attr('id').replace('areaSub1_','');
					_idx=0;
					$("select[name='strKind2Code']").each(function() {
						if(_no==_idx) {
							_fop="<option value=''>"+$(this).children(":first-child").html()+"</option>";
							_exVal=res[1].split('&');
							for(j=0;j<=(_exVal.length)-2;j++) {
								_fop+="<option value='"+_exVal[j]+"'>"+_exVal[j]+"</option>";
							}
							$(this).children().remove();
							$(this).append(_fop);
						}
						_idx++;
					});
				}if(res[0] == "err"){
					alert(res[1]);
				}
			});
		}catch(e){
			alert('작업중 에러가 발생하였습니다.   ');
		}
	});

	$("select[name='strMaterialCode']").live('change',function(e) {
		
		var box=$(e.target);
		var frmURL	= '/proc/_category.php';
		try{
			var jqxhr = $.get(frmURL, {pCate:box.val()}, function(d,e){
				var res = d.split('|');
				if(res[0] == "ok"){
					_no=box.parent().parent().attr('id').replace('areaSub2_','');
					_idx=0;
					$("select[name='strMaterial2Code']").each(function() {
						if(_no==_idx) {
							_fop="<option value=''>"+$(this).children(":first-child").html()+"</option>";
							_exVal=res[1].split('&');
							for(j=0;j<=(_exVal.length)-2;j++) {
								_fop+="<option value='"+_exVal[j]+"'>"+_exVal[j]+"</option>";
							}
							$(this).children().remove();
							$(this).append(_fop);
						}
						_idx++;
					});
				}if(res[0] == "err"){
					alert(res[1]);
				}
			});
		}catch(e){
			alert('작업중 에러가 발생하였습니다.   ');
		}
	});

	$("select[name='strEquipmentCode']").live('change',function(e) {
		
		var box=$(e.target);
		var frmURL	= '/proc/_category.php';
		try{
			var jqxhr = $.get(frmURL, {pCate:box.val()}, function(d,e){
				var res = d.split('|');
				if(res[0] == "ok"){
					_no=box.parent().parent().attr('id').replace('areaSub3_','');
					_idx=0;
					$("select[name='strEquipment2Code']").each(function() {
						if(_no==_idx) {
							_fop="<option value=''>"+$(this).children(":first-child").html()+"</option>";
							_exVal=res[1].split('&');
							for(j=0;j<=(_exVal.length)-2;j++) {
								_fop+="<option value='"+_exVal[j]+"'>"+_exVal[j]+"</option>";
							}
							$(this).children().remove();
							$(this).append(_fop);
						}
						_idx++;
					});
				}if(res[0] == "err"){
					alert(res[1]);
				}
			});
		}catch(e){
			alert('작업중 에러가 발생하였습니다.   ');
		}
	});

	$("select[name='strKindCode_t']").live('change',function(e) {
		var box=$(e.target);
		var frmURL	= '/proc/_category.php';
		try{
			var jqxhr = $.get(frmURL, {pCate:box.val()}, function(d,e){
				var res = d.split('|');
				if(res[0] == "ok"){
					_no=box.parent().parent().attr('id').replace('areaSub4_','');
					_idx=0;
					$("select[name='strKind2Code_t']").each(function() {
						if(_no==_idx) {
							_fop="<option value=''>"+$(this).children(":first-child").html()+"</option>";
							_exVal=res[1].split('&');
							for(j=0;j<=(_exVal.length)-2;j++) {
								_fop+="<option value='"+_exVal[j]+"'>"+_exVal[j]+"</option>";
							}
							$(this).children().remove();
							$(this).append(_fop);
						}
						_idx++;
					});
				}if(res[0] == "err"){
					alert(res[1]);
				}
			});
		}catch(e){
			alert('작업중 에러가 발생하였습니다.   ');
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

function DocAdd(idx) {
	_addHtml="<div id='areaSub"+idx+"_"+$(".areaSub"+idx).length+"' class='areaSub"+idx+"'>";
	$('#area'+idx).append(_addHtml+$("#areaSub"+idx+"_0").html().replace('selected','').replace('selected','')+'</div>');
}
