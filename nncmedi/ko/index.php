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
            <h2 class="font_nanummyeongjo">
            	<div class="left"><?php echo $infodu['lang']['index']['main']['txt01']?></div>
            	<div class="right"><?php echo $infodu['lang']['index']['main']['txt02']?></div>
           	</h2>
            <p class="font_nanummyeongjo"><?php echo $infodu['lang']['index']['main']['txt03']?></p>

            <div id="main-pro-bx-pager">
                <ul>
                    <li> <a data-slide-index="0" href="" class="active"><span class="step"></span><span class="txt">01</span></a></li>
                    <li> <a data-slide-index="1" href="" class=""><span class="step"></span><span class="txt">02</span></a></li>
                    <li> <a data-slide-index="2" href="" class=""><span class="step"></span><span class="txt">03</span></a></li>
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


<section class="k_wrap " id="etc_section">
    <div class="etcInner">
            <div class="etc_title">
                <h4 class="font_nanummyeongjo">
                    <small><?php echo $infodu['lang']['index']['main']['etc01']?></small>
                    <?php echo $infodu['lang']['index']['main']['etc02']?>
                </h4>
            </div>

            <div class="etc_center">  
                <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_icon01.png" /></div>
                <div class="con">      
                    <h3 class="title font_nanummyeongjo"><?php echo $infodu['lang']['index']['main']['etc03']?></h3>
                    <p class="content"><?php echo $infodu['lang']['index']['main']['etc04']?></p>
                </div>
            </div>
            <div class="etc_center">                                 
                <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_icon02.png" /></div>
                <div class="con">      
                    <h3 class="title font_nanummyeongjo"><?php echo $infodu['lang']['index']['main']['etc05']?></h3>
                    <p class="content"><?php echo $infodu['lang']['index']['main']['etc06']?></p>
                </div>
            </div>
            <div class="etc_center last">                                
                <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_icon03.png" /></div>
                <div class="con">      
                    <h3 class="title font_nanummyeongjo"><?php echo $infodu['lang']['index']['main']['etc07']?></h3>
                    <p class="content"><?php echo $infodu['lang']['index']['main']['etc08']?></p>
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
                <div class="it_img">
                    <a href="#" class="it_link">
                        <img src="<?php echo G5_LANG_IMG_URL?>/item.jpg" alt="" />
                        <div class="tit font_nanummyeongjo"><?php echo $infodu['lang']['index']['main']['it02']?></div>
                    </a>
                </div>
                <div class="it_desc">
                    
                    <h4 class="font_nanummyeongjo">
                        <a href="#">
                            <?php echo $infodu['lang']['index']['main']['it02']?>
                            <div class="more_view">
                                <div class="btnMore tran-animate"><span class="sound_only"><?php echo $infodu['lang']['index']['main']['itMore']?></span></div>
                            </div>    
                        </a>
                    </h4>
                    <p><?php echo $infodu['lang']['index']['main']['it03']?></p>
                    
                </div>
                
            </li>
            <?php endfor;?>
        </ul>
        <div class="it_title">
            <h3 class="font_nanummyeongjo"><?php echo $infodu['lang']['index']['main']['it01']?></h3>
            <div class="it_category">
                <ul class="it_ul">
                    <li><a href="#" class="on"><span><?php echo $infodu['lang']['index']['main']['cate01']?></span></a></li>
                    <li><a href="#" class=""><span><?php echo $infodu['lang']['index']['main']['cate02']?></span></a></li>
                    <li><a href="#" class=""><span><?php echo $infodu['lang']['index']['main']['cate03']?></span></a></li>
                    <li><a href="#" class=""><span><?php echo $infodu['lang']['index']['main']['cate04']?></span></a></li>
                </ul>
            </div>
        </div>
       
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
                auto: false,
                mode: 'fade',
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


<section class="k_wrap">
    <div class="k_container type_center">

        <div class="yTube">
            <iframe width="100%" height="700" src="https://www.youtube.com/embed/VceRLrOajaA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
    </div>
</section>



<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>