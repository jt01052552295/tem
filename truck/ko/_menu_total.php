<div class="total_menu_contain">
	<div class="total_menu_in">

		<div class="top_logo"><h1><a href="<?php echo G5_LANG_URL?>"><span class="blind"><?php echo $infodu['title']?></span></a></h1></div>
		<div class="top_btn">
			<a href="javascript:;" class="total_menu_close"><img src="<?php echo G5_LANG_IMG_URL?>/btn_total_menu_close.png" alt=""></a>
		</div>

		<div class="t_menu_list">
			<?php for($i=0; $i<count($nav1st); $i++): ?>
			<div>
				<p><?php echo $nav1st[$i]['title']?></p>
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



	</div>

</div>