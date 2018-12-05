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


<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>
<section class="k_wrap">
    <div class="vg_inner">
        
        <ul class="main-slider">
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg1.png);"></li>
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg1.png);"></li>
        </ul>

        <div class="vg_title" id="title1">
            <h2>
                <div class="vg_tit_box "><div class="">Make Future</div></div>
                <div class="vg_tit_box "><div class="">Realize your dreams!</div></div>
            </h2>
            <span id="main-slider-prev"></span> <!-- 이전 -->
            <span id="main-slider-next"></span> <!-- 다음 --> 

            <div id="main-bx-pager">
                <ul>
                    <li> <a data-slide-index="0" href=""><span class="blind">1</span></a></li>
                    <li> <a data-slide-index="1" href=""><span class="blind">2</span></a></li>
                </ul>
            </div> 

        </div>

        <div class="k_container1000 type_center">
            <div class="vg_box">
                <div class="pro_content a1">
                    <a href="#">
                        <h4>여객선 소개</h4>
                        <div class="bg a01"></div>
                        <p>통영↔사량도 카페리 여객선 나루칸을 소개합니다.</p>
                        <span class="more"></span>
                    </a>
                </div>

                <div class="pro_content a2">
                    <a href="#">
                        <h4>운항시간표</h4>
                        <div class="bg a02"></div>
                        <p>통영↔사량도 카페리<br/>여객선 운항시간표입니다.</p>
                        <span class="more"></span>
                    </a>
                </div>

                <div class="pro_content a3">
                    <a href="#">
                        <h4>고객문의</h4>
                        <div class="bg a03"></div>
                        <p class="bold">055)648-0776~7 </p>
                        <span class="more"></span>
                    </a>
                </div>

            </div>
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
            controls: false,
            nextSelector: '#main-slider-prev',
            prevSelector: '#main-slider-next',  
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

        // setInterval(function(e){ 
        //     mainSlider.goToNextSlide();
        // }, 5000);
        
    });
   
</script>



<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>