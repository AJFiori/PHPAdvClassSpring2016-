<?php

/**
 * A method to check if a Post request has been made.
 *    
 * @return boolean
 */
function isPostRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
}

function addAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday) {
    
    $db = dbconnect();
    
    $stmt = $db->prepare("INSERT address values(null,:fullname,:email,:addressline1,:city,:state,:zip,:birthday)");
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
}

function getAllAddress() {
    
    $db = dbconnect();
    $stmt = $db->prepare("SELECT * FROM address");
    
    $results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) {
       $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    return $results;
}

function updateAddress(){
    
    $db = dbconnect();
    
    $stmt = $db->prepare("UPDATE address set fullname = :fullname, email = :email, addressline1 = :addressline1, city = :city, state = :state, zip = :zip ,birthday = :birthday WHERE address_id = :address_id");
                            
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
}

function deleteAddress(){
    
     $db = dbconnect();
            $address_id = filter_input(INPUT_GET, 'address_id'); 
            $stmt = $db->prepare("DELETE FROM address where address_id = :address_id");
            $binds = array(
                ":address_id" => $address_id
            );
       
      $isDeleted = false;
      
     if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
           $isDeleted = true;
            
        }       
}


