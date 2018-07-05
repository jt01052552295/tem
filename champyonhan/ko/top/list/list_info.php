<?
$category = "info";	//현카테고리 영어명을 입력하세요(폴더명과 일치해야합니다.)

$cate_name[$category] = "이용안내";	//현카테고리 한글명을 입력하세요



	//대표페이지
	$page_1_name[$category][] = "대표페이지";
	$page_1_html[$category][] = "out"; ///최상단 메뉴클릭시 이동하는 페이지를 입력하세요
	$no_1=0;


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "외래진료안내"; //메뉴명
	$page_1_html[$category][$no_1] = "out"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "입퇴원안내"; //메뉴명
	$page_1_html[$category][$no_1] = "inout"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "진료시간안내"; //메뉴명
	$page_1_html[$category][$no_1] = "time"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "문병시간안내"; //메뉴명
	$page_1_html[$category][$no_1] = "visit"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "병동일정"; //메뉴명
	$page_1_html[$category][$no_1] = "schedule"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "비급여안내"; //메뉴명
	$page_1_html[$category][$no_1] = "non"; //html명	

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "입원환자 식대안내"; //메뉴명
	$page_1_html[$category][$no_1] = "pay"; //html명	

?>