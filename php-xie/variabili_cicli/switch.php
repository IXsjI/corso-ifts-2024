<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>

    <?php
    $m = date("m"); //mese da 1 a 12
    $m = 4;

    switch ($m) {
        case 1:
            $mese = "gennaio";
            break;
        case 2:
            $mese = "febbraio";
            break;
        case 3:
            $mese = "marzo";
            break;
        case 4:
            $mese = "aprile";
            break;
        //....
        default:
            $mese = "";
            echo "errore il mese deve essere compreso tra 1 e 12 (invece è $m)";
    }

    echo "<hr>";
    //quanti giorni mancano alla fine del mese?
    //calcolo il n. di gg del mese corrente
    switch ($m) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $giorni_del_mese = 31;
            break;
        case 2:
            $giorni_del_mese = 28;
            break;
        default:
            $giorni_del_mese = 30;
    }
    //qui $giorni_del_mese è valorizzato correttamente
    echo "il mese di $mese ha $giorni_del_mese giorni";

    //poi calcolo quanti ne mancano
    
    $j = date("j"); //oggi restituisce 23
    
    echo " ne mancano " . ($giorni_del_mese - $j) . " alla fine del mese";

    //$risultato = ($giorni_del_mese - $j);
    //echo " ne mancano $risultato alla fine del mese";
    

    //e alla fine dell'anno?????
    echo"<hr>";
    $g = date("z");
    $a = date("Y");
    if ($a % 4 == 0) {
        echo "mancano ".(366-$g)." giorni alla fine dell'anno";
    }
    else {
        echo "mancano ".(365-$g)." giorni alla fine dell'anno";
    }

    
    //Date 2 var (giorno e mese) stampare la stagione corrente, considerando che il cambio stagione sia sempre il giorno 20 dei mesi di Marzo, Giugno, Settembre, Dicembre.
    echo "<hr>";
    $y = 2024;
    $m = 90;
    $d = 19;
    switch ($m) {
        case 1:
            $mese = "gennaio";
            break;
        case 2:
            $mese = "febbraio";
            break;
        case 3:
            $mese = "marzo";
            break;
        case 4:
            $mese = "aprile";
            break;
        case 5:
            $mese = "maggio";
            break;
        case 6:
            $mese = "giugno";
            break;
        case 7:
            $mese = "luglio";
            break;
        case 8:
            $mese = "agosto";
            break;
        case 9:
            $mese = "settembre";
            break;
        case 10:
            $mese = "ottobre";
            break;
        case 11:
            $mese = "novembre";
            break;
        case 12:
            $mese = "dicembre";
            break;
        
        default:
            $mese = "";
            echo "Errore il mese deve essere compreso tra 1 e 12 (invece è $m)";
    }
    switch ($m) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $giorni_del_mese = 31;
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $giorni_del_mese = 30;
            break;
        case 2:
            if ($y % 4 == 0) {
                $giorni_del_mese = 29;
            }
            else {
                $giorni_del_mese = 28;
            }
            break;
        default:
            echo "Il $m ° mese non ha $d giorni.";
    }
    // switch ($m) {
    //     case 1:
    //     case 2:
    //         if ($g >= 1 && $g <=31)
    //     case 3:

    //     case 4:
    //     case 5:

    //     case 6:

    //     case 7:
    //     case 8:

    //     case 9:

    //     case 10:
    //     case 11:

    //     case 12:
    // }

    ?>


</body>

</html>


<?php

?>