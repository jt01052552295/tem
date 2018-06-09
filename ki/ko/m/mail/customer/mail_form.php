<script language=javascript>
<!--
function checkForm(){
	if(!document.mailform.name.value){alert('이름을 입력해 주십시오.');document.mailform.name.focus(); return false;}
	if(!document.mailform.mail.value){alert('이메일을 입력해 주세요. 작성하시는 이메일로 답변이 발송됩니다.');document.mailform.mail.focus(); return false;}
	if(!document.mailform.write_checking.value){alert('광고필터링의 숫자를 똑같이 입력해 주십시오.');document.mailform.write_checking.focus(); return false;}
	}
//-->
</script>


<form method="post" name="mailform" enctype="multipart/form-data" action="<?=$inpo?>mail/mail_send.php" onSubmit="return checkForm();">
<input type="hidden" name="mail_code" value="<?=$mail_code?>">
<input type="hidden" name="uri" value="<?=$uri?>">

<!-- ++++++++++탑이미지++++++++++ -->
<div style="padding-left: 10px; position : relative; margin : 10px 0px; font-size: 14px; color: #BB911A;">
	<div style="position : absolute; width: 5px; height: 40px; background-color :#0B2F8D; left:0px;"></div>
	궁금하신 사항이 있으신가요?<br/>
	문의사항을 남겨주시면 친절히 답변드리겠습니다.
</div>

<div class="mail_help"><span class="mail_star">*</span> 항목은 필수 입력사항입니다.<br />개인정보 보호정책으로 인해 회사정보를 입력받습니다.</div>

<table width="100%" class="mail_table">
<!-- ++++++++++ 입력자정보 ++++++++++ -->
<tr>
	<td colspan="4" class="mail_title">작성자 정보</td>
</tr>
<!-- <tr>
	<td width="1%" nowrap class="mail_kind">업체명</td>
	<td width="49%" class="mail_input"><input type="text" name="company"<?=$input_size_s?>></td>
</tr>
<tr>
	<td width="1%" nowrap class="mail_kind">부서명</td>
	<td width="49%" class="mail_input"><input type="text" name="post"<?=$input_size_s?>></td>
</tr> -->
<tr>
	<!-- 이름 -->
	<td nowrap class="mail_kind"><span class="mail_star">*</span>작성자명</td>
	<td class="mail_input"><input type="text" name="name"<?=$input_size_s?>></td>
</tr>
<tr>
	<!-- 전화번호 -->
	<td nowrap class="mail_kind">연락처</td>
	<td class="mail_input"><input type="text" name="tel"<?=$input_size_s?>></td>
</tr>
<tr>
	<!-- 이메일 -->
	<td nowrap class="mail_kind"><span class="mail_star">*</span>이메일</td>
	<td class="mail_input"><input type="text" name="mail"<?=$input_size_s?>></td>
</tr>
<tr>
	<!-- FAX -->
	<td nowrap class="mail_kind">지역</td>
	<td class="mail_input"><input type="text" name="fax"<?=$input_size_s?>></td>
</tr>
<tr>
	<td colspan="4">
		<p align="right" class="mail_help">입력하시는 정보로 답변을 발송합니다.&nbsp;&nbsp;&nbsp;정확하게 입력하여 주십시오.</p>
	</td>
</tr>

<!-- ++++++++++ 메일내용 ++++++++++ -->
<tr>
	<td colspan="4" class="mail_title">문의내용</td>
</tr>

<tr>
	<!-- 메일내용 -->
	<td nowrap valign="top" class="mail_kind"><span class="mail_star">*</span>문의사항</td>
	<td colspan="3" class="mail_input"><textarea name="memo" style="width:90%;" <?=$input_size_memo?>></textarea></td>
</tr>

<!-- ++++++++++ 광고필터 ++++++++++ -->
<tr>
	<td colspan="4" class="mail_title">광고필터링<span class="mail_star">*</span></td>
</tr>
<tr>
	<td colspan="4">
		<? include "../mail/write_check.php"?>
	</td>
</tr>
</table>

<div class="mail_submit"><input type="submit" value="작성완료" style="border:0;"></div>
</form>