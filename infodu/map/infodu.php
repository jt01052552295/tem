<?php
header('Content-Type: text/html; charset=UTF-8');

$client_id = "ziVBsXOUwEi_xSpoNERf";
$client_secret = "Ltkt1J6KwU";
$encText = urlencode("부산광역시 동래구 중앙대로 1291-1 상주빌딩");
$url = "https://openapi.naver.com/v1/map/geocode?query=".$encText; // json


$is_post = false;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, $is_post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = array();
$headers[] = "X-Naver-Client-Id: ".$client_id;
$headers[] = "X-Naver-Client-Secret: ".$client_secret;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec ($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close ($ch);

//echo "status_code:".$status_code."<br>";
//if($status_code == 200) {
	//echo $response;
//} else {
	//echo "Error 내용:".$response;
//}

?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>한국산업정보사 오시는길</title>
<style>
html, body {padding:0px; margin:0px;     overflow: hidden;}
</style>
<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=ziVBsXOUwEi_xSpoNERf&submodules=geocoder"></script>
</head>
<body>

<div style="width:100%;height:430px;" id="map"></div>



<script type="text/javascript">
	var HOME_PATH = window.HOME_PATH || '.';
	var mapX = 35.2023618;
	var mapY = 129.0776679;
	var mapTitle = "";
	var map = new naver.maps.Map('map', {
		center: new naver.maps.LatLng(mapX, mapY), 
		zoom:11, 
		minZoom: 1, 
		zoomControl: false, 
		zoomControlOptions: { 
			position: naver.maps.Position.TOP_RIGHT
		}
	});

	var marker = new naver.maps.Marker({
		position: new naver.maps.LatLng(mapX, mapY),
		map: map,
		icon: {
			url: HOME_PATH +'/img/map_marker_infodu.png',
			size: new naver.maps.Size(64, 76),
			origin: new naver.maps.Point(0, 0),
			anchor: new naver.maps.Point(32, 70)
		}
	});



	var contentString = [
		'<div class="iw_inner">',
		'   <h3>'+mapTitle+'</h3>',
		'</div>'
	].join('');

	var infowindow = new naver.maps.InfoWindow({
		content: contentString
	});
	//infowindow.open(map, marker);
</script>


</body>
</html>
