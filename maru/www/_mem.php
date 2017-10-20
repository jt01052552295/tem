<?
$listOrder			= "번호,아이디,이름,업체명,연락처,이메일,등록일";		// 리스트


$writeOrder			= "아이디,비밀번호,비밀번호확인,이름,이메일,연락처,뉴스레터,SMS문자";			// 글쓰기

if($path=='myInformation') {
$editOrder			= "아이디,비밀번호,이름,이메일,연락처,뉴스레터,SMS문자";					// 수정
} else if($path=='myPW')  {
$editOrder			= "비밀번호,새비밀번호,새비밀번호확인";					// 수정
} else if($path=='myLeave')  {
$editOrder			= "아이디,비밀번호";					// 수정
}
$viewOrder			= "제목,내용,작성자,첨부파일";	// 보기

$search				= "아이디,이름";	// 검색항목

$setting['column']['list']		= array($listOrder);
$setting['column']['write']		= array(trim($writeOrder));
$setting['column']['edit']		= array($editOrder);
$setting['column']['answer']	= array($editOrder);
$setting['column']['view']		= array(','.$viewOrder);
$setting['search']				= array($search);
$setting['searchInput']			= array(trim($searchInput));
$setting['cate']				= 'member';
$setting['bType']				= (!$bType)? $bType="list":$bType;
$setting['level']				= $_SESSION['b_level'];
$setting['siteId']				= $_SERVER["SITE_ID"];


// 클래스 호출 및 디스플레이
$clsSetting		= new LeeBoardSetting($setting['cate']);
$bbsSet			= $clsSetting->setting();

$bbsSet['skin']['layout']		= 'U030';
$bbsSet['skin']['search']		= 'U030';
$bbsSet['skin']['list']			= 'U030';
$bbsSet['skin']['write']		= 'U030';
if($path=='myInformation') {
$bbsSet['skin']['edit']			= 'U030';
} else if($path=='myPW')  {
$bbsSet['skin']['edit']			= 'U031';
} else if($path=='myLeave') {
$bbsSet['skin']['edit']			= 'U032';
}
$bbsSet['skin']['view']			= 'U030';
$bbsSet['skin']['answer']		= 'U030';
$bbsSet['skin']['paging']		= 'U030';
$bbsSet['skin']['button']		= 'U030';
$bbsSet['skin']['reple']		= 'U030';
$bbsSet['page']['block']		= '10';
$bbsSet['page']['cnt']			= ($perPage)? $perPage:'15';

$clsSkin		= new LeeBoardSkin($setting,$bbsSet);
$skin			= $clsSkin->getSkin();
$skinLoad		= new LeeBoardMember($setting, $bbsSet, $skin, $page);
$boardHtml		= $skinLoad->load();


?>