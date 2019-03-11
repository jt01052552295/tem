<?php if (!defined("_INDEX_")) { ?>
        </div><!-- .contents_wrap -->
    </div><!-- .k_container #subPage -->
</div><!-- .k_wrap #subPageWrap -->
<?php } ?>

<!-- 하단 시작 { -->


<div class="k_wrap" id="ft2">
    <div class="k_container type_center">
        <ul class="ft_ul">                   
            <li><a href="#"><?php echo  $infodu['lang']['common']['ft01'] ?></a></li>
            <li><a href="#"><?php echo  $infodu['lang']['common']['ft02'] ?></a></li>
            <li><a href="#"><?php echo  $infodu['lang']['common']['ft03'] ?></a></li>
            <li><a href="#"><?php echo  $infodu['lang']['common']['ft04'] ?></a></li>
            <li><a href="#"><?php echo  $infodu['lang']['common']['ft05'] ?></a></li>
            <li><a href="#"><?php echo  $infodu['lang']['common']['ft06'] ?></a></li>
            <li><a href="#"><?php echo  $infodu['lang']['common']['ft07'] ?></a></li>
            <li><a href="#"><?php echo  $infodu['lang']['common']['ft08'] ?></a></li>
        </ul>
    </div>
</div>

<footer id="footer" <?php if (!defined("_INDEX_")): ?> class="subFooter" <?php endif; ?> >
    <div class="copyright_wrap">
        <div class="goTop">
            <a href="#" class="top_btn"><i class="fas fa-angle-up"></i><span class="sr-only"><?php echo  $infodu['lang']['common']['txt03']?></span></a>
        </div>
        <script>
        $(document).ready(function(){
            $('.top_btn').click(function(e){
                e.preventDefault();
                var id = $(this).attr('id');
                $('html, body').animate({scrollTop : 0}, 400);
            }); 
        });
        </script>


        <div class="copy_logo"><img src="<?php echo G5_LANG_IMG_URL?>/copy_logo.png" /></div>

        <div class="copy_by">
            <address>
                <?php echo  $infodu['lang']['common']['txt01']?>
                <div class="copyright"><p><?php echo  $infodu['lang']['common']['txt02']?></p></div>
            </address>          
        </div>


        <div class="copy_area">
            <span class="sel_area">
                <label for="Topjumpsite" class="blind"><?php echo  $infodu['lang']['common']['copy01'] ?></label>
                <select name="Topjumplist" id="Topjumpsite" title="<?php echo  $infodu['lang']['common']['copy01'] ?>">
                    <option value=""><?php echo  $infodu['lang']['common']['copy02'] ?></option>
                    <option value="https://www.donga.ac.kr/"><?php echo  $infodu['lang']['common']['copy03'] ?></option>
                    <option value="http://medicine.donga.ac.kr"><?php echo  $infodu['lang']['common']['copy04'] ?></option>
                    <option value="https://donga-edu.donga.ac.kr"><?php echo  $infodu['lang']['common']['copy05'] ?></option>
                </select>
                <div class="sel_box tran-animate"></div>
            </span>
        </div>

        <script>
            $('#Topjumpsite').change(function(){
                var str = "";
                str = $( this ).val();
                if(str){
                    window.open(str,"_blank");
                }
            });
        </script>


    </div>
</footer>