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
  AOS.init();
</script>


<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>
<section class="k_wrap">
    <div class="vg_inner">
        
        <ul class="main-slider">
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);">
                <div class="vg_title">
                    <div class="square-box">
                          <span class="square-inner">
                             <em class="bluec anim01"></em>
                             <em class="bluec anim02"></em>
                             <em class="bluec anim03"></em>
                             <em class="bluec anim04"></em>
                          </span>
                    </div>
                    <h2>
                        <div class="vg_tit_box_ani vg_tit_box font_montserrat sm"><div class=""><?php echo $infodu['lang']['index']['main']['txt01']?></div></div>
                        <div class="vg_tit_box_ani vg_tit_box font_montserrat"><div class=""><?php echo $infodu['lang']['index']['main']['txt02']?></div></div>
                    </h2>
                    <p class="vg_tit_box_ani2"><?php echo $infodu['lang']['index']['main']['txt03']?></p>
                </div>
            </li>
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);">
                <div class="vg_title">
                    <div class="square-box">
                          <span class="square-inner">
                             <em class="bluec anim01"></em>
                             <em class="bluec anim02"></em>
                             <em class="bluec anim03"></em>
                             <em class="bluec anim04"></em>
                          </span>
                    </div>
                    <h2>
                        <div class="vg_tit_box_ani vg_tit_box font_montserrat sm"><div class=""><?php echo $infodu['lang']['index']['main']['txt01']?></div></div>
                        <div class="vg_tit_box_ani vg_tit_box font_montserrat"><div class=""><?php echo $infodu['lang']['index']['main']['txt02']?></div></div>
                    </h2>
                    <p class="vg_tit_box_ani2"><?php echo $infodu['lang']['index']['main']['txt03']?></p>
                </div>
            </li>
            <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);">
                <div class="vg_title">
                    <div class="square-box">
                          <span class="square-inner">
                             <em class="bluec anim01"></em>
                             <em class="bluec anim02"></em>
                             <em class="bluec anim03"></em>
                             <em class="bluec anim04"></em>
                          </span>
                    </div>
                    <h2>
                        <div class="vg_tit_box_ani vg_tit_box font_montserrat sm"><div class=""><?php echo $infodu['lang']['index']['main']['txt01']?></div></div>
                        <div class="vg_tit_box_ani vg_tit_box font_montserrat"><div class=""><?php echo $infodu['lang']['index']['main']['txt02']?></div></div>
                    </h2>
                    <p class="vg_tit_box_ani2"><?php echo $infodu['lang']['index']['main']['txt03']?></p>
                </div>
            </li>
        </ul>

        


        

        <div id="main-bx-pager">
            <ul>
                <li> <a data-slide-index="0" href=""><span class="blind">1</span></a></li>
                <li> <a data-slide-index="1" href=""><span class="blind">2</span></a></li>
                <li> <a data-slide-index="2" href=""><span class="blind">3</span></a></li>
            </ul>
        </div>
        <div class="vg_down upDownAni"><a href="#" id="go_service"><img src="<?php echo G5_LANG_IMG_URL?>/mouse.png" alt=""></a></div> 


    </div>
</section>
<script>
    $(document).ready(function(){

        $('#go_service').click(function(e){
            e.preventDefault();
            var service_section = $('#info_section').offset().top;
            var goTo = service_section;
            $('html, body').animate({scrollTop : goTo}, 400);
        }); 


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

                setTimeout(function() {
                    $('.main-slider > li').removeClass('active-slide');   
                    $('.main-slider > li').eq(0).addClass('active-slide');
                    $('.main-slider > li').eq(0).find('.square-box').addClass('on');
                }, 1000);

                

                
            },
            onSlideBefore: function (slide, oldIndex, newIndex) {
                var current = mainSlider.getCurrentSlide();
                $(".square-box").removeClass("on");

                setTimeout(function() {
                    $('.main-slider > li').removeClass('active-slide');   
                    $('.main-slider > li').eq(newIndex).addClass('active-slide');
                    $('.main-slider > li').eq(newIndex).find('.square-box').addClass('on');
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
        $('#main-slider-prev a, #main-slider-next a').click(function(){
            mainSlider.stopAuto();
            mainSlider.startAuto();
        });

        setInterval(function(e){ 
            mainSlider.goToNextSlide();
        }, 6000);
        
    });
   
</script>




<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.product.css?ver=<?php echo G5_CSS_VER?>" />
<section class="k_wrap" id="pro_section">
    <div class="k_container type_center">
        <div class="pro_wrap">
            <div class="page-header">
                <h4 class="font_montserrat" data-aos="fade-up">Products</h4>
                <span id="product-slider-prev"></span>
                <span id="product-slider-next"></span>
            </div>
            <div class="product_wrap">
                <ul class="product-slider">  
                    <?php for ($i=1; $i<=6; $i++):?>

                        <li class="pro" data-aos="fade-up" data-aos-duration="<?php echo $i*2?>00">
                            <a href="#">
                                <div class="thumb"><img src="<?php echo G5_LANG_IMG_URL?>/noData.png" /></div>
                                <div class="desc">
                                    <h5>가스모니터링시스템</h5>
                                    <span class="sm">Computer Monitoring System</span>
                                    <p>Gas Tracking Ver. 5.0은 Microsoft Window OS를 기반으로, 산업 현장의 가스 누출을 감시</p>
                                    <span class="more font_montserrat">DETAIL VIEW</span>
                                </div>
                            </a>
                        </li>


                    <?php endfor; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
        var settings = function() {
            var settings1 = {
                auto: true,
                infiniteLoop: true,
                slideMargin:25,
                slideWidth:450,
                minSlides:3,
                maxSlides:3,
                moveSlides:1,
                wrapperClass: 'product-wrapper',
                autoControls: false,
                adaptiveHeight: true,
                speed: 500,
                pager: false,
                controls: true, 
                nextSelector: '#product-slider-next',
                prevSelector: '#product-slider-prev',
            };
            var settings2 = {
                auto: true,
                infiniteLoop: true,
                wrapperClass: 'product-wrapper',
                autoControls: false,
                adaptiveHeight: true,
                speed: 500,
                pager: false,
                controls: true, 
                nextSelector: '#product-slider-next',
                prevSelector: '#product-slider-prev',
            };
            return ($(window).width()>1024) ? settings1 : settings2;
        }

        var mySlider;
        function tourLandingScript() {
            mySlider.reloadSlider(settings());
        }

        mySlider = $('.product-slider').bxSlider(settings());
        $(window).resize(tourLandingScript);       
    });
   
</script>




<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.business.css?ver=<?php echo G5_CSS_VER?>" />
<section class="k_wrap" id="business_section">
    <div class="k_container type_center">

        <div class="business_slide">
            <ul class="business-slider">
                <li><img src="<?php echo G5_LANG_IMG_URL?>/contents02_left_img01.jpg" /></li>
                <li><img src="<?php echo G5_LANG_IMG_URL?>/contents02_left_img01.jpg" /></li>
                <li><img src="<?php echo G5_LANG_IMG_URL?>/contents02_left_img01.jpg" /></li>
            </ul>
            <div id="business-bx-pager">
                <ul>
                    <li> <a data-slide-index="0" href=""><span class="blind">1</span></a></li>
                    <li> <a data-slide-index="1" href=""><span class="blind">2</span></a></li>
                    <li> <a data-slide-index="2" href=""><span class="blind">3</span></a></li>
                </ul>
            </div>
        </div>        

       <div class="businessInner">       
            <div class="business_title">
                <h4 class="font_montserrat" data-aos="fade-down" data-aos-duration="300"><?php echo $infodu['lang']['index']['main']['tech01']?></h4>
                <p data-aos="fade-down" data-aos-duration="500"><?php echo $infodu['lang']['index']['main']['tech02']?></p>
            </div>
            <div class="business_wrap ">
                <div class="business " data-aos="fade-down" data-aos-duration="600">
                    <a href="#" class="tran-animate">
                        <div class="thumb bc1"></div>
                        <div class="desc">
                            <h3 class="title"><?php echo $infodu['lang']['index']['main']['tech03']?></h3>
                            <p class="content"><?php echo $infodu['lang']['index']['main']['tech04']?></p>
                            <span class="more"></span>
                        </div>
                    </a>
                </div>
                <div class="business " data-aos="fade-down" data-aos-duration="800">
                    <a href="#" class="tran-animate">
                        <div class="thumb bc2"></div>
                        <div class="desc">
                            <h3 class="title"><?php echo $infodu['lang']['index']['main']['tech05']?></h3>
                            <p class="content"><?php echo $infodu['lang']['index']['main']['tech06']?></p>
                            <span class="more"></span>
                        </div>
                    </a>
                </div>
                <div class="business last" data-aos="fade-down" data-aos-duration="1000">
                    <a href="#" class="tran-animate">
                        <div class="thumb bc3"></div>
                        <div class="desc">
                            <h3 class="title"><?php echo $infodu['lang']['index']['main']['tech07']?></h3>
                            <p class="content"><?php echo $infodu['lang']['index']['main']['tech08']?></p>
                            <span class="more"></span>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>
<script>
    $(document).ready(function(){
        var proSlider = $('.business-slider').bxSlider({
            auto: true,
            infiniteLoop: true,
            wrapperClass: 'business-wrapper',
            autoControls: false,
            adaptiveHeight: true,
            speed: 500,
            pager: true,
            pagerCustom: '#business-bx-pager', 
            controls: false, 
            onSliderLoad: function(){
               
            },
            onSlideBefore: function (slide, oldIndex, newIndex) {
                var current = proSlider.getCurrentSlide();

            },
            onSlideAfter: function (slide, oldIndex, newIndex) {
                var current = proSlider.getCurrentSlide();
            }

        });

        
    });
   
</script>




<section class="k_wrap" id="etc_section">
    <div class="k_container type_center">
           <div class="etcInner">       
                <div class="etc_title">
                    <h4 data-aos="fade-down" data-aos-duration="200"><img src="<?php echo G5_LANG_IMG_URL?>/contents03_logo.png" /></h4>
                    <p class="font_montserrat" data-aos="fade-down" data-aos-duration="500"><?php echo $infodu['lang']['index']['main']['etc01']?></p>
                </div>
                <div class="etc_content" data-aos="fade-down" data-aos-duration="400">
                    <p><?php echo $infodu['lang']['index']['main']['etc02']?></p>
                </div>
                <div class="etcBox" data-aos="fade-down" data-aos-duration="600">
                    <a href="#" class="tran-animate"><span><?php echo $infodu['lang']['index']['main']['etc03']?></span><span class="white_arrow"></span></a>
                </div>
                <div class="etcBox" data-aos="fade-down" data-aos-duration="800">
                    <a href="#" class="tran-animate"><span><?php echo $infodu['lang']['index']['main']['etc04']?></span><span class="white_arrow"></span></a>
                </div>
             

            </div>

    </div>
</section>



<section class="k_wrap" id="lat_section">
    <div class="k_container type_center">
        
           
        <div class="lt">
            <h4 data-aos="fade-down" data-aos-duration="200"><a href="#" class="font_montserrat">Notice</a></h4>
            <ul>
                <?php for($i=1; $i<=3; $i++):?>
                    <li data-aos="fade-down" data-aos-duration="<?php echo $i*2?>00">
                        <a href="#" class="lt_a">
                            <div class="lt_date font_montserrat">2019.07.01</div>
                            <h5>성화퓨렌텍 홈페이지 오픈</h5>
                            <p>성화퓨렉텍 홈페이지를 방문해주신 고객 여러분께 진심으로 감사드립니다.</p>
                        </a>        
                    </li>
                <?php endfor;?>
            </ul>

        </div>
          
            
    </div>
</section>



<section class="k_wrap" id="inquiry_section">
    <div class="k_container type_center">
        
           
        <div class="inquiry_title">
            <h4 class="font_montserrat"><?php echo $infodu['lang']['index']['main']['inq01']?></h4>
            <p><?php echo $infodu['lang']['index']['main']['inq02']?></p>

            <div class="company_info">
                <table class="table">
                    <tr>
                        <th><?php echo $infodu['lang']['index']['main']['inq_t01']?></th>
                        <td><?php echo $infodu['lang']['index']['main']['inq_d01']?></td>
                    </tr>
                    <tr>
                        <th><?php echo $infodu['lang']['index']['main']['inq_t02']?></th>
                        <td><?php echo $infodu['lang']['index']['main']['inq_d02']?></td>
                    </tr>
                    <tr>
                        <th><?php echo $infodu['lang']['index']['main']['inq_t03']?></th>
                        <td><?php echo $infodu['lang']['index']['main']['inq_d03']?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="inquiry_content">
            <form id="frmAjax" name="frmAjax" method="post" enctype="multipart/form-data" action="<?php echo G5_LANG_URL?>/_mailMain.php" onSubmit="return checkForm(this);">
                
                <div class="mailBox">
                    <ul class="mail_table">          
                        <li class="mail_input">
                            <label class="laTxt" for="label1"><input type="text" name="company" id="label1" class="frmMailInput" placeholder="<?php echo $infodu['lang']['index']['main']['inq_m01']?>"/></label>
                        </li>
                        <li class="mail_input">
                            <label class="laTxt" for="label2"><input type="text" name="name" id="label2" class="frmMailInput" placeholder="<?php echo $infodu['lang']['index']['main']['inq_m02']?>"/></label>
                        </li>
                    </ul>
                    <ul class="mail_table"> 
                        <li class="mail_input">
                            <label class="laTxt" for="label3"><input type="text" name="tel" id="label3" class="frmMailInput" placeholder="<?php echo $infodu['lang']['index']['main']['inq_m03']?>"/></label>
                        </li>
                        <li class="mail_input">
                            <label class="laTxt" for="label4"><input type="text" name="mail" id="label4" class="frmMailInput" placeholder="<?php echo $infodu['lang']['index']['main']['inq_m04']?>"/></label>
                        </li>
                    </ul>

                </div>
                <div class="mailBox">
                    <ul class="mail_table ">    
                        <li class="mail_input2">
                            <label class="laTxt" for="label5"><textarea name="memo" id="label5" class="frmMailTextArea" placeholder="<?php echo $infodu['lang']['index']['main']['inq_m05']?>"></textarea></label>
                        </li>
                    </ul>
                    <ul class="mail_table"> 
                        <li class="mail_input2">
                            <label class="laTxt" for="label6"><input type="file" id="label6" name="upfile" /></label>
                        </li>
                    </ul>
                </div>

                <div class="mail_submit">
                    <input type="submit" id="onSubmit" class="frmMailSubmit" value="<?php echo $infodu['lang']['index']['main']['inq_m06']?>" />
                </div>
            </form>
        </div>
          
            
    </div>
</section>
<script>
    <!--
    function checkForm(f) {

        if(!f.company.value) {
            alert('<?php echo $infodu['lang']['index']['main']['inq_err01']?>');
            f.company.focus();
            return false;
        }
        if(!f.name.value) {
            alert('<?php echo $infodu['lang']['index']['main']['inq_err02']?>');
            f.name.focus();
            return false;
        }
        if(!f.tel.value) {
            alert('<?php echo $infodu['lang']['index']['main']['inq_err03']?>');
            f.tel.focus();
            return false;
        }
        if(!f.mail.value) {
            alert('<?php echo $infodu['lang']['index']['main']['inq_err04']?>');
            f.mail.focus();
            return false;
        }
        if(!f.memo.value) {
            alert('<?php echo $infodu['lang']['index']['main']['inq_err05']?>');
            f.memo.focus();
            return false;
        }
        return true;
    }
    //-->
</script>


<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>