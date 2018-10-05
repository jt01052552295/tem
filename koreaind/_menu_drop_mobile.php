<div class="m_menu_wrap" id="amenu">
    <div class="dim"></div>
    <div class="m_menu_bg"></div>
    <div class="m_menu_h">
        <div class="nav-top">
            <div class="btn-x">
                <a href="#"><i class="fas fa-times fa-2x"></i></a>
            </div>
        </div>
        <ul class="m-nav">
            <?php for($i=0; $i<count($nav1st); $i++): ?>
            <li>
                <a href="<?php echo $nav1st[$i]['url']?>" class="mName <?php echo ($i==0)?'on':'';?>" data-size="<?php echo $nav1st[$i]['me_mobile_toggle']?>"><?php echo $nav1st[$i]['title']?> <i class="fas fa-angle-down"></i></a>

                
                <ul class="sub_menu sm01" >
                    <?php for($j=0; $j<count($nav2nd); $j++):?>
                    <?php if(substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']): ?>
                    <li><a href="<?php echo $nav2nd[$j]['url']?>"><?php echo $nav2nd[$j]['title']?></a></li>
                    <?php endif; ?>
                    <?php endfor; ?>
                </ul>
                
            </li>
            <?php endfor; ?>
        </ul>
        
        <p>2018 © 한국산업정보사 <br>ALL RIGHTS RESERVED.</p>
    </div>
</div>