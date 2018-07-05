<?php 
$input_size_s = 10;
?>
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
	width: 600px;
}
.mail_table{
	border-spacing: 0px 10px;
	border-collapse : separate;
	border: none;
}
.mail_kind{
	background-color: #CC0E31;
	color: #fff;
	padding: 7px;
	font-size: 16px;
	border: none;
}
.mail_input{
	padding: 0px;
	width :50%;
	border: none;
	background-color: transparent;
}
.mail_table input{
	font-size: 16px;
	width: 95%;
	padding: 10px;
	background-color: transparent;
	border: 1px solid #565656;
}
.mail_table textarea{
	font-size:16px;
	padding: 10px;
	width :585px;
	background-color: transparent;
	border: 1px solid #565656;
	
}
</style>

<form method="post" name="mailform" enctype="multipart/form-data" action="<?=$inpo?>mail/mail_send.php" onSubmit="return checkForm();">
<input type="hidden" name="mail_code" value="<?=$mail_code?>">
<input type="hidden" name="uri" value="<?=$uri?>">

<!-- ++++++++++탑이미지++++++++++ -->

<div class="jua" style="font-size: 37px; color: #cc0e32; margin-top :57px; margin-bottom: 0px; ">
	가맹문의
</div>

<div style="position : relative; width: 63px; height: 1px; background-color: #414141; display: inline-block; margin : 20px 0px; "></div>
<div style="font-size: 15px; color: #404040; margin: 0px 0px 30px 0px; ">
	메뉴 및 서비스의 문의를 하시면 남겨주신 연락처 또는 이메일로 친절하게 답변드리고 있습니다.
</div>


<table width="600px" class="mail_table" >
<!-- ++++++++++ 입력자정보 ++++++++++ -->
<tr>
	<!-- 이름 -->
	<td class="mail_input"><input type="text" placeholder="이름" name="name"<?=$input_size_s?>></td>
	<!-- 전화번호 -->
	<td class="mail_input"><input type="text" placeholder="연락처" name="tel"<?=$input_size_s?>></td>
</tr>
<tr>
	<!-- 이메일 -->
	<td class="mail_input"><input type="text"  placeholder="이메일" name="mail"<?=$input_size_s?>></td>
	<!-- FAX -->
	<td class="mail_input" ><input type="text" placeholder="개설장소"  name="fax"<?=$input_size_s?>></td>
</tr>

<tr>
	<!-- 메일내용 -->
	<td colspan="2" class="mail_input" style="">
		<textarea placeholder="문의내용" name="memo" rows="4" cols="40"></textarea>
	</td>
</tr>
</table>
<div class="mail_submit" style="text-align: center;">
	<input type="submit" style="border:0;  color: #fff; font-size:17px; background-color: #CC0E31;padding: 9px 45px; cursor: pointer;"  value="문의하기" >
</div>
</form>