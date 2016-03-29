<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
     <head>
        <meta charset="UTF-8">
        <title>Add Address</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        
    </head>
    <body>
        <a href="index.php" class="btn btn-primary btn-lg btn-block">Go Back</a>
        <br/><br/>
        <?php
        
            require_once './functions/dbconnect.php';
            require_once './functions/util.php';
            
            $error = array();
            
            $fullname = filter_input(INPUT_POST, 'fullname');
            $email = filter_input(INPUT_POST, 'email');
            $addressline1 = filter_input(INPUT_POST, 'addressline1');
            $city = filter_input(INPUT_POST, 'city');
            $state = filter_input(INPUT_POST, 'state');
            $zip = filter_input(INPUT_POST, 'zip');
            $birthday = filter_input(INPUT_POST, 'birthday');
            
                $nameRegex = '/([a-zA-Z]|\s)+/';
		$addressRegex = '/([a-zA-Z]|\s|[1-9])+/';
                $cityRegex = '/([a-zA-Z]|\s|[1-9])+/';
		$zipRegex = '/[0-9]{5}/'; 
                
            if (!is_null($fullname)){
            if (!preg_match($nameRegex, $fullname)){
            	array_push($error,"Name is invaild");
            }
        }
        if (!is_null($email)){
        	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        		array_push($error, "Email is invaild");
        	}
        }
        if(!is_null($addressline1)){
        	if(!preg_match($addressRegex, $addressline1)){
        		array_push($error, "Address is invaild");
        	}
        }
        if(!is_null($city)){
        	if(!preg_match($nameRegex, $city)){
        		array_push($error, "City is invaild");
        	}
        }
        if (!is_null($zip)){
            if (!preg_match($zipRegex, $zip)){
            	array_push($error,"Zip is invaild");
            }
        }

            include './views/AddAddress-form.html.php';
        ?>
    </body>
</html>
