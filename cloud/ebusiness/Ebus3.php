<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
         <link rel="stylesheet" href="ebusiness.css" type="text/css"/>
    </head>
    <body>
        <header>
        <br/>
        <h1 class="heading">Silver Lining Ltd.</h1>
        <br/>
        <br/>
        </header>
        <h4 class="heading">RECIEPT</h4>
        <div class="centered">
            
             <?php
            // set session variables
            $_SESSION["user_name"] = $_POST["user_name"];
            $_SESSION["user_email"] = $_POST["user_email"];
            ?>
        
        <?php
        // Echo session variables that were set on previous page
        echo "Customer Name: " . $_SESSION["user_name"] . ".";
        ?>
        
        <br/>
        
        <?php
        echo "Customer Email: " . $_SESSION["user_email"] . ".";
        ?>
    
    <br/>
        
        <?php
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
            
        </div>
           
    </body>
</html>