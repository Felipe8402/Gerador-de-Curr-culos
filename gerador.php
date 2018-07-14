<?php
require_once 'dompdf/autoload.inc.php';


// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class


$dompdf = new Dompdf();

$fnome= utf8_decode($_GET["nome"]);
$femail= utf8_decode($_GET["email"]);
$ftelefone= utf8_decode($_GET["telefone"]);
$fsexo= utf8_decode($_GET["sexo"]);
$festadocivil= utf8_decode($_GET["estado_civil"]);
$fnascimento= utf8_decode($_GET["nascimento"]);
$festado= utf8_decode($_GET["estado"]);
$fcidade= utf8_decode($_GET["cidade"]);
$fcep= utf8_decode($_GET["cep"]);
$fendereco= utf8_decode($_GET["endereco"]);
	//		$fcurso = utf8_decode($_GET["cursos"]);
$finstituicao = utf8_decode($_GET["instituicao"]);
$fanoinicial = utf8_decode($_GET["anoinicial"]);
$fconclusao = utf8_decode($_GET["conclusao"]);
$fanofinal = utf8_decode($_GET["anofinal"]);
$fqualificacoes = utf8_decode($_GET["qualificacoes"]);

/*
// EXPERIÊNCIA PROFISSIONAL 1
$fempresa1 = utf8_decode($_GET["Empresa1"]);
$ffuncao1 = utf8_decode($_GET["Funcao1"]);
$fdataentrada1 = utf8_decode($_GET["DataEntrada1"]);
$fdatasaida1 = utf8_decode($_GET["DataSaida1"]);
$fatividadesrealizadas1 = utf8_decode($_GET["AtividadesRealizadas1"]);
*/

$dompdf->loadHtml(
	"Meu nome é ".$fnome." e nasci em ".$fnascimento."<br>"."Este é meu telefone para contato".$ftelefone."<br>".
	"O email que eu utilizo é <h1>".$femail."<h1>"
);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("exemplo.pdf");
?>