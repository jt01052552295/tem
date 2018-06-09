<html>
<head>
<title>SEND MAIL --- Program by www.infodu.co.kr ---</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="white" leftmargin="0" topmargin="0" bottommargin="0"  rightmargin="0" marginheight="0">

<?
extract($_POST);
include "../../top/admin/admin_data.php";
include $mail_code."/mail_contect.php";


if (!$to)	{$to=$admin_email;}

//에러메세지 출력함수
function error ($error)
{
  echo " <script language = javascript> alert('$error'); history.go(-1); </script> ";
  exit; 
}

////////////광고글 필터링
$c_checking = crypt ($write_checking, "18");
if ($c_checking != $write_check && !$HTTP_COOKIE_VARS[dyfhzkr])
{
	error ( $write_check.'광고필터링의 숫자가 일치하지 않습니다.!');
	return;
	//break;
}

$use_html= 1; // html사용하기 설정
$limit = 2;  // 각각의 첨부 파일 제한 용량 (단위:MB 최대2MB) [수정가능]


///////////이 이하로는 수정안하시는게 좋습니다.///////////////////

//▶ 에러 발생시 전페이지로 이동하는 스크립트를 함수로 작성
function back($str,$no=-1) {
	echo "<script>
		window.alert(\"".$str."\")
		history.go(".$no.")
		</script>
	";
}

//▶ 받는사람 이메일 주소가 입력되었는지 확인
if(!preg_match("([^[:space:]]+)",$to)) {
	back("받는사람 이메일주소를 입력해주세요.");
	exit;
}

//▶ 이메일 제목이 입력되었는지 확인
if(!preg_match("([^[:space:]]+)",$subject)) {
	back("메일 제목이 없습니다. 메일 제목을 입력해 주십시오.");
	exit;
}

//▶ 이메일 내용이 입력되었는지 확인
if(!preg_match("([^[:space:]]+)",$content)) {
	back("메일 내용을 입력해 주세요.");
	exit;
}
//▶ 제목은 무조건 html 을 사용 못 함
$subject = htmlspecialchars($subject);

$header = "MIME-Version: 1.0 \r\n";
$header .= "Return-Path: ".$mail." \r\n";
$header .= "Content-Type: text/html; charset=utf-8 \r\n";
$header .= "From: server@".$admin_home." \r\n";

$mailbody = $content;

include $mail_code."/mail_end.php";
?>

</body>
</html>