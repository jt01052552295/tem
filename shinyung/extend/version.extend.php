<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$ver_time = date("Y-m-dH:i:s");
$ver_time = preg_replace("/[^0-9]*/s", "", $ver_time);

define('G5_JS_VER',  $ver_time);
define('G5_CSS_VER', $ver_time);
?>