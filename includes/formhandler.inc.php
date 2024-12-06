<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $invoice_number = $_POST["invoice_number"];
    $salesperson_name = $_POST["salesperson_name"];
    $num_entries = $_POST["num_entries"];

    try {
        require_once "dbh.inc.php";

        /* Insert invoice and salesperson into orders table */
        $query = "INSERT INTO orders (invoice_number, salesperson_name) VALUES (:invoice_number, :salesperson_name);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":invoice_number", $invoice_number);
        $stmt->bindParam(":salesperson_name", $salesperson_name);

        $stmt->execute();

        $stmt = null;
        $query = null;

        /* Insert each individual entry */
        $query = "INSERT INTO discrete_engravings (invoice_number, product_number, product_desc, color, design_number, font, engraving_desc) VALUES (:invoice_number, :product_number, :product_desc, :color, :design_number, :font, :engraving_desc);";

        for ($index = 0; $index < $num_entries; $index++) {
            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":invoice_number", $invoice_number);
            $stmt->bindParam(":product_number", $_POST["product_number"][$index]);
            $stmt->bindParam(":product_desc", $_POST["product_desc"][$index]);
            $stmt->bindParam(":color", $_POST["color"][$index]);
            $stmt->bindParam(":design_number", $_POST["design_number"][$index]);
            $stmt->bindParam(":font", $_POST["font"][$index]);
            $stmt->bindParam(":engraving_desc", $_POST["engraving_desc"][$index]);

            $stmt->execute();
            
            $stmt = null;
        }
        
        $pdo = null;
        $stmt = null;
        $query = null;

        header("Location:../entry.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }
} else {
    header("Location:../index.php");
}