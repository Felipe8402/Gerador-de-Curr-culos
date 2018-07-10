<?php

// DADOS PESSOAIS
$fnome= utf8_decode($_POST["Nome"]);
$femail= utf8_decode($_POST["Email"]);
$ftelefone= utf8_decode($_POST["Telefone"]);
$fsexo= utf8_decode($_POST["Sexo"]);
$festadocivil= utf8_decode($_POST["EstadoCivil"]);
$fnascimento= utf8_decode($_POST["Nascimento"]);
$festado= utf8_decode($_POST["Estado"]);
$fcidade= utf8_decode($_POST["Cidade"]);
$fcep= utf8_decode($_POST["CEP"]);
$fendereco= utf8_decode($_POST["Endereco"]);

// FORMAÇÃO PROFISSIONAL 1
$fcurso1 = utf8_decode($_POST["Curso1"]);
$finstituicao1 = utf8_decode($_POST["Instituicao1"]);
$fanoinicial1 = utf8_decode($_POST["AnoInicial1"]);
$fconclusao1 = utf8_decode($_POST["Conclusao1"]);
$fanofinal1 = utf8_decode($_POST["AnoFinal1"]);
$fqualificacoes1 = utf8_decode($_POST["Qualificacoes1"]);

// FORMAÇÃO PROFISSIONAL 2
$fcurso2 = utf8_decode($_POST["Curso2"]);
$finstituicao2 = utf8_decode($_POST["Instituicao2"]);
$fanoinicial2 = utf8_decode($_POST["AnoInicial2"]);
$fconclusao2 = utf8_decode($_POST["Conclusao2"]);
$fanofinal2 = utf8_decode($_POST["AnoFinal2"]);
$fqualificacoes2 = utf8_decode($_POST["Qualificacoes2"]);

// EXPERIÊNCIA PROFISSIONAL 1
$fempresa1 = utf8_decode($_POST["Empresa1"]);
$ffuncao1 = utf8_decode($_POST["Funcao1"]);
$fdataentrada1 = utf8_decode($_POST["DataEntrada1"]);
$fdatasaida1 = utf8_decode($_POST["DataSaida1"]);
$fatividadesrealizadas1 = utf8_decode($_POST["AtividadesRealizadas1"]);

// EXPERIÊNCIA PROFISSIONAL 2
$fempresa2 = utf8_decode($_POST["Empresa2"]);
$ffuncao2 = utf8_decode($_POST["Funcao2"]);
$fdataentrada2 = utf8_decode($_POST["DataEntrada2"]);
$fdatasaida2 = utf8_decode($_POST["DataSaida2"]);
$fatividadesrealizadas2 = utf8_decode($_POST["AtividadesRealizadas2"]);
