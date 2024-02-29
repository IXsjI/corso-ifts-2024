<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Bidimensionali</title>
</head>

<body>
    <?php
    $p1 = ['cognome' => "Rossi", "nome" => "Mario", "natoil" => "2024-02-12"];
    $p2 = ['cognome' => "Xie", "nome" => "Sijie", "natoil" => "1999-11-30"];
    $p3 = ['cognome' => "Verdi", "nome" => "Giuseppe", "natoil" => "1998-02-12"];
    $persone = [$p1, $p2, $p3];
    // echo $persone[1]['cognome'];
    
    //elenco di tutti i cognomi
    foreach ($persone as $p) {
        echo $p['cognome'] . "<br>";
    }

    // foreach ($persone as $p) {
    //     foreach ($p as $d){
    //         echo "$d ";
    //     }
    //     echo "<br>";
    // }
    echo "<hr>";

    //chi è nato oggi
    $oggi = date("Y-m-d"); //oppure si può metterlo direttamente nel foreach
    $piu_vecchio = ""; //e se fossero 2????
    $piu_giovane = ""; //e se fossero 2????
    $eta_totale = 0;
    //$natoil_più_vecchio ; //data più piccola
    foreach ($persone as $i => $p) {
        if ($p['natoil'] == $oggi)  //if ($p['natoil'] == date("Y-m-d"))
            echo $p['nome'] . " " . $p['cognome'] . " è nato oggi<br>"; //quando c'è solo una istruzione nel if posso anche non mettere le{}
    
        //compleanno
        $natoil = $p['natoil'];
        // $compleanno = substr($natoil, 5); dal 
        $anno_natoil = substr($natoil, 0, 4);
        $anni = date("Y") - $anno_natoil;
        $eta_totale += $anni;
        echo $anni . " ";
        if (substr($natoil, 5) == date("m-d")) {
            echo "Auguri " . $p['nome'] . " " . $p['cognome'] . " per i tuoi $anni anni<br>";
        }

        //più vecchio
        if ($i == 0) {
            $natoil_minore = $natoil;
            $piu_vecchio = $p['nome'];
        }
        if ($p['natoil'] < $natoil_minore) {
            $natoil_minore = $natoil;
            $piu_vecchio = $p['nome'];
        }

        //più giovane
        if ($i == 0) {
            $natoil_maggiore = $natoil;
            $piu_giovane = $p['nome'];
        }
        if ($p['natoil'] > $natoil_maggiore) {
            $natoil_maggiore = $natoil;
            $piu_giovane = $p['nome'];
        }

    }
    echo "$piu_vecchio è il più vecchio<br>";
    echo "$piu_giovane è il più giovane<br>";
    echo "Età media: " . $eta_totale / count($persone);


    //per il compleanno usare  substr($natoil,5)   = natoil senza anno
    //chi è il più vecchio (e/o giovane)
    //età media
    
    echo "<hr>";

    /*foreach ($persone as $k => $persona) {
        echo $k + 1 . ") Cognome = " . $persona['cognome'];
        echo "<br>Nome = " . $persona['nome'];
        echo "<br>Nato il = " . $persona['natoil'];
        echo "<br>";
        echo "<br>";
    }

    echo "<hr>";*/

    foreach ($persone as $k => $persona) {
        echo $k + 1 . ") ";
        foreach ($persona as $chiave => $valore) {

            echo "$chiave = $valore <br>";
        }
        echo "<br>";
    }

    /*foreach ($persone as $k => $persona) {

        $i = 0;
        foreach ($persona as $chiave => $valore) {
            // if ($chiave == 'cognome') 
            //     echo $k + 1 . ") ";
            $i++;
            if ($i == 1) //inizio una nuova persona
                echo "1) ";
            echo "$chiave = $valore (chiave n. $i)<br>";
            if ($i == count($persona))
                echo "<br>";
        }
    }*/

    echo "<hr>";

    echo "
    <table border = 1>
        <tr>
            <td>Cognome</td>
            <td>Nome</td>
            <td>Data nascita</td>
        </tr>";

    foreach ($persone as $persona) {
        echo "<tr>";
        foreach ($persona as $valore)
            echo "<td>" . $valore . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    echo "<hr>";

    $categoria1 = array('nome' => "scarpe", 'n_prodotti' => 20, 'fatturato' => 1200);
    $categoria2 = array('nome' => "maglioni", 'n_prodotti' => 12, 'fatturato' => 800);
    $categoria3 = array('nome' => "pantaloni", 'n_prodotti' => 5, 'fatturato' => 650);
    $categorie = [$categoria1, $categoria2, $categoria3];
    $fatt_categorie = [];

    $tot_n_prodotti = 0;
    $tot_fatturato = 0;
    $anno = date("Y");
    $anno_inizio = 2014;

    foreach ($categorie as $k => $categoria) {
        $sfondo = "";
        $i = 0;
        $categorie[$k]['anno'] = $anno;
        $tot_n_prodotti += $categoria['n_prodotti'];
        $tot_fatturato += $categoria['fatturato'];

        if ($k % 2)
            $sfondo = 'background:#ddd;';
        if ($k == 0)
            $max = $min = $categoria['fatturato'];
        if ($categoria['fatturato'] < $min)
            $min = $categoria['fatturato'];
        if ($categoria['fatturato'] > $max)
            $max = $categoria['fatturato'];

        $fatt_categorie[$categoria['nome']][$anno] = $categoria['fatturato'];
        for ($i = $anno-1; $i >= $anno_inizio; $i--) {
            $categoria['fatturato'] -= 100;
            $fatt_categorie[$categoria['nome']][$i] = $categoria['fatturato'];
        }
        echo "<div style='$sfondo'>" . $categoria['nome'] . "</div>";
    }

    // foreach ($categorie as $k => $categoria) {
    //     $sfondo = "";
    //     $i = 0;
    //     if ($k % 2)
    //         $sfondo = 'background:#ddd;';
    //     $categorie[$k]['anno'] = date("Y");
    
    //     echo "<div style='$sfondo'>";
    //     foreach ($categoria as $chiave => $valore) {
    //         $i++;
    //         if ($i == 1)
    //             echo $valore;
    //         if ($chiave == 'n_prodotti')
    //             $tot_n_prodotti += $valore;
    //         if ($chiave == 'fatturato') {
    //             $tot_fatturato += $valore;
    //             if ($k == 0)
    //                 $max = $min = $valore;
    //             if ($valore < $min)
    //                 $min = $valore;
    //             if ($valore > $max)
    //                 $max = $valore;
    //         }
    //     }
    //     echo "</div>";
    // }
    


    echo "<br>Numero totale di prodotti: $tot_n_prodotti";
    echo "<br>Fatturato più alto: $max";
    echo "<br>Fatturato più basso: $min";
    echo "<br>Fatturato medio: " . round($tot_fatturato / count($categorie));

    print_r($fatt_categorie);
    print_r($categorie)


        //PER CASA
        //creare un output uguale al print_r per un array bidimensionale 
        //(poi dalla prossima lezione multidimensionale)
    
        ?>

</body>

</html>