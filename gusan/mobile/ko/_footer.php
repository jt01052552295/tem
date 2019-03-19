		</div>
	</div>
</div>
<!-- 하단 시작 { -->

<div id="ft">

	<div id="ft_logo"><a href="<?php echo G5_URL; ?>"><img src="<?php echo G5_LANG_MOBILE_IMG_URL?>/copy_logo.png" /></a></div>



	<p>
		<?php echo $infodu['lang']['index']['footer'][3]?><br>
		<?php echo $infodu['lang']['index']['footer'][1]?><br><br>
		
		
		<a href="http://www.koreaind.com" target="_blank" class="copy_link">
			<?php echo $infodu['lang']['index']['footer'][2]?>
		</a>
	</p>
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
    <?php if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
		<a href="<?php echo G5_URL; ?>?device=pc" id="device_change">PC Ver.</a>
    <?php }?>
	<script>
	$(document).ready(function(){
		$('#top_btn').click(function(e){
			e.preventDefault();
			var id = $(this).attr('id');
			$('html, body').animate({scrollTop : 0}, 400);
		}); 
	});
	</script>


</div>