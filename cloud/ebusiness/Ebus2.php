<?php
// start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
         <link rel="stylesheet" href="ebusiness.css" type="text/css"/>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
         <header>
        <br/>
        <h1 class="heading">Silver Lining Ltd.</h1>
        <br/>
        <br/>
        </header>
        <h3 class="heading">Please enter your payment details</h3>
        
        <div class="centered"> 
        
        <form action="Ebus3.php" method="POST">
            
            <label for="user_name">Name</label>
            <input type="name" id="user_name" placeholder="Name" maxlength="35"/>
            
            <br/>
            
            <label for="user_email">Email Address</label>
            <input type="email" id="user_email" placeholder="Joeblogs@example.com" maxlength="40"
            
            <br/>
            
             <label for="user_pin">PIN</label>
             <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
             

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
             
               <?php
            // set session variables
            $_SESSION["user_name"] = $_POST["user_name"];
            ?>
            
            <?php
            $_SESSION["total"] = $_POST["total"];
            ?>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
          
       
        </div>
        
        <script type="text/javascript" src="Ebus2_validator.js"></script></div>
           
    </body>
</html>