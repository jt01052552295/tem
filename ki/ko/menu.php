<?php
	$menus[] = array(
		mCode => "10",
		title => "테스팅, 디버깅1111",
		url => "./ninja-code/chapter-2/listing-2.4.html"
	);

		$menus[] = array(
			mCode => "1010",
			title => "테스팅, 디버깅1010",
			url => "./ninja-code/chapter-2/listing-2.4.html"
		);

		$menus[] = array(
			mCode => "1020",
			title => "테스팅, 디버깅1020",
			url => "./ninja-code/chapter-2/listing-2.4.html"
		);

			$menus[] = array(
				mCode => "102010",
				title => "테스팅, 디버깅102010",
				url => "./ninja-code/chapter-2/listing-2.4.html"
			);

			$menus[] = array(
				mCode => "102020",
				title => "테스팅, 디버깅102020",
				url => "./ninja-code/chapter-2/listing-2.4.html"
			);

			$menus[] = array(
				mCode => "102030",
				title => "테스팅, 디버깅102030",
				url => "./ninja-code/chapter-2/listing-2.4.html"
			);

	$menus[] = array(
		mCode => "20",
		title => "테스팅, 디버깅2222",
		url => "./ninja-code/chapter-2/listing-2.4.html"
	);

		$menus[] = array(
			mCode => "2010",
			title => "테스팅, 디버깅 2010",
			url => "./ninja-code/chapter-2/listing-2.4.html"
		);

			$menus[] = array(
				mCode => "201010",
				title => "테스팅, 디버깅 201010",
				url => "./ninja-code/chapter-2/listing-2.4.html"
			);

			$menus[] = array(
				mCode => "201020",
				title => "테스팅, 디버깅 201020",
				url => "./ninja-code/chapter-2/listing-2.4.html"
			);

			$menus[] = array(
				mCode => "201030",
				title => "테스팅, 디버깅 201030",
				url => "./ninja-code/chapter-2/listing-2.4.html"
			);

	$menus[] = array(
		mCode => "30",
		title => "테스팅, 디버깅3333",
		url => "./ninja-code/chapter-2/listing-2.4.html"
	);

		$menus[] = array(
			mCode => "3010",
			title => "테스팅, 디버깅3010",
			url => "./ninja-code/chapter-2/listing-2.4.html"
		);

			$menus[] = array(
				mCode => "301010",
				title => "테스팅, 디버깅 301010",
				url => "./ninja-code/chapter-2/listing-2.4.html"
			);

			$menus[] = array(
				mCode => "301020",
				title => "테스팅, 디버깅 301020",
				url => "./ninja-code/chapter-2/listing-2.4.html"
			);

			$menus[] = array(
				mCode => "301030",
				title => "테스팅, 디버깅 301030",
				url => "./ninja-code/chapter-2/listing-2.4.html"
			);

	// echo "<pre>";
	// print_r($menus);
	// echo "</pre>";
	// 전체메뉴 출력

$nav1st = array();
$nav2nd = array();
$nav3rd = array();
$k1 = 0;
$k2 = 0;
$k3 = 0;
for($i=0; $i<count($menus); $i++):
	if(strlen($menus[$i]['mCode']) == 2) { $nav1st[$k1] = $menus[$i]; $k1++; }
	if(strlen($menus[$i]['mCode']) == 4) { $nav2nd[$k2] = $menus[$i]; $k2++; }
	if(strlen($menus[$i]['mCode']) == 6) { $nav3rd[$k3] = $menus[$i]; $k3++; }
endfor;
?>
