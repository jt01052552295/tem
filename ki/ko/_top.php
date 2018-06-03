한글
<header>
<?php $cate = $_REQUEST['cate'];?>
<?php for($i=0; $i<count($nav1st); $i++): ?>
<?php //if($nav1st[$i]['mCode'] == $cate):?>
<dl>
	<dt><?php echo $nav1st[$i]['title']?> <?php echo $nav1st[$i]['mCode']?></dt>
	<?php for($j=0; $j<count($nav2nd); $j++):?>
		<?php if(substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']): ?>
			<dd>
				<?php echo $nav2nd[$j]['title']?> <?php echo $nav2nd[$j]['mCode']?>
				
				<ul>
				<?php for($k=0; $k<count($nav3rd); $k++):?>
					<?php if(substr($nav3rd[$k]['mCode'],0,4) == $nav2nd[$j]['mCode']): ?>
						<li><?php echo $nav3rd[$k]['title']?> <?php echo $nav3rd[$k]['mCode']?></li>	
					<?php endif; ?>
				<?php endfor; ?>
				</ul>

			</dd>
		<?php endif; ?>
	<?php endfor; ?>
</dl>
<?php //endif; ?>
<?php endfor;?>

</header>