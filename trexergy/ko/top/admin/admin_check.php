<?
include "admin_data.php";


if ($pass == $admin_pass && $id == $admin_id)
{
	setcookie ("dyfhzkr", "$admin_name", 0, "/");
	setcookie ("dyfhzkrpass", "$admin_cry_pass", 0, "/");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>


<?
if ($pass != $admin_pass || $id != $admin_id)
{
include "../../bbs/lib.php";
error ('관리자정보가 정확하지 않습니다.');
}


include "../../bbs/lib.php";



move_page ("$bbs_page");
?>

<body bgcolor="white" leftmargin="0" topmargin="0" bottommargin="0"  rightmargin="0" marginheight="0">
</body>
</html>