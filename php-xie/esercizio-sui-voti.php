<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio voti</title>
</head>

<body>
    <?php
    $n_studenti = rand(20, 50);
    $studenti = $n_studenti - 2;
    $lodi = 0;
    $q_minimi = 0;
    $somma_voti = 0;
    // $sfondo = "#eee";
    echo "<ol>";
    for ($i = 0; $i < $studenti; $i++) {
        $voti[$i] = rand(1, 101);
        $somma_voti += $voti[$i];
        $sfondo = ($i % 2) ? "#fff" : "#eee";
        // $sfondo = ($voti[$i] == 101) ? "#f00" : $sfondo;
    

        // $sfondo = "#eee";
        // if ($i % 2) {
        //     $sfondo = "#fff";
        // }
        // if ($voti[$i] == 101) {
        //     $sfondo = "#fcc";
        // }
    

        $grassetto = "font-style: italic;";
        if ($i==0){
            $minimo = $massimo = $voti[0];
        }
        if ($voti[$i] >= 60) {
            $grassetto = "font-weight: bold;";
        }
        echo "<li><div style='background: $sfondo; $grassetto'>" . $voti[$i] . " </div></li>";

        if ($voti[$i] == 101) {
            $lodi++;
        }

        if ($minimo > $voti[$i]) {
            $minimo = $voti[$i];
            $q_minimi = 0;
        }
        if ($voti[$i] == $minimo) {
            $q_minimi++;
        }


        if ($massimo < $voti[$i]) {
            $massimo = $voti[$i];
        }

    }
    echo "</ol>";
    
    // $minimo = $massimo = $voti[0];
    // $q_minimi = 0;
    // for ($i = 0; $i < count($voti); $i++) {
    //     if ($minimo > $voti[$i]) {
    //         $minimo = $voti[$i];
    //         $q_minimi = 0;
    //     }
    //     if ($voti[$i] == $minimo) {
    //         $q_minimi++;
    //     }


    //     if ($massimo < $voti[$i]) {
    //         $massimo = $voti[$i];
    //     }
    // }
    
    echo "N. lodi = $lodi<br>";
    echo "Il voto minimo è $minimo - quantità $q_minimi<br>";
    echo "Il voto massimo è $massimo<br>";
    echo "La media è ". round($somma_voti / count($voti));


    // echo $studenti;
    

    ?>
</body>

</html>