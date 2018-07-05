<?
$category = "center";	//현카테고리 영어명을 입력하세요(폴더명과 일치해야합니다.)

$cate_name[$category] = "부서안내";	//현카테고리 한글명을 입력하세요



	//대표페이지
	$page_1_name[$category][] = "대표페이지";
	$page_1_html[$category][] = "rehabilitation"; ///최상단 메뉴클릭시 이동하는 페이지를 입력하세요
	$no_1=0;


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "재활치료실"; //메뉴명
	$page_1_html[$category][$no_1] = "rehabilitation"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "간호부"; //메뉴명
	$page_1_html[$category][$no_1] = "nurse"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "영양실"; //메뉴명
	$page_1_html[$category][$no_1] = "nutrition"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "사회복지과"; //메뉴명
	$page_1_html[$category][$no_1] = "welfare"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "한방과"; //메뉴명
	$page_1_html[$category][$no_1] = "medicine"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "영상의학실"; //메뉴명
	$page_1_html[$category][$no_1] = "image"; //html명	

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "진단검사실"; //메뉴명
	$page_1_html[$category][$no_1] = "diagnosis"; //html명	

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "원무과"; //메뉴명
	$page_1_html[$category][$no_1] = "administration"; //html명	
?>