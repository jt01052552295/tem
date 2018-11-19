<?php
$routeName = G5_LANG_URL."/company";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "브랜드소개",		
	url 		=> $routeName."/brand.php",		  
	pid 		=> "brand",			
	me_link		=> false,	
	me_use 		=> true,
	me_mobile_toggle=>'1'
);
$routeName = G5_LANG_URL."/menu";
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "메뉴소개",		
	url 		=> $routeName."/menu.php",		  
	pid 		=> "menu",			
	me_link		=> false,	
	me_use 		=> true,
	me_mobile_toggle=>'1'
);
$routeName = G5_LANG_URL."/store";
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "매장안내",		
	url 		=> $routeName."/store.php",		  
	pid 		=> "store",			
	me_link		=> false,	
	me_use 		=> true,
	me_mobile_toggle=>'1'
);
$routeName = G5_LANG_URL."/franchise";
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "창업안내",		
	url 		=> $routeName."/franchise.php",		  
	pid 		=> "franchise",			
	me_link		=> true,	
	me_use 		=> true,
	me_mobile_toggle=>'1'
);
$routeName = G5_LANG_URL."/notice";
$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "공지및뉴스",		
	url 		=> $routeName."/notice.php",		  
	pid 		=> "notice",			
	me_link		=> false,	
	me_use 		=> true,
	me_mobile_toggle=>'1'
);
$routeName = G5_LANG_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "60",	
	title 		=> "고객센터",		
	url 		=> $routeName."/cs.php",		  
	pid 		=> "cs",			
	me_link		=> false,	
	me_use 		=> true,
	me_mobile_toggle=>'1'
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