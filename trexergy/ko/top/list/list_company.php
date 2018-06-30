<?
$category = "company";	//현카테고리 영어명을 입력하세요(폴더명과 일치해야합니다.)

$cate_name[$category] = "회사소개";	//현카테고리 한글명을 입력하세요



	//대표페이지
	$page_1_name[$category][] = "대표페이지";
	$page_1_html[$category][] = "company"; ///최상단 메뉴클릭시 이동하는 페이지를 입력하세요
	$page_1_link[$category][$no_1] = ""; //link명
	$page_1_target[$category][$no_1] = false; //Target true 이면 창을 새로 엽니다.
	$no_1=0;


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "회사개요"; //메뉴명
	$page_1_html[$category][$no_1] = "company"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "오시는길"; //메뉴명
	$page_1_html[$category][$no_1] = "location"; //html명
?>