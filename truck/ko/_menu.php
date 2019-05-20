<?php
$routeName = G5_LANG_URL."/product";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "카고",		
	url 		=> $routeName."/list.php?pid=10",		  
	pid 		=> "10",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "1010",	title => "상세", url => $routeName."/detail.php", pid => "1010", me_product => true, 	me_link => true, me_use => true);

$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "윙바디",		
	url 		=> $routeName."/list.php?pid=20",
	pid 		=> "20",	
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "2010",	title => "상세", url => $routeName."/detail.php", pid => "2010", me_product => true, 	me_link => true, me_use => true);

$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "냉동탑",		
	url 		=> $routeName."/list.php?pid=30",		  
	pid 		=> "30",
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "3010",	title => "상세", url => $routeName."/detail.php", pid => "3010", me_product => true, 	me_link => true, me_use => true);


$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "내장탑",		
	url 		=> $routeName."/list.php?pid=40",	  
	pid 		=> "40",
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "4010",	title => "상세", url => $routeName."/detail.php", pid => "4010", me_product => true, 	me_link => true, me_use => true);

$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "기타트럭",		
	url 		=> $routeName."/list.php?pid=50",	
	pid 		=> "50",	
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "5010",	title => "상세", url => $routeName."/detail.php", pid => "5010", me_product => true, 	me_link => true, me_use => true);

$routeName = G5_LANG_URL."/guide";
$siteMenu[] = array(
	mCode 		=> "60",	
	title 		=> "내차팔기",		
	url 		=> $routeName."/selling.php",	
	pid 		=> "selling",	
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/mail";
$siteMenu[] = array(
	mCode 		=> "70",	
	title 		=> "구입문의",		
	url 		=> $routeName."/mail.php",	
	pid 		=> "mail",	
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/guide";
$siteMenu[] = array(
	mCode 		=> "80",	
	title 		=> "직거래이용방법",		
	url 		=> $routeName."/guide.php",	
	makeDir		=> "guide",
	pid 		=> "guide",	
	me_link		=> true,	
	me_use 		=> true
);


$routeName = G5_LANG_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "a0",	
	title 		=> "사이트맵",		
	url 		=> $routeName."/sitemap.php",		  
	pid 		=> "sitemap",	 
	me_link		=> false,	
	me_use 		=> false,
	me_etc		=> true
);

$siteMenu[] = array(
	mCode 		=> "b0",	
	title 		=> "회사소개",		
	url 		=> $routeName."/company.php",		  
	pid 		=> "company",	 
	me_link		=> false,	
	me_use 		=> false,
	me_etc		=> true
);


$siteMenu[] = array(
	mCode 		=> "c0",	
	title 		=> "이용약관",		
	url 		=> $routeName."/provision.php",		  
	pid 		=> "provision",	 
	me_link		=> false,	
	me_use 		=> false,
	me_etc		=> true
);

$siteMenu[] = array(
	mCode 		=> "d0",	
	title 		=> "개인정보취급방침",		
	url 		=> $routeName."/privacy.php",		  
	pid 		=> "privacy",	 
	me_link		=> false,	
	me_use 		=> false,
	me_etc		=> true
);

$siteMenu[] = array(
	mCode 		=> "e0",	
	title 		=> "오시는길",		
	url 		=> $routeName."/location.php",		  
	pid 		=> "location",	 
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
} else if($pid && !$it_id){
	$_menu_current_name = $pid;
} else if($pid && $it_id){

	$sql = " select * from {$g5['g5_products_item_table']} where it_id = '$it_id' ";
    $itm = sql_fetch($sql);
	$_menu_current_name = $pid;
	$_menu_product_name = $itm['it_name'];

	//$_menu_product_name = '11';

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


	  } else if($currentMenuArr['me_product'] === true) {
		
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


		$proMenu[] = array(
			title 		=> $_menu_product_name,	
		);
		$breadcrumArr[] = $proMenu[0];
		  
		  
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