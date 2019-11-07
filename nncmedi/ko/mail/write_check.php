<?
//////////난수 리턴
function mail_ran_num ($i, $j)
{
	srand ((double)microtime ()*1000000);
	$random = rand ($i, $j);
	return $random;
}


$ran_num = mail_ran_num (1000, 9999);

$ran_num_1= substr ($ran_num, 0, 1);
$ran_num_2= substr ($ran_num, 1, 1);
$ran_num_3= substr ($ran_num, 2, 1);
$ran_num_4= substr ($ran_num, 3, 1);

$ran_num = crypt ($ran_num, "18");
?>
<input type="hidden" name="write_check" value="<?=$ran_num?>">

<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="white">
	<tr>
		<td class="mail_checking">
			<p><img src="<?=$inpo?>mail/image/check_<?=$ran_num_1?>.gif"><img src="<?=$inpo?>mail/image/check_<?=$ran_num_2?>.gif"><img src="<?=$inpo?>mail/image/check_<?=$ran_num_3?>.gif"><img src="<?=$inpo?>mail/image/check_<?=$ran_num_4?>.gif"></p>
		</td>
		<td class="mail_checking"><input type="text" size="10" name="write_checking" maxlength="4"></td>
	</tr>
</table>
