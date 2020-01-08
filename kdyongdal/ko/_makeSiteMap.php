<?php
include_once('./_common.php');

echo "<pre>";
echo G5_URL."<Br>";
echo G5_LANG_URL."<Br>";
$file = "./sitemap_test.xml";


for($i=0; $i<count($nav1st); $i++):

	echo "1-".$nav1st[$i]['url']."<br>";
	for($j=0; $j<count($nav2nd); $j++):
        if(substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']):
        	echo "2-".$nav2nd[$j]['url']."<Br>";
            for($k=0; $k<count($nav3rd); $k++):
                if(substr($nav3rd[$k]['mCode'],0,4) == $nav2nd[$j]['mCode'] ):
                	echo "3-".$nav3rd[$k]['url']."<Br>";
                endif;
            endfor;
        endif;
    endfor;

endfor;




/*
$f = @fopen($file, 'w');
fwrite($f, "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n");
fwrite($f, "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">\n");

fwrite($f, "<url><loc>".G5_URL."</loc><changefreq>daily</changefreq><priority>1.00</priority></url>\n");
fwrite($f, "<url><loc>".G5_LANG_URL."</loc><changefreq>daily</changefreq><priority>0.95</priority></url>\n");


for($i=0; $i<count($nav1st); $i++):

	fwrite($f, "<url><loc>".$nav1st[$i]['url']."</loc><changefreq>daily</changefreq><priority>0.85</priority></url>\n");
	for($j=0; $j<count($nav2nd); $j++):
        if(substr($nav2nd[$j]['mCode'],0,2) == $nav1st[$i]['mCode']):
        	fwrite($f, "<url><loc>".$nav2nd[$j]['url']."</loc><changefreq>daily</changefreq><priority>0.85</priority></url>\n");
            for($k=0; $k<count($nav3rd); $k++):
                if(substr($nav3rd[$k]['mCode'],0,4) == $nav2nd[$j]['mCode'] ):
                	fwrite($f, "<url><loc>".$nav3rd[$k]['url']."</loc><changefreq>daily</changefreq><priority>0.85</priority></url>\n");
                endif;
            endfor;
        endif;
    endfor;

endfor;
fwrite($f, "</urlset>");
*/


echo "</pre>";


?>