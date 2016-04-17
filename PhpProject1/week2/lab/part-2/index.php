<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 1 Address Form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
        <a href="views/AddAddress-form.html.php" class="btn btn-primary btn-lg btn-block">Add New Address</a>
        <br/><br/>
        
    <?php
        require_once './autoload.php';
        
        /* this sections acts as our controller */
        
        /* create instances of the classes you will need */
        $util = new Util();
        $validator = new Validator();
        $addressDAO = new AddressDAO();
        
        /* Shortcut to get all the values from the form */
        $values = filter_input_array(INPUT_POST);
        
        /* we still need the individual values for our view(template) */
        $fullname = $values['fullname'];
        $email = $values['email'];
        
        $addressline1 = $values['addressline1'];
        $city = $values['city'];
        $state = $values['state'];
        $zip = $values['zip'];
        $birthday = $values['birthday'];
 
if ( $util->isPostRequest() ) {            
            
        /* Utilize the class to validate and save the data */
        
//Name validator   
        if ( !$validator->fullNameIsValid( $values['fullname'] ) ) {
                $message = 'Sorry Full Name is not valid';
            }else if ( empty($fullname) ) {
            $message = 'Sorry Full Name is Empty';} 
            
//email validator   
        if ( !$validator->emailIsValid( $values['email'] ) ) {
                $message = 'Sorry email is not valid';
            }else if ( empty($email) ) {
            $message = 'Sorry email is Empty';} 
            
//address validator
        if ( !$validator->addressIsValid( $values['addressline1'] ) ) {
                $message = 'Sorry address is not valid';
            }else if ( empty($addressline1) ) {
            $message = 'Sorry address is Empty';} 
            
//city validator
        if ( !$validator->cityIsValid( $values['city'] ) ) {
                $message = 'Sorry city is not valid';
            }else if ( empty($city) ) {
            $message = 'Sorry city is Empty';} 
            
//zip validator
        if ( !$validator->zipIsValid( $values['zip'] ) ) {
                $message = 'Sorry zip code is not valid';
            }else if ( empty($zip) ) {
            $message = 'Sorry zip code is Empty';} 
            
           
/* Your class has to implement the interface, but you can
 * add custom functions needed to get the job done
 */
            } else if ( $addressDAO->hasAddress( $values['address_id'] ) ) {
                $message = 'Sorry Address has all ready been added.'; 
            
                
            } else if ( $addressDAO->create( $values ) ) {
                $message = 'Address Added';
                $fullname = '';
                $email = '';
                
                $addressline1 = '';
                $city = '';
                $state = '';
                $zip = '';
                $birthday = '';
            } else {
                $message = 'Sorry Address was not added'; 
            }            
        
        
        /* we still need the individual values for our view(template) 
         * utilize the class to get all the results
         */
        $address = $addressDAO->readAll();
                
        
       
//Populates all info from database into a table so you can view on main page
        include './views/view-address.php';
        ?>

    </body>
</html>
