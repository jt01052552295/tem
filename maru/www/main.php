<div class="container" id="bodyContent">
	<div class="box_wrap ">
			
			<div class="inner_container">

				<link rel="stylesheet" href="/js/jquery.bxslider/jquery.bxslider.main.css">
				<script src="/js/jquery.bxslider/jquery.bxslider.main.js"></script>
				<ul class="bxslider_main">
					<li><img src="/img/main/slide01.png"/></li>
					<li><img src="/img/main/slide01.png"/></li>
					<li><img src="/img/main/slide01.png"/></li>
				</ul>
				<a href="javascript:;" id="mainPause"><span>start/pause</span></a>
				<script type="text/javascript">
					$(document).ready(function(){
						var main_slide = $('.bxslider_main').bxSlider({
							auto: true,
							mode: 'fade',
							infiniteLoop: true,
							wrapperClass: 'main-wrapper',
							autoControls: false,
							adaptiveHeight: true,
							pager:true,
							controls:false,
							speed:100,
							onSlideNext: function($slideElement, oldIndex, newIndex) {
								$('.slogan_bar').children('.animateBG').stop().animate({"width":"0"}, 100).animate({"width":"50%"}, 1000)
							},
							onSlideAfter: function($slideElement, oldIndex, newIndex) {
								$('.slogan_bar').children('.animateBG').stop().animate({"width":"100%"}, 2000)
							}
						});

						$(".bxslider_main .bx-pager-link").click(function () {
							main_slide.stopAuto();
							main_slide.startAuto();
						});

					});
				</script>

				<div class="slogan">
					<img src="/img/main/img_slogan.png" id="image_slogan"/>
				</div>
				<div class="slogan_bar">
					<div class="animateBG">&nbsp;</div>
				</div>



				<link rel="stylesheet" href="/js/jquery.bxslider/jquery.bxslider.ing.css">
				<script src="/js/jquery.bxslider/jquery.bxslider.ing.js"></script>
				<div class="underCon">
					<ul class="bxslider_ing">
						<?php
							if (count($cfg['mainBuild']['code'])>0) {
								for($i=0; $i<count($cfg['mainBuild']['code']); $i++){
						?>
							<li>
								<div class="ingWrap">
									<div class="thumb">
										<img src="<?=$cfg['mainBuild']['image'][$i]?>"/>
										<a href="javascript:;" id="ingPause"><span>start/pause</span></a>
									</div>
									<div class="desc">
										<h3>Under Construction<br/>진행 중인 현장</h3>
										<div class="descTitle">시공현장 :</div>
										<div class="descContent"><?=$cfg['mainBuild']['name'][$i]?></div>
										<div class="descTitle">공사기간 :</div>
										<div class="descContent"><?=$cfg['mainBuild']['period'][$i]?></div>
										<div class="ingMore">
											<a href="./?b2Type=view&strCode=<?=$cfg['mainBuild']['code'][$i]?>&path=ing&page=1" title="더보기" class="btn basic full"><span class="txt">더보기</span><span class="animateBG">&nbsp;</span></a>
										</div>
									</div>
									
								</div>
							</li>
						<?php 
								}
							}
							if (count($cfg['mainBuild']['code'])==0) {
						?>
								<li>
									<div class="ingWrap">
										<div class="thumb">
											<img src="/img/img_noImageMain.jpg"/>
										</div>
										<div class="desc">
											<h3>등록된 자료 없습니다.</h3>
										</div>
										
									</div>
								</li>

							<? }?>
					</ul>
				</div>
				<script type="text/javascript">
					$(document).ready(function(){
						var ing_slide = $('.bxslider_ing').bxSlider({
							auto: false,
							mode: 'fade',
							infiniteLoop: true,
							wrapperClass: 'ing-wrapper',
							autoControls: false,
							adaptiveHeight: false,
							pager:true,
							controls:false,
							//nextSelector: '#ing-slider-next',
							//prevSelector: '#ing-slider-prev',
							speed:300
						});

						$('#ingPause').click(function(){

							if($(this).hasClass('pause')){ 
								$(this).removeClass('pause');
								ing_slide.startAuto();
							} else {
								$(this).addClass('pause');
								ing_slide.stopAuto();
							}
						});

						$('.bxslider_ing .bx-pager-link').click(function(){
							ing_slide.stopAuto();
							ing_slide.startAuto();
						});

						//$(".ing-wrapper").mouseenter(function () {
							//ing_slide.stopAuto();
							//ing_slide.startAuto();
						//});
						<? if (count($cfg['mainBuild']['code'])==0) { ?>
							ing_slide.destroySlider();
						<? } ?>

					});
				</script>

				<div class="introduction">
					<div class="cBox">
						<div class="cBoxTitle">
							<h3>Introduction of Business<br/> 사업소개</h3>
						</div>
						<div class="cBoxContent">
							<p class="top">마루종합건설(주)</p>
							<p class="bottom">병원 · 공장 · 주택 · 오피스텔<br/>신축 / 리모델링 · 개발 / 컨설팅</p>
						</div>
						<div class="cBoxMore">
							<a href="./?path=intro" title="더보기" class="btn secondary full"><span class="txt">더보기</span><span class="animateBG">&nbsp;</span></a>
						</div>
						
					</div>
				</div>
			</div>


			<div id="mainQuick">
				<div class="quickB"><a href="/admin" target="_blank"><img src="/img/banner/quick_intra.png" alt="인트라넷" /></a></div>
				<div class="quickB last"><a href="./?path=propose"><img src="/img/banner/quick_propose.png" alt="협력제안" /></a></div>
			</div>


	</div>

	
</div>