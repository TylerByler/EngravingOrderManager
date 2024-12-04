<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    foreach( $_POST['product_number'] as $value ) {
        print $value;
    }
} else {
    header("Location:../index.php");
}