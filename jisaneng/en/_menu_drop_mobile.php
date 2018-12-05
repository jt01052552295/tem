<div class="m_menu_wrap" id="amenu">
    <div class="dim"></div>
    <div class="m_menu_bg"></div>
    <div class="m_menu_h">
        <div class="nav-top">
            <div class="btn-x">
                <a href="#"><i class="fas fa-times fa-2x"></i></a>
            </div>
        </div>
        <ul class="m-nav">
            <?php for($i=0; $i<count($nav1st); $i++): ?>
            <li>
                <a  
                    <?php if (defined("_INDEX_")): ?>
                        href="<?php echo $nav1st[$i]['url']?>"
                    <?php else:?>
                        href="<?php echo KI_URL?>#<?php echo $nav1st[$i]['pid']?>_section"
                    <?php endif;?>
                    id="<?php echo $nav1st[$i]['pid']?>_mobile" 
                    class="mName menu_link2 <?php echo ($i==0)?'on':'';?>" 
                    data-size="<?php echo $nav1st[$i]['me_mobile_toggle']?>"><?php echo $nav1st[$i]['title']?> 
                    <!-- <i class="fas fa-angle-down"></i> --></a>

                
                <ul class="sub_menu sm01" >
                    <?php for($j=0; $j<count($nav2nd); $j++):?>
                    <?php if(substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']): ?>
                    <li><a href="<?php echo $nav2nd[$j]['url']?>"><?php echo $nav2nd[$j]['title']?></a></li>
                    <?php endif; ?>
                    <?php endfor; ?>
                </ul>
                
            </li>
            <?php endfor; ?>
        </ul>
        
        <p>2018 © 한국산업정보사 <br>ALL RIGHTS RESERVED.</p>
    </div>
</div>

<?php if (defined("_INDEX_")): ?>
<script>
    $(document).ready(function(){
        var $_service_section = $('#service_section').offset().top - 71;
        var $_work_section = $('#management_section').offset().top - 71;
        var $_portfolio_section = $('#portfolio_section').offset().top - 71;
        var $_cs_section = $('#customer_section').offset().top - 71;
        var $_mail_section = $('#message_section').offset().top - 71;
        $('.menu_link2').click(function(e){
            e.preventDefault();
            var _this = $(this).attr('id');


            

            switch (_this){
                case 'service_mobile': $('html, body').animate({scrollTop : $_service_section}, 400); break;
                case 'management_mobile': $('html, body').animate({scrollTop : $_work_section}, 400); break;
                case 'portfolio_mobile': $('html, body').animate({scrollTop : $_portfolio_section}, 400); break;
                case 'customer_mobile': $('html, body').animate({scrollTop : $_cs_section}, 400); break;
                case 'message_mobile': $('html, body').animate({scrollTop : $_mail_section}, 400); break;
            }
        }); 

        $(window).scroll(function() {
            var wScroll = $(this).scrollTop()+71;  

            if(wScroll<$_service_section){
                $('.menu_link2').removeClass('on');
            }

            if(wScroll >= $_service_section && wScroll <= $_work_section){
                $('.menu_link2').removeClass('on');
                $('#service_mobile').addClass('on')
            } 
            if(wScroll >= $_work_section && wScroll <= $_portfolio_section){
                $('.menu_link2').removeClass('on');
                $('#management_mobile').addClass('on')
            } 
            if(wScroll >= $_portfolio_section && wScroll <= $_cs_section){
                $('.menu_link2').removeClass('on');
                $('#portfolio_mobile').addClass('on')
            } 
            if(wScroll >= $_cs_section && wScroll <= $_mail_section){
                $('.menu_link2').removeClass('on');
                $('#customer_mobile').addClass('on')
            } 
            if(wScroll >= $_mail_section){
                $('.menu_link2').removeClass('on');
                $('#message_mobile').addClass('on')
            }

        });


    });
</script>    
<?php endif ?>