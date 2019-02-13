<script>
<!--
function checkForm(f){
	var agreeVal = f.agree.checked;
	if(!agreeVal){alert('개인정보보호 동의 체크 해주세요.');document.mailform.agree.focus(); return false;}
	if(!document.mailform.name.value){alert('이름을 입력해 주십시오.');document.mailform.name.focus(); return false;}
	if(!document.mailform.mail.value){alert('이메일을 입력해 주세요. 작성하시는 이메일로 답변이 발송됩니다.');document.mailform.mail.focus(); return false;}
	if(!document.mailform.write_checking.value){alert('광고필터링의 숫자를 똑같이 입력해 주십시오.');document.mailform.write_checking.focus(); return false;}
	}

function checkForm2(f){
	var agreeVal = f.agree.checked;
	if(!agreeVal){alert('개인정보보호 동의 체크 해주세요.');document.mailform2.agree.focus(); return false;}
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
<form class="visible-xs" method="post" name="mailform" enctype="multipart/form-data" action="<?=$inpo?>mail/mail_send.php" onSubmit="return checkForm(this);">
<input type="hidden" name="mail_code" value="<?=$mail_code?>">
<input type="hidden" name="uri" value="<?=$uri?>">

<!-- ++++++++++탑이미지++++++++++ -->



<div class="policyWrap ">
	<h3 class="policyTitle">개인정보보호를 위한 이용자 동의 사항</h3>
	<div class="policyBox">
		<p>
		<p class="ls2 lh6 bs5 ts4"><em class="emphasis">(주)비츠로('ledpro.co.kr'이하  '(주)비츠로')</em>은(는) 개인정보보호법에 따라 이용자의 개인정보 보호 및 권익을 보호하고 개인정보와 관련한 이용자의 고충을 원활하게 처리할 수 있도록 다음과 같은 처리방침을 두고 있습니다.</p>
		<p class="ls2 lh6 bs5 ts4"><em class="emphasis">(주)비츠로</em> 은(는) 회사는 개인정보처리방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다.</p>
		<p class="ls2">○ 본 방침은부터 <em class="emphasis">2018</em>년 <em class="emphasis">6</em>월 <em class="emphasis">1</em>일부터 시행됩니다.</p>
		</br>
		<p class='lh6 bs4'><strong>1. 개인정보의 처리 목적 <em class="emphasis">(주)비츠로('ledpro.co.kr'이하  '(주)비츠로')</em>은(는) 개인정보를 다음의 목적을 위해 처리합니다. 처리한 개인정보는 다음의 목적이외의 용도로는 사용되지 않으며 이용 목적이 변경될 시에는 사전동의를 구할 예정입니다.</strong></p>
		<p class="ls2">가. 기타</p>
		<p class="ls2">문의안내 등을 목적으로 개인정보를 처리합니다.</p>
		</br></br>
		<p class='lh6 bs4'><strong>2. 개인정보의 처리 및 보유 기간</strong></br></br>① <em class="emphasis">(주)비츠로</em>은(는) 법령에 따른 개인정보 보유·이용기간 또는 정보주체로부터 개인정보를 수집시에 동의 받은 개인정보 보유,이용기간 내에서 개인정보를 처리,보유합니다.</br></br>② 각각의 개인정보 처리 및 보유 기간은 다음과 같습니다.</p>
		1. 고객문의
		</br>
		고객문의 와 관련한 개인정보는 수집.이용에 관한 동의일로부터 지체없이 파기
		까지 위 이용목적을 위하여 보유.이용됩니다.</br>-보유근거 : 문의 안내</br>-관련법령 : 신용정보의 수집/처리 및 이용 등에 관한 기록 : 3년</br>-예외사유 : </br></br>
		<p class="lh6 bs4"><strong>3. 정보주체와 법정대리인의 권리·의무 및 그 행사방법 이용자는 개인정보주체로써 다음과 같은 권리를 행사할 수 있습니다.</strong></p>
		<p class="ls2">① 정보주체는 (주)비츠로에 대해 언제든지 개인정보 열람,정정,삭제,처리정지 요구 등의 권리를 행사할 수 있습니다.</br>② 제1항에 따른 권리 행사는(주)비츠로에 대해 개인정보 보호법 시행령 제41조제1항에 따라 서면, 전자우편, 모사전송(FAX) 등을 통하여 하실 수 있으며 (주)비츠로은(는) 이에 대해 지체 없이 조치하겠습니다.</br>③ 제1항에 따른 권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보 보호법 시행규칙 별지 제11호 서식에 따른 위임장을 제출하셔야 합니다.</br>④ 개인정보 열람 및 처리정지 요구는 개인정보보호법 제35조 제5항, 제37조 제2항에 의하여 정보주체의 권리가 제한 될 수 있습니다.</br>⑤ 개인정보의 정정 및 삭제 요구는 다른 법령에서 그 개인정보가 수집 대상으로 명시되어 있는 경우에는 그 삭제를 요구할 수 없습니다.</br>⑥ (주)비츠로은(는) 정보주체 권리에 따른 열람의 요구, 정정·삭제의 요구, 처리정지의 요구 시 열람 등 요구를 한 자가 본인이거나 정당한 대리인인지를 확인합니다.</p>
		</br></br>
		<p class='lh6 bs4'><strong>4. 처리하는 개인정보의 항목 작성 </strong></br></br> ① <em class="emphasis">(주)비츠로('ledpro.co.kr'이하  '(주)비츠로')</em>은(는) 다음의 개인정보 항목을 처리하고 있습니다.</p>
		<p class='ls2'>
		   1. 고객문의
		   </br>- 필수항목 : 이메일, 담당자명
		</p>
		</br></br></br>
		<p class='lh6 bs4'><strong>5. 개인정보의 파기<em class="emphasis">(주)비츠로</em>은(는) 원칙적으로 개인정보 처리목적이 달성된 경우에는 지체없이 해당 개인정보를 파기합니다. 파기의 절차, 기한 및 방법은 다음과 같습니다.</strong></p>
		<p class='ls2'>-파기절차</br>이용자가 입력한 정보는 목적 달성 후 별도의 DB에 옮겨져(종이의 경우 별도의 서류) 내부 방침 및 기타 관련 법령에 따라 일정기간 저장된 후 혹은 즉시 파기됩니다. 이 때, DB로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 다른 목적으로 이용되지 않습니다.</br></br>-파기기한</br>이용자의 개인정보는 개인정보의 보유기간이 경과된 경우에는 보유기간의 종료일로부터 5일 이내에, 개인정보의 처리 목적 달성, 해당 서비스의 폐지, 사업의 종료 등 그 개인정보가 불필요하게 되었을 때에는 개인정보의 처리가 불필요한 것으로 인정되는 날로부터 5일 이내에 그 개인정보를 파기합니다.</p>
		<p class='ls2'>-파기방법</br>전자적 파일 형태의 정보는 기록을 재생할 수 없는 기술적 방법을 사용합니다.</br>종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기합니다.</p>
		</br></br>
		<p class="lh6 bs4"><strong>6. 개인정보 자동 수집 장치의 설치•운영 및 거부에 관한 사항</strong></p>
		<p class="ls2">(주)비츠로 은 정보주체의 이용정보를 저장하고 수시로 불러오는 ‘쿠키’를 사용하지 않습니다.</br></br>
		<p class='lh6 bs4'><strong>7. 개인정보 보호책임자 작성 </strong></p>
		<br/> ①  (주)비츠로(‘ledpro.co.kr’이하 ‘(주)비츠로) 은(는) 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 정보주체의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보 보호책임자를 지정하고 있습니다.
		<p class='ls2'><br/>▶ 개인정보 보호책임자 <br/>성명 :감정선<br/>직책 :개인정보 관리 담당자<br/>직급 :대표이사<br/>연락처 :055-238-3331, led3331@naver.com<br/>② 정보주체께서는 (주)비츠로(‘ledpro.co.kr’이하 (주)비츠로) 의 서비스(또는 사업)을 이용하시면서 발생한 모든 개인정보 보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 보호책임자 및 담당부서로 문의하실 수 있습니다. (주)비츠로(‘ledpro.co.kr’이하 (주)비츠로) 은(는) 정보주체의 문의에 대해 지체 없이 답변 및 처리해드릴 것입니다.</p>
		</br></br>
		<p class='lh6 bs4'><strong>8. 개인정보 처리방침 변경 </strong></p>
		<p>①이 개인정보처리방침은 시행일로부터 적용되며, 법령 및 방침에 따른 변경내용의 추가, 삭제 및 정정이 있는 경우에는 변경사항의 시행 7일 전부터 공지사항을 통하여 고지할 것입니다.</p>
		</br></br>
		<p class='lh6 bs4'><strong>9. 개인정보의 안전성 확보 조치 <em class="emphasis">(주)비츠로</em>은(는) 개인정보보호법 제29조에 따라 다음과 같이 안전성 확보에 필요한 기술적/관리적 및 물리적 조치를 하고 있습니다.</strong></p>
		<p class='ls2'>1. 정기적인 자체 감사 실시</br> 개인정보 취급 관련 안정성 확보를 위해 정기적(분기 1회)으로 자체 감사를 실시하고 있습니다.</br></br>2. 개인정보 취급 직원의 최소화 및 교육</br> 개인정보를 취급하는 직원을 지정하고 담당자에 한정시켜 최소화 하여 개인정보를 관리하는 대책을 시행하고 있습니다.</br></br>3. 내부관리계획의 수립 및 시행</br> 개인정보의 안전한 처리를 위하여 내부관리계획을 수립하고 시행하고 있습니다.</br></br></p>
		</p>
	</div>
	<div class="agreeChkWrap">
		<input class="checkbox" type="checkbox" id="agree" name="agree" value="Y">
		<label class="agreeTxt" for="agree">동의합니다</label>
		<span class="check"><i class="far fa-check-square"></i></span>
	</div>
</div>



<table width="100%" class="mail_table ">
	<!-- ++++++++++ 입력자정보 ++++++++++ -->
	<tr>
		<td class="mail_title">작성자정보</td>
		<td class="mail_title"><div  class="mail_help"><span class="mail_star">*</span> 항목은 필수 입력사항입니다.</td>
	</tr>
	<tr>
		<!-- 회사명 -->
		<td  class="mail_kind">업체명</td>
		<td  class="mail_input"><input type="text" name="company"<?=$input_size_s?>></td>
	</tr>
	<tr>
		<!-- 부서명 -->
		<td  class="mail_kind">부서명</td>
		<td  class="mail_input"><input type="text" name="post"<?=$input_size_s?>></td>
	</tr>
	<tr>
		<!-- 이름 -->
		<td  class="mail_kind">담당자명<span class="mail_star">*</span></td>
		<td class="mail_input"><input type="text" name="name"<?=$input_size_s?>></td>
	</tr>
	<tr>
		<!-- 전화번호 -->
		<td  class="mail_kind">연락처</td>
		<td class="mail_input"><input type="text" name="tel"<?=$input_size_s?>></td>
	</tr>
	<tr>
		<!-- 이메일 -->
		<td  class="mail_kind">이메일<span class="mail_star">*</span></td>
		<td class="mail_input"><input type="text" name="mail"<?=$input_size_s?>></td>
	</tr>
	<tr>
		<!-- FAX -->
		<td  class="mail_kind">FAX</td>
		<td class="mail_input"><input type="text" name="fax"<?=$input_size_s?>></td>
	</tr>

	<!-- ++++++++++ 메일내용 ++++++++++ -->
	<tr>
		<td colspan="2" class="mail_title">문의내용</td>
	</tr>

	<tr>
		<!-- 메일내용 -->
		<td  valign="top" class="mail_kind">문의사항<span class="mail_star">*</span></td>
		<td class="mail_input"><textarea name="memo" style="width:99%;" <?=$input_size_memo?>></textarea></td>
	</tr>

	<!-- ++++++++++ 광고필터 ++++++++++ -->
	<tr>
		<td colspan="2"  class="mail_title">광고필터링<span class="mail_star">*</span></td>
	</tr>

	<input type="hidden" name="write_check" value="<?=$ran_num?>">

	<tr>
		<td class="mail_kind">
			<p><img src="<?=$inpo?>mail/image/check_<?=$ran_num_1?>.gif"><img src="<?=$inpo?>mail/image/check_<?=$ran_num_2?>.gif"><img src="<?=$inpo?>mail/image/check_<?=$ran_num_3?>.gif"><img src="<?=$inpo?>mail/image/check_<?=$ran_num_4?>.gif"></p>
		</td>
		<td class="mail_input"><input type="text" name="write_checking" maxlength="4" <?=$input_size_s?> /> <span  class="mail_help">왼쪽에 보이시는 4자리 숫자를 입력해 주십시요.</span></td>

	</tr>
</table>



<div class="mail_submit"><input type="submit" value="작성완료"></div>
</form>


<form class="visible-sm visible-md visible-lg" method="post" name="mailform2" enctype="multipart/form-data" action="<?=$inpo?>mail/mail_send.php" onSubmit="return checkForm2(this);">
<input type="hidden" name="mail_code" value="<?=$mail_code?>">
<input type="hidden" name="uri" value="<?=$uri?>">

<!-- ++++++++++탑이미지++++++++++ -->



<div class="policyWrap">
	<h3 class="policyTitle">개인정보보호를 위한 이용자 동의 사항</h3>
	<div class="policyBox">
		<p>
		<p class="ls2 lh6 bs5 ts4"><em class="emphasis">(주)비츠로('ledpro.co.kr'이하  '(주)비츠로')</em>은(는) 개인정보보호법에 따라 이용자의 개인정보 보호 및 권익을 보호하고 개인정보와 관련한 이용자의 고충을 원활하게 처리할 수 있도록 다음과 같은 처리방침을 두고 있습니다.</p>
		<p class="ls2 lh6 bs5 ts4"><em class="emphasis">(주)비츠로</em> 은(는) 회사는 개인정보처리방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다.</p>
		<p class="ls2">○ 본 방침은부터 <em class="emphasis">2018</em>년 <em class="emphasis">6</em>월 <em class="emphasis">1</em>일부터 시행됩니다.</p>
		</br>
		<p class='lh6 bs4'><strong>1. 개인정보의 처리 목적 <em class="emphasis">(주)비츠로('ledpro.co.kr'이하  '(주)비츠로')</em>은(는) 개인정보를 다음의 목적을 위해 처리합니다. 처리한 개인정보는 다음의 목적이외의 용도로는 사용되지 않으며 이용 목적이 변경될 시에는 사전동의를 구할 예정입니다.</strong></p>
		<p class="ls2">가. 기타</p>
		<p class="ls2">문의안내 등을 목적으로 개인정보를 처리합니다.</p>
		</br></br>
		<p class='lh6 bs4'><strong>2. 개인정보의 처리 및 보유 기간</strong></br></br>① <em class="emphasis">(주)비츠로</em>은(는) 법령에 따른 개인정보 보유·이용기간 또는 정보주체로부터 개인정보를 수집시에 동의 받은 개인정보 보유,이용기간 내에서 개인정보를 처리,보유합니다.</br></br>② 각각의 개인정보 처리 및 보유 기간은 다음과 같습니다.</p>
		1. 고객문의
		</br>
		고객문의 와 관련한 개인정보는 수집.이용에 관한 동의일로부터 지체없이 파기
		까지 위 이용목적을 위하여 보유.이용됩니다.</br>-보유근거 : 문의 안내</br>-관련법령 : 신용정보의 수집/처리 및 이용 등에 관한 기록 : 3년</br>-예외사유 : </br></br>
		<p class="lh6 bs4"><strong>3. 정보주체와 법정대리인의 권리·의무 및 그 행사방법 이용자는 개인정보주체로써 다음과 같은 권리를 행사할 수 있습니다.</strong></p>
		<p class="ls2">① 정보주체는 (주)비츠로에 대해 언제든지 개인정보 열람,정정,삭제,처리정지 요구 등의 권리를 행사할 수 있습니다.</br>② 제1항에 따른 권리 행사는(주)비츠로에 대해 개인정보 보호법 시행령 제41조제1항에 따라 서면, 전자우편, 모사전송(FAX) 등을 통하여 하실 수 있으며 (주)비츠로은(는) 이에 대해 지체 없이 조치하겠습니다.</br>③ 제1항에 따른 권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보 보호법 시행규칙 별지 제11호 서식에 따른 위임장을 제출하셔야 합니다.</br>④ 개인정보 열람 및 처리정지 요구는 개인정보보호법 제35조 제5항, 제37조 제2항에 의하여 정보주체의 권리가 제한 될 수 있습니다.</br>⑤ 개인정보의 정정 및 삭제 요구는 다른 법령에서 그 개인정보가 수집 대상으로 명시되어 있는 경우에는 그 삭제를 요구할 수 없습니다.</br>⑥ (주)비츠로은(는) 정보주체 권리에 따른 열람의 요구, 정정·삭제의 요구, 처리정지의 요구 시 열람 등 요구를 한 자가 본인이거나 정당한 대리인인지를 확인합니다.</p>
		</br></br>
		<p class='lh6 bs4'><strong>4. 처리하는 개인정보의 항목 작성 </strong></br></br> ① <em class="emphasis">(주)비츠로('ledpro.co.kr'이하  '(주)비츠로')</em>은(는) 다음의 개인정보 항목을 처리하고 있습니다.</p>
		<p class='ls2'>
		   1. 고객문의
		   </br>- 필수항목 : 이메일, 담당자명
		</p>
		</br></br></br>
		<p class='lh6 bs4'><strong>5. 개인정보의 파기<em class="emphasis">(주)비츠로</em>은(는) 원칙적으로 개인정보 처리목적이 달성된 경우에는 지체없이 해당 개인정보를 파기합니다. 파기의 절차, 기한 및 방법은 다음과 같습니다.</strong></p>
		<p class='ls2'>-파기절차</br>이용자가 입력한 정보는 목적 달성 후 별도의 DB에 옮겨져(종이의 경우 별도의 서류) 내부 방침 및 기타 관련 법령에 따라 일정기간 저장된 후 혹은 즉시 파기됩니다. 이 때, DB로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 다른 목적으로 이용되지 않습니다.</br></br>-파기기한</br>이용자의 개인정보는 개인정보의 보유기간이 경과된 경우에는 보유기간의 종료일로부터 5일 이내에, 개인정보의 처리 목적 달성, 해당 서비스의 폐지, 사업의 종료 등 그 개인정보가 불필요하게 되었을 때에는 개인정보의 처리가 불필요한 것으로 인정되는 날로부터 5일 이내에 그 개인정보를 파기합니다.</p>
		<p class='ls2'>-파기방법</br>전자적 파일 형태의 정보는 기록을 재생할 수 없는 기술적 방법을 사용합니다.</br>종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기합니다.</p>
		</br></br>
		<p class="lh6 bs4"><strong>6. 개인정보 자동 수집 장치의 설치•운영 및 거부에 관한 사항</strong></p>
		<p class="ls2">(주)비츠로 은 정보주체의 이용정보를 저장하고 수시로 불러오는 ‘쿠키’를 사용하지 않습니다.</br></br>
		<p class='lh6 bs4'><strong>7. 개인정보 보호책임자 작성 </strong></p>
		<br/> ①  (주)비츠로(‘ledpro.co.kr’이하 (주)비츠로) 은(는) 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 정보주체의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보 보호책임자를 지정하고 있습니다.
		<p class='ls2'><br/>▶ 개인정보 보호책임자 <br/>성명 :감정선<br/>직책 :개인정보 관리 담당자<br/>직급 :대표이사<br/>연락처 :055-238-3331, led3331@naver.com<br/>② 정보주체께서는 (주)비츠로(‘ledpro.co.kr’이하 ‘(주)비츠로) 의 서비스(또는 사업)을 이용하시면서 발생한 모든 개인정보 보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 보호책임자 및 담당부서로 문의하실 수 있습니다. (주)비츠로(‘ledpro.co.kr’이하 (주)비츠로) 은(는) 정보주체의 문의에 대해 지체 없이 답변 및 처리해드릴 것입니다.</p>
		</br></br>
		<p class='lh6 bs4'><strong>8. 개인정보 처리방침 변경 </strong></p>
		<p>①이 개인정보처리방침은 시행일로부터 적용되며, 법령 및 방침에 따른 변경내용의 추가, 삭제 및 정정이 있는 경우에는 변경사항의 시행 7일 전부터 공지사항을 통하여 고지할 것입니다.</p>
		</br></br>
		<p class='lh6 bs4'><strong>9. 개인정보의 안전성 확보 조치 <em class="emphasis">(주)비츠로</em>은(는) 개인정보보호법 제29조에 따라 다음과 같이 안전성 확보에 필요한 기술적/관리적 및 물리적 조치를 하고 있습니다.</strong></p>
		<p class='ls2'>1. 정기적인 자체 감사 실시</br> 개인정보 취급 관련 안정성 확보를 위해 정기적(분기 1회)으로 자체 감사를 실시하고 있습니다.</br></br>2. 개인정보 취급 직원의 최소화 및 교육</br> 개인정보를 취급하는 직원을 지정하고 담당자에 한정시켜 최소화 하여 개인정보를 관리하는 대책을 시행하고 있습니다.</br></br>3. 내부관리계획의 수립 및 시행</br> 개인정보의 안전한 처리를 위하여 내부관리계획을 수립하고 시행하고 있습니다.</br></br></p>
		</p>
	</div>
	<div class="agreeChkWrap">
		<input class="checkbox" type="checkbox" id="agree" name="agree" value="Y">
		<label class="agreeTxt" for="agree">동의합니다</label>
		<span class="check"><i class="far fa-check-square"></i></span>
	</div>
</div>


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
		<td  valign="top" class="mail_kind"><span class="mail_star">*</span>문의사항</td>
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