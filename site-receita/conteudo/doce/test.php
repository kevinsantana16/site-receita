<?php 
include_once("C:/xampp/htdocs/site-receita/control.php");
?>

<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/site-receita/css/conteudo.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <h1 class="h1_header">site receita</h1>
    <nav> 
      <a href="index.php">inicio</a> <a href=""></a>
    </nav>
    </header>
    <main>
        <section>
            <h1><?php echo $conteudo_doce_one['titulo']?></h1>
            <div>
                <img src="<?php echo $conteudo_doce_one['caminho_img']?>" alt="">
            </div>
            <div>
                <p><?php echo $conteudo_doce_one['texto']?></p>
            </div>
            <aside>

            </aside>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>