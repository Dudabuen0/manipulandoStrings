<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Include!</title>
</head>
<body>
    <?php
    include "teste.php"; //Chamando o codigos externo teste.php
    ?>

    <p>Após o Include</p>
    <p>O conteudo do programa teste.php é <?php echo $c; ?></p>

</body>
</html>