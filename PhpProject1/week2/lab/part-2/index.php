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
//Connects to DB
        require_once './functions/dbconnect.php';

//Connects to all functions in util
        require_once './functions/util.php';
 
//Calls the getAllAddress functions
        $address = getAllAddress();
       
//Populates all info from database into a table so you can view on main page
        include './views/view-address.php';
        ?>

    </body>
</html>
