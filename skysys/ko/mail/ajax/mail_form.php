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



	
	<div class="policyWrap" >
		<h2>개인정보수집에 대한 내용</h2>
		<div id="guest_privacy">
			<p>
			<?php echo $infodu['title']?>은 "정보통신망 이용촉진 및 정보보호 등에 관한 법률"에 의거하여 개인정보를 수집, 이용함에 있어 동의를 받고있습니다.<br/>
			[개인정보 수집 및 이용목적]<br/><br/> 

			귀하의 소중한 개인정보는 문의신청 본인 확인 목적으로 사용됩니다.<br/>
			신청자 연락처 및 주소는 신청정보확인 및 참가자 비상연락을 위한 목적으로 사용됩니다.<br/>
			[수집하는 개인정보의 항목]<br/><br/> 

			성명, 연락처, 이메일<br/>
			[개인정보의 보유, 이용기간]<br/><br/> 

			해당 문의내용 확인일로 부터 한달간 보관 후 파기
			</p>
		</div>
		<div class="agreeChkWrap">
			<input class="checkbox" type="checkbox" id="agree" name="agree" value="Y">
			<label class="agreeTxt" for="agree">동의합니다</label>
		</div>
	</div>


	<div class="mailTit">
		<h4><?php echo $infodu['lang']['mail']['txt02']?></h4> <p><span class="mail_star">*</span><?php echo $infodu['lang']['mail']['txt01']?></p>
	</div>
	<div class="mailFormWrap">
		<div class="inputForm half">
			<div class="cell label"><?php echo $infodu['lang']['mail']['txt03']?></div>
			<div class="cell"><input type="text" name="company" class="inputTextMail" /></div>
		</div>
		<div class="inputForm half">
			<div class="cell label"><?php echo $infodu['lang']['mail']['txt04']?></div>
			<div class="cell"><input type="text" name="post" class="inputTextMail" /></div>
		</div>
		<div class="inputForm half">
			<div class="cell label"><?php echo $infodu['lang']['mail']['txt05']?><span class="mail_star">*</span></div>
			<div class="cell"><input type="text" name="name" class="inputTextMail" /></div>
		</div>
		<div class="inputForm half">
			<div class="cell label"><?php echo $infodu['lang']['mail']['txt06']?></div>
			<div class="cell"><input type="text" name="tel" class="inputTextMail" /></div>
		</div>
		<div class="inputForm half">
			<div class="cell label"><?php echo $infodu['lang']['mail']['txt07']?><span class="mail_star">*</span></div>
			<div class="cell"><input type="text" name="email" class="inputTextMail" /></div>
		</div>
		<div class="inputForm half">
			<div class="cell label"><?php echo $infodu['lang']['mail']['txt08']?></div>
			<div class="cell"><input type="text" name="fax" class="inputTextMail" /></div>
		</div>
	</div>


	<div class="mailTit">
		<h4><?php echo $infodu['lang']['mail']['txt09']?></h4> <p><span class="mail_star">*</span><?php echo $infodu['lang']['mail']['txt01']?></p>
	</div>
	<div class="mailFormWrap">
		<div class="inputForm">
			<div class="cell label"><?php echo $infodu['lang']['mail']['txt10']?><span class="mail_star">*</span></div>
			<div class="cell"><textarea name="memo" class="textareaMail"></textarea></div>
		</div>
	</div>


	<div class="mailTit">
		<h4><?php echo $infodu['lang']['mail']['txt11']?></h4> <p><span class="mail_star">*</span><?php echo $infodu['lang']['mail']['txt01']?></p>
	</div>
	<div class="mailFormWrap">
		<div class="inputForm">
			<div class="cell label">
				<img src="./image/check_<?=$ran_num_1?>.gif"><img src="./image/check_<?=$ran_num_2?>.gif"><img src="./image/check_<?=$ran_num_3?>.gif"><img src="./image/check_<?=$ran_num_4?>.gif">
			</div>
			<div class="cell">
				<input type="text" name="write_checking" maxlength="4" class="inputTextMail" /> <span  class="mail_help"><?php echo $infodu['lang']['mail']['txt12']?></span>
			</div>
		</div>
	</div>



	<div class="mail_submit"><input type="button" id="onSubmitMail" value="<?php echo $infodu['lang']['mail']['txt13']?>"></div>
</form>


<script>

	$(document).ready(function(){

		var ing = "";

		$('#onSubmitMail').on('click', function(e){
			var frmURL	= './mailAjax.php';
			var params = $("#mailForm").serialize();
			var f = document.mailform;
			var agreeVal = f.agree.checked;

			if(!agreeVal){ alert('<?php echo $infodu['lang']['mail']['txt20']?>'); f.agree.focus();  return false; }
			if(!f.name.value){alert("<?php echo $infodu['lang']['mail']['txt14']?>");f.name.focus();  return false;}
			if(!f.email.value){alert("<?php echo $infodu['lang']['mail']['txt15']?>");f.email.focus();  return false;}
			if(!f.write_checking.value){alert("<?php echo $infodu['lang']['mail']['txt16']?>");f.write_checking.focus();  return false;}

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
				alert("<?php echo $infodu['lang']['mail']['txt17']?>");
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