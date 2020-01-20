<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// option 리스트에 selected 추가
function conv_selected_option($options, $value)
{
    if(!$options)
        return '';

    $options = str_replace('value="'.$value.'"', 'value="'.$value.'" selected', $options);

    return $options;
}


// 상품이미지 업로드
function it_img_upload($srcfile, $filename, $dir)
{
    if($filename == '')
        return '';

    $size = @getimagesize($srcfile);
    if($size[2] < 1 || $size[2] > 3)
        return '';

    //php파일도 getimagesize 에서 Image Type Flag 를 속일수 있다
    if (!preg_match('/\.(gif|jpe?g|png)$/i', $filename))
        return '';

    if(!is_dir($dir)) {
        @mkdir($dir, G5_DIR_PERMISSION);
        @chmod($dir, G5_DIR_PERMISSION);
    }

    $pattern = "/[#\&\+\-%@=\/\\:;,'\"\^`~\|\!\?\*\$#<>\(\)\[\]\{\}]/";

    $filename = preg_replace("/\s+/", "", $filename);
    $filename = preg_replace( $pattern, "", $filename);

    $filename = preg_replace_callback(
                          "/[가-힣]+/",
                          create_function('$matches', 'return base64_encode($matches[0]);'),
                          $filename);

    $filename = preg_replace( $pattern, "", $filename);
    $prepend = '';

    // 동일한 이름의 파일이 있으면 파일명 변경
    if(is_file($dir.'/'.$filename)) {
        for($i=0; $i<20; $i++) {
            $prepend = str_replace('.', '_', microtime(true)).'_';

            if(is_file($dir.'/'.$prepend.$filename)) {
                usleep(mt_rand(100, 10000));
                continue;
            } else {
                break;
            }
        }
    }

    $filename = $prepend.$filename;

    upload_file($srcfile, $filename, $dir);

    $file = str_replace(G5_DATA_PATH.'/products/', '', $dir.'/'.$filename);

    return $file;
}


// 파일을 업로드 함
function upload_file($srcfile, $destfile, $dir)
{
    if ($destfile == "") return false;
    // 업로드 한후 , 퍼미션을 변경함
    @move_uploaded_file($srcfile, $dir.'/'.$destfile);
    @chmod($dir.'/'.$destfile, G5_FILE_PERMISSION);
    return true;
}

// 상품 이미지를 얻는다
function get_item_image($it_id, $width, $height=0, $anchor=false, $img_id='', $img_alt='', $is_crop=false)
{
    global $g5;

    if(!$it_id || !$width)
        return '';

    $sql = " select it_id, it_img1, it_img2, it_img3, it_img4, it_img5 from {$g5['g5_products_item_table']} where it_id = '$it_id' ";
	//echo $sql;
    $row = sql_fetch($sql);

    if(!$row['it_id'])
        return '';

    for($i=1;$i<=5; $i++) {
        $file = G5_DATA_PATH.'/products/'.$row['it_img'.$i];
        if(is_file($file) && $row['it_img'.$i]) {
            $size = @getimagesize($file);
            if($size[2] < 1 || $size[2] > 3)
                continue;

            $filename = basename($file);
            $filepath = dirname($file);
            $img_width = $size[0];
            $img_height = $size[1];

            break;
        }
    }

    if($img_width && !$height) {
        $height = round(($width * $img_height) / $img_width);
    }


    if($filename) {
        //thumbnail($filename, $source_path, $target_path, $thumb_width, $thumb_height, $is_create, $is_crop=false, $crop_mode='center', $is_sharpen=true, $um_value='80/0.5/3')
		
        $thumb = thumbnail($filename, $filepath, $filepath, $width, $height, false, $is_crop, 'center', false, $um_value='80/0.5/3');
    }

    if($thumb) {
		$file_url = str_replace(G5_PATH, G5_URL, $filepath.'/'.$thumb);
        $img = '<img src="'.$file_url.'" width="'.$width.'" height="'.$height.'" alt="'.$img_alt.'" />';
    } else {
		$img = '<img src="'.G5_THEME_IMG_URL.'/noData.jpg" width="'.$width.'" height="'.$height.'" alt="'.$img_alt.'" />';
    }





    //if($img_id)
        //$img .= ' id="'.$img_id.'"';
    //$img .= '>';

    //if($anchor)
        //$img = '<a href="'.G5_SHOP_URL.'/item.php?it_id='.$it_id.'", title => "'.$img.'</a>';

    return $img;
}

function view_thumbnail($filename, $width, $height){
	global $g5;
    if(!$filename) return '';

	$is_crop=false;

	$file = G5_DATA_PATH.'/products/'.$filename;

	$filename = basename($file);
    $filepath = dirname($file);

	
	if($filename) {
		$thumb = thumbnail($filename, $filepath, $filepath, $width, $height, false, $is_crop, 'center', false, $um_value='80/0.5/3');
	}

	if($thumb) {
		$file_url = str_replace(G5_PATH, G5_URL, $filepath.'/'.$thumb);
        $img = '<img src="'.$file_url.'" width="'.$width.'" height="'.$height.'" alt="'.$img_alt.'" />';
    } else {
		$img = '<span class="no_img", title => "<img src="'.G5_THEME_IMG_URL.'/noData.jpg" class="mx-auto d-block" /></span>';
    }

	return $img;
}


?>