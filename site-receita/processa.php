<?php 
include_once("conexao.php");
include_once("processa_func.php");

$titulo = $_POST["titulo"];

$texto_cru = $_FILES["texto"]["tmp_name"];
$imagem = new Imagem($_FILES["imagem"]);

$texto = extrator_text($texto_cru);

$titulo = mysqli_real_escape_string($conexao, $titulo);
$texto = mysqli_real_escape_string($conexao, $texto);

$imagem_insert = $imagem->imagem_caminho();

$sql = "INSERT INTO receita (titulo, texto, caminho_img) VALUES ('$titulo', '$texto', '$imagem_insert')";

$salvar = mysqli_query($conexao,$sql);

mysqli_close($conexao);
?> 

