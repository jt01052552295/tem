<?php
include_once('./_common.php');

//$g5['title'] = '메일';
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>
<link rel="stylesheet" href="./mailcss.css">

<script type="text/javascript">
    $(document).ready(function(){
		fullpage_api.destroy('all');
	});
</script>

<div id="mail_wrap" class="section fp-auto-height">
<?php
	//include $inpo."top/admin/admin_data.php";
	$uri = $_SERVER['REQUEST_URI'];
	include "ajax/mail_form.php";
?>
</div>

<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>
