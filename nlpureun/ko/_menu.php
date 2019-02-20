<?php
$routeName = G5_LANG_URL."/company";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "재단소개",		
	url 		=> $routeName."/company.php",		  
	pid 		=> "",			
	subTitle	=> "company",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1010",	
	title 		=> "대표 인사말",		
	url 		=> $routeName."/company.php",		  
	pid 		=> "company",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1020",	
	title 		=> "설립목적 및 이념",		
	url 		=> $routeName."/vision.php",		  
	pid 		=> "vision",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1030",	
	title 		=> "법인현황 및 연혁",		
	url 		=> $routeName."/history.php",		  
	pid 		=> "history",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1040",	
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


$routeName = G5_LANG_URL."/business";
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "사업소개",		
	url 		=> $routeName."/business1.php",		  
	pid 		=> "",	
	subTitle	=> "business",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2010",	
	title 		=> "사업소개1",		
	url 		=> $routeName."/business1.php",		  
	pid 		=> "business1",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2020",	
	title 		=> "사업소개2",		
	url 		=> $routeName."/business2.php",		  
	pid 		=> "business2",			
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/sponsor";
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "후원안내",		
	url 		=> $routeName."/sponsor1.php",		  
	pid 		=> "",	
	subTitle	=> "sponsor",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3010",	
	title 		=> "후원안내1",		
	url 		=> $routeName."/sponsor1.php",		  
	pid 		=> "sponsor1",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3020",	
	title 		=> "후원안내2",		
	url 		=> $routeName."/sponsor2.php",		  
	pid 		=> "sponsor2",			
	me_link		=> true,	
	me_use 		=> true
);



$routeName = G5_LANG_URL."/volunteer";
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "자원봉사",		
	url 		=> $routeName."/volunteer1.php",		  
	pid 		=> "",	
	subTitle	=> "volunteer",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4010",	
	title 		=> "자원봉사1",		
	url 		=> $routeName."/volunteer1.php",		 	  
	pid 		=> "volunteer1",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4020",	
	title 		=> "자원봉사2",		
	url 		=> $routeName."/volunteer2.php",		 
	pid 		=> "volunteer2",			
	me_link		=> true,	
	me_use 		=> true
);


$routeName = G5_LANG_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "고객마당",		
	url 		=> $routeName."/customer1.php",		  
	pid 		=> "",	
	subTitle	=> "customer",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "5010",	
	title 		=> "고객마당1",		
	url 		=> $routeName."/customer1.php",		 	  
	pid 		=> "customer1",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "5020",	
	title 		=> "고객마당2",		
	url 		=> $routeName."/customer2.php",		 
	pid 		=> "customer2",			
	me_link		=> true,	
	me_use 		=> true
);




$routeName = G5_LANG_URL."/mail";
$siteMenu[] = array(
	mCode 		=> "70",	
	title 		=> "고객문의",		
	url 		=> $routeName."/mail.php",		  
	pid 		=> "mail",	
	subTitle	=> "고객문의", 
	me_link		=> false,	
	me_use 		=> false,
	me_etc		=> true
);

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