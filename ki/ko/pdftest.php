<?php
define('INDEX_ROOT', true); 
include_once('./_config.php');
include_once('./fpdf181/rotation.php');

class PDF extends PDF_Rotate
{
	function RotatedText($x,$y,$txt,$angle)
	{
	    //Text rotated around its origin
	    $this->Rotate($angle,$x,$y);
	    $this->Text($x,$y,$txt);
	    $this->Rotate(0);
	}

	function RotatedImage($file,$x,$y,$w,$h,$angle)
	{
	    //Image rotated around its upper-left corner
	    $this->Rotate($angle,$x,$y);
	    $this->Image($file,$x,$y,$w,$h);
	    $this->Rotate(0);
	}
}

$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',20);
$pdf->RotatedImage('./images/logo.png',10,0,40,16,0);
//$pdf->RotatedText(100,60,'Hello!',45);
$pdf->Cell(40,10,'Hello World!');


$dir = "./test.pdf";

$pdf->Output('I', $dir); // 브라우저에서 바로 보는거
$pdf->Output('F', $dir); // 파일 생성 ( 로컬에서 확인 서버에서 확인해보자 )

?>