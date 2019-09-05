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
            	<strong class=""><div class="bg"></div><?php echo $infodu['lang']['index']['main']['txt01']?></strong><br/>
            	<strong class=""><div class="bg"></div><?php echo $infodu['lang']['index']['main']['txt02']?></strong>
           	</h2>

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
               // $('.main-slider > li').eq(0).addClass('active-slide');
                //$('#main-pro-bx-pager a.active span.step').animate({'width' : '100%'}, 6000, function(){});   
            },
            onSlideBefore: function (slide, oldIndex, newIndex) {
            	var current = mainSlider.getCurrentSlide();
            },
            onSlideAfter: function (slide, oldIndex, newIndex) {
                var current = mainSlider.getCurrentSlide();

            }

        });

        var timer = null;
        timer = setInterval(function(e){ 
            mainSlider.goToNextSlide();
        }, 6000);


        $('#slider-play a').click(function(e){
            e.preventDefault();
            var toggle = $(this).attr('data-toggle');

            if(toggle=="stop"){
                clearInterval(timer);
                $(this).attr('data-toggle', 'start');
                $(this).find('.fa').removeClass('fa-pause').addClass('fa-play');
                $(this).find('span').html('메인슬라이드 시작');
            } else {
                timer = setInterval(function(e){ 
                    mainSlider.goToNextSlide();
                }, 6000);
                $(this).attr('data-toggle', 'stop');
                $(this).find('.fa').removeClass('fa-play').addClass('fa-pause');
                $(this).find('span').html('메인슬라이드 정지');
            }

        });

       
    });
   
</script>


<section class="k_wrap" id="car_section">
    <div class="k_container type_center carMain">
        <div class="car_img">
            <a href="<?php echo G5_LANG_URL?>/company/company.php"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_img.jpg" alt="" /></a>
        </div>
        <div class="car_desc">
            <h3 class="font_montserrat"><?php echo $infodu['lang']['index']['main']['spo01']?></h3>
            <p><?php echo $infodu['lang']['index']['main']['spo02']?></p>
            <div class="more_view font_montserrat">
                <a href="<?php echo G5_LANG_URL?>/company/company.php" class="btnMore inline tran-animate">
                    <?php echo $infodu['lang']['index']['main']['spoMore']?>  
                    <div class="bgArrow"></div>               
                </a>
            </div>
        </div>        
    </div>
</section>

<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.it.css?ver=<?php echo G5_CSS_VER?>" />
<section class="k_wrap" id="it_section">
    <div class="k_container type_center">
        <ul class="it-slider">
            <?php for($i=0; $i<3; $i++):?>
            <li>
                <div class="it_desc">
                    <h3 class="font_montserrat"><?php echo $infodu['lang']['index']['main']['it01']?></h3>
                    <h4 class=""><?php echo $infodu['lang']['index']['main']['it02']?></h3>
                    <p><?php echo $infodu['lang']['index']['main']['it03']?></p>
                    <div class="more_view font_montserrat">
                        <a href="#" class="btnMore tran-animate">
                            <?php echo $infodu['lang']['index']['main']['itMore']?>  
                            <div class="bgArrow"></div>  
                            <div class="bg tran-animate"></div>              
                        </a>
                    </div>
                </div>
                <div class="it_img">
                    <a href="<?php echo G5_LANG_URL?>/company/company.php">
                        <img src="<?php echo G5_LANG_IMG_URL?>/contents02_img01.jpg" alt="" />
                        <img src="<?php echo G5_LANG_IMG_URL?>/contents02_img02.jpg" alt="" />
                    </a>
                </div>
            </li>
            <?php endfor;?>
        </ul>
        <span id="it-slider-prev"></span>
        <span id="it-slider-next"></span>

        <div id="it-bx-pager">
            <ul>
                <li> <a data-slide-index="0" href="" class="active"><span class="step"></span><span class="blind">1</span></a></li>
                <li> <a data-slide-index="1" href="" class=""><span class="step"></span><span class="blind">2</span></a></li>
                <li> <a data-slide-index="2" href="" class=""><span class="step"></span><span class="blind">3</span></a></li>
            </ul>
        </div>
     
    </div>
</section>
<script>
    $(document).ready(function(){
        var settings1 = function() {
            var settings1 = {
                auto: true,
                infiniteLoop: true,
                wrapperClass: 'it-wrapper',
                autoControls: false,
                adaptiveHeight: true,
                speed: 500,
                pager: true,
                controls: true, 
                nextSelector: '#it-slider-next',
                prevSelector: '#it-slider-prev',
                pagerCustom: '#it-bx-pager',
            };
            return settings1;
        }

        var itSlider;
        itSlider = $('.it-slider').bxSlider(settings1());

        $('#it-slider-prev a, #it-slider-next a, #it-bx-pager a').click(function(){
            itSlider.stopAuto();
            itSlider.startAuto();
        });
        
    });
   
</script>




<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.product.css?ver=<?php echo G5_CSS_VER?>" />
<section class="k_wrap" id="pro_section">
    <div class="k_container type_center">
        <div class="pro_wrap">
            <div class="page-header">
                <h4 class="font_montserrat">GALLERY</h4>
                <div class="pro-slider-controls">
                    <span id="slider-prev"><a class="control-play-btn2" href="#" data-toggle="prev"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_btn_left.png" /></a></span>
                    <span id="slider-next"><a class="control-play-btn2" href="#" data-toggle="next"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_btn_right.png" /></a></span>
                    <span id="slider-more"><a class="control-play-btn2" href="#" data-toggle="stop"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_btn_more.png" /></a></span>
                </div>
            </div>
            <div class="product_wrap">
                <ul class="product-slider">  
                    
                    <li class="pro" >
                        <a href="#">
                            <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_img01.jpg" /></div>
                            <div class="desc">
                                <h5>제품갤러리1</h5>
                            </div>
                        </a>
                    </li>
                    <li class="pro" >
                        <a href="#">
                            <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_img02.jpg" /></div>
                            <div class="desc">
                                <h5>제품갤러리1</h5>
                            </div>
                        </a>
                    </li>
                    <li class="pro" >
                        <a href="#">
                            <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_img03.jpg" /></div>
                            <div class="desc">
                                <h5>제품갤러리1</h5>
                            </div>
                        </a>
                    </li>
                    <li class="pro" >
                        <a href="#">
                            <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_img04.jpg" /></div>
                            <div class="desc">
                                <h5>제품갤러리1</h5>
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
                speed: 500,
                pager: true,
                controls: false, 
                nextSelector: '#product-slider-next',
                prevSelector: '#product-slider-prev',
                pagerCustom: '#pro-bx-pager',
            };
            var settings2 = {
                auto: true,
                infiniteLoop: true,
                wrapperClass: 'product-wrapper',
                autoControls: false,
                adaptiveHeight: true,
                speed: 500,
                pager: true,
                controls: false, 
                nextSelector: '#product-slider-next',
                prevSelector: '#product-slider-prev',
                pagerCustom: '#pro-bx-pager',
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

<section class="k_wrap" id="cus_section">
    <div class="k_container type_center">

        <div class="lt">
            <h3>NEWS & NOTICE</h3>
            <div class="con">
                <p><a href="#">홈페이지 리뉴얼 하였습니다.</a></p>
            </div>
            <div class="more"><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=notice"><span class="blind">더보기<</span></a></div>   
        </div>

        <div class="lt">
            <h3><?php echo $infodu['lang']['index']['main']['bottom01']?></h3>
            <div class="con">
                <p><?php echo $infodu['lang']['index']['main']['bottom02']?></p>
            </div>
        </div>

      
    </div>
</section>


<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>