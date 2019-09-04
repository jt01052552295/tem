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
        </ul>

        <div class="vg_title">
            <h2>
            	<span class="font_montserrat"><?php echo $infodu['lang']['index']['main']['txt01']?></span>
            	<strong class="font_montserrat"><?php echo $infodu['lang']['index']['main']['txt02']?></strong>
           	</h2>
            <p><?php echo $infodu['lang']['index']['main']['txt03']?></p>
            
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
                $('.main-slider > li').eq(0).addClass('active-slide');
                $('#main-pro-bx-pager a.active span.step').animate({'width' : '100%'}, 6000, function(){});   
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


<section class="k_wrap " id="etc_section">
    <div class="etcInner">

            <div class="etc_title">
                <h3><?php echo $infodu['lang']['index']['main']['etcTitle']?></h3>
                <p><?php echo $infodu['lang']['index']['main']['etcTitle2']?></p>
            </div>

            <div class="etc_center">  
                <a href="#"> 
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_img01.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['etc01']?></h3>
                        <div class="more"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_btn.png" title="" ></div>
                    </div>             
                </a>
            </div>
            <div class="etc_center">  
                <a href="#"> 
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_img02.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['etc02']?></h3>
                        <div class="more"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_btn.png" title="" ></div>
                    </div>             
                </a>
            </div>
            <div class="etc_center">  
                <a href="#"> 
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_img03.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['etc03']?></h3>
                        <div class="more"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_btn.png" title="" ></div>
                    </div>             
                </a>
            </div>
            <div class="etc_center">  
                <a href="#"> 
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_img04.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['etc04']?></h3>
                        <div class="more"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_btn.png" title="" ></div>
                    </div>             
                </a>
            </div>


    </div>
</section> 




<div class="k_wrap" id="cus_section">
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
</div>


<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>