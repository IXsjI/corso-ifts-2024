<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <?php
    /*
    1.	dato il costo di un articolo, visualizzarlo iva compresa; ... 
    2.	...poi con op. ternario aggiungere spese di spedizione che variano a seconda del prezzo
    3.	Scambiare $a e $b in modo che $a sia > $b (stampa solo il maggiore)
    4.	
    Antonio, Bruno e Carlo sono andati a pranzo al ristorante, e hanno ordinato: 
    • Antonio: pasta, €9.00, verdure, €5.00, caffè, €1.00
    • Bruno: pasta, €8.00, verdure, € 5.00, caffè, €1.00
    • Carlo: pasta, €11.00, verdure, €4.00, caffè, €1.00
    Quanto ha speso ogni persona? Quanto in totale? E in media?
    Se decidessero di dividere in parti uguali, arrotondando all’euro, quanto lascerebbero di mancia?
    */


    //3. Scambiare $a e $b in modo che $a sia > $b (stampa solo il maggiore)
    $a = 1;
    $b = 2;
    echo "a = $a b = $b<br>";
    //scambio $a e $b
    $c = $a;
    //ora posso sovrascrivere $a
    $a = $b;
    //ora posso sovrascrivere $b
    $b = $c;

    echo "a = $a b = $b";



    ?>


</body>

</html>