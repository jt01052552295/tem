<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


$http_host = $_SERVER['HTTP_HOST'];
$request_uri = $_SERVER['REQUEST_URI'];
$c_url = 'http://' . $http_host . $request_uri;
$check_lang_url = str_replace(G5_URL, "", $c_url);

$url_pieces = explode("/", $check_lang_url);
if($url_pieces[1]){
	define('G5_LANG',      $url_pieces[1]);
} else {
	define('G5_LANG',     'ko');
}



define('G5_LANG_DIR',      	  G5_LANG);


// URL 은 브라우저상에서의 경로 (도메인으로 부터의)
define('G5_LANG_URL',      G5_URL.'/'.G5_LANG_DIR);

define('G5_LANG_IMG_URL',        G5_LANG_URL.'/asset/images');
define('G5_LANG_CSS_URL',        G5_LANG_URL.'/asset/css');
define('G5_LANG_JS_URL',         G5_LANG_URL.'/asset/js');


define('G5_LANG_MOBILE_URL',      	 G5_LANG_MOBILE_URL.'/'.G5_LANG_DIR);

define('G5_LANG_MOBILE_IMG_URL',        G5_LANG_MOBILE_URL.'/asset/images');
define('G5_LANG_MOBILE_CSS_URL',        G5_LANG_MOBILE_URL.'/asset/css');
define('G5_LANG_MOBILE_JS_URL',         G5_LANG_MOBILE_URL.'/asset/js');



// PATH 는 서버상에서의 절대경로
define('G5_LANG_PATH',     G5_PATH.'/'.G5_LANG_DIR);
define('G5_LANG_MOBILE_PATH',    G5_PATH.'/'.G5_MOBILE_DIR.'/'.G5_LANG_DIR);

?>