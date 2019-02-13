<?php
define('_INDEX_', true); 
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>


<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>

<div class="vg_inner">
    
    <div class="vg_title" id="title1">
        <h2>
            <div class="vg_tit_box "><div class="parallax-init-pc">thorough</div></div>
            <div class="vg_tit_box "><div class="parallax-init-pc">service</div></div>
            <div class="vg_tit_box "><div class="parallax-init-pc">spirit</div></div>
        </h2>
        <p class="init-pc">자원재활용을 통하여 환경보존을 실천하는 기업</p>

        <div class="vg_link init-pc">
            <a href="#" class="tran-animate"><span>회사소개</span></a>
        </div>
    </div>

 
    
    <ul class="main-slider">
        <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg_1.jpg);"></li>
    </ul>     

    

    

</div>

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
                var _d = 500 * (e)
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
            controls: false,
            nextSelector: '#main-slider-prev',
            prevSelector: '#main-slider-next',   
            onSliderLoad: function(){
                setTimeout(function() {
                    $.fn.sloganAniamte();
                }, 500);
                setTimeout(function() {
                    $.fn.sloganAniamte2();
                }, 1500);
                // $('.main-slider > li').eq(0).addClass('active-slide');

                
            },
            onSlideBefore: function (slide, oldIndex, newIndex) {
                var current = mainSlider.getCurrentSlide();

                // setTimeout(function() {
                //     $('.main-slider > li').removeClass('active-slide');   
                //     $('.main-slider > li').eq(newIndex).addClass('active-slide');
                // }, 1000);
                

            }

        });
       

        // setInterval(function(e){ 
        //     mainSlider.goToNextSlide();
        // }, 7000);
        
    });
   
</script>


<div class="main_con">


    <section class="k_wrap" id="mainEffect3">
        <div class="k_container type_center">
            <div class="customerInner">
                <h2 class="title msg_effect">Products <small>녹색성장을 향한 경영추구와고객감동을 위한 가치창조로 봉사하는 향토기업으로 성장하겠습니다!</small></h2>
                 <div class="customer_center msg_effect">       
                    <div class="thumb"><a href="product/morooka.php"><img src="<?php echo G5_LANG_IMG_URL?>/cus03.jpg" alt="" class="cus" /></a></div>      
                    <div class="log"><a href="product/morooka.php"><img src="<?php echo G5_LANG_IMG_URL?>/log3.png" alt="" /></a></div>  
                    <ul class="content">
                        <!--<li>Metal Seat butterfly valve</li>
                        <li>Laminated metal seat butterfly valve</li>
                        <li>Multi seat knife gate valve</li>-->
                    </ul>
                    <div class="a-box"><a href="product/morooka.php" class="tran-animate">+</a></div>
                </div>
                <div class="customer_center msg_effect">    
                    <div class="thumb"><a href="product/nakayama.php"><img src="<?php echo G5_LANG_IMG_URL?>/cus01.jpg" alt="" class="cus" /></a></div>              
                    <div class="log"><a href="product/nakayama.php"><img src="<?php echo G5_LANG_IMG_URL?>/log1.png" alt="" /></a></div>
                    <ul class="content">
                        <!--<li>Metal Seat butterfly valve</li>
                        <li>Laminated metal seat butterfly valve</li>
                        <li>Multi seat knife gate valve</li>-->
                    </ul>
                    <div class="a-box"><a href="product/nakayama.php" class="tran-animate">+</a></div>
                </div>
                <div class="customer_center msg_effect">    
                    <div class="thumb"><a href="product/uenotex.php"><img src="<?php echo G5_LANG_IMG_URL?>/cus02.jpg" alt="" class="cus" /></a></div>      
                    <div class="log"><a href="product/uenotex.php"><img src="<?php echo G5_LANG_IMG_URL?>/log2.png" alt="" /></a></div>    
                    <ul class="content">
                        <!--<li>Metal Seat butterfly valve</li>
                        <li>Laminated metal seat butterfly valve</li>
                        <li>Multi seat knife gate valve</li>-->
                    </ul>
                    <div class="a-box"><a href="product/uenotex.php" class="tran-animate">+</a></div>
                </div>                
            </div>

        </div>
    </section>
    <script>
    var currentScroll=0;
    $(window).scroll(function() {
        var wScroll = $(this).scrollTop();   
        currentScroll = $(this).scrollTop();
        var activePos = $("#mainEffect3").offset().top - 1000;
        if(wScroll >= activePos){
            $('#mainEffect3 .msg_effect').each(function(index){
                var index = index + 1;
                var _d = 400 * (index)
                $(this).delay(_d).animate({opacity:"1.0"}, _d );
            });
        }
    });
    $(document).ready(function(){

        $("a.callVideo").click(function(e){
            e.preventDefault();
            $("body").addClass('layer-open'); 
            $(".videoBg").fadeIn();
        });
        
        $(".videoBg, a.closeBtn").click(function(e){
            e.preventDefault();
            $("body").removeClass("layer-open"); 
            var div = document.getElementById("youtube-video");
            var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
            iframe.postMessage('{"event":"command","func":"pauseVideo","args":""}','*');
            $(".videoBg").fadeOut();
        }); 

    });
    </script>


    <section class="k_wrap" id="about_section">
        
        <div class="k_container type_center">
            <div class="thumb2">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/wsvnxO3Tk58" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="entryWrapTr">
                <div class="concon">
                    <div class="ctit msg_effect">
                        <span>SINCE 1984</span>
                        <h4 class="ic_air">SAMSAM CORPOTAION</h4>
                    </div>
                    <div class="ccon msg_effect">
                         <p>
                            녹색성장을 향한 경영추구와 고객감동을 위한 가치창조로 봉사하는 기업으로 성장하겠습니다!<br/><br/>

                            삼삼무역(주)<br/><br/> 

                           "저탄소 녹색성장"을 기치로 산림관련/건설폐기물 재활용 관련 특수장비를 수입 판매하고 있습니다.<br />
							저희는 현실에 안주하지 않고 보다 나은 미래를 위한 기술연구를 바타응로 변화를 주도하는 기업으로 거듭나기 위해 노력하고 있습니다.
                        </p>
                    </div>
                    <div class="a-box msg_effect"><a href="company/company.php" class="sub_link_btn tran-animate"><span>VIEW</span></a></div>
                 </div>
                
            </div>

        </div>
        
    </section>
    <script>
    $(window).scroll(function() {
        var wScroll1 = $(this).scrollTop();   
        var activeMainEffect1 = $("#about_section").offset().top - 800;
        if(wScroll1 >= activeMainEffect1){
            $('#about_section .msg_effect').each(function(index){
                var index = index + 1;
                var _d = 300 * (index)
                $(this).delay(_d).animate({opacity:"1.0"}, _d );
            });
        }
    });
    </script>





</div>
<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>