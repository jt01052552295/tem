<?php
include_once('./_common.php');



$siteMenu[] = array(mCode => "201011",   url => "./chartplotters_sonar/aquamap_1022xs.php",  title => "AQUAMAP 1022xs",         pid => "aquamap_1022xs",  children=>false,  me_use => true);
$siteMenu[] = array(mCode => "201012",   url => "./chartplotters_sonar/aquamap_1022.php",    title => "AQUAMAP 1022",           pid => "aquamap_1022",   children=>false,  me_use => true);
$siteMenu[] = array(mCode => "201013",   url => "./chartplotters_sonar/aquamap_1222.php",    title => "AQUAMAP 1222",           pid => "aquamap_1222",   children=>false,  me_use => true);
$siteMenu[] = array(mCode => "201014",   url => "./chartplotters_sonar/aquamap_1222xs.php",  title => "AQUAMAP 1222xs",         pid => "aquamap_1222xs",  children=>false,  me_use => true);
$siteMenu[] = array(mCode => "201015",   url => "./chartplotters_sonar/echomap_75cv.php",    title => "EchoMAP™ CHIRP 75cv",    pid => "echomap_75cv",   children=>false,  me_use => true);
$siteMenu[] = array(mCode => "201016",   url => "./chartplotters_sonar/echomap_45cv.php",    title => "EchoMAP™ CHIRP 45cv",    pid => "echomap_45cv",   children=>false,  me_use => true);
$siteMenu[] = array(mCode => "201017",   url => "./chartplotters_sonar/echomap_75sv.php",    title => "EchoMAP™ CHIRP 75sv",    pid => "echomap_75sv",   children=>false,  me_use => true);
$siteMenu[] = array(mCode => "201018",   url => "./chartplotters_sonar/echomap_55cv.php",    title => "EchoMAP™ CHIRP 55cv",    pid => "echomap_55cv",   children=>false,  me_use => true);
$siteMenu[] = array(mCode => "201019",   url => "./chartplotters_sonar/echomap_95sb.php",    title => "EchoMAP™ CHIRP 95sb",    pid => "echomap_95sb",   children=>false,  me_use => true);



@mkdir('./chartplotters_sonar', G5_DIR_PERMISSION);

echo "<pre>";
for($i=0; $i<count($siteMenu); $i++):
	
	$file = $siteMenu[$i]['url'];
	$f = @fopen($file, 'a');
	fwrite($f, "<?php\n");
	fwrite($f, "include_once('./_common.php');\n");
	fwrite($f, "include_once('./_head.php');\n");
	fwrite($f, "?>\n");

	fwrite($f, "<p style=\"text-align:center;\"><img src=\"<?php echo G5_THEME_IMG_URL?>/ready.gif\" width=\"100%\" /></p>\n");

	fwrite($f, "<?php\n");
	fwrite($f, "include_once('./_tail.php');\n");
	fwrite($f, "?>");


	
	fclose($f);
	@chmod($file, G5_FILE_PERMISSION);
endfor;
echo "</pre>";
?>