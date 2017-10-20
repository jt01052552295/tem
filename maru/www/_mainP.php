<?
//$_SERVER["SITE_ID"] = 'cm';
//////////////////////////////////////////////////////////////////////
$query = "SELECT * FROM b_build WHERE intStatus > 0 ORDER BY strName ASC";
$result_build = $db->query($query);
while($rowsBuild = $result_build->fetch_array(MYSQL_ASSOC)){
	$r_build_strCode					= trim($rowsBuild['strCode']);
	$r_build_strName					= trim($rowsBuild['strName']);
	$cfg['bBuild'][$r_build_strCode] = $r_build_strName;
}
$result_build->close();
$rowsBuild = null;

$pTable = "b_build";
/**################################### 진행중인 공사 #######################################**/
$pWhere = "1=1";
$pWhere .= " AND intStatus > 0 AND strSiteId='".$_SERVER["SITE_ID"]."' AND strMain ='1'";
//$pWhere .= " AND intStatus > 0 AND strSiteId='".$_SERVER["SITE_ID"]."' AND strMain ='1' ";
$query = "
		SELECT *
		FROM {$pTable}
		WHERE {$pWhere}
		ORDER BY  intLevel ASC, strType DESC
		LIMIT 0, 3
		";

$result = $db->query($query);
/*****************************************************************************************************/
$idx=0;
while($rowsBuild = $result->fetch_array(MYSQL_ASSOC)):
	unset($arrFiles);
	unset($arrFiles2);
	$bb_thumnail = "";

	foreach($rowsBuild as $key => $value)
	{
		$key = "bb_".$key;
		$$key = trim($value);
	}
	$sql	= "SELECT * FROM b_build_files WHERE strBBSId='".$bb_strCode."' and intOrder=0 AND  intState>0 order by intOrder ";
	//echo $sql."<Br>";
	$result3	= $db->query($sql);
	while($rowsF = $result3->fetch_array(MYSQL_ASSOC)):
		$bb_image		= $rowsF['strURL'].$rowsF['strName'];
		$bb_thumnail	= $rowsF['strURL'].$rowsF['strThumbnail'];

	endwhile;
	if(!$bb_image){
		$bb_image	= "/img/img_noImageMain.jpg";
	}
	//$bb_strName	= trim(str_replace("신축공사","",$bb_strName));
	//////////////////////////////////////////////////////////////////////
	$cfg['mainBuild']['code'][$idx]				= $bb_strCode;
	$cfg['mainBuild']['name'][$idx]				= mb_strimwidth($bb_strName,0,30,'...',"utf-8");
	$cfg['mainBuild']['full_name'][$idx]				= $bb_strName;
	$cfg['mainBuild']['image'][$idx]			= $bb_image;
	$cfg['mainBuild']['thumnail'][$idx]			= $bb_thumnail;
	$cfg['mainBuild']['period'][$idx]			= substr($bb_strStartDate, 2, 10)." ~ ".substr($bb_strEndDate, 2, 10);
	$cfg['mainBuild']['architectCode'][$idx]	= $bb_strArchitectCode1;
	$cfg['mainBuild']['engineerCode'][$idx]		= $bb_strEngineerCode1;
	$cfg['mainBuild']['address'][$idx]			= $bb_strAddress;
	//////////////////////////////////////////////////////////////////////
	$cfg['thumLee'][$bb_strCode]			= $bb_thumnail;	
	$idx++;
endwhile;
//echo "<!-- <pre $query>\n";print_r($cfg['mainBuild']); echo "\n</pre> -->";
//echo "<!-- <pre>\n";print_r($cfg['thumLee']); echo "\n</pre> -->";

/**################################### 공지사항 #######################################**/
//$tid = "b_notice";
//$pWhere = "1=1";
//$pWhere .= " AND intState > 0 AND intSort = 0 AND strSiteId='".$_SERVER["SITE_ID"]."'";
////$pWhere .= " AND intState > 0 AND intSort = 0 AND strSiteId='cm'";
//$query = "
		//SELECT *
		//FROM $tid
		//WHERE {$pWhere}
		//ORDER BY intLevel desc, intId desc, intSort
		//LIMIT 5
		//";
//$resultQna = $db->query($query);

///*****************************************************************************************************/
//$idx=0;
//while($rowsQna = $resultQna->fetch_array(MYSQL_ASSOC)):
	////////////////////////////////////////////////////////////////////////
	//$cfg['mainNotice']['id'][$idx]					= $rowsQna['intId'];
	//$cfg['mainNotice']['title'][$idx]				= mb_strimwidth($rowsQna['strTitle'],0,60,'...',"utf-8");
	//$cfg['mainNotice']['date'][$idx]				= substr($rowsQna['datWrite'],2,8);
	////////////////////////////////////////////////////////////////////////
	//$idx++;
//endwhile;

//echo "<!-- <pre mainNotice>\n";print_r($cfg['mainNotice']);echo "\n</pre> -->";


/**################################### 뉴스 #######################################**/
$tid = "b_news";
$pWhere = "1=1";
$pWhere .= " AND intState > 0 AND intSort = 0 AND strSiteId='".$_SERVER["SITE_ID"]."'";
$query = "
		SELECT *
		FROM $tid
		WHERE {$pWhere}
		ORDER BY intLevel desc, intId desc, intSort
		LIMIT 4
		";
$resultQna = $db->query($query);
/*****************************************************************************************************/
$idx=0;
while($rowsQna = $resultQna->fetch_array(MYSQL_ASSOC)):
	//////////////////////////////////////////////////////////////////////
	$cfg['mainNews']['id'][$idx]				= $rowsQna['intId'];
	$cfg['mainNews']['title'][$idx]				= mb_strimwidth($rowsQna['strTitle'],0,30,'...',"utf-8");
	$cfg['mainNews']['date'][$idx]				= substr($rowsQna['datWrite'],2,8);
	//////////////////////////////////////////////////////////////////////
	$idx++;
endwhile;

/**################################### 스마트일보 #######################################**/
$pWhere = "1=1";
$pWhere .= " AND intStatus > 0 AND strSiteId='".$_SERVER["SITE_ID"]."'";
//$pWhere .= " AND intStatus > 0 AND strSiteId='cm'";
//$pWhere .= " AND strBuildCode = '".$cfg['mainBuild']['code'][0]."'";
$query = "
		SELECT *
		FROM b_smart
		WHERE {$pWhere}
		ORDER BY strDate DESC
		LIMIT 5
		";
$resultSmart = $db->query($query);
/*****************************************************************************************************/

$stringSmart = "start/";
$idx=0;
while($rowsSmart = $resultSmart->fetch_array(MYSQL_ASSOC)):
	//unset($arrFiles);

	foreach($rowsSmart as $key => $value)
	{
		$key = "s_".$key;
		$$key = trim($value);
	}
	$arrFile		= explode("^^", $s_strFile);
	$arrFileName	= explode("^^", $s_strFileName);
	for($i=0; $i<count($arrFile); $i++){
		$arrFileTemp						= explode("::", $arrFile[$i]);
		$arrFiles[$arrFileTemp[0]]			= $arrFileTemp[1];
		$arrFileNameTemp					= explode("::", $arrFileName[$i]);
		$arrFilesName[$arrFileNameTemp[0]]	= $arrFileNameTemp[1];
	}
	
	$query2 = "SELECT * FROM b_smart_files WHERE intState > 0 AND strBBSId='".$rowsSmart['strCode']."' AND intOrder=0 limit 1";

	$result_img = $db->query($query2);
	$rowsImg = $result_img->fetch_array(MYSQL_ASSOC);

	if($rowsImg['strURL']){
		$s_image	= $rowsImg['strURL'].$rowsImg['strName'];
	}else{
		$s_image	="/img/img_noImageMain.jpg";
	}

	if(!$s_image){
		$s_image =	"/img/img_noImageMain.jpg";
	}
	$s_strName	= trim(str_replace("신축공사","",$s_strName));


	//////////////////////////////////////////////////////////////////////
	$cfg['mainSmart']['code'][$idx]				= $s_strCode;
	$cfg['mainSmart']['buildCode'][$idx]			= $s_strBuildCode;
	$cfg['mainSmart']['image'][$idx]				= $s_image;
	$cfg['mainSmart']['date'][$idx]					= $s_strDate;
	$cfg['mainSmart']['name'][$idx]				= $cfg['bBuild'][$s_strBuildCode];

	/******************************************************************************/
	$day		= "0";
	$keyword	= "Kind";
	/******************************************************************************/
	$query = "SELECT * FROM b_smart_detail WHERE intStatus > 0 AND strSmartCode='{$s_strCode}' AND intLevel=".$day." AND strType='".$keyword."'  ORDER BY intId ASC";
	$result_detail = $db->query($query);
	$iLee = 0;
	while($rowsDetail = $result_detail->fetch_array(MYSQL_ASSOC)){
		$iLee++;
		foreach($rowsDetail as $key => $value)
		{
			$arrDetail[$iLee][$key]	= trim($value);
		}
	}
	$result_detail->close();
	$rowsDetail = null;
	for($i=1; $i<=10; $i++){
		if($arrDetail[$i]['strMemo'] != ""){
			$s_strToday = $arrDetail[$i]['strKindCode']." : ".$arrDetail[$i]['strMemo'];
			break;
		}
	}
	unset($arrDetail);
	$cfg['mainSmart']['today'][$idx]			= mb_strimwidth($s_strToday,0,36,'',"utf-8");
	//////////////////////////////////////////////////////////////////////
	$idx++;
endwhile;	

/**################################### 견적 #######################################**/
$tid = "b_buildRequest";
$pWhere = "1=1";
$pWhere .= " AND intState > 0 AND intSort = 0 AND strSiteId='".$_SERVER["SITE_ID"]."'";
$query = "
		SELECT *
		FROM $tid
		WHERE {$pWhere}
		ORDER BY datWrite DESC
		LIMIT 6	";
$resultQna = $db->query($query);
/*****************************************************************************************************/

while($rowsQna = $resultQna->fetch_array(MYSQL_ASSOC)):
//////////////////////////////////////////////////////////////////////
	$queryCnt = "SELECT count(*) AS cnt FROM $tid WHERE strSiteId='".$_SERVER["SITE_ID"]."' AND intState > 0";
	$resultCnt = $db->query($queryCnt);
	$rowsCnt = $resultCnt->fetch_array(MYSQL_ASSOC);
	//////////////////////////////////////////////////////////////////////
	$cfg['Request']['id'][]					= $rowsQna[intId];
	$cfg['Request']['title'][]				= $rowsQna[strTitle];
	$cfg['Request']['cnt'][]				= $rowsCnt['cnt'];
	$cfg['Request']['date'][]				= substr($rowsQna['datWrite'],2,8);


endwhile;



/**################################### CM 뉴스 #######################################**/
$tid = "b_cmNews";
$pWhere = "1=1";
$pWhere .= " AND intState > 0 AND intSort = 0 AND strSiteId='".$_SERVER["SITE_ID"]."'";
$query = "
		SELECT *
		FROM $tid
		WHERE {$pWhere}
		ORDER BY intLevel desc, intId desc, intSort
		LIMIT 1	";
$resultCmNews = $db->query($query);
/*****************************************************************************************************/

while($rowsCmNews = $resultCmNews->fetch_array(MYSQL_ASSOC)):
//////////////////////////////////////////////////////////////////////
	$queryCnt = "SELECT count(*) AS cnt FROM $tid WHERE strSiteId='".$_SERVER["SITE_ID"]."'";
	$resultCnt = $db->query($queryCnt);
	$rowsCnt = $resultCnt->fetch_array(MYSQL_ASSOC);
	//////////////////////////////////////////////////////////////////////
	$cfg['mainCmNews']['id'][]					= $rowsCmNews[intId];
	$cfg['mainCmNews']['title'][]				= $rowsCmNews[strTitle];
	$cfg['mainCmNews']['cnt'][]				= $rowsCnt['cnt'];


	$arrFile		= explode("^^", $rowsCmNews[strFile]);
	$arrFileName	= explode("^^", $rowsCmNews[strFileName]);

	for($i=0; $i<count($arrFile); $i++){
		$arrFileTemp						= explode("::", $arrFile[$i]);
		$arrFiles[$arrFileTemp[0]]			= $arrFileTemp[1];
		$arrFileNameTemp					= explode("::", $arrFileName[$i]);
		$arrFilesName[$arrFileNameTemp[0]]	= $arrFileNameTemp[1];
	}

	if($arrFiles['strFile1']){
		$b_image	= "/upload/".$rowsCmNews[intId]."/crop_".$arrFiles['strFile1'];
	}else{
		$b_image	= "/img/img_noImageMain.jpg";
	}
	
	$cfg['mainCmNews']['image'][]				= $b_image;

endwhile;



/**################################### 공사문의 #######################################**/
$tid = "b_buildQNA";
$pWhere = "1=1";
$pWhere .= " AND intState > 0 AND intSort = 0 AND strSiteId='".$_SERVER["SITE_ID"]."'";
$query = "
		SELECT *
		FROM $tid
		WHERE {$pWhere}
		ORDER BY datWrite DESC
		LIMIT 6	";
$resultQna = $db->query($query);
/*****************************************************************************************************/

while($rowsQna = $resultQna->fetch_array(MYSQL_ASSOC)):
//////////////////////////////////////////////////////////////////////
	$queryCnt = "SELECT count(*) AS cnt FROM $tid WHERE strSiteId='".$_SERVER["SITE_ID"]."'";
	$resultCnt = $db->query($queryCnt);
	$rowsCnt = $resultCnt->fetch_array(MYSQL_ASSOC);
	//////////////////////////////////////////////////////////////////////
	$cfg['mainQna']['id'][]					= $rowsQna[intId];
	$cfg['mainQna']['title'][]				= $rowsQna[strTitle];
	$cfg['mainQna']['cnt'][]				= $rowsCnt['cnt'];
	$cfg['mainQna']['date'][]				= substr($rowsQna['datWrite'],2,8);


endwhile;

/**################################### 공부방 #######################################**/
$tid = "b_buildStudy";
$pWhere = "1=1";
$pWhere .= " AND intState > 0 AND intSort = 0 AND strSiteId='".$_SERVER["SITE_ID"]."'";
$query = "
		SELECT *
		FROM $tid
		WHERE {$pWhere}
		ORDER BY intLevel desc, intId desc, intSort
		LIMIT 4	";
$resultQna = $db->query($query);
/*****************************************************************************************************/

while($rowsQna = $resultQna->fetch_array(MYSQL_ASSOC)):
//////////////////////////////////////////////////////////////////////
$cfg['buildStudy']['id'][]					= $rowsQna['intId'];
$cfg['buildStudy']['title'][]				= $rowsQna['strTitle'];
//////////////////////////////////////////////////////////////////////


endwhile;

/**################################### 공사후기 #######################################**/
$tid = "b_reviewClient";
$pWhere = "1=1";
$pWhere .= " AND intState > 0 AND intSort = 0 AND strSiteId='".$_SERVER["SITE_ID"]."'";
$query = "
		SELECT *
		FROM $tid
		WHERE {$pWhere}
		ORDER BY datWrite DESC
		LIMIT 7	";
$resultQna = $db->query($query);
/*****************************************************************************************************/
while($rowsQna = $resultQna->fetch_array(MYSQL_ASSOC)):
//////////////////////////////////////////////////////////////////////
$cfg['reviewClient']['id'][]					= $rowsQna['intId'];
$cfg['reviewClient']['title'][]				= $rowsQna['strTitle'];
$cfg['reviewClient']['date'][]				= substr($rowsQna['datWrite'],2,8);
//////////////////////////////////////////////////////////////////////
endwhile;

/**################################### 완료된 공사 #######################################**/
$pWhere = "1=1";
$pWhere .= " AND intStatus > 0 AND intLevel = 9 AND strSiteId='".$_SERVER["SITE_ID"]."'";
$query = "
		SELECT *
		FROM {$pTable}
		WHERE {$pWhere}
		ORDER BY intLevel ASC, strType DESC
		LIMIT 5
		";
$resultComplete = $db->query($query);
/*****************************************************************************************************/

while($rowsComplete = $resultComplete->fetch_array(MYSQL_ASSOC)):

	foreach($rowsComplete as $key => $value)
	{
		$key = "b_".$key;
		$$key = trim($value);
	}
	$sql	= "SELECT * FROM b_build_files WHERE strBBSId='".$rowsComplete['strCode']."' and intOrder=0 AND  intState>0 order by intOrder ";
	$result3	= $db->query($sql);
	while($rowsF = $result3->fetch_array(MYSQL_ASSOC)):
		$bb_image		= $rowsF['strURL'].$rowsF['strName'];
		$bb_thumnail	= $rowsF['strURL'].$rowsF['strThumbnail'];

	endwhile;

	$b_strName	= trim(str_replace("신축공사","",$b_strName));
	//////////////////////////////////////////////////////////////////////
	$cfg['mainComplete']['code'][]				= $b_strCode;
	$cfg['mainComplete']['name'][]				= $b_strName;
	$cfg['mainComplete']['image'][]				= $bb_image;
	$cfg['mainComplete']['thumnail'][]			= $bb_thumnail;
	$cfg['mainComplete']['period'][]			= $b_strStartDate." ~ ".$b_strEndDate;
	$cfg['mainComplete']['architectCode'][]		= $b_strArchitect1;
	$cfg['mainComplete']['engineerCode'][]		= $b_strEngineer1;
	$cfg['mainComplete']['address'][]			= $b_strAddress;
	//////////////////////////////////////////////////////////////////////
	unset($arrFiles);

endwhile;
//echo "<!-- <pre mainComplete>\n";print_r($cfg['mainComplete']);echo "\n</pre> -->";
?>