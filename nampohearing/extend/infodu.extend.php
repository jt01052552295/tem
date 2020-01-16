<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가




$status_lang = array( 
    "ko",
    "en",
	"jp",
	"cn",
);
$g5['lang_list'] = array( 
    "ko" 	=> "kor",
    "en" 	=> "eng",
	"jp"	=> "jpn",
	"cn"	=> "chn",
);

$g5['lang_name_list_en'] = array( 
    "ko_KR" 	=> "Korean",
    "en_US" 	=> "English",
	"ja_JP"	   => "Japanese",
	"zh_CN"	   => "Chinese",
);

if(in_array($lang, $status_lang)){
	define('G5_LANG',      $lang);
	set_session('ss_lang', G5_LANG);
} else if(isset($lang)){
	define('G5_LANG',      $lang);
	set_session('ss_lang', G5_LANG);
}else if (isset($_SESSION['ss_lang'])){
	define('G5_LANG',     get_session('ss_lang'));
} else {
	define('G5_LANG',     'ko');
	set_session('ss_lang', G5_LANG);
}


/* 기본설정 */
if(G5_LANG=='en'){
	$siteTitle = "";
	$siteKeyword = "";
	$siteLang = "en";
} else if(G5_LANG=='cn'){
	$siteTitle = "";
	$siteKeyword = "";
	$siteLang = "zh";
} else if(G5_LANG=='jp'){
	$siteTitle = "";
	$siteKeyword = "";
	 $siteLang = "ja";
} else {
	$siteTitle = "";
	$siteKeyword = "";
	$siteLang = "ko";
}

$infodu = array();
$infodu['title'] = $siteTitle;
$infodu['keywords'] = $siteKeyword;
$infodu['email'] = "";
$infodu['device'] = "pc";
$infodu['language'] =  $siteLang;

////////////////// 운영자 정보
$infodu['admin']['homepage']    = ""; /// 홈페이지주소를 입력해주세요

if (function_exists('get_member')) {
	$master = get_member('master');
}

if($master) {
	$infodu['admin']['email']		= $master['mb_email'];
	$infodu['admin']['name']		= $master['mb_name'];
	$infodu['admin']['company']     = $master['mb_name']; 

} else {
	$infodu['admin']['email']   	= "korea@koreaind.com"; // natotrade@daum.net
	$infodu['admin']['name'] 		= "운영자";
	$infodu['admin']['company']     =  $siteTitle; //// 회사명을 입력해주세요

}

// 페이지경로
define('G5_PAGE_PATH',    G5_PATH.'/page');
define('G5_PAGE_URL',     G5_URL.'/page');

// 다국어관련
define('G5_LANG_PATH',        G5_PATH.'/language');
include_once(G5_LANG_PATH.'/'.G5_LANG.'.php'); 			// 불러올 언어설정파일
include_once(G5_LANG_PATH.'/'.G5_LANG.'.menu.php'); 	// 불러올 메뉴설정파일


?>