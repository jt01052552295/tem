<?
// 제목 내용설정하기
$subjectname .= $company;
if ($company){$subjectname .= "/";}
$subjectname .= $name;
$subject=$subjectname."님의 견적문의 입니다.--".$admin_home;

//메일 내용합치기
$content=$admin_home." 에서 작성된 <b>".$subjectname."</b>님으로 부터의 견적문의 입니다.<br />";
$content.="해당메일은 귀사의 홈페이지에서 발송되는 문의메일이므로 답장(회신)이 되지않습니다.<br />아래 작성자정보의 이메일로 메일을 발송하시기 바랍니다.<hr />";

$content.="&nbsp;<br /><b>작성자정보</b><hr />";
$content.="업체명 : ".$company."<br />";
$content.="부서명 : ".$post."<br />";
$content.="담당자명 : ".$name."<br />";
$content.="이메일 : ".$mail."<br />";
$content.="전화번호 : ".$tel."<br />";
$content.="FAX : ".$fax."<br />";

$content.="&nbsp;<br /><b>문의내용</b><hr />";
$memo=nl2br(htmlspecialchars($memo)); //메모 자동줄바꿈
$content.="$memo";
?>