<?php
$routeName = KI_URL."/homepage";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "서비스",		
	url 		=> "#",		  
	pid 		=> "service",			
	me_link		=> true,	
	me_use 		=> true
);
// $siteMenu[] = array(
// 	mCode 		=> "1010",	
// 	title 		=> "홈페이지제작",		
// 	url 		=> $routeName."/homepage.php",		  
// 	pid 		=> "homepage",			
// 	me_link		=> true,	
// 	me_use 		=> true
// );
// $siteMenu[] = array(
// 	mCode 		=> "1020",	
// 	title 		=> "기본형 홈페이지",		
// 	url 		=> $routeName."/normal.php",		  
// 	pid 		=> "normal",			
// 	me_link		=> true,	
// 	me_use 		=> true
// );
// $siteMenu[] = array(
// 	mCode 		=> "1030",	
// 	title 		=> "비지니스형 홈페이지",		
// 	url 		=> $routeName."/business.php",		  
// 	pid 		=> "business",			
// 	me_link		=> true,	
// 	me_use 		=> true
// );
// $siteMenu[] = array(
// 	mCode 		=> "1040",	
// 	title 		=> "고급형 홈페이지",		
// 	url 		=> $routeName."/high.php",		  
// 	pid 		=> "high",			
// 	me_link		=> true,	
// 	me_use 		=> true
// );
// $siteMenu[] = array(
// 	mCode 		=> "1050",	
// 	title 		=> "쇼핑몰",		
// 	url 		=> $routeName."/mall.php",		  
// 	pid 		=> "mall",			
// 	me_link		=> true,	
// 	me_use 		=> true
// );
// $siteMenu[] = array(
// 	mCode 		=> "1060",	
// 	title 		=> "모바일 홈페이지",		
// 	url 		=> $routeName."/mobile.php",		  
// 	pid 		=> "mobile",			
// 	me_link		=> true,	
// 	me_use 		=> true
// );

$routeName = KI_URL."/management";
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "주요업무",		
	url 		=> "#",		  
	pid 		=> "management",			
	me_link		=> false,	
	me_use 		=> true
);


$routeName = KI_URL."/portfolio";
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "포트폴리오",		
	url 		=> "#",		  
	pid 		=> "portfolio",			
	me_link		=> true,	
	me_use 		=> true
);

$routeName = KI_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "고객센터",		
	url 		=> "#",		  
	pid 		=> "customer",			
	me_link		=> true,	
	me_use 		=> true,
	me_mobile_toggle=>'1'
);


$routeName = KI_URL."/message";
$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "견적문의",		
	url 		=> "#",			  
	pid 		=> "message",			
	me_link		=> true,	
	me_use 		=> true
);


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


$navLinkArr = array();
$k1 = 0;
for($i=0; $i<count($siteMenu); $i++): 
  if($siteMenu[$i]['me_link'] == true) { $navLinkArr[$k1] = $siteMenu[$i]; $k1++; } //  me_link : 실제 접속되는 메뉴 ( 눌렀을때 링크가 활성화 되는  )
endfor;


$currentMenuArr = array();
$currentPrevArr = array();
$currentNextArr = array();
$breadcrumArr = array();

$_menu_current = basename($_SERVER['PHP_SELF']);
$_menu_current_arr = explode(".", $_menu_current );
$_menu_current_name = $_menu_current_arr[0];
$full_length_url = $_SERVER['PHP_SELF'];

foreach ($siteMenu as $key => $val) {
   if ($val['pid'] === $_menu_current_name ) {
      // 현재페이지 
      $currentMenuArr = $val;

      // breadcurm 생성
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