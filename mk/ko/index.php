<?php
define('_INDEX_', true); 
include_once('./_common.php');

// if (G5_IS_MOBILE) {
//     include_once(G5_LANG_MOBILE_PATH.'/index.php');
//     return;
// }

include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>
<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/aos/aos.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/aos/aos.js"></script>
<script>
  AOS.init();
</script>


<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>
<section class="k_wrap ">

    <div class="vg_inner">
        
        <ul class="main-slider">
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
        </ul>

        <div class="vg_title" id="title1">
            <h2>
                <div class="vg_tit_box "><div class=""><?php echo $infodu['lang']['index']['main']['txt01']?></div></div>
                <div class="vg_tit_box "><div class=""><?php echo $infodu['lang']['index']['main']['txt02']?></div></div>
            </h2>
            <!-- <p data-aos="fade-up" data-aos-duration="2000"><?php echo $infodu['lang']['index']['main']['txt03']?></p> -->
            <!-- <span id="main-slider-prev"></span> 
            <span id="main-slider-next"></span> -->  

            <!-- <div id="main-bx-pager">
                <ul>
                    <li> <a data-slide-index="0" href=""><span class="blind">1</span></a></li>
                    <li> <a data-slide-index="1" href=""><span class="blind">2</span></a></li>
                    <li> <a data-slide-index="2" href=""><span class="blind">3</span></a></li>
                </ul>
            </div>  -->

        </div>
    </div>


</section>
<script>
    $(document).ready(function(){

        // $('#go_service').click(function(e){
        //     e.preventDefault();
        //     var service_section = $('#service_section').offset().top;

        //     var heights = $('#header_height').map(function(){
        //         return $(this).outerHeight(true);
        //     }).get(),
        //     maxHeight = Math.max.apply(null, heights);
        //     var goTo = service_section;
        //     $('html, body').animate({scrollTop : goTo}, 400);
        // }); 


        $.fn.sloganAniamte = function(){
            $('#title1 .parallax-init-pc').each(function(e){
                var currLink = $(this)
                currLink.addClass("add-stage");
            });
        };   



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
        $('#main-slider-prev a, #main-slider-next a').click(function(){
            mainSlider.stopAuto();
            mainSlider.startAuto();
        });

        // setInterval(function(e){ 
        //     mainSlider.goToNextSlide();
        // }, 5000);
        
    });
   
</script>




<section class="k_wrap" id="business_section">
    <?php include_once(G5_LANG_PATH.'/_quick.php'); ?>
    <div class="k_container type_center">
           <div class="businessInner">       
                <div class="business_title">
                    <h4>
                        <?php echo $infodu['lang']['index']['main']['txt03']?><br/>
                        <?php echo $infodu['lang']['index']['main']['txt04']?>
                    </h4>
                </div>
                <div class="business">
                   <ul>
                        <li class="bg_color_r"><?php echo $infodu['lang']['index']['main']['txt05']?></li>
                        <li class="bg_color_b"><?php echo $infodu['lang']['index']['main']['txt06']?></li>
                        <li class="bg_color_g"><?php echo $infodu['lang']['index']['main']['txt07']?></li>
                   </ul>
                </div>
            </div>

    </div>
</section>


<section class="k_wrap " id="etc_section">
    <div class="k_container type_center etcInner">


            <div class="etc_center">  
                <a href="#"> 
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/main01.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['txt08']?></h3>
                    </div>             
                </a>
            </div>
            <div class="etc_center">  
                <a href="#"> 
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/main02.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['txt09']?></h3>
                    </div>             
                </a>
            </div>
            <div class="etc_center">  
                <a href="#"> 
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/main03.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['txt10']?></h3>
                    </div>             
                </a>
            </div>
            <div class="etc_center">  
                <a href="#"> 
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/main04.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['txt11']?></h3>
                    </div>             
                </a>
            </div>


    </div>
</section> 


<section class="k_wrap " id="sponsor_section">
    <div class="k_container type_center spoInner">

            
            <div class="spo_center">
                <a href="#">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/ico_qa.png" title="" ></div>
                </a>
            </div>
            <div class="spo_center">
                <a href="#">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/ico_talk.png" title="" ></div>
                </a>
            </div>
            <div class="spo_center">
                <a href="#">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/ico_line.png" title="" ></div>
                </a>
            </div>
            <div class="spo_center">
                <a href="#">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/ico_blog.png" title="" ></div>
                </a>
            </div>
            <div class="spo_center">
                <a href="#">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/ico_fb.png" title="" ></div>
                </a>
            </div>
            <div class="spo_center">
                <a href="#">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/ico_insta.png" title="" ></div>
                </a>
            </div>

    </div>
</section>








<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>