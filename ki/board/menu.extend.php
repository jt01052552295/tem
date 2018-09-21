<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
/*
$_SERVER['HTTP_HOST'];    //현재 페이지의 호스트값 불러오기
$_SERVER['REQUEST_URI']; // 호스트를 제외한 나머지 주소
$_SERVER['QUERY_STRING'];  // 현재 페이지의 쿼리 스트링 값
bo_table, co_id, ca_id, 
*/



$siteMenu = array();

$siteMenu[] = array(mCode => "10",	title => "회사소개",		url => G5_URL."/company/company.php",		  pid => "list",			me_link=>true,	me_use => true);
$siteMenu[] = array(mCode => "1010",title => "회사개요",		url => G5_URL."/company/company.php",		  pid => "company",	  me_link=>true,	me_use => true);
$siteMenu[] = array(mCode => "1020",title => "오시는길",		url => G5_URL."/company/location.php",		pid => "location",  me_link=>true,	me_use => true);
$siteMenu[] = array(mCode => "20",	title => "제품소개",		url => G5_URL."/products/chartplotters_sonar/chartplotters_sonar.php",		pid => "products",	me_link=>false,	  me_use => true);


$siteMenu[] = array(mCode => "2010",    title => "차트 플로터/ 수증 음파 탐지기 MFD",  url => G5_URL."/products/chartplotters_sonar/chartplotters_sonar.php",   pid => "chartplotters_sonar",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201011",  title => "AQUAMAP 1022xs",        url => G5_URL."/products/chartplotters_sonar/aquamap_1022xs.php",   pid => "aquamap_1022xs",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201012",  title => "AQUAMAP 1022",          url => G5_URL."/products/chartplotters_sonar/aquamap_1022.php",     pid => "aquamap_1022",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201013",  title => "AQUAMAP 1222",          url => G5_URL."/products/chartplotters_sonar/aquamap_1222.php",     pid => "aquamap_1222",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201014",  title => "AQUAMAP 1222xs",        url => G5_URL."/products/chartplotters_sonar/aquamap_1222xs.php",   pid => "aquamap_1222xs",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201015",  title => "EchoMAP™ CHIRP 75cv",    url => G5_URL."/products/chartplotters_sonar/echomap_75cv.php",   pid => "echomap_75cv",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201016",  title => "EchoMAP™ CHIRP 45cv",    url => G5_URL."/products/chartplotters_sonar/echomap_45cv.php",   pid => "echomap_45cv",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201017",  title => "EchoMAP™ CHIRP 75sv",    url => G5_URL."/products/chartplotters_sonar/echomap_75sv.php",   pid => "echomap_75sv",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201018",  title => "EchoMAP™ CHIRP 55cv",    url => G5_URL."/products/chartplotters_sonar/echomap_55cv.php",   pid => "echomap_55cv",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201019",  title => "EchoMAP™ CHIRP 95sv",    url => G5_URL."/products/chartplotters_sonar/echomap_95sv.php",   pid => "echomap_95sv",  me_link=>true,  me_use => true);


$siteMenu[] = array(mCode => "2011",    title => "수중 음파 탐지기 모듈",            url => G5_URL."/products/sounar_modules/sounar_modules.php", pid => "sounar_modules",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201111",  title => "GSD™ 25",                       url => G5_URL."/products/sounar_modules/gsd_25.php",          pid => "gsd_25",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201112",  title => "GCV™ 10 Scanning Sonar Module", url => G5_URL."/products/sounar_modules/gcv_10.php",          pid => "gcv_10",  me_link=>true,  me_use => true);


$siteMenu[] = array(mCode => "2012",    title => "Panoptix",                                                  url => G5_URL."/products/panoptix/panoptix.php",   pid => "panoptix",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201211",  title => "Panoptix LiveScope™ System",                                url => G5_URL."/products/panoptix/panoptix_live.php",     pid => "panoptix_live",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201212",  title => "Panoptix™ PS51-TH",                                         url => G5_URL."/products/panoptix/panoptix_ps51.php",     pid => "panoptix_ps51",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201213",  title => "Panoptix™ PS31 Forward Transducer",                         url => G5_URL."/products/panoptix/panoptix_ps31.php",     pid => "panoptix_ps31",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201214",  title => "Panoptix™ PS60 Thru-hull Down Transducer",                  url => G5_URL."/products/panoptix/panoptix_ps60.php",     pid => "panoptix_ps60",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201215",  title => "Panoptix™ PS21-TR Forward Trolling Motor Mount Transducer", url => G5_URL."/products/panoptix/panoptix_ps21tr.php",   pid => "panoptix_ps21tr",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201216",  title => "Panoptix™ PS21-TM Forward Transom Mount Transducer",        url => G5_URL."/products/panoptix/panoptix_ps21tm.php",   pid => "panoptix_ps21tm",  me_link=>true,  me_use => true);


$siteMenu[] = array(mCode => "2013",    title => "어군 탐지기/ GPS 콤보",          url => G5_URL."/products/fishfinder_gps_combos/fgc.php",    pid => "fgc",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201311",  title => "STRIKER™ Plus 5cv",              url => G5_URL."/products/fishfinder_gps_combos/st5cv.php",  pid => "st5cv",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201312",  title => "STRIKER™ Plus 7cv",              url => G5_URL."/products/fishfinder_gps_combos/st7cv.php",  pid => "st7cv",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201313",  title => "STRIKER™ Plus 7sv",              url => G5_URL."/products/fishfinder_gps_combos/st7sv.php",  pid => "st7sv",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201314",  title => "Portable Fishing Kit",           url => G5_URL."/products/fishfinder_gps_combos/pfk.php",    pid => "pfk",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201315",  title => "STRIKER™ 4",                     url => G5_URL."/products/fishfinder_gps_combos/st4.php",    pid => "st4",  me_link=>true,  me_use => true);


$siteMenu[] = array(mCode => "2014",    title => "변환기",                                                         url => G5_URL."/products/transducers/transducers.php",   pid => "transducers",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201411",  title => "12-pin transducer Extension cable (10ft)",                       url => G5_URL."/products/transducers/transducers1.php",  pid => "transducers1",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201412",  title => "6-pin Transducer to 8-pin Sounder Adapter Wire Block",           url => G5_URL."/products/transducers/transducers2.php",  pid => "transducers2",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201413",  title => "Smart in-hull Mount Adjustable Transducer with Depth (NMEA 2000®) - Airmar P79",  url => G5_URL."/products/transducers/transducers3.php",  pid => "transducers3",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201414",  title => "Bronze Thru-hull Mount Transducer with Depth & Temperature (8-pin) – Airmar B258", url => G5_URL."/products/transducers/transducers4.php",  pid => "transducers4",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201415",  title => "6-pin Transducer to 4-pin Sounder Adapter Cable",                                   url => G5_URL."/products/transducers/transducers5.php",  pid => "transducers5",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201416",  title => "Transom Mount Transducer with Depth & Temperature, 8-pin (Dual Beam) – Garmin Design", url => G5_URL."/products/transducers/transducers6.php",  pid => "transducers6",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201417",  title => "Transom Mount Transducer with Depth & Temperature, 4-pin (Dual Beam) – Garmin Design", url => G5_URL."/products/transducers/transducers7.php",  pid => "transducers7",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201418",  title => "Bronze Thru-hull Mount Transducer with Depth & Temperature – Airmar B265LH",          url => G5_URL."/products/transducers/transducers8.php",  pid => "transducers8",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201419",  title => "Stainless Steel Thru-Hull Mount Transducer with Depth & Temperature – Airmar SS502",  url => G5_URL."/products/transducers/transducers9.php",  pid => "transducers9",  me_link=>true,  me_use => true);


$siteMenu[] = array(mCode => "2015",    title => "레이더",                                      url => G5_URL."/products/radar/radar.php",      pid => "radar",       me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201511",  title => "GMR™ 426 xHD2 Open Array Radar and Pedestal", url => G5_URL."/products/radar/gmr_426xhd.php", pid => "gmr_426xhd",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201512",  title => "GMR™ 24 xHD Radome",                          url => G5_URL."/products/radar/gmr_24xhd.php",  pid => "gmr_24xhd",   me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201513",  title => "GMR™ 18 HD Radome",                           url => G5_URL."/products/radar/gmr_18hd.php",   pid => "gmr_18hd",    me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "201514",  title => "GMR™ 18 xHD Radome",                          url => G5_URL."/products/radar/gmr_18xhd.php",  pid => "gmr_18xhd",   me_link=>true,  me_use => true);



// $siteMenu[] = array(mCode => "2016",  title => "자동조종장치",                         url => G5_URL."/products/products.php",   pid => "products",  me_link=>true,  me_use => true);
// $siteMenu[] = array(mCode => "2017",  title => "통신",                                 url => G5_URL."/products/products.php",   pid => "products",  me_link=>true,  me_use => true);
// $siteMenu[] = array(mCode => "2018",  title => "계기",                                 url => G5_URL."/products/products.php",   pid => "products",  me_link=>true,  me_use => true);
// $siteMenu[] = array(mCode => "2019",  title => "바람 센서",                            url => G5_URL."/products/products.php",   pid => "products",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "2020",    title => "안테나 & 센서",                            url => G5_URL."/products/antennas_sensors/antennas.php",   pid => "antennas",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202011",  title => "GTV5 Satellite TV Dome Powered by KVH®",   url => G5_URL."/products/antennas_sensors/gtv5.php",  pid => "gtv5",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202012",  title => "GTV6 Satellite TV Dome Powered by KVH®",   url => G5_URL."/products/antennas_sensors/gtv6.php",  pid => "gtv6",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202013",  title => "GA38 GPS Pole Mount Antenna",              url => G5_URL."/products/antennas_sensors/ga38gpspole.php",  pid => "ga38gpspole",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202014",  title => "GPS 19x NMEA 2000®",                       url => G5_URL."/products/antennas_sensors/gps19xnmea.php",    pid => "gps19xnmea",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202015",  title => "GPS 19x HVS",                              url => G5_URL."/products/antennas_sensors/gps19hvs.php",    pid => "gps19hvs",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202016",  title => "GNT™ 10 NMEA 2000® Transceiver",           url => G5_URL."/products/antennas_sensors/gnt10.php",  pid => "gnt10",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202017",  title => "GTEMP10-TH Thru-hull Temp Sensor",         url => G5_URL."/products/antennas_sensors/gtemp10.php",  pid => "gtemp10",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202018",  title => "GA™ 38 GPS/GLONASS Antenna",               url => G5_URL."/products/antennas_sensors/ga38gpsglonass.php",  pid => "ga38gpsglonass",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202019",  title => "Water Speed Sensor(4-pin)",                url => G5_URL."/products/antennas_sensors/water4pin.php",    pid => "water4pin",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202020",  title => "GA38 GPS Pole Mount Antenna",              url => G5_URL."/products/antennas_sensors/ga38gpspole2.php",    pid => "ga38gpspole2",  me_link=>true,  me_use => true);


$siteMenu[] = array(mCode => "2021",    title => "헨드헬드 & 웨어러블",   url => G5_URL."/products/handhelds/handhelds.php",    pid => "handhelds",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202111",  title => "quatix® 5",             url => G5_URL."/products/handhelds/quatix5.php",      pid => "quatix5",     me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202112",  title => "GPSMAP® 78",            url => G5_URL."/products/handhelds/gpsmap78.php",     pid => "gpsmap78",    me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202113",  title => "quatix™",               url => G5_URL."/products/handhelds/quatix.php",       pid => "quatix",      me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202114",  title => "GPSMAP® 78sc",          url => G5_URL."/products/handhelds/gpsmap78sc.php",   pid => "gpsmap78sc",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202115",  title => "GPSMAP® 78s  SEA",      url => G5_URL."/products/handhelds/gpsmap78s.php",    pid => "gpsmap78s",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202116",  title => "GPS 73",                url => G5_URL."/products/handhelds/gps73.php",        pid => "gps73",       me_link=>true,  me_use => true);




// $siteMenu[] = array(mCode => "2022",  title => "네트워킹",                             url => G5_URL."/products/products.php",   pid => "products",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "2023",    title => "카메라",             url => G5_URL."/products/cameras/cameras.php",   pid => "cameras",  me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202311",  title => "VIRB® Ultra 30",     url => G5_URL."/products/cameras/virb30.php",    pid => "virb30",     me_link=>true,  me_use => true);
$siteMenu[] = array(mCode => "202312",  title => "VIRB® X",            url => G5_URL."/products/cameras/virbx.php",     pid => "virbx",    me_link=>true,  me_use => true);


// $siteMenu[] = array(mCode => "2024",  title => "앱",                                   url => G5_URL."/products/products.php",   pid => "products",  me_link=>true,  me_use => true);





$siteMenu[] = array(mCode => "30",	title => "기술현황",		url => G5_URL."/tech/tech.php",				    pid => "tech",		me_link=>true,	me_use => true, me_mobile_toggle=>'1');
$siteMenu[] = array(mCode => "40",	title => "고객센터",		url => G5_URL."/customer/inquiry.php",		pid => "inquiry",	me_link=>true,	me_use => true, me_mobile_toggle=>'1');


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


$navLinkArr = array();
$k1 = 0;
for($i=0; $i<count($siteMenu); $i++):
  if($siteMenu[$i]['me_link'] == true) { $navLinkArr[$k1] = $siteMenu[$i]; $k1++; }
endfor;


// print_r2($_SERVER);
// $_SERVER['HTTP_HOST'];    //현재 페이지의 호스트값 불러오기  www.jtm.com
// $_SERVER['REQUEST_URI']; // 호스트를 제외한 나머지 주소     /gnu/bbs/board.php?bo_table=free
// $_SERVER['PHP_SELF'];  //  나머지주소에서 쿼리 스트링 뺀 주소 /gnu/bbs/board.php
// $_SERVER['QUERY_STRING'];  // 현재 페이지의 쿼리 스트링 값  bo_table=free

$currentMenuArr = array();
$currentParentArr = array();


$currentPrevArr = array();
$currentNextArr = array();


$breadcrumArr = array();

if($bo_table){

} else if($ca_id){

} else {
}


	$_menu_current = basename($_SERVER['PHP_SELF']);
	$_menu_current_arr = explode(".", $_menu_current );
	$_menu_current_name = $_menu_current_arr[0];
	$full_length_url = $_SERVER['PHP_SELF'];

   foreach ($siteMenu as $key => $val) {
       if ($val['pid'] === $_menu_current_name ) {
          // 현재페이지 
          $currentMenuArr = $val;

          // breadcurm 생성
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