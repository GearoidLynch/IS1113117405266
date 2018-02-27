<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
    </head>
    <body>
        <h4>RECIEPT</h4>
        
        <?php
        // Echo session variables that were set on previous page
        echo "Customer Name:" . $_SESSION["user_name"] . ".";
        ?>
        
        <br/>
        
        <?php
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>