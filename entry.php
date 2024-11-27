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
        <div class="">
            <div class="label-wrapper">
                <label for="invoice_number">Invoice #
                    <input id="invoice_number" type="text" name="invoice_number">
                </label>
            </div>
            <div class="label-wrapper">
                <label for="salesperson_name">Salesperson
                    <input id="salesperson_name" type="text" name="salesperson_name">
                </label>
            </div>
            <a id="stgOneBtn" class="btn">Send new entry</a>
        </div>
    </div>
    <div id="logobox"><img src="images/logo.png"></div>
    <a href="index.php" class="homeButton">HOME</a>
    <script src="entry.js"></script>
</body>
</html>