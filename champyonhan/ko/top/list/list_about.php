<?
$category = "about";	//현카테고리 영어명을 입력하세요(폴더명과 일치해야합니다.)

$cate_name[$category] = "병원소개";	//현카테고리 한글명을 입력하세요



	//대표페이지
	$page_1_name[$category][] = "대표페이지";
	$page_1_html[$category][] = "about"; ///최상단 메뉴클릭시 이동하는 페이지를 입력하세요
	$no_1=0;


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "병원이야기"; //메뉴명
	$page_1_html[$category][$no_1] = "about"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "법인설립취지&목적"; //메뉴명
	$page_1_html[$category][$no_1] = "goal"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "병원연혁"; //메뉴명
	$page_1_html[$category][$no_1] = "history"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "조직도"; //메뉴명
	$page_1_html[$category][$no_1] = "organization"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "보유장비"; //메뉴명
	$page_1_html[$category][$no_1] = "equipment"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "원내배치도"; //메뉴명
	$page_1_html[$category][$no_1] = "plan"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "병원둘러보기"; //메뉴명
	$page_1_html[$category][$no_1] = "round"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "오시는길"; //메뉴명
	$page_1_html[$category][$no_1] = "location"; //html명


?>