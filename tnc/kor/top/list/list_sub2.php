<?
$category = "products";	//현카테고리 영어명을 입력하세요(폴더명과 일치해야합니다.)

$cate_name[$category] = "제품소개";	//현카테고리 한글명을 입력하세요



	//대표페이지
	$page_1_name[$category][] = "대표페이지";
	$page_1_html[$category][] = "products"; ///최상단 메뉴클릭시 이동하는 페이지를 입력하세요
	$no_1=0;


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "products1"; //메뉴명
	$page_1_html[$category][$no_1] = "products"; //html명


	//하위페이지 
	$no_1++;
	$page_1_name[$category][$no_1] = "products2"; //메뉴명
	$page_1_html[$category][$no_1] = "products2"; //html명	

		$page_2_name[$category][$no_1][] = "비워"; //메뉴명
		$page_2_html[$category][$no_1][] = "비워"; //html명

		$page_2_name[$category][$no_1][] = ""; //메뉴명
		$page_2_html[$category][$no_1][] = ""; //html명

		$page_2_name[$category][$no_1][] = ""; //메뉴명
		$page_2_html[$category][$no_1][] = ""; //html명

		$page_2_name[$category][$no_1][] = ""; //메뉴명
		$page_2_html[$category][$no_1][] = ""; //html명


	//하위페이지
	$no_1++;
	$page_1_name[$category][$no_1] = "products3"; //메뉴명
	$page_1_html[$category][$no_1] = "products3"; //html명	

		$page_2_name[$category][$no_1][] = "비워"; //메뉴명
		$page_2_html[$category][$no_1][] = "비워"; //html명

		$page_2_name[$category][$no_1][] = ""; //메뉴명
		$page_2_html[$category][$no_1][] = ""; //html명

		$page_2_name[$category][$no_1][] = ""; //메뉴명
		$page_2_html[$category][$no_1][] = ""; //html명

		$page_2_name[$category][$no_1][] = ""; //메뉴명
		$page_2_html[$category][$no_1][] = ""; //html명

?>