<?
$category = "company";	//현카테고리 영어명을 입력하세요(폴더명과 일치해야합니다.)

$cate_name[$category] = "회사소개";	//현카테고리 한글명을 입력하세요



	//대표페이지
	$page_1_name[$category][] = "대표페이지";
	$page_1_html[$category][] = "message"; ///최상단 메뉴클릭시 이동하는 페이지를 입력하세요
	$no_1=0;


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "CEO 인사말"; //메뉴명
	$page_1_html[$category][$no_1] = "message"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "경영이념"; //메뉴명
	$page_1_html[$category][$no_1] = "management"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "회사연혁"; //메뉴명
	$page_1_html[$category][$no_1] = "history"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "조직도"; //메뉴명
	$page_1_html[$category][$no_1] = "organization"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "인증서 및 수상"; //메뉴명
	$page_1_html[$category][$no_1] = "cert"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "CONTACT"; //메뉴명
	$page_1_html[$category][$no_1] = "location"; //html명
?>