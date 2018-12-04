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


define('G5_LANG_DIR',         G5_LANG);
// URL 은 브라우저상에서의 경로 (도메인으로 부터의)
define('G5_LANG_URL',            G5_URL.'/'.G5_LANG_DIR);
define('G5_LANG_IMG_URL',        G5_LANG_URL.'/asset/img');
define('G5_LANG_CSS_URL',        G5_LANG_URL.'/asset/css');
define('G5_LANG_JS_URL',         G5_LANG_URL.'/asset/js');
define('G5_LANG_MOBILE_URL',         G5_LANG_MOBILE_URL.'/'.G5_LANG_DIR);
define('G5_LANG_MOBILE_IMG_URL',        G5_LANG_MOBILE_URL.'/asset/img');
define('G5_LANG_MOBILE_CSS_URL',        G5_LANG_MOBILE_URL.'/asset/css');
define('G5_LANG_MOBILE_JS_URL',         G5_LANG_MOBILE_URL.'/asset/js');
// PATH 는 서버상에서의 절대경로
define('G5_LANG_PATH',     G5_PATH.'/'.G5_LANG_DIR);
define('G5_LANG_MOBILE_PATH',    G5_PATH.'/'.G5_MOBILE_DIR.'/'.G5_LANG_DIR);



/* 기본설정 */
$infodu = array();
$infodu['title'] = "터머솔";
$infodu['keywords'] = "";
$infodu['email'] = "";
$infodu['device'] = "pc";

////////////////// 운영자 정보
$infodu['admin']['homepage']    = "turmasol.com"; /// 홈페이지주소를 입력해주세요

if (function_exists('get_member')) {
	$master = get_member('master');
}

if($master) {
	$infodu['admin']['email']		= $master['mb_email'];
	$infodu['admin']['name']		= $master['mb_name'];
	$infodu['admin']['company']     = $master['mb_name']; 

} else {
	$infodu['admin']['email']   	= "korea@koreaind.com";
	$infodu['admin']['name'] 		= "운영자";
	$infodu['admin']['company']     = "Turmasol co.,ltd."; //// 회사명을 입력해주세요

}



// 우클릭,드레그 금지
$infodu['noright']=" oncontextmenu=\"return false\" ondragstart=\"return false\" onselectstart=\"return false\"";
$infodu['noright']=""; //우클릭,드레그 금지 설정시 //$noright

// echo G5_LANG_PATH;

//메뉴 설정
include_once(G5_LANG_PATH.'/_menu.php');



?>