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
     
<section class="k_wrap section" id="section1">
    <div class="vg_inner">       
        <div class="vg_title">
            <h2 class="aFadeLt"><?php echo $infodu['lang']['index']['main']['txt01']?></h2>
            <p class="aFadeRt"><?php echo $infodu['lang']['index']['main']['txt02']?></p>   
            <a href="<?php echo G5_LANG_URL?>/company/company.php" class="more aFadeUp"><span><?php echo $infodu['lang']['index']['main']['txt03']?></span></a>        
        </div>
    </div>
</section>

<section class="k_wrap section" id="section2">
    <div class="vg_inner">       
        <div class="vg_title right">
            <h2 class="aFadeLt"><?php echo $infodu['lang']['index']['main']['skin01']?></h2>
            <p class="aFadeRt"><?php echo $infodu['lang']['index']['main']['skin02']?></p>   
            <a href="<?php echo G5_LANG_URL?>/skin/skin.php" class="more aFadeUp"><span><?php echo $infodu['lang']['index']['main']['skin03']?></span></a>        
        </div>
    </div>
</section>

<section class="k_wrap section" id="section3">
    <div class="vg_inner">       
        <div class="vg_title">
            <h2 class="aFadeLt"><?php echo $infodu['lang']['index']['main']['scuba01']?></h2>
            <p class="aFadeRt"><?php echo $infodu['lang']['index']['main']['scuba02']?></p>   
            <a href="<?php echo G5_LANG_URL?>/scuba/scuba.php" class="more aFadeUp"><span><?php echo $infodu['lang']['index']['main']['scuba03']?></span></a>        
        </div>
    </div>
</section>

<section class="k_wrap section" id="section4">
    <div class="vg_inner">       
        <div class="vg_movie">
            <iframe width="1000" height="600" src="https://www.youtube.com/embed/JuWwDBfd37I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</section>

<section class="k_wrap section" id="section5">
    <div class="businessInner">       
            
            <div class="business aFadeUp delay-1s-temp" >
                <a href="#" class="">
                    <div class="thumb tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/ico01.png" alt="" /></div>
                    <div class="desc">
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['pro01']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['pro02']?></p>
                    </div>
                    <span class="more tran-animate"><?php echo $infodu['lang']['index']['main']['proView']?></span>
                </a>
            </div>
            <div class="business aFadeUp delay-2s-temp" >
                <a href="#" class="">
                    <div class="thumb tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/ico02.png" alt="" /></div>
                    <div class="desc">
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['pro03']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['pro04']?></p>
                    </div>
                    <span class="more tran-animate"><?php echo $infodu['lang']['index']['main']['proView']?></span>
                </a>
            </div>
            <div class="business aFadeUp delay-3s-temp" >
                <a href="<?php echo G5_LANG_URL?>/mail/mail.php" class="">
                    <div class="thumb tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/ico03.png" alt="" /></div>
                    <div class="desc">
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['pro05']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['pro06']?></p>
                    </div>
                    <span class="more tran-animate"><?php echo $infodu['lang']['index']['main']['proView']?></span>
                </a>
            </div>
            <div class="business last aFadeUp delay-4s-temp" >
                <a href="#" class="">
                    <div class="thumb tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/ico04.png" alt="" /></div>
                    <div class="desc">
                        <h3 class="title"><?php echo $infodu['lang']['index']['main']['pro07']?></h3>
                        <p class="content"><?php echo $infodu['lang']['index']['main']['pro08']?></p>
                    </div>
                    <span class="more tran-animate"><?php echo $infodu['lang']['index']['main']['proView']?></span>
                </a>
            </div>

    </div>
</section>





