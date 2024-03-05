<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Utilizzo di classi definiti altrove</title>
</head>

<body>
    <h1>Utilizzo di classi definiti altrove</h1>
    <?php
    include "./inc/function.php";
    include "./classe.php"; //require _once
    $p1 = new Persona("Xie", "1999-11-30");
    $p2 = new Persona("Sijie");

    echo "Numero di persone: " . Persona::$numero;
    echo "<br>";

    // $numero è un valore statico che fa parte della classe e non di ogni oggetto 
    // e come scritto del __construct della classe Persona $numero incrementerà di uno ogni volta che aggiungi un nuovo oggetto
    
    $p3 = new Persona();
    /*  $p1::$numero = 10;
        //stessa cosa di quella sopra - xk $p1 fa parte della classe Persona
        Persona::$numero = 10;*/
    echo "Numero di persone dopo aver aggiunto p3: " . Persona::$numero;
    echo "<br>";

    echo "P1 nato il: " . $p1->getNatoil();
    echo "<br>";

    $p2->setNatoil("2024-02-29");
    echo "P2 nato il: " . $p2->getNatoil();
    echo "<br>";

    $p2->setNome('Anna');
    echo "Nome di p2: " . $p2->nome;
    echo "<br>";
    $p3->setNome('Luca');
    echo "Nome di p3: " . $p3->nome;
    echo "<br>";

    $studenti = [$p1, $p2, $p3];

    echo Persona::saluto(false);
    echo "<hr>";

    echo '<table class="table table-striped">';
    foreach ($studenti as $studente) {
        echo "<tr>";
        echo "<td>";
        echo $studente->nome;
        echo "</td>";
        echo "<td>";
        echo $studente->getNatoil2User();
        echo "</td>";
        echo "<td>";
        echo $studente->eta();
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";


    //private function
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>