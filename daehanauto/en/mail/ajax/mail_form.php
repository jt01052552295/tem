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
		<h4>Writer</h4> <p><span class="mail_star">*</span>are required.</p>
	</div>
	<div class="mailFormWrap">
		<div class="inputForm half">
			<div class="cell label">Company</div>
			<div class="cell"><input type="text" name="company" class="inputTextMail" /></div>
		</div>
		<div class="inputForm half">
			<div class="cell label">Department</div>
			<div class="cell"><input type="text" name="post" class="inputTextMail" /></div>
		</div>
		<div class="inputForm half">
			<div class="cell label">Name<span class="mail_star">*</span></div>
			<div class="cell"><input type="text" name="name" class="inputTextMail" /></div>
		</div>
		<div class="inputForm half">
			<div class="cell label">Tel</div>
			<div class="cell"><input type="text" name="tel" class="inputTextMail" /></div>
		</div>
		<div class="inputForm half">
			<div class="cell label">E-mail<span class="mail_star">*</span></div>
			<div class="cell"><input type="text" name="email" class="inputTextMail" /></div>
		</div>
		<div class="inputForm half">
			<div class="cell label">FAX</div>
			<div class="cell"><input type="text" name="fax" class="inputTextMail" /></div>
		</div>
	</div>


	<div class="mailTit">
		<h4>Content</h4> <p><span class="mail_star">*</span>are required.</p>
	</div>
	<div class="mailFormWrap">
		<div class="inputForm">
			<div class="cell label">Memo<span class="mail_star">*</span></div>
			<div class="cell"><textarea name="memo" class="textareaMail"></textarea></div>
		</div>
	</div>


	<div class="mailTit">
		<h4>Spam Filtering</h4> <p><span class="mail_star">*</span>are required.</p>
	</div>
	<div class="mailFormWrap">
		<div class="inputForm">
			<div class="cell label">
				<img src="./image/check_<?=$ran_num_1?>.gif"><img src="./image/check_<?=$ran_num_2?>.gif"><img src="./image/check_<?=$ran_num_3?>.gif"><img src="./image/check_<?=$ran_num_4?>.gif">
			</div>
			<div class="cell">
				<input type="text" name="write_checking" maxlength="4" class="inputTextMail" /> <span  class="mail_help">Please enter the numbers.</span>
			</div>
		</div>
	</div>



	<div class="mail_submit"><input type="button" id="onSubmitMail" value="Submit"></div>
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
			if(!f.name.value){alert('Please enter your name.');f.name.focus();  return false;}
			if(!f.email.value){alert('Please enter your email.');f.email.focus();  return false;}
			if(!f.write_checking.value){alert('The contents will be posted only when the numbers are correct.');f.write_checking.focus();  return false;}


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
				alert('Processing..');
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