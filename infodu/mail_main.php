<?php
include_once('./_config.php');
?>
<html>
<head>
<title>SEND MAIL --- Program by www.infodu.co.kr ---</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="white" leftmargin="0" topmargin="0" bottommargin="0"  rightmargin="0" marginheight="0">

<?php

$admin_company = $infodu['admin']['company']; //// 회사명을 입력해주세요
$admin_email = $infodu['admin']['email']; /// 이메일을 입력해주세요
$admin_home = $infodu['admin']['homepage']; /// 홈페이지주소를 입력해주세요

if (!$to)	{$to=$admin_email;}

//에러메세지 출력함수
function error ($error)
{
  echo " <script> alert('$error'); history.go(-1); </script> ";
  exit; 
}
     

//▶ 받는사람 이메일 주소가 입력되었는지 확인
if(!preg_match("([^[:space:]]+)",$name)) {
	error("담당자명을 입력해주세요.");
}

//▶ 이메일 내용이 입력되었는지 확인
if(!preg_match("([^[:space:]]+)",$mail)) {
	error("이메일을 입력해 주세요.");
}

//▶ 내용이 입력되었는지 확인
if(!preg_match("([^[:space:]]+)",$memo)) {
	error("문의사항을 입력해 주세요.");
}


// 제목 내용설정하기
$subject=$name."님 빠른상담신청 --".$admin_home;

//메일 내용합치기

////////////////메일 내용합치기////////////////[수정가능]항목이 추가되면 아래와 같은 방식으로 추가해주십시오.
$content=$admin_home." 에서 작성된 <b>".$name."</b>님으로 부터의 빠른상담신청 입니다.<br><hr>";

$content.="<b>업체명 - </b>$company<br>";
$content.="<b>담당자 - </b>$name<br>";
$content.="<b>연락처 - </b>$tel<br>";
$content.="<b>이메일 - </b>$mail<br>";
$content.="<b>업종 - </b>$businesstype<br><br><br><br>";
$content.= $memo;

// $header = "MIME-Version: 1.0 \r\n";
// $header .= "Return-Path: ".$mail." \r\n";
// $header .= "Content-Type: text/html; charset=utf-8 \r\n";
// $header .= "From: server@".$admin_home." \r\n";
// $header .= "X-Mailer: PHP";




$boundary = "----" . uniqid("part"); // 구분자 생성

// --- 헤더작성 --- //
$header = "Return-Path: $mail\r\n"; // 반송 이메일 주소
$header .= "From: server@".$admin_home." \r\n"; // 송신자명, 송신자 이메일 주소

// --- 첨부화일이 있을경우 --- //
if($upfile) {
	
	//$filename=basename($upfile); // 파일명 추출

	$ext = explode('.',$_FILES['upfile']['name']);
	$filename = $_FILES['upfile']['name'];


	$fp = fopen($upfile,"r"); // 파일 열기
	$file = fread($fp,$upfile_size); // 파일 읽기
	fclose($fp); // 파일 닫기
	if ($upfile_type == ""){
		$upfile_type = "application/octet-stream";
	}

	// --- 헤더작성 --- //
	$header .= "MIME-Version: 1.0\r\n"; // MIME 버전 표시
	$header .= "Content-Type: Multipart/mixed; boundary=\"$boundary\""; // 구분자 설정, Multipart/mixed 일 경우 첨부화일

	// --- 이메일 본문 생성 --- // 
	$mailbody = "This is a multi-part message in MIME format.\r\n\r\n";
	$mailbody .= "--$boundary\r\n";
	$mailbody .= "Content-Type: text/html; charset=utf-8\r\n";
	$mailbody .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
	$mailbody .= nl2br(addslashes($content)) . "\r\n";

	// --- 파일 첨부 ---// 
	$mailbody .= "--$boundary\r\n"; 
	$mailbody .= "Content-Type: ".$upfile_type."; name=\"".$filename."\"\r\n"; // 내용
	$mailbody .= "Content-Transfer-Encoding: base64\r\n"; // 암호화 방식 
	$mailbody .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n"; // 첨부파일인 것을 알림
	$mailbody .= base64_encode($file)."\r\n\r\n";

	$mailbody .= "--$boundary--"; //내용 구분자 마침

} else {

	// --- 헤더작성 --- // 
	$header = "MIME-Version: 1.0 \r\n";
	$header .= "Return-Path: ".$mail." \r\n";
	$header .= "Content-Type: text/html; charset=utf-8 \r\n";
	$header .= "From: server@".$admin_home." \r\n";
	$header .= "X-Mailer: PHP";

	// --- 이메일 본문 생성 --- //
	//$mailbody = "--$boundary\r\n"; 
	//$mailbody .= "Content-Type: text/html; charset=utf-8\r\n";
	//$mailbody .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
	$mailbody .= nl2br(addslashes($content)) . "\r\n";

	//$mailbody .= "--$boundary--\r\n\r\n"; 

}



//print_r($mailbody);
//exit;
//print_r($to);

//die("error,상담신청이 실패하였습니다. 고객센터로 전화주시기 바랍니다.");
//print_r($header);
//▶ 메일을 $to 로 발송하고 에러가 있다면 에러 출력 후 뒤로 이동 그렇지 않으면 정상발송 메세지를 출력후 mail.php 로 이동...
if(!mail($to, $subject, $mailbody, $header)) {
	error("고객문의 전송이 실패하였습니다. 고객센터로 전화주시기 바랍니다.");
} else { 
	error("고객문의가 정상적으로 접수되었습니다.");
}
?>
</body>
</html>