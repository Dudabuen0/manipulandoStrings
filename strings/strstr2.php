<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Strstr!</title>
</head>
<body>
    <?php
        findZero('01234'); //Found a zero

        function findZero($numberString){
            if(strstr($numberString, '0')){
                echo "Encontrado o Zero!";
            }else{
                echo "Zero não encontrado!";
            }
        }
    ?>
</body>
</html>