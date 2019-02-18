<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>
<div class="history">

	<ul class="his_tab" data-tab-event="mouseover">
		<li class="on"><a href="#his01">2012 ~ 2014</a></li>
		<li><a href="#his02">2015 ~ 2016</a></li>
		<li><a href="#his03">2017 ~ Present</a></li>
	</ul>
	<div class="cont" id="his01">

		<div class="historyD">
			<p class="hisTit"><img alt="1974-1999 창업기" src="images/about1_img3.gif"></p>
			<div class="hisD his2">
				<ul>
					<li>
						<p class="year">2012</p>
						<div class="hisInfo">
							<p><strong>11.  </strong><?php echo $infodu['lang']['company']['history'][0]?></p>						
						</div>
					</li>
					<li>
						<p class="year">2013</p>
						<div class="hisInfo">
							<p><strong>01. </strong> <?php echo $infodu['lang']['company']['history'][1]?></p>
	                        <p><strong>03. </strong> <?php echo $infodu['lang']['company']['history'][2]?></p>
	                        <p><strong>05. </strong> <?php echo $infodu['lang']['company']['history'][3]?><br />&nbsp;　&nbsp;&nbsp;<?php echo $infodu['lang']['company']['history'][4]?><br />&nbsp;　&nbsp;&nbsp;<?php echo $infodu['lang']['company']['history'][5]?></p>
						</div>
					</li>
					
					<li>
						<p class="year">2014</p>
						<div class="hisInfo">
							<p><strong>07. </strong> <?php echo $infodu['lang']['company']['history'][6]?></p>
	                        <p><strong>11. </strong> <?php echo $infodu['lang']['company']['history'][7]?></p>
						</div>
					</li>
	                
				</ul>
			</div>
		</div>


	</div>
	<div class="cont" id="his02" style="display:none">

		<div class="historyD">
			<p class="hisTit"><img alt="2015 ~ 2016" src="images/about1_img2.gif"></p>
			<div class="hisD his2">
				<ul>
					<li>
						<p class="year">2015</p>
						<div class="hisInfo">
							<p><strong>04.  </strong> <?php echo $infodu['lang']['company']['history'][8]?></p>
						</div>
					</li>
					<li>
						<p class="year">2016</p>
						<div class="hisInfo">
							<p><strong>10. </strong> <?php echo $infodu['lang']['company']['history'][9]?></p>
							<p><strong>11. </strong> <?php echo $infodu['lang']['company']['history'][10]?></p>
							<p><strong>12. </strong> <?php echo $infodu['lang']['company']['history'][11]?></p>
						</div>
					</li>
				</ul>
			</div>
		</div>
		
	</div>
	<div class="cont" id="his03" style="display:none">

		<div class="historyD">
			<p class="hisTit"><img alt="2017" src="images/about1_img1.gif"></p>
			<div class="hisD his1">
				<ul>
					<li>
						<p class="year">2017</p>
						<div class="hisInfo">
							<p><strong>01.</strong> <?php echo $infodu['lang']['company']['history'][12]?></p>
							<p><strong>05.</strong> <?php echo $infodu['lang']['company']['history'][13]?></p>
							<p><strong>05.</strong> <?php echo $infodu['lang']['company']['history'][14]?></p>
	                        <p><strong>07.</strong> <?php echo $infodu['lang']['company']['history'][15]?></p>
	                        <p><strong>12.</strong> <?php echo $infodu['lang']['company']['history'][16]?></p>
						</div>
					</li>
	                <li>
						<p class="year">2018</p>
						<div class="hisInfo">
							<p><strong>11. </strong> <?php echo $infodu['lang']['company']['history'][17]?></p>
	                        
						</div>
					</li>
				</ul>
			</div>
		</div>
		
	</div>

</div>

<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>