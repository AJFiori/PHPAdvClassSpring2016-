<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
          <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <title></title>
    </head>
    <body>
    <a href="index.php" class="btn btn-primary btn-lg btn-block">Go Back</a>
    <!--JS function to make success message fade -->
    
 
    <?php 
            
//Connects to DB
            require_once './functions/dbconnect.php';
            
//Connects to addAddress, getAllAddress,deleteAddress,updateAddress, & isPostRequest functions
            require_once './functions/util.php';
            
            $deleteAddress = deleteAddress();
       ?>     
    </body>
</html>
