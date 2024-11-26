<?php

$file = file_get_contents("C:\\xampp\htdocs\EngravingOrderManager\includes\sql.info.json");

$sqlhost = json_decode($file);

/* print($sqlhost->address); */

$dsn = "mysql:host=" . $sqlhost->address . ";dbname=millertech_engraving";
$dbusername = "root";
$dbpassword = "root_password";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<script>console.log(\"Connection failed: " . $e->getMessage() . "\")</script>";
}

