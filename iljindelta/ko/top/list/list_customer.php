<?
$category = "customer";	//현카테고리 영어명을 입력하세요(폴더명과 일치해야합니다.)

$cate_name[$category] = "고객센터";	//현카테고리 한글명을 입력하세요



	//대표페이지
	$page_1_name[$category][] = "대표페이지";
	$page_1_html[$category][] = "notice"; ///최상단 메뉴클릭시 이동하는 페이지를 입력하세요
	$no_1=0;


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "공지사항"; //메뉴명
	$page_1_html[$category][$no_1] = "notice"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "제품문의"; //메뉴명
	$page_1_html[$category][$no_1] = "inquiry"; //html명

	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "사이트맵"; //메뉴명
	$page_1_html[$category][$no_1] = "sitemap"; //html명


?>