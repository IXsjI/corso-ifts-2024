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
    <title>Anagrafica</title>
</head>

<body>

    <?php
    // print_r($_REQUEST)
    

    try {
        $sql = "SELECT * FROM anagrafica WHERE ana_id = " . $_REQUEST['id'];

        $st = $conn->prepare($sql);
        $st->execute();
        $records = $st->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $a) {
        echo "Errore di connessione " . $a->getMessage();
    }

    // print_r($record);
    $record = $records["0"];
    $personaSelezionata = new Anagrafica($record["ana_id"], $record["ana_nome"], $record["ana_cognome"], $record["ana_indirizzo"], $record["ana_natoil"], $record["ana_data_iscrizione"]);

    if (anni($personaSelezionata->dataIsctizione) >= 10) {
        echo '<table class="table table-striped">';
        echo '<tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Indirizzo</th>
            <th>Nato il</th>
            <th>Data di iscrizione</th>
          </tr>';

        echo "<tr>";
        echo "<td>" . $personaSelezionata->getId() . "</td>";
        echo "<td>" . $personaSelezionata->nome . "</td>";
        echo "<td>" . $personaSelezionata->cognome . "</td>";
        echo "<td>" . $personaSelezionata->getIndirizzo() . "</td>";
        echo "<td>" . $personaSelezionata->getNatoIl() . "</td>";
        echo "<td>" . data_db2user($personaSelezionata->dataIsctizione) . "</td>";
        echo "</tr>";

        echo '</table>';
    } else {
        echo "<h2>La persona non è iscritta da più di 10 anni</h2>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>