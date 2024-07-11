<?php
include_once "./config_db.php";
include_once "./function.php";
include_once "./class.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Saluto</title>
</head>

<body>

    <?php
    // print_r($_REQUEST)
    $cognome = $_REQUEST["cognome"];
    $dataInserita = $_REQUEST["data"];
    echo "<h2>Buongiorno $cognome!!!<br>";
    echo "Data " . data_db2user($dataInserita) . "</h2>";

    try {
        $sql = "SELECT * FROM anagrafica WHERE ana_data_iscrizione > '$dataInserita' ORDER BY ana_cognome";

        $st = $conn->prepare($sql);
        $st->execute();
        $records = $st->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $a) {
        echo "Errore di connessione " . $a->getMessage();
    }

    // print_r($records);
    $anagrafica = [];
    foreach ($records as $key => $record) {
        $anagrafica[] = new Anagrafica($record["ana_id"], $record["ana_nome"], $record["ana_cognome"], $record["ana_indirizzo"], $record["ana_natoil"], $record["ana_data_iscrizione"]);
    }

    echo "<hr>";

    echo "<h2>Persone iscritte dopo la data selezionata</h2>";
    echo '<table class="table table-striped">';
    echo '<tr>
            <th>Cognome</th>
            <th>Nome</th>
            <th>Data di iscrizione</th>
            <th>Link</th>
          </tr>';

    foreach ($anagrafica as $k => $persona) {
        echo "<tr>";
        echo "<td>" . $persona->cognome . "</td>";
        echo "<td>" . $persona->nome . "</td>";
        echo "<td>" . data_db2user($persona->dataIsctizione) . "</td>";
        echo "<td><a href='./anagrafica.php?id=" . $persona->getId() . "'>Info</a></td>";
        echo "</tr>";
    }

    echo '</table>';

    echo "<hr>";

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>