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
            <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
        </ul>

        <div class="vg_title" id="title1">
            <h2>
                <div class="vg_tit_box "><div class=""><?php echo $infodu['lang']['index']['main']['txt01']?></div></div>
                <div class="vg_tit_box2 "><div class=""><?php echo $infodu['lang']['index']['main']['txt02']?></div></div>
            </h2>
            <p>
                <?php echo $infodu['lang']['index']['main']['txt03']?>
            </p>
            

            <!-- <div id="main-bx-pager">
                <ul>
                    <li> <a data-slide-index="0" href=""><span class="blind">1</span></a></li>
                    <li> <a data-slide-index="1" href=""><span class="blind">2</span></a></li>
                    <li> <a data-slide-index="2" href=""><span class="blind">3</span></a></li>
                </ul>
            </div> --> 

            <div class="vg_down"><a href="<?php echo G5_LANG_URL?>/product/igen.php" class="tran-animate"><span><?php echo $infodu['lang']['index']['main']['txt04']?></span><span class="white_arrow"></span></a></div>

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
            nextSelector: '#main-slider-next',
            prevSelector: '#main-slider-prev',   
            onSliderLoad: function(){
                //$.fn.sloganAniamte();

                
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


<section class="k_wrap" id="etc_section">
    <div class="k_container type_center">

        <h2 class="title">Products  <small>We are achieving continuous growth and differentiated customer value.</small></h2>



        <div class="rowc">
            <ul class="grid4">  
                <?php for($i=0; $i<16; $i++):?>
                <li class="pro">
                    <a href="#">
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/pro.jpg" /></div>
                        <div class="desc">
                            <h5>Legacy Products</h5>
                            <p>
                                Looking for an older product or a 
                                replacement part? 
                                Visit our legacy product page.
                            </p>
                            <div class="more tran-animate"><span>more</span></div>
                        </div>
                    </a>
                </li>
                <?php endfor; ?>
                
            </ul>
        </div>

      
        <!-- <div class="etc_center bg01">
            <a href="#">     
                <div class="con">      
                    <h3 class="title"><?php echo $infodu['lang']['index']['main']['txt12']?></h3>
                    <p class="content">
                        <?php echo $infodu['lang']['index']['main']['txt13']?>
                    </p>
                </div>
                <div class="bg etc01"></div>
            </a>
        </div>
        <div class="etc_center bg02">
            <a href="#">     
                <div class="con">      
                    <h3 class="title"><?php echo $infodu['lang']['index']['main']['txt14']?></h3>
                    <p class="content">
                        <?php echo $infodu['lang']['index']['main']['txt15']?>
                    </p>
                </div>
                <div class="bg etc02"></div>
            </a>
        </div>
        <div class="etc_center bg03">
            <a href="<?php echo G5_LANG_URL?>/mail/mail.php">     
                <div class="con">      
                    <h3 class="title"><?php echo $infodu['lang']['index']['main']['txt16']?></h3>
                    <p class="content">
                        <?php echo $infodu['lang']['index']['main']['txt17']?>
                    </p>
                </div>
                <div class="bg etc03"></div>
            </a>
        </div> -->





    </div>
</section>    


<section class="k_wrap">
    <div class="k_container type_center">
        <div class="customerInner">
            <div class="customer_center">    
                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cus01.png" alt="" /></div>              
                <h3 class="title tran-animate"><?php echo $infodu['lang']['index']['main']['txt07']?></h3>
                <p class="content"><?php echo $infodu['lang']['index']['main']['txt08']?></p>
                <a href="#"><?php echo $infodu['lang']['index']['main']['txt13']?> <span class="right_arrow">&gt;&gt;</span></a>
            </div>
            <div class="customer_center">    
                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cus02.png" alt="" /></div>              
                <h3 class="title tran-animate"><?php echo $infodu['lang']['index']['main']['txt09']?></h3>
                <p class="content"><?php echo $infodu['lang']['index']['main']['txt10']?></p>
                <a href="#"><?php echo $infodu['lang']['index']['main']['txt13']?> <span class="right_arrow">&gt;&gt;</span></a>
            </div>
            <div class="customer_center">       
                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cus03.png" alt="" /></div>           
                <h3 class="title tran-animate"><?php echo $infodu['lang']['index']['main']['txt11']?></h3>
                <p class="content"><?php echo $infodu['lang']['index']['main']['txt12']?></p>
                <a href="<?php echo G5_LANG_URL?>/mail/mail.php"><?php echo $infodu['lang']['index']['main']['txt13']?> <span class="right_arrow">&gt;&gt;</span></a>
            </div>
        </div>
    </div>
</section>

<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>