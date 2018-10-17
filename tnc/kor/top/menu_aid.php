<div class="inner_menu_aid">
<?php if($is_admin){?>
<a href="<?=ROOT_URL?>/board/adm">관리자</a> &nbsp;
<a href="<?=ROOT_URL?>/board/bbs/logout.php">LOGOUT</a> &nbsp;
<?php }else if($is_member){?>
<a href="<?=ROOT_URL?>/board/bbs/member_confirm.php?url=register_form.php">정보수정</a> &nbsp;
<a href="<?=ROOT_URL?>/board/bbs/logout.php">LOGOUT</a> &nbsp;
<?php }else{?>
<a href="<?=ROOT_URL?>/board/bbs/login.php">ADMIN</a> &nbsp;
<?php }?>
<a href="<?=KI_URL?>cs/02.html">고객센터</a> &nbsp;
<a href="<?=KI_URL?>customer/sitemap.html">SITEMAP</a>
</div>