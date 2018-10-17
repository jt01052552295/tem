<div class="copyright_wrap">
	<div class="copy_logo">
		<div class="logo_copy"><img src="<?=KI_URL?>images/logo_copy.png" /></div>
		<div class="logo_txt"><p>TNC글로벌(주) / 글로벌방제(주) / (유)에이스방제 </p></div>
	</div>

	<div class="foot_content">
		<ul>
			<li class="foot_widget">
				<div class="filter"></div><img src="<?=KI_URL?>images/copy1.png" />
			</li>
			<li class="foot_widget">
				<div class="filter"></div><img src="<?=KI_URL?>images/copy2.png" />
			</li>
			<li class="foot_widget">
				<div class="filter"></div><img src="<?=KI_URL?>images/copy3.png" />
			</li>
		</ul>
	</div>
	
	<div class="copy_addr">
		<p>
			본사 : 서울시 영등포구 의사당대로 1길 25 하남빌딩 611호  /  TEL : 02)2691-2560  /  FAX :  02)2691-2548<br/>
			<em>COPYRIGHT &copy; TNC GROUP All rights reserved.</em>
		</p>
	</div>
	


	<div class="foot_link">
			<?php if($is_member){?>
			<a href="<?=ROOT_URL?>/board/bbs/member_confirm.php?url=register_form.php">정보수정</a><span>&nbsp; | &nbsp;</span>
			<a href="<?=ROOT_URL?>/board/bbs/logout.php">LOGOUT</a>
			<?php }else{?>
			<a href="<?=ROOT_URL?>/board/bbs/login.php">LOGIN</a>
			<?php }?>

			<?php if($is_admin=="super"){?>
				<div><a href="<?=G5_ADMIN_URL?>">관리자</a></div>
			<?php } ?>
	</div>


	<div class="copy_by">
		<a href="http://www.koreaind.com" target="_blank">
			<img src="<?=KI_URL?>images/by_koreaind.png" border="0" alt="한국산업정보">
		</a>
	</div>

</div>

