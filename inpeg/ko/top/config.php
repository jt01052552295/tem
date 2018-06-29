<?php 

/***
 * 사이트 정보 페이지
 * title = '회사 명';
 * keywords = '검색어 이름';
 * 
 * db = 'DB 연결 안하면 false DB 연결 하면 true';
 * 
 * MEMO 
 * 기본툴
 * 
 * **/
/***
 *
 * 작업시작일 :
 * 작업완료일 :
 * 작업지시자 :
 *
 ***/

/* 입력항목 */
$site['title'] = "(주)인펙비전";
$site['keywords'] = "";
$site['email'] = "checkmate99@naver.com";

$site['db'] = false;
$site['device'] = "pc";


$url_info['path'] = str_replace('\\', '/', dirname(__FILE__));
$tilde_remove = preg_replace('/^\/\~[^\/]+(.*)$/', '$1', $_SERVER['SCRIPT_NAME']);
$document_root = str_replace($tilde_remove, '', $_SERVER['SCRIPT_FILENAME']);
$root = str_replace($document_root, '', $url_info['path']);
$port = $_SERVER['SERVER_PORT'] != 80 ? ':'.$_SERVER['SERVER_PORT'] : '';
$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') ? 's' : '') . '://';
$user = str_replace(str_replace($document_root, '', $_SERVER['SCRIPT_FILENAME']), '', $_SERVER['SCRIPT_NAME']);
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
if(isset($_SERVER['HTTP_HOST']) && preg_match('/:[0-9]+$/', $host)) $host = preg_replace('/:[0-9]+$/', '', $host);
//TOP의 상위로 이동
$root = explode("/",$root);
array_pop($root);
$root = implode("/",(array)$root)."/";

$url_info['url'] = $http.$host.$port.$user.$root;
$url_info['top'] = $http.$host.$port.$user;
//$inpo = $url_info['url'];
$site['url'] = $host.$port.$user;

define('KI_URL', $url_info['url']);
define('KI_TOP_URL', $url_info['url'].'top/');
define('KI_IMG_URL', $url_info['url'].'images/');
define('ROOT_URL', $url_info['top']);
define('KI_TIME_YMDHIS',    date('Y-m-d H:i:s', time()));
define('KI_TIME_YMD',       str_replace( array("-",":"," "), "", KI_TIME_YMDHIS));

/* 그누보드 게시판 메뉴 연결 */
if($bo_table !=""){
	$code_high = $board['gr_id'];
	$codename = $bo_table;
	$code_sub_1 = $bo_table;
}
?>
