<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>

<body>

    <?php

    if (($fd = fopen("log.txt", "a")) === false) {
        die("Fallita l'apertura");
    }
    for ($i = 1; $i <= 10; $i++) {
        # code...
        fwrite($fd, "Riga $i\r\n");
    }
    fclose($fd);

    if (($fd = fopen("log.txt", "r")) === false) {
        die("Fallita l'apertura");
    } 

    $r = 0;
    $contenuto = "";
    while (!feof($fd)) {
        $contenuto .= fgets($fd, 1024);
        $r++;
    }
    echo "tot ".($r-1)." righe <br>";
    echo nl2br($contenuto);

    ?>

</body>

</html>