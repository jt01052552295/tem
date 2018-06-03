<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/tail.php');
//     return;
// }
// 

echo KI_PATH;
include_once(KI_PATH.'/'.$lang.'/_footer.php');
?>
<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>