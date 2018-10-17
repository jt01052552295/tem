<?
$category = "cs";	//현카테고리 영어명을 입력하세요(폴더명과 일치해야합니다.)

$cate_name[$category] = "고객마당";	//현카테고리 한글명을 입력하세요



	//대표페이지
	$page_1_name[$category][] = "대표페이지";
	$page_1_html[$category][] = "faq"; ///최상단 메뉴클릭시 이동하는 페이지를 입력하세요
	$no_1=0;


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "자주하시는질문"; //메뉴명
	$page_1_html[$category][$no_1] = "faq"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "사이버상담"; //메뉴명
	$page_1_html[$category][$no_1] = "02"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "직원교육게시판"; //메뉴명
	$page_1_html[$category][$no_1] = "edu"; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "사회복지프로그램"; //메뉴명
	$page_1_html[$category][$no_1] = "program"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "오시는길"; //메뉴명
	$page_1_html[$category][$no_1] = "05"; //html명


?>