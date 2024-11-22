<?php

$dsn = "mysql:localhost;dbname=engraving_orders";
$dbusername = "root";
$dbpassword = "ITinfo";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<script>console.log(\"Connection failed: " . $e->getMessage() . "\")</script>";
}

