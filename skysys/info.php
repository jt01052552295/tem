<?php
include_once './bbs/connect.php';
include_once './bbs/lib.php';
?>
<!doctype html>
<html lang="ko">
<meta charset = "utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>Hello, world!</title>
</head>
<body>
<div class="container">
<?php


$query = "select * from hsbbs_manager order by no DESC  ";
$result = mysql_query ($query, $connect);

$list=array();
$i=0;
while ($row = mysql_fetch_array($result)) {
	$list[$i] = $row;
	$i++;
}

if(count($list)>0){
	for($i=0; $i<count($list); $i++){
		
		$even = $i%2;
		if($even==1){
			$bg="bg-dark"; 
			$btn_color = "btn-outline-light";

		} else { 
			$bg="";
			$btn_color = "btn-outline-secondary";
		}
		
?>
	<div class="row <?php echo $bg?>">
		<div class="col-md-6">
			<div class="input-group mb-3 mt-3">
			  <input type="text" class="form-control" value="<?php echo $list[$i]['company']?>" id="input-company-<?php echo $i?>" placeholder="" aria-label="company" aria-describedby="button-addon2">
			  <div class="input-group-append">
				<button class="btn <?php echo $btn_color?>" type="button" id="button-company-<?php echo $i?>" >Copy!</button>
			  </div>
			</div>
		</div>
		<?php
			$merge_server_address = "";
			if($list[$i]['server_id'] != "" && substr($list[$i]['server_id'],0,7) == "infodu_"){
				$merge_server_address = substr($list[$i]['server_id'], 7,strlen($list[$i]['server_id'])).".infodu.co.kr";
			}
		?>
		<div class="col-md-6">
			<div class="input-group mb-3 mt-3">
			  <input type="text" class="form-control" value="<?php echo $merge_server_address?>" id="input-addr-<?php echo $i?>" placeholder="" aria-label="" aria-describedby="button-addon1">
			  <div class="input-group-append">
				<button class="btn <?php echo $btn_color?>" type="button" id="button-addr-<?php echo $i?>" >Copy!</button>
			  </div>
			</div>
		</div>
		<div class="w-100"></div>
		<div class="col-md-3">
			<div class="input-group mb-3 ">
			  <input type="text" class="form-control" value="<?php echo $list[$i]['server_ip']?>" id="input-ip-<?php echo $i?>" placeholder="" aria-label="server_ip" aria-describedby="button-addon3">
			  <div class="input-group-append">
				<button class="btn <?php echo $btn_color?>" type="button" id="button-ip-<?php echo $i?>" >Copy!</button>
			  </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="input-group mb-3 ">
			  <input type="text" class="form-control" value="<?php echo $list[$i]['server_id']?>" id="input-id-<?php echo $i?>" placeholder="" aria-label="server_id" aria-describedby="button-addon4">
			  <div class="input-group-append">
				<button class="btn <?php echo $btn_color?>" type="button" id="button-id-<?php echo $i?>" >Copy!</button>
			  </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="input-group mb-3 ">
			  <input type="text" class="form-control" value="<?php echo $list[$i]['server_pass']?>" id="input-pass-<?php echo $i?>" placeholder="" aria-label="server_pass" aria-describedby="button-addon5">
			  <div class="input-group-append">
				<button class="btn <?php echo $btn_color?>" type="button" id="button-pass-<?php echo $i?>" >Copy!</button>
			  </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="input-group mb-3 ">
			  <input type="text" class="form-control" value="<?php echo $list[$i]['db_addr']?>" id="input-db-<?php echo $i?>" placeholder="" aria-label="db_addr" aria-describedby="button-addon6">
			  <div class="input-group-append">
				<button class="btn <?php echo $btn_color?>" type="button" id="button-db-<?php echo $i?>" >Copy!</button>
			  </div>
			</div>
		</div>

	</div>
<?php
	}
} else {
	echo "없음";
}
?>
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