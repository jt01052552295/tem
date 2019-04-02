<?php
define('_INDEX_', true); 
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>
<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/aos/aos.css?ver=<?php echo G5_CSS_VER?>" />
<script src="<?php echo G5_LANG_JS_URL?>/aos/aos.js"></script>
<script>
  AOS.init();
</script>

<link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css" />
<script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>
<section class="k_wrap">
    <div class="vg_inner">
        
        <ul class="main-slider">
            <li class="main-slider-li" id="main-slider-0" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);"></li>
        </ul>

        <div class="vg_title">
            <h2 data-aos="fade-up" data-aos-duration="400"><?php echo $infodu['lang']['index']['main']['txt01']?></h2>
            <p data-aos="fade-up" data-aos-duration="1000"><?php echo $infodu['lang']['index']['main']['txt02']?></p>
            <!--             <div id="main-bx-pager">
                <ul>
                    <li> <a data-slide-index="0" href="" class=""><span class="blind">1</span></a></li>
                    <li> <a data-slide-index="1" href="" class=""><span class="blind">2</span></a></li>
                    <li> <a data-slide-index="2" href="" class="active"><span class="blind">3</span></a></li>
                    <li> <a data-slide-index="3" href="" class=""><span class="blind">4</span></a></li>
                </ul>
            </div>  -->

            <a href="<?php echo G5_LANG_URL?>/company/company.php" class="vg_more tran-animate" data-aos="fade-up" data-aos-duration="1000"><?php echo $infodu['lang']['index']['main']['txt03']?> <span class="right_arrow"></span></a>

        </div>

        

        <div class="vg_down" style="display: none">
            <span id="main-slider-prev"></span> <!-- 이전 -->
            <span id="main-slider-next"></span> <!-- 다음 -->  
        </div>


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
        

        // setInterval(function(e){ 
        //     mainSlider.goToNextSlide();
        // }, 5000);
        
    });
   
</script>


<link href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.carousel.css" rel="stylesheet">
<section class="k_wrap" id="pro_section">
    <div class="k_container type_center">

       

        <div class="partner_inner">
             <h2 class="title"><?php echo $infodu['lang']['index']['main']['txt04']?></h2>
           
            <span id="partner-slider-prev"></span> <!-- 이전 -->
            <span id="partner-slider-next"></span> <!-- 다음 -->

            <div class="partner-slider">
                <div class="partner-box">
                    <a href="#">
                        <img src="<?=G5_LANG_IMG_URL?>/pro01.jpg"  alt="" />
                        <div class="con tran-animate">
                            <h4><?php echo $infodu['lang']['index']['main']['txt05']?></h4>
                            <p><?php echo $infodu['lang']['index']['main']['txt06']?></p>
                            <span class="btn_arrow"><img src="<?=G5_LANG_IMG_URL?>/btn_arrow.png"  alt="" /></span>
                        </div>
                    </a>
                </div>
                <div class="partner-box">
                    <a href="#">
                        <img src="<?=G5_LANG_IMG_URL?>/pro02.jpg"  alt="" />
                        <div class="con tran-animate">
                            <h4><?php echo $infodu['lang']['index']['main']['txt07']?></h4>
                            <p><?php echo $infodu['lang']['index']['main']['txt08']?></p>
                            <span class="btn_arrow"><img src="<?=G5_LANG_IMG_URL?>/btn_arrow.png"  alt="" /></span>
                        </div>
                    </a>
                </div>
                <div class="partner-box">
                    <a href="#">
                        <img src="<?=G5_LANG_IMG_URL?>/pro03.jpg"  alt="" />
                        <div class="con tran-animate">
                            <h4><?php echo $infodu['lang']['index']['main']['txt09']?></h4>
                            <p><?php echo $infodu['lang']['index']['main']['txt10']?></p>
                            <span class="btn_arrow"><img src="<?=G5_LANG_IMG_URL?>/btn_arrow.png"  alt="" /></span>
                        </div>
                    </a>
                </div>
				<div class="partner-box">
                    <a href="#">
                        <img src="<?=G5_LANG_IMG_URL?>/pro04.jpg"  alt="" />
                        <div class="con tran-animate">
                            <h4><?php echo $infodu['lang']['index']['main']['txt11']?></h4>
                            <p><?php echo $infodu['lang']['index']['main']['txt12']?></p>
                            <span class="btn_arrow"><img src="<?=G5_LANG_IMG_URL?>/btn_arrow.png"  alt="" /></span>
                        </div>
                    </a>
                </div>

            </div>                   
        </div>


        
        
    </div>
</section>


<script>
    $(document).ready(function(){
        var partnerSlider = $('.partner-slider').bxSlider({
            auto: true,
            infiniteLoop: true,
            slideMargin:20,
            minSlides:4,
            maxSlides:4,
            moveSlides:1,
            slideWidth:335,
            wrapperClass: 'partner-wrapper',
            autoControls: false,
            adaptiveHeight: false,
            pager:false,
            speed:1000,
            controls: true,
            nextSelector: '#partner-slider-next',
            prevSelector: '#partner-slider-prev',
        });
        $('#partner-slider-prev a, #partner-slider-next a').click(function(){
            partnerSlider.stopAuto();
            partnerSlider.startAuto();
        });
    });
</script>   


<section class="k_wrap" id="card_section">
    <div class="k_container type_center">

             <div class="card">
                <a href="#" class="">
                    <h4><?php echo $infodu['lang']['index']['main']['txt13']?></h4>
                    <p>
                        <?php echo $infodu['lang']['index']['main']['txt14']?>
                    </p>
                    <div class="p-image ico_business"></div>
                    <div class="a-box"><span><?php echo $infodu['lang']['index']['main']['txt15']?></span></div>
                
                </a>
            </div>
            <div class="card last">
                <a href="#" class="">
                    <h4><?php echo $infodu['lang']['index']['main']['txt16']?></h4>
                    <p>
                        <?php echo $infodu['lang']['index']['main']['txt17']?>
                    </p>
                    <div class="p-image ico_customer"></div>
                    <div class="a-box"><span><?php echo $infodu['lang']['index']['main']['txt15']?></span></div>
                </a>
            </div>

    </div>
</section>

<section class="k_wrap inner_wrap" id="ban_section">
    <div class="k_container type_center">
        <div class="inner_title"><h4><?php echo $infodu['lang']['main']['mail']['txt01']?></h4></div>
        <div class="inner_content">
            <form id="frmAjax" name="frmAjax" method="post" >
                <div class="frm-box">
                    <div class="input">
                        <label class="laTxt" for="name"><?php echo $infodu['lang']['main']['mail']['txt02']?></label> <input type="text" id="name" name="name" value="" maxlength="15" placeholder="">
                    </div>
                    <div class="input">
                        <label class="laTxt" for="email"><?php echo $infodu['lang']['main']['mail']['txt03']?></label> <input type="text" id="email" name="email" value="" placeholder="">
                    </div>
                </div>

                <div class="frm-box">
                    <div class="input">
                        <label class="laTxt" for="tel"><?php echo $infodu['lang']['main']['mail']['txt04']?></label> <input type="text" id="tel" name="tel" value="" placeholder="">
                    </div>
                    <div class="input">
                        <label class="laTxt" for="con"><?php echo $infodu['lang']['main']['mail']['txt05']?></label> <input type="text" id="con" name="con" value="" placeholder="">
                    </div>
                </div>

                <div class="frm-box2">
                    <div class="submit">
                        <input type="submit" id="onSubmit" class="tran-animate" value="<?php echo $infodu['lang']['main']['mail']['txt05']?>" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script type="text/javascript">

    $(document).ready(function(){

            var ing = "";

            $('#onSubmit').on('click', function(e){
                
                var frmURL  = '<?php echo G5_LANG_URL?>'+'/_mailMain.php';
                var params = $("#frmAjax").serialize();
                var f = document.frmAjax;


                if(!f.name.value){alert('<?php echo $infodu['lang']['main']['mail']['error01']?>');f.name.focus();  return false;}
                if(!f.tel.value){alert('<?php echo $infodu['lang']['main']['mail']['error02']?>');f.tel.focus();  return false;}
                if(!f.email.value){alert('<?php echo $infodu['lang']['main']['mail']['error03']?>');f.email.focus();  return false;}
                if(!f.con.value){alert('<?php echo $infodu['lang']['main']['mail']['error04']?>');f.con.focus();  return false;}


                if(ing == ""){
                    $.ajax({
                        url: frmURL,
                        type: 'POST',
                        data:params,
                        contentType: 'application/x-www-form-urlencoded; charset=UTF-8', 
                        dataType: 'html',
                        beforeSend: function(res) {
                        },
                        success: function (result) {
                            if (result){
                                document.frmAjax.reset();
                                alert(result);
                            }
                        },
                        error: function (res){
                            alert(res);
                        }
                    });
                    ing = "ing";
                } else {
                    alert('<?php echo $infodu['lang']['main']['mail']['error05']?>');
                    return false;
                }

                return false;
            });
    });

</script>


<section class="k_wrap" id="business_section">
    <div class="k_container type_center">
       <div class="businessInner">       
            <div class="business_title">
                <h4 data-aos="fade-down" data-aos-duration="500" class="aos-init aos-animate"><?php echo $infodu['lang']['index']['main']['txt18']?></h4>
                <p data-aos="fade-down" data-aos-duration="500" class="p1 aos-init aos-animate"><?php echo $infodu['lang']['index']['main']['txt19']?></p>
                <p data-aos="fade-down" data-aos-duration="500" class="p2 aos-init aos-animate"><?php echo $infodu['lang']['index']['main']['txt20']?></p>
            </div>
        </div>
    </div>
</section>



<section class="k_wrap" id="com_section">
    <div class="k_container type_center">

        <div class="row_c">
            <ul class="grid6">
                <li><a href="http://www.samsungshi.com" target="_blank"><img src="<?php echo G5_LANG_IMG_URL?>/com01.jpg" alt=""></a></li>
                <li><a href="https://www.dsme.co.kr" target="_blank"><img src="<?php echo G5_LANG_IMG_URL?>/com02.jpg" alt=""></a></li>
                <li><a href="https://www.hhi.co.kr/" target="_blank"><img src="<?php echo G5_LANG_IMG_URL?>/com03.jpg" alt=""></a></li>
                <li><a href="https://www.hshi.co.kr" target="_blank"><img src="<?php echo G5_LANG_IMG_URL?>/com04.jpg" alt=""></a></li>
                <li><a href="http://www.hmd.co.kr/" target="_blank"><img src="<?php echo G5_LANG_IMG_URL?>/com05.jpg" alt=""></a></li>
                <li><a href="http://www.stxship.co.kr" target="_blank"><img src="<?php echo G5_LANG_IMG_URL?>/com06.jpg" alt=""></a></li>
            </ul>
        </div>


    </div>
</section>





<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>