<div id="mail_wrap">
<?
include "../../top/admin/admin_data.php";
$uri = $_SERVER['REQUEST_URI'];

$input_size_s=" size=\"20\"";//짧은폼
$input_size_l=" size=\"10\"";//긴폼
$input_size_memo=" rows=\"5\"";//텍스트박스

include $mail_code."/mail_form.php";
?>
</div>