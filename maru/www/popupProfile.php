<?
$_SERVER["HOME_DIR"]	= "/home/siteC";
include_once($_SERVER["HOME_DIR"].'/_inc/config.inc');
$query = "SELECT e.*, d.strName AS departmentName, p.strName AS positionName FROM b_employee AS e ";
$query	.= "LEFT JOIN b_department AS d ON e.strDepartment=d.strCode ";
$query	.= "LEFT JOIN b_position AS p ON e.strPosition=p.strCode ";
$query	.= "WHERE e.strCode = '".$strCode."'";
$result = $db->query($query);
$rowsEmployee = $result->fetch_array(MYSQL_ASSOC);

if(is_array($rowsEmployee)){
	foreach($rowsEmployee as $key => $value)
	{
		$key = "r_".$key;
		$$key = trim($value);
	}
}
unset($arrFiles);
//$arrFiles['strFile1'] = "img_noPhoto.jpg";
$arrFile		= explode("^^", $r_strFile);
$arrFileName	= explode("^^", $r_strFileName);
for($i=0; $i<count($arrFile); $i++){
	$arrFileTemp						= explode("::", $arrFile[$i]);
	$arrFiles[$arrFileTemp[0]]			= $arrFileTemp[1];
	$arrFileNameTemp					= explode("::", $arrFileName[$i]);
	$arrFilesName[$arrFileNameTemp[0]]	= $arrFileNameTemp[1];
}
$r_strMemo			= nl2br(stripslashes($r_strMemo));
?>

<!-- 현장대리인 레이어 팝업 -->
<div style="width:600px;height:440px;border:1px solid #7a7a7a;background:#ffffff;">
	<div style="background:url('/img/bak_profilePopup.jpg')no-repeat left top;">
		<div style="float:right;padding-right:30px;padding-top:30px;"><img class="btnClosePopup" src="/img/btn_profileClose.png" style="cursor:pointer" /></div>
		<div style="padding:30px 30px;">			
<?
		$pos = strrpos($arrFiles['strFile1'], '.');
		$ext = substr($arrFiles['strFile1'], $pos, strlen($arrFiles['strFile1']));
		$ext = strtolower(trim($ext));
		if($ext == ".jpg" || $ext == ".gif" || $ext == ".png"){ 
?>
			<div style="float:left;padding-right:40px;"><img  src="/upload/<?=$r_strCode?>/<?=$arrFiles['strFile1']?>" style="height:100px;border:solid 1px #aaa;" /></div>
<? }else{ ?>
			<div style="float:left;padding-right:40px;"><img  src="/img/img_noPhoto.jpg" style="height:100px;border:solid 1px #aaa;" /></div>
<? } ?>
			<div style="float:left;">
				<div style="float:left;padding-right:10px;text-align:left;color:#3f8dd5;">
					<div>성명</div>
					<div style="padding:6px 0;">전화번호</div>
				</div>
				<div style="float:left;text-align:left;color:#797979;font-size:12px;">
					<div><?=$r_strName?> <span style="font-size:11px;color:#999;"><?=$r_positionName?></span>&nbsp;</div>
					<div style="padding:5px 0;"><?=$r_strPhone?>&nbsp;</div>
				</div>
				<br style="clear:both;" />
			</div>
			<br style="clear:both;" />
			<div style="padding-top:20px;">
				<div style="float:left;padding-right:40px;">
					<div style="color:#999;font-size:12px;letter-spacing:0;padding-bottom:6px;"></div>
					<div><img src="/img/tit_career.jpg" /></div>
				</div>
				<div style="float:left;padding-right:20px;"><img src="/img/img_profileLine.jpg" style="height:240px;" /></div>
				<div style="float:left;text-align:left;color:#797979;font-size:12px;width:370px;height:240px;overflow:auto;border:none;line-height:1.5em;">
					<?=$r_strMemo?>
				</div>
				<br style="clear:both;" />
			</div>
		</div>
	</div>
</div>