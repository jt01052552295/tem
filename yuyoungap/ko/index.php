<?php
define('_INDEX_', true); 
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_LANG_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 

?>
<div class="back_con"> 



    <link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css?ver=<?php echo G5_CSS_VER?>" />
    <script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>
    <section class="k_wrap">
        <div class="vg_inner">
            
            <ul class="main-slider">
                <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);">
                    
                </li>
            </ul>
            <div class="vg_title">
                <h2 data-aos="fade-up" data-aos-duration="500"><?php echo $infodu['lang']['main']['txt01']?></h2>
                <p data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000"><?php echo $infodu['lang']['main']['txt02']?></p>
            </div>

            <div class="vg_down upDownAni">
                <a href="#" id="go_service">
                    <img src="<?php echo G5_LANG_IMG_URL?>/mouse.png" alt="" title="">
                    <span><?php echo $infodu['lang']['main']['txt03']?></span>
                </a>
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
                speed: 500,
                pager: true,
                controls: true,
                nextSelector: '#main-slider-next',
                prevSelector: '#main-slider-prev',  
                pagerCustom: '#main-bx-pager', 
                onSliderLoad: function(){

                    $('.main-slider > li').eq(0).addClass('active-slide');
                    setTimeout(function() {
                        $('header#header').addClass('down');
                    }, 500);

                    
                },
                onSlideBefore: function (slide, oldIndex, newIndex) {
                    var current = mainSlider.getCurrentSlide();
                    
                    

                },
                onSlideAfter: function (slide, oldIndex, newIndex) {
                    var current = mainSlider.getCurrentSlide();
                    switch (oldIndex){
                    }
                    switch (current){
                    }
                    
                }

            });
            $('#main-slider-prev a, #main-slider-next a').click(function(){
                mainSlider.stopAuto();
                mainSlider.startAuto();
            });

            // setInterval(function(e){ 
            //     mainSlider.goToNextSlide();
            // }, 6000);
            
        });
       
    </script>



</div>
<div class="main_con">

    <section class="k_wrap"> 
        <div class="k_container type_center itwrap">       
            
            <div class="it_desc">
                <h3 data-aos="fade-up" ><?php echo $infodu['lang']['main']['it01']?></h3>
                <h4 data-aos="fade-up" data-aos-delay="400"><?php echo $infodu['lang']['main']['it02']?></h4>
                <p data-aos="fade-up" data-aos-delay="800">
                    <strong><?php echo $infodu['lang']['main']['it03']?></strong>
                    <?php echo $infodu['lang']['main']['it04']?>
                </p>
                <div class="more_view" data-aos="fade-up" data-aos-delay="1000">
                    <a href="#" class="btnMore tran-animate">
                        <?php echo $infodu['lang']['main']['itView']?>  
                        <div class="bgArrow"></div>              
                    </a>
                </div>
            </div>
            <div class="it_img" data-aos="fade-up" data-aos-delay="1000"><img src="<?php echo G5_LANG_IMG_URL?>/it01.png" alt="" /></div>
        </div>
    </section>

    <section class="k_wrap">
        <div class="locationView"> 
            <div class="mapView">
                <div class="mobileMap"><img src="<?php echo G5_LANG_IMG_URL?>/bg_map_m.jpg" alt="" /></div>
                <div class="map kr" data-aos="fade-down"><span><?php echo $infodu['lang']['main']['loc01']?></span></div>
                <div class="map dk" data-aos="fade-down" data-aos-delay="400"><span><?php echo $infodu['lang']['main']['loc02']?></span></div>
                <div class="map ph" data-aos="fade-down" data-aos-delay="600"><span><?php echo $infodu['lang']['main']['loc03']?></span></div>
            </div>
            <div class="addrView">
                <dl class="add_list">
                    <dt data-aos="fade-down"><?php echo $infodu['lang']['main']['p01name']?></dt>
                    <dd data-aos="fade-down"><?php echo $infodu['lang']['main']['p01addr']?></dd>
                    <dd data-aos="fade-down"><?php echo $infodu['lang']['main']['p01tel']?></dd>
                    <dt data-aos="fade-down" data-aos-delay="400"><?php echo $infodu['lang']['main']['p02name']?></dt>
                    <dd data-aos="fade-down" data-aos-delay="400"><?php echo $infodu['lang']['main']['p02addr']?></dd>
                    <dd data-aos="fade-down" data-aos-delay="400"><?php echo $infodu['lang']['main']['p02tel']?></dd>
                    <dt data-aos="fade-down" data-aos-delay="600"><?php echo $infodu['lang']['main']['p03name']?></dt>
                    <dd data-aos="fade-down" data-aos-delay="600"><?php echo $infodu['lang']['main']['p03addr']?></dd>
                    <dd data-aos="fade-down" data-aos-delay="600"><?php echo $infodu['lang']['main']['p03tel']?></dd>
                    <dt data-aos="fade-down" data-aos-delay="800"><?php echo $infodu['lang']['main']['p04name']?></dt>
                    <dd data-aos="fade-down" data-aos-delay="800"><?php echo $infodu['lang']['main']['p04addr']?></dd>
                    <dd data-aos="fade-down" data-aos-delay="800"><?php echo $infodu['lang']['main']['p04tel']?></dd>
                    <dt data-aos="fade-down" data-aos-delay="1000"><?php echo $infodu['lang']['main']['p05name']?></dt>
                    <dd data-aos="fade-down" data-aos-delay="1000"><?php echo $infodu['lang']['main']['p05addr']?></dd>
                    <dd data-aos="fade-down" data-aos-delay="1000"><?php echo $infodu['lang']['main']['p05tel']?></dd>
                </dl>
            </div>
        </div>

    </section>


    <section class="k_wrap " id="etc_section">
        <div class="k_container type_center etcInner">
                <div class="etc_title">
                    <h4 data-aos="fade-down"><?php echo $infodu['lang']['main']['etc01']?></h4>
                    <p data-aos="fade-down" data-aos-delay="400"><?php echo $infodu['lang']['main']['etc02']?></p>
                </div>

                <div class="etc_center" data-aos="fade-down" data-aos-delay="800">
                    <a href="#none">     
                        <div class="bg etc1"><img src="<?php echo G5_LANG_IMG_URL?>/ico01.png" /></div>
                        <div class="con">      
                            <h3 class="title"><?php echo $infodu['lang']['main']['etc03']?></h3>
                            <p class="content"><?php echo $infodu['lang']['main']['etc04']?></p>
                        </div>
                    </a>
                </div>
                <div class="etc_center" data-aos="fade-down" data-aos-delay="1000">              
                    <a href="#none">                            
                        <div class="bg etc2"><img src="<?php echo G5_LANG_IMG_URL?>/ico02.png" /></div>
                        <div class="con">      
                            <h3 class="title"><?php echo $infodu['lang']['main']['etc05']?></h3>
                            <p class="content"><?php echo $infodu['lang']['main']['etc06']?></p>
                        </div>
                    </a>
                </div>
                <div class="etc_center" data-aos="fade-down" data-aos-delay="1200">               
                    <a href="#none">                        
                        <div class="bg etc3"><img src="<?php echo G5_LANG_IMG_URL?>/ico03.png" /></div>
                        <div class="con">      
                            <h3 class="title"><?php echo $infodu['lang']['main']['etc07']?></h3>
                            <p class="content"><?php echo $infodu['lang']['main']['etc08']?></p>
                        </div>
                    </a>
                </div>
                <div class="etc_center" data-aos="fade-down" data-aos-delay="1400">               
                    <a href="#none">                       
                        <div class="bg etc4"><img src="<?php echo G5_LANG_IMG_URL?>/ico04.png" /></div>
                        <div class="con">      
                            <h3 class="title"><?php echo $infodu['lang']['main']['etc09']?></h3>
                            <p class="content"><?php echo $infodu['lang']['main']['etc10']?></p>
                        </div>
                    </a>
                </div>

        </div>
    </section>



</div>


<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>