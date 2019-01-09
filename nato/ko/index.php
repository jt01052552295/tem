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
        <div class="vg_title">
            <h2>Faulty quality practice</h2>
            <p>무결점품질을 목표로 고객만족을 실현하는  피혁염료업체 나토상사(주)입니다.</p>
        </div>
        
        <ul class="main-slider">
            <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg1.jpg);"></li>
        </ul>

        

        <!-- <div class="vg_down">
            <a href="#" id="go_service"><img src="<?php echo G5_LANG_IMG_URL?>/tt.png" alt="" /></a>
            <span id="main-slider-prev"></span>
            <span id="main-slider-next"></span>
        </div> -->
    </div>
</section>
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
            $('.vg_title h2').addClass('active');
            $('.vg_title p').addClass('active');
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
                setTimeout(function() {
                    $.fn.sloganAniamte();
                }, 1000);

                
            },
            onSlideAfter: function (slide, oldIndex, newIndex) {
                var current = mainSlider.getCurrentSlide();
                switch (oldIndex){
                }
                switch (current){
                }
            }

        });
        $('#main-slider-prev a').click(function(){
           mainSlider.goToPrevSlide();
        }); 
        $('#main-slider-next a').click(function(){
            mainSlider.goToNextSlide();
        }); 

        // setInterval(function(e){ 
        //     mainSlider.goToNextSlide();
        // }, 5000);
        
    });
   
</script>

<section class="k_wrap">
    <div class="k_container type_center">
        <div class="productWrap">
            <h4>Main Products</h4>
            <div class="row_product">
                <ul class="grid4 mg0">
                    <li><a href="javascript:;" class="proA y" data-img=""><span>YELLOW PGL</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA b" data-img=""><span>BROWN PRD</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA n" data-img=""><span>NAVY BLUE GR</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA o" data-img=""><span>ORANGE PGX</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA y" data-img=""><span>YELLOW PGL</span> <span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA b" data-img=""><span>BROWN PRD</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA n" data-img=""><span>NAVY BLUE GR</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA o" data-img=""><span>ORANGE PGX</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA y" data-img=""><span>YELLOW PGL</span> <span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA b" data-img=""><span>BROWN PRD</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA n" data-img=""><span>NAVY BLUE GR</span><span class="arr">&gt;&gt;</span></a></li>
                    <li><a href="javascript:;" class="proA o" data-img=""><span>ORANGE PGX</span><span class="arr">&gt;&gt;</span></a></li>
                </ul>
            </div>

            <div class="a-box"><a href="<?php echo G5_LANG_URL?>/product/product.php" class="tran-animate"><span>View</span><span class="arrow"></span></a></div>

            <div class="p-image">
                <img src="<?php echo G5_LANG_IMG_URL?>/product01.jpg" id="proImg" alt="" /> 
            </div>

        </div>

    </div>
</section>

<script>
    $(document).ready(function(){
        $('a.proA').on('mouseenter', function(e){
            e.preventDefault();
            console.info($(this).html())
           
        }); 
    });
</script>

<section class="k_wrap">
    <div class="k_container type_center">
        <div class="entryWrapTr">
            <div class="concon">
                <div class="ctit">
                    <h4 class="ic_air">company info</h4>
                </div>
                <div class="ccon">
                    <p>
                        나토는 1969년 설립이래 각고의 노력으로 축적해온 기술과 경험을 바탕으로<br/> 
                        고품질의 환경 친화적인 피혁, 산성, 직접 염료를 생산 공급하고 있으며,<br/> 
                        국내는 물론 세계의 섬유와 피혁 등의 관련 업계발전을 위하여 제품과 기술<br/> 
                        서비스를 제공 하고 있습니다.
                    </p>
                </div>
                <div class="a-box"><a href="<?php echo G5_LANG_URL?>/company/company.php" class="sub_link_btn tran-animate"><span>View</span><span class="arrow"></span></a></div>
             </div>
            <div class="thumb2"><img src="<?php echo G5_LANG_IMG_URL?>/company_info.jpg" alt="" /></div>
        </div>

    </div>
</section>


<section class="k_wrap">
    <div class="k_container type_center">
        <div class="customerInner">
            <div class="customer_center">    
                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cus01.png" alt="" /></div>              
                <h3 class="title tran-animate">Products</h3>
                <p class="content">인간존중, 기술본위의 경영을 바탕으로<br/>쾌적하고 풍요로운 삶을 위한 새로운<br/>염료개발에 힘쓰고 있습니다.</p>
                <a href="<?php echo G5_LANG_URL?>/company/company.php">more <span class="right_arrow">&gt;&gt;</span></a>
            </div>
            <div class="customer_center">    
                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cus02.png" alt="" /></div>              
                <h3 class="title tran-animate">R&D</h3>
                <p class="content">인간존중, 기술본위의 경영을 바탕으로<br/>쾌적하고 풍요로운 삶을 위한 새로운<br/>염료개발에 힘쓰고 있습니다.</p>
                <a href="<?php echo G5_LANG_URL?>/company/company.php">more <span class="right_arrow">&gt;&gt;</span></a>
            </div>
            <div class="customer_center">       
                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cus03.png" alt="" /></div>           
                <h3 class="title tran-animate">Customer</h3>
                <p class="content">인간존중, 기술본위의 경영을 바탕으로<br/>쾌적하고 풍요로운 삶을 위한 새로운<br/>염료개발에 힘쓰고 있습니다.</p>
                <a href="<?php echo G5_LANG_URL?>/company/company.php">more <span class="right_arrow">&gt;&gt;</span></a>
            </div>
        </div>
    </div>
</section>


<section class="k_wrap" id="ban_section">
    <div class="k_container type_center">
        <div class="loc_desc">
            <p>
                 We strive to develop high quality dye.
            </p>
            <div class="more_view"><a href="<?php echo G5_LANG_URL?>/company/location.php" class="btnMore tran-animate"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;LOCATION</a></div>

        </div>
    </div>
</section>



<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>