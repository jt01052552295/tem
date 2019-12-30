<header class="main" >
    
    <div class="header_wrap tran-animate" id="header_height">
        
        <div class="headerBox">

            
            <div id="lang_bg">
                <div class="lang_wrap">
                    <div class="lang_nemo">
                        <div class="lang_semo"></div>
                        <a href="<?php echo G5_LANG_URL?>/ko" class="curr_lang lang_active">
                            KOR 
                            <span></span>
                        </a>
                        <a href="<?php echo G5_LANG_URL?>/en" >
                            ENG
                            <span></span>
                        </a>   
                        <a href="<?php echo G5_LANG_URL?>/cn" >
                            CHN
                            <span></span>
                        </a>                  
                    </div>
                </div>
            </div> 

            <div class="logo"><h1><a href="<?php echo G5_LANG_URL?>"><span class="blind"><?php echo $infodu['title']?></span></a></h1></div>
            <div class="header_inner"> 
               <?php include_once(G5_LANG_PATH.'/_menu_drop.php'); ?>
            </div>
            <!-- <div class="lang">
                <a href="#" id="sideToggle"><i class="fas fa-bars fa-2x"></i></a>
            </div> -->              
            
        </div>
        <div class="subMenuBg">&nbsp;</div>
    </div> 
</header>



<?php if (!defined("_INDEX_")) { ?>
<div class="sub_vg">
    <div id="vg_con">
        <div class="subBg subBg<?php echo substr($breadcrumArr[0]['mCode'],0,2);?>">
            <span>
                <h2><?php echo $breadcrumArr[0]['subTitle'];?></h2>
                <p><?php echo $breadcrumArr[0]['subDesc'];?></p>
            </span>
        </div>
    </div>
</div>


<div class="k_wrap" id="subPageWrap">
    <?php if (!defined("_WIDE_SCREEN_")): ?><div class="k_container type_center" id="subPage"><?php endif; ?>


    <div class="left_wrap" >
        <?php include_once(G5_LANG_PATH.'/_sidebar.php'); ?>
    </div>

    <div class="contents_wrap">
        <div class="title_wrap">    
            <div class="sub_vg_title">
                <div class="breadcrum">
                    <?php 
                        $breadcrum_str = '';
                        for($b=0; $b<count($breadcrumArr); $b++):
                            $breadcrum_str .= '&nbsp;&nbsp;&gt;&nbsp;&nbsp;'.$breadcrumArr[$b]['title'];
                        endfor;
                    ?>
                    <?php echo $breadcrum_str;?>
                </div>

                <h2 class="title">
                    <?php 
                            $level = count($breadcrumArr)-1;
                            $titleChk = true;
                            for($b=$level; $b>=0; $b--):

                                if($breadcrumArr[$b]['title']): 
                                    echo $breadcrumArr[$b]['title']; 
                                    $titleChk = false;
                                    break;
                                endif;
                            endfor;

                            if ($titleChk === true) {
                                echo $g5['title'];
                            }

                        ?>  

                    <small><?php echo $breadcrumArr[$b]['titleDesc']; ?></small>
                </h2>



            </div>
            
        </div>
<?php } ?>