<?php

$html='
<!doctype html>
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

</html>
';
echo $html;
?>