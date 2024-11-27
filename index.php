<?php
    try {
        include_once "includes/dbh.inc.php";
    } catch (PDOException $e) {
        echo "<script>console.log(\"Include failed: " . $e->getMessage() . "\")</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engraving Order Manager</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="container flex-column justify-center text-center">
        <h1>Engraving Order Main Menu</h1>
        <a href="entry.php" class="btn">Create a new order</a>
        <a href="orderlist.php" class="btn">Orders</a>
    </div>
    <div id="logobox"><img src="images/logo.png"></div>
</body>
</html>