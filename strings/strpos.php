<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Strpos!</title>
</head>
<body>
    <?php
    $text = "O perigo de verdade não é que computadores passem a pensar como humanos, mas sim que humanos passem a pensar como o computador.";

    $lenght = strpos($text, "computadores passem"); //Posição onde inicia a string "computadores passem" = 30

    $result = substr($text, 0,$lenght); //Posição inicial = 0, comprimento = 20

    echo $result;
    ?>
</body>
</html>