<?php 
if (PHP_VERSION >= '5.1.0') {
    //if (function_exists("date_default_timezone_set")) date_default_timezone_set("Asia/Seoul");
    date_default_timezone_set("Asia/Seoul");
}


/********************
    경로 상수
********************/

/*
보안서버 도메인
회원가입, 글쓰기에 사용되는 https 로 시작되는 주소를 말합니다.
포트가 있다면 도메인 뒤에 :443 과 같이 입력하세요.
보안서버주소가 없다면 공란으로 두시면 되며 보안서버주소 뒤에 / 는 붙이지 않습니다.
입력예) https://www.domain.com:443/gnuboard5
*/
define('G5_DOMAIN', '');
define('G5_HTTPS_DOMAIN', '');

/*
www.sir.kr 과 sir.kr 도메인은 서로 다른 도메인으로 인식합니다. 쿠키를 공유하려면 .sir.kr 과 같이 입력하세요.
이곳에 입력이 없다면 www 붙은 도메인과 그렇지 않은 도메인은 쿠키를 공유하지 않으므로 로그인이 풀릴 수 있습니다.
*/
define('G5_COOKIE_DOMAIN',  '');

define('G5_ADMIN_DIR',      'adm');
define('G5_BBS_DIR',        'bbs');
define('G5_CSS_DIR',        'css');
define('G5_DATA_DIR',       'data');
define('G5_EXTEND_DIR',     'extend');
define('G5_IMG_DIR',        'img');
define('G5_JS_DIR',         'js');
define('G5_LIB_DIR',        'lib');
define('G5_PLUGIN_DIR',     'plugin');
define('G5_SKIN_DIR',       'skin');
define('G5_EDITOR_DIR',     'editor');
define('G5_MOBILE_DIR',     'mobile');
define('G5_OKNAME_DIR',     'okname');

define('G5_KCPCERT_DIR',    'kcpcert');
define('G5_LGXPAY_DIR',     'lgxpay');

define('G5_SNS_DIR',        'sns');
define('G5_SYNDI_DIR',      'syndi');
define('G5_PHPMAILER_DIR',  'PHPMailer');
define('G5_SESSION_DIR',    'session');
define('G5_THEME_DIR',      'theme');

// URL 은 브라우저상에서의 경로 (도메인으로 부터의)
if (G5_DOMAIN) {
    define('G5_URL', G5_DOMAIN);
} else {
    if (isset($g5_path['url']))
        define('G5_URL', $g5_path['url']);
    else
        define('G5_URL', '');
}

if (isset($g5_path['path'])) {
    define('G5_PATH', $g5_path['path']);
} else {
    define('G5_PATH', '');
}

define('G5_ADMIN_URL',      G5_URL.'/'.G5_ADMIN_DIR);
define('G5_BBS_URL',        G5_URL.'/'.G5_BBS_DIR);
define('G5_CSS_URL',        G5_URL.'/'.G5_CSS_DIR);
define('G5_DATA_URL',       G5_URL.'/'.G5_DATA_DIR);
define('G5_IMG_URL',        G5_URL.'/'.G5_IMG_DIR);
define('G5_JS_URL',         G5_URL.'/'.G5_JS_DIR);
define('G5_SKIN_URL',       G5_URL.'/'.G5_SKIN_DIR);
define('G5_PLUGIN_URL',     G5_URL.'/'.G5_PLUGIN_DIR);
define('G5_EDITOR_URL',     G5_PLUGIN_URL.'/'.G5_EDITOR_DIR);
define('G5_OKNAME_URL',     G5_PLUGIN_URL.'/'.G5_OKNAME_DIR);
define('G5_KCPCERT_URL',    G5_PLUGIN_URL.'/'.G5_KCPCERT_DIR);
define('G5_LGXPAY_URL',     G5_PLUGIN_URL.'/'.G5_LGXPAY_DIR);
define('G5_SNS_URL',        G5_PLUGIN_URL.'/'.G5_SNS_DIR);
define('G5_SYNDI_URL',      G5_PLUGIN_URL.'/'.G5_SYNDI_DIR);
define('G5_MOBILE_URL',     G5_URL.'/'.G5_MOBILE_DIR);

// PATH 는 서버상에서의 절대경로
define('G5_ADMIN_PATH',     G5_PATH.'/'.G5_ADMIN_DIR);
define('G5_BBS_PATH',       G5_PATH.'/'.G5_BBS_DIR);
define('G5_DATA_PATH',      G5_PATH.'/'.G5_DATA_DIR);
define('G5_EXTEND_PATH',    G5_PATH.'/'.G5_EXTEND_DIR);
define('G5_LIB_PATH',       G5_PATH.'/'.G5_LIB_DIR);
define('G5_PLUGIN_PATH',    G5_PATH.'/'.G5_PLUGIN_DIR);
define('G5_SKIN_PATH',      G5_PATH.'/'.G5_SKIN_DIR);
define('G5_MOBILE_PATH',    G5_PATH.'/'.G5_MOBILE_DIR);
define('G5_SESSION_PATH',   G5_DATA_PATH.'/'.G5_SESSION_DIR);
define('G5_EDITOR_PATH',    G5_PLUGIN_PATH.'/'.G5_EDITOR_DIR);
define('G5_OKNAME_PATH',    G5_PLUGIN_PATH.'/'.G5_OKNAME_DIR);

define('G5_KCPCERT_PATH',   G5_PLUGIN_PATH.'/'.G5_KCPCERT_DIR);
define('G5_LGXPAY_PATH',    G5_PLUGIN_PATH.'/'.G5_LGXPAY_DIR);

define('G5_SNS_PATH',       G5_PLUGIN_PATH.'/'.G5_SNS_DIR);
define('G5_SYNDI_PATH',     G5_PLUGIN_PATH.'/'.G5_SYNDI_DIR);
define('G5_PHPMAILER_PATH', G5_PLUGIN_PATH.'/'.G5_PHPMAILER_DIR);


/********************
    시간 상수
********************/
// 서버의 시간과 실제 사용하는 시간이 틀린 경우 수정하세요.
// 하루는 86400 초입니다. 1시간은 3600초
// 6시간이 빠른 경우 time() + (3600 * 6);
// 6시간이 느린 경우 time() - (3600 * 6);
define('G5_SERVER_TIME',    time());
define('G5_TIME_YMDHIS',    date('Y-m-d H:i:s', G5_SERVER_TIME));
define('G5_TIME_YMD',       substr(G5_TIME_YMDHIS, 0, 10));
define('G5_TIME_HIS',       substr(G5_TIME_YMDHIS, 11, 8));

// 퍼미션
define('G5_DIR_PERMISSION',  0755); // 디렉토리 생성시 퍼미션
define('G5_FILE_PERMISSION', 0644); // 파일 생성시 퍼미션

// 모바일 인지 결정 $_SERVER['HTTP_USER_AGENT']
define('G5_MOBILE_AGENT',   'phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|BB10|android|sony');




/* 기본설정 */
$infodu = array();
$infodu['title'] = "DDC 치킨";
$infodu['keywords'] = "";
$infodu['email'] = "";
$infodu['device'] = "pc";

////////////////// 운영자 정보
$infodu['admin']['name'] = "운영자";
$infodu['admin']['id'] = "master";
$infodu['admin']['pwd'] = "1111";
$infodu['admin']['crypt'] = crypt($infodu['admin']['pwd'], 15);
$infodu['admin']['company']     = "삼미유통"; //// 회사명을 입력해주세요
$infodu['admin']['email']   = "checkmate99@naver.com"; /// 이메일을 입력해주세요
//$infodu['admin']['email']   = "korea@koreaind.com"; /// 이메일을 입력해주세요
$infodu['admin']['homepage']    = "localhost.com"; /// 홈페이지주소를 입력해주세요


// 우클릭,드레그 금지
$infodu['noright']=" oncontextmenu=\"return false\" ondragstart=\"return false\" onselectstart=\"return false\"";
$infodu['noright']=""; //우클릭,드레그 금지 설정시 //$noright


// 세션변수 생성
function set_session($session_name, $value)
{
    if (PHP_VERSION < '5.3.0')
        session_register($session_name);
    // PHP 버전별 차이를 없애기 위한 방법
    $$session_name = $_SESSION[$session_name] = $value;
}


// 세션변수값 얻음
function get_session($session_name)
{
    return isset($_SESSION[$session_name]) ? $_SESSION[$session_name] : '';
}

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
                                                                                        


//메뉴 설정
include_once(G5_LANG_PATH.'/_menu.php');






?>