<?php
$routeName = KI_URL."/company";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "회사소개",		
	url 		=> $routeName."/company.php",		  
	pid 		=> "company",			
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
	title 		=> "CEO인사말",		
	url 		=> $routeName."/ceo.php",		  
	pid 		=> "ceo",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1030",	
	title 		=> "연혁",		
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


$routeName = KI_URL."/product";
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "제품소개",		
	url 		=> $routeName."/product.php",		  
	pid 		=> "product",			
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2010",	
	title 		=> "제품소개",		
	url 		=> $routeName."/product.php",		  
	pid 		=> "product",			
	me_link		=> true,	
	me_use 		=> true
);

$routeName = KI_URL."/tech";
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "기술현황",		
	url 		=> $routeName."/tech.php",		  
	pid 		=> "tech",			
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3010",	
	title 		=> "기술현황",		
	url 		=> $routeName."/tech.php",		  
	pid 		=> "tech",			
	me_link		=> true,	
	me_use 		=> true
);

$routeName = KI_URL."/production";
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "생산현황",		
	url 		=> $routeName."/production1.php",		  
	pid 		=> "production",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4010",	
	title 		=> "생산현황1",		
	url 		=> $routeName."/production1.php",		  
	pid 		=> "production1",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4020",	
	title 		=> "생산현황2",		
	url 		=> $routeName."/production2.php",		  
	pid 		=> "production2",			
	me_link		=> true,	
	me_use 		=> true
);


$routeName = KI_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "고객센터",		
	url 		=> $routeName."/customer.php",		  
	pid 		=> "customer",			
	me_link		=> false,	
	me_use 		=> true,
	me_mobile_toggle=>'0'
);
$siteMenu[] = array(
	mCode 		=> "5010",	
	title 		=> "고객문의",		
	url 		=> $routeName."/customer.php",		  
	pid 		=> "customer",			
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