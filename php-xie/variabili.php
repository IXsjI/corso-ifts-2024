<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabili</title>
</head>

<body>

    <?php
    $a = 1 + 5 * (2 + 3);
    echo "Il valore di a = $a";

    $a = 'stringa n.1';
    echo "<br>Il nuovo valore di a è $a";
    echo '<hr>';
    // esercizi sulle stringhe 
    // '\' serve a eliminare la funzionalità del carattere che si vuole inserire come apici tra apici
    echo 'stringa con \'apici\' ';
    echo '<br>';
    echo "Fabrizio è andato in \"BAGNO\" ";
    echo '<br>';
    echo "Questo è il carattere \\";
    echo '<hr>';

    // differenza tra ' e " nelle' echo
    echo "a = $a";
    // " interpreta le variabili
    echo '<br>';
    echo 'a = $a';
    //  ' non interpreta le variabili ma visualizza il nome della variabile
    echo '<hr>';

    // concatenare le stringhe "." --- "stirnga 1"."stringa 2"
    $x = 1 + 1;
    $s = "stringa 1" . " " . "stringa 2";
    echo $s;
    echo "<br>";
    echo "Il valore di x è " . $x;
    echo "<hr>";

    echo "risultato = " . (1 + 1);

    echo "<hr>";
    // .= += ++ %
    $frase = "frase iniziale ";
    $frase = $frase . "parte 2 ";
    $frase .= "parte 3";
    // la parte 2 e la parte 3 sono scritti nello stesso modo ma fanno la stessa cosa
    echo $frase;

    echo "<br>";
    $x = 10;
    $x += 5; // è la stessa cosa di: $x = $x + 5
    echo $x;
    echo "<br>";

    $y = 100;
    echo $y++; // : $y = $y + 1
    echo "<br>";
    echo $y;

    echo "<hr>";

    $z = 100;
    echo ++$z;
    // non è la stessa cosa di quello sopra anche se dà lo esso risultato
    echo "<br>";
    echo $z;
    echo "<hr>";

    // % = modulo (resto della divisione)
    echo "numero = $x";
    echo "<br>";
    echo "diviso 2 ha resto = " . ($x % 2);
    echo "<br>";
    echo "Il numero è " . ($x % 2 ? "dispari" : "pari");
    echo "<br>";
    // scrivere se è pari o dipari


    echo "<hr>";
    // operatore ternario
    // condizione? se sì : se no
    echo "x = $x e z = $z";
    echo "<br>";
    // echo ($z == $x ? '$x = $z' : "falso");
    echo ($z != $x ? 'vero' : "falso");
    // le () non sono necessarie

    echo "<hr>";
    // contare quante paia di scarpe comprare per $x piedi
    $x = 9;
    echo "Numero piedi = $x";
    echo "<br>";
    $n = ($x % 2 ? $x / 2 + 0.5 : $x / 2);
    echo "Devi comprare " . $n . " paia di scarpe";
    ?>

</body>

</html>