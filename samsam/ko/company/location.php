<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 
?>
<!-- * Daum 지도 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->
<div id="daumRoughmapContainer1549121193334" class="root_daum_roughmap root_daum_roughmap_landing"></div>

<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1549121193334",
		"key" : "s3iy",
		"mapWidth" : "1200",
		"mapHeight" : "500"
	}).render();
</script>


<div class="location">
	<table class="table">
		<tr>
			<th><i class="fas fa-map-marker-alt"></i>주소</th>
			<td colspan="3">경남사천시 축동면 화당산로224</td>
		</tr>
		<tr>
			<th><i class="fas fa-phone-volume"></i>대표번호</th>
			<td>055-852-3055</td>
			<th><i class="fas fa-fax"></i>팩스번호</th>
			<td>055-958-3399</td>
		</tr>
	</table>
</div>
<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>