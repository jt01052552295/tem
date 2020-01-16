<?php
$routeName = G5_PAGE_URL;
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "남포센터소개",		
	url 		=> $routeName."/message.php",		  
	pid 		=> "",		
	subTitle	=> "company",
	items		=> array(),
	me_link		=> false,	
	me_use 		=> true,
);
$siteMenu[] = array(
	mCode 		=> "1010",	
	title 		=> "인사말",		
	url 		=> $routeName."/message.php",		  
	pid 		=> "message",
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1020",	
	title 		=> "프리미엄전문점",		
	url 		=> $routeName."/premium.php",		  
	pid 		=> "premium",	
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1030",	
	title 		=> "센터둘러보기",		
	url 		=> $routeName."/center.php",		  
	pid 		=> "center",
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1040",	
	title 		=> "지멘스소개",		
	url 		=> $routeName."/siemens.php",		  
	pid 		=> "siemens",
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


$routeName = G5_PAGE_URL;
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "브랜드소개",		
	url 		=> $routeName."/brand.php",		  
	pid 		=> "brand",		
	subTitle	=> "",
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);


$routeName = G5_PAGE_URL;
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "제품안내",		
	url 		=> $routeName."/products.php",		  
	pid 		=> "products",		
	subTitle	=> "products",
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_PAGE_URL;
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "보조금안내",		
	url 		=> $routeName."/info.php",	
	pid 		=> "info",		
	subTitle	=> "",
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);


$routeName = G5_BBS_URL;
$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "고객센터",		
	url 		=> G5_BBS_URL."/board.php?bo_table=notice",			  
	pid 		=> "",			
	items		=> array(),
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "5010",	
	title 		=> "공지사항",		
	url 		=> G5_BBS_URL."/board.php?bo_table=notice",		  
	pid 		=> "notice",			
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "5020",	
	title 		=> "고객문의",		
	url 		=> G5_URL."/mail/mail.php",		    
	pid 		=> "mail",			
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "5030",	
	title 		=> "출장서비스",		
	url 		=> G5_PAGE_URL."/callout.php",		  
	pid 		=> "callout",			
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_PAGE_URL;
$siteMenu[] = array(
	mCode 		=> "5040",	
	title 		=> "사이트맵",		
	url 		=> $routeName."/sitemap.php",		  
	pid 		=> "sitemap",	
	subTitle	=> "sitemap", 
	items		=> array(),
	me_link		=> true,	
	me_use 		=> true
);

// $routeName = G5_PAGE_URL;
// $siteMenu[] = array(
// 	mCode 		=> "60",	
// 	title 		=> "사이트맵",		
// 	url 		=> $routeName."/sitemap.php",		  
// 	pid 		=> "sitemap",	
// 	subTitle	=> "sitemap", 
// 	items		=> array(),
// 	me_link		=> false,	
// 	me_use 		=> false,
// 	me_etc		=> true
// );

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