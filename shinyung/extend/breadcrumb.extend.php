<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가



// if ($ca_id)
// {
//     $breadcrumb = $bar = "";
//     $len = strlen($ca_id) / 2;
//     for ($i=1; $i<=$len; $i++)
//     {
//         $code = substr($ca_id,0,$i*2);

//         $sql = " select ca_name from {$g5['g5_shop_category_table']} where ca_id = '$code' ";
//         $row = sql_fetch($sql);

//         $pg_here = '';
//         if ($ca_id == $code) // 현재 분류와 일치하면
//             $pg_here = 'pg_here';

//         if ($i != $len) // 현재 위치의 마지막 단계가 아니라면
//             $pg_bg = 'pg_bg';
//         else $pg_bg = '';

//         $breadcrumb .= $bar.'<a href="./list.php?ca_id='.$code.'" class="'.$pg_here.' '.$pg_bg.'">'.$row['ca_name'].'</a>';
//     }


// 	$bread_extend = '';
// 	$bread_extend .= "<div id=\"sct_breadcrumb\" class=\"noLine\">".PHP_EOL;
// 	$bread_extend .= "<a href=\"".G5_SHOP_URL."\" class=\"pg_bg\"><div class=\"pg_home\"></div><span class=\"sound_only\">HOME</span></a>".PHP_EOL;
// 	$bread_extend .= $breadcrumb.PHP_EOL;
// 	$bread_extend .= "</div>".PHP_EOL;

// } elseif($it_id) {

// 	$sql = " select a.*, b.ca_name, b.ca_use from {$g5['g5_shop_item_table']} a, {$g5['g5_shop_category_table']} b where a.it_id = '$it_id' and a.ca_id = b.ca_id ";
// 	$it = sql_fetch($sql);
// 	$ca_id = $it['ca_id'];

//  	$breadcrumb = $bar = "";
//     $len = strlen($ca_id) / 2;
//     for ($i=1; $i<=$len; $i++)
//     {
//         $code = substr($ca_id,0,$i*2);

//         $sql = " select ca_name from {$g5['g5_shop_category_table']} where ca_id = '$code' ";
//         $row = sql_fetch($sql);

//         $pg_here = '';
//         if ($ca_id == $code) // 현재 분류와 일치하면
//             $pg_here = 'pg_here';

//         if ($i != $len) // 현재 위치의 마지막 단계가 아니라면
//             $pg_bg = 'pg_bg';
//         else $pg_bg = '';

//         $breadcrumb .= $bar.'<a href="./list.php?ca_id='.$code.'" class="'.$pg_here.' '.$pg_bg.'">'.$row['ca_name'].'</a>';
//     }


// 	$bread_extend = '';
// 	$bread_extend .= "<div id=\"sct_breadcrumb\" class=\"noLine\">".PHP_EOL;
// 	$bread_extend .= "<a href=\"".G5_SHOP_URL."\" class=\"pg_bg\"><div class=\"pg_home\"></div><span class=\"sound_only\">HOME</span></a>".PHP_EOL;
// 	$bread_extend .= $breadcrumb.PHP_EOL;
// 	$bread_extend .= "</div>".PHP_EOL;


// } else {
// 	$actual_link = "$_SERVER[REQUEST_URI]";
// 	$breadcrumb = $bar = "";
		
// 	$sql = " select * from {$g5['menu_table']} where me_use = '1' and me_link = '{$actual_link}' and LENGTH(me_code) = 4 ";
// 	//echo $sql;
// 	$rs = sql_fetch($sql);

// 	if(!$rs){
// 		$sql = " select * from {$g5['menu_table']} where me_use = '1' and me_link = '{$actual_link}' and LENGTH(me_code) = 2";
// 		$rs = sql_fetch($sql);
// 	}
	
// 	//print_r2($rs);

// 	if($rs['me_code']){
// 		$len = strlen($rs['me_code']) / 2;
// 		for ($i=1; $i<=$len; $i++){
// 			$code = substr($rs['me_code'],0,$i*2);

// 			$sql = " select * from {$g5['menu_table']} where me_code = '$code' ";
// 			$row = sql_fetch($sql);

// 			$pg_here = '';
// 			if ($rs['me_code'] == $code) {// 현재 분류와 일치하면
// 				$pg_here = 'pg_here';
// 				$current_page_name = $row['me_name'];
// 			}

// 			if ($i != $len) // 현재 위치의 마지막 단계가 아니라면
// 				$pg_bg = 'pg_bg';
// 			else $pg_bg = '';

// 			if($i==1){
// 				$current_top_menu_name = $row['me_name_en'];
// 			}
// 			$breadcrumb .= $bar.'<a href="'.$row['me_link'].'" class="'.$pg_here.' '.$pg_bg.'">'.$row['me_name'].'</a>';

// 		}

// 		$bread_extend = '';
// 		$bread_extend .= "<div id=\"sct_breadcrumb\">".PHP_EOL;
// 		$bread_extend .= "<a href=\"".G5_SHOP_URL."\" class=\"pg_bg\"><div class=\"pg_home\"></div><span class=\"sound_only\">HOME</span></a>".PHP_EOL;
// 		$bread_extend .= $breadcrumb.PHP_EOL;
// 		$bread_extend .= "</div>".PHP_EOL;
// 	} 
	

// }






//echo "<!-- pre breadcrumb>".PHP_EOL;
//print_r($bread_extend);
//echo "</pre -->".PHP_EOL;

?>