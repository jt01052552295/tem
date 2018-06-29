<?
$category = "ucity";	//현카테고리 영어명을 입력하세요(폴더명과 일치해야합니다.)

$cate_name[$category] = "U-CITY";	//현카테고리 한글명을 입력하세요



	//대표페이지
	$page_1_name[$category][] = "대표페이지";
	$page_1_html[$category][] = "ucity1"; ///최상단 메뉴클릭시 이동하는 페이지를 입력하세요
	$no_1=0;


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "U-CITY1"; //메뉴명
	$page_1_html[$category][$no_1] = "ucity1"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "U-CITY2"; //메뉴명
	$page_1_html[$category][$no_1] = "ucity2"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "U-CITY3"; //메뉴명
	$page_1_html[$category][$no_1] = "ucity3"; //html명
?>