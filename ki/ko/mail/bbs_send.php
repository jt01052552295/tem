<html>
<head>
<title>SEND MAIL --- Program by www.infodu.co.kr ---</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="white" leftmargin="0" topmargin="0" bottommargin="0"  rightmargin="0" marginheight="0">

<?
include $mail_code."/mail_contect.php";



extract($_POST); // form을 통해 post 방식으로 넘어온 값들을 편하게 사용하기 위해 extract 시킴...^^
$use_html= 1; // html사용하기 설정
$limit = 2;  // 각각의 첨부 파일 제한 용량 (단위:MB 최대2MB) [수정가능]


///////////이 이하로는 수정안하시는게 좋습니다.///////////////////
//▶ 제목은 무조건 html 을 사용 못 함
$subject = htmlspecialchars($subject);

$header = "MIME-Version: 1.0 \r\n";
$header .= "Return-Path: server@".$admin_home." \r\n";
$header .= "Content-Type: text/html; charset=utf-8 \r\n";
$header .= "From: server@".$admin_home." \r\n";

$mailbody = $content;

mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $mailbody, $header)
?>
</body>
</html>