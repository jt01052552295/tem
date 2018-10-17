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
<div><img src="<?=$inpo?>mail/image/mail_top_img_estimate.gif" border="0"></div>

<div align="right" class="mail_help"><span class="mail_star">*</span> 항목은 필수 입력사항입니다.<br />개인정보 보호정책으로 인해 회사정보를 입력받습니다.</div>

<table width="100%" class="mail_table">
<!-- ++++++++++ 입력자정보 ++++++++++ -->
<tr>
	<td colspan="4" class="mail_title"><img src="<?=$inpo?>mail/image/title_writer.gif"></td>
</tr>

<tr>
	<!-- 회사명 -->
	<td width="1%" nowrap class="mail_kind">업체명</td>
	<td width="49%" class="mail_input"><input type="text" name="company"<?=$input_size_s?>></td>
	<!-- 부서명 -->
	<td width="1%" nowrap class="mail_kind">부서명</td>
	<td width="49%" class="mail_input"><input type="text" name="post"<?=$input_size_s?>></td>
</tr>
<tr>
	<!-- 이름 -->
	<td nowrap class="mail_kind"><span class="mail_star">*</span>담당자명</td>
	<td class="mail_input"><input type="text" name="name"<?=$input_size_s?>></td>
	<!-- 전화번호 -->
	<td nowrap class="mail_kind">회사전화번호</td>
	<td class="mail_input"><input type="text" name="tel"<?=$input_size_s?>></td>
</tr>
<tr>
	<!-- 이메일 -->
	<td nowrap class="mail_kind"><span class="mail_star">*</span>회사이메일</td>
	<td class="mail_input"><input type="text" name="mail"<?=$input_size_s?>></td>
	<!-- FAX -->
	<td nowrap class="mail_kind">회사FAX</td>
	<td class="mail_input"><input type="text" name="fax"<?=$input_size_s?>></td>
</tr>
<tr>
	<td colspan="4">
		<p align="right" class="mail_help">입력하시는 정보로 답변을 발송합니다.&nbsp;&nbsp;&nbsp;정확하게 입력하여 주십시오.</p>
	</td>
</tr>

<!-- ++++++++++ 메일내용 ++++++++++ -->
<tr>
	<td colspan="4" class="mail_title"><img src="<?=$inpo?>mail/image/title_estimate.gif" align="absmiddle"></td>
</tr>

<!-- 메일내용 -->
<tr>
	<td nowrap valign="top" class="mail_kind"><span class="mail_star">*</span>견적문의</td>
	<td colspan="3" class="mail_input"><textarea name="memo" <?=$input_size_memo?>></textarea></td>
</tr>

<!-- ++++++++++ 광고필터 ++++++++++ -->
<tr>
	<td colspan="4" class="mail_title"><img src="<?=$inpo?>mail/image/title_filter.gif" align="absmiddle"><span class="mail_star">*</span></td>
</tr>
<tr>
	<td colspan="4">
		<? include $inpo."mail/write_check.php"?>
	</td>
</tr>
</table>

<div class="mail_submit"><input type="image" src="<?=$inpo?>mail/image/btn_submit.gif" style="border:0;"></div>
</form>