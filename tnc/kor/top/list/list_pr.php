<?
$category = "pr";	//현카테고리 영어명을 입력하세요(폴더명과 일치해야합니다.)

$cate_name[$category] = "홍보센터";	//현카테고리 한글명을 입력하세요



	//대표페이지
	$page_1_name[$category][] = "대표페이지";
	$page_1_html[$category][] = "ci"; ///최상단 메뉴클릭시 이동하는 페이지를 입력하세요
	$no_1=0;


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "CI소개"; //메뉴명
	$page_1_html[$category][$no_1] = "ci"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "인재상"; //메뉴명
	$page_1_html[$category][$no_1] = "talent"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "소개영상"; //메뉴명
	$page_1_html[$category][$no_1] = "prvideo"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "BUSINESS PARTNER"; //메뉴명
	$page_1_html[$category][$no_1] = "partner"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "TNC 갤러리"; //메뉴명
	$page_1_html[$category][$no_1] = "gallery"; //html명

