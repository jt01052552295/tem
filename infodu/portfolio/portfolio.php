<?php
define('_WIDE_SCREEN_', true);    // 좌우 꽉차는 화면 
include_once('./_config.php');
include_once(KI_PATH.'/_header.php'); 
include_once(KI_PATH.'/_top.php'); 
?>

<script src="<?php echo KI_JS_URL?>/portfolio.js?ver=<?php echo KI_TIME_YMD; ?>" crossorigin="anonymous"></script>
    <div class="k_container type_center">
        <div class="vg_sub_area2 sub">
            <ul class="sub_tab3" id="source">
                <li data-id="0" class="tab_list2 selected"><a href="#" data-cate="0">ALL</a></li>
                <li data-id="1" class="tab_list2 "><a href="#" data-cate="1">홍보용</a></li>
                <li data-id="2" class="tab_list2 "><a href="#" data-cate="2">반응형</a></li>
                <li data-id="3" class="tab_list2 "><a href="#" data-cate="3">기능형</a></li>
                <li data-id="4" class="tab_list2 "><a href="#" data-cate="4">쇼핑몰</a></li>
                <li data-id="5" class="tab_list2 "><a href="#" data-cate="5">모바일</a></li>
            </ul> 
        </div>        
    </div>


	<ul id="portfolio-list">
        <?php 
            $index = 1;
        ?>
        <?php for($i=0; $i<count($port_list); $i++):
                $cls = '';
                if($index%4==0){
                    $cls = 'last';
                }
        ?>
        <li class="gall_li <?php echo $cls?>">
            <?php
                if (!preg_match('#^https?://#i', $port_list[$i]['url'])) $address = 'http://www.' . $port_list[$i]['url'];
            ?>
           <a href="<?php echo $address ?>" target="_blank">
                <?php 
                    $thumb = '';
                    if( file_exists('./images/'.$port_list[$i]['img'].'.jpg') ):
                        $thumb = KI_URL.'/portfolio/images/'.$port_list[$i]['img'].'.jpg';
                    else:
                        $thumb = KI_IMG_URL.'/noData.png';
                    endif;
                ?>
                <img src="<?php echo $thumb ?>" alt="" class="img-responsive">
                <div class="info">
                    <div class="title">
                        <h5><?php echo $port_list[$i]['title'] ?></h5>

                        <?php 
                            $showCategory = array();
                            if($port_list[$i]['category_1']):
                                array_push($showCategory, "홍보용");
                            endif;
                            if($port_list[$i]['category_2']):
                                array_push($showCategory, "반응형");
                            endif;
                            if($port_list[$i]['category_3']):
                                array_push($showCategory, "기능형");
                            endif;
                            if($port_list[$i]['category_4']):
                                array_push($showCategory, "쇼핑몰");
                            endif;
                            if($port_list[$i]['category_5']):
                                array_push($showCategory, "모바일");
                            endif;
                            $showCategoryTxt = implode("/",$showCategory);
                        ?>

                        <p><?php echo $showCategoryTxt ?></p>   
                    </div>
                    <div class="device_ico">
                        <span class="ico_pc">PC</span>
                        <span class="ico_tablet">타블렛</span>
                        <span class="ico_mobile">모바일</span>
                    </div>
                    
                </div>
            </a>
        </li>
        <?php 
            $index++;
            endfor; 
        ?>
    </ul>






<?php
include_once(KI_PATH.'/_footer.php');
?>