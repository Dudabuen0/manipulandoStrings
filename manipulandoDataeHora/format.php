<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Date!</title>
</head>
<body>
    <?php
         $atual = new DateTime ();
         $especifica = new DateTime ('2009-02-03');
         $texto = new DateTime (' +1 month');

         echo $atual ->format('d-m-Y H:i:s');
    ?><br /> <?php
        echo $especifica ->format('2009-02-03');
    ?><br /> <?php
        echo $texto ->format('d-m-Y H:i:s');
    ?> 
</body>
</html>