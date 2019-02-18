<?php
define('_CONTENTS_', true);
include_once('./_common.php');
include_once(G5_LANG_PATH.'/_header.php'); 
include_once(G5_LANG_PATH.'/_top.php'); 

include_once(G5_LANG_PATH.'/product/_product.php'); 
?>



<div class="products">

    <?php for($i=0; $i<count($_arr_product['diecasting']); $i++):?>
    <div class="pro_view">
        <div class="view_left"><img src="<?php echo $_arr_product['diecasting'][$i]['img'] ?>"alt=""/></div>
        <div class="view_right">
        <strong><?php echo $_arr_product['diecasting'][$i]['name'] ?></strong>
        <p>
            <?php echo ($_arr_product['diecasting'][$i]['c1'])?'<span>'.$_arr_product['diecasting'][$i]['k1'].' :</span> '.$_arr_product['diecasting'][$i]['c1'].'<br>':''?>
            <?php echo ($_arr_product['diecasting'][$i]['c2'])?'<span>'.$_arr_product['diecasting'][$i]['k2'].' :</span> '.$_arr_product['diecasting'][$i]['c2'].'<br>':''?>
            <?php echo ($_arr_product['diecasting'][$i]['c3'])?'<span>'.$_arr_product['diecasting'][$i]['k3'].' :</span> '.$_arr_product['diecasting'][$i]['c3'].'<br>':''?>
            <?php echo ($_arr_product['diecasting'][$i]['c4'])?'<span>'.$_arr_product['diecasting'][$i]['k4'].' :</span> '.$_arr_product['diecasting'][$i]['c4'].'<br>':''?>
            <?php echo ($_arr_product['diecasting'][$i]['c5'])?'<span>'.$_arr_product['diecasting'][$i]['k5'].' :</span> '.$_arr_product['diecasting'][$i]['c5'].'<br>':''?>
            <?php echo ($_arr_product['diecasting'][$i]['c6'])?'<span>'.$_arr_product['diecasting'][$i]['k6'].' :</span> '.$_arr_product['diecasting'][$i]['c6'].'<br>':''?>
            <?php echo ($_arr_product['diecasting'][$i]['c7'])?'<span>'.$_arr_product['diecasting'][$i]['k7'].' :</span> '.$_arr_product['diecasting'][$i]['c7'].'':''?>
        </p>
         </div>
    </div>
    <?php endfor;?>


</div>


<?php
include_once(G5_LANG_PATH.'/_footer.php');
?>