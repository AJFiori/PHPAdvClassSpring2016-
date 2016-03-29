<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
        <?php
        // put your code here
        
        require_once './functions/dbconnect.php';
        require_once './functions/util.php';
        
        
        $address = filter_input(INPUT_POST, 'address');
        
        
        $address = getAllAddress();
        
        if ( isPostRequest() ) {
            
            
            if ( empty($address) ) {
                $message = 'Sorry address is Empty';
            } 
             else if ( addPhone($address) ) {
                $message = 'Address Added';
                $address = '';
                
            }
            
            
        }
                
                
        include './templates/messages.html.php';
        include './templates/AddAddress-form.html.php';
        
        include './templates/View-Address.html.php';
        ?>
        
        
        
    </body>
</html>
