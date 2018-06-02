<?php 
/* 기본설정 */
$infodu['title'] = "기본형";
$infodu['keywords'] = "키워드입력";
$infodu['email'] = "";
$infodu['db'] = false;	// 게시판 사용시 true, 아니면 false
$infodu['device'] = "pc";

////////////////// 운영자 정보
$infodu['admin']['name'] = "운영자";
$infodu['admin']['id'] = "master";
$infodu['admin']['pwd'] = "1111";
$infodu['admin']['crypt'] = crypt($infodu['admin']['pwd'], 15);
$infodu['admin']['company'] 	= "한국산업정보사"; //// 회사명을 입력해주세요
$infodu['admin']['email'] 	= "checkmate99@naver.com"; /// 이메일을 입력해주세요
$infodu['admin']['homepage'] 	= "kmaru"; /// 홈페이지주소를 입력해주세요


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
$is_mobile = false;
$chk_mobile = preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|BB10|android|sony/i', $_SERVER['HTTP_USER_AGENT']);
if($_REQUEST['mobile']=='ok'){
	$is_mobile = true;
} else if ($chk_mobile){
	$is_mobile = true;
} else {
	$is_mobile = false;
}
define('KI_IS_MOBILE', $is_mobile);
if (KI_IS_MOBILE) {
    $settingURL['mobile_path'] = KI_PATH.'/m';
    define('KI_MOBILE_PATH', 	$settingURL['mobile_path']);
    define('KI_MOBILE_URL',        KI_URL.'/m');
}

// URL 은 브라우저상에서의 경로 (도메인으로 부터의)
define('KI_IMG_URL',        KI_URL.'/images');
define('KI_CSS_URL',        KI_URL.'/css');
define('KI_JS_URL',        KI_URL.'/js');
define('KI_FONT_URL',        KI_URL.'/font');
// echo KI_PATH."<Br>";
// echo KI_IMG_URL."<Br>";
// echo KI_JS_URL."<Br>";
// echo KI_CSS_URL."<Br>";
// echo KI_MOBILE_PATH."<Br>";
// echo KI_MOBILE_URL."<Br>";
unset($settingURL);

echo "<!-- pre infodu>";
print_r($infodu);
echo "</pre -->";


?>