<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 기본분류
$sql = " select * from {$g5['g5_products_category_table']} ";
$sql .= " order by ca_order, ca_id ";
$result = sql_query($sql);

$cateList = array();
for ($i=0; $row=sql_fetch_array($result); $i++):
	$cateList[] = $row;
endfor;

// 지역분류
$sql = " select * from {$g5['g5_car_category_table']} ";
$sql .= " order by ca_order, ca_id ";
$result = sql_query($sql);

$cateList2 = array();
for ($i=0; $row=sql_fetch_array($result); $i++):
	$cateList2[] = $row;
endfor;

?> 