<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 2;

if ($is_checkbox) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>


<!-- 게시판 목록 시작 -->
<div id="bo_list">

    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']) ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>

    <div class="bo_fx">

        <?php if ($rss_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01">RSS</a></li><?php } ?>
            <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin">관리자</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>

    <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">
    
    
    
    
    
<div style="padding: 8px;">
<?php for ($i=0; $i<count($list); $i++) {?>
	<!-- ITEM -->
	<div class="board_item">
	<?php if ($is_checkbox) { ?>
	<label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
	<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" style="position: absolute; z-index: 99;">
	<?php } ?>
	        
	<?php
		$thumb =  get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], 150, 150);
	?>
	<a href="<?php echo $list[$i]['href'] ?>" >
	<div style="padding: 0px; text-align: center; width: 200px; float: left;" >
		<?if($thumb['src']){?>
		<img alt="IMG" src="<?=$thumb['src']?>" style="vertical-align : middle; border-radius: 3px; min-width: 150px; min-height: 150px;">
		<?}else{?>
		<div class="no_image">no image</div>
		<?}?>
		
	</div>
	<div  style="padding:  15px; font-size: 13px; width: 500px; float: left;" >
		<div class="board_item_subject">
			<?php echo $list[$i]['subject'] ?>
			<!-- 
			<div class="col-md-1 board_item_info_btn" style="float: none;">
			<?php 
				/*if (isset($list[$i]['icon_new'])) echo $list[$i]['icon_new'];
				if (isset($list[$i]['icon_hot'])) echo $list[$i]['icon_hot'];
				if (isset($list[$i]['icon_file'])) echo $list[$i]['icon_file'];
				if (isset($list[$i]['icon_link'])) echo $list[$i]['icon_link'];
				if (isset($list[$i]['icon_secret'])) echo $list[$i]['icon_secret'];*/
			?>
			</div> -->
		</div>
		<div class="board_item_info">
			<div class="board_item_info_btn" style="height: 30px;  width: 200px; ">
			
				<?
				echo $list[$i]['icon_reply'];
				if ($is_category && $list[$i]['ca_name']) {?>
				<a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
				<?php }?>
			
				<!-- 작성자 : <div style="display: inline-block; font-weight: bold; color: #555;"><?php //echo mb_strimwidth($list[$i][wr_name],'0','20','..','UTF-8') ?> </div> -->
			</div>
		</div>	
		<div class="board_item_info">
			<!-- 
			<div class="board_item_info_btn"><span class="sound_only">댓글</span>
				<img alt="댓글" src="<?=$board_skin_url?>/img/b_comment.png">
				<?php if($list[$i]['comment_cnt']) echo $list[$i]['comment_cnt']; else echo "0"; ?>
				<span class="sound_only">개</span>
			</div>
			<div class="board_item_info_btn" ><span class="sound_only">조회수</span>
				<img alt="조회수" src="<?=$board_skin_url?>/img/b_hit.png"><?php echo $list[$i]['wr_hit']; ?>
				<span class="sound_only">개</span>
			</div>
			<div class="board_item_info_btn" >
				<img alt="시간" src="<?=$board_skin_url?>/img/b_date.png">
				<?php echo $list[$i]['datetime'] ?>
			</div>
			 -->
		</div>
		<div class="board_item_content"><?=strip_tags($list[$i]['wr_content'])?></div>
	</div>
	</a>
	</div>
	<?}?>
    
</div>
    
     
    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <ul class="btn_bo_adm">
            <?php if ($list_href) { ?>
            <li><a href="<?php echo $list_href ?>" class="btn_b01"> 목록</a></li>
            <?php } ?>
            <?php if ($is_checkbox) { ?>
            <li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"></li>
            <li><input type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"></li>
            <li><input type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"></li>
            <?php } ?>
        </ul>

        <ul class="btn_bo_user">
            <li><?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a><?php } ?></li>
        </ul>
    </div>
    <?php } ?>
    </form>
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<!-- 페이지 -->
<?php echo $write_pages; ?>

<!-- 
<fieldset id="bo_sch">
    <legend>게시물 검색</legend>

    <form name="fsearch" method="get">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sop" value="and">
    <label for="sfl" class="sound_only">검색대상</label>
    <select name="sfl" id="sfl">
        <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
        <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
        <option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
        <!-- <option value="mb_id,1"<?php echo get_selected($sfl, 'mb_id,1'); ?>>회원아이디</option>
        <option value="mb_id,0"<?php echo get_selected($sfl, 'mb_id,0'); ?>>회원아이디(코)</option>
        <option value="wr_name,1"<?php echo get_selected($sfl, 'wr_name,1'); ?>>글쓴이</option>
        <option value="wr_name,0"<?php echo get_selected($sfl, 'wr_name,0'); ?>>글쓴이(코)</option> 
    </select>
    <input name="stx" value="<?php echo stripslashes($stx) ?>" placeholder="검색어(필수)" required id="stx" class="required frm_input" size="15" maxlength="20">
    <input type="submit" value="검색" class="btn_submit">
    </form>
</fieldset>
 -->
<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = "./board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == 'copy')
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- 게시판 목록 끝 -->
