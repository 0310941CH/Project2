<?php
$host = "127.0.0.1";
$database = "nu";
$username = "bit_academy";
$password = "bit_academy";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
