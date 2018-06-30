<!DOCTYPE html>
<html>
<!-- head -->
<? include "head.php" ?>
<? include "list/order_list.php" ?>
<? include "function.php" ?>

<? include "admin/admin_data.php" ?>

<? if($site['db']){ 
	include_once "../../board/common.php";
}?>

<body>

<div id="head_wrap">
	<!--  logo -->
	<div id="head">
		<h1 class="logo"><a href="<?=KI_URL?>"><img src="<?=KI_URL?>images/logo.png"  alt="로고" /></a></h1>
		<div class="menu_wrap">
			<div class="menu_aid"><?include "menu_aid.php";?></div>
			<?include "menu_drop.php";?>
		</div>
	</div>
</div>


<div id="sub_container">
	<div class="sub_text">
		<p>로봇 자동화 전문 / 자동차 부품 생산라인</p>
		<h2>세종엔지니어링</h2>
	</div>
</div>



<div class="sub_wrap">
	<div class="sub_inner">
		
		<div class="left_wrap">
			<?include "sub_menu.php";?>
		</div>
		<div class="contents_wrap">
			<?include "title.php";?>
		