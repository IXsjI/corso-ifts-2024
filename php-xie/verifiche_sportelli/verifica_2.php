<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Verifica PHP 28/02</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <h1>Verifica PHP 20/02</h1>

    <?php
    $clienti = [
        ['cognome' => "Rossi", 'nome' => "Mario", 'primo_contatto' => "1990-10-22", 'ultimo_contatto' => "2023-01-13"],
        ['cognome' => "Bianchi", 'nome' => "Gianni", 'primo_contatto' => "2010-01-08", 'ultimo_contatto' => "2024-02-02"],
        ['cognome' => "Verdi", 'nome' => "Ada", 'primo_contatto' => "1998-09-30", 'ultimo_contatto' => "2023-06-28"]
    ];

    echo '<table class="table table-striped">';
    echo '<tr>
            <th>Cognome</th>
            <th>Nome</th>
        </tr>';



    foreach ($clienti as $k => $cliente) {
        if ($k == 0 || $cont_piu_vecchio > $clienti[$k]['primo_contatto']) {
            $cont_piu_vecchio = $clienti[$k]['primo_contatto'];
        }
    }
    // echo $cont_piu_vecchio;
    $contatti_anno_scorso = 0;
    foreach ($clienti as $k => $cliente) {
        $g = '';
        echo "<tr>";
        if ($cont_piu_vecchio == $clienti[$k]['primo_contatto']) {
            $g = "style = 'font-weight:bold'";
        }
        foreach ($cliente as $k_cliente => $inf_cliente) {
            if ($k_cliente == 'nome' || $k_cliente == 'cognome') {
                echo "<td $g>";
                echo $inf_cliente;
                echo "</td>";
            }
            if ($k_cliente == 'ultimo_contatto') {
                $ultimi_contatti[] = $inf_cliente;
                if (substr($inf_cliente, 0, 4) == date('Y') - 1) {
                    $contatti_anno_scorso++;
                }
            }
        }
        echo "</tr>";
    }
    echo '</table>';


    echo "Contatti effetuati l'anno scorso = " . $contatti_anno_scorso;

    $prova = clienti_10_anni($clienti);
    echo "<br>Clienti attivi da più di 10 anni = " . $prova;


    $p = trova_valori($clienti,'nome','Mario');
    print_r($p);


    // $a = array in cui cercare i dati
    // $k = dato che si vuole cercare
    // $v = valore che il dato deve avere
    // -se $v è una data prenderà in considerazione anche le date minori - 
    function trova_valori($a, $k, $v)
    {
        foreach ($a as $chiave => $cliente) {
            if ($a[$chiave][$k] == $v) {
                $r[] = $a[$chiave];
            } elseif (
                ($k == 'primo_contatto' || $k == 'ultimo_contatto')
                && $a[$chiave][$k] < $v
            ) {
                $r[] = $a[$chiave];
            }
        }
        return $r;
    }

    function clienti_2_mesi($a)
    {
        $giorno = date("Y-m-d", mktime(0, 0, 0, date("m") - 2, date("d"), date("Y")));
        $r = trova_valori($a, 'ultimo_contatto', $giorno);
        return $r;
    }

    function clienti_10_anni($a)
    {
        $giorno = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y") - 10));
        $r = trova_valori($a, 'primo_contatto', $giorno);
        return count($r);
    }
    // quando si usa '>' o '<' per confrontare stringhe 
    // tipo 'Rossi > C = Vero' perché R è dopo C nell'alfabeto
    // maiuscole e minuscole sono diverse perchè segue la tabella ascii
    ?>



</body>

</html>