<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
        <a href="index.php">pagina inicial</a>

            <h1>Cadastro</h1>

        <form action="processa.php" method="POST" enctype="multipart/form-data">
           
            <input class="receita" type="text" name="titulo" placeholder="titulo" maxlength="20" required autofocus >
            <br>
            <input class="receita" type="file" name="texto" placeholder="texto" required>
            <br>
            
            <input class="receita" type="file" name="imagem" required>
            <label for="imagem">insira a imagem</label>
            <br>
            
            <input class="receita" type="submit" value="Enviar">
        </form>
</body>
</html>
