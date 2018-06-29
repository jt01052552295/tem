<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');


if(isset($lang)){
	set_cookie("lang", $lang, 86400 * 1);
}else{
	$lang = get_cookie("lang");
	if($lang== ""){
		$lang = "ko";
	}
}

include_once('../../'.$lang.'/top/include_top.php');

?>

