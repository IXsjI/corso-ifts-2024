<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invia Dati</title>
</head>

<body>
    <?php
    //$_GET, $_POST e $_REQUEST var SUPERGLOBALI, cioè visibile ovunque
    // print_r($_GET);

    //1
    /*if ($_POST) {
        echo "Ciao " . $_POST["txtCognome"] . "! <br> Ecco i dati che hai compilato.<br>";
        foreach ($_POST as $key => $dato) {
            echo $key . " => " . $dato . "<br>";
        }
    }*/

    //2
    /*if ($_GET)
        foreach ($_GET as $key => $dato) {
            echo $key . " => " . $dato . "<br>";
        }*/


    //con $_REQUEST non serve differenziare post e get
    if ($_REQUEST) {
        echo "Ciao " . $_REQUEST["txtCognome"] . "! <br> Ecco i dati che hai compilato.<br>";
        foreach ($_POST as $key => $dato) {
            echo $key . " => " . $dato . "<br>";
        }
    }
    ?>
</body>

</html>