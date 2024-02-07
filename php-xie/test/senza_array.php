<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica 06/02</title>
</head>
<h1>Gestione della temperatura di Brunico</h1>
<?php
$mese = date("m") - 1;
$anno = date("Y");
$oggi = date("j");
// echo $oggi;
// $mese_precedente = 56;
$tot_temp = 0;
$tot_primi_giorni = 0;
$temp_pos = $temp_neg = 0;


// calcolo dei giorni del mese 
switch ($mese) {
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
        if ($anno % 4 == 0) {
            $giorni_del_mese = 29;
        } else {
            $giorni_del_mese = 28;
        }
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $giorni_del_mese = 30;
        break;
    default:
        $giorni_del_mese = "";
        echo "Errore nel dato 'mese'";
}
// echo $giorni_del_mese;

// 1. 
for ($i = 0; $i < $giorni_del_mese; $i++) {
    $colore = "";
    $temperatura = rand(-10, 20);
    $tot_temp += $temperatura;

    if ($i == 0) {
        $temp_massima = $temperatura;
    }
    // 2.
    if ($temperatura < 0) {
        $colore = "color:red;";
    }
    echo "<div style='$colore'>" . $i + 1 . " _ " . $temperatura . "</div>";

    // 3.
    if ($temperatura > $temp_massima) {
        $temp_massima = $temperatura;
        // $giorno_temp_max = $i + 1;
    }

    // 4.
    if ($i < $oggi) {
        $tot_primi_giorni += $temperatura;
    }

    // 5.
    if ($temperatura > 0) {
        $temp_pos++;
    }
    if ($temperatura < 0) {
        $temp_neg++;
    }
}

// echo "La temperatura dello scorso mese:<br>-Max: " . $temp_massima /* . " C° nel giorno " . $giorno_temp_max */. " C° <br>-Media: " . round($tot_temp / $giorni_del_mese) . " C°";
echo "La temperatura dello scorso mese:<br>"
    . "-Max: " . $temp_massima . " C° <br>"
    . "-Media: " . round($tot_temp / $giorni_del_mese) . " C°<br>"
    . "-Media dei primi giorni: " . round($tot_primi_giorni / $oggi)."<br>";

if ($temp_pos > $temp_neg) {
    echo "Ci sono più giorni con temperatura positiva.";
}
if ($temp_pos < $temp_neg) {
    echo "Ci sono più giorni con temperatura negativa.";
}
echo "<hr>";


?>

<body>

</body>

</html>