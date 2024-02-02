<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cicli</title>
</head>

<body>
    <?php
    //while (condizione del ciclo) {azioni che deve ripetere}--- si può usare break per interrompere forzatamente il ciclo
    $a = 10;
    while ($a <= 20) {
        echo $a . "<br>";
        $a++;
    }
    echo "<hr>";
    $a = 10;
    $c = 0;
    /*echo "<ol>";
    while ($a >= 0){ //metodo html
        echo "<li>"."Numero = ". $a."</li>";
        $a--;

    }
    echo "</ol>";*/

    while ($a >= 0) { //metodo php
        echo ++$c . "° Numero = " . $a . "<br>";
        $a--;
    }
    echo "<hr>";

    /*$i = 1;
    $c = 0;
    while ($i <= 10) {
        if ($i % 2 == 0) {
            echo $i++ . "<br>";
            $c++;
            if ($c == 3) { //vabene anche aggiungere $c < 3 nella condizione del while
                break;
            }
        }
        $i++;
    }
    echo "Trovati " . $c . " numeri pari";
    echo "<hr>";*/

    $i = 1;
    $c = 0;
    while ($i <= 10 && $c < 3) { // è meglio non usare il break se possibile: questa è una soluzione alternativa all'es sopra
        if ($i % 2 == 0) {
            echo $i++ . "<br>";
            $c++;
        }
        $i++;
    }
    echo "Trovati " . $c . " numeri pari";

    echo "<hr>";

    //ciclo for (dichiaro variabile;condizione di continuazione;azione che deve terminare il ciclo) {azioni che deve ripetere}
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }
    echo "<hr>";

    //sommatoria
    $tot = 0;
    $a = 2;
    $n = 6;
    echo "a = ";
    for ($m = 0; $m <= $n; $m++) {
        echo "$a * $m";
        if ($m < $n) {
            echo " + ";
        }
        $tot += $a * $m;
    }
    echo " = $tot";

    echo "<hr>";
    //qual è il $m-esimo multiplo di $n da $inizio a $fine?
    $inizio = 100;
    $fine = 200;
    $n = 10;
    $m = 4;
    $multipli = 0; //n. multpli trovati
    for ($i = $inizio; $i <= $fine; $i++) {  //poi in un altro modo!!!
        if ($i % $n == 0) { //multiplo!
            //allora ti conto
            $multipli++;
            if ($multipli == $m) {
                $risultato = $i;
                break;
            }
        }
    }

    echo " il $m ° multiplo di $n da $inizio a $fine è $risultato";



    //stesso esercizio da terminare a casa con for e while
    $multipli = 0; //n. multpli trovati
    $i = $inizio;
    while ($multipli == $m) {
        //...
        $i++;
        if ($i == $fine) {
            break;
        }
    }
    for ($i = $inizio; $multipli == $m; $i++) {
        if ($i == $fine) {
            break;
        }
        //...
    }

    ?>
</body>

</html>