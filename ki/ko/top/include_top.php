<!DOCTYPE>
<html>
<!-- head -->
<? include "head.php" ?>
<? include "list/order_list.php" ?>
<? include "function.php" ?>

<? include "admin/admin_data.php" ?>

<? if($site['db']){ 
	include_once "../../board/common.php";
}?>


<body class="bodysub">


<div id="head_wrap">
	<!--  logo -->
	<div id="head">
		<h1 class="logo"><a href="<?=KI_URL?>"><img src="<?=KI_URL?>images/logo.png"  border="0" /></a></h1>
		<div class="menu_wrap">
			<div class="menu_aid"><?include "menu_aid.php";?></div>
			<?include "menu_drop.php";?>
		</div>
	</div>
</div>

<div class="sub_vg">&nbsp;</div>

<div id="middle_wrap">
	<!-- contents -->
	<div id="middle_sub">
		<div class="left_wrap">
			<?include "sub_menu.php";?>
		</div>
		
		<div class="contents_wrap">
			<div class="title_wrap">
				<?include "title.php";?>
			</div>
			<?include "title2.php";?>
			
			<div class="contents">
			
			
			