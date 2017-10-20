
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


$(document).on('click','.smartPrev',function(e) {
	e.preventDefault();

	var strCode = $(this).attr('data-strCode');
	var jqxhr = $.get('/proc/_smartCall.php', {strCode:strCode, act:'prev'}, function(d,e){
		var json = JSON.parse(d); 
		var result = json.records;

		if(result.status == 'fail'){
			alert(result.message);
			return false;
		} else {

			$('.ingviewListDate > span.date').html(result.data.rsListDate);
			$('.ingviewListDate > a.smartPrev').attr('data-strCode', result.data.rsStrCode);
			$('.ingviewListDate > a.smartNext').attr('data-strCode', result.data.rsStrCode);
			$('.ingviewTable td.rsDate').html(result.data.rsStrDate);
			$('.ingviewTable td.rsToday').html(result.data.rsToday);
			$('.ingviewTable td.rsMemo').html(result.data.rsStrMemo);
			$('.ingviewList > div.IMG > img').attr('src', result.data.rsStrFile1);
			$('.MoreBtn > a').attr('href', result.data.rsLink);

		}

		
	});
});



$(document).on('click','.smartNext',function(e) {
	e.preventDefault();

	var strCode = $(this).attr('data-strCode');
	var jqxhr = $.get('/proc/_smartCall.php', {strCode:strCode, act:'next'}, function(d,e){
		var json = JSON.parse(d); 
		var result = json.records;

		if(result.status == 'fail'){
			alert(result.message);
			return false;
		} else {

			$('.ingviewListDate > span.date').html(result.data.rsListDate);
			$('.ingviewListDate > a.smartPrev').attr('data-strCode', result.data.rsStrCode);
			$('.ingviewListDate > a.smartNext').attr('data-strCode', result.data.rsStrCode);
			$('.ingviewTable td.rsDate').html(result.data.rsStrDate);
			$('.ingviewTable td.rsToday').html(result.data.rsToday);
			$('.ingviewTable td.rsMemo').html(result.data.rsStrMemo);
			$('.ingviewList > div.IMG > img').attr('src', result.data.rsStrFile1);
			$('.MoreBtn > a').attr('href', result.data.rsLink);
		}
	});
});

$(document).on('click','.cate1Select',function(e) {
	e.preventDefault();
	
	if( $('.ingCategory_nav').hasClass('on') ){
		$('.ingCategory_nav').removeClass('on')
	} else {
		$('.ingCategory_nav').addClass('on')
	}
	$(this).siblings().toggle();
});

$(document).on('click','.ingCategory_nav .toggle_sitelinkselect > li > a',function(e) {
	e.preventDefault();
	var _thisValue = $(this).text();
	var _thisKind = $(this).attr('data-kind');

	if( $('.ingCategory_nav').hasClass('on') ){
		$('.ingCategory_nav').removeClass('on')
	} else {
		$('.ingCategory_nav').addClass('on')
	}

	$('.ingCategory_nav  .toggle_sitelinkselect').css({'display':'none'})
	$('.cate1Select').html(_thisValue);

	$.fn.initList(_thisKind);
});

$(document).on('click','.cate2Select',function(e) {
	e.preventDefault();
	
	if( $('.ingCategory_nav2').hasClass('on') ){
		$('.ingCategory_nav2').removeClass('on')
	} else {
		$('.ingCategory_nav2').addClass('on')
	}
	$(this).siblings().toggle();
});

$(document).on('click','.ingCategory_nav2 .toggle_sitelinkselect2 > li > a',function(e) {
	e.preventDefault();
	var _thisValue = $(".cate1Select").text();
	var _thisKind = $(this).attr('data-code');
	var path = $('.smartCateNext').attr('data-path');

	
	$('.cate2Select').html(_thisKind);
	$('.ingCategoryListDate span.category').html(_thisKind);
	

	if( $('.ingCategory_nav2').hasClass('on') ){
		$('.ingCategory_nav2').removeClass('on')
	} else {
		$('.ingCategory_nav2').addClass('on')
	}

	$('.ingCategory_nav2  .toggle_sitelinkselect2').css({'display':'none'})

	$('.smartCatePrev').attr('data-page', '-5')
	$('.smartCateNext').attr('data-page', '5')


	$.fn.callCategoryList(_thisValue, _thisKind, 0, path);
});

$(document).on('click','.smartCatePrev',function(e) {
	e.preventDefault();



	var _thisValue = $(".cate1Select").text();
	var _thisKind =  $(".cate2Select").text();
	var page = parseInt($(this).attr('data-page'));
	var path = $(this).attr('data-path');

	if(page<0){
		alert("불러올 이전 자료가 없습니다.");
		return false;
	}



	

	$.fn.callCategoryList(_thisValue, _thisKind, page, path);

	var prevPage = parseInt($('.smartCatePrev').attr('data-page')) - 5;
	var nextPage = parseInt($('.smartCateNext').attr('data-page')) - 5;

	
	$('.smartCatePrev').attr('data-page', prevPage)
	$('.smartCateNext').attr('data-page', nextPage)
});



$(document).on('click','.smartCateNext',function(e) {
	e.preventDefault();

	var _thisValue = $(".cate1Select").text();
	var _thisKind =  $(".cate2Select").text();
	var page = $(this).attr('data-page');
	var path = $(this).attr('data-path');

	$.fn.callCategoryList(_thisValue, _thisKind, page, path);

	
	var prevPage = parseInt($('.smartCatePrev').attr('data-page')) + 5;
	var nextPage = parseInt($('.smartCateNext').attr('data-page')) + 5;

	
	$('.smartCatePrev').attr('data-page', prevPage)
	$('.smartCateNext').attr('data-page', nextPage)
});



$(function() {
	$.fn.initList = function(category1){
		var _thisValue = $(".cate1Select").text();
		var _thisKind = $('.ingCategory_nav .toggle_sitelinkselect > li > a').attr('data-kind');
		var path = $('.smartCateNext').attr('data-path');

		var jqxhr = $.get('/proc/_smartCategory.php', {category1:category1}, function(d,e){
			if(d == 'error'){
				alert("자료가 없습니다.");
				return false;
			} else {
				$('.toggle_sitelinkselect2').html(d);
				var firstValue = $('.toggle_sitelinkselect2 li').first().children().html();
				
				$('.ingCategoryListDate span.category').html(firstValue);
				$('.cate2Select').html(firstValue);

				$.fn.callCategoryList(_thisValue, firstValue, 0, path);
			}
		});
	};
	$.fn.initList('strKindCode');
	
	
	$.fn.callCategoryList = function(category1, category2, page, path){
		if(!page) page = 0;
		if(!path) path = 'ing';

		var _thisBuildCode = $('.ingCategoryListDate span.category').attr('data-strbuildcode');


		console.log(category1, category2, _thisBuildCode, page, path)

		var jqxhr = $.get('/proc/_smartList.php', {category1:category1, category2:category2, strBuildCode:_thisBuildCode, page:page, path:path}, function(d,e){
			if(d == 'error'){
				alert("자료가 없습니다.");
				return false;
			} else {
				$('.ingCategorynextList ul.result').html(d);


			}
		});
	}
});


