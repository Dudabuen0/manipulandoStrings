<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função modify!</title>
</head>
<body> 
    <?php
        $data = new DateTime('16-03-2014');
        $data -> modify(' +1 month');
        echo $data->format('d-m-Y H:i:s');
    ?>
</body>
</html>