<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/head.php');
//     return;
// }

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');



if(isset($lang)){
    set_cookie("lang", $lang, 86400 * 1);
} else {
    $lang = get_cookie("lang");
    if($lang== ""){
        $lang = "ko";
    }
}

$chk_gnu = true;
include_once('../../'.$lang.'/config.php');
include_once(KI_PATH.'/_top.php');

?>