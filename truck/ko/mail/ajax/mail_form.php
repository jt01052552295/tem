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



	<div class="policyWrap ">
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

			if(!agreeVal){ alert('개인정보보호 동의 체크 해주세요.'); f.agree.focus();  return false; }
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