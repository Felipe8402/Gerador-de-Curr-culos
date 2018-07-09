<?php
 $fnome= utf8_decode($_POST["Nome"]);
require_once("fpdf/fpdf.php");
 
$pdf= new FPDF("P","pt","A4");
 
$pdf->AddPage();
$pdf->SetFont('arial','B',12);
$pdf->Cell(0,5,"$fnome",0,1,'L');
$pdf->Ln(8);
$pdf->Output("arquivo.pdf","D");


 ?>