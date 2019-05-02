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

                <?php 
                    $nav2ndCount = 0;
                    for($j=0; $j<count($nav2nd); $j++):
                         if(substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']): 
                            $nav2ndCount++;
                         endif;
                    endfor;
                ?>



                <a href="<?php echo $nav1st[$i]['url']?>" class="menu_link  <?php echo $on?>" id="<?php echo $nav1st[$i]['pid']?>">
                    <span class="menuTxt"><?php echo $nav1st[$i]['title']?>
                        <?php if($nav2ndCount>0):?><span class="sub-arrow">...</span><?php endif;?>
                        <span class="line tran-animate"></span>
                    </span>
                </a>

                
                <ul class="subNavi">
                    <?php for($j=0; $j<count($nav2nd); $j++):?>
                        <?php if(substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']): ?>


                            <?php 
                                $nav3rdCount = 0;
                                for($k=0; $k<count($nav3rd); $k++):
                                    if(substr($nav3rd[$k]['mCode'],0,4) == $nav2nd[$j]['mCode'] ):
                                        $nav3rdCount++;
                                    endif;
                                endfor;
                            ?>

                            <li>
                                <a href="<?php echo $nav2nd[$j]['url']?>"><?php echo $nav2nd[$j]['title']?>
                                <?php if($nav3rdCount>0):?><span class="sub-arrow">...</span><?php endif;?>
                            </a>

                                <?php if($nav3rdCount>0):?>
                                <ul class="subNavi-lv3">
                                    <!-- <li class="dropdown-header">Hollow Shaft Actuators</li>
                                    <li><a href="#">FHA-Mini1</a></li>
                                    <li><a href="#">FHA-Mini2</a></li>
                                    <li><a href="#">FHA-Mini3</a></li> -->

                                    <?php for($k=0; $k<count($nav3rd); $k++):?>
                                        <?php if(substr($nav3rd[$k]['mCode'],0,4) == $nav2nd[$j]['mCode'] ): ?>
                                            <li class="dropdown-header"><?php echo $nav3rd[$k]['title']?></a></li>
                                        <?php endif; ?>
                                    <?php endfor; ?>


                                </ul>
                                <?php endif;?>

                            </li>
                        <?php endif; ?>
                    <?php endfor; ?>
                </ul>
                
            </li>
        <?php endfor; ?>
        </ul>
    </nav>
</div>