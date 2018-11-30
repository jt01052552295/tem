<?php
define('INDEX_ROOT', true); 
include_once('./_config.php');
include_once('./fpdf181/rotation.php');
include_once('./fpdi/src/Fpdi.php');

class PDF extends FPDF
{
	public $headerTxt = '';


	// Page header
	function Header()
	{
	    // Logo
	    //$this->Image('logo.png',10,6,30);
	    // Arial bold 15
	    $this->SetFont('Arial','B',15);
	    // Move to the right
	    $this->Cell(80);
	    // Title
	    $this->Cell(30,10,'Title',1,0,'C');
	    // Line break
	    $this->Ln(20);
	}

	// Page footer
	function Footer()
	{
	    // Position at 1.5 cm from bottom
	    $this->SetY(-15);
	    // Arial italic 8
	    $this->SetFont('Arial','I',8);
	    // Page number
	    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

// Instanciation of inherited class

$file = "./origin.pdf";// path: file name

$pdf = new PDF();
if (file_exists($file)){
    $pagecount = $pdf->setSourceFile($file);
} else {
    die('no file');
}



$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Printing line number '.$i,0,1);





$pdf->Output('I'); // 브라우저에서 바로 보는거
// $pdf->Output('F', $dir); // 파일 생성 ( 로컬에서 확인 서버에서 확인해보자 )

?>