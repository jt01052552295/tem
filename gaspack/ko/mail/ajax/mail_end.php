<?
//▶ 메일을 $to 로 발송하고 에러가 있다면 에러 출력 후 뒤로 이동 그렇지 않으면 정상발송 메세지를 출력후 mail.php 로 이동...
if(!mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $mailbody, $header)) back("고객문의 신청이 실패하였습니다. 고객센터로 전화주시기 바랍니다.");
else echo "<script>alert('고객문의가 정상적으로 접수되었습니다. 신속하게 검토하여 담당자가 답변드리도록 하겠습니다.');location.replace('$uri');</script>";
?>