<?php
include_once('./_config.php');

$rows = 8;
$from_record = ($page - 1) * $rows; // 시작 열을 구함
$to_record = $from_record + $rows;

if($sub){
    $to_record = count($port_list);    
}


?>

<?php 
	$list = array();
	$count = 0;
	for($i=0; $i<count($port_list); $i++):
		// echo "<pre>";
		// print_r($port_list[$i]);
		// echo "</pre>";

		if($cate=='1' && $port_list[$i]['category_1'] == true):

			$list[$count] = $port_list[$i];
			$count++;
		elseif($cate=='2' && $port_list[$i]['category_2'] == true):
			$list[$count] = $port_list[$i];
			$count++;
		elseif($cate=='3' && $port_list[$i]['category_3'] == true):
			$list[$count] = $port_list[$i];
			$count++;
		elseif($cate=='4' && $port_list[$i]['category_4'] == true):
			$list[$count] = $port_list[$i];
			$count++;
		elseif($cate=='5' && $port_list[$i]['category_5'] == true):
			$list[$count] = $port_list[$i];
			$count++;
		elseif($cate=='0'):
			$list[$count] = $port_list[$i];
			$count++;
		endif;

		
	endfor;


	// echo "<pre>";
	// print_r($list);
	// echo "</pre>";
	// exit;
?>

<?php 
$total = 0;
for($i=$from_record; $i<$to_record; $i++): 
    $total++;
endfor;

$index = 1;
for($i=$from_record; $i<$to_record; $i++): 
    $cls = '';
    if($index%4==0){
        $cls = 'last';
    }
?>
<?php if($list[$i]):?>
    <li class="gall_li <?php echo $cls?>" data-page="<?php echo $from_record?> <?php echo $to_record?> <?php echo $cate?>" data-total="<?php echo $count?>" >
        <?php
            if (!preg_match('#^https?://#i', $list[$i]['url'])) $address = 'http://www.' . $list[$i]['url'];
        ?>
       <a href="<?php echo $address ?>" target="_blank">
        	<?php 
        		$thumb = '';
        		if( file_exists('./portfolio/images/'.$list[$i]['img'].'.jpg') ):
        			$thumb = KI_URL.'/portfolio/images/'.$list[$i]['img'].'.jpg';
        		else:
        			$thumb = KI_IMG_URL.'/noData.png';
        		endif;
        	?>
            <img src="<?php echo $thumb ?>" alt="image" class="img-responsive">
            <div class="info">
                <div class="title">
                    <h5><?php echo $list[$i]['title'] ?></h5>
                    <?php 
                        $showCategory = array();
                        if($list[$i]['category_1']):
                            array_push($showCategory, "홍보용");
                        endif;
                        if($list[$i]['category_2']):
                            array_push($showCategory, "반응형");
                        endif;
                        if($list[$i]['category_3']):
                            array_push($showCategory, "기능형");
                        endif;
                        if($list[$i]['category_4']):
                            array_push($showCategory, "쇼핑몰");
                        endif;
                        if($list[$i]['category_5']):
                            array_push($showCategory, "모바일");
                        endif;
                        $showCategoryTxt = implode("/",$showCategory);
                    ?>

                    <p><?php echo $showCategoryTxt ?></p>    
                </div>
                <div class="device_ico">
                    <span class="ico_pc">PC</span>
                    <span class="ico_tablet">타블렛</span>
                    <span class="ico_mobile">모바일</span>
                </div>
                
            </div>
        </a>
    </li>

<?php 
    $index++;
    endif;
?>
<?php endfor; ?>