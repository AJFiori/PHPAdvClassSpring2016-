<?php

/**
 * Description of Validator
 *
 * @author GFORTI
 */
class Validator {
    /**
     * A method to check if a name is valid.
     *
     * @param {String} [$fullname] - must be a valid name
     *
     * @return boolean
     */
public function fullNameIsValid($fullname) {
        return ( preg_match("/([a-zA-Z]|\s)+/", $fullname) );
    }
    /**
     * A method to check if an email is valid.
     *
     * @param {String} [$email] - must be a valid email
     *
     * @return boolean
     */
public function emailIsValid($email) {
        return ( is_string($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) !== false );
    }
    
    /**
     * A method to check if a address is valid.
     *
     * @param {String} [$address] - must be a valid address
     *
     * @return boolean
     */
public function addressIsValid($addressline1) {
        return ( preg_match("/([a-zA-Z]|\s|[1-9])+/", $addressline1) );
    }
    
    /**
     * A method to check if a city is valid.
     *
     * @param {String} [$city] - must be a valid city
     *
     * @return boolean
     */
public function cityIsValid($city) {
        return ( preg_match("/([a-zA-Z]|\s)+/", $city) );
    }
    
    /**
     * A method to check if a zip is valid.
     *
     * @param {String} [$zip] - must be a valid zip
     *
     * @return boolean
     */
public function zipIsValid($zip) {
        return ( preg_match("/([a-zA-Z]|\s)+/", $zip) );
    }
    
   
}
