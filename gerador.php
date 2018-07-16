<?php
require_once 'dompdf/lib/html5lib/Parser.php';
require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
require_once 'dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();


// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class


$dompdf = new Dompdf();

/*
// EXPERIÊNCIA PROFISSIONAL 1
$fempresa1 = utf8_decode($_GET["Empresa1"]);
$ffuncao1 = utf8_decode($_GET["Funcao1"]);
$fdataentrada1 = utf8_decode($_GET["DataEntrada1"]);
$fdatasaida1 = utf8_decode($_GET["DataSaida1"]);
$fatividadesrealizadas1 = utf8_decode($_GET["AtividadesRealizadas1"]);
*/

$fnome= ($_POST["nome"]);
$femail= ($_POST["email"]);
$ftelefone= ($_POST["telefone"]);
$fsexo= ($_POST["sexo"]);
$festadocivil= ($_POST["estado_civil"]);
$fnascimento= ($_POST["nascimento"]);
$festado= ($_POST["estado"]);
$fcidade= ($_POST["cidade"]);
$fcep= ($_POST["cep"]);
$fendereco= ($_POST["endereco"]);
$finstituicao = ($_POST["instituicao"]);
$fanoinicial = ($_POST["anoinicial"]);
$fconclusao = ($_POST["conclusao"]);
$fanofinal = ($_POST["anofinal"]);
$fqualificacoes = ($_POST["qualificacoes"]);
$fobjetivos = ($_POST["objetivos"]);
$fempresa = ($_POST["empresa"]);
$ffuncao = ($_POST["funcao"]);
$fdataentrada = ($_POST["dataentrada"]);
$fdatasaida = ($_POST["datasaida"]);
$fatividades = ($_POST["atividades"]);
$fcurso = ($_POST["curso"]);

/* Preparação do documento final
 */
$documentTemplate = '<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Currículos</title>
</head>

<body>
    <div id="nome" style="text-align:center; line-height:20%">
        <h1>'.$fnome.'</h1>
        <hr>
        <div id="dadospessoais" style="line-height:30%;">
            <p>'.$femail.' • '.$ftelefone.'</p>
            <p>'.$fnascimento.' • '.$festadocivil.'</p>
            <p>'.$fcidade.' • '.$festado.' • '.$fcep.'</p>
            <p>'.$fendereco.'</p>
        </div>
    </div>

    
    <div id="objetivo" style="border: 0; margin-top: 2ex;">
    <h2 style="font-size:large; line-height:5%;">OBJETIVO</h2>
        <p>'.$fobjetivos.'</p>
    </div>
        <br>
    

    <div id="formacaoprofissional" style="border: 0; margin-top: 2ex;">
        <h2 style="font-size:large; line-height:5%;">FORMAÇÃO PROFISSIONAL</h2>
            <div style="line-height:15%;">
                <p>Curso: '.$fcurso.'</p>
                <p>Instituição: '.$finstituicao.'</p>
                <p>Ano inicial: '.$fanoinicial.'</p>
                <p>'.$fconclusao.' '.$fanofinal.'</p>
            </div>
    </div>
    <br>
    
    <div id="qualificacoes" style="border: 0; margin-top: 2ex;">
    <h2 style="font-size:large; line-height:5%;">QUALIFICAÇÕES</h2>
        <p>'.$fqualificacoes.'</p>       
    </div>   
        <br>
    <div id="formacaoprofissional" style="border: 0; margin-top: 2ex;">
        <h2 style="font-size:large; line-height:5%;">EXPERIÊNCIA PROFISSIONAL</h2>
    <div id="experienciaprofissional" style="line-height:15%;">
        <p>Empresa: '.$fempresa.'</p>
        <p>Função: '.$ffuncao.'</p>
        <p>Data de entrada: '.$fdataentrada.'</p>
        <p>Data de saída: '.$fdatasaida.'</p>
    </div>
    
   <h4>Atividades desempenhadas</h4>
<p>'.$fatividades.'</p> 
</div>


</body>

</html>';


$dompdf->loadHtml($documentTemplate);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', '');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("MeuCurriculo.pdf");
?>