<?php
$routeName = G5_LANG_URL."/intro";
$siteMenu[] = array(
	mCode 		=> "10",	
	title 		=> "회사소개",		
	subTitle	=> "company",
	url 		=> $routeName."/message.php",		  
	pid 		=> "",			
	makeFolder	=> "intro",
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
	title 		=> "경영이념 및 비전",		
	url 		=> $routeName."/vison.php",		  
	pid 		=> "vison",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1030",	
	title 		=> "회사연혁",		
	url 		=> $routeName."/history.php",		  
	pid 		=> "history",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1040",	
	title 		=> "상표등록증",		
	url 		=> $routeName."/finebest.php",		  
	pid 		=> "finebest",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "1050",	
	title 		=> "보유인증서",		
	url 		=> $routeName."/cert.php",		  
	pid 		=> "cert",			
	me_link		=> true,	
	me_use 		=> true
);

$siteMenu[] = array(
	mCode 		=> "1060",	
	title 		=> "주요설비",		
	url 		=> $routeName."/equipment.php",		  
	pid 		=> "equipment",			
	me_link		=> true,	
	me_use 		=> true
);

$siteMenu[] = array(
	mCode 		=> "1070",	
	title 		=> "오시는 길",		
	url 		=> $routeName."/location.php",		  
	pid 		=> "location",			
	me_link		=> true,	
	me_use 		=> true
);



$routeName = G5_LANG_URL."/products";
$siteMenu[] = array(
	mCode 		=> "20",	
	title 		=> "제품소개",	
	subTitle	=> "products",	
	url 		=> $routeName."/gasket.php",		  
	pid 		=> "",	
	makeFolder	=> "products",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "2010",	
	title 		=> "GASKET",		
	url 		=> $routeName."/gasket.php",		  
	pid 		=> "gasket",			
	me_link		=> true,	
	me_use 		=> true
);

$siteMenu[] = array(mCode => "201010",	title => "GAMBIT", 			url => $routeName."/gambit.php", pid => "gambit", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201020",	title => "NICHIAS", 		url => $routeName."/nichias.php", pid => "nichias", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201030",	title => "VALQUA", 			url => $routeName."/valqua.php", pid => "valqua", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201040",	title => "GARLOCK", 		url => $routeName."/garlock.php", pid => "garlock", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201050",	title => "KLINGER", 		url => $routeName."/klinger.php", pid => "klinger", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201060",	title => "FRENZELIT", 		url => $routeName."/frenzelit.php", pid => "frenzelit", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201070",	title => "DONIT TESNIT", 	url => $routeName."/donit.php", pid => "donit", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201080",	title => "TEADIT", 			url => $routeName."/teadit.php", pid => "teadit", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "201090",	title => "WOOJU SEA", 		url => $routeName."/woojuseal.php", pid => "woojuseal", me_link => true, me_use => true);

$siteMenu[] = array(
	mCode 		=> "2020",	
	title 		=> "GLAND PACKING",		
	url 		=> $routeName."/gland_packing.php",		  
	pid 		=> "gland_packing",			
	me_link		=> true,	
	me_use 		=> true
);

$siteMenu[] = array(mCode => "202010",	title => "테프론 섬유패킹", 					url => $routeName."/wj4120.php", pid => "wj4120", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202020",	title => "윤활유입 테프론 섬유패킹", 			url => $routeName."/wj4130.php", pid => "wj4130", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202030",	title => "슈퍼프론(흑연입 테프론 섬유패킹)", 	url => $routeName."/wj4140.php", pid => "wj4140", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202040",	title => "해치 커버 패킹", 						url => $routeName."/wj4150.php", pid => "wj4150", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202050",	title => "테프론 함침 아크릴 섬유패킹", 		url => $routeName."/wj4160.php", pid => "wj4160", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202060",	title => "탄소 섬유 패킹", 						url => $routeName."/wj1840.php", pid => "wj1840", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202070",	title => "탄화 섬유 패킹 시리즈", 				url => $routeName."/wj1841.php", pid => "wj1841", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202080",	title => "아라미드 섬유패킹", 					url => $routeName."/wj4188.php", pid => "wj4188", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "202090",	title => "흑연섬유패킹", 						url => $routeName."/wj8800.php", pid => "wj8800", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "2020a0",	title => "와이어선입 유리섬유패킹", 			url => $routeName."/wj8805.php", pid => "wj8805", me_link => true, me_use => true);


$siteMenu[] = array(
	mCode 		=> "2030",	
	title 		=> "PLASTIC",		
	url 		=> $routeName."/ptfe_product.php",		  
	pid 		=> "ptfe_product",			
	me_link		=> true,	
	me_use 		=> true
);

$siteMenu[] = array(mCode => "203010",	title => "PTFE Product", 			url => $routeName."/ptfe_product.php", pid => "ptfe_product", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "203020",	title => "Spring Energized seal", 	url => $routeName."/spring_energized_seal.php", pid => "spring_energized_seal", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "203030",	title => "PTFE Cushion Gasket", 	url => $routeName."/ptfe_cushion_gasket.php", pid => "ptfe_cushion_gasket", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "203040",	title => "Aladdin Gasket", 			url => $routeName."/aladdin_gasket.php", pid => "aladdin_gasket", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "203050",	title => "Expanded PTFE Gasket", 	url => $routeName."/expanded_ptfe_gasket.php", pid => "expanded_ptfe_gasket", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "203060",	title => "Super Seal", 				url => $routeName."/super_seal.php", pid => "super_seal", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "203070",	title => "PTFE Sliding Plate", 		url => $routeName."/ptfe_sliding_plate.php", pid => "ptfe_sliding_plate", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "203080",	title => "고기능성 수지제품", 		url => $routeName."/high_functional_resin.php", pid => "high_functional_resin", me_link => true, me_use => true);


$siteMenu[] = array(
	mCode 		=> "2040",	
	title 		=> "METAL GASKET",		
	url 		=> $routeName."/ringjoint2.php",		  
	pid 		=> "ringjoint2",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "204010",	title => "Ring Joint Gasket", 			url => $routeName."/ringjoint2.php", pid => "ringjoint2", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "204020",	title => "Metal O-Ring Gasket", 	url => $routeName."/Metal_O_Ring.php", pid => "Metal_O_Ring", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "204030",	title => "Laser Products", 	url => $routeName."/laser_products.php", pid => "laser_products", me_link => true, me_use => true);



$siteMenu[] = array(
	mCode 		=> "2050",	
	title 		=> "SEMI-METALLIC GASKET",		
	url 		=> $routeName."/spiral.php",		  
	pid 		=> "spiral",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "205010",	title => "Spiral Wound Gasket", 	url => $routeName."/spiral.php", pid => "spiral", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "205020",	title => "Kammprofile Gasket", 		url => $routeName."/kammprofile2.php", pid => "kammprofile2", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "205030",	title => "Double Jacket Gasket", 	url => $routeName."/double_jacket.php", pid => "double_jacket", me_link => true, me_use => true);


$siteMenu[] = array(
	mCode 		=> "2060",	
	title 		=> "GRAPHITE 관련품",		
	url 		=> $routeName."/graphite_voc.php",		  
	pid 		=> "graphite_voc",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "206010",	title => "Graphite VOC Packing", 	url => $routeName."/graphite_voc.php", pid => "graphite_voc", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "206020",	title => "Graphite", 				url => $routeName."/graphite2.php", pid => "graphite2", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "206030",	title => "Graphite Crinkled Tape", 	url => $routeName."/graphite_crinkled.php", pid => "graphite_crinkled", me_link => true, me_use => true);


$siteMenu[] = array(
	mCode 		=> "2070",	
	title 		=> "Rubber Sheet &amp; Gasket",		
	url 		=> $routeName."/rubber_sheet_gasket.php",		  
	pid 		=> "rubber_sheet_gasket",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(mCode => "207010",	title => "Rubber Sheet &amp; Gasket", 		url => $routeName."/rubber_sheet_gasket.php", pid => "rubber_sheet_gasket", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "207020",	title => "Bonded Seals", 					url => $routeName."/bonded_seals.php", pid => "bonded_seals", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "207030",	title => "Plate Heat Exchanger Gasket", 	url => $routeName."/plate_heat_exchanger_gasket.php", pid => "plate_heat_exchanger_gasket", me_link => true, me_use => true);


$siteMenu[] = array(
	mCode 		=> "2080",	
	title 		=> "Insulation Sets",		
	url 		=> $routeName."/insulation_sets.php",		  
	pid 		=> "insulation_sets",			
	me_link		=> true,	
	me_use 		=> true
);

$siteMenu[] = array(
	mCode 		=> "2090",	
	title 		=> "Insulation Textiles",		
	url 		=> $routeName."/glass_fiber.php",		  
	pid 		=> "glass_fiber",			
	me_link		=> true,	
	me_use 		=> true
);

$siteMenu[] = array(mCode => "209010",	title => "Glass Fiber Product", 		url => $routeName."/glass_fiber.php", pid => "glass_fiber", me_link => true, me_use => true);
$siteMenu[] = array(mCode => "209020",	title => "Ceramic Fiber Product", 		url => $routeName."/ceramic_fiber.php", pid => "ceramic_fiber", me_link => true, me_use => true);


$siteMenu[] = array(
	mCode 		=> "20a0",	
	title 		=> "FLANGE SAFETY SHEET",		
	url 		=> $routeName."/wj2050.php",		  
	pid 		=> "wj2050",			
	me_link		=> true,	
	me_use 		=> true
);



$routeName = G5_LANG_URL."/catal";
$siteMenu[] = array(
	mCode 		=> "30",	
	title 		=> "카탈로그",
	subTitle	=> "catalogue",		
	url 		=> $routeName."/catal.php",		  
	pid 		=> "",	
	makeFolder	=> "catal",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "3010",	
	title 		=> "카탈로그 보기",		
	url 		=> $routeName."/catal.php",		  
	pid 		=> "catal",			
	me_link		=> true,	
	me_use 		=> true
);


// 메일폼
$routeName = G5_LANG_URL."/estimate";
$siteMenu[] = array(
	mCode 		=> "40",	
	title 		=> "견적문의",	
	subTitle	=> "estimate",	
	url 		=> $routeName."/estimate.php",		  
	pid 		=> "",
	makeFolder	=> "estimate",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "4010",	
	title 		=> "온라인 견적문의",		
	url 		=> $routeName."/estimate.php",		  
	pid 		=> "estimate",			
	me_link		=> true,	
	me_use 		=> true
);



$routeName = G5_LANG_URL."/customer";
$siteMenu[] = array(
	mCode 		=> "50",	
	title 		=> "고객센터",	
	subTitle	=> "customer",	
	url 		=> G5_BBS_URL."/board.php?bo_table=notice&lang=ko",		  
	pid 		=> "",
	makeFolder	=> "customer",
	me_link		=> false,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "5010",	
	title 		=> "뉴스센터",		
	url 		=> G5_BBS_URL."/board.php?bo_table=notice&lang=ko",		  
	pid 		=> "notice",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "5020",	
	title 		=> "기술자료실",		
	url 		=> G5_BBS_URL."/board.php?bo_table=free&lang=ko",		  
	pid 		=> "free",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "5030",	
	title 		=> "고객문의",		
	url 		=> G5_BBS_URL."/board.php?bo_table=customer&lang=ko",		  
	pid 		=> "customer",			
	me_link		=> true,	
	me_use 		=> true
);
$siteMenu[] = array(
	mCode 		=> "5040",	
	title 		=> "사이트맵",		
	url 		=> $routeName."/sitemap.php",		  
	pid 		=> "sitemap",			
	me_link		=> true,	
	me_use 		=> true
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

echo "<!-- pre nav1st>";
print_r($nav1st);
echo "</pre -->";


?>