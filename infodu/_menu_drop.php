<div id="gnb">
    <nav>
        <ul class="gnb_list clear">
            <?php for($i=0; $i<count($nav1st); $i++): ?>
            <li class="nav1">

                <?php 
                    $on = '';
                    if( $nav1st[$i]['mCode'] == $breadcrumArr[0]['mCode']): 
                        $on = 'on';
                    endif;
                ?>


                <a href="<?php echo $nav1st[$i]['url']?>" class="menu_link <?php echo $on?>" id="<?php echo $nav1st[$i]['pid']?>">
                    <?php echo $nav1st[$i]['title']?>
                </a>

                
                <ul class="subNavi">
                    <?php for($j=0; $j<count($nav2nd); $j++):?>
                        <?php if(substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']): ?>
                            <li><a href="<?php echo $nav2nd[$j]['url']?>"><?php echo $nav2nd[$j]['title']?></a></li>
                        <?php endif; ?>
                    <?php endfor; ?>
                </ul>
                
            </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>


<?php if (defined("_INDEX_")): ?>
<script>

    $(document).ready(function(){
        var $_service_section = $('#service_section').offset().top - 71;
        var $_work_section = $('#management_section').offset().top - 71;
        var $_portfolio_section = $('#portfolio_section').offset().top - 71;
        var $_cs_section = $('#customer_section').offset().top - 71;
        var $_mail_section = $('#message_section').offset().top - 71;
        $('.menu_link').click(function(e){
            e.preventDefault();
            var _this = $(this).attr('id');


            

            switch (_this){
                case 'service': $('html, body').animate({scrollTop : $_service_section}, 400); break;
                case 'management': $('html, body').animate({scrollTop : $_work_section}, 400); break;
                case 'portfolio': $('html, body').animate({scrollTop : $_portfolio_section}, 400); break;
                case 'customer': $('html, body').animate({scrollTop : $_cs_section}, 400); break;
                case 'message': $('html, body').animate({scrollTop : $_mail_section}, 400); break;
            }
        }); 

        $(window).scroll(function() {
            var wScroll = $(this).scrollTop()+71;  

            if(wScroll<$_service_section){
                $('.menu_link').removeClass('on');
            }

            if(wScroll >= $_service_section && wScroll <= $_work_section){
                $('.menu_link').removeClass('on');
                $('#service').addClass('on')
            } 
            if(wScroll >= $_work_section && wScroll <= $_portfolio_section){
                $('.menu_link').removeClass('on');
                $('#management').addClass('on')
            } 
            if(wScroll >= $_portfolio_section && wScroll <= $_cs_section){
                $('.menu_link').removeClass('on');
                $('#portfolio').addClass('on')
            } 
            if(wScroll >= $_cs_section && wScroll <= $_mail_section){
                $('.menu_link').removeClass('on');
                $('#customer').addClass('on')
            } 
            if(wScroll >= $_mail_section){
                $('.menu_link').removeClass('on');
                $('#message').addClass('on')
            }

        });


    });
</script>        
<?php endif;?>