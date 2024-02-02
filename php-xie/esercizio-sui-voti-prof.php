<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voti</title>
</head>

<body>
    <?php
    $studenti = rand(20, 50);
    $studenti = $studenti - 2;
    //echo $studenti;
    for ($i = 0; $i < $studenti; $i++) {
        $voti[$i] = rand(1, 101);
    }
    //print_r($voti);
    

    $lodi = 0;
    $minimo = $voti[0];
    $minimi = 0;
    echo "<ol>";
    for ($i = 0; $i < count($voti); $i++) {
        //punto 3
        $sfondo = ($i % 2) ? "#fff" : "#eee";
        // $sfondo = "#eee";
        // if ($i % 2) {
        //     $sfondo = "#fff";
        // }
    
        $grassetto = "<i>";
        $fine_grassetto = "</i>";
        if ($voti[$i] >= 60) {
            $grassetto = "<b>";
            $fine_grassetto = "</b>";
        }

        echo "<li style='background: $sfondo ;'>";
        echo $grassetto . $voti[$i] . $fine_grassetto;
        echo "</li>";

        //punto 5
        if ($voti[$i] == 101) {
            $lodi++;
        }
        //cerco il minimo
        if ($voti[$i] < $minimo) {
            $minimo = $voti[$i];
            $minimi = 0;
        }
        if ($voti[$i] == $minimo) {
            $minimi++;
        }



    }
    echo "</ol>";

    echo "<hr>";
    echo "RIQUADRO<br>";

    echo "n. lodi = $lodi e n. voti minimi $minimo = $minimi";



















    //esercizio aggiuntivo
    //trovare il minimo in un array (vedi file array.php)
    



    //sfondo rosso per la lode
    for ($i = 0; $i < count($voti); $i++) {

        if ($voti[$i] == 101) { //LODE
            //rosso
            $sfondo = "#f00";

        } else {
            $sfondo = "#fff";

        }
        //echo "<div style='background: $sfondo ;'>" . $voti[$i] . "</div>";
    }


    ?>
</body>

</html>