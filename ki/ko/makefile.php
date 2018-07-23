<?php
define('INDEX_ROOT', true); 
//include_once('./_config.php');

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


echo "<pre>";
for($i=0; $i<count($menus); $i++):

	print_r($menus[$i]);

	$fh = fopen($menus[$i]['url'], "a+") or die("can't open file");
	fwrite($fh, "New Stuff 1\n"); 
	fwrite($fh, "New Stuff 2\n"); 
	fclose($fh);




	
endfor;
echo "</pre>";

?>