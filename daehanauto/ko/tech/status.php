<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>


<div class="status">

	<ul class="status_tab" data-tab-event="mouseover">
		<li class="on"><a href="#his01"><?php echo $infodu['lang']['tech']['status'][0]?></a></li>
		<li><a href="#his02"><?php echo $infodu['lang']['tech']['status'][1]?></a></li>
		<li><a href="#his03"><?php echo $infodu['lang']['tech']['status'][2]?></a></li>
		<li><a href="#his04"><?php echo $infodu['lang']['tech']['status'][3]?></a></li>
	</ul>
	<div class="cont" id="his01">

		<h4><?php echo $infodu['lang']['tech']['status'][0]?></h4>
		<div class="img"><img src="images/rnd2_1.jpg" alt=""></div>

	</div>
	<div class="cont" id="his02" style="display:none">
		<h4><?php echo $infodu['lang']['tech']['status'][1]?></h4>
		<div class="img"><img src="images/rnd2_2.jpg" alt=""></div>

	</div>
	<div class="cont" id="his03" style="display:none">
		<h4><?php echo $infodu['lang']['tech']['status'][2]?></h4>
		<div class="img"><img src="images/rnd2_img1.gif" alt=""></div>

		
		
	</div>
	<div class="cont" id="his04" style="display:none">
		<h4><?php echo $infodu['lang']['tech']['status'][3]?></h4>
		<div class="img"><img src="images/rnd2_4.jpg" alt=""></div>

		
		
	</div>

</div>



<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>