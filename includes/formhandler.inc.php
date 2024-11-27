<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $invoice_number = $_POST["invoice_number"];
    $salesperson_name = $_POST["salesperson_name"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO orders (invoice_number, salesperson_name) VALUES (:invoice_number, :salesperson_name);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":invoice_number", $invoice_number);
        $stmt->bindParam(":salesperson_name", $salesperson_name);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location:../entry.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }
} else {
    header("Location:../index.php");
}