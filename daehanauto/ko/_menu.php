 <?php
$routeName = G5_LANG_URL."/company";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "회사소개",
	desc 		=> "대한오토텍을 소개합니다.",		
	url 		=> $routeName."/message.php",		  
	pid 		=> "",			
	subTitle	=> "company",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1010",	
	title 		=> "인사말",
	img 		=> "menu1_1.png",		
	url 		=> $routeName."/message.php",		  
	pid 		=> "message",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1020",	
	title 		=> "회사연혁",
	img 		=> "menu1_2.png",		
	url 		=> $routeName."/history.php",		  
	pid 		=> "history",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1030",	
	title 		=> "모토",	
	img 		=> "menu1_3.png",	
	url 		=> $routeName."/moto.php",		  
	pid 		=> "moto",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1040",	
	title 		=> "조직도",
	img 		=> "menu1_4.png",		
	url 		=> $routeName."/organization.php",		  
	pid 		=> "organization",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1050",	
	title 		=> "인증현황",	
	img 		=> "menu1_5.png",	
	url 		=> $routeName."/cert.php",		  
	pid 		=> "cert",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1060",	
	title 		=> "주요고객사",
	img 		=> "menu1_6.png",		
	url 		=> $routeName."/partner.php",		  
	pid 		=> "partner",			
	me_link		=> true,	
	me_use 		=> true
);




$routeName = G5_LANG_URL."/product";
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "제품소개",	
	desc 		=> "제품소개입니다.",	
	url 		=> $routeName."/gravity.php",		  
	pid 		=> "",	
	subTitle	=> "Product",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2010",	
	title 		=> "중력주조",
	img 		=> "menu2_1.png",				
	url 		=> $routeName."/gravity.php",		  
	pid 		=> "gravity",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2020",	
	title 		=> "다이캐스팅",
	img 		=> "menu2_2.png",			
	url 		=> $routeName."/diecasting.php",		  
	pid 		=> "diecasting",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2030",	
	title 		=> "정밀주조",
	img 		=> "menu2_3.png",			
	url 		=> $routeName."/precision.php",		  
	pid 		=> "precision",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2040",	
	title 		=> "Bridge Stone",	
	img 		=> "menu2_4.png",		
	url 		=> $routeName."/bridge.php",		  
	pid 		=> "bridge",			
	me_link		=> true,	
	me_use 		=> true
);



$routeName = G5_LANG_URL."/tech";
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "연구개발",	
	desc 		=> "연구개발소개입니다.",		
	url 		=> $routeName."/location.php",		  
	pid 		=> "",	
	subTitle	=> "Technology",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3010",	
	title 		=> "센터위치",	
	img 		=> "menu3_1.png",		
	url 		=> $routeName."/location.php",		  
	pid 		=> "location",
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3020",	
	title 		=> "생산설비",	
	img 		=> "menu3_2.png",		
	url 		=> $routeName."/status.php",		  
	pid 		=> "status",
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/project";
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "프로젝트",	
	desc 		=> "프로젝트소개입니다.",	
	url 		=> $routeName."/exhibition.php",		  
	pid 		=> "",	
	subTitle	=> "Project",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4010",	
	title 		=> "전시",	
	img 		=> "menu4_1.png",		
	url 		=> $routeName."/exhibition.php",		  
	pid 		=> "exhibition",
	me_link		=> true,	
	me_use 		=> true
);



$routeName = G5_LANG_URL."/mail";
$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "Contact US",		
	url 		=> $routeName."/mail.php",		  
	pid 		=> "mail",		
	me_link		=> false,	
	me_use 		=> false,
	me_etc		=> true
);


$routeName = G5_LANG_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "60",	
	title 		=> "Sitemap",		
	url 		=> $routeName."/sitemap.php",		  
	pid 		=> "sitemap",
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