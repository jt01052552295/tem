<?php
include_once('./_common.php');




echo "<pre>";
for($i=0; $i<count($siteMenu); $i++):
	

	
	$siteMenu[$i]['url'] = str_replace("http://localhost:8080/nlpureun/ko", ".", $siteMenu[$i]['url']);
	//echo $siteMenu[$i]['url']."<Br>";
	
	// 폴더 만들기
	/*
	if(strlen($siteMenu[$i]['mCode'])==2 && $siteMenu[$i]['mCode'] != '50' && $siteMenu[$i]['mCode'] != '70' && $siteMenu[$i]['mCode'] != '80'):

		echo $siteMenu[$i]['subTitle']."<Br>";
		
		@rmdir('./'.$siteMenu[$i]['subTitle']);
		@mkdir('./'.$siteMenu[$i]['subTitle'], G5_DIR_PERMISSION);
		$file ='./'.$siteMenu[$i]['subTitle'].'/_common.php';
		$f = @fopen($file, 'a+');
		fwrite($f, "<?php\n");
		fwrite($f, "include_once('../../common.php');\n");
		fwrite($f, "?>");
		fclose($f);
		@chmod($file, G5_FILE_PERMISSION);
		
		
	endif;
	*/
	
	
	


	// 파일만들기
	
	if(strlen($siteMenu[$i]['mCode'])==4 && substr($siteMenu[$i]['mCode'],0,2) != '50'):
		$file = $siteMenu[$i]['url'];
		echo $file."<Br>";
		
		@unlink($file);

		$f = @fopen($file, 'w');
		fwrite($f, "<?php\n");
		fwrite($f, "define('_CONTENTS_', true);\n");		
		fwrite($f, "include_once('./_common.php');\n");
		fwrite($f, "include_once(G5_LANG_PATH.'/_header.php'); \n");
		fwrite($f, "include_once(G5_LANG_PATH.'/_top.php'); \n");
		fwrite($f, "?>\n");
		fwrite($f, "<div class=\"text-center\"><img src=\"<?php echo G5_LANG_IMG_URL?>/ready.gif\" class=\"mx-auto d-block\" /></div>\n");
		fwrite($f, "<?php\n");
		fwrite($f, "include_once(G5_LANG_PATH.'/_footer.php');\n");
		fwrite($f, "?>");
		fclose($f);
		@chmod($file, G5_FILE_PERMISSION);

		print_r($siteMenu[$i]);
		/**/
	endif;
	/**/
	
	


endfor;
echo "</pre>";
?>