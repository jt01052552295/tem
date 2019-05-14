<?php
$routeName = G5_LANG_URL."/company";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "회사소개",		
	url 		=> $routeName."/company.php",		  
	pid 		=> "",			
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1010",	
	title 		=> "회사소개",		
	url 		=> $routeName."/company.php",		  
	pid 		=> "company",	
	me_position	=> "1",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1020",	
	title 		=> "찾아오시는길",		
	url 		=> $routeName."/location.php",		  
	pid 		=> "location",	
	me_position	=> "4",			
	me_link		=> true,	
	me_use 		=> true
);



$routeName = G5_LANG_URL."/univ";
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "대학/대학원",		
	url 		=> $routeName."/univ.php",
	makeDir		=> "univ",		  
	pid 		=> "univ",	
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/school";
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "전문학교",		
	url 		=> $routeName."/school.php",		  
	makeDir		=> "school",		
	pid 		=> "school",
	me_link		=> true,	
	me_use 		=> true
);


$routeName = G5_LANG_URL."/language";
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "어학연수",		
	url 		=> $routeName."/language.php",	
	makeDir		=> "language",		  
	pid 		=> "language",
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/program";
$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "단기프로그램",		
	url 		=> $routeName."/program.php",	
	makeDir		=> "program",
	pid 		=> "program",	
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/abroad";
$siteMenu[] = array(
	mCode 		=> "60",	
	title 		=> "유학생활",		
	url 		=> $routeName."/abroad.php",	
	makeDir		=> "abroad",
	pid 		=> "abroad",	
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/culture";
$siteMenu[] = array(
	mCode 		=> "70",	
	title 		=> "일본문화",		
	url 		=> $routeName."/culture.php",	
	makeDir		=> "culture",
	pid 		=> "culture",	
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/job";
$siteMenu[] = array(
	mCode 		=> "80",	
	title 		=> "취업정보",		
	url 		=> $routeName."/job.php",	
	makeDir		=> "job",
	pid 		=> "job",	
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_BBS_URL;
$siteMenu[] = array(
	mCode 		=> "90",	
	title 		=> "Q&A",		
	url 		=> $routeName."/board.php?bo_table=qa",	
	pid 		=> "qa",	
	me_link		=> true,	
	me_use 		=> true
);




$routeName = G5_LANG_URL."/mail";
$siteMenu[] = array(
	mCode 		=> "a0",	
	title 		=> "고객문의",		
	url 		=> $routeName."/mail.php",		  
	pid 		=> "mail",	
	me_link		=> false,	
	me_use 		=> false,
	me_etc		=> true
);

$routeName = G5_LANG_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "b0",	
	title 		=> "사이트맵",		
	url 		=> $routeName."/sitemap.php",		  
	pid 		=> "sitemap",	 
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

foreach ($siteMenu as $key => $val) {
   if ($val['pid'] === $_menu_current_name ) {
      // 현재페이지 
      $currentMenuArr = $val;

      // breadcurm 생성
	  if($currentMenuArr['me_etc'] === true) { // 네비게이션메뉴에 포함되지 않는 메뉴들


		$breadcrumArr[] = $currentMenuArr;


	  } else {
		  for($i=0; $i<count($nav1st); $i++):
			if(substr($currentMenuArr['mCode'],0,2) == $nav1st[$i]['mCode']){
			  $breadcrumArr[] = $nav1st[$i];
			}
		  endfor;
		  for($i=0; $i<count($nav2nd); $i++):
			if(substr($currentMenuArr['mCode'],0,4) == $nav2nd[$i]['mCode']){
			  $breadcrumArr[] = $nav2nd[$i];
			}
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


?>