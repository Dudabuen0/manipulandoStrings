<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Substr!</title>
</head>
<body>
    <?php
    $text = "O perigo de verdade não é que computadores passem a pensar como humanos, mas sim que humanos passem a pensar como o computador.";

    $result = substr($text, 0, 20); //Posição inicial igual a 0, comprimento igual a 20

    echo $result;
    ?>
</body>
</html>