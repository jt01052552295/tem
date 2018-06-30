<script>
<!--
function checkForm2(f){
	//var agreeVal = f.agree.checked;
	//if(!agreeVal){alert('개인정보보호 동의 체크 해주세요.');document.mailform2.agree.focus(); return false;}
	if(!document.mailform2.name.value){alert('이름을 입력해 주십시오.');document.mailform2.name.focus(); return false;}
	if(!document.mailform2.mail.value){alert('이메일을 입력해 주세요. 작성하시는 이메일로 답변이 발송됩니다.');document.mailform2.mail.focus(); return false;}
	if(!document.mailform2.write_checking.value){alert('광고필터링의 숫자를 똑같이 입력해 주십시오.');document.mailform2.write_checking.focus(); return false;}
	}
//-->


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

<?
//////////난수 리턴
function mail_ran_num ($i, $j)
{
	srand ((double)microtime ()*1000000);
	$random = rand ($i, $j);
	return $random;
}


$ran_num = mail_ran_num (1000, 9999);

$ran_num_1= substr ($ran_num, 0, 1);
$ran_num_2= substr ($ran_num, 1, 1);
$ran_num_3= substr ($ran_num, 2, 1);
$ran_num_4= substr ($ran_num, 3, 1);

$ran_num = crypt ($ran_num, "18");
?>



<form method="post" name="mailform2" enctype="multipart/form-data" action="<?=$inpo?>mail/mail_send.php" onSubmit="return checkForm2(this);">
<input type="hidden" name="mail_code" value="<?=$mail_code?>">
<input type="hidden" name="uri" value="<?=$uri?>">

<!-- ++++++++++탑이미지++++++++++ -->



<table width="100%" class="mail_table">
	<!-- ++++++++++ 입력자정보 ++++++++++ -->
	<tr>
		<td class="mail_title">작성자정보</td>
		<td class="mail_title" colspan="3"><div  class="mail_help"><span class="mail_star">*</span> 항목은 필수 입력사항입니다.</td>
	</tr>
	<tr>
		<!-- 회사명 -->
		<td  class="mail_kind">업체명</td>
		<td  class="mail_input"><input type="text" name="company"<?=$input_size_s?>></td>
		<!-- 부서명 -->
		<td  class="mail_kind">부서명</td>
		<td  class="mail_input"><input type="text" name="post"<?=$input_size_s?>></td>
	</tr>
	<tr>
		<!-- 이름 -->
		<td  class="mail_kind"><span class="mail_star">*</span>담당자명</td>
		<td class="mail_input"><input type="text" name="name"<?=$input_size_s?>></td>
		<!-- 전화번호 -->
		<td  class="mail_kind">연락처</td>
		<td class="mail_input"><input type="text" name="tel"<?=$input_size_s?>></td>
	</tr>
	<tr>
		<!-- 이메일 -->
		<td  class="mail_kind"><span class="mail_star">*</span>이메일</td>
		<td class="mail_input"><input type="text" name="mail"<?=$input_size_s?>></td>

		<!-- FAX -->
		<td  class="mail_kind">FAX</td>
		<td class="mail_input"><input type="text" name="fax"<?=$input_size_s?>></td>
	</tr>

	<!-- ++++++++++ 메일내용 ++++++++++ -->
	<tr>
		<td colspan="4" class="mail_title">문의내용</td>
	</tr>

	<tr>
		<!-- 메일내용 -->
		<td class="mail_kind"><span class="mail_star">*</span>문의사항</td>
		<td class="mail_input" colspan="3"><textarea name="memo" style="width:99%;" <?=$input_size_memo?>></textarea></td>
	</tr>

	<!-- ++++++++++ 광고필터 ++++++++++ -->
	<tr>
		<td colspan="4"  class="mail_title"><span class="mail_star">*</span>광고필터링</td>
	</tr>



	<input type="hidden" name="write_check" value="<?=$ran_num?>">

	<tr>
		<td class="mail_kind">
			<p><img src="<?=$inpo?>mail/image/check_<?=$ran_num_1?>.gif"><img src="<?=$inpo?>mail/image/check_<?=$ran_num_2?>.gif"><img src="<?=$inpo?>mail/image/check_<?=$ran_num_3?>.gif"><img src="<?=$inpo?>mail/image/check_<?=$ran_num_4?>.gif"></p>
		</td>
		<td class="mail_input" colspan="3"><input type="text" name="write_checking" maxlength="4" <?=$input_size_s?> /> <span  class="mail_help">왼쪽에 보이시는 4자리 숫자를 입력해 주십시요.</span></td>

	</tr>
</table>

<div class="mail_submit"><input type="submit" value="작성완료"></div>
</form>