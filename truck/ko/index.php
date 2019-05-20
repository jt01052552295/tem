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
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
        </ul>

        <div class="vg_title " id="title1">
            <h2>
                <div class="vg_tit_box "><div class=""><?php echo $infodu['lang']['index']['main']['txt01']?></div></div>
            </h2>
            <p class="font_BmJua"><?php echo $infodu['lang']['index']['main']['txt02']?></p>
            <!-- <span id="main-slider-prev"></span> 
            <span id="main-slider-next"></span> -->  

            <div id="main-bx-pager">
                <ul>
                    <li> <a data-slide-index="0" href=""><span class="blind">1</span></a></li>
                    <li> <a data-slide-index="1" href=""><span class="blind">2</span></a></li>
                    <li> <a data-slide-index="2" href=""><span class="blind">3</span></a></li>
                </ul>
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

        setInterval(function(e){ 
            mainSlider.goToNextSlide();
        }, 5000);
        
    });
   
</script>


<section class="k_wrap" id="etc_section">
    <div class="k_container type_center">


        <?php for ($k=0; $k<2; $k++):?>
                <div class="page-header">
                    <h4>
                        추천매물
                        <div class="lt_more">
                            <a href="#">
                                <span class="line1"></span>
                                <span class="line2"></span>
                            </a>
                        </div>
                    </h4>

                </div>
                <div class="rowc">
                    <ul class="grid4">  
                        
                            <?php for ($i=0; $i<8; $i++):?>
                                <li class="pro">
                                    <a href="<?php echo G5_LANG_URL?>/product/detail.php?pid=<?php echo $value[$i]['ca_id']; ?>&amp;it_id=<?php echo $value[$i]['it_id']; ?>">
                                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/car.jpg" /></div>
                                        <div class="desc">
                                            <h5>현대 메가트럭 4.5톤 카고</h5>
                                            <span class="price">5,000 만원</span>
                                            <span class="basic">매물번호 : 000</span>
                                            <span class="basic">카고트럭(4.5톤)</span>
                                            <span class="basic">2017년 l 4.5톤 l 10만Km</span>
                                            
                                        </div>
                                    </a>
                                </li>
                            <?php endfor; ?>
                        
                    </ul>
                </div>
        <?php endfor; ?>



    </div>
</section>




<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>