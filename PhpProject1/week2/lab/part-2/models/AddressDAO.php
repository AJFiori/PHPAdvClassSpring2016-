<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddressDAO
 *
 * @author Anthony J. Fiori
 */
class AddressDAO extends DB Implements IDAO {
    //put your code here
function __construct(){
        $this->setDns('mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2016');
        $this->setPassword('');
        $this->setUser('root');
} 
    
function readAll() {
        $db = $this->getDb();
        $stmt = $db->prepare("SELECT * FROM address");

        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
           $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        return $results;
    }
    
function create($values){
        
        $db = $this->getDb();
        $stmt = $db->prepare("INSERT INTO address SET fullname = :fullname, email = :email,addressline1 = :addressline1,city = :city,state = :state,zip = :zip,birthday = :birthday");
        $binds = array(
            ":fullname" => $values['fullname'],
            ":email" => $values['email'],
            ":addressline1" => $values['addressline1'],
            ":city" => $values['city'],
            ":state" => $values['state'],
            ":zip" => $values['zip'],
            ":birthday" => $values['birthday'],
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }
    
    /*
     * Add this custom function to check if the phone has been added to the Database.
     */
function hasAddress($Address){
        
        $db = $this->getDb();
        $stmt = $db->prepare("SELECT * FROM address where address_id = :address_id");
        $binds = array(
            ":address_id" => $Address          
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }

        return false;
    }
    
function read($id){
        
    }
    
function update($values){
        
    }
    
function delete($id){
        
    }
}