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

	


	if(mkdir("./test", 0777, true)){
		chmod('./test', 0777);
		$fh = fopen($menus[$i]['url'], "w") or die("can't open file");
		fwrite($fh, "New Stuff 1\n"); 
		fwrite($fh, "New Stuff 2\n"); 
		fclose($fh);
		print_r($menus[$i]);
	} else {
		die('Failed to create folders...');
	}
	




	
endfor;
echo "</pre>";

?>