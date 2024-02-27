<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Array associativi e bidimensionali</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <?php
    $a = [
        ['a' => 1, 'b' => 2, 'c' => 3],
        ['a' => 10, 'b' => 20, 'c' => 300],
        ['a' => 100, 'b' => 20, 'c' => 300]
    ];


    //es.1 trovare il valore max memorizzato nella chiave c
    //es. 2 quanti elementi hanno questo valore max?
    //es. 3 quali? (memorizzarli in un nuovo array)
    
    //io
    /*foreach ($a as $a_key => $b) {
        foreach ($b as $b_key => $b_val) {
            if ($b_key == 'c') {
                if ($a_key == 0 or $b_val > $max) // controlla la prima condizione scritta poi la seguente quindi se scrivi ($b_val > $max) prima $max non è definita, se la scrivi dopo ha un valore perchè al primo giro dopo ($a_key == 0) visto che è vera nn guarda la seconda condizione
                    $max = $b_val;
                // if ($b_val > $max)
                //     $max = $b_val;
            }
        }
    }*/

    foreach ($a as $k => $riga) {
        if ($k == 0 or $riga['c'] > $max) {
            $max = $riga['c'];
            $q = 0;
            $r = [];
        }
        // if ($riga['c'] > $max) {
        //     $max = $riga['c'];
        //     $q = 0;
        //     $r = [];
        // }
        if ($riga['c'] = $max) {
            $q++;
            $r[] = $riga;
        }
    }

    // echo "valore maggiore con chiave c =  $max --- quantità = $q";
    echo $max;
    echo "<hr>";

    //es.4 creare un nuovo array 
    //con chiave il valore di c 
    //e valore il n. di volte che compare nell'array iniziale
    //esempio
    
    $a = [
        ['a' => 110],
        ['a' => 10],
        ['a' => 110],
        ['a' => 110]
    ];

    $ris = [];
    foreach ($a as $a_key => $riga) {

        if (array_key_exists($riga['a'], $ris))
            $ris[$riga['a']]++;
        else
            $ris[$riga['a']] = 1;
    }
    print_r($ris);
    echo "<hr>";



    //esercizio pre-verifica
    $partita1 = array('squadra1' => 'Inter', 'squadra2' => 'Bologna', 'risultato' => '1');
    $partita2 = array('squadra1' => 'Juventus', 'squadra2' => 'Inter', 'risultato' => 'X');
    $partita3 = array('squadra1' => 'Torino', 'squadra2' => 'Sampdoria', 'risultato' => '2');
    $schedina = [$partita1, $partita2, $partita3];

    $n_pareggi = 0;
    foreach ($schedina as $key => $partita) {
        if ($partita['risultato'] == "X")
            $n_pareggi++;
    }
    echo "N pareggi = $n_pareggi";
    echo "<hr>";

    $punteggio = 0;
    foreach ($schedina as $key => $partita) {
        $mia_s = rand(1, 3);
        if ($mia_s == 3) {
            $mia_s = "X";
        }
        $mia_schedina[$key] = ['risultato' => $mia_s];
        // $schedina[$key]['risultato'] = $mia_s; modifica quello originale
    
        //metodo prof
        // $risultato = rand(0, 2);
        // $risultato = ($risultato == 0) ? 'X' : $risultato;
        // $mia_schedina[$k] = ['risultato' => $risultato];
    
        //contare il punteggio
        if ($mia_s == $partita['risultato'])
            $punteggio++;

    }
    echo "Punteggio = $punteggio<br>";
    print_r($mia_schedina);
    echo "<hr>";


    //stampare in una tabella la schedina con a fianco anche il mio risultato 
    //mettendo in grassetto le righe con risultato uguale
    echo '<table class="table table-striped">';
    foreach ($schedina as $key => $partita) {
        $g = '';
        echo "<tr>";
        foreach ($partita as $k => $valore) {
            echo "<td>";
            echo "$valore";
            echo "</td>";
        }
        if ($mia_schedina[$key]['risultato'] == $schedina[$key]['risultato']) {
            $g = "style = 'font-weight:bold'";
        }
        echo "<td $g>";
        echo $mia_schedina[$key]['risultato'];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";


    //definire una funzione che conta quante volte il risultato è X
    //definire una funzione che conta quante volte il valore della chiave data è X
    //definire una funzione che conta quante volte il valore della chiave data è quello passato come parametro
    
    function conta_risultati($s, $chiave, $valore = 'x') 
    // = 'x' è un valore default cioè se non metto questo valore quando uso questa funzione il valore sarà 'x' 
    // quindi è un valore opzionale cioè che vabene anche se nn lo metto quando uso la funzione
    // se non metto = '' devo mettere il valore per forza quando uso la funzione 
    // i valori opzionali devono stare alla fine
    {
        $c = 0;
        foreach ($s as $riga) {
            if ($riga[$chiave] == $valore) {
                $c++;
            }
        }
        return $c;
    }

    echo "Risultati X = " . conta_risultati($schedina, 'risultato', 'X') . "<br>";
    echo "Risultati 1 = " . conta_risultati($schedina, 'risultato', '1') . "<br>";
    echo "Risultati 2 = " . conta_risultati($schedina, 'risultato', '2') . "<br>";
    
    echo "Miei Risultati X = " . conta_risultati($mia_schedina, 'risultato', 'X') . "<br>";
    echo "Miei Risultati 1 = " . conta_risultati($mia_schedina, 'risultato', '1') . "<br>";
    echo "Miei Risultati 2 = " . conta_risultati($mia_schedina, 'risultato', '2') . "<br>";
    ?>
</body>

</html>