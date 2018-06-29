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
<div id="wrap">

	<header id="header" class="on sub">
	     <? include "menu_drop.php"; ?>

	</header><!-- //header -->


<div class="k_wrap sub_wrap">
	
	<div class="k_container type_center">
		<div class="left_wrap">
			<?include "sub_menu.php";?>
		</div>

		<!-- contents_wrap -->
		<div class="contents_wrap">
			<div class="title_wrap">
				<?include "title.php";?>
			</div>
			<div class="contents">