<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');


$load_page_file = G5_PAGE_PATH.'/main.php';

if (file_exists($load_page_file)) {
    include_once($load_page_file);
} else {
    echo "ERROR: 불러올 파일이 없습니다.";
}


include_once(G5_THEME_PATH.'/tail.php');
?>