<link rel="stylesheet" href="top/js/bxslider/dist/jquery.bxslider.carousel.css" />
<div class="partner_wrap">
	<div class="partner_inner">
		<div class="partner-title">
			<div class="partner-slider-controls">
				<span id="partner-slider-prev"></span> <!-- 이전 -->
				<span id="partner-slider-next"></span> <!-- 다음 -->
				<span id="partner-slider-toggle"><a class="pro-stop" href="#" data-toggle="stop">Stop</a></span> <!-- 시작/멈춤 -->
			</div>
		</div>
		<div class="partner-slider">
			<div><a href="https://www.kosinmed.or.kr/" target="_blank"><img src="<?=KI_URL?>images/slide_1.png"  alt="" /></a></div>
			<div><a href="https://www.damc.or.kr/main/main_2017.php" target="_blank"><img src="<?=KI_URL?>images/slide_2.png"  alt="" /></a></div>
			<div><a href="https://www.pnuh.or.kr" target="_blank"><img src="<?=KI_URL?>images/slide_3.png"  alt="" /></a></div>
			<div><a href="http://www.paik.ac.kr" target="_blank"><img src="<?=KI_URL?>images/slide_4.png"  alt="" /></a></div>
		</div>
		
	</div>
</div>
<script>
	$(document).ready(function(){
		var partnerSlider = $('.partner-slider').bxSlider({
			auto: true,
			infiniteLoop: true,
			slideMargin:20,
			minSlides:4,
			maxSlides:4,
			moveSlides:1,
			slideWidth:245,
			wrapperClass: 'partner-wrapper',
			autoControls: false,
			adaptiveHeight: false,
			pager:false,
			speed:100,
			controls: true,
			nextSelector: '#partner-slider-next',
			prevSelector: '#partner-slider-prev',
		});
		$('#partner-slider-prev a, #partner-slider-next a').click(function(){
			partnerSlider.stopAuto();
			partnerSlider.startAuto();
		});
		$('#partner-slider-toggle a').click(function(e){
			e.preventDefault();
			var toggle = $(this).attr('data-toggle');
			if(toggle=="stop"){
				partnerSlider.stopAuto();
				$(this).attr('data-toggle', 'start');
			} else {
				partnerSlider.stopAuto();
				partnerSlider.startAuto();
				$(this).attr('data-toggle', 'stop');
			}
		});
	});
</script>
