<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função SetDate!</title>
</head>
<body>
    <?php
    $data = new DateTime('18-07-2018');
    $data ->setDate(2024, 12, 25); //No setdate usasse o formato americano
    echo $data ->format('d-m-Y H:i:s');
    ?>
</body>
</html>