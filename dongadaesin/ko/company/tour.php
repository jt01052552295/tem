<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>

<link href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.gallery.css" rel="stylesheet">
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>





<div class="gallery-slider-wrap">
	<ul class="gallery-slider" >
		<li><img src="images/view/gallery1.jpg"  title="병원전경" /></li>
		<li><img src="images/view/gallery2.jpg"  title="원무부 접수·수납" /></li>
		<li><img src="images/view/gallery3.jpg"  title="재활치료실" /></li>
		<li><img src="images/view/gallery4.jpg"  title="재활치료실" /></li>
		<li><img src="images/view/gallery5.jpg"  title="재활치료실" /></li>
		<li><img src="images/view/gallery6.jpg"  title="재활치료실" /></li>
		<li><img src="images/view/gallery7.jpg"  title="재활치료실" /></li>
	</ul>

	<span id="gallery-slider-prev"><a href="javascript:;"><span class="blind">이전</span></a></span> 
	<span id="gallery-slider-next"><a href="javascript:;"><span class="blind">다음</span></a></span> 
</div>

<div id="gallery-pager">
  
		<a data-slide-index="0" class="thumbA" id="thumbA_0" href="#"><img src="./images/view/gallery1.jpg" title="" /></li>
		<a data-slide-index="1" class="thumbA" id="thumbA_1" href="#"><img src="./images/view/gallery2.jpg" title="" /></li>
		<a data-slide-index="2" class="thumbA" id="thumbA_2" href="#"><img src="./images/view/gallery3.jpg" title="" /></li>
		<a data-slide-index="3" class="thumbA" id="thumbA_3" href="#"><img src="./images/view/gallery4.jpg" title="" /></li>
		<a data-slide-index="4" class="thumbA" id="thumbA_4" href="#"><img src="./images/view/gallery5.jpg" title="" /></li>
		<a data-slide-index="5" class="thumbA" id="thumbA_5" href="#"><img src="./images/view/gallery6.jpg" title="" /></li>
		<a data-slide-index="6" class="thumbA" id="thumbA_6" href="#"><img src="./images/view/gallery7.jpg" title="" /></li>
 
</div>


<script>
	$(document).ready(function(){
		var gallery_slide;
		var thumbAreaSlider;

		var gallery_settings = function() {

			var settingsBig = {
				pager:false,
				auto:true,
				controls:false,
				captions:true,
				wrapperClass: 'gallery-wrapper',
				adaptiveHeight: false,
				autoControls: false,
				infiniteLoop:true,
				onSliderLoad: function(){
					$('.thumbA').removeClass('active');
					$('#thumbA_0').addClass('active');
				},
				onSlideBefore: function (slide, oldIndex, newIndex) {
					var current = gallery_slide.getCurrentSlide();
					$('.thumbA').removeClass('active');
					$('#thumbA_'+current).addClass('active');
				},
				onSlideNext: function (slide, oldIndex, newIndex) {
					var current = gallery_slide.getCurrentSlide();
					$('.thumbA').removeClass('active');
					$('#thumbA_'+current).addClass('active');
				}
			};


			return ($(window).width()>640) ? settingsBig : settingsBig;

		}

		
		gallery_slide = $('.gallery-slider').bxSlider(gallery_settings());


		function resizeNoticeSlider() {
			gallery_slide.reloadSlider(gallery_settings());
		}
		
		$(window).resize(resizeNoticeSlider);


		$('#gallery-slider-prev a').click(function(e){
			e.preventDefault();
			gallery_slide.goToPrevSlide();
			return false;
		});
		$('#gallery-slider-next a').click(function(e){
			e.preventDefault();
			gallery_slide.goToNextSlide();
			return false;
		});
		$("#gallery-pager a").click(function(e){
			e.preventDefault();
			var newIndex= parseInt($(this).attr("data-slide-index"));
			gallery_slide.goToSlide(newIndex);
		});

	});
</script>



<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>