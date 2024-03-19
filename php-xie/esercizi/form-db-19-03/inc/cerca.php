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
    $nome = "";
    if ($_REQUEST) {
        $nome = $_REQUEST["nome"];
        echo $nome;
    }
    

    echo "<hr>";

    try {
        $sql = "SELECT * from anagrafica WHERE ana_nome LIKE :nome OR ana_cognome LIKE :nome";

        $st = $conn->prepare($sql);
        $st->bindParam(":nome",$nome);
        // $st->bindParam(':cognome',$cognome);
        $nome = "%".$nome."%";
        $st->execute();
        $records = $st->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "errore: " . $e->getMessage();
    }

    print_r($records);

    
    ?>
</body>

</html>