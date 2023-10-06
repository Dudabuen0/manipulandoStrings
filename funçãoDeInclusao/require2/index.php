<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função require!</title>
</head>
<body>
    <?php
    require "teste.php";
    
    ?>
    <p>Após o include</p>
    <p>O conteudo do programa teste.php é esse </p>
    <?php
    require "funcao.php";
    ?>
</body>
</html>