<?php
include_once('./_common.php');
$menus[] = array(
	mCode => "10",
	title => "테스팅, 디버깅1111",
	url => "./test/example1.html"
);

$menus[] = array(
	mCode => "1010",
	title => "테스팅, 디버깅1010",
	url => "./test/example2.html"
);

$menus[] = array(
	mCode => "1020",
	title => "테스팅, 디버깅1020",
	url => "./test/example3.html"
);
for($i=0; $i<count($menus); $i++):


	@mkdir("./test", 0777);
    @chmod("./test", 0777);


	$f = @fopen($menus[$i]['url'], "a") or die("failed...");
	fwrite($f, "<?php\n");
	fwrite($f, "if (!defined('_GNUBOARD_')) exit;\n");
	fwrite($f, "?>");
	fclose($f);
    @chmod($menus[$i]['url'], 0777);

	
endfor;



?>