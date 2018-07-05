<?
if ($HTTP_COOKIE_VARS[dyfhzkr]){
	$login_text = "<a href = \"".$inpo."top/admin/logout.php?bbs_page=".$bbs_page."\">운영자모드</a>";
	}

else {
	$login_text = "<a href = \"".$inpo."top/admin/admin_login.php?bbs_page=".$bbs_page."\">ADMIN</a>";
	}
echo $login_text;
?>