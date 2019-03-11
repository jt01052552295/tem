<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>


<div class="product">
	<h4><?php echo $infodu['lang']['product']['igen']['txt01']?></h4>


	<div class="row_basic pro_wrap">      
        <ul class="grid2">
        	<li class="info">
				<div class="thumb"><img src="images/igen01.jpg" alt=""></div> 	
				<div class="menu_info"><p><?php echo $infodu['lang']['product']['igen']['txt02']?></p></div>	
        	</li>
        	<li class="info">
				<div class="thumb"><img src="images/igen02.jpg" alt=""></div>
				<div class="menu_info"><p><?php echo $infodu['lang']['product']['igen']['txt03']?></p></div>	
        	</li>

        </ul>
    </div>


	<div class="pro_desc">      
        <ul class="">
        	<li><?php echo $infodu['lang']['product']['igen']['txt04']?></li>
        	<li><?php echo $infodu['lang']['product']['igen']['txt05']?></li>
        	<li><?php echo $infodu['lang']['product']['igen']['txt06']?></li>
        	<li><?php echo $infodu['lang']['product']['igen']['txt07']?></li>
        </ul>
    </div>

    <div class="row_basic pro_desc2">      
        <ul class="grid3 mg0">
        	<li class="detail"><?php echo $infodu['lang']['product']['igen']['txt08']?></li>
        	<li class="detail"><?php echo $infodu['lang']['product']['igen']['txt09']?></li>
        	<li class="detail"><?php echo $infodu['lang']['product']['igen']['txt10']?></li>
        	<li class="detail"><?php echo $infodu['lang']['product']['igen']['txt11']?></li>
        	<li class="detail"><?php echo $infodu['lang']['product']['igen']['txt12']?></li>
        	<li class="detail"><?php echo $infodu['lang']['product']['igen']['txt13']?></li>
        	<li class="detail"><?php echo $infodu['lang']['product']['igen']['txt14']?></li>
        </ul>
    </div>


    <div class="pro_desc">      
        <ul class="">
        	<li><?php echo $infodu['lang']['product']['igen']['txt15']?></li>
        	<li><?php echo $infodu['lang']['product']['igen']['txt16']?></li>
        	<li><?php echo $infodu['lang']['product']['igen']['txt17']?></li>
        	<li><?php echo $infodu['lang']['product']['igen']['txt18']?></li>
        </ul>
    </div>


</div>



<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>