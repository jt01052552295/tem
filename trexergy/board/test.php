<?php 
// http://tinsology.net/2011/04/php-json_encode-and-json_decode-alternatives/ 

if(!function_exists('json_encode')) 
{ 
    function json_encode($a=false) 
    { 
        // Some basic debugging to ensure we have something returned 
        if (is_null($a)) return 'null'; 
        if ($a === false) return 'false'; 
        if ($a === true) return 'true'; 
        if (is_scalar($a)) 
        { 
            if (is_float($a)) 
            { 
                // Always use '.' for floats. 
                return floatval(str_replace(',', '.', strval($a))); 
            } 
            if (is_string($a)) 
            { 
                static $jsonReplaces = array(array('\\', '/', "\n", "\t", "\r", "\b", "\f", '"'), array('\\\\', '\\/', '\\n', '\\t', '\\r', '\\b', '\\f', '\"')); 
                return '"' . str_replace($jsonReplaces[0], $jsonReplaces[1], $a) . '"'; 
            } 
            else 
                return $a; 
        } 
        $isList = true; 
        for ($i = 0, reset($a); true; $i++) { 
            if (key($a) !== $i) 
            { 
                $isList = false; 
                break; 
            } 
        } 
        $result = array(); 
        if ($isList) 
        { 
            foreach ($a as $v) $result[] = json_encode($v); 
            return '[' . join(',', $result) . ']'; 
        } 
        else 
        { 
            foreach ($a as $k => $v) $result[] = json_encode($k).':'.json_encode($v); 
            return '{' . join(',', $result) . '}'; 
        } 
    } 
} 

if(!function_exists('json_decode')) 
{ 
    function json_decode($json) 
    { 
        $comment = false; 
        $out = '$x='; 
        for ($i=0; $i<strlen($json); $i++) 
        { 
            if (!$comment) 
            { 
                if (($json[$i] == '{') || ($json[$i] == '[')) 
                    $out .= ' array('; 
                else if (($json[$i] == '}') || ($json[$i] == ']')) 
                    $out .= ')'; 
                else if ($json[$i] == ':') 
                    $out .= '=>'; 
                else 
                    $out .= $json[$i]; 
            } 
            else 
                $out .= $json[$i]; 
            if ($json[$i] == '"' && $json[($i-1)]!="\\") 
                $comment = !$comment; 
        } 
        eval($out . ';'); 
        return $x; 
    } 
} 
?>


<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
<?php  
 //*Copyright © HoneyMusic* 
 //*Yu-sung heon          * 
 //**** 개인정보보호를 위한 이메일주소 노출방지 *** * 
  
  $url = "http://api.wunderground.com/api/e9e0b719ce8b9e95/geolookup/conditions/lang:KR/q/Korea/Cheongju.json.json"; 
  $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)"); 
    curl_setopt($ch, CURLOPT_TIMEOUT, 60); 
    $return = curl_exec($ch); 
    curl_close($ch); 
 
    
    print_r($return);
  
  
  $json_string = $return; 
  $parsed_json = json_decode($json_string); 
  $location = $parsed_json->{'location'}->{'city'}; 
  $temp_f = $parsed_json->{'current_observation'}->{'temp_f'}; 
  $temp_c = $parsed_json->{'current_observation'}->{'temp_c'}; 
  $uv = $parsed_json->{'current_observation'}->{'UV'}; 
  $wind_kph = $parsed_json->{'current_observation'}->{'wind_kph'}; 
  $weather = $parsed_json->{'current_observation'}->{'weather'}; 
  $icon_url = $parsed_json->{'current_observation'}->{'icon_url'}; 
  
  $api = "현재 날씨를 알려 드리겠습니다 $location 에는 섭씨$temp_f 도씨이며 온도 $temp_c 도씨입니다.현재날씨는 $weather 입니다. 풍속은 $wind_kph 입니다. 좋은 하루되십시요\n"; 
  $apidata = "$location 온도: $temp_c 섭씨: $temp_f 날씨: $weather \n";
 class TextToSpeech { 
 public $mp3data; 
 function __construct($text="") { 
        $text = trim($text); 
        if(!empty($text)) { 
            $text = urlencode($text); 
            $url = "http://translate.google.com/translate_tts?ie=utf-8&tl=ko&q=".$text; 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)"); 
    curl_setopt($ch, CURLOPT_TIMEOUT, 60); 
    $return = curl_exec($ch); 
    curl_close($ch);
 $this->mp3data = $return; 
        } 
    } 
  
    function setText($text) { 
        $text = trim($text); 
        if(!empty($text)) { 
            $text = urlencode($text); 
            $url = "http://translate.google.com/translate_tts?ie=utf-8&tl=ko&q=".$text; 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)"); 
    curl_setopt($ch, CURLOPT_TIMEOUT, 60); 
    $return = curl_exec($ch); 
    curl_close($ch);
 $this->mp3data = $return; 
            return $mp3data; 
        } else { return false; } 
    } 
  
    function saveToFile($filename) { 
        $filename = trim($filename); 
        if(!empty($filename)) { 
            return file_put_contents($filename,$this->mp3data); 
        } else { return false; } 
    } 
  
}
$data=$api;
$tts = new TextToSpeech(); 
$tts->setText($data); 
$tts->saveToFile("masnun.mp3");
?>
<audio controls="controls" autoplay="autoplay"> 
  <source src="masnun.mp3" type="audio/mpeg"/> 
</audio><br> 
<img src="<?=$icon_url;?>" height="30" ><? echo $apidata; ?> 