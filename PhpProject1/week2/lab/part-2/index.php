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
        <a href="views/AddAddress-form.html.php" class="btn btn-primary btn-lg btn-block">Add New Address</a>
        <br/><br/>
        
    <?php
        require_once './autoload.php';
        
        /* this sections acts as our controller */
        
        /* create instances of the classes you will need */
      
        
        /* we still need the individual values for our view(template) 
         * utilize the class to get all the results
         */
        $address = new AddressDAO();
        $addresses = $address->readAll();
                
        
       
//Populates all info from database into a table so you can view on main page
        include './views/view-address.php';
        ?>

    </body>
</html>
