<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>


<div class="introduction">
	<h4><?php echo $infodu['lang']['company']['introduction']['txt01']?></h4>
	<p class="blue"><?php echo $infodu['lang']['company']['introduction']['txt02']?></p>
	<p class="black"><?php echo $infodu['lang']['company']['introduction']['txt03']?></p>
	

	<div class="img">
		<span class="left"><img src="images/intro01.jpg" alt=""></span>
		<span class="right"><img src="images/intro02.jpg" alt=""></span>
	</div>
	
</div>



<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>