<?php 
class MetaInfo { 

	
	public $subject;
	public $author;
	public $description;
	public $keywords;
	public $robots;
	public $fb_type;						//페이스북 관련
	public $tw_card;						//트위터
	public $url;								
	public $img;							

	function __construct() {

		$this->subject				= "건축플랫폼 아키타임즈";
		$this->author				= "아키타임즈";
		$this->description			= "건축주, 건축사, 시공사, 자재사 모두가 한 공간에서 언제(whenever), 어디에서나(wherever) 소통할 수 있는 투명한 건축문화 구축에 이바지 하겠습니다.";
		$this->keywords				= "건축포털, 건축주, 건축사, 시공사, 건설사, 자재사, 홈페이지, 홈페이지제작, 컨텐츠, 정보, 자료실, 구인, 구직, 커뮤니티, S시스템, BIM, SKT, 스마트, 현장관리, 인테리어, 예쁜집, 견적";
		$this->robots				= "INDEX, FOLLOW";
		$this->fb_type				= "website";
		$this->tw_card				= "summary";
		$this->url					= "http://www.architimes.co.kr"; 
		$this->img					= "http://www.architimes.co.kr/new/img/main/bg_logo.jpg";
		
    } 

	/**
	 *  현재페이지 메타정보 출력
	 * @param string module, string template
	 * @return 
	 */
	public function get_meta_info($module='', $template='') {
		$this->get_meta_index();	
	}


	/**
	 *  리스트 페이지 메타정보 출력
	 * @param 
	 * @return 
	 */
	public function get_meta_list(){

		
	}


	/**
	 *  뷰 페이지 메타정보 출력
	 * @param 
	 * @return 
	 */
	public function get_meta_view(){

		
	}


	/**
	 *  인덱스 페이지 메타정보 출력
	 * @param 
	 * @return 
	 */
	public function get_meta_index(){


		echo '
			<title>'.$this->subject.'</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta http-equiv="Expires" content="-1" />
			<meta http-equiv="Pragma" content="no-cache" />
			<meta http-equiv="Cache-Control" content="no-cache" />
			<meta name="subject"				content="'.$this->subject.'" />
			<meta name="description"			content="'.$this->description.'" />
			<meta name="keywords"				content="'.$this->keywords.'" />
			<meta property="fb:app_id"			content="322071614890392" />
			<meta property="og:url"				content="'.$this->url.'" />
			<meta property="og:type"			content="'.$this->fb_type.'" />
			<meta property="og:title"			content="'.$this->subject.'" />
			<meta property="og:description"		content="'.$this->description.'" />
			<meta property="og:image"			content="'.$this->img.'" />
			<meta property="og:image:width" 	content="640" />
			<meta property="og:image:height" 	content="320" />
			<meta name="twitter:card"			content="'.$this->tw_card.'"/>
			<meta name="twitter:url"			content="'.$this->url.'" />
			<meta name="twitter:title"			content="'.$this->subject.'" />
			<meta name="twitter:description"	content="'.$this->description.'" />  
			<meta name="twitter:image"			content="'.$this->img.'"	/> 
			<meta name="nate:title"				content="'.$this->subject.'" /> 
			<meta name="nate:description"		content="'.$this->description.'" />
			<meta name="nate:url"				content="'.$this->url.'" /> 
			<meta name="nate:image"				content="'.$this->img.'"	 /> 
		';
	}

}//class

//$metaInfo	= new MetaInfo();
//$metaInfo->get_meta_info();

?>