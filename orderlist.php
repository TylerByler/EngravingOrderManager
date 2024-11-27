<?php

try {
    require_once "includes/dbh.inc.php";

    $query = "SELECT * FROM orders ORDER BY `orders`.`creation_date` DESC;";

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
         <?php
            if (empty($results)) {
                echo "No Results";
            } else {
                foreach ($results as $row) {
                    echo "<a href=\"selectedorder.php?invoice=" . htmlspecialchars($row['invoice_number']) . "\" class=\"order-link\">";
                        echo "<div class=\"order-container\">";
                            echo "<div class=\"order-column\">" . htmlspecialchars($row['invoice_number']) . "</div>";
                            echo "<div class=\"order-column\">" . htmlspecialchars($row['salesperson_name']) . "</div>";
                            echo "<div class=\"order-column\">" . htmlspecialchars($row['creation_date']) . "</div>";
                        echo "</div>";
                    echo "</a>";
                }
            }
        ?>
    </div>
    
    <div id="logobox"><img src="images/logo.png"></div>

    <!-- <div class="order-drawer-layer">
        <div class="order-drawer">
            <div class="logobox-container">
                <div class="logobox-styler"></div>
                <div class="logobox"><img src="images/logo.png"/></div>
            </div>
        </div>
    </div> -->
</body>
</html>