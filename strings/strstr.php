<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Strstr!</title>
</head>
<body>
    <?php
     $text = "O perigo de verdade não é que computadores passem a pensar como humanos, mas sim que humanos passem a pensar como o computador.";

     $result = strstr($text, "não é que");

     echo $result;
    ?>
</body>
</html>