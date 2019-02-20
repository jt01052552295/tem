<?php
include_once('./_common.php');



if (G5_IS_MOBILE) {
    include_once(G5_LANG_MOBILE_PATH.'/index.php');
    return;
} else {
 	include_once(G5_PATH.'/intro.php');
	return;
}
?>