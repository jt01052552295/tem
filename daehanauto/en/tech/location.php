<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>

<div class="location">

	<ul class="his_tab" data-tab-event="mouseover">
		<li class="on"><a href="#his01"><?php echo $infodu['lang']['tech']['location'][0]?></a></li>
		<li><a href="#his02"><?php echo $infodu['lang']['tech']['location'][1]?></a></li>
		<li><a href="#his03"><?php echo $infodu['lang']['tech']['location'][2]?></a></li>
	</ul>
	<div class="cont" id="his01">

		<div class="img"><img src="images/rnd1_img.jpg" alt=""></div>
		<div class="Engineering_list">
			<ul>
				<li><?php echo $infodu['lang']['tech']['location'][3]?></li>
				<li><?php echo $infodu['lang']['tech']['location'][4]?></li>
				<li><?php echo $infodu['lang']['tech']['location'][5]?></li>
				<li><?php echo $infodu['lang']['tech']['location'][6]?></li>
				<li><?php echo $infodu['lang']['tech']['location'][7]?></li>
				<li><?php echo $infodu['lang']['tech']['location'][8]?></li>
				<li><?php echo $infodu['lang']['tech']['location'][9]?></li>
				<li><?php echo $infodu['lang']['tech']['location'][10]?></li>
	            <li><?php echo $infodu['lang']['tech']['location'][11]?></li>
			</ul>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3251.0833164862847!2d129.15350961556564!3d35.42796605142683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356882b4e07178f1%3A0x918ddf8fabc877c0!2z6rK97IOB64Ko64-EIOyWkeyCsOyLnCDso7zrgqjrj5kgMjYx!5e0!3m2!1sko!2skr!4v1531199521520" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

	</div>
	<div class="cont" id="his02" style="display:none">

		<div class="img"><img src="images/rnd3_img.jpg" alt=""></div>
		<div class="Engineering_list">
			<ul>
				<li><?php echo $infodu['lang']['tech']['location'][12]?></li>
				<li><?php echo $infodu['lang']['tech']['location'][13]?></li>
				<li><?php echo $infodu['lang']['tech']['location'][14]?></li>
				<li><?php echo $infodu['lang']['tech']['location'][15]?></li>
			</ul>
		</div> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3251.7721830970613!2d129.15533351567802!3d35.41089705235677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356882d3878a1299%3A0x13ac1ad3205ba814!2z6rK97IOB64Ko64-EIOyWkeyCsOyLnCDshozso7zrj5kgMzEw!5e0!3m2!1sko!2skr!4v1541393973111" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

	</div>
	<div class="cont" id="his03" style="display:none">
		<div class="img"><img src="images/rnd2_img.jpg" alt=""></div>
		<div class="Engineering_list">
			<ul>
				<li><?php echo $infodu['lang']['tech']['location'][16]?></li>
				<li><?php echo $infodu['lang']['tech']['location'][17]?></li>
				<li><?php echo $infodu['lang']['tech']['location'][18]?></li>
				<li><?php echo $infodu['lang']['tech']['location'][19]?></li>
				<li><?php echo $infodu['lang']['tech']['location'][20]?></li>
				<li><?php echo $infodu['lang']['tech']['location'][21]?></li>
			</ul>
		</div> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d206223.63045010218!2d120.22475465034387!3d36.13626633101275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35960fd582f8f06b%3A0x614d82fa614cf2f3!2z7KSR6rWtIOyCsOuRpSDshLEg7Lmt64uk7JikIOyLnA!5e0!3m2!1sko!2skr!4v1522732325967" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		
		
	</div>

</div>






<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>