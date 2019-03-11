<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>

<div class="product">
	<h4><?php echo $infodu['lang']['product']['drive']['txt01']?></h4>


	<div class="row_basic pro_drive">      
        <ul class="grid1">
        	<li class="info">
				<div class="thumb"><img src="images/drive01.jpg" alt=""></div> 	
				<div class="menu_info"><p><?php echo $infodu['lang']['product']['drive']['txt02']?></p></div>	
        	</li>
        </ul>
    </div>

</div>    

<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>