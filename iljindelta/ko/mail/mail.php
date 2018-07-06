<div id="mail_wrap">
<?
include $inpo."top/admin/admin_data.php";
$uri = $_SERVER['REQUEST_URI'];

$input_size_s=" size=\"28\"";//짧은폼
$input_size_l=" size=\"70\"";//긴폼
$input_size_memo=" cols=\"80\" rows=\"20\"";//텍스트박스

include $mail_code."/mail_form.php";
?>
</div>