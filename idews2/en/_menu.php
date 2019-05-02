 <?php
$routeName = G5_LANG_URL."/company";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "About Us",		
	url 		=> $routeName."/introduction.php",		  
	pid 		=> "",			
	subTitle	=> "About Us",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1010",	
	title 		=> "About Us",		
	url 		=> $routeName."/introduction.php",		  
	pid 		=> "introduction",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1020",	
	title 		=> "Location",		
	url 		=> $routeName."/location.php",		  
	pid 		=> "location",			
	me_link		=> true,	
	me_use 		=> true
);




$routeName = G5_LANG_URL."/product";
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "Products",		
	url 		=> $routeName."/list.php?pid=20",		  
	pid 		=> "20",	
	subTitle	=> "product",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2010",	
	title 		=> "Rotary Actuators",		
	url 		=> $routeName."/list.php?pid=2010",		  
	pid 		=> "2010",			
	me_link		=> true,	
	me_use 		=> true
);

$siteMenu[] = array(mCode => "201010",	title => "Hollow Shaft Actuators",  me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201020",	title => "Solid Shaft Actuators",  me_link => true, me_use => true);


$siteMenu[] = array(
	mCode 		=> "2020",	
	title 		=> "Gear Units",		
	url 		=> $routeName."/list.php?pid=2020",		  
	pid 		=> "2020",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "202010",	title => "Miniature Gear Units",  me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202020",	title => "Gear Units",  me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202030",	title => "Hollow Shaft Gear Units",  me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202040",	title => "Simplicity Gear Units",  me_link => true, me_use => true);

$siteMenu[] = array(
	mCode 		=> "2030",	
	title 		=> "Component Sets",		
	url 		=> $routeName."/list.php?pid=2030",		  
	pid 		=> "2030",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "203010",	title => "Cup Type",  me_link => true, me_use => true);
$siteMenu[] = array(mCode => "203020",	title => "Pancake",  me_link => true, me_use => true);
$siteMenu[] = array(mCode => "203030",	title => "Silk Hat",  me_link => true, me_use => true);


$routeName = G5_LANG_URL."/tech";
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "Technology",		
	url 		=> $routeName."/application.php",		  
	pid 		=> "",	
	subTitle	=> "Technology",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3010",	
	title 		=> "Application",		
	url 		=> $routeName."/application.php",		  
	pid 		=> "application",
	me_link		=> true,	
	me_use 		=> true
);



$routeName = G5_LANG_URL."/mail";
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "Contact Us",		
	url 		=> $routeName."/mail.php",		  
	pid 		=> "",	
	subTitle	=> "Contact Us",
	me_link		=> false,	
	me_use 		=> true
);

$siteMenu[] = array(
	mCode 		=> "4010",	
	title 		=> "Online Inquiry",		
	url 		=> $routeName."/mail.php",		  
	pid 		=> "mail",		
	me_link		=> true,	
	me_use 		=> true
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
} else if($pid){
	$_menu_current_name = $pid;
}else if($ca_id){

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