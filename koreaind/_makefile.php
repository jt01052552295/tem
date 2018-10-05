<?php
include_once('./_config.php');


// 퍼미션
define('G5_DIR_PERMISSION',  0755); // 디렉토리 생성시 퍼미션
define('G5_FILE_PERMISSION', 0644); // 파일 생성시 퍼미션





echo "<pre>";
for($i=0; $i<count($siteMenu); $i++):
	


	$siteMenu[$i]['url'] = str_replace("http://localhost:8080/koreaind", ".", $siteMenu[$i]['url']);
	
	// 폴더 만들기
	/*
	if(strlen($siteMenu[$i]['mCode'])==2):
		
		@mkdir('./'.$siteMenu[$i]['pid'], G5_DIR_PERMISSION);

		$file ='./'.$siteMenu[$i]['pid'].'/_config.php';
		$f = @fopen($file, 'a+');
		fwrite($f, "<?php\n");
		fwrite($f, "include_once('../config.php');\n");
		fwrite($f, "?>");
		fclose($f);
		@chmod($file, G5_FILE_PERMISSION);
	endif;
	*/


	// 파일만들기
	
	if(strlen($siteMenu[$i]['mCode'])==4):
		$file = $siteMenu[$i]['url'];
		$f = @fopen($file, 'w');
		fwrite($f, "<?php\n");
		fwrite($f, "include_once('./_config.php');\n");
		fwrite($f, "include_once(KI_PATH.'/_header.php'); \n");
		fwrite($f, "include_once(KI_PATH.'/_top.php'); \n");
		fwrite($f, "?>\n");
		fwrite($f, "<div class=\"text-center\"><img src=\"<?php echo KI_IMG_URL?>/ready.gif\" class=\"mx-auto d-block\" /></div>\n");
		fwrite($f, "<?php\n");
		fwrite($f, "include_once(KI_PATH.'/_footer.php');\n");
		fwrite($f, "?>");
		fclose($f);
		@chmod($file, G5_FILE_PERMISSION);

		print_r($siteMenu[$i]);
	endif;


endfor;
echo "</pre>";
?>