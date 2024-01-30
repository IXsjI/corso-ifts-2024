<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sommatoria</title>
</head>

<body>
    <?php
    //sommatoria di $a elevato a $i, con $i che varia da 0 a $n

    $a = 2;
    $i = 3;
    //a elevato alla i = a * a * a ... i volte
    $elevato = 1;
    for ($m = 1; $m <= $i; $m++) {
        $elevato = $elevato * $a;
    }

    $a = 2;
    $n = 10;
    $somma = 0;
    for ($s = 0; $s <= 3;$s++){
        $somma += $a;

    }
    echo "la sommatoria da 0 a 3 di $a = $somma"
    ?>
</body>

</html>