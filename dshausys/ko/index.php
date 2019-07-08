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
<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/aos/aos.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/aos/aos.js"></script>
<script>
  //AOS.init();
</script>


<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>
<section class="k_wrap">
    <div class="vg_inner">
        
        <ul class="main-slider">
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
        </ul>

        <div class="vg_title" id="title1" style="display: none">
            <h2>
                <div class="vg_tit_box " data-sos="fade-down" ><div class="nanum_pen"><?php echo $infodu['lang']['index']['main'][0]?></div></div>
                <div class="vg_tit_box " data-sos="fade-down"><div class=""><?php echo $infodu['lang']['index']['main'][1]?></div></div>
            </h2>
            <span id="main-slider-prev"></span> <!-- 이전 -->
            <span id="main-slider-next"></span> <!-- 다음 --> 

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
            mode:'horizontal',
            infiniteLoop: true,
            wrapperClass: 'main-wrapper',
            autoControls: false,
            adaptiveHeight: true,
            speed: 500,
            pager: true,
            controls: true,
            touchEnabled: false,
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



<section class="k_wrap " id="intro_section">
    <div class="k_container type_center">
        <div class="introInner">
            <div class="intro_title">
                <h4  data-sos="fade-down"><?php echo $infodu['lang']['index']['main']['info_tit']?></h4>
            </div>

            <div class="intro">
                <a href="javascript:;">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/gallery.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['info01']?></h3>
                    </div>
                </a>
            </div>
            <div class="intro">  
                 
                <a href="javascript:;">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/gallery.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['info01']?></h3>
                    </div>
                </a>
            </div>
            <div class="intro"> 
                 
                <a href="javascript:;">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/gallery.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['info01']?></h3>
                    </div>
                </a>
            </div>
            <div class="intro"> 
                 
                <a href="javascript:;">     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/gallery.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['info01']?></h3>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<section class="k_wrap " id="etc_section">
    <div class="k_container type_center etcInner">

            <div class="etc_center tran-animate" >
                <a href="<?php echo G5_LANG_URL?>/products/products.php">     
                    <div class="bg">
                        <div class="inner">
                            <ul>
                                <li class="title"><?php echo $infodu['lang']['index']['main']['pro01']?></li>
                                <li><?php echo $infodu['lang']['index']['main']['pro02']?></li>
                                <li><?php echo $infodu['lang']['index']['main']['pro03']?></li>
                                <li><?php echo $infodu['lang']['index']['main']['pro04']?></li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="etc_center tran-animate" >  
                 
                <a href="<?php echo G5_LANG_URL?>/products/room.php">                     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/pro01.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['pro02']?></h3>
                    </div>
                </a>
            </div>
            <div class="etc_center tran-animate" > 
                 
                <a href="<?php echo G5_LANG_URL?>/products/balcony.php">                  
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/pro02.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['pro03']?></h3>
                    </div>
                </a>
            </div>
            <div class="etc_center last tran-animate" > 
                 
                <a href="<?php echo G5_LANG_URL?>/products/glass.php">                  
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/pro03.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['pro04']?></h3>
                    </div>
                </a>
            </div>



            <div class="etc_center2 tran-animate" >  
                 
                <a href="<?php echo G5_LANG_URL?>/winplus/bal.php">                     
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/win01.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['pro06']?></h3>
                    </div>
                </a>
            </div>
            <div class="etc_center2 tran-animate" > 
                 
                <a href="<?php echo G5_LANG_URL?>/winplus/room2.php">                  
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/win02.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['pro07']?></h3>
                    </div>
                </a>
            </div>
            <div class="etc_center2 tran-animate" > 
                 
                <a href="<?php echo G5_LANG_URL?>/winplus/door.php">                  
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/win03.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['pro08']?></h3>
                    </div>
                </a>
            </div>
            <div class="etc_center2  tran-animate" > 
                 
                <a href="<?php echo G5_LANG_URL?>/winplus/center.php">                  
                    <div class="bg"><img src="<?php echo G5_LANG_IMG_URL?>/win04.jpg" title="" ></div>
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['pro09']?></h3>
                    </div>
                </a>
            </div>
            <div class="etc_center2 last tran-animate" >
                <a href="<?php echo G5_LANG_URL?>/winplus/list.php">     
                    <div class="bg">
                        <div class="inner">
                            <ul>
                                <li class="title"><?php echo $infodu['lang']['index']['main']['pro05']?></li>
                                <li><?php echo $infodu['lang']['index']['main']['pro06']?></li>
                                <li><?php echo $infodu['lang']['index']['main']['pro07']?></li>
                                <li><?php echo $infodu['lang']['index']['main']['pro08']?></li>
                                <li><?php echo $infodu['lang']['index']['main']['pro09']?></li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>


    </div>
</section>




<div class="k_wrap" id="cus_section">
    <div class="k_container type_center">

        <div class="info_col ">
            <div class="widget-box">
                <h3><?php echo  $infodu['lang']['common']['cus01']?></h3>
                <div class="help-tel"><span class="ico_mic"></span><span class="tel"><?php echo  $infodu['lang']['common']['cus02']?></span></div>
                <div class="help-block" >
                    <?php echo  $infodu['lang']['common']['cus03']?><br>
                    <?php echo  $infodu['lang']['common']['cus04']?>
                </div>
                <div class="help-block2">
                    <?php echo  $infodu['lang']['common']['cus05']?><br>
                    <?php echo  $infodu['lang']['common']['cus06']?>
                </div>
            </div>
        </div>

        <div class="info_customer">
            <p>고객님의 요청사항을 토대로 견적을 도와드립니다.</p>
            <div class="link_box"><a href="<?php echo G5_LANG_URL?>/mail/mail.php">견적문의하기</a></div>
        </div>

      
    </div>
</div>


<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>