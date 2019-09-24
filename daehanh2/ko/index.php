<?php
define('_INDEX_', true); 
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>

<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/aos/aos.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/aos/aos.js"></script>
<script>
  AOS.init();
</script>

<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>
<section class="k_wrap">
    <div class="vg_inner">
        
        <ul class="main-slider">
            <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
            <li class="main-slider-li" id="main-slider-1" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
            <li class="main-slider-li" id="main-slider-2" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
        </ul>

        <div class="vg_title">
            <h2>
            	<strong class=""><?php echo $infodu['lang']['index']['main']['txt01']?></strong>
           	</h2>
            <p><?php echo $infodu['lang']['index']['main']['txt02']?></p>

            <div id="main-pro-bx-pager">
                <ul>
                    <li> <a data-slide-index="0" href="" class="active"><span class="step"></span><span class="blind">1</span></a></li>
                    <li> <a data-slide-index="1" href="" class=""><span class="step"></span><span class="blind">2</span></a></li>
                    <li> <a data-slide-index="2" href="" class=""><span class="step"></span><span class="blind">3</span></a></li>
                </ul>
            </div>

            <div class="main-slider-controls">      
                <span id="slider-play"><a class="control-play-btn" href="#" data-toggle="stop"><i class="fa fa-pause"></i><span class="sound_only">메인슬라이드 정지</span></a></span>
            </div>
            
        </div>


    </div>
</section>
<script>
    $(document).ready(function(){

        var mainSlider = $('.main-slider').bxSlider({
            auto: false,
            mode:'fade',
            infiniteLoop: true,
            wrapperClass: 'main-wrapper',
            autoControls: false,
            adaptiveHeight: true,
            speed: 1000,
            pager: true,
            controls: true,
            nextSelector: '#main-slider-prev',
            prevSelector: '#main-slider-next',  
            pagerCustom: '#main-pro-bx-pager', 
            onSliderLoad: function(){
                
            },
            onSlideBefore: function (slide, oldIndex, newIndex) {
            	var current = mainSlider.getCurrentSlide();
            },
            onSlideAfter: function (slide, oldIndex, newIndex) {
                var current = mainSlider.getCurrentSlide();

            }

        });

       
    });
   
</script>


<section class="k_wrap" id="business_section">
    <div class="k_container type_center">
       
       <div class="businessInner">       
            <div class="business ">
                <a href="<?php echo G5_LANG_URL?>/product/product.php" class="">
                    <div class="inner">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_icon01.png" /></div>
                        <div class="desc">
                            <span class="subTitle"><?php echo $infodu['lang']['index']['main']['business01']?></span>
                            <h3 class="title"><?php echo $infodu['lang']['index']['main']['business02']?></h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="business">
                <a href="#" class="">
                    <div class="inner">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_icon02.png" /></div>
                        <div class="desc">
                            <span class="subTitle"><?php echo $infodu['lang']['index']['main']['business03']?></span>
                            <h3 class="title"><?php echo $infodu['lang']['index']['main']['business04']?></h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="business">
                <a href="#" class="">
                    <div class="inner">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_icon03.png" /></div>
                        <div class="desc">
                            <span class="subTitle"><?php echo $infodu['lang']['index']['main']['business05']?></span>
                            <h3 class="title"><?php echo $infodu['lang']['index']['main']['business06']?></h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="business last">
                <a href="#" class="">
                    <div class="inner">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_icon04.png" /></div>
                        <div class="desc">
                            <span class="subTitle"><?php echo $infodu['lang']['index']['main']['business07']?></span>
                            <h3 class="title"><?php echo $infodu['lang']['index']['main']['business08']?></h3>
                        </div>
                        
                    </div>
                </a>
            </div>
        </div>     


    </div>
</section>



<section class="k_wrap" id="etc_section">
    <div class="k_container type_center etcInner">
        <div class="etc_title">
            <h4><?php echo $infodu['lang']['index']['main']['etc01']?></h4>
            <p><?php echo $infodu['lang']['index']['main']['etc02']?></p>
        </div>      

        <div class="etc_center bg01">                    
            <div class="con">
                <h3 class="title"><?php echo $infodu['lang']['index']['main']['etc03']?></h3>
                <p class="content"><?php echo $infodu['lang']['index']['main']['etc04']?></p>
                <div class="more"><a href="#"><span><?php echo $infodu['lang']['index']['main']['etc05']?></span></a></div>
            </div>                 
        </div>

        <div class="etc_center bg02">                    
            <div class="con">
                <h3 class="title"><?php echo $infodu['lang']['index']['main']['etc06']?></h3>
                <p class="content"><?php echo $infodu['lang']['index']['main']['etc07']?></p>
                <div class="more"><a href="#"><span><?php echo $infodu['lang']['index']['main']['etc08']?></span></a></div>
            </div>                 
        </div>



    </div>
</section>



<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.product.css?ver=<?php echo G5_CSS_VER?>" />
<section class="k_wrap" id="pro_section">
    <div class="k_container type_center">
        
        <div class="pro_wrap">
            <div class="page-header">
                <h4 class=""><?php echo $infodu['lang']['index']['main']['pro01']?></h4>
                <div class="pro-slider-controls">
                    <span id="slider-prev"><a class="control-play-btn2" href="#" data-toggle="prev"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_btn_left.png" /></a></span>
                    <span id="slider-next"><a class="control-play-btn2" href="#" data-toggle="next"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_btn_right.png" /></a></span>
                    <span id="slider-more"><a class="control-play-btn2" href="#"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_btn_more.png" /></a></span>
                </div>
            </div>
            <div class="product_wrap">
                <ul class="product-slider">  
                
               
                    <li class="pro" >
                        <a href="#">
                            <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_img01.jpg" /></div>
                            <div class="desc">
                                <h5>오수처리시설</h5>
                            </div>
                        </a>
                    </li>
                    <li class="pro" >
                        <a href="#">
                            <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_img01.jpg" /></div>
                            <div class="desc">
                                <h5>오수처리시설</h5>
                            </div>
                        </a>
                    </li>
                    <li class="pro" >
                        <a href="#">
                            <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_img01.jpg" /></div>
                            <div class="desc">
                                <h5>오수처리시설</h5>
                            </div>
                        </a>
                    </li>
                    <li class="pro" >
                        <a href="#">
                            <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_img01.jpg" /></div>
                            <div class="desc">
                                <h5>오수처리시설</h5>
                            </div>
                        </a>
                    </li>
               
                    

                </ul>
            </div>
        </div>



    </div>
</section>

<script>
    $(document).ready(function(){
        var settings = function() {
            var settings1 = {
                auto: true,
                infiniteLoop: true,
                slideMargin:25,
                slideWidth:283,
                minSlides:4,
                maxSlides:4,
                moveSlides:1,
                wrapperClass: 'product-wrapper',
                autoControls: false,
                adaptiveHeight: true,
                touchEnabled: false,
                speed: 500,
                pager: false,
                controls: false, 
            };
            var settings2 = {
                auto: true,
                infiniteLoop: true,
                wrapperClass: 'product-wrapper',
                autoControls: false,
                adaptiveHeight: true,
                touchEnabled: false,
                speed: 500,
                pager: false,
                controls: false, 
            };
            return ($(window).width()>1024) ? settings1 : settings1;
        }

        var mySlider;
        function tourLandingScript() {
            mySlider.reloadSlider(settings());
        }

        mySlider = $('.product-slider').bxSlider(settings());

        $('#slider-prev a').click(function(e){
            e.preventDefault();
            mySlider.stopAuto();
            mySlider.goToPrevSlide();
            mySlider.startAuto();
            return false;
        });
        $('#slider-next a').click(function(e){
            e.preventDefault();
            mySlider.stopAuto();
            mySlider.goToNextSlide();
            mySlider.startAuto();
            return false;
        });
        
        $(window).resize(tourLandingScript);       
    });
   
</script>


<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>