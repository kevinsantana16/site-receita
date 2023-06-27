<?php
include_once("conexao.php");
include_once("processa_func.php");

################################################################
$doce_one = new Select_Receitas(4, $conexao);
$conteudo_doce_one = $doce_one->Select_Receita();

$doce_two = new Select_Receitas(3, $conexao);
$conteudo_doce_two = $doce_two->Select_Receita();

$doce_three = new Select_Receitas(3, $conexao);
$conteudo_doce_three = $doce_three->Select_Receita();

################################################################
$salgado_one = new Select_Receitas(3, $conexao);
$conteudo_salgado_one = $salgado_one->Select_Receita();

$salgado_two = new Select_Receitas(3, $conexao);
$conteudo_salgado_two = $salgado_two->Select_Receita();

$salgado_three = new Select_Receitas(3, $conexao);
$conteudo_salgado_three = $salgado_three->Select_Receita();

?>