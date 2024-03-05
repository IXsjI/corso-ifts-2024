<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "adventureworks2019";
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
//1. connessione
$conn = new PDO($dsn, $user, $pass);