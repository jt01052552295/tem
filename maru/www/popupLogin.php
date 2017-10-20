	<div class="divPopup" style="width:400px;height:242px;background:url(/img/img_loginBar.jpg) repeat-x top center;overflow:hidden;">
		<!-- 내용 시작 -->
<form id="frmLogin" class="g_login" action="/proc/member_proc.php">
<input type="hidden" name="strType" value="login">
		<div style="width:320px;height:242px;">
			<div style="width:100%;background:#fcfcfc;padding:20px 40px;height:21px;">
				<div style="float:left;padding-right:10px;"><img src="/img/ico_lock.jpg" /></div>
				<div style="float:left;padding-top:3px;"><img src="/img/tit_login.jpg" /></div>
				<div style="float:right;"><img class="btnClosePopup" src="/img/ico_xxx.png" style="cursor:pointer" /></div>
				<br clear="both">
			</div>
			<div style="width:100%;background:url(/img/bak_dotted.jpg) repeat-x;height:1px;padding:0 40px;"></div>
			<div style="width:100%;height:133px;background:#fafafa;padding:20px 40px;">
				<div style="padding:0px 0 15px;color:#999;">
					<div style="font-size:13px;">아이디와 비밀번호 입력후 로그인 버튼을 클릭하세요!</div>
				</div>
				<div style="float:left;font-weight:bold;font-size:13px;">
					<div>아이디</div>
					<div style="padding-top:18px;">비밀번호</div>
					<br clear="both">
				</div>
				<div style="float:right;">
					<div><img id="btnLogin" src="/img/btn_login.jpg" style="cursor:pointer" /></div>
				</div>
				<div style="float:right;padding-right:8px;">
					<div><input type="text" id="uid" name="strId" value="<?=$_COOKIE['ck_m_id']?>" style="width:170px;height:21px;border:1px solid #ccc;padding:2px 0 0 8px;" /></div>
					<div style="padding-top:4px;"><input type="password" id="upw" name="strPassword" style="width:170px;height:21px;border:1px solid #ccc;padding:2px 0 0 8px;" /></div>
				</div>
				<br style="clear:both;">
				<div style="text-align:center;padding:8px 0 0 0;">
					<a href="./?path=joinAgreement" style="font-weight:bold;">회원가입</a> <span style="color:#dbdbdb;padding:0 2px;">|</span> <span class="btnPopupFindId" style="cursor:pointer;">아이디, 비밀번호 찾기</span>
				<div>
			</div>
		</div>
</form>
		<!-- 내용 종료 -->
	</div>
	
<script>
$(document).ready(function(){
	$("#upw").bind("keydown",function(e){
		var k_code = e.which;
		var k_code2 = e.KeyCode;
		if (k_code==13 || k_code2==13){
			$('#btnLogin').click();
		}
	});
});
</script>