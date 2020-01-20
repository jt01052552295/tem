<?php
define('_CONTENTS_', true);
include_once('./_common.php');


if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/content.php');
    return;
}


//  서브페이지 CSS 경로 : /page/asset/contents.css


// 페이지 제목 설정 (안해도됨)
$g5['title'] = '';
include_once('./_head.php');
?>

<div class="text-center"><img src="<?php echo G5_THEME_IMG_URL?>/ready.gif" /></div>


<?php
include_once('./_tail.php');
?>