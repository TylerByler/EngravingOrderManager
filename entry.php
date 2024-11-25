<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Page</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/entry.css">
</head>
<body>
    <div class="container justify-center flex-column text-center">
        <h1>Entry Form</h1>
        <p class="reduceMargin">Use the form below to enter an order for engraving</p>
        <form class="insertentry" action="includes/formhandler.inc.php" method="post">
            <label for="invoice_number">Invoice #
                <input id="invoice_number" type="text" name="invoice_number">
            </label>
            <label for="salesperson_name">salesperson_name
                <input id="salesperson_name" type="text" name="salesperson_name">
            </label>
           <!--  <label for="product_number">Product #
                <input id="product_number" type="text" name="product_number">
            </label>
            <label for="design_number">Design #
                <input id="design_number" type="text" name="design_number">
            </label>
            <label for="font">Font
                <input id="font" type="text" name="font">
            </label> -->
            <button>Send new entry</button>
        </form>
    </div>
    <div id="logobox"><img src="images/logo.png"></div>
    <a href="index.php" class="homeButton">HOME</a>
</body>
</html>