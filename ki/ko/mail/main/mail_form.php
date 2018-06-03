<script language=javascript>
<!--
function checkForm(){
	if(!document.mailform.name.value){alert('이름을 입력해 주십시오.');document.mailform.name.focus(); return false;}
	if(!document.mailform.mail.value){alert('이메일을 입력해 주세요. 작성하시는 이메일로 답변이 발송됩니다.');document.mailform.mail.focus(); return false;}
	if(!document.mailform.write_checking.value){alert('광고필터링의 숫자를 똑같이 입력해 주십시오.');document.mailform.write_checking.focus(); return false;}
	}
//-->
</script>
<style>
#mail_wrap{
	width: 1200px;
}
.mail_table{
	border-spacing: 0px 10px;
	border-collapse : separate;
	border: none;
}
.mail_kind{
	background-color: #CC0E31;
	color: #fff;
	padding: 10px;
	font-size: 16px;
	border: none;
	font-weight: normal;
}
.mail_input{
	padding: 0px;
	border: none;
}
.mail_table input{
	font-size: 16px;
	padding: 14px;
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




<div style="width: 1200px;  margin : auto; text-align: center;">
	<div style="font-size: 16px; color: #8b8b8b; margin-top : 70px; ">ONLINE QUESTION</div>
	<div style="font-size: 28px; color: #ea0042; margin-top : 12px; font-weight: bold; ">가맹점 문의</div>
	
	<div style="width: 25px; display: inline-block; height: 2px; background-color: #434343; margin-top : 40px; "></div>
	<div style="font-size: 16px; color: #8b8b8b; margin-top : 20px; ">궁금하신 사항을 문의하시면 빠른 시일 내 연락드리겠습니다.</div>
</div>
<div class="mail_submit" style="text-align: right;">
	<input type="submit" style="border:0; border-radius: 30px; color: #fff; font-size:18px; background-color: #CC0E31;padding: 9px 40px; cursor: pointer;"  value="상담신청" >
</div>
<table width="100%" class="mail_table" >
<!-- ++++++++++ 입력자정보 ++++++++++ -->
<tr>
	<!-- 이름 -->
	<td nowrap class="mail_kind"><span class="mail_star">*</span>이름</td>
	<td class="mail_input"><input type="text" name="name"<?=$input_size_s?>></td>
	<!-- 전화번호 -->
	<td nowrap class="mail_kind">연락처</td>
	<td class="mail_input"><input type="text" name="tel"<?=$input_size_s?>></td>
	
	<!-- 메일내용 -->
	<td rowspan="2" nowrap valign="middle" class="mail_kind"><span class="mail_star">*</span>문의사항</td>
	<td rowspan="2" class="mail_input" style="border: 1px solid #ccc;"><textarea name="memo" rows="5" cols="55"></textarea></td>
</tr>
<tr>
	<!-- 이메일 -->
	<td nowrap class="mail_kind"><span class="mail_star">*</span>이메일</td>
	<td class="mail_input"><input type="text" name="mail"<?=$input_size_s?>></td>
	<!-- FAX -->
	<td nowrap class="mail_kind">지역</td>
	<td class="mail_input" ><input type="text" name="fax"<?=$input_size_s?>></td>
</tr>

</table>
</form>