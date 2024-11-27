<?php

try {
    require_once "includes/dbh.inc.php";

    $query = "SELECT * FROM orders;";

    $stmt = $pdo->prepare($query);

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmt = null;

} catch (PDOException $e) {
    die("Query failed: ". $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/orders.css">
</head>
<body>
    <a href="index.php" class="homeButton">HOME</a>
    <div class="container flex-column justify-center text-center">
        <h1>Orders</h1>
        <!-- INSERT HTML USING RESULTS FROM DB -->
        <div class="column-titles-container">
            <div class="column-title left-title">Invoice #</div>
            <div class="column-title">Salesperson</div>
            <div class="column-title right-title">Date Created</div>
        </div>
        <a href=<?php ?> class="order-link">
            <div class="order-container">
                <div class="order-column">INVOICE_NUMBER</div>
                <div class="order-column">SALESPERSON_NAME</div>
                <div class="order-column">DATETIME</div>
            </div>
        </a>
         <?php
            /* if (empty($results)) {
                echo "No Results";
            } else {
                foreach ($results as $row) {
                    echo "<div class=\"justify-center text-center\">";
                    echo htmlspecialchars($row["invoice_number"]);
                    echo htmlspecialchars($row["salesperson_name"]);
                    echo "</div>";
                }
            } */
        ?>
    </div>
    
    <div id="logobox"><img src="images/logo.png"></div>
</body>
</html>