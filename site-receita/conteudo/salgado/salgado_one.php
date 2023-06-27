<?php 
include_once("C:/xampp/htdocs/site-receita/control.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $conteudo_doce_one['titulo']?></h1>
    <div>
        <img src="<?php echo $conteudo_doce_one['caminho_img']?>" alt="">
    </div>
    <div><?php echo $conteudo_doce_one['texto']?></div>
</body>
</html>