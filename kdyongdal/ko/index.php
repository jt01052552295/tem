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



    <link rel="stylesheet" href="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.main.css?ver=<?php echo G5_CSS_VER?>" />
    <script src="<?php echo G5_LANG_JS_URL?>/bxslider/dist/jquery.bxslider.js"></script>
    <section class="k_wrap" id="main_section">
        <div class="vg_inner">
            
            <ul class="main-slider">
                <li class="main-slider-li" style="background-image: url(<?php echo G5_LANG_IMG_URL?>/vg01.jpg);">
                    
                </li>
            </ul>
            <div class="vg_title">
                <h2 data-aos="fade-up" data-aos-duration="500"><?php echo $infodu['lang']['main']['txt01']?></h2>
                <p data-aos="fade-up" data-aos-delay="500"><?php echo $infodu['lang']['main']['txt02']?></p>

                <div class="vg_down" data-aos="fade-up" data-aos-delay="1000">
                    <a href="#" class="tran-animate linkA" data-href="inquiry">
                        <span><?php echo $infodu['lang']['main']['txt03']?></span>
                        <span class="white_arrow"></span>
                    </a>
                </div>

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
                speed: 500,
                pager: true,
                controls: true,
                nextSelector: '#main-slider-next',
                prevSelector: '#main-slider-prev',  
                pagerCustom: '#main-bx-pager', 
                onSliderLoad: function(){

                    $('.main-slider > li').eq(0).addClass('active-slide');
                    setTimeout(function() {
                        $('header#header').addClass('down');
                    }, 500);

                    
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

    <section class="k_wrap" id="service_section">
        <div class="k_container type_center">

                
            <div class="serv_title">
                <h4 data-aos="fade-up"><?php echo $infodu['lang']['main']['serv_title01']?></h4>
                <p data-aos="fade-up" data-aos-duration="500"><?php echo $infodu['lang']['main']['serv_title02']?></p>
            </div>

            <div class="serv_content" >
                <div class="inqBox" data-aos="fade-up" data-aos-duration="200">
                    <div class="thumb tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_icon01.png" alt="" title=""></div>
                    <h3 class="title"><?php echo $infodu['lang']['main']['serv01']?></h3>
                </div>
                <div class="inqBox" data-aos="fade-up" data-aos-duration="400">
                    <div class="thumb tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_icon02.png" alt="" title=""></div>
                    <h3 class="title"><?php echo $infodu['lang']['main']['serv02']?></h3>
                </div>
                <div class="inqBox" data-aos="fade-up" data-aos-duration="600">
                    <div class="thumb tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_icon03.png" alt="" title=""></div>
                    <h3 class="title"><?php echo $infodu['lang']['main']['serv03']?></h3>
                </div>
                <div class="inqBox" data-aos="fade-up" data-aos-duration="800">
                    <div class="thumb tran-animate"><img src="<?php echo G5_LANG_IMG_URL?>/contents01_icon04.png" alt="" title=""></div>
                    <h3 class="title"><?php echo $infodu['lang']['main']['serv04']?></h3>
                </div>
            </div>

                
        </div>
    </section>





    <?php 
        $arr_car_list = array();
        $arr_car_list[] = array(imgSrc=> G5_LANG_IMG_URL.'/car01.jpg', name=>'1톤 일반카고');
        $arr_car_list[] = array(imgSrc=> G5_LANG_IMG_URL.'/car02.jpg', name=>'1톤 탑차 윙바디');
        $arr_car_list[] = array(imgSrc=> G5_LANG_IMG_URL.'/car03.jpg', name=>'1.4톤 일반카고');
        $arr_car_list[] = array(imgSrc=> G5_LANG_IMG_URL.'/car04.jpg', name=>'1.4톤 탑차 윙바디');
        $arr_car_list[] = array(imgSrc=> G5_LANG_IMG_URL.'/car05.jpg', name=>'2.5톤 일반카고');
        $arr_car_list[] = array(imgSrc=> G5_LANG_IMG_URL.'/car06.jpg', name=>'2.5톤 탑차 윙바디');
        $arr_car_list[] = array(imgSrc=> G5_LANG_IMG_URL.'/car07.jpg', name=>'3.5톤 일반카고');
        $arr_car_list[] = array(imgSrc=> G5_LANG_IMG_URL.'/car08.jpg', name=>'3.5톤 탑차 윙바디');
        $arr_car_list[] = array(imgSrc=> G5_LANG_IMG_URL.'/car09.jpg', name=>'5톤 일반카고');
        $arr_car_list[] = array(imgSrc=> G5_LANG_IMG_URL.'/car10.jpg', name=>'5톤 탑차 윙바디');
    ?>
    <section class="k_wrap" id="car_section">
        <div class="k_container type_center">
                
            <div class="car_title">
                <h4 data-aos="fade-up"><?php echo $infodu['lang']['main']['car_title01']?></h4>
                <p data-aos="fade-up" data-aos-duration="500"><?php echo $infodu['lang']['main']['car_title02']?></p>
            </div>

            <div class="car_content" >
                <?php $idx = 1;?>
                <?php foreach($arr_car_list as $key=>$value):?>
                    <div class="inqBox" data-aos="fade-up">
                        <div class="thumb tran-animate"><img src="<?php echo $value['imgSrc']?>" alt="" title=""></div>
                        <h3><?php echo $value['name']?></h3>
                    </div>
                     <?php $idx++;?>
                <?php endforeach;?>
                
            </div>
            <div class="car_more" data-aos="fade-up" data-aos-delay="1000">
                <a href="javascript:('불러올 정보가 없습니다.');" class="tran-animate">
                    <span><?php echo $infodu['lang']['main']['car_desc']?></span>
                </a>
            </div>

                
        </div>
    </section>



    <section class="k_wrap" id="inquiry_section">
        <div class="k_container type_center">
            
               
            <div class="inquiry_title">
                <h4><?php echo $infodu['lang']['main']['inq01']?></h4>
                <p><?php echo $infodu['lang']['main']['inq02']?></p>

                <div class="company_info">
                    <table class="table">
                        <tr>
                            <th><?php echo $infodu['lang']['main']['inq_t01']?></th>
                            <td><?php echo $infodu['lang']['main']['inq_d01']?></td>
                        </tr>
                        <tr>
                            <th><?php echo $infodu['lang']['main']['inq_t02']?></th>
                            <td><?php echo $infodu['lang']['main']['inq_d02']?></td>
                        </tr>
                    </table>
                </div>

                <div class="company_more">
                    <a href="#none" class="tran-animate"><span><?php echo $infodu['lang']['main']['inq_d04']?></span></a>
                </div>
            </div>

            <div class="inquiry_content">
                <form id="frmAjax" name="frmAjax" method="post" enctype="multipart/form-data" action="<?php echo G5_URL?>/_mailMain.php" onSubmit="return checkForm(this);">

                    <h4><?php echo $infodu['lang']['main']['inq_mTitle']?></h4>
                    <div class="company_inquiry">
                        <table class="table">
                            <tr>
                                <th><?php echo $infodu['lang']['main']['inq_m01']?></th>
                                <td>
                                    <input type="text" name="addr1" class="frmMailInput top" placeholder="<?php echo $infodu['lang']['main']['inq_m02']?>"/>
                                    <input type="text" name="tel1"  class="frmMailInput" placeholder="<?php echo $infodu['lang']['main']['inq_m03']?>"/>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo $infodu['lang']['main']['inq_m04']?></th>
                                <td>
                                    <input type="text" name="addr2" class="frmMailInput top" placeholder="<?php echo $infodu['lang']['main']['inq_m02']?>"/>
                                    <input type="text" name="tel2"  class="frmMailInput" placeholder="<?php echo $infodu['lang']['main']['inq_m03']?>"/>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="company_inquiry">
                        <table class="table">
                            <tr>
                                <th colspan="4" class="red"><?php echo $infodu['lang']['main']['inq_m05']?></th>
                            </tr>
                            <tr>
                                <th><?php echo $infodu['lang']['main']['inq_m06']?></th>
                                <td>
                                    <select name="tons" class="frmMailSelect">
                                        <option value=""><?php echo $infodu['lang']['main']['inq_sel']?></option>
                                        <?php foreach($infodu['lang']['main']['inq_ton'] as $val):?>
                                            <option value="<?php echo $val?>"><?php echo $val?></option>
                                        <?php endforeach?>
                                    </select>
                                </td>
                                <th><?php echo $infodu['lang']['main']['inq_m07']?></th>
                                <td>
                                    <select name="cars" class="frmMailSelect">
                                        <option value=""><?php echo $infodu['lang']['main']['inq_sel']?></option>
                                        <?php foreach($infodu['lang']['main']['inq_car'] as $val):?>
                                            <option value="<?php echo $val?>"><?php echo $val?></option>
                                        <?php endforeach?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo $infodu['lang']['main']['inq_m08']?></th>
                                <td><input type="text" name="dates"  class="frmMailInput" placeholder="<?php echo $infodu['lang']['main']['inq_date']?>"/></td>
                                <th><?php echo $infodu['lang']['main']['inq_m09']?></th>
                                <td>
                                    <select name="times" class="frmMailSelect">
                                        <option value=""><?php echo $infodu['lang']['main']['inq_sel']?></option>
                                        <?php for($i=0; $i<24; $i++):?>
                                            <?php $num = sprintf('%02d',$i); ?>
                                            <option value="<?php echo $num?>:00"><?php echo $num?>:00</option>
                                        <?php endfor?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo $infodu['lang']['main']['inq_m10']?></th>
                                <td colspan="3"><textarea name="memo" class="frmMailTextArea" placeholder="<?php echo $infodu['lang']['main']['inq_m11']?>"></textarea></td>
                            </tr>
                        </table>
                    </div>


                    <div class="mail_submit">
                        <input type="submit" id="onSubmit" class="frmMailSubmit" value="<?php echo $infodu['lang']['main']['inq_m12']?>" />
                    </div>
                </form>
            </div>
              
                
        </div>
    </section>
    <script>
        <!--
        function checkForm(f) {

            if(!f.addr1.value || !f.addr2.value) {
                alert("<?php echo $infodu['lang']['main']['inq_err01']?>");
                f.addr1.focus();
                return false;
            }
            if(!f.tel1.value || !f.tel2.value) {
                alert("<?php echo $infodu['lang']['main']['inq_err02']?>");
                f.tel1.focus();
                return false;
            }
            if(!f.tons.value) {
                alert("<?php echo $infodu['lang']['main']['inq_err03']?>");
                f.tons.focus();
                return false;
            }
            if(!f.cars.value) {
                alert("<?php echo $infodu['lang']['main']['inq_err04']?>");
                f.cars.focus();
                return false;
            }
            if(!f.times.value) {
                alert("<?php echo $infodu['lang']['main']['inq_err05']?>");
                f.times.focus();
                return false;
            }
            if(!f.dates.value) {
                alert("<?php echo $infodu['lang']['main']['inq_err06']?>");
                f.dates.focus();
                return false;
            }
            if(!f.memo.value) {
                alert("<?php echo $infodu['lang']['main']['inq_err07']?>");
                f.memo.focus();
                return false;
            }
            return true;
        }
        //-->
    </script>





    <section class="k_wrap" id="price_section">
        <div class="k_container type_center">
                
            <div class="price_title">
                <h4 data-aos="fade-up"><?php echo $infodu['lang']['main']['price_title01']?></h4>
                <p data-aos="fade-up" data-aos-duration="500"><?php echo $infodu['lang']['main']['price_title02']?></p>
            </div>

            <div class="price_content " data-aos="fade-up">
                <p><?php echo $infodu['lang']['main']['price_desc']?></p>
                <div class="mobile_table_arrow">
                    <span><?php echo $infodu['lang']['main']['price_arrow']?></span>
                </div>
                <div class="div_scroll">
                    <table class="table w_fixed">
                        <?php foreach($infodu['lang']['main']['priceTbl01'] as $key=>$val):?>
                        <tr>
                            <?php if( strpos($key,'th') !== false):?>
                                <?php foreach($val as $idx=>$data):?>
                                <th><?php echo $data?></th>
                                <?php endforeach;?>
                            <?php else:?>
                                <?php foreach($val as $idx=>$data):?>
                                <td><?php echo $data?></td>
                                <?php endforeach;?>

                            <?php endif;?>
                        </tr>
                        <?php endforeach;?>
                    </table>        
                </div>
            </div>

                
        </div>
    </section>





    <section class="k_wrap" id="ban_section">
        <div class="k_container type_center">
            <div class="loc_desc">
                <p class="big" data-aos="fade-up" data-aos-duration="500"><?php echo $infodu['lang']['main']['ban01']?></p>
                <p class="sm" data-aos="fade-up" data-aos-duration="1000"><?php echo $infodu['lang']['main']['ban02']?></p>
            </div>
        </div>
    </section>

</div>


<?php
include_once(G5_LANG_PATH.'/_footer.php'); 
?>