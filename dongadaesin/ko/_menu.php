<?php
$routeName = G5_LANG_URL."/company";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "병원소개",		
	url 		=> $routeName."/history.php",		  
	pid 		=> "",			
	makeDir		=> "company",
	subTitle	=> "company",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1010",	
	title 		=> "병원역사",		
	url 		=> $routeName."/history.php",		  
	pid 		=> "",		
	me_position	=> "1",	
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "101010",	title => "연혁", url => $routeName."/history.php", pid => "history", me_link => true, me_use => true);

$siteMenu[] = array(
	mCode 		=> "1020",	
	title 		=> "병원장 인사말",		
	url 		=> $routeName."/message.php",		  
	pid 		=> "",			
	me_position	=> "1",	
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "102010",	title => "인사말", 		url => $routeName."/message.php", pid => "message", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "102020",	title => "역대병원장", 	url => $routeName."/director.php", pid => "director", me_link => true, me_use => true);


$siteMenu[] = array(
	mCode 		=> "1030",	
	title 		=> "병원개요",		
	url 		=> $routeName."/overview.php",		  
	pid 		=> "overview",	
	me_position	=> "2",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1040",	
	title 		=> "조직도",		
	url 		=> $routeName."/organization.php",		  
	pid 		=> "",	
	me_position	=> "2",			
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "104010",	title => "조직도", 		url => $routeName."/organization.php", pid => "organization", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "104020",	title => "현황 및 통계", 	url => $routeName."/statistics.php", pid => "statistics", me_link => true, me_use => true);


$siteMenu[] = array(
	mCode 		=> "1050",	
	title 		=> "CI",		
	url 		=> $routeName."/ci.php",		  
	pid 		=> "",	
	me_position	=> "2",			
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "105010",	title => "CI소개", 		url => $routeName."/ci.php", pid => "ci", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "105020",	title => "CI다운로드", 	url => $routeName."/ci_dlc.php", pid => "ci_dlc", me_link => true, me_use => true);

$siteMenu[] = array(
	mCode 		=> "1060",	
	title 		=> "미션/비전",		
	url 		=> $routeName."/vision.php",		  
	pid 		=> "vision",
	me_position	=> "3",				
	me_link		=> true,	
	me_use 		=> true
);

$siteMenu[] = array(
	mCode 		=> "1070",	
	title 		=> "입원생활안내",		
	url 		=> $routeName."/guide.php",		  
	pid 		=> "",	
	me_position	=> "3",			
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "107010",	title => "입원준비", 		url => $routeName."/guide1.php", pid => "guide1", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "107020",	title => "입원수속", 		url => $routeName."/guide2.php", pid => "guide2", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "107030",	title => "입원생활", 		url => $routeName."/guide3.php", pid => "guide3", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "107040",	title => "면회안내", 		url => $routeName."/guide4.php", pid => "guide4", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "107050",	title => "퇴원준비", 		url => $routeName."/guide5.php", pid => "guide5", me_link => true, me_use => true);


$siteMenu[] = array(
	mCode 		=> "1080",	
	title 		=> "병원갤러리",		
	url 		=> $routeName."/gallery.php",		  
	pid 		=> "gallery",
	me_position	=> "4",				
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1090",	
	title 		=> "현황",		
	url 		=> $routeName."/status.php",		  
	pid 		=> "status",
	me_position	=> "4",				
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "10a0",	
	title 		=> "병원내부둘러보기",		
	url 		=> $routeName."/tour.php",		  
	pid 		=> "tour",	
	me_position	=> "4",			
	me_link		=> true,	
	me_use 		=> true
);


$routeName = G5_LANG_URL."/info";
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "이용안내",		
	url 		=> $routeName."/info.php",
	makeDir		=> "info",		  
	pid 		=> "info",	
	subTitle	=> "info",
	me_link		=> true,	
	me_use 		=> true
);


$routeName = G5_LANG_URL."/sponsor";
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "진료안내",		
	url 		=> $routeName."/sponsor.php",		  
	makeDir		=> "sponsor",		
	pid 		=> "sponsor",	
	subTitle	=> "sponsor",
	me_link		=> false,	
	me_use 		=> true
);


$routeName = G5_LANG_URL."/department";
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "부서안내",		
	url 		=> $routeName."/department.php",	
	makeDir		=> "department",		  
	pid 		=> "department",	
	subTitle	=> "department",
	me_link		=> true,	
	me_use 		=> true
);


$routeName = G5_LANG_URL."/program";
$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "프로그램소개",		
	url 		=> $routeName."/program.php",	
	makeDir		=> "program",		  
	pid 		=> "program",	
	subTitle	=> "program",
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/community";
$siteMenu[] = array(
	mCode 		=> "60",	
	title 		=> "커뮤니티",		
	url 		=> $routeName."/community.php",	
	makeDir		=> "community",		  
	pid 		=> "community",	
	subTitle	=> "community",
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