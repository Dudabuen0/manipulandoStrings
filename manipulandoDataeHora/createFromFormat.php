<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Date!</title>
</head>
<body>
    <?php
    $data = '20-9-2015';
    $data1 = DateTime::createFromFormat("d-m-Y", $data);
    echo $data1->format("d-m-Y");
    ?>
</body>
</html>