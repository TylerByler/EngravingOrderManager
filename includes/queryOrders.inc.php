<?php

try {
    require_once "dbh.inc.php";

    $query = "SELECT * FROM orders;";

    $stmt = $pdo->prepare($query);

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmt = null;

    die();
} catch (PDOException $e) {
    die("Query failed: ". $e->getMessage());
}
