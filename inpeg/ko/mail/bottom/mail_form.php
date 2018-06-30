<script language=javascript>
<!--
function checkForm(){
	if(!document.mailform.name.value){alert('이름을 입력해 주십시오.');document.mailform.name.focus(); return false;}
	if(!document.mailform.tel.value){alert('연락처를 입력해 주세요. 작성하신 연락처로 문의 답변 됩니다.');document.mailform.tel.focus(); return false;}
	if(!document.mailform.write_checking.value){alert('광고필터링의 숫자를 똑같이 입력해 주십시오.');document.mailform.write_checking.focus(); return false;}
	}
//-->
</script>
<style>
#mail_wrap{
	width: 1200px;
}
.mail_table{
	border-spacing: 0px 15px;
	border-collapse : separate;
	border: none;
}
.mail_kind{
	background-color: #A0A0A0;
	color: #fff;
	padding: 5px 10px;
	font-size: 16px;
	border: none;
	font-weight: normal;
}
.mail_input{
	padding: 0px;
	border: none;
		background-color: transparent;
}
.mail_table input{
	font-size: 16px;
	padding: 11px;
	margin-right: 20px;
}
.mail_table textarea{
	font-size:14px;
	padding: 0px;
	border: none;
}
</style>

<form method="post" name="mailform" enctype="multipart/form-data" action="<?=$inpo?>mail/mail_send.php" onSubmit="return checkForm();">
<input type="hidden" name="mail_code" value="<?=$mail_code?>">
<input type="hidden" name="uri" value="<?=$uri?>">

<!-- ++++++++++탑이미지++++++++++ -->


<table width="100%" class="mail_table" >
<!-- ++++++++++ 입력자정보 ++++++++++ -->
<tr>
	<td>
		<img alt="" src="<?php echo KI_URL?>images/quick_tel.png" style="margin-right: 130px;">
	</td>
	<td>
	<table>
		<tr>
		<td nowrap class="mail_kind"><span class="mail_star">*</span>이름</td>
		<td class="mail_input"><input type="text" name="name"<?=$input_size_s?>></td>
		<!-- 전화번호 -->
		<td nowrap class="mail_kind">연락처</td>
		<td class="mail_input"><input type="text" name="tel"<?=$input_size_s?>></td>
		<td>
			<input type="submit" style="border:0; border-radius: 30px; color: #fff; font-size:18px; background-color: #05074D;padding: 9px 40px; cursor: pointer;"  value="빠른상담신청" >
		</td>
		</tr>
	</table>
	</td>
</tr>


</table>
</form>