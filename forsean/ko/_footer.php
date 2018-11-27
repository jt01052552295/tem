<?php if (!defined("_INDEX_")) { ?>
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->






<footer class="footer">
    <p class="btn_top">
        <a href="#top">
            <img src="<?php echo G5_LANG_IMG_URL?>/top/pc/btn_gotop.png" alt="위로" class="hidden-xs">
            <img src="<?php echo G5_LANG_IMG_URL?>/top/pc/btn_gotop.png" alt="위로" class="visible-xs" width="40" height="40">
        </a>
    </p>
    <div class="table_cell">
        Copyright ©  Forsean Co,.LTD. All Rights Reserved.
    </div>
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo G5_LANG_JS_URL?>/lib/jquery1-12-4.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo G5_LANG_JS_URL?>/functions.min.js"></script>
<script type="text/javascript" src="<?php echo G5_LANG_JS_URL?>/matchHeight.js"></script>
<script type="text/javascript">
    $('.matchHeight').matchHeight();
</script>
    <script type="text/javascript">

        $('#link').change(function () {
             $(this).find('option:selected').css('color','red');
        });

        (function($) {
            $(window).load(function(){
                //var allPanels = $('.ul_faq li > .faq_answer').hide();
                $('.ul_faq li').each(function(){
                    $(this).find('.table').each(function(){
                        $(this).click(function() {
                          $this = $(this);
                          $target =  $(this).siblings('.faq_answer');

                          if(!$this.hasClass('active')){
                             $this.addClass('active');
                          } else {
                            $this.removeClass('active');
                          }

                        $target.slideToggle(400);
                        // return false;
                        });
                    });
                })
            })
        })(jQuery);
    </script>

<!-- End Document
================================================== -->

<script> 
$(function() { 
    var hdBtn = $('#header-fixed');    
    var ftBtn = $('#footer-fixed');    
    hdBtn.hide(); 
    ftBtn.hide(); 
    $(window).scroll(function () { 
        if ($(this).scrollTop() > 200) { 
            hdBtn.fadeIn(); 
            ftBtn.fadeIn(); 
        } else { 
            hdBtn.fadeOut(); 
            ftBtn.fadeOut(); 
        } 
    }); 
}); 
</script>



<script type="text/javascript">
$(function(){
    $(window).scroll(function(){
        if($(window).width() > 767) {
            if($(this).scrollTop() >= 300) {
                $('.btn_top').css('right','30px');
            }
            else{
                $('.btn_top').css('right','-300px');
            }
        }
    });
});
</script>

<div id="footer-fixed"> 
    <div id="footer-bk"> 
        <div id="footer"> 
            <span class="left"><span class="left">
                <a href="https://www.amazon.co.jp/1%E6%97%A51%E5%88%86%E3%81%A7%E5%B0%8F%E9%A1%94%E3%81%AB%EF%BC%81%E7%BE%8E%E4%BA%BA%E3%83%A8%E3%82%ACPICO-%E5%B0%8F%E9%A1%94%E7%9F%AF%E6%AD%A3-%E7%BE%8E%E9%A1%94%E5%99%A8-%E3%82%B0%E3%83%83%E3%82%BA-%E3%83%A1%E3%83%B3%E3%82%BA%E5%AF%BE%E5%BF%9C/dp/B07KG77F3R/ref=pd_aw_sbs_194_1?_encoding=UTF8&pd_rd_i=B07KG77F3R&pd_rd_r=16807456-ebe7-11e8-a4cf-fdb4a1f98b5d&pd_rd_w=CeBK1&pd_rd_wg=T2YZL&pf_rd_i=mobile-dp-sims&pf_rd_m=AN1VRQENFRJN5&pf_rd_p=8a2869a0-1514-4903-ae1d-ef14af35b791&pf_rd_r=NGF3AWXPB4ZWVBKC9PES&pf_rd_s=mobile-dp-sims&pf_rd_t=40701&refRID=NGF3AWXPB4ZWVBKC9PES" target="_blank"><img src="<?php echo G5_LANG_IMG_URL?>/top/amazon_btn.jpg" border="0" class="46"  >
                </a>
            </span> 
        </div> 
    </div> 
</div> 