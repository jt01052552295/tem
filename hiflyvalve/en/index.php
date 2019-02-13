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
            <li class="main-slider-li" id="main-slider-1" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg02.jpg);"></li>
            <li class="main-slider-li" id="main-slider-3" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg03.jpg);"></li>
        </ul>

        <div class="vg_title" id="title1">

            <div class="bar init-pc"></div>            
            <div class="vg_p_box">
                <div class="parallax-init-pc"><p>You are the frontier in valve industry with the</p></div>
            </div>

            <h2>
                <div class="vg_tit_box"><div class="parallax-init-pc">HIFLY VALVE</div></div>
            </h2>
            

            <div class="vg_link init-pc">
                <a href="#" class="tran-animate"><span>VIEW</span></a>
            </div>

            <!-- <span id="main-slider-prev"></span>
            <span id="main-slider-next"></span> -->
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
                setTimeout(function() {
                    $.fn.sloganAniamte();
                }, 500);
                 setTimeout(function() {
                    $.fn.sloganAniamte2();
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

        setInterval(function(e){ 
            mainSlider.goToNextSlide();
        }, 5000);
        
    });
   
</script>


<section class="k_wrap" id="mainEffect3">
    <div class="k_container type_center">
        <div class="customerInner">
            <h2 class="title msg_effect">Products <small>The highfly valve delivers steady growth and differentiated customer value.</small></h2>
             <div class="customer_center msg_effect">       
                <a href="#" class="tran-animate">   
                    <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cus01.jpg" alt="" class="cus" /></div>      
                    <div class="log">containe ship</div>  
                    <ul class="content">
                        <li>Metal Seat butterfly valve</li>
                        <li>Laminated metal seat butterfly valve</li>
                        <li>Multi seat knife gate valve</li>
                    </ul>
                    <div class="a-box"><span>+</span></div>
                </a>
            </div>
            <div class="customer_center msg_effect">
                <a href="#" class="tran-animate">       
                    <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cus02.jpg" alt="" class="cus" /></div>              
                    <div class="log">lng ship</div>
                    <ul class="content">
                        <li>Metal Seat butterfly valve</li>
                        <li>Laminated metal seat butterfly valve</li>
                        <li>Multi seat knife gate valve</li>
                    </ul>
                    <div class="a-box"><span>+</span></div>
                </a>
            </div>
            <div class="customer_center msg_effect"> 
                <a href="#" class="tran-animate">   
                    <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/cus03.jpg" alt="" class="cus" /></div>      
                    <div class="log">thermal power plant</div>    
                    <ul class="content">
                        <li>Metal Seat butterfly valve</li>
                        <li>Laminated metal seat butterfly valve</li>
                        <li>Multi seat knife gate valve</li>
                    </ul>
                    <div class="a-box"><span>+</span></div>
                </a>
            </div>                
        </div>

    </div>
</section>

<section class="k_wrap" id="about_section">
    <div class="k_container type_center">
        
        <div class="entryWrapTr">
            <div class="concon">
                <div class="ctit msg_effect">
                    <h4 class="ic_air">hifly vavle co.,ltd.</h4>
                </div>
                <div class="ccon msg_effect">
                    <p>
                        We, Hifly Valve Co.,Ltd., have been staying on top of manufacturing industrial 
                        valves-Metal seat butterfly valves and knife gate valves.<br/>
                        Since its foundation in 2006, Hifly people have been making their best effort 
                        which is based on unigue technology and products quality for customer’s 
                        satisfaction.
                    </p>
                </div>
                <div class="a-box msg_effect"><a href="<?php echo G5_LANG_URL?>/company/company.php" class="sub_link_btn tran-animate"><span>View</span><span class="arrow"></span></a></div>
             </div>
        </div>
        <div class="thumb2"><img src="<?php echo G5_LANG_IMG_URL?>/main_about.jpg" alt="" /></div>

    </div>   
</section>


<section class="k_wrap">
    <div class="k_container type_center">
        <div class="infoInner">
            <div class="customer_center">    
                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/info01.png" alt="" /></div>              
                <h3 class="title tran-animate">Certification</h3>
                <p class="content">You are the frontier in valve industry<br/>with the HIFLY VALVE.</p>
                <a href="<?php echo G5_LANG_URL?>/product/product.php">more <span class="right_arrow">&gt;&gt;</span></a>
            </div>
            <div class="customer_center">    
                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/info02.png" alt="" /></div>              
                <h3 class="title tran-animate">R&D</h3>
                <p class="content">You are the frontier in valve industry<br/>with the HIFLY VALVE.</p>
                <a href="<?php echo G5_LANG_URL?>/tech/tech.php">more <span class="right_arrow">&gt;&gt;</span></a>
            </div>
            <div class="customer_center">       
                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/info03.png" alt="" /></div>           
                <h3 class="title tran-animate">Customer</h3>
                <p class="content">We, HIFLY VALVE, supply the most<br/>customized products to worldwide<br/>customers.</p>
                <a href="<?php echo G5_LANG_URL?>/mail/mail.php">more <span class="right_arrow">&gt;&gt;</span></a>
            </div>
        </div>
    </div>
</section>




<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>