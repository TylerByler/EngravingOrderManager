<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    foreach( $_POST['product_number'] as $value ) {
        print $value;
    }
    
    foreach( $_POST['engraving_desc'] as $value ) {
        if ($value == "") {
            print "N/A";
        }
        print $value;
    }

} else {
    header("Location:../index.php");
}