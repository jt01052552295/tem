<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

//if(defined('G5_THEME_PATH')) {
    //require_once(G5_THEME_PATH.'/head.php');
    //return;
//}


include_once(G5_PATH.'/head.sub.php');
if (G5_IS_MOBILE) {
	//echo G5_LANG_MOBILE_PATH;
	//include_once(G5_LANG_MOBILE_PATH.'/_header.php');
    include_once(G5_LANG_MOBILE_PATH.'/_top.php');
    return;
}	else {
	
	 include_once(G5_LANG_PATH.'/_top.php');
}


?>
