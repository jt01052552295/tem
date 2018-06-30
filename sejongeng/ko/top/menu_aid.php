<a href="<?=KI_URL?>index.html">HOME</a>
|
<a href="<?=KI_URL?>customer/inquiry.html">CONTACT US</a>
|
<a href="<?=KI_URL?>customer/sitemap.html">SITE MAP</a>

<?php if($is_member){?>
|
<a href="<?=ROOT_URL?>/board/bbs/member_confirm.php?url=register_form.php">정보수정</a>
|
<a href="<?=ROOT_URL?>/board/bbs/logout.php">LOGOUT</a>
<?php }else{?>
<!-- |
<a href="<?=ROOT_URL?>/board/bbs/login.php">LOGIN</a> -->
<?php }?>

<? //include $inpo."top/admin/admin_main.php"?>