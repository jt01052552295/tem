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
	title 		=> "설비현황",		
	url 		=> $routeName."/equip.php",		  
	pid 		=> "equip",	
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
	mCode 		=> "20",	
	title 		=> "제품소개",		
	url 		=> $routeName."/rovingtape.php",		  
	pid 		=> "",		
	subTitle	=> "product",
	items		=> array(),
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2010",	
	title 		=> "로빙테이프",		
	url 		=> $routeName."/rovingtape.php",		  
	pid 		=> "rovingtape",
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2020",	
	title 		=> "우븐로빙",		
	url 		=> $routeName."/wovenroving.php",		  
	pid 		=> "wovenroving",
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);



$routeName = G5_URL;
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "견적문의",		
	url 		=> $routeName."/mail/mail.php",			  
	pid 		=> "mail",		
	subTitle	=> "mail",
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_BBS_URL;
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "고객센터",		
	url 		=> $routeName."/board.php?bo_table=notice",		  
	pid 		=> "notice",		
	subTitle	=> "customer",
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