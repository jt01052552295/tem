<?
//변수 초기화
$code_high_no = "";

// 현재페이지 URL
$bbs_page = $_SERVER['PHP_SELF'];

// 현재페이지 code
$bbs_page_array=explode ('/',$bbs_page); // /를 기준으로 문자열 나누기
$codesize=count($bbs_page_array); // 문자열배열 총갯수
if($codename == "")$codename=str_replace(".html","",$bbs_page_array[$codesize-1]);
// code_high 지정
if ($code_high == "")	{
	$code_high=$bbs_page_array[$codesize-2];
	}
// 코드high_no설정
for ($i=1 ; $i <= count($order_category) ; $i++)	{
	if ($code_high==$order_category[$i]){
		$code_high_no= $i;	
		}
	}

// code_sub 설정
for ($i=1 ; $i < count($page_1_name[$code_high]) ; $i++){
	// code_sub_1 설정
	if ($codename==$page_1_html[$code_high][$i]){
		$code_sub_1= $codename;
		$code_sub_1_no= $i;
		}
	// code_sub_2 설정
	for ($k=1 ; $k <= count($page_2_name[$code_high][$i]); $k++){
		if ($codename==$page_2_html[$code_high][$i][$k]){
			$code_sub_1= $page_1_html[$code_high][$i];// code_sub_1 설정
			$code_sub_1_no= $i;// code_sub_1_no 설정
			$code_sub_2= $codename;
			$code_sub_2_no= $k;
			}
		// code_sub_3 설정
		for ($j=1 ; $j <= count($page_3_name[$code_high][$i][$k]); $j++){
			if ($codename==$page_3_html[$code_high][$i][$k][$j]){
				$code_sub_1= $page_1_html[$code_high][$i];// code_sub_1 설정
				$code_sub_1_no= $i;// code_sub_1_no 설정
				$code_sub_2= $page_2_html[$code_high][$i][$k];
				$code_sub_2_no= $k;
				$code_sub_3= $codename;
				$code_sub_3_no= $j;
			}
		}
	}		
}
// 상대경로설정
if ($codename!='index')	{
	$inpo="../";
}

//smart log mobile redirect
$arr_browser = array ("iPod","iPhone","iPad","Android","BlackBerry","SymbianOS","SCH-M\d+","opera mobi","opera mini","sonyericsson","windows ce","nokia","webOS","PalmOS");
for($indexi = 0 ; $indexi < count($arr_browser) ; $indexi++) {
  if(strpos($_SERVER['HTTP_USER_AGENT'],$arr_browser[$indexi]) == true){
    $site['device']="mobile";
  }
}
?>