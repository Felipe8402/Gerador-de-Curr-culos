<?php


$fnome= utf8_decode($_POST["Nome"]);
$ftelefone= utf8_decode($_POST["Telefone"]);
$fsexo= utf8_decode($_POST["Sexo"]);
$festadocivil= utf8_decode($_POST["EstadoCivil"]);

/*
$festado= utf8_decode($_POST["Estado"]);
$fcidade= utf8_decode($_POST["Cidade"]);
$fcep= utf8_decode($_POST["CEP"]);
$fendereco= utf8_decode($_POST["Endereco"]);
$fcurso= utf8_decode($_POST["Curso"]);
$finstituicao= utf8_decode($_POST["Instituicao"]);
$fconclusao= utf8_decode($_POST["Conclusao"]);
$fanoconclusao= utf8_decode($_POST["AnoConclusao"]);
*/








require_once("fpdf/fpdf.php");
 
$pdf = new FPDF('L','pt','A4');

//nome
$pdf->SetFont('Helvetica','I',13);
$pdf->Cell(40,10,"miimeira página pdf com FPDF");

$pdf->Output("arquivo.pdf","D");



 ?>