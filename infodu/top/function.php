<?
// 우클릭,드레그 금지
	if (!$HTTP_COOKIE_VARS[dyfhzkr]){
		$noright=" oncontextmenu=\"return false\" ondragstart=\"return false\" onselectstart=\"return false\"";
		//$noright="";
		}

// 현재페이지 URL
	$bbs_page = $_SERVER['PHP_SELF'];

// 현재페이지 code
	$bbs_page_array=explode ('/',$bbs_page); // /를 기준으로 문자열 나누기
	$codesize=sizeof($bbs_page_array); // 문자열배열 총갯수
	$codename=str_replace(".html","",$bbs_page_array[$codesize-1]);

	// code_high 지정
	$code_high=$bbs_page_array[$codesize-2];
	// 코드high_no설정
	for ($i=1 ; $i <= $category_counter ; $i++)	{
		if ($code_high==$order_category[$i]){
			$code_high_no= $i;	
			}
		}

	// code_sub 설정
	for ($i=1 ; $i <= $page_counter_1[$code_high] ; $i++){
		// code_sub_1 설정
		if ($codename==$page_1_html[$code_high][$i]){
			$code_sub_1= $codename;
			$code_sub_1_no= $i;
			}
		// code_sub_2 설정
		for ($k=1 ; $k <= $page_counter_2[$code_high][$i] ; $k++){
			if ($codename==$page_2_html[$code_high][$i][$k]){
				$code_sub_1= $page_1_html[$code_high][$i];// code_sub_1 설정
				$code_sub_1_no= $i;// code_sub_1_no 설정
				$code_sub_2= $codename;
				$code_sub_2_no= $k;
				}
			}
		}
// 상대경로설정
	if ($codename!=index)	{
		$inpo="../";
		}
?>