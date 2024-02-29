<?php
/** 
 * funzione che somma i parametri in ingresso
 * @param int | float $a primo addendo
 * @param int | float $b secondo addendo
 * @return int | float somma del primo e secondo addendo 
 */
function somma($a, $b)
{
    $somma = $a + $b;
    return $somma;
}

/**
 * DA FARE
 * creare la fz che ha come ingresso una stringa con la data "Y-m-d" 
 * e uscita in formato "d/m/y"
 */
function datedb2user()
{

}

/**
 * n! = n * (n-1)!
 * 1! = 1
 */
function fattoriale($n)
{
    if ($n == 1)
        return 1;
    return $n * fattoriale($n - 1);
}

/**
 * inizializzazione di un array di $numero elementi
 * @param int $numero n. elementi dell'array
 */
function init_array($numero = 10)
{
    for ($i = 0; $i < $numero; $i++) {
        $a[$i] = rand(0, 100);
    }
    return $a;
}
/**
 * funzione per trovare il valore massimo in un array, se non è un array restituisce il valore 
 * 
 */
function max_array($a)
{
    if (!is_array($a))
        return $a;
    $i = 0;
    foreach ($a as $v) {// meglio scrivere un odice facile da capire rispetto a un corto difficile da capire
        if ($i == 0)
            $max = $v;
        $i++;
        if ($v > $max) {
            $max = $v;
        }
        /*
        if ($i == 0 or $v > $max)
            $max = $v;
        $i++;
        */
    }
    return $max;
}

//non perfetta
/**
 * random da 0 a $max
 * @param int $max
 * @return int valore random
 */
function myrand($max)
{
    return date("s") % $max;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creare una funzione</title>
</head>

<body>
    <?php
    $a = 1;
    $b = 2;
    $somma = somma($a, $b);
    echo $somma;

    echo "<hr>";
    echo myrand(30);
    echo "<hr>";

    $n = 3;
    echo "Il fattoriale di $n è " . fattoriale($n);
    echo "<hr>";

    //crea una funzione che inizializza un array con myrandom() valori random
    
    //scrivere la funzione max_array che restituisce 
    //il valore massimo di un array
    $n = myrand(30);
    $array_int = init_array($n);
    $max = max_array($array_int);
    print_r($array_int);
    echo "Max = $max";

    ?>
</body>

</html>