<?php
define('INDEX_ROOT', true); 
include_once('./_config.php');
include_once('./fpdf/fpdf.php');

class PDF_Rotate extends FPDF {

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

		const DPI = 96;
    const MM_IN_INCH = 25.4;
    const A4_HEIGHT = 297;
    const A4_WIDTH = 210;
    // tweak these values (in pixels)
    const MAX_WIDTH = 1150;
    const MAX_HEIGHT = 900;


	function Header() {
	    
	    //Put the watermark
	    //$this->Image('http://chart.googleapis.com/chart?cht=p3&chd=t:60,40&chs=250x100&chl=Hello|World', 40, 100, 100, 0, 'PNG');
	    $this->SetFont('Arial', '', 12);
	    $this->SetTextColor(0, 0, 0);
	    $this->RotatedText(10, 10, $this->topName, 0);   
	    
	}

	function RotatedText($x, $y, $txt, $angle) {
	    //Text rotated around its origin
	    // $this->Rotate($angle, $x, $y);
	    $this->Text($x, $y, $txt);
	    $this->Rotate(0);
	}

	function pixelsToMM($val) {
        return $val * self::MM_IN_INCH / self::DPI;
    }
    function resizeToFit($imgFilename) {
        list($width, $height) = getimagesize($imgFilename);
        $widthScale = self::MAX_WIDTH / $width;
        $heightScale = self::MAX_HEIGHT / $height;
        $scale = min($widthScale, $heightScale);
        return array(
            round($this->pixelsToMM($scale * $width)),
            round($this->pixelsToMM($scale * $height))
        );
    }
    function centreImage($img) {
        list($width, $height) = $this->resizeToFit($img);
        // you will probably want to swap the width/height
        // around depending on the page's orientation
        $this->Image( $img, (self::A4_HEIGHT - $width) / 2 - 8, (self::A4_WIDTH - $height) / 2,   $width,   $height        );
    }

}



$pdf = new PDF();
$pdf->topName = 'model-B-20';
$pdf->SetFont('Arial', '', 12);
$pdf->AddPage('L');
// $txt = "FPDF is a PHP class which allows to generate PDF files with pure PHP, that is to say " .
//         "without using the PDFlib library. F from FPDF stands for Free: you may use it for any " .
//         "kind of usage and modify it to suit your needs.\n\n";
// for ($i = 0; $i < 25; $i++){
//     $pdf->MultiCell(0, 5, $txt, 0, 'J');
// }
//$pdf->Image('./nara.jpg',20,20,220,180);
// $pdf->Image('http://chart.googleapis.com/chart?cht=p3&chd=t:60,40&chs=250x100&chl=Hello|World', 10, 10, 200, 0, 'PNG');


$pdf->AddPage('L');
$pdf->centreImage('./nara.jpg');
$pdf->SetFont('Arial', '', 12);
$pdf->Text(26, 28, 'model-B-20');

$pdf->Output(); // 브라우저에서 바로 보는거
// $pdf->Output('F', $dir); // 파일 생성 ( 로컬에서 확인 서버에서 확인해보자 )
//$pdf->Output("sampleUpdated.pdf", 'D'); //Download the file. open dialogue window in browser to save, not open with PDF browser viewer
//$pdf->Output("save_to_directory_path.pdf", 'F'); //save to a local file with the name given by filename (may include a path)
//$pdf->Output("sampleUpdated.pdf", 'I'); //I for "inline" to send the PDF to the browser
//$pdf->Output("", 'S'); //return the document as a string. filename is ignored.



?>