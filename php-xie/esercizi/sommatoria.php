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
    $n = 3;


    //a elevato alla i = a * a * a ... i volte
    $a = 2;
    $i = 4;
    // a alla 3??
    $elevato = $a * $a * $a; // a elevato a 3
    
    $elevato_1 = $a;
    $elevato_2 = $a * $a;
    $elevato_3 = $a * $a * $a;

    //rendo i dinamico (non noto a priori)
    
    $elevato = 1; //1 elemento neutro della moltiplicazione
    for ($e = 1; $e <= $i; $e++) {
        //$a elevato a $e
        $elevato = $elevato * $a;
    }
    echo "$a elevato a $i = $elevato <br>";


    //sommo $a per 3 ($n) volte
    $n = 3;

    $somma = 0;
    // for ($s = 0; $s <= $n; $s++) {
    //     $somma += $a;
    // }
    // 
    
    //sommo l'elevato a potenza
    $somma = 0;
    for ($s = 0; $s <= $n; $s++) {

        //... elevato $a elevato alla $i (esponente)
        $i = $s;

        $elevato = 1; //1 elemento neutro della moltiplicazione
        for ($e = 1; $e <= $i; $e++) {
            //$a elevato a $e
            $elevato = $elevato * $a;
        }

        $somma += $elevato;
    }

    echo "la sommatoria di i da 0 a $n di $a elevato a i = $somma<br>";
    ?>
</body>

</html>