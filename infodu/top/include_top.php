<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-------------- head ------------------------------------------------------------->
<? @include "list/order_list.php" ?>
<? @include "function.php" ?>
<? @include "head.php" ?>
<? @include "admin/admin_data.php" ?>
<? @include "image_viewer/viewer_lib.php" ?>
<? @include "portfolio_viewer/viewer_lib.php"?>
<? @include "../bbs/logsave.php" ?>
<? @include "../bbs/adblock.php" ?>

<body <?=$noright?> leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" class="bodysub">

<div id="menu_aid_wrap">
	<div class="menu_aid"><?include "menu_aid.php";?></div>
</div>


<div id="head_wrap">
	<!--  logo -->
	<div id="head">
		<div class="logo"><a href="<?=$inpo?>"><img src="<?=$inpo?>images/logo.gif" width="239" height="69" border="0" /></a></div>
		<div class="menu_wrap" onMouseOver="menudrop.style.visibility='visible'" onMouseOut="menudrop.style.visibility='hidden'">			
			<ul class="menu"><?include "menu.php";?></ul>
		</div>		
		<div id="menudrop" onMouseOver="menudrop.style.visibility='visible'" onMouseOut="menudrop.style.visibility='hidden'"><?include "menudrop.php";?></div>
	</div>	
</div>


<div id="middle_wrap_<?=$code_high?>">
	<div class="menu_shadow"><img src="<?=$inpo?>images/menu_shadow.png" width="1000" height="18" alt="" /></div>
	<!-- contents -->
	<div id="middle">
		<div class="left_wrap">
			<div class="left_vg">&nbsp;</div>
			<?include "left_banner.php";?>
		</div>
		<div class="contents_wrap">
			<div class="title_wrap"><img src="<?=$inpo?><?=$code_high?>/images/title_<?=$code_high?>.gif" width="423" height="38" alt="" /></div>
			<div class="space10"></div>
			<ul class="sub_menu">
				<?include "sub_menu.php";?>
			</ul>
			<div class="space20"></div>
			<div class="space20"></div>
			<div class="contents">