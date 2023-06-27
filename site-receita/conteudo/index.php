<?php 
 include_once("../control.php");
?>


<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="menu.js"></script>
    <link rel="stylesheet" href="/site-receita/css/index.css" type="text/css" media="all">
    <title>Document</title>
</head>
<body>
    <h1>receitas doces e salgados</h1>
    <div class="container_imagem">
       
        <div class="grupo-esquerdo">
        <a href="/doce_one.php">
          <img src="<?php echo $conteudo_doce_one['caminho_img'];?>" alt="">
        </a> 
        </div>
       
        <div class="grupo-direito">
        <a href="/doce/salgado_one.php">
          <img src="<?php echo $conteudo_doce_one['caminho_img'];?>" alt="">
        </a>
        </div>
    </div>
 
</body>
</html>