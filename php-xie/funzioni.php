<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzioni</title>
</head>

<body>
    <?php
    $r = rand(1, 100);
    echo $r;
    echo "<hr>";

    $stringa = "asdfghjkl";
    echo substr($stringa, 1, 2);
    echo "<hr>";

    $oggi = date("Y-m-d");
    // echo "$oggi";
    $anno = substr($oggi, 0, 4);
    $mese = substr($oggi, 5, 2);
    $giorno = substr($oggi, 8, 2); // se non metto il 2 prende in considerazione tutti i caratteri fino all'ultimo
    echo "$giorno/$mese/$anno";
    // echo substr($oggi,8,2)."-". substr($oggi,5,2) ."-".$anno;
    
    echo "<br>";

    //scrivere $oggi nel formato gg/mm/yyyy usando explode
    $s = explode("-", $oggi);
    print_r($s);
    for ($i = count($s) - 1; $i >= 0; $i--) {
        echo $s[$i];
        if ($i != 0)
            echo "/";
    }
    echo "<hr>";



    //verificare se la stringa $mail contiene la @
    $mail = "xie@gmail.com";
    $pos_chiocciola = strpos($mail, "@", 3);
    $mail_ok = false;

    //metodo 1
    /*if ($pos_chiocciola !== false ) {
        //trovata la chiocciola
        if (strpos($mail, ".", $pos_chiocciola) !== FALSE) {
            //echo "$mail corretta";
            $mail_ok = true;
        }
    }
    echo "$mail ";
    if ($mail_ok)
        echo "corretta";
    else
        "non corretta";*/

    //metodo 2 
    if (
        ($pos_chiocciola !== false)
        &&
        (strpos($mail, ".", $pos_chiocciola) !== FALSE)
    ) {
        $mail_ok = true;
    }
    echo "$mail " . ($mail_ok ? "" : " non ") . "corretta";
    echo "<hr>";

    $frase = "io amo il php";
    $parole = explode(" ", $frase);
    print_r($parole);
    echo implode(" ", $parole);
    echo "<hr>";

    //fz date()
    $oggi = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y")));
    $ieri = date("Y-m-d", mktime(0, 0, 0, date("m"), (date("d") - 20), date("Y")));
    $domani = date("Y-m-d", mktime(0, 0, 0, date("m"), (date("d") + 1), date("Y")));

    echo $oggi;
    ?>
</body>

</html>