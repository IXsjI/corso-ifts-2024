<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio</title>
</head>

<body>
    <?php
    include "./Corso.php";
    include "./Persona.php";

    $p1 = new Persona("Mario");
    $p2 = new Persona("Ada");
    $p3 = new Persona("Giuseppe");

    $c = new Corso("PHP");

    $p1->setNatoil("2000-01-01");
    $c->aggiungiPartecipante($p1);

    echo "N. partecipanti al corso c = " . $c->numeroPartecipanti();


    ?>
</body>

</html>