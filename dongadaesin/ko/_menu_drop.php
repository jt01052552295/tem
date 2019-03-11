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

            <li class="nav1 <?php echo $blank?>">

                <?php 
                    $on = '';
                    if( $nav1st[$i]['mCode'] == $breadcrumArr[0]['mCode']): 
                        $on = 'on';
                    endif;
                ?>


                <a href="<?php echo $nav1st[$i]['url']?>" class="menu_link  <?php echo $on?>" id="<?php echo $nav1st[$i]['pid']?>">
                    <?php echo $nav1st[$i]['title']?><span class="line tran-animate"></span>
                </a>

                <div class="sub_category " data-sub-navi="<?php echo $i?>">
                    <div class="category_tit">
                        <strong><?php echo $nav1st[$i]['title']?></strong>
                        <div class="category_banner bg01"></div>
                    </div>

                    
                    <div class="category_list">
                            <ul data-me-position = "1">
                                <?php for($j=0; $j<count($nav2nd); $j++):?>
                                    <?php if( (substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']) && $nav2nd[$j]['me_position'] == '1'  ): ?>
                                        <li><strong><a href="<?php echo $nav2nd[$j]['url']?>"><?php echo $nav2nd[$j]['title']?></a></strong>
                                            <ul>
                                                <?php for($k=0; $k<count($nav3rd); $k++):?>
                                                    <?php if(substr($nav3rd[$k]['mCode'],0,4) == $nav2nd[$j]['mCode'] ): ?>
                                                        <li><a href="<?php echo $nav3rd[$k]['url']?>"><?php echo $nav3rd[$k]['title']?></a></li>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </ul>
                                        </li>
                                    <?php endif; ?>
                                <?php endfor; ?>                           
                            </ul>
                            <ul data-me-position = "2">
                                <?php for($j=0; $j<count($nav2nd); $j++):?>
                                    <?php if( (substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']) && $nav2nd[$j]['me_position'] == '2'  ): ?>
                                        <li><strong><a href="<?php echo $nav2nd[$j]['url']?>"><?php echo $nav2nd[$j]['title']?></a></strong>
                                            <ul>
                                                <?php for($k=0; $k<count($nav3rd); $k++):?>
                                                    <?php if(substr($nav3rd[$k]['mCode'],0,4) == $nav2nd[$j]['mCode'] ): ?>
                                                        <li><a href="<?php echo $nav3rd[$k]['url']?>"><?php echo $nav3rd[$k]['title']?></a></li>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </ul>
                                        </li>
                                    <?php endif; ?>
                                <?php endfor; ?>                           
                            </ul>
                            <ul data-me-position = "3">
                                <?php for($j=0; $j<count($nav2nd); $j++):?>
                                    <?php if( (substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']) && $nav2nd[$j]['me_position'] == '3'  ): ?>
                                        <li><strong><a href="<?php echo $nav2nd[$j]['url']?>"><?php echo $nav2nd[$j]['title']?></a></strong>
                                            <ul>
                                                <?php for($k=0; $k<count($nav3rd); $k++):?>
                                                    <?php if(substr($nav3rd[$k]['mCode'],0,4) == $nav2nd[$j]['mCode'] ): ?>
                                                        <li><a href="<?php echo $nav3rd[$k]['url']?>"><?php echo $nav3rd[$k]['title']?></a></li>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </ul>
                                        </li>
                                    <?php endif; ?>
                                <?php endfor; ?>                           
                            </ul>
                            <ul data-me-position = "4">
                                <?php for($j=0; $j<count($nav2nd); $j++):?>
                                    <?php if( (substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']) && $nav2nd[$j]['me_position'] == '4'  ): ?>
                                        <li><strong><a href="<?php echo $nav2nd[$j]['url']?>"><?php echo $nav2nd[$j]['title']?></a></strong>
                                            <ul>
                                                <?php for($k=0; $k<count($nav3rd); $k++):?>
                                                    <?php if(substr($nav3rd[$k]['mCode'],0,4) == $nav2nd[$j]['mCode'] ): ?>
                                                        <li><a href="<?php echo $nav3rd[$k]['url']?>"><?php echo $nav3rd[$k]['title']?></a></li>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </ul>
                                        </li>
                                    <?php endif; ?>
                                <?php endfor; ?>                           
                            </ul>
                    </div>
                    
                </div>


                
            </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>