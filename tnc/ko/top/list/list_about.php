<?
$category = "about";	//현카테고리 영어명을 입력하세요(폴더명과 일치해야합니다.)

$cate_name[$category] = "병원소개";	//현카테고리 한글명을 입력하세요



	//대표페이지
	$page_1_name[$category][] = "대표페이지";
	$page_1_html[$category][] = "01"; ///최상단 메뉴클릭시 이동하는 페이지를 입력하세요
	$no_1=0;


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "병원이야기"; //메뉴명
	$page_1_html[$category][$no_1] = "01"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "법인설립취지&목적"; //메뉴명
	$page_1_html[$category][$no_1] = "02"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "병원연혁"; //메뉴명
	$page_1_html[$category][$no_1] = "03"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "원내배치도"; //메뉴명
	$page_1_html[$category][$no_1] = "04"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "병원둘러보기"; //메뉴명
	$page_1_html[$category][$no_1] = "05"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "공지사항"; //메뉴명
	$page_1_html[$category][$no_1] = "notice"; //html명
?>