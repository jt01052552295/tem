<section class="k_wrap" id="business_section">
    <div class="k_container type_center">
       
       <div class="businessInner">       
            <div class="business ">
                <a href="<?php echo G5_PAGE_URL?>/message.php" class="tran-animate">
                    <div class="inner">
                        <div class="thumb"><img src="<?php echo G5_THEME_IMG_URL?>/contents01_icon01.png" /></div>
                        <div class="desc">
                            <h3 class="title"><?php echo $infodu['lang']['main']['business01']?></h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="business">
                <a href="<?php echo G5_PAGE_URL?>/callout.php" class="tran-animate">
                    <div class="inner">
                        <div class="thumb"><img src="<?php echo G5_THEME_IMG_URL?>/contents01_icon02.png" /></div>
                        <div class="desc">
                            <h3 class="title"><?php echo $infodu['lang']['main']['business02']?></h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="business">
                <a href="<?php echo G5_PAGE_URL?>/location.php" class="tran-animate">
                    <div class="inner">
                        <div class="thumb"><img src="<?php echo G5_THEME_IMG_URL?>/contents01_icon03.png" /></div>
                        <div class="desc">
                            <h3 class="title"><?php echo $infodu['lang']['main']['business03']?></h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="business last">
                <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=notice" class="tran-animate">
                    <div class="inner">
                        <div class="thumb"><img src="<?php echo G5_THEME_IMG_URL?>/contents01_icon04.png" /></div>
                        <div class="desc">
                            <h3 class="title"><?php echo $infodu['lang']['main']['business04']?></h3>
                        </div>
                        
                    </div>
                </a>
            </div>
        </div>     


    </div>
</section>



<link rel="stylesheet" href="<?php echo G5_THEME_JS_URL?>/bxslider/dist/jquery.bxslider.product.css?ver=<?php echo G5_CSS_VER?>" />
<section class="k_wrap" id="pro_section">
    <div class="k_container type_center">
        <div class="pro_wrap">
            <div class="page-header">
                <h4><?php echo $infodu['lang']['main']['proTitle01']?></h4>
                <p><?php echo $infodu['lang']['main']['proTitle02']?></p>
                <span id="product-slider-prev"></span>
                <span id="product-slider-next"></span>
            </div>
            <div class="product_wrap">
                <ul class="product-slider">  
                   
                        
                        <li class="pro">
                            <a href="<?php echo G5_PAGE_URL?>/products.php">
                                <div class="thumb"><img src="<?php echo G5_THEME_IMG_URL?>/contents02_img01.jpg" /></div>
                                <div class="desc">
                                    <h5><?php echo $infodu['lang']['main']['pro01']?></h5>
                                </div>
                            </a>
                        </li>
                        <li class="pro">
                            <a href="<?php echo G5_PAGE_URL?>/products.php">
                                <div class="thumb"><img src="<?php echo G5_THEME_IMG_URL?>/contents02_img02.jpg" /></div>
                                <div class="desc">
                                    <h5><?php echo $infodu['lang']['main']['pro02']?></h5>   
                                </div>
                            </a>
                        </li>
                        <li class="pro">
                            <a href="<?php echo G5_PAGE_URL?>/products.php">
                                <div class="thumb"><img src="<?php echo G5_THEME_IMG_URL?>/contents02_img03.jpg" /></div>
                                <div class="desc">
                                    <h5><?php echo $infodu['lang']['main']['pro03']?></h5>   
                                </div>
                            </a>
                        </li>
                       
                </ul>
            </div>

            <div class="product_more">
                <a href="<?php echo G5_PAGE_URL?>/products.php" class="tran-animate"><span class="font_montserrat more">MORE VIEW</span></a>
            </div>

        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
        var settingsPro = function() {
            var settings1 = {
                auto: false,
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
            return settings1;
            // return ($(window).width()>1024) ? settings1 : settings2;
        }

        var proSlider;
        function tourLandingScriptPro() {
            proSlider.reloadSlider(settingsPro());
        }

        proSlider = $('.product-slider').bxSlider(settingsPro());
        $(window).resize(tourLandingScriptPro);       
    });
   
</script>


<section class="k_wrap" id="video_section">
    <div class="k_container type_center">

        <div class="video_title">
            <h4><?php echo $infodu['lang']['main']['video01']?></h4>
            <p><?php echo $infodu['lang']['main']['video02']?></p>
        </div>

        <div class="yTube">
            <iframe width="100%" height="600" src="https://www.youtube.com/embed/7XC6omfXEo0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
    </div>
</section>


<section class="k_wrap" id="inquiry_section">
    <div class="k_container type_center">

        <div class="inquiry_toggle">

            <div class="inquiry_content">
                <div class="inquiry_title">
                    <h4><?php echo $infodu['lang']['main']['inq01']?></h4>     
                    <p><?php echo $infodu['lang']['main']['inq02']?></p>     
                </div>
                <form id="frmAjax" name="frmAjax" method="post" enctype="multipart/form-data" action="<?php echo G5_THEME_URL?>/_mailMain.php" onSubmit="return checkForm(this);">
                    <div class="mailBox">
                        <ul class="mail_table">          
                            <li class="mail_input">
                                <label class="laTxt" for="label2"><?php echo $infodu['lang']['main']['inq_m01']?></label>
                            </li>
                            <li class="mail_input">
                                <input type="text" name="name" id="label2" class="frmMailInput" placeholder=""/>
                            </li>
                        </ul>
                         <ul class="mail_table"> 
                            <li class="mail_input">
                                <label class="laTxt" for="label4"><?php echo $infodu['lang']['main']['inq_m02']?></label>
                            </li>
                            <li class="mail_input">
                                <input type="text" name="mail" id="label4" class="frmMailInput" placeholder=""/>
                            </li>
                        </ul>
                        <ul class="mail_table"> 
                            <li class="mail_input">
                                <label class="laTxt" for="label3"><?php echo $infodu['lang']['main']['inq_m03']?></label>
                            </li>
                            <li class="mail_input">
                                <input type="text" name="tel" id="label3" class="frmMailInput" placeholder=""/>
                            </li>
                        </ul>
                       

                    </div>
                    <div class="mailBox">
                        <ul class="mail_table ">    
                            <li class="mail_input2">
                                <textarea name="memo" id="label5" class="frmMailTextArea" placeholder="<?php echo $infodu['lang']['main']['inq_m04']?>"></textarea>
                            </li>
                        </ul>
                        <ul class="mail_table"> 
                            <li class="mail_input">
                                <span class="agreeTxt2"><a href="#none"><?php echo $infodu['lang']['main']['inq_m05']?></a></span>
                            </li>
                            <li class="mail_input">
                                <div class="agreeFrmChk">
                                    <label class="agreeTxt" for="agree"><?php echo $infodu['lang']['main']['inq_m06']?></label>
                                    <input class="checkbox" type="checkbox" id="agree" name="agree" value="Y">
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="mail_submit">
                        <button type="submit" class="frmMailSubmit"><?php echo $infodu['lang']['main']['inq_m07']?></button>
                    </div>
                </form>
            </div>
            
            <div class="inquiry_map">
                <div class="snsBox">
                    <h4>
                        <?php echo $infodu['lang']['main']['inq_sns01']?> 
                        <span class="sm"><a href="https://blog.naver.com/siemens67" target="_blank"><img src="<?php echo G5_THEME_IMG_URL?>/logo_blog.jpg" /></a></span>
                    </h4>
                    <div class="conList">
                        <!-- 네이버 블로그 연동 -->
                    </div>
                </div>
                <div class="snsBox last">
                    <h4>
                        <?php echo $infodu['lang']['main']['inq_sns02']?>
                        <span class="sm"><a href="https://instagram.com/namposiemens?igshid=7dnqybwk7jql" target="_blank"><img src="<?php echo G5_THEME_IMG_URL?>/logo_insta.jpg" /></a></span>
                    </h4>
                    <div class="conList">
                        <!-- 인스타그램 연동 -->
                    </div>
                </div>
            </div>

            

            
        </div>
          
            
    </div>
</section>
<script>
    function checkForm(f) {
        if(!f.name.value) {
            alert('<?php echo $infodu['lang']['main']['inq_err01']?>');
            f.name.focus();
            return false;
        }
        if(!f.mail.value) {
            alert('<?php echo $infodu['lang']['main']['inq_err02']?>');
            f.mail.focus();
            return false;
        }
        if(!f.tel.value) {
            alert('<?php echo $infodu['lang']['main']['inq_err03']?>');
            f.tel.focus();
            return false;
        }
        
        if(!f.memo.value) {
            alert('<?php echo $infodu['lang']['main']['inq_err04']?>');
            f.memo.focus();
            return false;
        }
        return true;
    }
</script>




<link rel="stylesheet" href="<?php echo G5_THEME_JS_URL?>/bxslider/dist/jquery.bxslider.carousel.css?ver=<?php echo G5_CSS_VER?>" />
<div class="partner_wrap">
    <div class="partner_inner">
        <span id="partner-slider-prev"></span> <!-- 이전 -->
        <span id="partner-slider-next"></span> <!-- 다음 -->
        <div class="partner-slider">
            <div><a href="http://www.ezisum.kr" target="_blank"><img src="<?php echo G5_THEME_IMG_URL?>/contents05_img01.jpg"  alt="" /></a></div>
            <div><a href="#none"><img src="<?php echo G5_THEME_IMG_URL?>/contents05_img02.jpg"  alt="" /></a></div>
            <div><a href="#none"><img src="<?php echo G5_THEME_IMG_URL?>/contents05_img03.jpg"  alt="" /></a></div>
            <div><a href="#none"><img src="<?php echo G5_THEME_IMG_URL?>/contents05_img04.jpg"  alt="" /></a></div>
            <div><a href="http://www.audiologykorea.or.kr/" target="_blank"><img src="<?php echo G5_THEME_IMG_URL?>/contents05_img05.jpg"  alt="" /></a></div>
            <div><a href="http://www.khaa.org/" target="_blank"><img src="<?php echo G5_THEME_IMG_URL?>/contents05_img06.jpg"  alt="" /></a></div>
        </div>
        
    </div>
</div>
<script>
    $(document).ready(function(){

        var settings = function() {

            var settings2 = {
                auto: true,
                infiniteLoop: true,
                wrapperClass: 'partner-wrapper',
                autoControls: false,
                adaptiveHeight: false,
                pager:false,
                speed:100,
                controls: true,
                nextSelector: '#partner-slider-next',
                prevSelector: '#partner-slider-prev',
            };

            var settings1 = {
                auto: true,
                infiniteLoop: true,
                slideMargin:10,
                minSlides:4,
                maxSlides:4,
                moveSlides:1,
                slideWidth:267,
                wrapperClass: 'partner-wrapper',
                autoControls: false,
                adaptiveHeight: false,
                pager:false,
                speed:300,
                controls: true,
                nextSelector: '#partner-slider-next',
                prevSelector: '#partner-slider-prev',
            };

            // return ($(window).width()>=1024) ? settings1 : settings2;
            return settings1;

        }


        var mySlider;
        function tourLandingScript() {
            mySlider.reloadSlider(settings());
        }        

        mySlider = $('.partner-slider').bxSlider(settings());
        $(window).resize(tourLandingScript);


        $('#partner-slider-prev a, #partner-slider-next a').click(function(){
            mySlider.stopAuto();
            mySlider.startAuto();
        });
        $('#partner-slider-toggle a').click(function(e){
            e.preventDefault();
            var toggle = $(this).attr('data-toggle');
            if(toggle=="stop"){
                mySlider.stopAuto();
                $(this).attr('data-toggle', 'start');
            } else {
                mySlider.stopAuto();
                mySlider.startAuto();
                $(this).attr('data-toggle', 'stop');
            }
        });
    });
</script>
