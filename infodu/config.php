<?php 
header("Content-Type: text/html; charset=UTF-8");
extract($_POST);
extract($_GET);
if (PHP_VERSION >= '5.1.0') {
    //if (function_exists("date_default_timezone_set")) date_default_timezone_set("Asia/Seoul");
    date_default_timezone_set("Asia/Seoul");
}
/* 기본설정 */
$infodu = array();
$infodu['title'] = "한국산업정보사";
$infodu['keywords'] = "";
$infodu['email'] = "";
$infodu['device'] = "pc";

////////////////// 운영자 정보
$infodu['admin']['name'] = "운영자";
$infodu['admin']['id'] = "master";
$infodu['admin']['pwd'] = "1111";
$infodu['admin']['crypt'] = crypt($infodu['admin']['pwd'], 15);
$infodu['admin']['company']     = "한국산업정보사"; //// 회사명을 입력해주세요
$infodu['admin']['email']   = "khs@koreaind.com"; /// 이메일을 입력해주세요
//$infodu['admin']['email']   = "korea@koreaind.com"; /// 이메일을 입력해주세요
$infodu['admin']['homepage']    = "koreaind.com"; /// 홈페이지주소를 입력해주세요


// 우클릭,드레그 금지
$infodu['noright']=" oncontextmenu=\"return false\" ondragstart=\"return false\" onselectstart=\"return false\"";
$infodu['noright']=""; //우클릭,드레그 금지 설정시 //$noright

// 경로 설정
$settingURL['path'] = str_replace('\\', '/', dirname(__FILE__));
$tilde_remove = preg_replace('/^\/\~[^\/]+(.*)$/', '$1', $_SERVER['SCRIPT_NAME']);
$document_root = str_replace($tilde_remove, '', $_SERVER['SCRIPT_FILENAME']);
$root = str_replace($document_root, '', $settingURL['path']);
$port = $_SERVER['SERVER_PORT'] != 80 ? ':'.$_SERVER['SERVER_PORT'] : '';
$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') ? 's' : '') . '://';
$user = str_replace(str_replace($document_root, '', $_SERVER['SCRIPT_FILENAME']), '', $_SERVER['SCRIPT_NAME']);
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
if(isset($_SERVER['HTTP_HOST']) && preg_match('/:[0-9]+$/', $host))
    $host = preg_replace('/:[0-9]+$/', '', $host);
$settingURL['url'] = $http.$host.$port.$user.$root;
$settingURL['top'] = $http.$host.$port.$user;

define('ROOT_URL', $settingURL['top']);

if (isset($settingURL['url']))
    define('KI_URL', $settingURL['url']);
else
    define('KI_URL', '');

if (isset($settingURL['path'])) {
    define('KI_PATH', $settingURL['path']);
} else {
    define('KI_PATH', '');
}


// 모바일 기기 체크
define('INFO_USE_MOBILE', false); 
$infodu['is_mobile'] = false;
if (INFO_USE_MOBILE) {
    if ($_REQUEST['device']=='pc') {
        $infodu['is_mobile'] = false;
    } else if ($_REQUEST['device']=='mobile') {
        $infodu['is_mobile'] = true;
    } else if (isset($_SESSION['ss_chk_mobile'])) {
        $infodu['is_mobile'] = $_SESSION['ss_chk_mobile'];
    } else if (preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|BB10|android|sony/i', $_SERVER['HTTP_USER_AGENT'])) {
        $infodu['is_mobile'] = true;
    } 
} else {
   $infodu['is_mobile'] = false;
}

$_SESSION['ss_chk_mobile'] = $infodu['is_mobile'];
define('KI_IS_MOBILE', $infodu['is_mobile']);

if (KI_IS_MOBILE) {
    define('KI_MOBILE_PATH',     KI_PATH.'/m');
    define('KI_MOBILE_URL',      KI_URL.'/m');
    define('KI_IMG_MURL',        KI_MOBILE_URL.'/images');
    define('KI_CSS_MURL',        KI_MOBILE_URL.'/css');
    define('KI_JS_MURL',         KI_MOBILE_URL.'/js');
}

// URL 은 브라우저상에서의 경로 (도메인으로 부터의)
define('KI_IMG_URL',        KI_URL.'/asset/images');
define('KI_CSS_URL',        KI_URL.'/asset/css');
define('KI_JS_URL',         KI_URL.'/asset/js');

define('KI_TIME_YMDHIS',    date('Y-m-d H:i:s', time()));
define('KI_TIME_YMD',       str_replace( array("-",":"," "), "", KI_TIME_YMDHIS));


// 게시판 사용시 true, 아니면 false, chk_gnu는 그누보드 설정 중복 불러오기 피하기 위함.
$infodu['db'] = false; 
if($infodu['db'] and $chk_gnu == false):
    // if(defined('INDEX_ROOT')){
    //     include_once('../board/common.php');
    // } else {
    //     if (KI_IS_MOBILE) {
    //         include_once('../../../board/common.php');
    //     } else {
    //         include_once('../../board/common.php');
    //     }
    // }
endif;

//메뉴 설정
include_once(KI_PATH.'/_menu.php');


//포트폴리오 설정
include_once(KI_PATH.'/_portfolio.php');

unset($settingURL);



?>