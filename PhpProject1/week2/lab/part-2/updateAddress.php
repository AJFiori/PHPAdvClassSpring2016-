<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Address</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../style3.css"/>
    </head>
    <body>
        <a href="index.php" class="btn btn-primary btn-lg btn-block">Go Back</a>
    <center>
        
    <br/><br/>
    </center>
        <?php
//Connects to DB
            require_once './functions/dbconnect.php';
            
//Connects to addAddress, getAllAddress,deleteAddress,updateAddress, & isPostRequest functions
            require_once './functions/util.php';
           
            $db = dbconnect();
            $results="";
           
        if (isPostRequest()) {
                
    $stmt = $db->prepare("UPDATE address set fullname = :fullname, email = :email, addressline1 = :addressline1, city = :city, state = :state, zip = :zip ,birthday = :birthday WHERE address_id = :address_id");
                
                $fullname = filter_input(INPUT_POST, 'fullname');
                $email = filter_input(INPUT_POST, 'email');
                $addressline1 = filter_input(INPUT_POST, 'addressline1');
                $city = filter_input(INPUT_POST, 'city');
                $state = filter_input(INPUT_POST, 'state');
                $zip = filter_input(INPUT_POST, 'zip');
                $birthday = filter_input(INPUT_POST, 'birthday');
                
                    $binds = array(
                    ":fullname" => $fullname,
                    ":email" => $email,
                    ":addressline1" => $addressline1,
                    ":city" => $city,
                    ":state" => $state,
                    ":zip" => $zip,
                    ":birthday" => $birthday
                );
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        return true;
    }
    return false;
                if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                   $results = 'Record updated';
                   
                }
                
         }
             else {
                $address_id = filter_input(INPUT_GET, 'address_id');
                $stmt = $db->prepare("SELECT * FROM address where address_id = :address_id");
                $binds = array(
                    ":address_id" => $address_id
                );
                if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                   $results = $stmt->fetch(PDO::FETCH_ASSOC);
                }
               
            }
                $fullname = $results['fullname'];
                $email = $results['email'];
                $addressline1 = $results['addressline1'];
                $city = $results['city'];
                $state = $results['state'];
                $zip = $results['zip'];
                $birthday = $results['birthday'];

//Calls the Address form
            include './views/updateAddress-form.html.php';
    ?>