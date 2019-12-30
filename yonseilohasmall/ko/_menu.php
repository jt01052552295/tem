<?php
$routeName = G5_LANG_URL."/company";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "교육원소개",		
	url 		=> $routeName."/company.php",		  
	pid 		=> "",	
	makeDir		=> "",		
	subTitle	=> "교육원소개",
	subDesc		=> "즐거운 배움, 포에이엠교육원 교육지원 안내입니다.",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1010",	
	title 		=> "포에이엠교육원",		
	titleDesc	=> "포에이엠 교육원 소개입니다.",	
	url 		=> $routeName."/company.php",		  
	pid 		=> "company",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1020",	
	title 		=> "찾아오시는길",	
	titleDesc	=> "포에이엠 교육원 찾아오시는길 입니다.",	
	url 		=> $routeName."/location.php",		  
	pid 		=> "location",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1030",	
	title 		=> "강사소개",		
	titleDesc	=> "포에이엠 교육원의 전문강사 프로필 입니다.",
	url 		=> $routeName."/employee.php",		  
	pid 		=> "employee",			
	me_link		=> true,	
	me_use 		=> true
);



$routeName = G5_LANG_URL."/edu";
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "의무교육안내",		
	url 		=> $routeName."/edu1.php",		  
	pid 		=> "",	
	makeDir		=> "edu",	
	subTitle	=> "법정의무교육안내",
	subDesc		=> "즐거운 배움, 포에이엠교육원 법정의무교육 안내입니다.",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2010",	
	title 		=> "개인정보보호 교육",		
	titleDesc	=> "한눈에 보는 강의내용",	
	url 		=> $routeName."/edu1.php",		  
	pid 		=> "edu1",	
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2020",	
	title 		=> "직장내 괴롭힘예방 교육",	
	titleDesc	=> "한눈에 보는 강의내용",		
	url 		=> $routeName."/edu2.php",		  
	pid 		=> "edu2",	
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2030",	
	title 		=> "성희롱 예방교육",		
	titleDesc	=> "한눈에 보는 강의내용",	
	url 		=> $routeName."/edu3.php",		  
	pid 		=> "edu3",	
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2040",	
	title 		=> "산업안전보건교육",		
	titleDesc	=> "한눈에 보는 강의내용",	
	url 		=> $routeName."/edu4.php",		  
	pid 		=> "edu4",	
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2050",	
	title 		=> "장애인식개선교육",	
	titleDesc	=> "한눈에 보는 강의내용",		
	url 		=> $routeName."/edu5.php",		  
	pid 		=> "edu5",	
	me_link		=> true,	
	me_use 		=> true
);


$routeName = G5_LANG_URL."/job";
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "직무교육안내",		
	url 		=> $routeName."/job.php",		  
	pid 		=> "",	
	makeDir		=> "job",	
	subTitle	=> "법정의무교육안내",
	subDesc		=> "즐거운 배움, 포에이엠교육원 법정의무교육 안내입니다.",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3010",	
	title 		=> "경영/회계/인사",		
	titleDesc	=> "포에이엠 교육원의 직무교육안내 입니다.",	
	url 		=> $routeName."/job.php",		  
	pid 		=> "job",	
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3020",	
	title 		=> "영업/마케팅",		
	titleDesc	=> "포에이엠 교육원의 직무교육안내 입니다.",	
	url 		=> $routeName."/job2.php",		  
	pid 		=> "job2",	
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_BBS_URL;
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "교육지원센터",		
	url 		=> $routeName."/board.php?bo_table=notice",		  
	pid 		=> "",	
	makeDir		=> "",	
	subTitle	=> "교육지원센터",
	subDesc		=> "즐거운 배움, 포에이엠교육원 교육지원 안내입니다.",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4010",	
	title 		=> "공지사항",		
	url 		=> $routeName."/board.php?bo_table=notice",		 
	titleDesc	=> "포에이엠 교육원의 주요공지 게시판 입니다.",		
	pid 		=> "notice",	
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4020",	
	title 		=> "자주묻는질문",		
	url 		=> $routeName."/board.php?bo_table=faq",
	titleDesc	=> "고객님께서 자주묻는 질문 모음 입니다.",				 
	pid 		=> "faq",	
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4030",	
	title 		=> "1:1문의",		
	url 		=> $routeName."/board.php?bo_table=qa",	
	titleDesc	=> "교육에 관한문의를 간편하게 하실 수 있습니다.",		 
	pid 		=> "qa",	
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4040",	
	title 		=> "교육신청안내",		
	url 		=> $routeName."/board.php?bo_table=req",	
	titleDesc	=> "",			 
	pid 		=> "req",	
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/mail";
$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "고객센터",		
	url 		=> $routeName."/mail.php",		  
	pid 		=> "mail",		
	makeDir		=> "",	
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "80",	
	title 		=> "사이트맵",		
	url 		=> $routeName."/sitemap.php",		  
	pid 		=> "sitemap",	
	subTitle	=> "포에이엠교육원",
	subDesc		=> "즐거운 배움, 포에이엠교육원 입니다.",
	me_link		=> false,	
	me_use 		=> false,
	me_etc		=> true
);

$routeName = G5_LANG_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "8010",	
	title 		=> "이용약관",		
	url 		=> $routeName."/ft01.php",		  
	pid 		=> "ft01",	
	subTitle	=> "포에이엠교육원",
	subDesc		=> "즐거운 배움, 포에이엠교육원 입니다.",
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
	subTitle	=> "포에이엠교육원",
	subDesc		=> "즐거운 배움, 포에이엠교육원 입니다.",
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
	subTitle	=> "포에이엠교육원",
	subDesc		=> "즐거운 배움, 포에이엠교육원 입니다.",
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