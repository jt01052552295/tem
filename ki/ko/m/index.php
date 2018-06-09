<?php 
define('_INDEX_', true);	
include_once '../../board/common.php';
?>
<?php include 'head.php';?>

<link type="text/css" rel="stylesheet" href="<?=KI_URL?>js/bxslider/dist/jquery.bxslider.mobile.css" />
<script type="text/javascript" src="<?=KI_URL?>js/bxslider/dist/jquery.bxslider.js"></script>

<div class="slideWrap">
	<ul class="main1">
		<li style="background-image: url(./images/vg.jpg);">&nbsp;</li>
		<li style="background-image: url(./images/vg2.jpg);">&nbsp;</li>

	</ul>
	<div class="main_slide_slogan"></div>
	<div class="main-slider-controls">
		<span id="main-slider-prev"></span> <!-- 이전 -->
		<span id="main-slider-next"></span> <!-- 다음 -->
	</div>
</div>

<script>
	$(document).ready(function(){
		var mainSlider = $('.main1').bxSlider({
			auto: true,
			mode:'fade',
			infiniteLoop: true,
			wrapperClass: 'mobile-wrapper',
			autoControls: false,
			adaptiveHeight: true,
			pager:false,
			controls: true,
			nextSelector: '#main-slider-prev',
			prevSelector: '#main-slider-next',
		});
		$('#main-slider-prev a, #main-slider-next a').click(function(){
			mainSlider.stopAuto();
			mainSlider.startAuto();
		});
	});
</script>


<!-- <div class="main_menu">
	<div class="col-2"><a href="<?=KI_URL?>m/products/broiled.html"><img alt="slide1" src="<?=KI_URL?>m/images/slide1.jpg"></a></div>
	<div class="col-2 last"><a href="<?=KI_URL?>m/products/cook.html"><img alt="slide1" src="<?=KI_URL?>m/images/slide2.jpg"></a></div>

	<div class="col-2"><a href="<?=KI_URL?>m/products/skewers.html"><img alt="slide1" src="<?=KI_URL?>m/images/slide3.jpg"></a></div>
	<div class="col-2 last"><a href="<?=KI_URL?>m/products/potato.html"><img alt="slide1" src="<?=KI_URL?>m/images/slide4.jpg"></a></div>

	<div class="col-2"><a href="<?=KI_URL?>m/products/songpyeon.html"><img alt="slide1" src="<?=KI_URL?>m/images/slide5.jpg"></a></div>
	<div class="col-2 last"><a href="<?=KI_URL?>m/products/icewater.html"><img alt="slide1" src="<?=KI_URL?>m/images/slide6.jpg"></a></div>

	<div class="col-2"><a href="<?=KI_URL?>m/products/freeze.html"><img alt="slide1" src="<?=KI_URL?>m/images/slide7.jpg"></a></div>
	<div class="col-2 last"><a href="<?=KI_URL?>m/products/soup.html"><img alt="slide1" src="<?=KI_URL?>m/images/slide8.jpg"></a></div>
</div> -->

<div class="product_wrap">
	<div class="product_inner">
		<h3 class="title">CATERING <strong>SERVICE</strong></h3>
		<p class="subTitle">신선한 식재료로 맛있는 건강과 행복을 열어가는 삼우캐터링입니다.</p>
		<div class="product ">
			<a href="javascript:;">
				<div class="thumb"><img src="<?=KI_URL?>m/images/service1.png" /></div>
				<div class="product_content">
					<h4>Fresh</h4>
					<p>신선한 재료만을 사용합니다.</p>
				</div>
			</a>
		</div>
		<div class="product ">
			<a href="javascript:;">
				<div class="thumb"><img src="<?=KI_URL?>m/images/service2.png" /></div>
				<div class="product_content">
					<h4>Health</h4>
					<p>건강을 먼저 생각합니다.</p>
				</div>
			</a>
		</div>
		<div class="product last">
			<a href="javascript:;">
				<div class="thumb"><img src="<?=KI_URL?>m/images/service3.png" /></div>
				<div class="product_content">
					<h4>Safety</h4>
					<p>최신설비와 위생적인 시스템</p>
				</div>
			</a>
		</div>
	</div>
</div>


<div class="business_wrap">
	<div class="business_inner">
		<h3 class="title">CATERING <strong>BUSINESS</strong></h3>
		<p class="subTitle">고객 건강을 최우선으로 다양한 입맛을 고루 만족시키고 있습니다.</p>
		<div class="business ">
			
				<div class="thumb"><img src="<?=KI_URL?>m/images/img_business1.png"></div>
				<div class="desc">
					<h4>Lunch box</h4>
					<a href="<?=KI_URL?>m/business/test.html">자세히보기</a>
				</div>
			
		</div>
		<div class="business last">
			<div class="thumb"><img src="<?=KI_URL?>m/images/img_business2.png"></div>
			<div class="desc">
					<h4>Onshore Event</h4>
					<a href="<?=KI_URL?>m/business/ocean.html">자세히보기</a>
			</div>
		</div>

	</div>
</div>


 
<div style="clear: both;"></div>

<?php include 'tail.php'; ?>




<script>
$(function(){
});

var btn_loc;
$(".business_btn").click(function(){
	
	$(".content").slideUp();
	if(btn_loc != this){
		$(this).next().slideDown();
		btn_loc = this;
	}else{
		btn_loc = "";
	}
});

</script>