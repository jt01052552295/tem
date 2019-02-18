<?php
define('_INDEX_', true); 
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>

<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>
<section class="k_wrap">
    <div class="vg_inner">
        
        <ul class="main-slider">
            <li><img src="<?php echo G5_LANG_IMG_URL?>/vg01.jpg" alt="" /></li>
            <li><img src="<?php echo G5_LANG_IMG_URL?>/vg02.jpg" alt="" /></li>
            <li><img src="<?php echo G5_LANG_IMG_URL?>/vg03.jpg" alt="" /></li>
        </ul>

        <div class="vg_title" id="title1">

<!--             <div class="bar init-pc"></div>            
            <div class="vg_p_box">
                <div class="parallax-init-pc"><p>You are the frontier in valve industry with the</p></div>
            </div>

            <h2>
                <div class="vg_tit_box"><div class="parallax-init-pc">HIFLY VALVE</div></div>
            </h2>
            

            <div class="vg_link init-pc">
                <a href="#" class="tran-animate"><span>VIEW</span></a>
            </div> -->

            <span id="main-slider-prev"></span>
            <span id="main-slider-next"></span>
        </div>
        

    </div>
</section>
<script>
    $(document).ready(function(){


        $.fn.sloganAniamte = function(){
            $('#title1 .parallax-init-pc').each(function(e){
                var currLink = $(this)
                var e = 1;
                var _d = 200 * (e)
                currLink.delay(_d).animate({opacity:"1.0"}, _d , function(){
                    currLink.addClass("add-stage");
                });
            });
        };
        $.fn.sloganAniamte2 = function(){
            $('#title1 .init-pc').each(function(e){
                var currLink = $(this)
                var e = e+1;
                var _d = 1000 * (e)
                currLink.delay(_d).animate({opacity:"1.0"}, _d);
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

                
            },
            onSlideAfter: function (slide, oldIndex, newIndex) {
                var current = mainSlider.getCurrentSlide();
                switch (oldIndex){
                }
                switch (current){
                }
            }

        });

        setInterval(function(e){ 
            mainSlider.goToNextSlide();
        }, 3000);
        
    });
   
</script>



<section class="k_wrap">
    <div class="k_container type_center">
        <div class="infoInner">
            <div class="customer_center bg_c1">   
                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/c_title.png" alt="" /></div>      
            </div>
            <div class="customer_center bg_c2">    
                <a href="<?php echo G5_LANG_URL?>/company/message.php">
                    <h3 class="">인사말</h3>
                    <p class="">Serving customers first with safe, efficient products.</p>
                </a>  
            </div>
            <div class="customer_center bg_c3">    
                <a href="<?php echo G5_LANG_URL?>/company/moto.php">
                    <h3 class="">사훈 및 경영방침</h3>
                    <p class="">Putting Customers, Partners, Emplyoees first.</p>
                </a>  
            </div>
            <div class="customer_center2">   
                <h3 class="">제품소개</h3>
                <p class="">대한오토텍 제품을 소개합니다.</p>

                <link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.product.css" />
                <ul class="pro-slider">
                    <li><img src="<?php echo G5_LANG_IMG_URL?>/pro01.jpg" alt="" /></li>
                    <li><img src="<?php echo G5_LANG_IMG_URL?>/pro02.jpg" alt="" /></li>
                    <li><img src="<?php echo G5_LANG_IMG_URL?>/pro03.jpg" alt="" /></li>
                </ul>
                <span id="product-slider-prev"></span>
                <span id="product-slider-next"></span>
                <script>
                    $(document).ready(function(){

                        var proSlider = $('.pro-slider').bxSlider({
                            auto: true,
                            mode:'fade',
                            infiniteLoop: true,
                            wrapperClass: 'product-wrapper',
                            autoControls: false,
                            adaptiveHeight: true,
                            speed: 1000,
                            pager: false,
                            controls: true,
                            nextSelector: '#product-slider-prev',
                            prevSelector: '#product-slider-next',   
                            onSliderLoad: function(){
                            }

                        });
                        $('#product-slider-prev a, #product-slider-next a').click(function(){
                            proSlider.stopAuto();
                            proSlider.startAuto();
                        });
                        
                    });
                </script>

            </div>
            <div class="customer_center2 bg_c5">    
                <a href="<?php echo G5_LANG_URL?>/company/history.php">
                    <h3 class="">회사연혁</h3>
                    <p class="">It has grown and developed as a specialized die casting company.</p>
                </a>  
            </div>
            <div class="customer_center3">    
                <a href="<?php echo G5_LANG_URL?>/company/cert.php" class="">
                    <h3 class="">인증현황</h3>
                    <p class="">믿을 수 있는 기업 대한오토텍</p>
                    <span class="ico_c1"><img src="<?php echo G5_LANG_IMG_URL?>/ico_c1.jpg" alt="" /></span>
                </a> 
                <a href="<?php echo G5_LANG_URL?>/tech/status.php" class="">
                    <h3 class="">생산설비</h3>
                    <p class="">생산설비 현황 안내</p>
                    <span class="ico_c2"><img src="<?php echo G5_LANG_IMG_URL?>/ico_c2.jpg" alt="" /></span>
                </a>
                <a href="<?php echo G5_LANG_URL?>/tech/location.php" class="">
                    <h3 class="">오시는길</h3>
                    <p class="">영업소 및 공장안내</p>
                    <span class="ico_c3"><img src="<?php echo G5_LANG_IMG_URL?>/ico_c3.jpg" alt="" /></span>
                </a> 
            </div>
        </div>
    </div>
</section>




<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>