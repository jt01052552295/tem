<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


$http_host = $_SERVER['HTTP_HOST'];
$request_uri = $_SERVER['REQUEST_URI'];
$c_url = 'http://' . $http_host . $request_uri;
$check_lang_url = str_replace(G5_URL, "", $c_url);
$url_pieces = explode("/", $check_lang_url);


$status_lang = array('ko','en','jp','cn');

if(in_array($url_pieces[1], $status_lang)){
	define('G5_LANG',      $url_pieces[1]);
	set_session('ss_lang', G5_LANG);
} else if(isset($lang)){
	define('G5_LANG',      $lang);
	set_session('ss_lang', G5_LANG);
} else if (isset($_SESSION['ss_lang'])){
	define('G5_LANG',     get_session('ss_lang'));
} else {
	define('G5_LANG',     'ko');
	set_session('ss_lang', G5_LANG);
}

 //echo G5_PATH;



if(strpos(G5_URL, 'board') !== false){
	$tempU = str_replace('/board', '', G5_URL);
	//echo $tempU."<Br>";
	define('G5_CUSTOM_URL',      $tempU);
} else {
	define('G5_CUSTOM_URL',      G5_URL);
}
if(strpos(G5_PATH, 'board') !== false){
	$tempPA = str_replace('/board', '', G5_PATH);
	//echo $tempPA;  
	define('G5_CUSTOM_PATH',      $tempPA);

} else {
	define('G5_CUSTOM_PATH',      G5_PATH);	
}





define('G5_LANG_DIR',         G5_LANG);
// URL 은 브라우저상에서의 경로 (도메인으로 부터의)
define('G5_LANG_URL',            G5_CUSTOM_URL.'/'.G5_LANG_DIR);
define('G5_LANG_IMG_URL',        G5_LANG_URL.'/asset/img');
define('G5_LANG_CSS_URL',        G5_LANG_URL.'/asset/css');
define('G5_LANG_JS_URL',         G5_LANG_URL.'/asset/js');
define('G5_LANG_MOBILE_URL',         G5_LANG_MOBILE_URL.'/'.G5_LANG_DIR);
define('G5_LANG_MOBILE_IMG_URL',        G5_LANG_MOBILE_URL.'/asset/img');
define('G5_LANG_MOBILE_CSS_URL',        G5_LANG_MOBILE_URL.'/asset/css');
define('G5_LANG_MOBILE_JS_URL',         G5_LANG_MOBILE_URL.'/asset/js');
// PATH 는 서버상에서의 절대경로
define('G5_LANG_PATH',     G5_CUSTOM_PATH.'/'.G5_LANG_DIR);
define('G5_LANG_MOBILE_PATH',    G5_CUSTOM_PATH.'/'.G5_MOBILE_DIR.'/'.G5_LANG_DIR);



/* 기본설정 */
$infodu = array();
$infodu['title'] = "삼부고무공업(주)";
$infodu['keywords'] = "";
$infodu['email'] = "";
$infodu['device'] = "pc";

////////////////// 운영자 정보
$infodu['admin']['homepage']    = "samburubber.koreasme.com"; /// 홈페이지주소를 입력해주세요

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
	$infodu['admin']['company']     = "Sambu Rubber Industrial"; //// 회사명을 입력해주세요

}

//메뉴 설정
if (G5_IS_MOBILE) {
	include_once(G5_LANG_MOBILE_PATH.'/_menu.php');
} else {
	include_once(G5_LANG_PATH.'/_menu.php');
}


?>