<?php
define('INDEX_ROOT', true); 
include_once('./_config.php');
include_once('./fpdf/fpdf.php');
include_once('./FPDI/fpdi.php');

class PDF_Rotate extends FPDI {

	var $angle = 0;

	function Rotate($angle, $x = -1, $y = -1) {
	    if ($x == -1)
	        $x = $this->x;
	    if ($y == -1)
	        $y = $this->y;
	    if ($this->angle != 0)
	        $this->_out('Q');
	    $this->angle = $angle;
	    if ($angle != 0) {
	        $angle*=M_PI / 180;
	        $c = cos($angle);
	        $s = sin($angle);
	        $cx = $x * $this->k;
	        $cy = ($this->h - $y) * $this->k;
	        $this->_out(sprintf('q %.5F %.5F %.5F %.5F %.2F %.2F cm 1 0 0 1 %.2F %.2F cm', $c, $s, -$s, $c, $cx, $cy, -$cx, -$cy));
	    }
	}

	function _endpage() {
	    if ($this->angle != 0) {
	        $this->angle = 0;
	        $this->_out('Q');
	    }
	    parent::_endpage();
	}

}

class PDF extends PDF_Rotate {

	var $_tplIdx;
	var $topName;
	var $fullPathToFile;

	function Header() {
	    
	    //Put the watermark
	    //$this->Image('http://chart.googleapis.com/chart?cht=p3&chd=t:60,40&chs=250x100&chl=Hello|World', 40, 100, 100, 0, 'PNG');
	    $this->SetFont('Arial', '', 12);
	    $this->SetTextColor(0, 0, 0);
	    $this->RotatedText(10, 10, $this->topName, 0);
	    
	    if (is_null($this->_tplIdx)) {

	        // THIS IS WHERE YOU GET THE NUMBER OF PAGES
	        $this->numPages = $this->setSourceFile($this->fullPathToFile);
	        $this->_tplIdx = $this->importPage(1);
	    }
	    $this->useTemplate($this->_tplIdx, 0, 0, 200);
	    
	    
	}

	function RotatedText($x, $y, $txt, $angle) {
	    //Text rotated around its origin
	    // $this->Rotate($angle, $x, $y);
	    $this->Text($x, $y, $txt);
	    $this->Rotate(0);
	}

}


// $fullPathToFile = "chinmay235.pdf";// path: file name
$fullPathToFile = "nara.pdf";// path: file name


$pdf = new PDF();
if (file_exists($fullPathToFile)){
	$pdf->topName = 'model-B-20';
	$pdf->fullPathToFile = $fullPathToFile;
	$pdf->AddPage('P');
	$pdf->SetFont('Arial','',12);

	if($pdf->numPages>1) {
	    for($i=2;$i<=$pdf->numPages;$i++) {
	        //$pdf->endPage();
	        $pdf->_tplIdx = $pdf->importPage($i);
	        $pdf->AddPage();
	    }
	}



	$pdf->Output(); // 브라우저에서 바로 보는거
	// $pdf->Output('F', $dir); // 파일 생성 ( 로컬에서 확인 서버에서 확인해보자 )
	//$pdf->Output("sampleUpdated.pdf", 'D'); //Download the file. open dialogue window in browser to save, not open with PDF browser viewer
	//$pdf->Output("save_to_directory_path.pdf", 'F'); //save to a local file with the name given by filename (may include a path)
	//$pdf->Output("sampleUpdated.pdf", 'I'); //I for "inline" to send the PDF to the browser
	//$pdf->Output("", 'S'); //return the document as a string. filename is ignored.
} else {
    die('no file');
}


?>