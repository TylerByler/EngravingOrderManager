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

        <div id="stg1" class="stg-wrapper">
            <div class="label-wrapper">
                <label for="invoice_number_temp">Invoice #
                    <input id="invoice_number_temp" type="text" name="invoice_number_temp">
                </label>
            </div>
            <div class="label-wrapper">
                <label for="salesperson_name_temp">Salesperson
                    <input id="salesperson_name_temp" type="text" name="salesperson_name_temp">
                </label>
            </div>
            <a id="stgOneBtn" class="btn">Create New Order</a>
        </div>

        <div id="stg2" class="stg-wrapper hidden">
            <div class="form-header">
                <p id="invoice-header"></p>
                <p id="salesperson-header"></p>
            </div>

            <form action="includes/formhandler.inc.php" method="post">

                <input type="hidden" name="invoice_number" id="invoice_number">
                <input type="hidden" name="salesperson_name" id="salesperson_name">
                <div class="label-wrapper">
                    <label for="product_number">Product #
                        <input type="text" name="product_number" id="product_number">
                    </label>
                </div>
                <div class="label-wrapper">
                    <label for="product_desc">Product Description
                        <input type="text" name="product_desc" id="product_desc">
                    </label>
                </div>
                <div class="label-wrapper">
                    <label for="color">Color
                        <input type="text" name="color" id="color">
                    </label>
                </div>
                <div class="label-wrapper">
                    <label for="design_number">Design #
                        <input type="text" name="design_number" id="design_number">
                    </label>
                </div>
                <div class="label-wrapper">
                    <label for="font">Font
                        <input type="text" name="font" id="font">
                    </label>
                </div>
                <div class="label-wrapper">
                    <label for="engraving_desc">Engraving Description
                        <input type="text" name="engraving_desc" id="engraving_desc">
                    </label>
                </div>
                
            </form>
            <button>Submit New Order</button>
        </div>

    </div>
    <div id="logobox"><img src="images/logo.png"></div>
    <a href="index.php" class="homeButton">HOME</a>
    <script src="entry.js"></script>
</body>
</html>