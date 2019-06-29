<?php
session_start();
require('./fpdf/fpdf.php');
require_once './model/database.php';
require_once './model/getdata.php';
class PDF extends FPDF
{
// Page header
	function Header()
	{
		// Logo
		$this->Image('assets/logo.png',10,6,30);
		// Arial bold 15
		$this->SetFont('Arial','B',15);
		// Move to the right
		$this->Cell(80);
		// Title
		$this->Cell(30,10,'LEMBAR BEBAN KERJA DOSEN',0,0,'C');
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
$identitas = get_data( "SELECT * FROM identitas WHERE id_user = '$_SESSION[id_user]'" );

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->Cell(0,10,'Name: ',0,1,'C');
$pdf->Output();
?>