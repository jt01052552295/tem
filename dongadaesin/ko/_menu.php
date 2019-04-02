<?php
$routeName = G5_LANG_URL."/company";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "병원소개",		
	url 		=> $routeName."/overview.php",		  
	pid 		=> "",			
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1010",	
	title 		=> "병원개요",		
	url 		=> $routeName."/overview.php",		  
	pid 		=> "overview",	
	me_position	=> "1",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1020",	
	title 		=> "원장 인사말",		
	url 		=> $routeName."/message.php",		  
	pid 		=> "message",			
	me_position	=> "1",	
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1030",	
	title 		=> "연혁",		
	url 		=> $routeName."/history.php",		  
	pid 		=> "history",			
	me_position	=> "1",	
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1040",	
	title 		=> "미션/비전",		
	url 		=> $routeName."/vision.php",		  
	pid 		=> "vision",
	me_position	=> "2",				
	me_link		=> true,	
	me_use 		=> true
);

$siteMenu[] = array(
	mCode 		=> "1050",	
	title 		=> "설립취지 및 목적",		
	url 		=> $routeName."/purpose.php",		  
	pid 		=> "purpose",	
	me_position	=> "2",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1060",	
	title 		=> "조직도",		
	url 		=> $routeName."/organization.php",		  
	pid 		=> "organization",	
	me_position	=> "2",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1070",	
	title 		=> "HI소개",		
	url 		=> $routeName."/ci.php",		  
	pid 		=> "ci",	
	me_position	=> "3",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1080",	
	title 		=> "의료진소개",		
	url 		=> $routeName."/doctor.php",		  
	pid 		=> "doctor",	
	me_position	=> "3",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1090",	
	title 		=> "병원둘러보기",		
	url 		=> $routeName."/tour.php",		  
	pid 		=> "tour",	
	me_position	=> "4",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "10a0",	
	title 		=> "찾아오시는길",		
	url 		=> $routeName."/location.php",		  
	pid 		=> "location",	
	me_position	=> "4",			
	me_link		=> true,	
	me_use 		=> true
);
//$siteMenu[] = array(
	//mCode 		=> "10b0",	
	//title 		=> "원내배치도",		
	//url 		=> $routeName."/plan.php",		  
	//pid 		=> "plan",	
	//me_position	=> "4",			
	//me_link		=> true,	
	//me_use 		=> true
//);



$routeName = G5_LANG_URL."/info";
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "이용안내",		
	url 		=> $routeName."/out.php",
	makeDir		=> "info",		  
	pid 		=> "",	
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2010",	
	title 		=> "외래진료안내",		
	url 		=> $routeName."/out.php",
	pid 		=> "out",	
	me_position	=> "1",	
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2020",	
	title 		=> "입퇴원안내",		
	url 		=> $routeName."/inout.php",
	pid 		=> "inout",	
	me_position	=> "1",	
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2030",	
	title 		=> "비급여안내",		
	url 		=> $routeName."/non.php",
	pid 		=> "non",	
	me_position	=> "1",	
	me_link		=> true,	
	me_use 		=> true
);




$routeName = G5_LANG_URL."/center";
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "진료안내",		
	url 		=> $routeName."/rehabilitation.php",		  
	makeDir		=> "center",		
	pid 		=> "",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3010",	
	title 		=> "재활의학과",		
	url 		=> $routeName."/rehabilitation.php",
	pid 		=> "rehabilitation",	
	me_position	=> "1",	
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3020",	
	title 		=> "신경과",		
	url 		=> $routeName."/neuro.php",
	pid 		=> "neuro",	
	me_position	=> "1",	
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3030",	
	title 		=> "한방재활의학과",		
	url 		=> $routeName."/medicine.php",
	pid 		=> "medicine",	
	me_position	=> "1",	
	me_link		=> true,	
	me_use 		=> true
);


$routeName = G5_LANG_URL."/department";
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "재활치료안내",		
	url 		=> $routeName."/department1.php",	
	makeDir		=> "department",		  
	pid 		=> "",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4010",	
	title 		=> "신경계운동치료",		
	url 		=> $routeName."/department1.php",
	pid 		=> "department1",	
	me_position	=> "1",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4020",	
	title 		=> "열·전기치료",		
	url 		=> $routeName."/department2.php",
	pid 		=> "department2",
	me_position	=> "1",				
	me_link		=> true,	
	me_use 		=> true
);

$siteMenu[] = array(
	mCode 		=> "4030",	
	title 		=> "체외충격파치료(ESWT)",		
	url 		=> $routeName."/department3.php",
	pid 		=> "department3",	
	me_position	=> "1",			
	me_link		=> true,	
	me_use 		=> true
);

$siteMenu[] = array(
	mCode 		=> "4040",	
	title 		=> "도수치료",		
	url 		=> $routeName."/department4.php",
	pid 		=> "department4",
	me_position	=> "1",				
	me_link		=> true,	
	me_use 		=> true
);

$siteMenu[] = array(
	mCode 		=> "4050",	
	title 		=> "작업치료",		
	url 		=> $routeName."/department5.php",
	pid 		=> "department5",	
	me_position	=> "2",			
	me_link		=> true,	
	me_use 		=> true
);

$siteMenu[] = array(
	mCode 		=> "4060",	
	title 		=> "연하치료",		
	url 		=> $routeName."/department6.php",
	pid 		=> "department6",	
	me_position	=> "2",	
	me_link		=> true,	
	me_use 		=> true
);

$siteMenu[] = array(
	mCode 		=> "4070",	
	title 		=> "인지치료",		
	url 		=> $routeName."/department7.php",
	pid 		=> "department7",	
	me_position	=> "2",	
	me_link		=> true,	
	me_use 		=> true
);

$siteMenu[] = array(
	mCode 		=> "4080",	
	title 		=> "언어치료",		
	url 		=> $routeName."/department8.php",
	pid 		=> "department8",
	me_position	=> "2",		
	me_link		=> true,	
	me_use 		=> true
);



$routeName = G5_LANG_URL."/program";
$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "병원소식",		
	url 		=> G5_BBS_URL."/board.php?bo_table=notice", 
	pid 		=> "",	
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "5010",	
	title 		=> "공지사항",		
	url 		=> G5_BBS_URL."/board.php?bo_table=notice",
	pid 		=> "notice",	
	me_position	=> "1",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "5020",	
	title 		=> "언론보도",		
	url 		=> G5_BBS_URL."/board.php?bo_table=news",
	pid 		=> "news",	
	me_position	=> "1",			
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

$routeName = G5_LANG_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "8020",	
	title 		=> "개인정보처리방침",		
	url 		=> $routeName."/ft02.php",		  
	pid 		=> "ft02",	
	subTitle	=> "개인정보처리방침", 
	me_link		=> false,	
	me_use 		=> false,
	me_etc		=> true
);
$routeName = G5_LANG_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "8030",	
	title 		=> "이메일주소무단수집거부",		
	url 		=> $routeName."/ft03.php",		  
	pid 		=> "ft03",	
	subTitle	=> "이메일주소무단수집거부", 
	me_link		=> false,	
	me_use 		=> false,
	me_etc		=> true
);

$routeName = G5_LANG_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "8040",	
	title 		=> "환자의 권리와 의무",		
	url 		=> $routeName."/ft04.php",		  
	pid 		=> "ft04",	
	subTitle	=> "환자의 권리와 의무", 
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