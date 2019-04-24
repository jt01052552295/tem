<?php
define('_INDEX_', true); 
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>

<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>

<div class="vg_inner">
    
    <ul class="main-slider">
        <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
    </ul>

    <div class="vg_title" id="title1">
        <div class="vg_box">
            <h2>
                <div class="vg_tit_box"><div class="topTxt"><?php echo $infodu['lang']['index']['main']['txt01']?></div></div>
                <div class="vg_tit_box"><div class="topTxt"><?php echo $infodu['lang']['index']['main']['txt02']?></div></div>
            </h2>
            <p><?php echo $infodu['lang']['index']['main']['txt03']?></p>
        </div>
    </div>       

<!--     <div class="vg_down"><a href="#" id="go_service"><img src="<?php echo G5_LANG_IMG_URL?>/mouse.png" alt="" class="upDownAni" /> <span>Scroll Down</span></a></div>

 -->
   
</div>

<script>
    $(document).ready(function(){

        $('#go_service').click(function(e){
            e.preventDefault();
            var service_section = $('#service_section').offset().top;

            var heights = $('#header_height').map(function(){
                return $(this).outerHeight(true);
            }).get(),
            maxHeight = Math.max.apply(null, heights);
            var goTo = service_section;
            $('html, body').animate({scrollTop : goTo}, 400);
        }); 

        $.fn.sloganAniamte = function(){
            $('#title1 .parallax-init-pc').each(function(e){
                var currLink = $(this)
                var e = e + 1;
                var _d = 500 * (e)
                currLink.delay(_d).animate({opacity:"1.0"}, _d , function(){
                    currLink.addClass("add-stage");
                });
            });
        };   



        var mainSlider = $('.main-slider').bxSlider({
            auto: false,
            mode:'fade',
            infiniteLoop: true,
            wrapperClass: 'main-wrapper',
            autoControls: false,
            adaptiveHeight: true,
            speed: 1000,
            pager: false,
            controls: true,
            nextSelector: '#main-slider-prev',
            prevSelector: '#main-slider-next',   
            onSliderLoad: function(){
                // setTimeout(function() {
                //     $.fn.sloganAniamte();
                // }, 500);
                // $('.main-slider > li').eq(0).addClass('active-slide');

                
            },
            onSlideBefore: function (slide, oldIndex, newIndex) {
                var current = mainSlider.getCurrentSlide();

                // setTimeout(function() {
                //     $('.main-slider > li').removeClass('active-slide');   
                //     $('.main-slider > li').eq(newIndex).addClass('active-slide');
                // }, 1000);
                

            },
            onSlideAfter: function (slide, oldIndex, newIndex) {
                var current = mainSlider.getCurrentSlide();
                switch (oldIndex){
                }
                switch (current){
                }
            }

        });
        

        // setInterval(function(e){ 
        //     mainSlider.goToNextSlide();
        // }, 8000);
        
    });
   
</script>


<div class="main_con">

    <section class="k_wrap" id="info_section">
        <div class="k_container type_center">
            <div class="infoInner">
                <div class="customer_center">   
                    <a href="<?php echo G5_LANG_URL ?>/company/overview.php"> 
                        <div class="thumb ico01"></div>              
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['info01']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['info02']?></p>
                        <span class="more"></span>
                    </a>
                </div>
                <div class="customer_center">    
                    <a href="<?php echo G5_LANG_URL ?>/company/overview.php"> 
                        <div class="thumb ico02"></div>              
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['info03']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['info04']?></p>
                        <span class="more"></span>
                    </a>
                </div>
                <div class="customer_center">
                    <a href="<?php echo G5_LANG_URL ?>/mail/mail.php">        
                        <div class="thumb ico03"></div>           
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['info05']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['info06']?></p>
                        <span class="more"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>


<section class="k_wrap " id="etc_section">
    <div class="k_container type_center etcInner">
            <div class="etc_title">
                <h4><?php echo $infodu['lang']['index']['main']['etc01']?></h4>
                <p><?php echo $infodu['lang']['index']['main']['etc02']?></p>

                <span class="more">
                    <a href="<?php echo G5_LANG_URL ?>/performance/performance.php"><span class="blind"><?php echo $infodu['lang']['index']['main']['etc03']?></span></a>
                </span>
            </div>

            <div class="etc_center tran-animate">
                <a href="<?php echo G5_LANG_URL ?>/performance/performance.php">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/per01.jpg" title=""></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['etc04']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['etc05']?></p>
                    </div>
                </a>
            </div>
            <div class="etc_center tran-animate">  
                 
                <a href="<?php echo G5_LANG_URL ?>/performance/performance.php">                     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/per02.jpg" title=""></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['etc06']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['etc07']?></p>
                    </div>
                </a>
            </div>
            <div class="etc_center tran-animate"> 
                 
                <a href="<?php echo G5_LANG_URL ?>/performance/performance.php">                  
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/per03.jpg" title=""></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['etc08']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['etc09']?></p>
                    </div>
                </a>
            </div>

    </div>
</section>




</div>



<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>