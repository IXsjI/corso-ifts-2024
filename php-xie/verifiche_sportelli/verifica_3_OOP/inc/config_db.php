<?php
$host = "localhost";
$user = "root";
$psw = "";
$dbname = "ifts_2024";
$dns = 'mysql:host=' . $host . ';dbname=' . $dbname;

$conn = new PDO($dns, $user, $psw);