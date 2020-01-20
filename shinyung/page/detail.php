<?php
include_once('./_common.php');


// if (G5_IS_MOBILE) {
//     include_once(G5_MOBILE_PATH.'/content.php');
//     return;
// }


include_once(G5_LIB_PATH.'/thumbnail.lib.php'); 

$sql = " select * from {$g5['g5_products_item_table']} where it_id = '$it_id' ";
$it = sql_fetch($sql);

if(!$it) alert('관련정보가 존재하지 않습니다.');   


$g5['title'] = '상세보기';
include_once('./_head.php');
?>

<article id="v_article">
	<header>
        <h2 id="v_title"><span class="v_tit"><?php echo $it['it_name']?></span></h2>
        <div class="profile_info">
        	<div class="opt">
        		<small>
					<?php if($it['it_skin']=='1'):?><span class="ic n1"><?php echo $infodu['lang']['common']['side01']?></span><?php endif;?>
					<?php if($it['it_direct']=='1'):?><span class="ic n2"><?php echo $infodu['lang']['common']['side02']?></span><?php endif;?>
				</small>
        	</div>
        	<strong class="if_date"><span class="sound_only">작성일</span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $it['it_time']?></strong>
    	</div>
    </header>


    <div class="thumb">
		<?php echo get_item_image($it['it_id'], 800, 600); ?>
	</div>
    <div class="con">
    	<?php echo get_view_thumbnail($it['it_explan']); ?>
    </div>


    <div class="v_btn">
            
        <a href="<?php echo G5_PAGE_URL?>/list.php" class="btn_b01 btn" title="List"><i class="fa fa-list" aria-hidden="true"></i><span class="sound_only">List</span></a>

    </div>


</article>

<?php
include_once('./_tail.php');
?>