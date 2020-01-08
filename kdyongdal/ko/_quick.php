<div class="quickWrap">
	<div class="subQuickMenu">
		<ul class="quick_list">
			<li class="mm">
				<a href="tel:051-973-0112">
					<img src="<?php echo G5_LANG_IMG_URL?>/q01.png" alt="" />
					<span>
						<strong><?php echo  $infodu['lang']['common']['q01']?></strong>
						<?php echo  $infodu['lang']['common']['q02']?>
					</span>
				</a>
			</li>
			<li class="mm">
				<a href="#none" class="linkA" data-href="inquiry">
					<img src="<?php echo G5_LANG_IMG_URL?>/q02.png" alt="" />
					<span><?php echo  $infodu['lang']['common']['q03']?></span>
				</a>
			</li>
			<li class="mm last">
				<a href="#none" target="_blank">
					<img src="<?php echo G5_LANG_IMG_URL?>/q03.png" alt="" />
					<span><?php echo  $infodu['lang']['common']['q04']?></span>
				</a>
			</li>
		</ul>

		<div class="updown_btn">
			<button type="button" class="btn_updown btn_up" id="goToTop"><?php echo  $infodu['lang']['common']['q05']?></button>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
    $('#goToTop').click(function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        $('html, body').animate({scrollTop : 0}, 400);
    }); 
});
</script>