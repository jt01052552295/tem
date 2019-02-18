<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>


<div class="message">
	
	<div class="img"><img src="images/greeting1_img.jpg" alt=""></div>

	<div class="sub_con">
		<div class="desc">
			<p><?php echo $infodu['lang']['company']['message'][0]?></p>
			<p class="small">
				<?php echo $infodu['lang']['company']['message'][1]?>
				<br/><br/>
				<?php echo $infodu['lang']['company']['message'][2]?>
			</p>
			<p class="last">
				<img src="images/greeting1_sign.gif" alt="">
			</p>
		</div>
	</div>

</div>




<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>