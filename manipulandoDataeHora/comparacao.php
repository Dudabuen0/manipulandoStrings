<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparação!</title>
</head>
<body>
    <?php
        //PHP program to compare dates

        //Declare duas datas e inicialize-as 
        $date1 = "08/05/2019";
        $date2 = "16/11/2020";

        //Use o operador de comparação para comparar datas
        if ($date1 > $date2)
            echo "$date1 é mais recente que $date2!";
        else
            echo "$date1 é mais antiga que $date2!";
    ?>
</body>
</html>