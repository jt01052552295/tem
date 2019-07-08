<?php
$routeName = G5_LANG_URL."/company";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "회사소개",		
	url 		=> $routeName."/message.php",		  
	pid 		=> "",			
	makeDir	=> "",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1010",	
	title 		=> "인사말",		
	url 		=> $routeName."/message.php",		  
	pid 		=> "message",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1020",	
	title 		=> "Window Plus 전시장",		
	url 		=> $routeName."/showwin.php",		  
	pid 		=> "showwin",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1030",	
	title 		=> "생산공장전경",		
	url 		=> $routeName."/factory.php",		  
	pid 		=> "factory",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1040",	
	title 		=> "Z:IN소개",		
	url 		=> $routeName."/zin.php",		  
	pid 		=> "zin",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1050",	
	title 		=> "오시는길",		
	url 		=> $routeName."/location.php",		  
	pid 		=> "location",			
	me_link		=> true,	
	me_use 		=> true
);


$routeName = G5_LANG_URL."/products";
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "하이샤시",		
	url 		=> $routeName."/products.php",		  
	pid 		=> "products",	
	makeDir		=> "products",
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2010",	
	title 		=> "내창/방창",		
	url 		=> $routeName."/room.php",		  
	pid 		=> "room",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "201010", title => "Neo 내창", url => $routeName."/neo.php", pid => "neo", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201011", title => "스마트창 단창", url => $routeName."/smart.php", pid => "smart", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201012", title => "Fix&Slide", url => $routeName."/fixslide.php", pid => "fixslide", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201013", title => "뉴 Project창", url => $routeName."/project.php", pid => "project", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201014", title => "공틀일체형창", url => $routeName."/integral.php", pid => "integral", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201015", title => "전통한지창 이중창", url => $routeName."/hanjidouble.php", pid => "hanjidouble", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201016", title => "우드스타창 이중창", url => $routeName."/woodstar.php", pid => "woodstar", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201017", title => "우드스타창 이중창", url => $routeName."/woodstardouble.php", pid => "woodstardouble", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201018", title => "우드스타창 단창", url => $routeName."/woodstar_2.php", pid => "woodstar_2", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201019", title => "스타창", url => $routeName."/star.php", pid => "star", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201019", title => "전통한지창 단창", url => $routeName."/hanji.php", pid => "hanji", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201020", title => "스마트 이중창(내창 이중창)", url => $routeName."/smartdouble.php", pid => "smartdouble", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201021", title => "스마트 이중창(내창 이중창)", url => $routeName."/smartdouleb_2.php", pid => "smartdouleb_2", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201022", title => "터닝도어", url => $routeName."/turning.php", pid => "turning", me_link => true, me_use => true);

$siteMenu[] = array(
	mCode 		=> "2020",	
	title 		=> "발코니/거실창",		
	url 		=> $routeName."/balcony.php",		  
	pid 		=> "balcony",			
	me_link		=> true,	
	me_use 		=> true
);

$siteMenu[] = array(mCode => "202010", title => "베스트3", url => $routeName."/best3.php", pid => "best3", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202011", title => "베스트5", url => $routeName."/best5.php", pid => "best5", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202012", title => "베스트7", url => $routeName."/best7.php", pid => "best7", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202013", title => "파워세이브 시리즈", url => $routeName."/powersave.php", pid => "powersave", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202014", title => "유로시스템 9<br/>Lift & Slide System", url => $routeName."/euro1.php", pid => "euro1", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202015", title => "유로시스템 9<br/>Tilt & Turn System", url => $routeName."/euro2.php", pid => "euro2", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202016", title => "디럭스<br/>Lift & Slide System", url => $routeName."/euro3.php", pid => "euro3", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202017", title => "전동블라인드창<br/>Double Lift & Slide System", url => $routeName."/euro4.php", pid => "euro4", me_link => true, me_use => true);

$siteMenu[] = array(
	mCode 		=> "2030",	
	title 		=> "유리",		
	url 		=> $routeName."/glass.php",		  
	pid 		=> "glass",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "203010", title => "삼복층유리", url => $routeName."/duplex.php", pid => "duplex", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "203011", title => "반사 복층유리", url => $routeName."/reflexes.php", pid => "reflexes", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "203012", title => "더블로이 복층유리", url => $routeName."/doubleroy.php", pid => "doubleroy", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "203013", title => "진공유리", url => $routeName."/vacuum.php", pid => "vacuum", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "203014", title => "로이 복층유리", url => $routeName."/royduplex.php", pid => "royduplex", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "203015", title => "접합 복층유리", url => $routeName."/inosculation.php", pid => "inosculation", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "203016", title => "자외선 차단유리", url => $routeName."/uvblock.php", pid => "uvblock", me_link => true, me_use => true);



$routeName = G5_LANG_URL."/winplus";
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "window Plus",		
	url 		=> $routeName."/list.php",		  
	pid 		=> "list",	
	makeDir	=> "winplus",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3010",	
	title 		=> "발코니창",		
	url 		=> $routeName."/bal.php",		  
	pid 		=> "bal",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "301010", title => "수퍼세이브7", url => $routeName."/supersave7.php", pid => "supersave7", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "301011", title => "수퍼세이브3", url => $routeName."/supersave3.php", pid => "supersave3", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "301012", title => "수퍼세이브5", url => $routeName."/supersave5.php", pid => "supersave5", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "301013", title => "네오발코니창", url => $routeName."/neobal.php", pid => "neobal", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "301014", title => "시스템이중창", url => $routeName."/system2.php", pid => "system2", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "301015", title => "유로우드 TT106", url => $routeName."/urowoodtt106.php", pid => "urowoodtt106", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "301016", title => "유로알루미늄 A150P LS", url => $routeName."/uroa150p.php", pid => "uroa150p", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "301017", title => "유로알루미늄 TT70", url => $routeName."/uroatt70.php", pid => "uroatt70", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "301018", title => "유로우드 LS188", url => $routeName."/urowoodls188.php", pid => "urowoodls188", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "301019", title => "인테리어 발코니", url => $routeName."/intebal.php", pid => "intebal", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "301019", title => "시스템 여닫이 70", url => $routeName."/system70.php", pid => "system70", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "301020", title => "시스템슬라이딩 220", url => $routeName."/systemsliding220.php", pid => "systemsliding220", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "301021", title => "전동 블라인드 창", url => $routeName."/elecblind.php", pid => "elecblind", me_link => true, me_use => true);


$siteMenu[] = array(
	mCode 		=> "3020",	
	title 		=> "방창/내창",		
	url 		=> $routeName."/room2.php",		  
	pid 		=> "room2",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "302010", title => "스마일", url => $routeName."/smile.php", pid => "smile", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "302011", title => "전통한지창", url => $routeName."/hanji2.php", pid => "hanji2", me_link => true, me_use => true);

$siteMenu[] = array(
	mCode 		=> "3030",	
	title 		=> "도어",		
	url 		=> $routeName."/door.php",		  
	pid 		=> "door",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "303010", title => "유로도어 70", url => $routeName."/urodoor70.php", pid => "urodoor70", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "303011", title => "터닝도어", url => $routeName."/turningdoor.php", pid => "turningdoor", me_link => true, me_use => true);


$siteMenu[] = array(
	mCode 		=> "3040",	
	title 		=> "중문",		
	url 		=> $routeName."/center.php",		  
	pid 		=> "center",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "304010", title => "Style+(현관중문)", url => $routeName."/styleplus.php", pid => "styleplus", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "304011", title => "공틀일체형창", url => $routeName."/gongteul.php", pid => "gongteul", me_link => true, me_use => true);




$routeName = G5_LANG_URL."/gallery";
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "갤러리",		
	url 		=> $routeName."/gallery.php",		  
	pid 		=> "gallery",	
	makeDir	=> "",
	me_link		=> true,	
	me_use 		=> true
);


$routeName = G5_LANG_URL."/mail";
$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "고객문의",		
	url 		=> $routeName."/mail.php",		  
	pid 		=> "mail",	
	makeDir	=> "", 
	me_link		=> true,	
	me_use 		=> true
);

$routeName = G5_LANG_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "80",	
	title 		=> "사이트맵",		
	url 		=> $routeName."/sitemap.php",		  
	pid 		=> "sitemap",	
	makeDir	=> "", 
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


?>