<?php
$routeName = G5_LANG_URL."/company";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "회사소개",		
	url 		=> $routeName."/message.php",
	makeDir		=> "",		  
	pid 		=> "",			
	me_link		=> false,	
	me_use 		=> true
);

$siteMenu[] = array(mCode => "1010", title => "CEO 인사말", 		url => $routeName."/message.php", pid => "message", me_link => true, me_use => true );
$siteMenu[] = array(mCode => "1020", title => "회사개요", 			url => $routeName."/overview.php", pid => "overview", me_link => true, me_use => true );
$siteMenu[] = array(mCode => "1030", title => "연혁", 				url => $routeName."/history.php", pid => "history", me_link => true, me_use => true );
$siteMenu[] = array(mCode => "1040", title => "조직도", 			url => $routeName."/organization.php", pid => "organization", me_link => true, me_use => true );
$siteMenu[] = array(mCode => "1050", title => "오시는 길", 			url => $routeName."/location.php", pid => "location", me_link => true, me_use => true );



$routeName = G5_LANG_URL."/product";
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "제품소개",		
	url 		=> $routeName."/product.php",
	makeDir		=> "product",		  
	pid 		=> "product",	
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/tech";
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "기술현황 ",		
	url 		=> $routeName."/tech.php",		  
	makeDir		=> "tech",		
	pid 		=> "tech",
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/lab";
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "부설연구소",		
	url 		=> $routeName."/lab.php",		  
	makeDir		=> "lab",		
	pid 		=> "lab",
	me_link		=> true,	
	me_use 		=> true
);



$routeName = G5_LANG_URL."/mail";
$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "고객문의",		
	url 		=> $routeName."/mail.php",		  
	pid 		=> "mail",	
	subTitle	=> "고객문의", 
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "60",	
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
} else if($pid && $it_id){

	$sql = " select * from {$g5['g5_event_category_table']} where ca_id = '{$pid}' ";
	$ca = sql_fetch($sql);
	$_menu_current = basename($_SERVER['PHP_SELF']);
	$_menu_current_arr = explode(".", $_menu_current );
	$_menu_current_name = $_menu_current_arr[0];

	$sql = " select * from {$g5['g5_event_item_table']} where it_id = '$it_id' ";
    $itm = sql_fetch($sql);
	$_menu_product_name = $itm['it_name'];

	//$_menu_product_name = '11';

}else if($ca_id){

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


	  } else if($currentMenuArr['me_product'] === true) {
		
		  $level = strlen($currentMenuArr['mCode']) / 2;	
	  	  //echo $level; // 1이면 1차, 2이면 2차, 3이면 3차메뉴

	  	  for($i=1; $i<=$level; $i++):
	  	  	$levelChar = substr($currentMenuArr['mCode'],0,$i*2);

	  	  	  for($k=0; $k < count($siteMenu); $k++):
				if($levelChar == $siteMenu[$k]['mCode']){
				  $breadcrumArr[] = $siteMenu[$k];
				  //$breadcrumArr[]['title'] = $siteMenu[$k]['title'] . ' 111';
				}
			  endfor;
	  	  endfor;


		//$proMenu[] = array(
			//title 		=> $_menu_product_name,	
		//);
		//$breadcrumArr[] = $proMenu[0];
		  
		  
	  }else {
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
       if($prev_index>=0){
          $currentPrevArr = $navLinkArr[$prev_index];
       }
       if($next_index < count($navLinkArr)){
          $currentNextArr = $navLinkArr[$next_index];
       }
  }
}


?>