<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$routeName = G5_PAGE_URL;
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "회사소개",		
	url 		=> $routeName."/company.php",		  
	pid 		=> "",		
	subTitle	=> "company",
	items		=> array(),
	me_link		=> false,	
	me_use 		=> true,
);
$siteMenu[] = array(
	mCode 		=> "1010",	
	title 		=> "회사개요",		
	url 		=> $routeName."/company.php",		  
	pid 		=> "company",
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1020",	
	title 		=> "CEO인사말",		
	url 		=> $routeName."/ceo.php",		  
	pid 		=> "ceo",	
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1030",	
	title 		=> "회사연혁",		
	url 		=> $routeName."/history.php",		  
	pid 		=> "history",
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1040",	
	title 		=> "조직도",		
	url 		=> $routeName."/organization.php",		  
	pid 		=> "organization",
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1050",	
	title 		=> "오시는길",		
	url 		=> $routeName."/location.php",		  
	pid 		=> "location",
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);


$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "제품소개",		
	url 		=> $routeName."/content.php",		  
	pid 		=> "",		
	subTitle	=> "content",
	items		=> array(),
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2010",	
	title 		=> "사업분야1",		
	url 		=> $routeName."/content.php",		  
	pid 		=> "content",
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "201010",	
	title 		=> "사업분야1-1",		
	url 		=> $routeName."/content.php",		  
	pid 		=> "content11",
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "201011",	
	title 		=> "사업분야1-2",		
	url 		=> $routeName."/content.php",		  
	pid 		=> "content12",
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "201012",	
	title 		=> "사업분야1-3",		
	url 		=> $routeName."/content.php",		  
	pid 		=> "content13",
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);


$routeName = G5_BBS_URL;
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "견적문의",		
	url 		=> $routeName."/board.php?bo_table=gallery",		  
	pid 		=> "gallery",		
	subTitle	=> "gallery",
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_BBS_URL;
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "고객센터",		
	url 		=> $routeName."/board.php?bo_table=notice",		  
	pid 		=> "",		
	subTitle	=> "",
	items		=> array(),
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4010",	
	title 		=> "공지사항",		
	url 		=> $routeName."/board.php?bo_table=notice",		  
	pid 		=> "notice",			
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4020",	
	title 		=> "질문답변",		
	url 		=> $routeName."/board.php?bo_table=qa",		  
	pid 		=> "qa",			
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4030",	
	title 		=> "자유게시판",		
	url 		=> $routeName."/board.php?bo_table=free",		  
	pid 		=> "free",			
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);
$routeName = G5_PAGE_URL;
$siteMenu[] = array(
	mCode 		=> "4040",	
	title 		=> "공지사항",		
	url 		=> $routeName."/mail/mail.php",		  
	pid 		=> "mail",			
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);


$routeName = G5_PAGE_URL;
$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "사이트맵",		
	url 		=> $routeName."/sitemap.php",		  
	pid 		=> "sitemap",	
	subTitle	=> "sitemap", 
	items		=> array(),
	me_link		=> false,	
	me_use 		=> false,
	me_etc		=> true
);


$nav_datas = array();
$topCode = '';
$midCode = '';
foreach($siteMenu as $menu){
	
	if(strlen($menu['mCode']) == 2 && $menu['me_use'] == true){
		$topCode = $menu['mCode'];
		$nav_datas[$topCode] = $menu;
	}
	if(strlen($menu['mCode']) == 4 && $menu['me_use'] == true){
		$midCode = $menu['mCode'];
		$nav_datas[$topCode]['items'][$midCode] = $menu; 
	}
	if(strlen($menu['mCode']) == 6 && $menu['me_use'] == true){
		$nav_datas[$topCode]['items'][$midCode]['items'][] = $menu; 
	}

}


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
    




//print_r2($breadcrumArr);

//echo "<ul>";
//foreach($nav_datas as $menu){
	
  //echo "<li>".$menu['mCode']." " .$menu['title']. ' - '.count($menu['items']);

  //if(count($menu['items'])>0): // 2차
	//$k=0;
  	//echo '<ol>'.PHP_EOL;
	//foreach($menu['items'] as $subMenu):
		//echo "<li>".$subMenu['mCode']." " .$subMenu['title']." ";
		//if(count($subMenu['items'])>0):  // 3차
			//$j=0;
			//echo '<ol>'.PHP_EOL;
			//foreach($subMenu['items'] as $nav):
				//echo "<li>".$nav['mCode']." " .$nav['title'];
			//endforeach;
			//echo '</ol>'.PHP_EOL;
		//endif;
		//echo "</li>".PHP_EOL;
  	//endforeach;
	//echo '</ol>'.PHP_EOL;
  //endif;
  
  
  //echo "</li>".PHP_EOL;
//}
//echo "</ul>";



?>