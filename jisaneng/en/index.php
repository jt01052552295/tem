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
            <span>Best Company</span>
            <h2>
                <div class="vg_tit_box "><div class="">JISAN ENGINEERING</div></div>
            </h2>
            <p>Officially Registered to HHI as a Subcontractor Specialized in<br/>Piping Installation Service.</p>
            <span id="main-slider-prev"></span> <!-- 이전 -->
            <span id="main-slider-next"></span> <!-- 다음 --> 

            <!-- <div id="main-bx-pager">
                <ul>
                    <li> <a data-slide-index="0" href=""><span class="blind">1</span></a></li>
                    <li> <a data-slide-index="1" href=""><span class="blind">2</span></a></li>
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




<section class="k_wrap" id="ban_section">
    <div class="k_container1000 type_center">
        <div class="product_wrap">
            <div class="customerInner">
                <div class="customer_center bg_cs01">                  
                    <h3 class="title">About Company</h3>
                    <p class="content">We, Jisan Engineering, have<br/>been providing high quality ... </p>
                    <a href="#">Detail View <span class="right_arrow"></span></a>
                </div>
                <div class="customer_center bg_cs02">                  
                    <h3 class="title">Customer Center</h3>
                    <p class="tel">+82-201-0283</p>
                    <p class="fax">Fax. +82-234-0283</p>
                </div>  
                <div class="customer_center bg_cs03">                  
                    <h3 class="title">Our Service</h3>
                    <p class="content">Piping Technical Service<br/>Partnership Service</p>
                    <a href="#">Detail View <span class="right_arrow"></span></a>
                </div>  
            </div>
        </div>

    </div>
</section>

<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>