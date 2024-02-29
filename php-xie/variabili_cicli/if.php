<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
</head>

<body>
    <?php

    //dato il voto $voto scrivere se è promosso in 30esimi (con lode) o bocciato
    $voto = 31;
    if (($voto >= 18) && ($voto <= 31)) {
        //eseguo qui tutto quello che serve per i promossi
        //echo "promosso".($voto == 31? " con lode":""); //OTTIMO
        echo "promosso";
        if ($voto == 31) {
            echo " con lode";
        }
    } else {
        if ($voto > 31 || $voto < 0) {
            echo "Il voto $voto non è corretto: deve essere compreso tra 0 e 31<br> ";
        } else {
            echo "bocciato";
        }
    }

    echo "<hr>";
    //dato il costo di un articolo, visualizzarlo iva compresa; ... 
    //poi aggiungere spese di spedizione (gratis sopra una soglia)
    $costo = 10;
    $iva = 22;
    $trasporto = 10;
    $soglia = 100;

    //costo + (costo * iva / 100)
    $costo_totale = ($costo + ($costo * $iva / 100));

    if ($costo_totale <= $soglia)
        $costo_totale += $trasporto;

    echo "Il costo totale è $costo + $iva % di iva trasporto compreso ($costo_totale €) ";

    ?>


</body>

</html>