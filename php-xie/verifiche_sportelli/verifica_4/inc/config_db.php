<?php
$host = "localhost";
$user = "root";
$psw = "";
$dbname = "ifts_2024";
$dns = 'mysql:host=' . $host . ';dbname=' . $dbname;

try {
    $conn = new PDO($dns, $user, $psw);
} catch (PDOException $a) {
    echo "Errore di connessione " . $a->getMessage();
}