<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MessageClass
 *
 * @author Anthony J. Fiori
 */
class MessageClass {
    
    private $Message;
    
   Public function __construct($Message) {
        $this->Message = $Message;
    }
     /**
    * Function getMessage.
    *    
    * @return void;
    */   
   public function getMessage() {
        return $this->Message;
    }
    /**
    * Function setMessage..
    *    
    * @param {String} [$Message]
    */   
   public function setMessage($Message) {
        $this->Message = $Message;
    }

}
