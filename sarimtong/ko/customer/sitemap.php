<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>


<div class="sitemap_wrap">
	<?php for($i=0; $i<count($nav1st); $i++): ?>
	<div class="sitemap">
		<h5><a href="<?php echo $nav1st[$i]['url']?>"><?php echo $nav1st[$i]['title']?></a></h5>
		<ul>

			<?php for($j=0; $j<count($nav2nd); $j++):?>
                <?php if(substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']): ?>
                    <li><a href="<?php echo $nav2nd[$j]['url']?>"><?php echo $nav2nd[$j]['title']?></a>
                        <p>
                            <?php for($k=0; $k<count($nav3rd); $k++):?>
                                <?php if(substr($nav3rd[$k]['mCode'],0,4) == $nav2nd[$j]['mCode'] ): ?>
                                    <a href="<?php echo $nav3rd[$k]['url']?>">- <?php echo $nav3rd[$k]['title']?></a>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </p>
                    </li>
                <?php endif; ?>
            <?php endfor; ?>   
		</ul>
	</div>
	<?php endfor; ?>
</div>


<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>