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

                
                <ul class="subNavi">
                    <?php for($j=0; $j<count($nav2nd); $j++):?>
                        <?php if(substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']): ?>
                            <li><a href="<?php echo $nav2nd[$j]['url']?>"><?php echo $nav2nd[$j]['title']?></a></li>
                        <?php endif; ?>
                    <?php endfor; ?>
                </ul>
                
            </li>
            <?php endfor; ?>
            <li class="nav1">
                <a href="#none" class="" id="">
                    <span class="">전체메뉴</span>
                </a>               
            </li>
        </ul>
    </nav>
</div>