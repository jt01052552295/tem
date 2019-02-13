<?php
include_once('./_common.php');



if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/content.php');
    return;
}

//$g5['title'] = '메일';
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>
<link rel="stylesheet" href="./mailcss.css">

<div id="mail_wrap">
<?php
	//include $inpo."top/admin/admin_data.php";
	$uri = $_SERVER['REQUEST_URI'];
	include "ajax/mail_form.php";
?>
</div>

<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>
