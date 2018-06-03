<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


define('G5_TIME_YMD_NUMBER', str_replace("-", "", G5_TIME_YMD));
define('G5_JS_VER',  G5_TIME_YMD_NUMBER);
define('G5_CSS_VER', G5_TIME_YMD_NUMBER);
?>