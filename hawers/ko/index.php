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
            <div class="vg_title_inner">
                <h2>
                	<strong class="font_montserrat"><?php echo $infodu['lang']['index']['main']['txt01']?></strong>
               	</h2>
                <p><?php echo $infodu['lang']['index']['main']['txt02']?></p>
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
                            <h3 class="title"><?php echo $infodu['lang']['index']['main']['business01']?></h3>
                            <p class="content"><?php echo $infodu['lang']['index']['main']['business02']?></p>
                            <div class="more font_montserrat"><span><?php echo $infodu['lang']['index']['main']['businessMore']?></span></div>
                        </div>
                        <div class="plus"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_btn.png" /></div>
                    </div>
                </a>
            </div>
            <div class="business">
                <a href="#" class="">
                    <div class="inner">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_icon02.png" /></div>
                        <div class="desc">
                            <h3 class="title"><?php echo $infodu['lang']['index']['main']['business03']?></h3>
                            <p class="content"><?php echo $infodu['lang']['index']['main']['business04']?></p>
                            <div class="more font_montserrat"><span><?php echo $infodu['lang']['index']['main']['businessMore']?></span></div>
                        </div>
                        <div class="plus"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_btn.png" /></div>
                    </div>
                </a>
            </div>
            <div class="business last">
                <a href="#" class="">
                    <div class="inner">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_icon03.png" /></div>
                        <div class="desc">
                            <h3 class="title"><?php echo $infodu['lang']['index']['main']['business05']?></h3>
                            <p class="content"><?php echo $infodu['lang']['index']['main']['business06']?></p>
                            <div class="more font_montserrat"><span><?php echo $infodu['lang']['index']['main']['businessMore']?></span></div>
                        </div>
                        <div class="plus"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_btn.png" /></div>
                    </div>
                </a>
            </div>
        </div>     


    </div>
</section>

<section class="k_wrap " id="etc_section">
    <div class="k_container type_center etcInner">

            <div class="etc_center bg01">                    
                <div class="con">
                    <h3 class="title font_montserrat"><?php echo $infodu['lang']['index']['main']['etc01']?></h3>
                    <p class="content"><?php echo $infodu['lang']['index']['main']['etc02']?></p>
                    <div class="more"><a href="<?php echo G5_LANG_URL?>/company/company.php"><span><?php echo $infodu['lang']['index']['main']['etc03']?></span></a></div>
                </div>                 
            </div>
            <div class="etc_center"> 
                <div class="etc_box "> 
                    <a href="#" class="bg02 tran-animate"><span><?php echo $infodu['lang']['index']['main']['etc04']?></span></a>
                </div>
                <div class="etc_box last"> 
                    <a href="#" class="bg03 tran-animate"><span><?php echo $infodu['lang']['index']['main']['etc05']?></span></a>
                </div>

                <div class="cs_box "> 
                    <div class="inner">
                        <h3 class="font_montserrat"><?php echo $infodu['lang']['index']['main']['etc06']?></h3>
                        <h4 class="font_montserrat"><?php echo $infodu['lang']['index']['main']['etc07']?></h4>
                        <p class=""><?php echo $infodu['lang']['index']['main']['etc08']?></p>
                        <div class="more2"><a href="<?php echo G5_LANG_URL?>/mail/mail.php"><span><?php echo $infodu['lang']['index']['main']['etc09']?></span></a></div>
                    </div>
                </div>
            </div>


    </div>
</section>


<section class="k_wrap" id="map_section">
    <div class="k_container type_center">


        <div class="sitemap_main">
            <?php for($i=0; $i<count($nav1st); $i++): ?>
            <div class="sitemap">
                <h5><a href="<?php echo $nav1st[$i]['url']?>"><?php echo $nav1st[$i]['title']?></a></h5>
                <ul>

                    <?php for($j=0; $j<count($nav2nd); $j++):?>
                        <?php if(substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']): ?>
                            <li><a href="<?php echo $nav2nd[$j]['url']?>"><?php echo $nav2nd[$j]['title']?></a>
                                <p>
                                    <?php for($k=0; $k<count($nav3rd); $k++):?>
                                        <?php if(substr($nav3rd[$k]['mCode'],0,4) == $nav2nd[$j]['mCode'] ): ?>
                                            <a href="<?php echo $nav3rd[$k]['url']?>">- <?php echo $nav3rd[$k]['title']?></a>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </p>
                            </li>
                        <?php endif; ?>
                    <?php endfor; ?>   
                </ul>
            </div>
            <?php endfor; ?>

            <div class="siteAddr">
                <h5><?php echo $infodu['lang']['index']['main']['bottom01']?></h5>
                <p><?php echo $infodu['lang']['index']['main']['bottom02']?></p>

            </div>
        </div>
            


    </div>
</section>


<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>