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
    $piu_vecchio = "";//e se fossero 2????
    //$natoil_più_vecchio ; //data più piccola
    foreach ($persone as $i => $p) {
        if ($p['natoil'] == $oggi)  //if ($p['natoil'] == date("Y-m-d"))
            echo $p['nome'] . " " . $p['cognome'] . " è nato oggi<br>"; //quando c'è solo una istruzione nel if posso anche non mettere le{}
    
        //compleanno
        $natoil = $p['natoil'];
        // $compleanno = substr($natoil, 5); dal 
        $anno_natoil = substr($natoil, 0, 4);

        if (substr($natoil, 5) == date("m-d")) {
            $anni = date("Y") - $anno_natoil;
            echo "Auguri " . $p['nome'] . " " . $p['cognome'] . " per i tuoi $anni anni<br>";
        }

        //più vecchio
        if ($i == 0){
            $natoil_minore = $natoil;
            $piu_vecchio = $p['nome'];
        }
        if ($p['natoil'] < $natoil_minore) {
            $natoil_minore = $natoil;
            $piu_vecchio = $p['nome'];
        }

    }
    echo "$piu_vecchio è il più vecchio";

    //per il compleanno usare  substr($natoil,5)   = natoil senza anno
    //chi è il più vecchio (e/o giovane)
    //età media

    foreach($persone as $k => $persona){
        
    }
    


    ?>
</body>

</html>