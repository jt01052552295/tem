$(function() {	

	/*************************************/
	var frmName	= 'frmDefault';
	var frmURL	= '/proc/_bbsProcAjax.php';
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
						if(res[2]=="edit") {
							_loc=String(document.location).replace('edit','view');
							location.href =_loc ;
						} else {
							var _link='';
							_loc=String(document.location).split('?');
							if(_loc[1]) {
							_path=_loc[1].split('path=');
								if(_path[1]) {
									_path=_path[1].split('&');
								}
							}						
							_tid=$("input[name='tid']").val();
							if(_tid) _link="?tid="+_tid;
							if(_path) _link="?path="+_path[0];
							for(i=1;i<=Number(_path.length)-1;i++) {
								_link+='&'+_path[i];
							}
							if(_path[0]=='ingClient'){
								location.href =_loc[0]+_link ;
								return false;
							} 
							if(_path[0]=='ingCooperation'){
								location.href =_loc[0]+_link ;
								return false;
							} 
							if(_path[0]){
								location.reload();
								return false;
							} 
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
				alert('서버통신에러! 다시 시도해 주십시오.   ');
			}	
		}   
		$("#"+frmName).ajaxSubmit(f_opt);
		return true;
	}

	_bType=$("input[name='bType']").val();
	if(_bType=='write' || _bType=='edit' || _bType=='answer') {
			var oEditors = [];
			// 추가 글꼴 목록
			//var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

			nhn.husky.EZCreator.createInIFrame({
				oAppRef: oEditors,
				elPlaceHolder: "strContent",
				sSkinURI: "../se2/SmartEditor2Skin.html",
				htParams : {
					bUseToolbar : true,				// 툴바 사용 여부 (true:사용/ false:사용하지 않음)
					bUseVerticalResizer : true,		// 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
					bUseModeChanger : true,			// 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
					//aAdditionalFontList : aAdditionalFontSet,		// 추가 글꼴 목록
					fOnBeforeUnload : function(){
						//alert("완료!");
					}
				}, //boolean
				fOnAppLoad : function(){
					//예제 코드
					//oEditors.getById["strContent"].exec("PASTE_HTML", ["로딩이 완료된 후에 본문에 삽입되는 text입니다."]);
				},
				fCreator: "createSEditor2"
			});

			function pasteHTML() {
				var sHTML = "<span style='color:#FF0000;'>이미지도 같은 방식으로 삽입합니다.</span>";
				oEditors.getById["strContent"].exec("PASTE_HTML", [sHTML]);
			}

			function showHTML() {
				var sHTML = oEditors.getById["strContent"].getIR();
				alert(sHTML);
			}
				
			function submitContents(elClickedObj) {
				oEditors.getById["strContent"].exec("UPDATE_CONTENTS_FIELD", []);	// 에디터의 내용이 textarea에 적용됩니다.
				// 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("strContent").value를 이용해서 처리하면 됩니다.
				try {
					elClickedObj.form.submit();
				} catch(e) {}
			}

			function setDefaultFont() {
				var sDefaultFont = '궁서';
				var nFontSize = 24;
				oEditors.getById["strContent"].setDefaultFont(sDefaultFont, nFontSize);
			}
	}
		var fileNumber = $("input[name='fileCnt']").val();
		if(!fileNumber) fileNumber=1;
		$(document).on('click','.btnAddFile',function(){
		++fileNumber;
		if(fileNumber > 10){
			alert('업로드 파일은 10개 까지로 제한합니다. ');
		}
		$("#strFile"+fileNumber).css({"display":"block"});
		
		});

		$(document).on('click','#btnRegistDefault',function(){
			if($('#strTitle').val().length < 5){
				alert('제목은 최소 5자이상 입력해 주셔야 합니다.   ');
				frm.strTitle.focus();
				return false;
			}
			oEditors.getById["strContent"].exec("UPDATE_CONTENTS_FIELD", []);	// 에디터의 내용이 textarea에 적용됩니다.
			// 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("strContent").value를 이용해서 처리하면 됩니다.
			if($('#strContent').val() == ""){
				alert('내용을 정확하게 입력해 주세요.   ');
				return false;
			}

			registerForm();
		});

		$(document).on('click','#btnDeleteDefault',function(){
			if(confirm("삭제된 데이터는 복구되지 않습니다.   \n\n정말로 삭제하시겠습니까?   ")){				
				var intId		= $("input[name='intId']").val();
				var boardCate	= $("input[name='boardCate']").val();
				try{
					var jqxhr = $.get(frmURL, {bType:'delete',intId:intId,boardCate:boardCate}, function(d,e){
						var res = d.split('|');
						if(res[0] == "ok"){
							alert(res[1]);
							_loc=String(document.location).split('?');
							if(_loc[1]) {
							_path=_loc[1].split('path=');
								if(_path[1]) {
									_path=_path[1].split('&');
								}
							}
							
							_tid=$("input[name='tid']").val();
							if(_tid) _link="?tid="+_tid;
							if(_path) _link="?path="+_path[0];
							location.href =_loc[0]+_link ;
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
				var intId	= $("input[name='intId']").val();	
				var strFileVar	= $(this).attr('strFileVar');
				var boardCate	= $("input[name='boardCate']").val();
				try{
					var jqxhr = $.get(frmURL, {bType:'deleteFile',intId:intId,strFileVar:strFileVar,boardCate:boardCate}, function(d,e){
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


		$(document).on('click','.btnRegistComment',function(){
			if($('#commentContent').val() == "" || $('#commentContent').val() == "로그인 하신 후 댓글을 작성해 주세요."){
				alert('코멘트 내용을 정확하게 입력하여 주십시오.   ');
				$('#commentContent').attr('value','');
				$('#commentContent').focus();
				return false;
			}
			var intBBSId	= $("input[name='intId']").val();
			var strContent	= $('#commentContent').val();
			try{
				var jqxhr = $.get('/proc/_commentProc.php', {cType:'write',intBBSId:intBBSId,strContent:strContent}, function(d,e){
					
					var res = d.split('|^|');
					if(res[0] == "ok"){
						var str	=		'<div class="divComment" num="'+res[1]+'">';
							str	= str + '	<div style="float:left;width:85%;">';
							str	= str + '		<div style="padding:10px 0 5px 10px;color:#888;"><strong>'+res[2]+'</strong> <span class="fs11px clg2">('+res[3]+')</span></div>';
							str	= str + '		<div style="padding:0 0 10px 10px;">'+$('#commentContent').val()+'</div>';
							str	= str + '	</div>';
							str	= str + '	<div style="float:left;padding:18px 0 0 20px;width:80px;"><img class="btnDeleteComment" num="'+res[1]+'" src="/img/btn_reply_delete.gif" alt="삭제" style="cursor:pointer;" /></div>';
							str	= str + '	<br style="clear:both;" />';
							str	= str + '</div>';
						$('#divCommentLayer').prepend(str);
					}else if(res[0] == "err"){
						alert(res[1]);
					}
				});
			}catch(e){
				alert('작업중 에러가 발생하였습니다.   ');
			}
		});
		$(document).on('click','.element',function(){
			
			var num = $(this).attr('num');
			if(!num){
				alert('데이터가 없습니다.');
				return false;
			}

			bg_layer_pop_close();
			bg_layer_pop('popupBusiness.php?strCode=' + num);
		})
		$(document).on('click','.btnDeleteComment',function(){
			var intId	= $(this).attr('num');
			try{
				var jqxhr = $.get('/proc/_commentProc.php', {cType:'delete',intId:intId}, function(d,e){
					var res = d.split('|^|');
					if(res[0] == "ok"){
						$('.divComment[num='+res[1]+']').remove();
					}else if(res[0] == "err"){
						alert(res[1]);
					}
				});
			}catch(e){
				alert('작업중 에러가 발생하였습니다.   ');
			}
		});
		$(document).on('click','#commentContent',function(){
			$(this).val('');
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