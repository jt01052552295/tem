<?
	if( $path=='completeGallery' || $path=='bimGallery'  ) {
		// 갤러리
		$listOrder			= "이미지,제목";		
	} else if($path=='buildRequest'  ) {
		// 갤러리
		$listOrder			= "제목,답변";		
	}  else {
		// 일반
		//$listOrder			= "번호,제목,작성자,등록일,조회,내용";		
		$listOrder			= "제목,내용";		
	}

	if( $path=='buildStudyAZ'){
		$listOrder			= "번호,제목,작성자,조회";		
	}

	if( $path=='ing' || $path=='ingCategory' || $path=='ingCEO' || $path=='ingCooperation' || $path=='ingClient'){
		$listOrder			= "번호,제목,작성자,조회";		
	}

	if( $path=='completeClient' || $path=='completeCooperation' || $path=='complete' || $path=='completeCategory'){
		$listOrder			= "번호,제목,작성자,조회";		
	}

	// 수정
	$editOrder			= "제목,내용,작성자,첨부파일";		
	// 보기
	$viewOrder			= "제목,내용,작성자,등록일,조회,첨부파일";	

	//리스트
	if($path=='gallery' || $path=='completeGallery' ) {
		// 갤러리
		$listOrder	= "이미지,제목,등록일";
	}

	// 글쓰기
	if($path=='buildRequest' ) {
		// 견적문의
		$writeOrder			= "제목,연락처,건축지주소,진행상태,상담구분,대지면적,용도지역,건축연면적,지하,지상,용도분류,구조형식,내용,첨부파일,비밀번호";
		//$editOrder			= "제목,연락처,건축지역,건축지주소,진행상태,상담구분,대지면적,용도지역,건축연면적,지하,지상,용도분류,구조형식,내용,첨부파일";

	} else if($path=='propose' ) {
		//협력제안
		$writeOrder			= "제목,내용,첨부파일1,회사명,제안자명,전화번호,메일주소,회사소개서,홈페이지,팩스번호";
		$bType="write";
	} else {
		//일반
		$writeOrder			= "제목,내용,작성자,첨부파일";			// 글쓰기
	}

	if($path=='gallery' || $path=='completeGallery' ) {
		// 갤러리
		$viewOrder			= "제목,내용,작성자,등록일,조회,첨부파일";	
	} else if($path=='buildRequest' ) {
		// 견적문의
		$viewOrder			= "제목,내용,답변,등록일,조회,첨부파일,답변내용";	

	}


	if($path=='as' ) {
		$ss_strId			= ($_SESSION['e_strId'])? $_SESSION['e_strId']:$_SESSION['m_strId'];
		if(!$ss_strId) {
					echo "<script>alert('로그인 정보가 없습니다.'); history.back(-1);</script>";
					exit;
		}
	}

	if( $path=='ingCEO'  ) {
		$listOrder			= "번호,특기사항,작업일자";	
	}


	if(!$pageBBS)	$pageBBS	= 1;
	$setting['column']['list']		= array($listOrder);
	$setting['column']['write']		= array($writeOrder);
	$setting['column']['edit']		= array($editOrder);
	$setting['column']['answer']	= array($editOrder);
	$setting['column']['view']		= array(','.$viewOrder);
	$setting['cate']				= $path;

	$setting['bType']				= (!$bType)? $bType="list":$bType;
	$setting['level']				= $_SESSION['b_level'];
	$setting['siteId']				= $_SERVER["SITE_ID"];
	$setting['siteId']				= 'cm';


	if($setting['cate'] =='ing' || $setting['cate'] =='ingCEO' || $setting['cate'] =='ingCategory' || $path=='complete' || $path=='completeCategory' || $path=='completeClient' || $path=='completeCooperation'){
		$setting['cate']		= 'ingClient';
	} else {
		$setting['cate']		= $setting['cate'];
	}

	
	//echo "<!-- <pre _SESSION>\n";print_r($_SESSION);echo "\n</pre> -->";


	// 클래스 호출 및 디스플레이
	$clsSetting		= new LeeBoardSetting($setting['cate']);
	$bbsSet			= $clsSetting->setting();
	$clsSkin		= new LeeBoardSkinBBS($setting,$bbsSet);
	$skin			= $clsSkin->getSkin();

	//echo "<!-- <pre bbsSet>\n";print_r($bbsSet['param']);echo "\n</pre> -->";

	if($bbsSet['param']['value'][1]=='ing' || $bbsSet['param']['value'][1]=='ingCategory' || $path=='complete' || $path=='completeCategory' || $path=='completeClient' || $path=='completeCooperation'){
		$bbsSet['param']['value'][1] = 'ingClient';
		//echo $bbsSet['param']['value'][1];
	}


	$skinLoad		= new LeeBoardPageBBS($setting, $bbsSet, $skin, $pageBBS);
	$boardHtml		= $skinLoad->load();

	
?>