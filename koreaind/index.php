<?php
define('_INDEX_', true); 
include_once('./_config.php');
include_once(KI_PATH.'/_header.php'); 
//include_once(KI_PATH.'/_top.php'); 
?>
<header class="main bg">
    <div class="header_wrap topPosition">
        <div class="headerBox">
        	<div class="logo"><h1><a href="<?php echo KI_URL?>"><span class="blind">한국산업정보사 로고</span></a></h1></div>
            <div class="header_inner"> 
               <?php include_once(KI_PATH.'/_menu_drop.php'); ?>
            </div>
            <div class="lang">
                <a href="#" id="sideToggle"><i class="fas fa-bars fa-2x"></i></a>
            </div>              
            <div class="subMenuBg opacity_70">&nbsp;</div>
        </div>

         <div id="m_menu">
            <a href="#"><i class="fas fa-bars fa-2x"></i></a>
        </div>
        <!--모바일메뉴!-->
        <?php include_once(KI_PATH.'/_menu_drop_mobile.php'); ?>


        <!--사이드 토글!-->
        <?php include_once(KI_PATH.'/_menu_drop_side.php'); ?>
        

        

    </div> 
</header>


<section class="main_temp">

</section>



<?php
include_once(KI_PATH.'/_footer.php'); 
?>