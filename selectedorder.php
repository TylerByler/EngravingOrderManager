<?php

try {
    require_once "includes/dbh.inc.php";

    $query = "SELECT * FROM discrete_engravings WHERE invoice_number = {$_GET['invoice']};";

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
    <title>Order #<?php echo $_GET['invoice']?></title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/orders.css">
</head>
<body>
    <a href="index.php" class="homeButton">HOME</a>
    <div class="container flex-column justify-center text-center">
        <h1>ORDER #<?php echo $_GET['invoice']?></h1>
        <!-- INSERT HTML USING RESULTS FROM DB -->
        <?php
            if (empty($results)) {
                echo "<h2>No Results</h2>";
            } else { ?>
                <div class="column-titles-container">
                    <div class="column-title left-title">Product #</div>
                    <div class="column-title">Product Description</div>
                    <div class="column-title">Color of Product</div>
                    <div class="column-title">Design #</div>
                    <div class="column-title">Font</div>
                    <div class="column-title right-title">Engraving Description</div>
                </div>
            <?php
                foreach ($results as $row) {
                    echo "<div class=\"order-container\">";
                        echo "<div class=\"order-column\">" . htmlspecialchars($row["product_number"]) . "</div>";
                        echo "<div class=\"order-column\">" . htmlspecialchars($row["product_desc"]) . "</div>";
                        echo "<div class=\"order-column\">" . htmlspecialchars($row["color"]) . "</div>";
                        echo "<div class=\"order-column\">" . htmlspecialchars($row["design_number"]) . "</div>";
                        echo "<div class=\"order-column\">" . htmlspecialchars($row["font"]) . "</div>";
                        echo "<div class=\"order-column\">" . htmlspecialchars($row["engraving_desc"]) . "</div>";
                    echo "</div>";
                }
            }
        ?>
    </div>
    
    <div id="logobox"><img src="images/logo.png"></div>
</body>
</html>