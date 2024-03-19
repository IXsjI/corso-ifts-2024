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
        foreach ($_REQUEST as $key => $dato) {
            echo "$key => $dato <br>";
        }
    }


    print_r($_FILES);
    $img = $_FILES['fileImg']['name'];
    if (!move_uploaded_file($_FILES['fileImg']['tmp_name'], $img)) {
        echo "errore nel caricamento del file";
    }else {
        echo "<img src='$img'> ";
    }
    
    $cv = $_FILES['fileCV']['name'];
    if (!move_uploaded_file($_FILES['fileCV']['tmp_name'], $cv)) {
        echo "errore nel caricamento del file";
    }else {
        echo "<a href ='$cv' target = '_blank' > Clicca per vedere il CV </a>";
    }

    ?>
    <hr>
    <a href="./form.php?email=<?php echo $_REQUEST["email"];?>&txtCognome=<?php echo $_REQUEST['txtCognome'];?>&radTitoloDiStudio=<?php echo $_REQUEST['radTitoloDiStudio']; ?>">Torna al form</a>
</body>

</html>