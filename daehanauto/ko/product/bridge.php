<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>
<div class="bridge">
	<h4><?php echo $infodu['lang']['product']['bridge'][0]?></h4>
	<div class="img"><img src="images/product4_1.jpg" alt=""></div>
	<p class="desc"><?php echo $infodu['lang']['product']['bridge'][1]?></p>

	<h4><?php echo $infodu['lang']['product']['bridge'][2]?></h4>
	<div class="img"><img src="images/product4_2.jpg" alt=""></div>
	<p class="desc"><?php echo $infodu['lang']['product']['bridge'][3]?></p>
</div>
<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>