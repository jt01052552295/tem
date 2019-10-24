<?php
include_once('./_common.php');
?>
<!doctype html>
<html lang="ko">
<meta charset = "utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>HTML 특수문자표</title>
</head>
<body>

<?php

$arr_list = array();
$arr_list[] = array(td01=>"-",      td02=>"&#00;-&#08;",       td03=>"-",               td04=>"사용하지 않음");                            
$arr_list[] = array(td01=>"space",  td02=>"&#09;",             td03=>"-",               td04=>"수평탭");                                
$arr_list[] = array(td01=>"space",  td02=>"&#10;",             td03=>"-",               td04=>"줄 삽입");                                
$arr_list[] = array(td01=>"-",      td02=>"&#11;-&#31;",       td03=>"-",               td04=>"사용하지 않음");                                  
$arr_list[] = array(td01=>"space",  td02=>"&#32;",             td03=>"-",               td04=>"여백");                                
$arr_list[] = array(td01=>"!",      td02=>"&#33;",             td03=>"-",               td04=>"느낌표");                            
$arr_list[] = array(td01=>"\"",     td02=>"&#34;",             td03=>"&quot;",          td04=>"따옴표");                                 
$arr_list[] = array(td01=>"#",      td02=>"&#35;",             td03=>"-",               td04=>"숫자기호");                            
$arr_list[] = array(td01=>"$",      td02=>"&#36;",             td03=>"-",               td04=>"달러");                            
$arr_list[] = array(td01=>"%",      td02=>"&#37;",             td03=>"-",               td04=>"백분율 기호");                            
$arr_list[] = array(td01=>"&",      td02=>"&#38;",             td03=>"&amp;",           td04=>"Ampersand");                                
$arr_list[] = array(td01=>"'",      td02=>"&#39;",             td03=>"-",               td04=>"작은 따옴표");                            
$arr_list[] = array(td01=>"(",      td02=>"&#40;",             td03=>"-",               td04=>"왼쪽 괄호");                            
$arr_list[] = array(td01=>")",      td02=>"&#41;",             td03=>"-",               td04=>"오른쪽 괄호");                            
$arr_list[] = array(td01=>"*",      td02=>"&#42;",             td03=>"-",               td04=>"아스트릭");                            
$arr_list[] = array(td01=>"+",      td02=>"&#43;",             td03=>"-",               td04=>"더하기 기호");                            
$arr_list[] = array(td01=>",",      td02=>"&#44;",             td03=>"-",               td04=>"쉼표");                            
$arr_list[] = array(td01=>"-",      td02=>"&#45;",             td03=>"-",               td04=>"Hyphen");                            
$arr_list[] = array(td01=>".",      td02=>"&#46;",             td03=>"-",               td04=>"마침표");                            
$arr_list[] = array(td01=>"/",      td02=>"&#47;",             td03=>"-",               td04=>"Solidus (slash)");                            
$arr_list[] = array(td01=>"0 - 9",  td02=>"&#48;-&#57;",       td03=>"-",               td04=>"0부터 9까지");                                      
$arr_list[] = array(td01=>":",      td02=>"&#58;",             td03=>"-",               td04=>"콜론");                            
$arr_list[] = array(td01=>";",      td02=>"&#59;",             td03=>"-",               td04=>"세미콜론");                            
$arr_list[] = array(td01=>"<",      td02=>"&#60;",             td03=>"&lt;",            td04=>"보다 작은");                               
$arr_list[] = array(td01=>"=",      td02=>"&#61;",             td03=>"-",               td04=>"등호");                            
$arr_list[] = array(td01=>">",      td02=>"&#62;",             td03=>"&gt;",            td04=>"보다 큰");                               
$arr_list[] = array(td01=>"?",      td02=>"&#63;",             td03=>"-",               td04=>"물음표");                            
$arr_list[] = array(td01=>"@",      td02=>"&#64;",             td03=>"-",               td04=>"Commercial at");                            
$arr_list[] = array(td01=>"A - Z",  td02=>"&#65;-&#90;",       td03=>"-",               td04=>"A부터 Z까지");                                      
$arr_list[] = array(td01=>"[",      td02=>"&#91;",             td03=>"-",               td04=>"왼쪽 대괄호");                            
$arr_list[] = array(td01=>"\\",     td02=>"&#92;",             td03=>"-",               td04=>"역슬래쉬");                            
$arr_list[] = array(td01=>"]",      td02=>"&#93;",             td03=>"-",               td04=>"오른쪽 대괄호");                            
$arr_list[] = array(td01=>"^",      td02=>"&#94;",             td03=>"-",               td04=>"탈자부호");                            
$arr_list[] = array(td01=>"_",      td02=>"&#95;",             td03=>"-",               td04=>"수평선");                            
$arr_list[] = array(td01=>"`",      td02=>"&#96;",             td03=>"-",               td04=>"Acute accent");                            
$arr_list[] = array(td01=>"a - z",  td02=>"&#97;-&#122;",      td03=>"-",               td04=>"a부터 z까지");                                      
$arr_list[] = array(td01=>"{",      td02=>"&#123;",            td03=>"-",               td04=>"왼쪽 중괄호");                            
$arr_list[] = array(td01=>"|",      td02=>"&#124;",            td03=>"-",               td04=>"수직선");                            
$arr_list[] = array(td01=>"}",      td02=>"&#125;",            td03=>"-",               td04=>"오른쪽 중괄호");                            
$arr_list[] = array(td01=>"~",      td02=>"&#126;",            td03=>"-",               td04=>"꼬리표");                            
$arr_list[] = array(td01=>"-",      td02=>"&#127;-&#159;",     td03=>"-",               td04=>"사용하지 않음");                                    
$arr_list[] = array(td01=>"",       td02=>"&#160;",            td03=>"&nbsp;",          td04=>"Non-breaking space");                               
$arr_list[] = array(td01=>"¡",      td02=>"&#161;",            td03=>"&iexcl;",         td04=>"거꾸로된 느낌표");                                  
$arr_list[] = array(td01=>"￠",     td02=>"&#162;",            td03=>"&cent;",          td04=>"센트 기호");                                   
$arr_list[] = array(td01=>"￡",     td02=>"&#163;",            td03=>"&pound;",         td04=>"파운드");                                    
$arr_list[] = array(td01=>"¤",      td02=>"&#164;",            td03=>"&curren;",        td04=>"현재 환율");                                   
$arr_list[] = array(td01=>"￥",     td02=>"&#165;",            td03=>"&yen;",           td04=>"엔");                                  
$arr_list[] = array(td01=>"|",      td02=>"&#166;",            td03=>"&brvbar;",        td04=>"끊어진 수직선");                                   
$arr_list[] = array(td01=>"§",      td02=>"&#167;",            td03=>"&sect;",          td04=>"섹션 기호");                                 
$arr_list[] = array(td01=>"¨",      td02=>"&#168;",            td03=>"&uml;",           td04=>"움라우트");                                
$arr_list[] = array(td01=>"ⓒ",     td02=>"&#169;",            td03=>"&copy;",          td04=>"저작권");                                   
$arr_list[] = array(td01=>"ª",      td02=>"&#170;",            td03=>"&ordf;",          td04=>"Feminine ordinal");                                 
$arr_list[] = array(td01=>"≪",      td02=>"&#171;",            td03=>"&laquo;",         td04=>"왼쪽 꺾인 괄호");                                  
$arr_list[] = array(td01=>"￢",     td02=>"&#172;",            td03=>"&not;",           td04=>"부정");                                  
// ­$arr_list[] = array(td01=>"",   	td02=>"&#173;",            td03=>"&shy;",           td04=>"Soft hyphen");                                
$arr_list[] = array(td01=>"?",      td02=>"&#174;",            td03=>"&reg;",           td04=>"등록상표");                                
$arr_list[] = array(td01=>"&hibar;",td02=>"&#175;",            td03=>"&macr;",          td04=>"Macron accent");                                       
$arr_list[] = array(td01=>"°",      td02=>"&#176;",            td03=>"&deg;",           td04=>"Degree sign");                                
$arr_list[] = array(td01=>"±",      td02=>"&#177;",            td03=>"&plusmn;",        td04=>"Plus or minus");                                   
$arr_list[] = array(td01=>"²",      td02=>"&#178;",            td03=>"&sup2;",          td04=>"Superscript two");                                 
$arr_list[] = array(td01=>"³",      td02=>"&#179;",            td03=>"&sup3;",          td04=>"Superscript three");                                 
$arr_list[] = array(td01=>"´",      td02=>"&#180;",            td03=>"&acute;",         td04=>"Acute accent");                                  
$arr_list[] = array(td01=>"μ",      td02=>"&#181;",            td03=>"&micro;",         td04=>"Micro sign (Mu)");                                  
$arr_list[] = array(td01=>"¶",      td02=>"&#182;",            td03=>"&para;",          td04=>"문단기호");                                 
$arr_list[] = array(td01=>"·",      td02=>"&#183;",            td03=>"&middot;",        td04=>"Middle dot");                                   
$arr_list[] = array(td01=>"¸",      td02=>"&#184;",            td03=>"&cedil;",         td04=>"Cedilla");                                  
$arr_list[] = array(td01=>"¹",      td02=>"&#185;",            td03=>"&sup1;",          td04=>"Superscript one");                                 
$arr_list[] = array(td01=>"º",      td02=>"&#186;",            td03=>"&ordm;",          td04=>"Masculine ordinal");                                 
$arr_list[] = array(td01=>"≫",      td02=>"&#187;",            td03=>"&raquo;",         td04=>"오른쪽 꺾인 괄호");                                  
$arr_list[] = array(td01=>"¼",      td02=>"&#188;",            td03=>"&frac14;",        td04=>"4분의 1");                                   
$arr_list[] = array(td01=>"½",      td02=>"&#189;",            td03=>"&frac12;",        td04=>"2분의 1");                                   
$arr_list[] = array(td01=>"¾",      td02=>"&#190;",            td03=>"&frac34;",        td04=>"4분의 3");                                   
$arr_list[] = array(td01=>"¿",      td02=>"&#191;",            td03=>"&iquest;",        td04=>"거꾸로된 물음표");                                   
$arr_list[] = array(td01=>"A",      td02=>"&#192;",            td03=>"&Agrave;",        td04=>"Capital A, grave accent");                                   
$arr_list[] = array(td01=>"A",      td02=>"&#193;",            td03=>"&Aacute;",        td04=>"Capital A, acute accent");                                   
$arr_list[] = array(td01=>"A",      td02=>"&#194;",            td03=>"&Acirc;",         td04=>"Capital A, circumflex accent");                                  
$arr_list[] = array(td01=>"A",      td02=>"&#195;",            td03=>"&Atilde;",        td04=>"Capital A, tilde");                                   
$arr_list[] = array(td01=>"A",      td02=>"&#196;",            td03=>"&Auml;",          td04=>"Capital A, dieresis or umlaut mark");                                 
$arr_list[] = array(td01=>"A",      td02=>"&#197;",            td03=>"&Aring;",         td04=>"Capital A, ring (Angstrom)");                                  
$arr_list[] = array(td01=>"Æ",      td02=>"&#198;",            td03=>"&AElig;",         td04=>"Capital AE diphthong (ligature)");                                  
$arr_list[] = array(td01=>"C",      td02=>"&#199;",            td03=>"&Ccedil;",        td04=>"Capital C, cedilla");                                   
$arr_list[] = array(td01=>"E",      td02=>"&#200;",            td03=>"&Egrave;",        td04=>"Capital E, grave accent");                                   
$arr_list[] = array(td01=>"E",      td02=>"&#201;",            td03=>"&Eacute;",        td04=>"Capital E, acute accent");                                   
$arr_list[] = array(td01=>"E",      td02=>"&#202;",            td03=>"&Ecirc;",         td04=>"Capital E, circumflex accent");                                  
$arr_list[] = array(td01=>"E",      td02=>"&#203;",            td03=>"&Euml;",          td04=>"Capital E, dieresis or umlaut mark");                                 
$arr_list[] = array(td01=>"I",      td02=>"&#204;",            td03=>"&Igrave;",        td04=>"Capital I, grave accent");                                   
$arr_list[] = array(td01=>"I",      td02=>"&#205;",            td03=>"&Iacute;",        td04=>"Capital I, acute accent");                                   
$arr_list[] = array(td01=>"I",      td02=>"&#206;",            td03=>"&Icirc;",         td04=>"Capital I, circumflex accent");                                  
$arr_list[] = array(td01=>"I",      td02=>"&#207;",            td03=>"&Iuml;",          td04=>"Capital I, dieresis or umlaut mark");                                 
$arr_list[] = array(td01=>"Ð",      td02=>"&#208;",            td03=>"&ETH;",           td04=>"Capital Eth, Icelandic");                                
$arr_list[] = array(td01=>"N",      td02=>"&#209;",            td03=>"&Ntilde;",        td04=>"Capital N, tilde");                                   
$arr_list[] = array(td01=>"O",      td02=>"&#210;",            td03=>"&Ograve;",        td04=>"Capital O, grave accent");                                   
$arr_list[] = array(td01=>"O",      td02=>"&#211;",            td03=>"&Oacute;",        td04=>"Capital O, acute accent");                                   
$arr_list[] = array(td01=>"O",      td02=>"&#212;",            td03=>"&Ocirc;",         td04=>"Capital O, circumflex accent");                                  
$arr_list[] = array(td01=>"O",      td02=>"&#213;",            td03=>"&Otilde;",        td04=>"Capital O, tilde");                                   
$arr_list[] = array(td01=>"O",      td02=>"&#214;",            td03=>"&Ouml;",          td04=>"Capital O, dieresis or umlaut mark");                                 
$arr_list[] = array(td01=>"×",      td02=>"&#215;",            td03=>"&times;",         td04=>"Multiply sign");                                  
$arr_list[] = array(td01=>"Ø",      td02=>"&#216;",            td03=>"&Oslash;",        td04=>"width=130 Capital O, slash");                                   
$arr_list[] = array(td01=>"U",      td02=>"&#217;",            td03=>"&Ugrave;",        td04=>"Capital U, grave accent");                                   
$arr_list[] = array(td01=>"U",      td02=>"&#218;",            td03=>"&Uacute;",        td04=>"Capital U, acute accent");                                   
$arr_list[] = array(td01=>"U",      td02=>"&#219;",            td03=>"&Ucirc;",         td04=>"Capital U, circumflex accent");                                  
$arr_list[] = array(td01=>"U",      td02=>"&#220;",            td03=>"&Uuml;",          td04=>"Capital U, dieresis or umlaut mark");                                 
$arr_list[] = array(td01=>"Y",      td02=>"&#221;",            td03=>"&Yacute;",        td04=>"Capital Y, acute accent");                                   
$arr_list[] = array(td01=>"Þ",      td02=>"&#222;",            td03=>"&THORN;",         td04=>"Capital Thorn, Icelandic");                                  
$arr_list[] = array(td01=>"ß",      td02=>"&#223;",            td03=>"&szlig;",         td04=>"Small sharp s, German (sz ligature)");                                  
$arr_list[] = array(td01=>"a",      td02=>"&#224;",            td03=>"&agrave;",        td04=>"Small a, grave accent");                                   
$arr_list[] = array(td01=>"a",      td02=>"&#225;",            td03=>"&aacute;",        td04=>"Small a, acute accent");                                   
$arr_list[] = array(td01=>"a",      td02=>"&#226;",            td03=>"&acirc;",         td04=>"Small a, circumflex accent");                                  
$arr_list[] = array(td01=>"a",      td02=>"&#227;",            td03=>"&atilde;",        td04=>"Small a, tilde");                                   
$arr_list[] = array(td01=>"a",      td02=>"&#228;",            td03=>"&auml;",          td04=>"Small a, dieresis or umlaut mark");                                 
$arr_list[] = array(td01=>"a",      td02=>"&#229;",            td03=>"&aring;",         td04=>"Small a, ring");                                  
$arr_list[] = array(td01=>"æ",      td02=>"&#230;",            td03=>"&aelig;",         td04=>"Small ae diphthong (ligature)");                                  
$arr_list[] = array(td01=>"c",      td02=>"&#231;",            td03=>"&ccedil;",        td04=>"Small c, cedilla");                                   
$arr_list[] = array(td01=>"e",      td02=>"&#232;",            td03=>"&egrave;",        td04=>"Small e, grave accent");                                   
$arr_list[] = array(td01=>"e",      td02=>"&#233;",            td03=>"&eacute;",        td04=>"Small e, acute accent");                                   
$arr_list[] = array(td01=>"e",      td02=>"&#234;",            td03=>"&ecirc;",         td04=>"Small e, circumflex accent");                                  
$arr_list[] = array(td01=>"e",      td02=>"&#235;",            td03=>"&euml;",          td04=>"Small e, dieresis or umlaut mark");                                 
$arr_list[] = array(td01=>"i",      td02=>"&#236;",            td03=>"&igrave;",        td04=>"Small i, grave accent");                                   
$arr_list[] = array(td01=>"i",      td02=>"&#237;",            td03=>"&iacute;",        td04=>"Small i, acute accent");                                   
$arr_list[] = array(td01=>"i",      td02=>"&#238;",            td03=>"&icirc;",         td04=>"Small i, circumflex accent");                                  
$arr_list[] = array(td01=>"i",      td02=>"&#239;",            td03=>"&iuml;",          td04=>"Small i, dieresis or umlaut mark");                                 
$arr_list[] = array(td01=>"ð",      td02=>"&#240;",            td03=>"&eth;",           td04=>"Small eth, Icelandic");                                
$arr_list[] = array(td01=>"n",      td02=>"&#241;",            td03=>"&ntilde;",        td04=>"Small n, tilde");                                   
$arr_list[] = array(td01=>"o",      td02=>"&#242;",            td03=>"&ograve;",        td04=>"Small o, grave accent");                                   
$arr_list[] = array(td01=>"o",      td02=>"&#243;",            td03=>"&oacute;",        td04=>"Small o, acute accent");                                   
$arr_list[] = array(td01=>"o",      td02=>"&#244;",            td03=>"&ocirc;",         td04=>"Small o, circumflex accent");                                  
$arr_list[] = array(td01=>"o",      td02=>"&#245;",            td03=>"&otilde;",        td04=>"Small o, tilde");                                   
$arr_list[] = array(td01=>"o",      td02=>"&#246;",            td03=>"&ouml;",          td04=>"Small o, dieresis or umlaut mark");                                 
$arr_list[] = array(td01=>"÷",      td02=>"&#247;",            td03=>"&divide;",        td04=>"Division sign");                                   
$arr_list[] = array(td01=>"ø",      td02=>"&#248;",            td03=>"&oslash;",        td04=>"Small o, slash");                                   
$arr_list[] = array(td01=>"u",      td02=>"&#249;",            td03=>"&ugrave;",        td04=>"Small u, grave accent");                                   
$arr_list[] = array(td01=>"u",      td02=>"&#250;",            td03=>"&uacute;",        td04=>"Small u, acute accent");                                   
$arr_list[] = array(td01=>"u",      td02=>"&#251;",            td03=>"&ucirc;",         td04=>"Small u, circumflex accent");                                  
$arr_list[] = array(td01=>"u",      td02=>"&#252;",            td03=>"&uuml;",          td04=>"Small u, dieresis or umlaut mark");                                 
$arr_list[] = array(td01=>"y",      td02=>"&#253;",            td03=>"&yacute;",        td04=>"Small y, acute accent");                                   
$arr_list[] = array(td01=>"þ",      td02=>"&#254;",            td03=>"&thorn;",         td04=>"Small thorn, Icelandic");                                  
$arr_list[] = array(td01=>"y",      td02=>"&#255;",            td03=>"&yuml;",          td04=>"Small y, dieresis or umlaut mark");                                     


?>




<div class="container">
	
	<div class="row">

		<table class="table table-striped  table-hover">
			<thead class="thead-dark">
			 <tr>
			  <th scope="col">표현문자</th>
			  <th scope="col">숫자표현</th>
			  <th scope="col">문자표현</th>
			  <th scope="col">설명</th>
			 </tr>
			</thead>
			<tbody>
			<?php 
				$cnt=0;
				foreach($arr_list as $key=>$value):

					$even = $cnt%2;
					if($even==1){
						$bg="bg-dark"; 
						$btn_color = "btn-outline-secondary";

					} else { 
						$bg="";
						$btn_color = "btn-outline-secondary";
					}
			?>
			 <tr>
			  	<td><?php echo  htmlspecialchars($value['td01'])?></td>
			  	<td>
			  		<div class="input-group">
					  <input type="text" class="form-control" value="<?php echo htmlspecialchars($value['td02'])?>" id="input-td02-<?php echo $cnt?>" placeholder="" aria-label="" aria-describedby="button-addon2">
					  <div class="input-group-append">
						<button class="btn <?php echo $btn_color?>" type="button" id="button-td02-<?php echo $cnt?>" >Copy!</button>
					  </div>
					</div>
			  			
			  	</td>
			  	<td>
			  		<div class="input-group">
					  <input type="text" class="form-control" value="<?php echo htmlspecialchars($value['td03'])?>" id="input-td03-<?php echo $cnt?>" placeholder="" aria-label="" aria-describedby="button-addon2">
					  <div class="input-group-append">
						<button class="btn <?php echo $btn_color?>" type="button" id="button-td03-<?php echo $cnt?>" >Copy!</button>
					  </div>
					</div>
			  			
			  	</td>
			  	<td><?php echo  htmlspecialchars($value['td04'])?></td>
			 </tr>
			<?php 
				$cnt++;
				endforeach;
			?> 
			
			</tbody>
		</table>


	</div>






</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
$(document).ready(function(){
	$('button.btn').on("click", function() {
		var id = $(this).attr('id');
		var input = id.replace('button', 'input'); 
		var copyText = document.getElementById(input);
		copyText.select();
		document.execCommand("copy");
		
	});
});
</script>

</body>
</html>