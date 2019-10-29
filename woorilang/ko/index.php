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
<div class="back_con"> 
    <link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/aos/aos.css?ver=<?php echo G5_CSS_VER?>" />
    <script src="<?php echo G5_LANG_JS_URL?>/aos/aos.js"></script>
    <script>
      AOS.init();
    </script>


    <link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css?ver=<?php echo G5_CSS_VER?>" />
    <script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>
    <section class="k_wrap">
        <div class="vg_inner">
            
            <ul class="main-slider">
                <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);">
                    <div class="vg_title">
                        <small data-aos="fade-up" data-aos-duration="1500"><?php echo $infodu['lang']['index']['main']['txt01']?></small>
                        <h2 data-aos="fade-up" data-aos-duration="2500"><?php echo $infodu['lang']['index']['main']['txt02']?></h2>
                    </div>
                </li>
            </ul>

        </div>
    </section>
    <script>
        $(document).ready(function(){


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
                    
                 

                    
                },
                onSlideBefore: function (slide, oldIndex, newIndex) {
                    var current = mainSlider.getCurrentSlide();
                    
                    

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
            // }, 6000);
            
        });
       
    </script>



</div>
<div class="main_con">

    <section class="k_wrap">
        <div class="k_container type_center">
            <div class="customerInner">
                <div class="customer_center">  
                    <a href="<?php echo G5_LANG_URL?>/mail/mail.php" class="cus01 tran-animate">         
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/ico01.png" alt="" /></div>              
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['cus01']?></h3>
                        <div class="view"><?php echo $infodu['lang']['index']['main']['cusView']?> <span class="right_arrow"><img src="<?php echo G5_LANG_IMG_URL?>/btn_white_arrow.png" alt="" /></span></div>
                    </a>
                </div>
                <div class="customer_center">  
                    <a href="<?php echo G5_LANG_URL?>/mail/mail.php" class="cus02 tran-animate">         
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/ico02.png" alt="" /></div>              
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['cus02']?></h3>
                        <div class="view"><?php echo $infodu['lang']['index']['main']['cusView']?> <span class="right_arrow"><img src="<?php echo G5_LANG_IMG_URL?>/btn_white_arrow.png" alt="" /></span></div>
                    </a>
                </div>
                <div class="customer_center"> 
                    <a href="<?php echo G5_LANG_URL?>/mail/mail.php" class="cus03 tran-animate">             
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/ico03.png" alt="" /></div>           
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['cus03']?></h3>
                        <div class="view"><?php echo $infodu['lang']['index']['main']['cusView']?> <span class="right_arrow"><img src="<?php echo G5_LANG_IMG_URL?>/btn_white_arrow.png" alt="" /></span></div>
                    </a>
                </div>
                <div class="customer_center">
                    <a href="<?php echo G5_LANG_URL?>/mail/mail.php" class="cus04 tran-animate">       
                        <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/ico04.png" alt="" /></div>           
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['cus04']?></h3>
                        <div class="view"><?php echo $infodu['lang']['index']['main']['cusView']?> <span class="right_arrow"><img src="<?php echo G5_LANG_IMG_URL?>/btn_white_arrow.png" alt="" /></span></div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="k_wrap" id="">
        <div class="k_container type_center">
            <div class="bbsInner" >
                <div class="info_col lt" >
                    <h4>공지사항</h4>
                    <div class="more_view"><a href="#" class="btnMore"><span class="tran-animate">+</span></a></div>
                    <ul>
                        <?php for ($i=0; $i<5; $i++) {  ?>
                        <li>
                            <a href="<?php echo $list[$i]['href']?>" class="lt_a font_malgun">
                                <div class="bottomLine"></div>
                                <h5>게시물이 없습니다.</h5>
                                <div class="lt_date">10-21</div>
                            </a>
                        </li>
                        <?php }?>
                        <?php //if (count($list) == 0) { //게시물이 없을 때  ?>
                        <li class="empty_li">게시물이 없습니다.</li>
                        <?php //}  ?>
                                
                    </ul>

                </div>
                <div class="info_col lt_gall">
                    <h4>연수후기</h4>
                    <link href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.event.css" rel="stylesheet">
                     <div id="event-bx-pager">
                        <ul>
                            <?php for($i=0; $i<4; $i++):?>
                            <li> <a data-slide-index="<?php echo $i?>" href=""><span class="sound_only"><?php echo $i+1?></span></a></li>
                            <?php endfor;?>
                        </ul>
                    </div> 
                    <ul class="event-slider">
                        <?php for ($i=0; $i<4; $i++):?>
                        <li>
                            <div class="gall_con">
                                <div class="gall_img"><a href="#"><img src="<?php echo G5_LANG_IMG_URL?>/banner_ex2.jpg" alt="" /></a></div>
                                <div class="gall_text_href">
                                    <a href="#" class="bo_tit">토익 960 연수 후</a>
                                    <div class="ccon">필리핀에서 어학연수를 하고 한국에 입국해 토익스피킹, 토익, 오픽을 연달아 치게 되었다...</div>
                                    <div class="date">2019-10-23</div>
                                    <div class="more">
                                        <a href="#" class="bo_more"><span class="plus">+</span><span class="txt">MORE</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php endfor;?>
                    </ul>
                    <script>

                        $(document).ready(function(){
                            var eventSlider = $('.event-slider').bxSlider({
                                auto: true,
                                mode:'horizontal',
                                infiniteLoop: true,
                                wrapperClass: 'event-wrapper',
                                autoControls: false,
                                adaptiveHeight: true,
                                touchEnabled: false,
                                speed: 500,
                                pager: true,
                                controls: false, 
                                pagerCustom: '#event-bx-pager', 
                                onSliderLoad: function(){                                   
                                }
                            });
                        });
                       
                    </script>
                              

                </div>
                <div class="info_col last" >
                    <link href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.gallery.css" rel="stylesheet">
                    

                    <div id="gallery-bx-pager">
                        <ul>
                            <?php for ($i=0; $i<3; $i++):?>
                            <li> <a data-slide-index="<?php echo $i?>" href=""><span class="sound_only"><?php echo $i+1?></span></a></li>
                            <?php endfor;?>
                        </ul>
                    </div>


                    <div class="gallery_wrap">
                        <ul class="gallery-slider">
                            <?php for ($i=0; $i<3; $i++) {
                            ?>
                            <li>
                                <div class="gall_box">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="<?php echo G5_LANG_IMG_URL?>/banner_ex.jpg" alt="" />
                                            <div class="view">view <span class="right_arrow"><img src="<?php echo G5_LANG_IMG_URL?>/btn_white_arrow.png" alt="" /></span></div>
                                        </a>
                                    </div>                                   
                                </div>
                            </li>
                            <?php }?>
                        </ul>
                    </div>

                    <script>

                        $(document).ready(function(){
                            var gallerySlider = $('.gallery-slider').bxSlider({
                                auto: true,
                                mode:'horizontal',
                                infiniteLoop: true,
                                wrapperClass: 'gallery-wrapper',
                                autoControls: false,
                                adaptiveHeight: true,
                                touchEnabled: false,
                                speed: 500,
                                pager: true,
                                controls: false,
                                pagerCustom: '#gallery-bx-pager', 
                                onSliderLoad: function(){                                   
                                }
                            });
                        });
                       
                    </script>
                </div>

            </div>
        </div>
    </section>

    <section class="k_wrap" id="card_section">
        <div class="k_container type_center">
           <div class="cardInner">       
                
                <div class="card">
                    <a href="javascript:;" class="">
                        <h4><?php echo $infodu['lang']['index']['main']['card01']?></h4>
                        <table>
                            <colgroup>
                                <col width="90px" />
                                <col width="auto" />
                            </colgroup>
                            <tr>
                                <td><img src="<?php echo G5_LANG_IMG_URL?>/ico_tel.png" alt="" /></td>
                                <td class="blue"><?php echo $infodu['lang']['index']['main']['card02']?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><?php echo $infodu['lang']['index']['main']['card03']?></td>
                            </tr>
                        </table>
                    </a>
                </div>
                <div class="card2">
                    <ul>
                        <li class="top">
                            <a href="">
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/ico_nate.png" alt="" /></div>  
                                <div class="text"><?php echo $infodu['lang']['index']['main']['card04']?></div>  
                                <div class="text2"><?php echo $infodu['lang']['index']['main']['card05']?></div>
                            </a>  
                        </li>
                        <li class="top">
                            <a href="">
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/ico_skype.png" alt="" /></div>  
                                <div class="text"><?php echo $infodu['lang']['index']['main']['card06']?></div>  
                                <div class="text2"><?php echo $infodu['lang']['index']['main']['card07']?></div>  
                            </a>
                        </li>
                        <li class="top last">
                            <a href="">
                                <div class="thumb2"><img src="<?php echo G5_LANG_IMG_URL?>/ico_kakao.png" alt="" /></div>  
                                <div class="text3"><?php echo $infodu['lang']['index']['main']['card08']?></div> 
                            </a> 
                        </li>
                        <li class="bottom bg01">
                            <a href="">
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/ico_map.png" alt="" /></div>  
                                <div class="text"><?php echo $infodu['lang']['index']['main']['card09']?></div>  
                            </a>
                        </li>
                        <li class="bottom last bg02">
                            <a href="">
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/ico_data.png" alt="" /></div>  
                                <div class="text"><?php echo $infodu['lang']['index']['main']['card10']?></div>  
                            </a>
                        </li>

                    </ul>
                </div>



            </div>
        </div>
    </section>


</div>


<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>