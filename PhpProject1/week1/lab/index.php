<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 1 Address Form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
        <a href="addAddress.php" class="btn btn-primary btn-lg btn-block">Add New Address</a>
        <br/><br/>
        
            <?php
        // put your code here
        
        require_once './functions/dbconnect.php';
        require_once './functions/util.php';
 
        $address = getAllAddress();
       
        include './views/view-address.php';
        ?>
        
        
        
    </body>
</html>
