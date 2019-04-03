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
        <h2>
            <div class="vg_tit_box"><div class="topTxt"><?php echo $infodu['lang']['index']['main']['txt01']?></div></div>
            <div class="vg_tit_box"><div class="topTxt"><?php echo $infodu['lang']['index']['main']['txt02']?></div></div>
        </h2>
        <!-- <span id="main-slider-prev"></span>  -->
        <!-- <span id="main-slider-next"></span>  -->

        <p><?php echo $infodu['lang']['index']['main']['txt03']?></p>
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

    <section class="k_wrap" id="management_section">           
        <div class="k_container type_center">

            <div class="thumb2"><a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/cu01.jpg" alt="" /></a></div>
            <div class="entryWrapTr">
                <div class="concon">
                    <div class="ctit">
                        <h3 class=""><?php echo $infodu['lang']['index']['main']['main01']?></h3>
                    </div>
                    <div class="ccon">
                        <p><?php echo $infodu['lang']['index']['main']['main02']?></p>
                    </div>
                    <div class="a-box"><a href="#" class="sub_link_btn tran-animate"><span><?php echo $infodu['lang']['index']['main']['main03']?></span><span class="arrow"></span></a></div>
                </div>
            </div>
            

        </div>
    </section>




    <section class="k_wrap" id="service_section">
        <div class="k_container type_center">

                <div class="partner-title">
                    <h3>대표 시공사례</h3>
                    <a href="#">
                        <span>시공사례 더보기</span><span class="more">+</span>
                    </a>
                </div>

                <div class="partner_inner">
                        <?php for($i=0; $i<5; $i++):?>
                        <div class="partner-box">
                            <a href="javascript:;">
                                <div class="con">
                                    <h4><strong>[후렉스간판]</strong>짜박찌개</h4>
                                    <div class="more">+</div>
                                </div>
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/pro01.jpg"  alt="" /></div>
                            </a>
                        </div>       
                        <?php endfor; ?>
                </div>          
            
        </div>
    </section>




    <section class="k_wrap" id="card_section">
        <div class="k_container type_center">

                <div class="card">
                    
                    <h4><?php echo $infodu['lang']['index']['main']['card01']?></h4>
                    <ul>
                        <li><?php echo $infodu['lang']['index']['main']['card02']?></li>
                        <li><?php echo $infodu['lang']['index']['main']['card03']?></li>
                    </ul>
                    <div class="p-image ico01"></div>
                   
                </div>
                <div class="card">
                    
                    <h4><?php echo $infodu['lang']['index']['main']['card04']?></h4>
                    <p>
                        <?php echo $infodu['lang']['index']['main']['card05']?>                 
                    </p>
                    <div class="p-image ico02"></div>
                    <a href="#" class="a-box"><span><?php echo $infodu['lang']['index']['main']['card06']?></span></a>
                   
                </div>
                <div class="card last">
                    
                    <h4><?php echo $infodu['lang']['index']['main']['card07']?></h4>
                    <p>
                        <?php echo $infodu['lang']['index']['main']['card08']?>    
                    </p>
                    <div class="p-image ico03"></div>
                    <a href="#" class="a-box"><span><?php echo $infodu['lang']['index']['main']['card06']?></span></a>
                    
                </div>

        </div>
    </section>





</div>



<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>