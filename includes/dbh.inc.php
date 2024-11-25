<?php

$dsn = "mysql:host=localhost;dbname=millertech_engraving";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<script>console.log(\"Connection failed: " . $e->getMessage() . "\")</script>";
}

