<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array associativi</title>
</head>

<body>
    <h1>Array associativi</h1>
    <?php
    // Array a indice numerico
    $a = [0 => "primo elemento", 1 => "secondo elemento"];
    echo $a[0];

    // Array associativo
    $a = ["giovanni" => 30, "luca" => "assente", 0 => 31, 'rodrigo' => 28];
    echo " " . $a['luca'];
    $a[] = 'ciao';
    print_r($a);

    // il ciclo for non può essere usato negli array associativo
    /*for ($i = 0; $i < count($a); $i++) {
        echo $a[$i];
    }*/


    // foreach obbligatorio per gli array associativi
    // per ogni elemento dell'array
    foreach ($a as $elemento) {
        echo $elemento . "br";
    }
    echo "<he>";

    echo "<hr>";
    //esempio con indici numerici
    $ai = [10, 20, 30, 40];
    foreach ($ai as $i => $valore) {
        //$valore e $i sono valore e indice numerico come riporatto nel ciclo for
        echo $valore;
        echo "<br>";
    }
    for ($i = 0; $i < count($ai); $i++) {
        $valore = $ai[$i];
        //... da adesso è come nel foreach sopra
    }
    echo "<hr>";

    // trovare il maggiiore di un array associativo
    $array_di_interi = ['giorgio' => 10, 'mario' => 20, 'lucia' => 28, 'fabio' => 28, 'franco' => 28, 'gigi' => 28, 'carlo' => 28];
    // $maggiore = 0;// oppure il primo elemento dell'array
    $i = 0;
    foreach ($array_di_interi as $chiave => $voto) {
        $i++;
        if ($i == 1 or $maggiore < $voto) {
            $maggiore = $voto;
            $vincitore = $chiave;
            $n_vincitori = 0;
            $vincitori = [];
        }
        /*if ($maggiore < $voto) {
            $maggiore = $voto;
            $vincitore = $chiave;
            $n_vincitori = 0;
            $vincitori = array();
        }*/
        if ($maggiore = $voto) {
            $n_vincitori++;
            $vincitori[] = $chiave;
        }
    }

    echo "maggiore = $maggiore<br>";
    echo "N vincitori = $n_vincitori<br>";
    echo "Vincitori: ";
    for ($j = 0; $j < count($vincitori); $j++) {
        echo "$vincitori[$j]";

        if ($j < count($vincitori) - 2) {
            echo ", ";
        }
        if ($j == count($vincitori) - 2) {
            echo " e ";
        }
        if ($j == count($vincitori) - 1) {
            echo ".";
        }


        /*if ($j == count($vincitori) - 2) {
            echo " e ";
        }else if ($j == count($vincitori) - 1) {
            echo ".";
        } else {
            echo ", ";
        }*/

    }

    echo "<hr>";

    //chi ha preso il voto maggiore (qual è la chiave di uno specifico elemento dell'array)
    foreach ($array_di_interi as $chiave => $voto) {
        // echo "[$chiave] => $voto <br>";
        echo "chiave = $chiave e voto = $voto <br>";
    }
    //in quanti e chi hanno preso il voto maggiore
    


    //per casa 
    //dato un array raggruppare tutti i valori uguali 
    //e indicare di ogni valore quanti ne sono stati trovati
    //es. [12, 5, "mario", 12, "giuseppe",12,5,"mario]
    //creare un array risultato che abbia come chiave il valore e come valore il n. di ripetizioni
    ['12' => 3, '5' => 2, 'mario' => 2, 'giuseppe' => 1]

        ?>

</body>

</html>