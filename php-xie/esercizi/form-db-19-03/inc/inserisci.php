<?php
include "./config_db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerca</title>
</head>

<body>
    Ciao ecco le persone di nome

    <?php
    print_r($_POST);
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $natoil = $_POST["natoil"];

    try {
        $sql = "INSERT INTO anagrafica 
                (ana_nome, ana_cognome, ana_natoil) 
                VALUES 
                (:nome, :cognome, :natoil)";

        $st = $conn->prepare($sql);
        $st->bindParam(":nome", $nome);
        $st->bindParam(":cognome", $cognome);
        $st->bindParam(":natoil", $natoil);
        $st->execute();
    } catch (PDOException $e) {
        echo "errore: " . $e->getMessage();
    }


    ?>
</body>

</html>