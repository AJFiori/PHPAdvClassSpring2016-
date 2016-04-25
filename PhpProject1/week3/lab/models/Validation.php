<?php 

/**
* 
*/
class Validation
{
    public function emailIsValid($eCheck)
    {
    	return(preg_match('/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/', $eCheck));
    }

    public function valueIsValid($eCheck)
    {
    	return(preg_match('/^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$/', $eCheck));
    }

    public function valueIsEmpty($eCheck)
    {
    	return(empty($eCheck));
    }
}

 ?>