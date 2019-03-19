<?
$to=$admin_email;

/////////////// 제목 내용설정하기///////////////[수정가능]
$subject=$admin_home."부정클릭의심 IP : ".$REMOTE_ADDR;

////////////////메일 내용합치기////////////////[수정가능]항목이 추가되면 아래와 같은 방식으로 추가해주십시오.
$content="키워드광고 부정클릭이 의심됩니다.<br><hr>";
$content.="<b>IP - </b>$REMOTE_ADDR<br>";
$content.="<b>접속경로 - </b>$logreferer<br>";
$content.="<b>접속변수 - </b>$REQUEST_URI<br>";
$content.="<b>접속횟수 - </b>$ipcount";
?>