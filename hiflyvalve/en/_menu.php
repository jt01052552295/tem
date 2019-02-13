 <?php
$routeName = G5_LANG_URL."/company";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "Company",		
	url 		=> $routeName."/company.php",		  
	pid 		=> "",			
	subTitle	=> "company",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1010",	
	title 		=> "Overview",		
	url 		=> $routeName."/company.php",		  
	pid 		=> "company",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1020",	
	title 		=> "History",		
	url 		=> $routeName."/history.php",		  
	pid 		=> "history",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1030",	
	title 		=> "Organization",		
	url 		=> $routeName."/organization.php",		  
	pid 		=> "organization",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1040",	
	title 		=> "Partner",		
	url 		=> $routeName."/partner.php",		  
	pid 		=> "partner",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1050",	
	title 		=> "Directions",		
	url 		=> $routeName."/location.php",		  
	pid 		=> "location",			
	me_link		=> true,	
	me_use 		=> true
);




$routeName = G5_LANG_URL."/product";
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "Products",		
	url 		=> $routeName."/bsm_flange.php",		  
	pid 		=> "",	
	subTitle	=> "Products",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2010",	
	title 		=> "Metal seated butterfly valves",		
	url 		=> $routeName."/bsm_flange.php",		  
	pid 		=> "",			
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "201010", title => "BSM Flange", 		url => $routeName."/bsm_flange.php", pid => "bsm_flange", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201020", title => "BSM Lug (Wafer)", 	url => $routeName."/bsm_lug.php", pid => "bsm_lug", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201030", title => "BLM", 				url => $routeName."/blm.php", pid => "blm", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201040", title => "BHG", 				url => $routeName."/bhg.php", pid => "bhg", me_link => true, me_use => true);



$siteMenu[] = array(
	mCode 		=> "2020",	
	title 		=> "Knife gate valves",		
	url 		=> $routeName."/klm.php",		  
	pid 		=> "",			
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "202010", title => "KLM", 		url => $routeName."/klm.php", pid => "klm", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202020", title => "KLR", 		url => $routeName."/klr.php", pid => "klr", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202030", title => "KSM", 		url => $routeName."/ksm.php", pid => "ksm", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202040", title => "KSR", 		url => $routeName."/ksr.php", pid => "ksr", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202050", title => "KWS", 		url => $routeName."/kws.php", pid => "kws", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202060", title => "MSK", 		url => $routeName."/msk.php", pid => "msk", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202070", title => "MLK", 		url => $routeName."/mlk.php", pid => "mlk", me_link => true, me_use => true);


$routeName = G5_LANG_URL."/tech";
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "Technology",		
	url 		=> $routeName."/tech.php",		  
	pid 		=> "",	
	subTitle	=> "Technology",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3010",	
	title 		=> "Certification Status",		
	url 		=> $routeName."/tech.php",		  
	pid 		=> "tech",
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3020",	
	title 		=> "Inspection Equipment Status",		
	url 		=> $routeName."/equip.php",		  
	pid 		=> "equip",
	me_link		=> true,	
	me_use 		=> true
);



$routeName = G5_LANG_URL."/mail";
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "Contact US",		
	url 		=> $routeName."/mail.php",		  
	pid 		=> "",			
	subTitle	=> "고객센터",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4010",	
	title 		=> "Inquiry",		
	url 		=> $routeName."/mail.php",		  
	pid 		=> "mail",			
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "80",	
	title 		=> "Site map",		
	url 		=> $routeName."/sitemap.php",		  
	pid 		=> "sitemap",	
	subTitle	=> "Site map", 
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