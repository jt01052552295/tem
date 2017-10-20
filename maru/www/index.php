<?
include_once('../inc/config.inc');

if(!$path) $path="main";

//좌측메뉴 구성

$subHref['intro'				]	= '101';
$subHref['buildStudyAZ'	]	= '102';
$subHref['buildStudy'		]	= '103';
$subHref['story'				]	= '104';
$subHref['gallery'				]	= '105';

$subHref['history'			]	= '201';
$subHref['ceo'				]	= '202';
$subHref['organization'		]	= '203';
$subHref['location'			]	= '204';


$subHref['ing']='301';
$subHref['ingCategory']='301';
$subHref['ingCEO']='301';
$subHref['ingClient']='301';
$subHref['ingCooperation']='301';

$subHref['complete'			]='302';
$subHref['completeCategory']='302';
$subHref['completeCEO']='302';
$subHref['completeClient']='302';
$subHref['completeCooperation']='302';


$subHref['system'			]='303';
$subHref['propose'			]='304';

$subHref['notice'			]='401';
$subHref['news'			]='402';
$subHref['qna'			]='403';

$subHref['as'	]='501';

$subHref['myInformation'	]='601';
$subHref['myPW'				]='602';
$subHref['myLeave'			]='603';

$subHref['joinAgreement'	]='701';
$subHref['joinInput'			]='702';

$subHref['agreement'	]='801';
$subHref['policy'			]='802';
$subHref['refuse'			]='803';



$linkAll[0]=array('main','joinAgreement','javascript:bookmark()','javascript:btnPopupLogin()','javascript:btnlogout()','myInformation&bType=edit','javascript:admin()','myDocumentCooperation');
$linkAll[301]=array('ing','ingCategory','ingCEO','ingClient','ingCooperation');
$linkAll[302]=array('complete','completeCategory','completeCEO','completeClient','completeCooperation');
//$linkAll[301]=array('ing','ingClient','ingCooperation','ingDocument','ingEstimate','ingCEO');


//************************** 상단 시작 *******************************//
// 파일읽어오기
$file=$_SERVER['DOCUMENT_ROOT']."/www/_top.php";
$fp=fopen($file,r);
$fs=filesize($file);
$HTMLBODY=fread($fp,$fs);

//서브페이지 헤더 배경이미지 설정
$subPageNo = substr($subHref[$path],0,1);

if($subPageNo=='6'){
	$HTMLBODY = str_replace('my_active','active', $HTMLBODY);
}

//탑메뉴 on, active 활성화

//if($subPageNo=='1' || $subPageNo=='2' || $subPageNo=='3' || $subPageNo=='4' || $subPageNo=='5'){
	//$HTMLBODY = str_replace('nav2_'.$subPageNo, 'active', $HTMLBODY);
//}
//$HTMLBODY = str_replace('cls_'.$path, 'active', $HTMLBODY);

//로그인처리
$expHtml = explode('<!--scTop-->',$HTMLBODY); //로그인 소스 부분 가져오기
$expMenu = explode('scTop',$expHtml[1]); //로그인 컨텐츠 소스 부분 가져오기
$impMenu = $expMenu[0]; // 로그인 소스 앞부분 저장

for($i=1;$i<=count($expMenu)-1;$i++) {
    
	$expMenuSub=substr($expMenu[$i],0,strpos($expMenu[$i],'>'));
	if(strpos($expMenuSub,'style')===false) $expMenu[$i]=str_replace($expMenuSub,$expMenuSub.'style="" ',$expMenu[$i]);
	
	// 로그인 여부 체크
	if($_SESSION[b_level]>0) $disNone = ($_SESSION[e_strId])? array('Login','Join','Logout'):array('Login','Join','Admin'); // 관리자 로그인 여부 체크
	else $disNone = array('Logout','Admin');
	for($j=0;$j<=count($disNone)-1;$j++) {
		if(strpos($expMenu[$i],$disNone[$j])===false) {
		} else {
			preg_match("/]*style=[\"']?([^>\"']+)[\"']?[^>]*>/i",$expMenu[$i],$menuStyle);
			$expMenu[$i]=preg_replace('/style=(\".*?\")/si',"style='".$menuStyle[1]." display:none;'",$expMenu[$i]);
		}
	}

	//회원이름 넣기
	$expTopName = explode('<!--scName-->',$expMenu[$i]);
	if(count($expTopName)>2) {
		$strName	 = ($_SESSION['e_strName'])? $_SESSION['e_strName']:$_SESSION['m_strName'];
		$expMenu[$i] = $expTopName[0].$strName.$expTopName[2];
	}
	$impMenu.=$expMenu[$i];
}




$HTMLBODY=$expHtml[0].$impMenu.$expHtml[2];

print aLink($HTMLBODY,$linkAll,0);
fclose($fp);
//************************** 상단 종료 *******************************//

//************************** 내용 시작 *******************************//
//메인프로그램 처리
if($path=="main") {
	//메인 프로그램 가져오기
	include_once('./_mainP.php');
	//메인소스 가져오기
	include_once('./main.php');

} else if ($path=="myDocumentCooperation") {
	//메인 프로그램 가져오기
	include_once('./_mainP.php');
	include_once('./myDocumentCooperation.php');
} else {
	// 파일읽어오기
	$file=$_SERVER['DOCUMENT_ROOT']."/www/".$path.".html";
	$fp=fopen($file,r);
	$fs=filesize($file);
	$HTMLBODY=fread($fp,$fs);

    //좌측메뉴 출력
	if(!strpos($HTMLBODY,'<!--##LEFTMENU##-->')===false) {
		$file2=$_SERVER['DOCUMENT_ROOT']."/www/_leftMenu.php";
		$fp2=fopen($file2,r);
		$fs2=filesize($file2);
		$HTMLMENU=fread($fp2,$fs2);
	
		//메뉴 번호가져오기
		$pageNo = $subHref[$path];

		//메뉴 소스 추출하기
		$expMenu = explode('<!--scMenuLeft'.substr($pageNo,0,1).'-->',$HTMLMENU);
		// 온오브 효과
		$exp2meun = explode('divMenuLeft',$expMenu[1]);
		$pageNum  = (substr($pageNo,1,2)<10)? substr($pageNo,2,1):substr($pageNo,1,2);
		//$exp2meun[$pageNum] = str_replace(".gif","_o.gif",$exp2meun[$pageNum]);
		$exp2meun[$pageNum] = str_replace("Menu","on",$exp2meun[$pageNum]);
		$impMenu = implode('divMenuLeft',$exp2meun);
		$HTMLBODY = str_replace("<!--##LEFTMENU##-->",$impMenu,$HTMLBODY);
	} else {
		$pageNo = $subHref[$path];
	}


	//공사현장호출
	if(!strpos($HTMLBODY,'<!--scBuild-->')===false) {
		include_once('./_build.php');
		$HTMLBODY=str_replace('<!--scBuild-->',$boardHtml,$HTMLBODY);
		if(!strpos($HTMLBODY,'<!--scBuildRolling-->')===false) {
			$HTMLBODY= BuildRolling('scBuildRolling',$HTMLBODY,$cfg['buildRolling']);
		}
		if($b2Type=='view') {

				$_GET['searchBuildCode']=$strCode;
				include_once('./_smart.php');
				$HTMLBODY=str_replace('<!--scSmart-->',$boardHtml,$HTMLBODY);
				$HTMLBODY=str_replace('<!--scSmartCategory-->',$boardHtml,$HTMLBODY);
		} else {
			$hiddenTab=explode('<!--scBuildTab-->',$HTMLBODY);
			$HTMLBODY=$hiddenTab[0].$hiddenTab[2];
		}
	}

	//게시판호출
	if(!strpos($HTMLBODY,'<!--scBbs-->')===false) {
		include_once('./_bbs.php');
		$HTMLBODY=str_replace('<!--scBbs-->',$boardHtml,$HTMLBODY);
	}

	//게시판호출
	if(!strpos($HTMLBODY,'<!--scBbsING-->')===false) {
		include_once('./_bbsSmart.php');
		$HTMLBODY=str_replace('<!--scBbsING-->',$boardHtml,$HTMLBODY);
	}

	//회원가입양식호출
	if(!strpos($HTMLBODY,'<!--scMember-->')===false) {
		include_once('./_mem.php');
		$HTMLBODY=str_replace('<!--scMember-->',$boardHtml,$HTMLBODY);
	}
	print aLink($HTMLBODY,$linkAll,$pageNo);
	fclose($fp);
}
//************************** 내용 종료 *******************************//



//************************** 하단 시작 *******************************//
// 파일읽어오기
//$file=$_SERVER['DOCUMENT_ROOT']."/www/_footer.php";
include_once($_SERVER['DOCUMENT_ROOT']."/www/_footer.php");

//$fp=fopen($file,r);
//$fs=filesize($file);
//$HTMLBODY=fread($fp,$fs);
//print $HTMLBODY;
//fclose($fp);
//************************** 하단 종료 *******************************//

//************************** 템플릿 공통함수 *******************************//

// 단순링크 
function aLink($html,$link,$subNo='') {


	//$subNo=($subNo)? $subNo+1:0;
	$expHtml = explode('{',$html);
	$cnt = (count($expHtml)<=1)? 0:count($expHtml)-1;
	$add = 0;

	for($a=0;$a<=$cnt;$a++) {
		$linkNum=substr($expHtml[1+$add],0,strpos($expHtml[1+$add],'}'));
		if(strpos($link[$subNo][$linkNum],'script:')===false) {
			if($subNo=='301' || $subNo=='302' ) {

				$strCode = ($_GET['strBuildCode'])? $_GET['strBuildCode']:$_GET['strCode'] ;
				$param='&b2Type='.$_GET['b2Type'].'&strCode='.$strCode;
			}
			if($link[$subNo][$linkNum]) $html=str_replace('{'.$linkNum.'}','./?path='.$link[$subNo][$linkNum].$param,$html);
		}else {
			if($link[$subNo][$linkNum]) {
			$html=str_replace('{'.$linkNum.'}',$link[$subNo][$linkNum],$html);	
			}
		}
		$add++;
	}
	
	return $html;
}

// 메뉴 불러오기
function menu($menuChange) {
	
}

function BuildRolling($className,$html,$row) {
	$expHtml = explode('<!--'.$className.'-->',$html);
	$expRolling = explode($className,$expHtml[1]);
	for($i=0;$i<=count($row['code'])-1;$i++) {
		//리스트 추출
		$element=extraction($expRolling[0],$expRolling[1]);
		$name = str_replace('신축공사','',$row['name'][$i]);
		$name = str_replace('공사','',$name);
		if($_GET['strCode']==$row['code'][$i]) {
			$cls ="ing_01_o";
		} else {
			$cls = "";
		}
		$arrMenu[$i]="<a href='./?b2Type=view&strCode=".$row['code'][$i]."&page=1&path=ing' class='".$cls."'>".$element['st'].$name.$element['ed']."</a>";
	}
	if(fmod(count($row['code']),5)>0) {
		$rChk = 5-fmod(count($row['code']),5);
		for($c=$i;$c<($rChk+$i);$c++) {
			$arrMenu[$c]=$element['st']."미등록".$element['ed'];
		}
	}
	
	if($row) {
		$menu=implode('',$arrMenu);
	}
	return $expHtml[0].$menu.$expHtml[2];
}

// html소스 추출
function extraction($arrHtml,$arrHtmlNext,$className='') {
	$element[0]=substr($arrHtml,strrpos($arrHtml,'<'),strlen($arrHtml)); // 시작
	$element[1]=substr($arrHtmlNext,strrpos($arrHtmlNext,'</'),strlen($arrHtmlNext));
	$element[2]=substr($element[1],0,strrpos($element[1],'>')+1); //끝
	$element[3]=substr($arrHtmlNext,0,strpos($arrHtmlNext,$element[2]));
	$element[4]=substr($arrHtmlNext,0,strpos($element[3],'>')+1); //시작뒤부분
	$element[5]=str_replace($element[4],'',$element[3]); // 중간내용
	//정리
	$element['st']=$element[0].$className.$element[4];
	$element['ed']=$element[2];
	$element['ct']=$element[5];
	return $element;
}
?>