<?
if($f && $fn) {
	$dir = "/home/siteC/_maru";	// 파일이 저장되어 있는 폴더 설정
	$save_name = $dir.$f;					// 서버에 실제 저장되어 있는 파일명
	$real_name = $fn;						// 다운로드시 저장될 파일명
	$real_name = iconv("UTF-8","EUC-KR",$real_name) ? iconv("UTF-8","EUC-KR",$real_name) : $real_name;
	

	if(!file_exists($save_name))			// 만약 파일이 없을 경우 에러 출력
	{
		goBack($save_name);
		exit;
	}
	else									// 파일이 있으면 다운로드
	{
		if(eregi("(MSIE 5.0|MSIE 5.1|MSIE 5.5|MSIE 6.0)", $_SERVER["HTTP_USER_AGENT"]) && !eregi("(Opera|Netscape)", $_SERVER["HTTP_USER_AGENT"])) {
			Header("Content-type: application/octet-stream");
			Header("Content-Length: ".filesize($save_name));
			Header("Content-Disposition: attachment; filename=".$real_name);
			Header("Content-Transfer-Encoding: binary");
			Header("Pragma: no-cache");
			Header("Expires: 0");
		} else {
			Header("Content-type: file/unknown");
			Header("Content-Length: ".filesize($save_name));
			Header("Content-Disposition: attachment; filename=".$real_name);
			Header("Content-Description: PHP3 Generated Data");
			Header("Pragma: no-cache");
			Header("Expires: 0");
		}

		$fp = fopen($save_name, "rb");
		if(!fpassthru($fp))
		{
			//echo "ok";
			fclose($fp);  
		}
		else
		{ 
			//echo "err";
		}

	}
}else
echo "err";


function goBack($msg='', $url='') {
	echo "<script>";
	if($msg) echo 'alert("'.$msg.'");';
	if($url) echo 'location.replace("'.$url.'");';
	else echo 'history.go(-1);';
	echo "</script>";
}
?>