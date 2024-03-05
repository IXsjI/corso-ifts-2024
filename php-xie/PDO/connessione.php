<?php
include_once "./inc/config_db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connessione al DB</title>
</head>

<body>

    <?php
    try {
        
        //echo "connessione avvenuta con successo";
        //2. preparazione query
        /*$sql = "SELECT * 
                FROM person
                ORDER BY ModifiedDate DESC
                LIMIT 10";*/
        $sql = "SELECT * 
                FROM person AS p
                JOIN personphone AS ph 
                    ON ph.BusinessEntityID = p.BusinessEntityID
                JOIN phonenumbertype AS pnt
                    ON pnt.phonenumbertypeid = ph.phonenumbertypeid
                WHERE pnt.Name = 'Home'
                ORDER BY p.ModifiedDate DESC
                LIMIT 10";

        $st = $conn->prepare($sql); // $conn già inizializzata in config_db
        //3. saltato bind()
        //4. esegui la query
        $st->execute();
        //5. estraggo i records
        $records = $st->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "errore di connessione: " . $e->getMessage();
    }

    // print_r($records);
    echo "<br>";
    foreach ($records as $k => $record) {
        echo $record["FirstName"] ." - ". $record["LastName"] . " - ". $record["PhoneNumber"] . " - (". $record["Name"] .") ";

        //estrarre salesperson.Bonus del record corrente
        //uso $connessione
        //2. prepare
        $sql = "SELECT Bonus FROM salesperson WHERE BusinessEntityID = '" . $record['BusinessEntityID'] . "' ";
        $st2 = $conn->prepare($sql);
        //3. execute
        $st2->execute();
        //4. fetch
        $riga = $st2->fetch(PDO::FETCH_ASSOC);
        if ($riga) {
            $bonus = $riga["Bonus"];
            echo "Bonus = ".number_format($bonus, 2,",",".") . "<br>";
        }else {
            echo "Nessun bonus <br>";
        }
    }

    //PER CASA: scrivere la funzione che dato il n. di tel 
    //lo restituisca senza il simbolo "-" ma con il punto che separa il prefisso
    //ES. 212-555-0187 -> 212.5550187
    //PER CASA
    //cercare i 10 bonus + alti ed elencare a chi appartengono

    ?>

</body>

</html>