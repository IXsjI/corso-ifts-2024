<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
    // $a = []; //inizializza un array vuoto
    // $a = array(); //stessa cosa

    $a = [10, 20, 30];
    $a = [0 => 10, 1 => 20, 2 => 30]; //stessa inizializzazione scritta sopra
    //$a[0] -> rappresenta il 1° elemento che ha il valore 10
    //$a[1] -> rappresenta il 1° elemento che ha il valore 20
    //$a[2] -> rappresenta il 1° elemento che ha il valore 30

    echo $a[0];
    $a[0] = "primo elemento ";
    echo "ora vale " . $a[0]; //nelle versioni precedental php 8 gli array non possono ssere dentro "" o dentro ma con {}
    $a[3] = "quarto elemento";
    $a[] = "elemento in fondo all'array"; //inserimento in fondo all'array  
    //$a[100] = "100";
    //$a[] = "che indice avrà???";
    echo "<br>";
    // print_r( );

    echo $a[0] . "<br>";
    echo $a[1] . "<br>";
    echo $a[2] . "<br>";

    echo "<hr>";

    //se ho indici da 0 a 4 => elementi tot.
    for ($i = 0; $i < 5; $i++) {
        echo ($i + 1) . ")" . $a[$i] . "<br>";
    }
    echo "<hr>";

    //stampo gli elementi pari di $a

    for ($i = 0; $i < 5; $i++) {
        echo ($i + 1) .") ". $a[$i] ;
        if ($i % 2 == 0) {
            //if ( !($i % 2 )) { stessa condizione scritta sopra
            echo  " (indice pari)<br>";
        } else {
            echo  " (indice dispari)<br>";
        }
    }
    echo "<hr>";

    count($a); //restituisce il numero di elemento dell'array

    $a = [1, 2, 3, 4, 5, 6];
    $pari = 0;
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] % 2 == 0){
            $pari++;
            echo $pari . ") " .$a[$i];
            echo " è pari<br>";
        }
        // else{
        //     echo " è dispari<br>";
        // }
    }
    echo "Ci sono $pari numeri pari";

    echo "<hr>";

    //restituzione di numeri random
    // rand(0,100);

    for ($i=0;$i<20;$i++) {
        $a[$i] = rand(1,30);
    }
    print_r($a);

    echo "<hr>";
    //trova il valore minimo (massimo)
    $minimo = $massimo = $a[0];
    $minimi = 0;
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] < $minimo) {
            //elemento i-esimo minore del minore trovato fino ad ora
            $minimo = $a[$i];
            $minimi = 0; //resetto il n. di min trovati
        }
        if ($a[$i] == $minimo) {
            $minimi++; //incremento i minimi trovati
        }
        if ($a[$i] > $massimo) {
            $massimo = $a[$i];
        }
        //quante volte trovo il numero 101
        if ($a[$i] == 101) {
            $lodi++;
        }
    }
    echo "minimo = $minimo (ce ne sono $minimi) - massimo = $massimo";
    echo "<hr>";

    $ciao[0] = 1;
    $ciao[1] = 1;
    $ciao[2] = 1;
    $ciao[3] = 1;

    print_r($ciao);

    ?>
</body>

</html>
