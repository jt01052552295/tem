 <?php
$routeName = G5_LANG_URL."/company";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "회사소개",		
	url 		=> $routeName."/company.php",		  
	pid 		=> "",			
	subTitle	=> "company",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1010",	
	title 		=> "회사개요",		
	url 		=> $routeName."/company.php",		  
	pid 		=> "company",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1020",	
	title 		=> "기업이념",		
	url 		=> $routeName."/philosophy.php",		  
	pid 		=> "philosophy",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1040",	
	title 		=> "연혁",		
	url 		=> $routeName."/history.php",		  
	pid 		=> "history",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1060",	
	title 		=> "글로벌파트너",		
	url 		=> $routeName."/partner.php",		  
	pid 		=> "partner",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1030",	
	title 		=> "조직도",		
	url 		=> $routeName."/organization.php",		  
	pid 		=> "organization",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1050",	
	title 		=> "오시는길",		
	url 		=> $routeName."/location.php",		  
	pid 		=> "location",			
	me_link		=> true,	
	me_use 		=> true
);



$routeName = G5_LANG_URL."/product";
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "제품소개",		
	url 		=> $routeName."/morooka.php",		  
	pid 		=> "",	
	subTitle	=> "product",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2010",	
	title 		=> "모로오까",		
	url 		=> $routeName."/morooka.php",		  
	pid 		=> "morooka",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2020",	
	title 		=> "나까야마",		
	url 		=> $routeName."/nakayama.php",		  
	pid 		=> "nakayama",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2030",	
	title 		=> "우에노텍스",		
	url 		=> $routeName."/uenotex.php",		  
	pid 		=> "uenotex",			
	me_link		=> true,	
	me_use 		=> true
);


$routeName = G5_LANG_URL."/used";
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "인증중고장비판매",		
	url 		=> $routeName."/used.php",		  
	pid 		=> "",	
	subTitle	=> "인증중고장비판매",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3010",	
	title 		=> "인증중고장비판매",		
	url 		=> $routeName."/used.php",		  
	pid 		=> "used",
	me_link		=> true,	
	me_use 		=> true
);


$routeName = G5_LANG_URL."/data";
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "자료실",		
	url 		=> $routeName."/gallery.php",		  
	pid 		=> "",	
	subTitle	=> "사진자료실",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4010",	
	title 		=> "사진자료실",		
	url 		=> $routeName."/gallery.php",		  
	pid 		=> "gallery",
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4020",	
	title 		=> "동영상자료실",		
	url 		=> $routeName."/video.php",		  
	pid 		=> "video",
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4030",	
	title 		=> "팜플렛",		
	url 		=> $routeName."/catal.php",		  
	pid 		=> "catal",
	me_link		=> true,	
	me_use 		=> true
);



$routeName = G5_LANG_URL."/mail";
$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "고객센터",		
	url 		=> $routeName."/mail.php",		  
	pid 		=> "",			
	subTitle	=> "고객센터",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "5010",	
	title 		=> "고객문의",		
	url 		=> $routeName."/mail.php",		  
	pid 		=> "mail",			
	me_link		=> true,	
	me_use 		=> true
);



// $routeName = G5_LANG_URL."/mail";
// $siteMenu[] = array(
// 	mCode 		=> "70",	
// 	title 		=> "고객문의",		
// 	url 		=> $routeName."/mail.php",		  
// 	pid 		=> "mail",	
// 	subTitle	=> "고객문의", 
// 	me_link		=> false,	
// 	me_use 		=> false,
// 	me_etc		=> true
// );

$routeName = G5_LANG_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "80",	
	title 		=> "사이트맵",		
	url 		=> $routeName."/sitemap.php",		  
	pid 		=> "sitemap",	
	subTitle	=> "사이트맵", 
	me_link		=> false,	
	me_use 		=> false,
	me_etc		=> true
);




// 네비게이션 생성
$nav1st = array();
$nav2nd = array();
$nav3rd = array();
$k1 = 0;
$k2 = 0;
$k3 = 0;
for($i=0; $i<count($siteMenu); $i++):
	if(strlen($siteMenu[$i]['mCode']) == 2 && $siteMenu[$i]['me_use'] == true) { $nav1st[$k1] = $siteMenu[$i]; $k1++; }
	if(strlen($siteMenu[$i]['mCode']) == 4 && $siteMenu[$i]['me_use'] == true) { $nav2nd[$k2] = $siteMenu[$i]; $k2++; }
	if(strlen($siteMenu[$i]['mCode']) == 6 && $siteMenu[$i]['me_use'] == true) { $nav3rd[$k3] = $siteMenu[$i]; $k3++; }
endfor;

 //  me_link : 실제 접속되는 메뉴 ( 눌렀을때 링크가 활성화 되는  )
$navLinkArr = array();
$k1 = 0;
for($i=0; $i<count($siteMenu); $i++): 
  if($siteMenu[$i]['me_link'] == true) { $navLinkArr[$k1] = $siteMenu[$i]; $k1++; }
endfor;


$currentMenuArr = array();
$currentPrevArr = array();
$currentNextArr = array();
$breadcrumArr = array();

if($bo_table){
	$_menu_current_name = $bo_table;
} else if($ca_id){

} else {
	$_menu_current = basename($_SERVER['PHP_SELF']);
	$_menu_current_arr = explode(".", $_menu_current );
	$_menu_current_name = $_menu_current_arr[0];
}
    



$full_length_url = $_SERVER['PHP_SELF'];



//if($lang=='kor'):

	//echo "<!-- pre siteMenu>";
	//print_r($siteMenu);
	//echo "</pre -->";

//endif;


foreach ($siteMenu as $key => $val) {
   if ($val['pid'] === $_menu_current_name ) {
      // 현재페이지 
      $currentMenuArr = $val;

      // breadcurm 생성
	  if($currentMenuArr['me_etc'] === true) { // 네비게이션메뉴에 포함되지 않는 메뉴들


		$breadcrumArr[] = $currentMenuArr;


	  } else {
		  $level = strlen($currentMenuArr['mCode']) / 2;	
	  	  //echo $level; // 1이면 1차, 2이면 2차, 3이면 3차메뉴

	  	  for($i=1; $i<=$level; $i++):
	  	  	$levelChar = substr($currentMenuArr['mCode'],0,$i*2);

	  	  	  for($k=0; $k < count($siteMenu); $k++):
				if($levelChar == $siteMenu[$k]['mCode']){
				  $breadcrumArr[] = $siteMenu[$k];
				}
			  endfor;
	  	  endfor;
	  }
   }
}

// 좌우 이동위한 네비게이션 링크 
foreach ($navLinkArr as $key => $val) {
  if ($val['pid'] === $_menu_current_name ) {
       $prev_index = $key-1;
       $next_index = $key+1;
       if($prev_index>0){
          $currentPrevArr = $navLinkArr[$prev_index];
       }
       if($next_index < count($navLinkArr)){
          $currentNextArr = $navLinkArr[$next_index];
       }
  }
}

//echo "<!-- pre currentMenuArr>";
//print_r($currentMenuArr);
//echo "</pre -->";

//echo "<!-- pre breadcrumArr>";
//print_r($breadcrumArr);
//echo "</pre -->";
?>