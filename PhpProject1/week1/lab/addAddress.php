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
        <link rel="stylesheet" href="style3.css"/>
        
    </head>
    <body>
        <a href="index.php" class="btn btn-primary btn-lg btn-block">Go Back</a>
        <?php
//Connects to DB
            require_once './functions/dbconnect.php';
            
//Connects to addAddress, getAllAddress, & isPostRequest functions
            require_once './functions/util.php';
            
 //Calling varibles from DB
            $fullname = filter_input(INPUT_POST, 'fullname');
            $email = filter_input(INPUT_POST, 'email');
            $addressline1 = filter_input(INPUT_POST, 'addressline1');
            $city = filter_input(INPUT_POST, 'city');
            $state = filter_input(INPUT_POST, 'state');
            $zip = filter_input(INPUT_POST, 'zip');
            $birthday = filter_input(INPUT_POST, 'birthday');
            
//regex expressions
            $nameRegex = '/([a-zA-Z]|\s)+/';
            $addressRegex = '/([a-zA-Z]|\s|[1-9])+/';
            $zipRegex = '/^\d{5}(?:[-\s]\d{4})?$/';
            
//Loops through error array for each field
            $errorMessage = array();
            
//Checks if its a 1 or 2, if all fields are filled(1) submits to database, else doesn't submit
            $check = 1;
            
//When all feilds are filled pushes out success message & using JS to fade out
            $successMessage ="";
            
//If request is made checks all fileds, if (true) submits, else doesn't submit
            if ( isPostRequest() ) 
            {   
                
//If fields are empty shoots out error message
                if ( empty($fullname) ) 
                {
                    $errorMessage[] = 'Please provide a Name<br/>';
                    $check = 2;
                }
                if ( empty($email) ) 
                {
                    $errorMessage[] = 'Please provide an Email Address<br/>';
                    $check = 2;
                }
                if ( empty($addressline1) ) 
                {
                    $errorMessage[] = 'Please provide an Address<br/>';
                    $check = 2;
                } 
                if ( empty($city) ) 
                {
                    $errorMessage[] = 'Please provide a City<br/>';
                    $check = 2;
                }
                if ($state === '')
                {
                    $errorMessage[] = 'Please select a State<br/>';
                    $check = 2;
                }                
                if ( empty($zip) ) 
                {
                    $errorMessage[] = 'Please provide an Zip Code<br/>';
                    $check = 2;
                }            
                if ( empty($birthday) ) 
                {
                    $errorMessage[] = 'Please provide an Birthday<br/>';
                    $check = 2;
                }       
//regex for all fields
                if ( !preg_match($nameRegex, $fullname) ) 
                {
                    $errorMessage[] = 'Name Is Not valid<br/>';
                    $check = 2;
                }
                
                if ( filter_var($email, FILTER_VALIDATE_EMAIL) == false ) 
                {
                    $errorMessage[] = 'Email Is Not valid<br/>';
                    $check = 2;
                }
                
                if ( !preg_match($addressRegex, $addressline1) ) 
                {
                    $errorMessage[] = 'Address Is Not valid<br/>';
                    $check = 2;
                } 
                if ( !preg_match($nameRegex, $city) ) 
                {
                    $errorMessage[] = 'City Is Not valid<br/>';
                    $check = 2;
                }
                                 
                if ( !preg_match($zipRegex, $zip) ) 
                {
                    $errorMessage[] = 'Zip Code Is Not valid<br/>';
                    $check = 2;
                } 
//If true submits to database
                if ($check === 1)
                {
                    if ( addAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday ) ) 
                    {
                        $successMessage = 'Address Added';
                       
                    }
                }
            }
//Calls the Address form
            include './views/AddAddress-form.html.php';
        ?>
    </body>
</html>
