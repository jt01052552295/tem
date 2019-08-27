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

		$this->subject				= "페이지제목";
		$this->author				= "작성자";
		$this->description			= "페이지설명";
		$this->keywords				= "페이지키워드";
		$this->robots				= "INDEX, FOLLOW";
		$this->fb_type				= "website";
		$this->tw_card				= "summary";
		$this->url					= ""; 
		$this->img					= "";
		
    } 

	/**
	 *  현재페이지 메타정보 출력
	 * @param string module, string template
	 * @return 
	 */
	public function get_meta_info() {
		$this->get_meta_print();	
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
	public function get_meta_print(){

		echo "<!-- pre get_meta_print>";
		print_r($this->subject);
		echo "</pre --!>";

		//echo '
			//<title>'.$this->subject.'</title>
			//<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			//<meta name="subject"				content="'.$this->subject.'" />
			//<meta name="description"			content="'.$this->description.'" />
			//<meta name="keywords"				content="'.$this->keywords.'" />
			//<meta property="og:url"				content="'.$this->url.'" />
			//<meta property="og:type"			content="'.$this->fb_type.'" />
			//<meta property="og:title"			content="'.$this->subject.'" />
			//<meta property="og:description"		content="'.$this->description.'" />
			//<meta property="og:image"			content="'.$this->img.'" />
			//<meta property="og:image:width" 	content="640" />
			//<meta property="og:image:height" 	content="320" />
			//<meta name="twitter:card"			content="'.$this->tw_card.'"/>
			//<meta name="twitter:url"			content="'.$this->url.'" />
			//<meta name="twitter:title"			content="'.$this->subject.'" />
			//<meta name="twitter:description"	content="'.$this->description.'" />  
			//<meta name="twitter:image"			content="'.$this->img.'"	/> 
			//<meta name="nate:title"				content="'.$this->subject.'" /> 
			//<meta name="nate:description"		content="'.$this->description.'" />
			//<meta name="nate:url"				content="'.$this->url.'" /> 
			//<meta name="nate:image"				content="'.$this->img.'"	 /> 
		//';
	}

}//class

//$metaInfo	= new MetaInfo();
//$metaInfo->get_meta_info();

?>