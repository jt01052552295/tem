<?php
include_once('./_common.php');


// if (G5_IS_MOBILE) {
//     include_once(G5_MOBILE_PATH.'/content.php');
//     return;
// }




$where = " and ";
$sql_search = "";

if ($q != "") {
    $sql_search .= " $where (it_name like '%$q%' or it_num = '$q') ";

    if ($save_stx != $stx)
        $page = 1;
}

if ($stx != "") {
    if ($sfl != "") {
        $sql_search .= " $where $sfl like '%$stx%' ";
        $where = " and ";
    }
    if ($save_stx != $stx)
        $page = 1;
}


if($s_cate1){
	$ca_id = $s_cate1;
}

if($s_cate2){
	$ca_id2 = $s_cate2;
}

if($ca_id){
	$sql_search .= " $where (ca_id like '$ca_id%') ";
}
if($ca_id2){
	$sql_search .= " $where (ca_id2 like '$ca_id2%') ";
}



$sql_common = " from {$g5['g5_products_item_table']}
               where (1=1";
$sql_common .= ") ";
$sql_common .= $sql_search;


// 테이블의 전체 레코드수만 얻음
$sql = " select count(*) as cnt " . $sql_common;
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = 16;
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) { $page = 1; } // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함

if (!$sst) {
    $sst  = "it_id";
    $sod = "desc";
}
$sql_order = "order by $sst $sod";


$sql  = " select *
           $sql_common
           $sql_order 
		   limit $from_record, $rows ";

// echo $sql;

$result = sql_query($sql);

$proList = array();
for ($i=0; $row=sql_fetch_array($result); $i++):
	$proList[] = $row;
endfor;



$g5['title'] = '목록';
include_once('./_head.php');


// echo "<pre sqlsql>";
// print_r($proList);
// echo "</pre>";
?>

<ul class="article_list">  
	<?php foreach($proList as $key=>$value):?>

			<li class="pro">
				<a href="<?php echo G5_PAGE_URL?>/detail.php?it_id=<?php echo $value['it_id']; ?>">
					<div class="thumb">

						<?php echo get_item_image($value['it_id'], 280, 200); ?>
						
					</div>
					<div class="desc">
						<h5>
							<small>
								<?php if($value['it_skin']=='1'):?><span class="ic n1"><?php echo $infodu['lang']['common']['side01']?></span><?php endif;?>
								<?php if($value['it_direct']=='1'):?><span class="ic n2"><?php echo $infodu['lang']['common']['side02']?></span><?php endif;?>
							</small>
							<?php echo $value['it_name']?>
						</h5>
						<p><?php echo cut_str(strip_tags($value['it_explan']), 100, '...'); ?></p>
						<span class="date"><?php echo cut_str($value['it_time'],10, '')?></span>							
					</div>
				</a>
			</li>


	<?php endforeach;?> 
</ul>

<?php if(count($proList)==0):?>
	<div class="no_data">
	  <p>등록된 글이없습니다.</p>
	</div>
	
<?php endif;?>



<?php echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, "{$_SERVER['SCRIPT_NAME']}?$qstr&amp;page="); ?>



<?php
include_once('./_tail.php');
?>