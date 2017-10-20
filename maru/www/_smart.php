<?
// 페이징 셋팅
if(!$page)	$page	= 1;

$listOrder			= "작업일자,현장사진1";		// 리스트
//$listOrder			= "작업일자,현장사진1,금일작업,특기사항";		// 리스트

$writeOrder			= "작업일자,공종,직종,인원,노무메모,자재,자재상세,자재양,자재단위,자재메모,장비,장비상세,장비양,장비단위,장비메모,공종,직종,노무메모,특기사항,현장사진1,현장메모1,현장사진2,현장메모2,현장사진3,현장메모3,현장사진4,현장메모4,현장사진5,현장메모5,현장사진6,현장메모6,현장사진7,현장메모7,현장사진8,현장메모8,현장사진9,현장메모9,현장사진10,현장메모10,현장사진11,현장메모11,현장사진12,현장메모12,현장사진13,현장메모13,현장사진14,현장메모14,현장사진15,현장메모15,현장사진16,현장메모16,현장사진17,현장메모17,현장사진18,현장메모18,현장사진19,현장메모19,현장사진20,현장메모20";			// 글쓰기

$editOrder			= "작업일자,공종,직종,인원,노무메모,자재,자재상세,자재양,자재단위,자재메모,장비,장비상세,장비양,장비단위,장비메모,공종,직종,노무메모,특기사항,현장사진1,현장메모1,현장사진2,현장메모2,현장사진3,현장메모3,현장사진4,현장메모4,현장사진5,현장메모5,현장사진6,현장메모6,현장사진7,현장메모7,현장사진8,현장메모8,현장사진9,현장메모9,현장사진10,현장메모10,현장사진11,현장메모11,현장사진12,현장메모12,현장사진13,현장메모13,현장사진14,현장메모14,현장사진15,현장메모15,현장사진16,현장메모16,현장사진17,현장메모17,현장사진18,현장메모18,현장사진19,현장메모19,현장사진20,현장메모20";		// 수정

$viewOrder			= "작업일자,금일작업,금일작업메모,명일작업,명일작업메모,특기사항";		// 리스트


$setting['column']['list']		= array($listOrder);
$setting['column']['write']		= array($writeOrder);
$setting['column']['edit']		= array($editOrder);
$setting['column']['answer']	= array($editOrder);
$setting['column']['view']		= array(','.$viewOrder);
$setting['search']				= array($search);
$setting['searchInput']			= array($searchInput);
$setting['cate']				= 'smart';
$setting['bType']				= (!$bType2)? $bType2="list":$bType2;
$setting['level']				= $_SESSION['b_level'];
//$setting['siteId']				= $_SERVER["SITE_ID"];
$setting['siteId']				= 'cm';

// 클래스 호출 및 디스플레이
$clsSetting		= new LeeBoardSetting($setting['cate']);
$bbsSet			= $clsSetting->setting();

$bbsSet['skin']['layout']		= 'U013';
$bbsSet['skin']['search']		= 'U013';

if($path=='ingCategory' || $path=='completeCategory'){
	$bbsSet['skin']['list'] = 'U014';
} else {
	$bbsSet['skin']['list'] = 'U013';
}

$bbsSet['skin']['write']			= 'U013';
$bbsSet['skin']['edit']			= 'U013';
$bbsSet['skin']['view']			= 'U013';
$bbsSet['skin']['paging']		= 'U013';
$bbsSet['skin']['button']		= 'U013';
$bbsSet['skin']['reple']		= 'U013';
$bbsSet['page']['block']		= '10';
$bbsSet['page']['cnt']			= ($perPage)? $perPage:'5';



$clsSkin		= new LeeBoardSkin($setting,$bbsSet);
$skin			= $clsSkin->getSkin();

//echo "<!--<pre skin>";
//print_r($skin);
//echo "</pre>-->";

$skinLoad		= new LeeBoardSmart($setting, $bbsSet, $skin, $page);
$boardHtml		= $skinLoad->load();

?>