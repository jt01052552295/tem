<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_MOBILE_PATH.'/_header.php'); 
include_once(G5_LANG_MOBILE_PATH.'/_top.php'); 
?>


<div class="company"><img src="images/c01.jpg"  alt=""></div>

<div class="company"><img src="images/c02.jpg"  alt=""> <p class="c_txt font_daehan">전통방식으로 한옥을짓고 현대인이 편리하게 생활할수있는 현대의 한옥건축을 짓습니다.</p></div>
<div class="company"><img src="images/c03.jpg"  alt=""> <p class="c_txt font_daehan">주요 부재는 3년이상 건조한 육송으로 작업합니다.</p></div>
<div class="company"><img src="images/c04.jpg"  alt=""> <p class="c_txt font_daehan">전통방식으로 한옥을짓고 현대인이 편리하게 생활할수있는 현대의 한옥건축을 짓습니다.</p></div>





<h3 class="c_title">오시는 길</h3>

<!-- * 카카오맵 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->
<div id="daumRoughmapContainer1551240439621" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%"></div>

<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1551240439621",
		"key" : "seh6",
		"mapHeight" : "200"
	}).render();
</script>



<div class="location">
	<div class="logo"><?php echo $infodu['lang']['company']['company']['txt1']?></div>
	<div>
		<p><?php echo $infodu['lang']['company']['company']['txt2']?></p>
		<p><?php echo $infodu['lang']['company']['company']['txt3']?> </p>

	</div>
</div>


<?php
include_once(G5_LANG_MOBILE_PATH.'/_footer.php');
?>