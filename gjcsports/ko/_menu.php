<?php
$routeName = G5_LANG_URL."/company";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "체육회소개",		
	url 		=> $routeName."/message.php",
	makeDir		=> "",		  
	pid 		=> "",			
	me_link		=> false,	
	me_use 		=> true
);

$siteMenu[] = array(mCode => "1010", title => "회장인사말", 		url => $routeName."/message.php", pid => "message", me_link => true, me_use => true );
$siteMenu[] = array(mCode => "1020", title => "설립목적 및 연혁", 	url => $routeName."/history.php", pid => "history", me_link => true, me_use => true );
$siteMenu[] = array(mCode => "1030", title => "조직 및 기구", 		url => $routeName."/organization.php", pid => "organization", me_link => true, me_use => true );
$siteMenu[] = array(mCode => "1040", title => "임원명단", 			url => $routeName."/elist.php", pid => "elist", me_link => true, me_use => true );
$siteMenu[] = array(mCode => "1050", title => "고객 서비스헌장", 	url => $routeName."/cservice.php", pid => "cservice", me_link => true, me_use => true );
$siteMenu[] = array(mCode => "1060", title => "오시는 길", 			url => $routeName."/location.php", pid => "location", me_link => true, me_use => true );
$siteMenu[] = array(mCode => "1070", title => "사무국 직원소개", 	url => $routeName."/employee.php", pid => "employee", me_link => true, me_use => true );
$siteMenu[] = array(mCode => "1080", title => "본회규정", 			url => $routeName."/rule.php", pid => "rule", me_link => true, me_use => true );



$routeName = G5_LANG_URL."/group";
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "회원종목단체",		
	url 		=> $routeName."/group.php",
	makeDir		=> "group",		  
	pid 		=> "group",	
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/program";
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "체육프로그램 ",		
	url 		=> $routeName."/program.php",		  
	makeDir		=> "program",		
	pid 		=> "program",
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/event";
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "대회/행사",		
	url 		=> $routeName."/event.php",		  
	makeDir		=> "event",		
	pid 		=> "event",
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/notice";
$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "알림마당",		
	url 		=> $routeName."/notice.php",		  
	makeDir		=> "notice",		
	pid 		=> "notice",
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/online";
$siteMenu[] = array(
	mCode 		=> "60",	
	title 		=> "온라인접수",		
	url 		=> $routeName."/online.php",		  
	makeDir		=> "online",		
	pid 		=> "online",
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
	me_link		=> true,	
	me_use 		=> true
);

// $routeName = G5_LANG_URL."/customer";
// $siteMenu[] = array(
// 	mCode 		=> "80",	
// 	title 		=> "사이트맵",		
// 	url 		=> $routeName."/sitemap.php",		  
// 	pid 		=> "sitemap",	
// 	subTitle	=> "사이트맵", 
// 	me_link		=> false,	
// 	me_use 		=> false,
// 	me_etc		=> true
// );


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
   if ($val['pid'] === $_menu_current_name && $val['me_repeat'] !== true ) {
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


?>