<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportello 3</title>
</head>

<body>
    <?php
    //cerca un elemento in un array associativo data la chiave
    function cerca_valore($a, $k = 0)
    {
        //se $k = 0 -> restituire il valore della chiave 0 
        //o il primo valore 
        //array_key_exists($k,$a);
        /*$i = 0;
        foreach ($a as $key => $dato) {
            if ($i == 0) {
                $primo_dato = $dato;
            }
            if ($key == 0 || $key == $k) {
                return $dato;
            }
            
            $i++;
        }
        return $primo_dato;*/
        if (array_key_exists($k,$a))
            return $a[$k];
        foreach ($a as $dato)
            return $dato;

    }


    $array = ['nome' => "Mario", 'punti' => 10];
    $k = "punti";
    echo cerca_valore($array, $k);
    echo "<br>";
    echo cerca_valore($array);
    




    ?>

</body>

</html>