<?php
<<<<<<< HEAD

$fnome= utf8_decode($_POST["Nome"]);
$femail= utf8_decode($_POST["EmailDoUsuario"]);
$ftelefone= utf8_decode($_POST["Telefone"]);
$fsexo= utf8_decode($_POST["Sexo"]);
/*
$festadocivil= utf8_decode($_POST["EstadoCivil"]);
*/
$fnascimento= utf8_decode($_POST["Nascimento"]);
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






=======
 $fnome= utf8_decode($_POST["Nome"]);
>>>>>>> parent of 5077946... 3.1.3
require_once("fpdf/fpdf.php");
 
$pdf= new FPDF("P","pt","A4");
 
$pdf->AddPage();
$pdf->SetFont('arial','B',12);
<<<<<<< HEAD
$pdf->Cell(45,20,"Estado Civil:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(0,20,"$festadocivil",0,1,'L');

*/

//nascimento
$pdf->SetFont('arial','B',12);
$pdf->Cell(37,20,"Nascimento:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(0,20,$fnascimento,0,1,'L');
/*

//estado
$pdf->SetFont('arial','B',12);
$pdf->Cell(37,20,"Estado:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(0,20,$festado,0,1,'L');

//cidade
$pdf->SetFont('arial','B',12);
$pdf->Cell(37,20,"Cidade:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(0,20,$fcidade,0,1,'L');

//CEP
$pdf->SetFont('arial','B',12);
$pdf->Cell(37,20,"CEP:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(0,20,$fcep,0,1,'L');

//endereço
$pdf->SetFont('arial','B',12);
$pdf->Cell(37,20,"Endereço:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(0,20,$fendereco,0,1,'L');

//curso
$pdf->SetFont('arial','B',12);
$pdf->Cell(37,20,"Sexo:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(0,20,$fcurso,0,1,'L');

//instituição
$pdf->SetFont('arial','B',12);
$pdf->Cell(37,20,"Instituicao:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(0,20,$finstituicao,0,1,'L');

//Conclusao e ano de conclusão
$pdf->SetFont('arial','B',12);
$pdf->Cell(37,20,$fconclusao,0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(0,20,$anoconclusao,0,1,'L');
=======
$pdf->Cell(0,5,"$fnome",0,1,'L');
$pdf->Ln(8);
$pdf->Output("arquivo.pdf","D");
>>>>>>> parent of 5077946... 3.1.3


 ?>