<div class="box_wrap">
	<div id="subQuickMenu">
		<ul>
			<li class="title font_georgia"><?php echo $infodu['lang']['quick']['common']['txt01']?></li>

			<li class="ttt">
				<p><?php echo $infodu['lang']['quick']['common']['txt02']?></p>
				<div class="ico_tel"><?php echo $infodu['lang']['quick']['common']['txt03']?></div>
			</li>

			<li class="mm">
				<a href="#">
					<img src="<?php echo G5_LANG_IMG_URL?>/ico_talk.png" alt="" />
					<div><?php echo $infodu['lang']['quick']['common']['txt04']?></div>
				</a>
			</li>
			<li class="mm">
				<a href="#">
					<img src="<?php echo G5_LANG_IMG_URL?>/ico_insta.png" alt="" />
					<div><?php echo $infodu['lang']['quick']['common']['txt05']?></div>
				</a>
			</li>

			<li class="ttt">
				<p><?php echo $infodu['lang']['quick']['common']['txt06']?></p>
				<div class="round"><?php echo $infodu['lang']['quick']['common']['txt07']?></div>
			</li>
			
		</ul>

		<div class="updown_btn">
			<button type="button" class="btn_updown btn_up" id="goToTop"><?php echo $infodu['lang']['quick']['common']['txt08']?></button>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
	$(window).scroll(function() {
		var win = $(window);
		var winHeight = win.height();
		var wScroll = $(this).scrollTop();	

		if(wScroll > 105){
			$('#subQuickMenu').animate({top:$(window).scrollTop()+"px" },{queue: false, duration: 500});  
			// if(wScroll >= $(document).height() - $('#subQuickMenu').offset().top ){
			// 	$('#subQuickMenu').removeClass('m-fixed');
			// } else {
			// 	$('#subQuickMenu').addClass('m-fixed');
			// }
		}else{
			$('#subQuickMenu').animate({top:"105px" },{queue: false, duration: 350});  
			// $('#subQuickMenu').removeClass('m-fixed');
		} 
	}); // 서브페이지 메뉴 고정

	 $('#goToTop').click(function(e){
            e.preventDefault;
            $('html, body').animate({ scrollTop : 0 }, 500 );
        });

})
</script>
