<?php
//////////난수 리턴
function mail_ran_num($i, $j)
{
	srand ((double)microtime ()*1000000);
	$random = rand ($i, $j);
	return $random;
}


$ran_num = mail_ran_num(1000, 9999);

$ran_num_1= substr ($ran_num, 0, 1);
$ran_num_2= substr ($ran_num, 1, 1);
$ran_num_3= substr ($ran_num, 2, 1);
$ran_num_4= substr ($ran_num, 3, 1);

$ran_num = crypt ($ran_num, "18");
?>


<form id="mailForm" method="post" name="mailform" enctype="multipart/form-data">
<input type="hidden" name="mail_code" value="<?=$mail_code?>">
<input type="hidden" name="uri" value="<?=$uri?>">

<!-- ++++++++++탑이미지++++++++++ -->



	<div class="policyWrap " style="display:none">
		<h2>개인정보수집에 대한 내용</h2>
		<div id="guest_privacy">
            <?php echo $default['de_guest_privacy']; ?>
        </div>
		<div class="agreeChkWrap">
			<input class="checkbox" type="checkbox" id="agree" name="agree" value="Y">
			<label class="agreeTxt" for="agree">동의합니다</label>
			<span class="check"><i class="far fa-check-square"></i></span>
		</div>
	</div>


	<div class="mailTit">
		<h4>작성자정보</h4> <p><span class="mail_star">*</span>항목은 필수 입력사항입니다.</p>
	</div>
	<div class="mailFormWrap">
		<div class="inputForm half">
			<div class="cell label">업체명</div>
			<div class="cell"><input type="text" name="company" class="inputTextMail" /></div>
		</div>
		<div class="inputForm half">
			<div class="cell label">부서명</div>
			<div class="cell"><input type="text" name="post" class="inputTextMail" /></div>
		</div>
		<div class="inputForm half">
			<div class="cell label">담당자명<span class="mail_star">*</span></div>
			<div class="cell"><input type="text" name="name" class="inputTextMail" /></div>
		</div>
		<div class="inputForm half">
			<div class="cell label">연락처</div>
			<div class="cell"><input type="text" name="tel" class="inputTextMail" /></div>
		</div>
		<div class="inputForm half">
			<div class="cell label">이메일<span class="mail_star">*</span></div>
			<div class="cell"><input type="text" name="email" class="inputTextMail" /></div>
		</div>
		<div class="inputForm half">
			<div class="cell label">FAX</div>
			<div class="cell"><input type="text" name="fax" class="inputTextMail" /></div>
		</div>
	</div>


	<div class="mailTit">
		<h4>문의내용</h4> <p><span class="mail_star">*</span>항목은 필수 입력사항입니다.</p>
	</div>
	<div class="mailFormWrap">
		<div class="inputForm">
			<div class="cell label">문의사항<span class="mail_star">*</span></div>
			<div class="cell"><textarea name="memo" class="textareaMail"></textarea></div>
		</div>
	</div>


	<div class="mailTit">
		<h4>광고필터링</h4> <p><span class="mail_star">*</span>항목은 필수 입력사항입니다.</p>
	</div>
	<div class="mailFormWrap">
		<div class="inputForm">
			<div class="cell label">
				<img src="./image/check_<?=$ran_num_1?>.gif"><img src="./image/check_<?=$ran_num_2?>.gif"><img src="./image/check_<?=$ran_num_3?>.gif"><img src="./image/check_<?=$ran_num_4?>.gif">
			</div>
			<div class="cell">
				<input type="text" name="write_checking" maxlength="4" class="inputTextMail" /> <span  class="mail_help">왼쪽에 보이시는 4자리 숫자를 입력해 주십시요.</span>
			</div>
		</div>
	</div>



	<div class="mail_submit"><input type="button" id="onSubmitMail" value="작성완료"></div>
</form>


<script>

	$(document).ready(function(){

		var ing = "";

		$('#onSubmitMail').on('click', function(e){
			var frmURL	= './mailAjax.php';
			var params = $("#mailForm").serialize();
			var f = document.mailform;
			//var agreeVal = f.agree.checked;

			//if(!agreeVal){ alert('개인정보보호 동의 체크 해주세요.'); f.agree.focus();  return false; }
			if(!f.name.value){alert('이름을 입력해 주십시오.');f.name.focus();  return false;}
			if(!f.email.value){alert('이메일을 입력해 주세요. 작성하시는 이메일로 답변이 발송됩니다.');f.email.focus();  return false;}
			if(!f.write_checking.value){alert('광고필터링의 숫자를 똑같이 입력해 주십시오.');f.write_checking.focus();  return false;}

			if(ing == ""){
				$.ajax({
					url: frmURL,
					type: 'POST',
					data:params,
					contentType: 'application/x-www-form-urlencoded; charset=UTF-8', 
					dataType: 'html',
					beforeSend: function(res) {
						console.log('before');
					},
					success: function (result) {
						if (result){
							//$('.fa-check-square').removeClass('fas').addClass('far');
							document.mailform.reset();
							alert(result);
						}
					},
					error: function (res){
						console.log(res);
					}
				});
				ing = "ing";
			} else {
				alert('처리중 입니다.');
				return false;
			}


		});
	});


	$(document).ready(function(){
		$('.agreeTxt').on('click', function(e){
			if($('.fa-check-square').hasClass('far')){
				$('.fa-check-square').removeClass('far').addClass('fas');
			} else {
				$('.fa-check-square').removeClass('fas').addClass('far');
			}
		});
	});
</script>