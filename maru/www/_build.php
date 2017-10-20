<?
// 페이징 셋팅
if(!$page)	$page	= 1;

if($path=='ing' || $path=='ingCategory' || $path=='ingCEO' || $path=='ingClient' || $path=='ingCooperation') {
	$listOrder			= "이미지, 공사명칭, 시작일, 종료일,위치, 지상, 지하,현장소장1,구조";		// 리스트
	$viewOrder			= "공사명칭,시작일,종료일,위치,현장소장1,건축사,구조,지하,지상,이미지";	// 보기
} else {
	$listOrder			= "이미지, 공사명칭, 시작일, 종료일,위치, 지상, 지하,구조";		// 리스트
	//$viewOrder			= "공사명칭,시작일,종료일,위치,현장소장1,건축사,대지,건축,연면적,구조,지하,지상,이미지,완료보고서";
	$viewOrder			= "공사명칭,시작일,종료일,위치,현장소장1,건축사,구조,지하,지상,이미지";	// 보기
}

$search				= "공사명칭,코드";	// 검색항목(셀렉트박스)
$searchInput		= "검색내용,검색시작일,검색종료일";	// 검색내용(인붓박스)


if(!$tid){
	$_arrDir	= explode("/",$_SERVER['PHP_SELF']);
	$tid		= str_replace('.php','',$_arrDir[2]);
}

$setting['column']['list']		= array($listOrder);
$setting['column']['write']		= array(trim($writeOrder));
$setting['column']['edit']		= array($editOrder);
$setting['column']['answer']	= array($editOrder);
$setting['column']['view']		= array(','.$viewOrder);
$setting['search']				= array($search);
$setting['searchInput']			= array(trim($searchInput));
$setting['cate']				= 'build';
$setting['b2Type']				= (!$b2Type)? $b2Type="list":$b2Type;
$setting['level']				= $_SESSION['b_level'];
$setting['siteId']				= $_SERVER["SITE_ID"];
$setting['siteId']				= 'cm';

// 클래스 호출 및 디스플레이
$clsSetting		= new LeeBoardSetting($setting['cate']);
$bbsSet			= $clsSetting->setting();

$bbsSet['skin']['layout']		= ($path=='complete')? 'U038':'U037';
$bbsSet['skin']['search']		= 'U037';
$bbsSet['skin']['list']			= ($path=='complete')? 'U038':'U037';
$bbsSet['skin']['write']			= 'U037';
$bbsSet['skin']['edit']			= 'U037';
$bbsSet['skin']['view']			= ($path=='complete')? 'U038':'U037';
$bbsSet['skin']['answer']		= 'U037';
$bbsSet['skin']['paging']		= 'U037';
$bbsSet['skin']['button']		= ($path=='complete')? 'U038':'U037';
$bbsSet['skin']['reple']		= 'U037';
$bbsSet['page']['block']		= '10';
$bbsSet['page']['cnt']			= ($perPage)? $perPage:'2';

$clsSkin		= new LeeBoardSkin($setting,$bbsSet);
$skin			= $clsSkin->getSkin();
$skinLoad		= new LeeBoardBuild($setting, $bbsSet, $skin, $page);
$boardHtml		= $skinLoad->load();


//롤링 소스 가져오기
$query = "SELECT * FROM b_build WHERE  intLevel<9 AND intStatus >0 AND strSiteId='".$_SERVER["SITE_ID"]."' ORDER BY intLevel ASC, strType DESC";
$result_client = $db->query($query);
$idx=0;
while($rows = $result_client->fetch_array(MYSQL_ASSOC)){
	$cfg['buildRolling']['code'][$idx]	= $rows['strCode'];
	$cfg['buildRolling']['name'][$idx]	= $rows['strName'];
	$idx++;
}
?>
