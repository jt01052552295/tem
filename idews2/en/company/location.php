<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>





<div class="location_sub">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3260.52835295593!2d128.8943463156178!3d35.193306214182726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3568c6c92965516d%3A0xe96d1d8d16806826!2z67aA7IKw6rSR7Jet7IucIOqwleyEnOq1rCDqsIDrnb3rj5kg6rCA652964yA66GcMTM5N-uyiOq4uA!5e0!3m2!1sko!2skr!4v1551850258972" allowfullscreen></iframe>
    <div class="row_basic">      
        <ul class="grid3 mg0">
        	<li class="info">
				<div class="thumb"><img src="images/icon_address.jpg" alt=""></div> 
				<h5><?php echo $infodu['lang']['company']['location']['txt01']?></h5>     
				<p><?php echo $infodu['lang']['company']['location']['txt02']?></p>  		
        	</li>
        	<li class="info">
				<div class="thumb"><img src="images/icon_tel.jpg" alt=""></div>
				<h5><?php echo $infodu['lang']['company']['location']['txt03']?></h5>        		
				<p><?php echo $infodu['lang']['company']['location']['txt04']?></p>
        	</li>
        	<li class="info">
				<div class="thumb"><img src="images/icon_mail.jpg" alt=""></div>        		
				<h5><?php echo $infodu['lang']['company']['location']['txt05']?></h5>
				<p><?php echo $infodu['lang']['company']['location']['txt06']?></p>
        	</li>

        </ul>
    </div>
</div>




</div>

<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>