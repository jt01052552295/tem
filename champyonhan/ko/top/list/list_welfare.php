<?
$category = "welfare";	//현카테고리 영어명을 입력하세요(폴더명과 일치해야합니다.)

$cate_name[$category] = "사회복지사업";	//현카테고리 한글명을 입력하세요



	//대표페이지
	$page_1_name[$category][] = "대표페이지";
	$page_1_html[$category][] = "01"; ///최상단 메뉴클릭시 이동하는 페이지를 입력하세요
	$no_1=0;


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "병원내 복지프로그램"; //메뉴명
	$page_1_html[$category][$no_1] = "01"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "재가복지사업"; //메뉴명
	$page_1_html[$category][$no_1] = "02"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "지역사회 자원연계"; //메뉴명
	$page_1_html[$category][$no_1] = "03"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "PHOTO"; //메뉴명
	$page_1_html[$category][$no_1] = "photo"; //html명

?>