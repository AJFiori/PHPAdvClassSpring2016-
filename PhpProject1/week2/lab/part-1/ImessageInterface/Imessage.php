<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Anthony J. Fiori
 */
interface Imessage {
    //put your code here
function addMessage($key, $msg);

function removeMessage($key);

function getAllMessages();

}
