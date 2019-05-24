<?php
define('_INDEX_', true); 
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_LANG_MOBILE_PATH.'/index.php');
    return;
}
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
// include_once(G5_LIB_PATH.'/latest.lib.php');
?>
<!-- <link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/aos/aos.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/aos/aos.js"></script>
<script>
  AOS.init();
</script> -->

<?php 
// include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
?>


<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css?ver=<?php echo G5_CSS_VER?>" />
<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main_pro.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>

<div class="vg_inner">
	
	<ul class="main-slider">
		<li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
	</ul>

	<div class="vg_title" id="title1">
		<p class="t_shadow"><?php echo $infodu['lang']['index']['main']['txt02']?></p>
		<h2 class="t_shadow"><?php echo $infodu['lang']['index']['main']['txt01']?></h2>
		
		<!-- <span id="main-slider-prev"></span> 
		<span id="main-slider-next"></span>  -->

		<div id="main-bx-pager" style="display:none">
			<ul>
				<li> <a data-slide-index="0" href=""><span class="blind">1</span></a></li>
			</ul>
		</div> 

	</div>

    <div class="vg_product_wrap">

        <ul class="main-pro-slider">
            <?php for($i=0; $i<4; $i++):?>
            <li>
                <a href="#" class="pro">
                    <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/pro.png" /></div>
                    <div class="cont">
                        <h4><?php echo $infodu['lang']['index']['main']['pro01']?></h4>
                        <p class="font_malgun"><?php echo $infodu['lang']['index']['main']['pro02']?></p>
                        <div class="more"><img src="<?php echo G5_LANG_IMG_URL?>/btn_arrow.png" /></div>
                    </div>
                </a>
            </li>
            <?php endfor;?>
        </ul>

        <span id="main-pro-slider-prev"><span class="blind">prev</span></span> 
        <span id="main-pro-slider-next"><span class="blind">next</span></span> 

        
    </div>

    <div id="main-pro-bx-pager">
        <ul>
            <li> <a data-slide-index="0" href=""><span class="blind">1</span></a></li>
            <li> <a data-slide-index="1" href=""><span class="blind">2</span></a></li>
            <li> <a data-slide-index="2" href=""><span class="blind">3</span></a></li>
            <li> <a data-slide-index="3" href=""><span class="blind">4</span></a></li>
        </ul>
    </div> 


	<!-- <div class="vg_down"><a href="#" id="go_service"><img src="<?php echo G5_LANG_IMG_URL?>/mouse.png" alt="" class="upDownAni"> <span>Scroll Down</span></a></div> -->
</div>

<script>

    $(document).ready(function(){

        var mainSlider = $('.main-slider').bxSlider({
            auto: false,
            mode:'fade',
            infiniteLoop: false,
            wrapperClass: 'main-wrapper',
            autoControls: false,
            adaptiveHeight: true,
            touchEnabled: false,
            speed: 500,
            pager: true,
            controls: true,
            nextSelector: '#main-slider-next',
            prevSelector: '#main-slider-prev',  
            pagerCustom: '#main-bx-pager', 
            onSliderLoad: function(){
                //$.fn.sloganAniamte();

                //setTimeout(function() {
                    //$('.main-slider > li').removeClass('active-slide');   
                    //$('.main-slider > li').eq(0).addClass('active-slide');
                //}, 1000);

                
            },
            onSlideAfter: function (slide, oldIndex, newIndex) {
                var current = mainSlider.getCurrentSlide();
                switch (oldIndex){
                }
                switch (current){
                }
            }

        });
        //$('#main-slider-prev a, #main-slider-next a').click(function(){
            //mainSlider.stopAuto();
            //mainSlider.startAuto();
        //});

         // setInterval(function(e){ 
         //     mainSlider.goToNextSlide();
         // }, 5000);


        var mproSlider = $('.main-pro-slider').bxSlider({
            auto: true,
            mode:'fade',
            infiniteLoop: true,
            wrapperClass: 'mpro-wrapper',
            autoControls: false,
            adaptiveHeight: true,
            touchEnabled: false,
            speed: 500,
            pager: true,
            controls: true,
            nextSelector: '#main-pro-slider-next',
            prevSelector: '#main-pro-slider-prev',  
            pagerCustom: '#main-pro-bx-pager', 
            onSliderLoad: function(){
            },
            onSlideAfter: function (slide, oldIndex, newIndex) {
            }

        });
        $('#main-pro-slider-prev a, #main-pro-slider-next a').click(function(){
            mproSlider.stopAuto();
            mproSlider.startAuto();
        });         
        
    });
   
</script>

<div class="main_con">

    <section class="k_wrap" id="card_section">
        <div class="k_container type_center">

                 <div class="card">
                    <a href="#" class="">
                        <h4><?php echo $infodu['lang']['index']['main']['card01']?></h4>
                        <p class="font_malgun"><?php echo $infodu['lang']['index']['main']['card02']?></p>
                        <div class="p-image ico_earth"></div>
                        <div class="a-box"><span><?php echo $infodu['lang']['index']['main']['card03']?></span></div>
                    
                    </a>
                </div>
                <div class="card last">
                    <a href="#" class="">
                        <h4><?php echo $infodu['lang']['index']['main']['card04']?></h4>
                        <p class="font_malgun"><?php echo $infodu['lang']['index']['main']['card05']?></p>
                        <div class="p-image ico_phone"></div>
                    </a>
                </div>

        </div>
    </section>


    <section class="k_wrap" id="customer_section">
        <div class="k_container type_center">

                <div class="customer_center first">
                    <a href="#">         
                        <div class="thumb ico01"></div>           
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['info01']?></h3>
                    </a>
                </div>
                <div class="customer_center">
                    <a href="#">         
                        <div class="thumb ico02"></div>           
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['info02']?></h3>
                    </a>
                </div>
                <div class="customer_center">
                    <a href="#">         
                        <div class="thumb ico03"></div>           
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['info03']?></h3>
                    </a>
                </div>
                <div class="customer_center">
                    <a href="#">         
                        <div class="thumb ico04"></div>           
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['info04']?></h3>
                    </a>
                </div>
                <div class="customer_center">
                    <a href="#">         
                        <div class="thumb ico05"></div>           
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['info05']?></h3>
                    </a>
                </div>
                <div class="customer_center last">
                    <a href="#">         
                        <div class="thumb ico06"></div>           
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['info06']?></h3>
                    </a>
                </div>

        </div>
    </section>




</div>


<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>