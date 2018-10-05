<?php
$routeName = KI_URL."/homepage";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "홈페이지제작",		
	url 		=> $routeName."/homepage.php",		  
	pid 		=> "homepage",			
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1010",	
	title 		=> "홈페이지제작",		
	url 		=> $routeName."/homepage.php",		  
	pid 		=> "homepage",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1020",	
	title 		=> "기본형 홈페이지",		
	url 		=> $routeName."/normal.php",		  
	pid 		=> "normal",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1030",	
	title 		=> "비지니스형 홈페이지",		
	url 		=> $routeName."/business.php",		  
	pid 		=> "business",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1040",	
	title 		=> "고급형 홈페이지",		
	url 		=> $routeName."/high.php",		  
	pid 		=> "high",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1050",	
	title 		=> "쇼핑몰",		
	url 		=> $routeName."/mall.php",		  
	pid 		=> "mall",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1060",	
	title 		=> "모바일 홈페이지",		
	url 		=> $routeName."/mobile.php",		  
	pid 		=> "mobile",			
	me_link		=> true,	
	me_use 		=> true
);

$routeName = KI_URL."/management";
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "유지관리시스템",		
	url 		=> $routeName."/management.php",		  
	pid 		=> "management",			
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2010",	
	title 		=> "유지관리시스템",		
	url 		=> $routeName."/management.php",		  
	pid 		=> "management",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2020",	
	title 		=> "서버임대(호스팅)",		
	url 		=> $routeName."/hosting.php",		  
	pid 		=> "hosting",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2030",	
	title 		=> "홈페이지 유지보수",		
	url 		=> $routeName."/homemanage.php",		  
	pid 		=> "homemanage",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2040",	
	title 		=> "도메인",		
	url 		=> $routeName."/domain.php",		  
	pid 		=> "domain",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2050",	
	title 		=> "대용량 메일서버",		
	url 		=> $routeName."/webmail.php",		  
	pid 		=> "webmail",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2060",	
	title 		=> "검색사이트 등록",		
	url 		=> $routeName."/search.php",		  
	pid 		=> "search",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2070",	
	title 		=> "인터넷 광고",		
	url 		=> $routeName."/keyword.php",		  
	pid 		=> "keyword",			
	me_link		=> true,	
	me_use 		=> true
);

$routeName = KI_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "고객센터",		
	url 		=> $routeName."/customer.php",		  
	pid 		=> "customer",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3010",	
	title 		=> "공지사항",		
	url 		=> $routeName."/notice.php",		  
	pid 		=> "notice",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3020",	
	title 		=> "이벤트/행사",		
	url 		=> $routeName."/event.php",		  
	pid 		=> "event",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3030",	
	title 		=> "자주묻는 질문",		
	url 		=> $routeName."/qna.php",		  
	pid 		=> "qna",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3040",	
	title 		=> "고객문의",		
	url 		=> $routeName."/inquiry.php",		  
	pid 		=> "inquiry",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3050",	
	title 		=> "견적문의",		
	url 		=> $routeName."/estimate.php",		  
	pid 		=> "estimate",			
	me_link		=> true,	
	me_use 		=> true
);

$routeName = KI_URL."/portfolio";
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "포트폴리오",		
	url 		=> $routeName."/portfolio.php",		  
	pid 		=> "portfolio",			
	me_link		=> true,	
	me_use 		=> true,
	me_mobile_toggle=>'1'
);


$routeName = KI_URL."/company";
$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "회사소개",		
	url 		=> $routeName."/message.php",		  
	pid 		=> "message",			
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "5010",	
	title 		=> "CEO인사말",		
	url 		=> $routeName."/message.php",		  
	pid 		=> "message",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "5020",	
	title 		=> "사업영역",		
	url 		=> $routeName."/business.php",		  
	pid 		=> "business",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "5030",	
	title 		=> "회사연혁",		
	url 		=> $routeName."/history.php",		  
	pid 		=> "history",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "5040",	
	title 		=> "오시는길",		
	url 		=> $routeName."/location.php",		  
	pid 		=> "location",			
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
  if($siteMenu[$i]['me_link'] == true) { $navLinkArr[$k1] = $siteMenu[$i]; $k1++; }
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