<?php
include_once("./inc/config_db.php");
include_once("./inc/classe.php");
include_once("./inc/funzioni.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Verifica PHP 13/03</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <?php
    try {
        $sql = "SELECT * FROM gita_genitori_figli";

        $st = $conn->prepare($sql);
        $st->execute();
        $records = $st->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $a) {
        echo "Errore di connessione " . $a->getMessage();
    }

    $iscritti = [];
    foreach ($records as $key => $record) {
        $iscritti[] = new Persona($record["id_gita_genitori_figli"], $record["nome"], $record["master"], $record["gender"]);
    }


    echo '<table class="table table-striped">';
    echo '<tr>
            <th>Nome</th>
            <th>Gender</th>
          </tr>';

    $f_maschi = $f_femmine = 0;

    foreach ($iscritti as $k => $iscritto) {
        $gender = $iscritto->getGender();
        echo "<tr>";
        $f = "";

        switch ($gender) {
            case 'F':
                $f = "'font-style: oblique'";
                $f_femmine++;
                break;

            case 'M':
                $f_maschi++;
                break;
        }

        echo "<td style = $f>" . $iscritto->nome . "</td>";
        echo "<td>" . gender($gender) . "</td>";
        echo "</tr>";
    }

    echo '</table>';

    echo "<hr>";


    if ($f_femmine > $f_maschi) {
        echo "Ci sono più figlie femmine.";
    } elseif ($f_femmine < $f_maschi) {
        echo "Ci sono più figli maschi.";
    } else {
        echo "Ci sono la stessa quantità di figli maschi e femmine.";
    }

    // echo genere("F");
    // echo figlio($records[2]).$records[2]["nome"];
    // echo $f_maschi;
    echo "<hr>";
    $lista_id = [1, 2, 3, 4, 5, 6, 30];
    cerca_figli($lista_id, $iscritti);
    ?>
</body>

</html>