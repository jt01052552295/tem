<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>


<div class="exhibition">

	<ul class="ex_tab" data-tab-event="mouseover">
		<li class="on"><a href="#his01"><?php echo $infodu['lang']['project']['exhibition'][0]?></a></li>
		<li><a href="#his02"><?php echo $infodu['lang']['project']['exhibition'][1]?></a></li>
	</ul>
	<div class="cont" id="his01">

		<div class="img"><img src="images/project1_img.jpg" alt=""></div>
		<div class="Engineering_list">
			<ul>
	        	<li><?php echo $infodu['lang']['project']['exhibition'][2]?></li>
	            <li><?php echo $infodu['lang']['project']['exhibition'][3]?></li>
				<li><?php echo $infodu['lang']['project']['exhibition'][4]?></li>
			</ul>
		</div>

	</div>
	<div class="cont" id="his02" style="display:none">
		<div class="img"><img src="images/project2_img.jpg" alt=""></div>
		<div class="Engineering_list">
			<ul>
	        	<li><?php echo $infodu['lang']['project']['exhibition'][5]?></li>
	            <li><?php echo $infodu['lang']['project']['exhibition'][6]?></li>
				<li><?php echo $infodu['lang']['project']['exhibition'][7]?></li>
			</ul>
		</div>

	</div>


</div>


<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>