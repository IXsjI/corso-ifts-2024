<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizi sui cicli</title>
</head>

<body>
    <?php
    $i = 1;
    while ($i <= 10) {
        //echo "i = $i";
        if ($i % 2 == 0) {
            //$i è pari
            echo $i;
            $i = $i + 2;
        } else {
            $i++;
        }
    }
    echo "Fine ciclo i = $i";
    echo "<hr>";

    //stesso codice con il for
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo $i;
        }
    }

    echo "<hr>";
    //conto i cicli
    //1. nuova var fuori dal ciclo
    $contagiri = 0;
    $contapari = 0;
    $inizio = 1;
    $fine = 11;
    for ($i = $inizio; $i < $fine; $i++) {
        //echo $i;
        //2. incremento nel ciclo
        $contagiri++;

        if ($i % 2 == 0) {
            $contapari++;
        }
    }
    echo "contagiri = $contagiri<br>";
    echo "contapari = $contapari<br>";

    echo "<hr>";
    //somma dei numeri naturali da $inizio a $fine
    //poi solo dei pari!
    $somma = 0;
    $ultima_i_corretta = $inizio;
    for ($i = $inizio; $i < $fine; $i++) {
        if ($i % 2 == 0) {
            $somma += $i;
            if ($somma <= 15) {
                $ultima_i_corretta = $i;
            }

            if ($somma >= 15) {
                break;
            }
        }
    }
    echo "somma = $somma con i = " . ($ultima_i_corretta);
    ?>

</body>

</html>