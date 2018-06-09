<? 
// 현재페이지 URL
$bbs_page = $_SERVER['PHP_SELF'];

// 현재페이지 code
$bbs_page_array=explode ('/',$bbs_page); // /를 기준으로 문자열 나누기
$codesize=sizeof($bbs_page_array); // 문자열배열 총갯수
$codename=str_replace(".php","",$bbs_page_array[$codesize-1]);
if($bo_table != ""){
	$minpo="../../";
} else if ($codename == "index"){
	$minpo="../../";
	include_once(G5_LIB_PATH.'/latest.lib.php');
}else{
	$minpo="../../../";
}

$codename = "";
include $minpo."ko/top/config.php";
include $minpo."ko/top/list/order_list.php";
include $minpo."ko/top/function.php";
$inpo = $minpo;



$site['codename'] = $codename;
$site['inpo'] = $inpo;
echo "<!--pre site mobile>";
print_r($site);
echo "</pre-->";

?>


	<link type="text/css" rel="stylesheet" href="<?=KI_URL?>css/mobile.css" />
	<link type="text/css" rel="stylesheet" href="<?=KI_URL?>css/m_contents.css" />
	<link type="text/css" rel="stylesheet" href="<?=KI_URL?>css/jquery.mmenu.all.css" />
	<link rel="stylesheet" href="<?=KI_URL?>m/mail/mailcss.css">
	<script type="text/javascript" src="<?=KI_URL?>js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="<?=KI_URL?>js/jquery.mmenu.all.min.js"></script>
	
	<script type="text/javascript">
		$(function() {
			$('nav#menu').mmenu({
				extensions	: [ 'effect-slide-menu', 'shadow-page', 'shadow-panels' , "pagedim-black" ],
				counters	: true,
				navbar 		: {
					title		: '<?php echo $site['title']?>'
				},
				navbars		: [
				{
						position	: 'top',
						content		: [
							'prev',
							'title',
							'close'
						]
					} 
				]
			});
		});
	</script>

	<div id="page">
		<div class="header">
			<a href="#menu" class="ham_menu left">
				<img alt="MENU" src="<?=KI_URL?>m/images/ham_btn.png" />
			</a>
			<a href="<?=KI_URL?>m/index.php" class="ham_menu logo"><img alt="LOGO" src="<?=KI_URL?>m/images/logo.png" /></a>
			
			<a href="#" class="ham_menu right close" id="lang_btn" data-toggle="close" />
				<img alt="MENU" src="<?=KI_URL?>m/images/lang.jpg" />
			</a>
			<div class="top_line"></div>
		</div>
		
		<nav id="menu">
			<ul>
				<?php for ($i=1 ; $i < sizeof($order_category) ; $i++){?>
					
				<li <?php if($codename == $page_1_html[$order_category[$i]][0]){?> class="Selected" <?php }?>>
					<?php if ($page_1_name[$order_category[$i]][1]){?>
					<span><?=$cate_name[$order_category[$i]]?></span>
						<ul>
						<?php for ($k=1 ; $k < sizeof($page_1_name[$order_category[$i]]) ; $k++) {?>
							<li <?php if($codename == $page_1_html[$order_category[$i]][$k]){?> class="Selected" <?php }?>>
								<a href="<?=KI_URL."m/".$order_category[$i]?>/<?=$page_1_html[$order_category[$i]][$k]?>.html">
									<?=$page_1_name[$order_category[$i]][$k]?>
								</a>
							</li>
						<?php }?>
						</ul>
						
					<?php }else{?>
					<a href="<?=KI_URL."m/".$order_category[$i]?>/<?=$page_1_html[$order_category[$i]][0]?>.html">
						<?=$cate_name[$order_category[$i]]?>
					</a>
					<?php }?>
				</li>
				
				
				
				<?php }?>
			
			</ul>
		</nav>


		<!-- <div id="lang_bg"> -->
			<div class="lang_wrap">
				<div class="lang_nemo">
					<!-- <div class="lang_semo"></div> -->
					
					<a href="/ko/m" class="curr_lang lang_active">
						KOREA
						<span></span>
					</a>
					<a href="/en/m" >
						ENGLISH
						<span></span>
					</a>
					
				</div>
			</div>
		<!-- </div> -->

<script>
	$(document).ready(function(){
		$("#lang_btn").click(function(e){
			e.preventDefault();
			//$(".lang_wrap").fadeIn();
			var toggle = $(this).attr('data-toggle');
			if(toggle=="close"){
				$(this).attr('data-toggle', 'open');
				if($(this).hasClass('close')){
					$(this).removeClass('close').addClass('open');
					$(".lang_wrap").show();
				}
			} else {
				$(this).attr('data-toggle', 'close');
				if($(this).hasClass('open')){
					$(this).removeClass('open').addClass('close');
					$(".lang_wrap").hide();
				}
			}

		})
	});
</script>
		


<?php if(!defined('_INDEX_')):?>
	<div class="sub_wrap">	
<?php endif;?>