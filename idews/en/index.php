<?php
define('_INDEX_', true); 
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>



<section class="k_wrap">

    <div style="width:50%">
        <div class="hd-reel-container">
            <h3 class="hd-rotate-title">CSF-14-1U-CC</h3>

            <a data-app-function="rotate-left" class="left carousel-control">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a data-app-function="rotate-right" class="right carousel-control">
                <i class="fas fa-chevron-right"></i>
            </a>

            <img class="img-responsive reel" width="1920" height="1038"
                 src="<?php echo G5_LANG_IMG_URL?>/product/360.0.jpg"
                 data-frames="36"
                 data-cw="true"
                 data-images="<?php echo G5_LANG_IMG_URL?>/360.#.jpg|0..35"
                 data-revolution="400" />
            <a href="#hd-popup-rotate" class="btn btn-sm hd-rotate-zoom-link open-popup-inline"><i class="fas fa-expand-arrows-alt"></i></a>
        </div>
    </div>

</section>


<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>
<section class="k_wrap">
    <div class="vg_inner">
        
        <ul class="main-slider">
            <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
            <li class="main-slider-li" id="main-slider-1" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg02.jpg);"></li>
            <li class="main-slider-li" id="main-slider-3" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg03.jpg);"></li>
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
            nextSelector: '#main-slider-prev',
            prevSelector: '#main-slider-next',   
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
        setInterval(function(e){ 
            mainSlider.goToNextSlide();
        }, 5000);
        
    });
   
</script>


<section class="k_wrap" id="etc_section">
    <div class="k_container type_center">

        <div class="flex">
            <div class="tech bg01">
                <a href="<?php echo G5_LANG_URL?>/tech/application.php">     
                    <div class="con">      
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['txt05']?></h3>
                        <h4 class="title"><?php echo $infodu['lang']['index']['main']['txt06']?></h4>
                        <p class="content">
                            <strong><?php echo $infodu['lang']['index']['main']['txt07']?></strong> 
                            <?php echo $infodu['lang']['index']['main']['txt08']?>
                        </p>
                    </div>
                </a>
            </div>
            <div class="location">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3260.52835295593!2d128.8943463156178!3d35.193306214182726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3568c6c92965516d%3A0xe96d1d8d16806826!2z67aA7IKw6rSR7Jet7IucIOqwleyEnOq1rCDqsIDrnb3rj5kg6rCA652964yA66GcMTM5N-uyiOq4uA!5e0!3m2!1sko!2skr!4v1551850258972" allowfullscreen></iframe>
                <div class="con"> 
                	<a href="<?php echo G5_LANG_URL?>/company/location.php">     
	                    <h3 class="title"><?php echo $infodu['lang']['index']['main']['txt09']?></h3>
	                    <p class="content">
	                        <strong><?php echo $infodu['lang']['index']['main']['txt10']?></strong>  
	                        <?php echo $infodu['lang']['index']['main']['txt11']?>
	                    </p>
	                </a>
                </div>
            </div>


        </div>

        <div class="flex2">
            <div class="etc_center bg01">
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
            </div>



        </div>



    </div>
</section>    


<section class="k_wrap" id="menu_section">
    <div class="k_container type_center">

        <div class="copy_menu">
            <?php for($i=0; $i<count($nav1st); $i++): ?>
            <div class="sitemap">
                <div class="sitemap_cate"><a href="<?php echo $nav1st[$i]['url']?>"><span class="sitemap_cate_text"><?php echo $nav1st[$i]['title']?></span></a></div>
                <div class="sitemap_text">
                    <ul>
                        <?php for($j=0; $j<count($nav2nd); $j++):?>
                        <?php if(substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']): ?>
                            <li><a href="<?php echo $nav2nd[$j]['url']?>"><?php echo $nav2nd[$j]['title']?></a></li>
                        <?php endif;?>
                        <?php endfor; ?>

                    </ul>

                </div>
            </div>
            <?php endfor; ?>
        </div>


    </div>
</section>

<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>