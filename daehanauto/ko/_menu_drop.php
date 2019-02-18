<div id="gnbnav">
    <nav>
        <ul class="gnb_list clear">
            <?php for($i=0; $i<count($nav1st); $i++): ?>

            <?php
                $blank = '';
                if($i==3):
                    $blank = 'blank';
                endif;
            ?>

            <li class="nav1">

                <?php 
                    $on = '';
                    if( $nav1st[$i]['mCode'] == $breadcrumArr[0]['mCode']): 
                        $on = '';
                    endif;
                ?>


                <a href="<?php echo $nav1st[$i]['url']?>" class="menu_link  <?php echo $on?>" id="<?php echo $nav1st[$i]['pid']?>">
                    <span class="menuTxt"><?php echo $nav1st[$i]['title']?><span class="line tran-animate"></span></span>
                </a>

                <div class="navWrap nav<?php echo $nav1st[$i]['mCode']?>">
                    <p class="nav_title"><strong><?php echo $nav1st[$i]['title']?></strong><?php echo $nav1st[$i]['desc']?></p>
                    <ul class="subNavi">
                        <?php for($j=0; $j<count($nav2nd); $j++):?>
                            <?php if(substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']): ?>
                                <li>
                                    <a href="<?php echo $nav2nd[$j]['url']?>">
                                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/<?php echo $nav2nd[$j]['img']?>" alt="" /></div>
                                        <div class="title"><?php echo $nav2nd[$j]['title']?></div>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </ul>
                </div>
                
            </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>