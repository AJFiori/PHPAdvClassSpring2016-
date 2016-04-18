<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Address</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../style3.css"/>
    </head>
    <body>
        <a href="../index.php" class="btn btn-primary btn-lg btn-block">Go Back</a>

<div class="container">
<center>
    <h1>Add New Address</h1>
    
<!--JS function to make success message fade -->
<!--<?php include './functions/results.html.php';
?>-->
<?php
        require_once '../models/DB.php';
        require_once '../models/IDAO.php';
        require_once '../models/Validator.php';
        require_once '../models/Util.php';
        require_once '../models/AddressDAO.php';
        
        
//Calling varibles from DB
         $values = filter_input_array(INPUT_POST);
         $validator = new Validator();
         $util = new Util();
         $addressDAO = new AddressDAO();
         
         $message = array();
         
if ( $util->isPostRequest() ) {            
            
        /* Utilize the class to validate and save the data */
        
//Name validator   
        if ( !$validator->fullNameIsValid( $values['fullname'] ) ) {
                array_push($message,"Sorry Full Name IS Not Valid");
            }else if ( empty($values['fullname']) ) {
            array_push($message,"Sorry Full Name Is Empty");
            }
//email validator   
        if ( !$validator->emailIsValid( $values['email'] ) ) {
                array_push($message,"Sorry Email Is Not Valid");
            }else if ( empty($values['email']) ) {
            array_push($message,"Sorry Email Is Empty");
            }
//address validator
        if ( !$validator->addressIsValid( $values['addressline1'] ) ) {
                array_push($message,"Sorry Address IS Not Valid");
            }else if ( empty($values['addressline1']) ) {
            array_push($message,"Sorry Address IS Empty");
            }
//city validator
        if ( !$validator->cityIsValid( $values['city'] ) ) {
                array_push($message,"Sorry City Is Not Valid");
            }else if ( empty($values['city']) ) {
            array_push($message,"Sorry City Is Empty");
            }
//zip validator
        if ( !$validator->zipIsValid( $values['zip'] ) ) {
                array_push($message,"Sorry Zip Code Is Not Valid");
            }else if ( empty($values['zip']) ) {
            array_push($message,"Sorry Zip Code Is Empty");
            
           
/* Your class has to implement the interface, but you can
 * add custom functions needed to get the job done
 */
            } else if ( $addressDAO->hasAddress( $values['addressline1'] ) ) {
                array_push($message,"Sorry Address has all ready been added");
               
            } 
            
        if(count($message)==0)
            {
            if($addressDAO ->create($values) )
                   {
                        array_push($message,"Succesfully Added");
                   }
            }
    }
         
            ?>
        <?php include '../models/message.html.php';?>
 <!--Form design -->           
    <form action="#" method="post">   
       Full Name:&nbsp;<input name="fullname" value="<?php echo $values['fullname'];?>" /> <br/><br/>
       Email:&nbsp; <input name="email" value="<?php echo $values['email']; ?>" /> <br /><br/>
       Address:&nbsp;<input name="addressline1" value="<?php echo $values['addressline1']; ?>" /> <br /><br/>
       City:&nbsp;<input name="city" value="<?php echo $values['city']; ?>" /> <br /><br/>
       

    <select name="state">
            <option value="">Select State:</option>
            <option value="AL" <?php if ($values['state'] === "AL") echo 'selected' ?>>AL</option>
            <option value="AK" <?php if ( $values['state'] === "AK") echo 'selected' ?>>AK</option>
            <option value="AZ" <?php if ( $values['state'] === "AZ") echo 'selected' ?>>AZ</option>
            
            <option value="AR" <?php if ( $values['state'] === "AR") echo 'selected' ?>>AR</option>
            <option value="CA" <?php if ( $values['state'] === "CA") echo 'selected' ?>>CA</option>
            <option value="CO" <?php if ( $values['state'] === "CO") echo 'selected' ?>>CO</option>
            
            <option value="CT" <?php if ( $values['state'] === "CT") echo 'selected' ?>>CT</option>
            <option value="DE" <?php if ( $values['state'] === "DE") echo 'selected' ?>>DE</option>
            <option value="FL" <?php if ( $values['state'] === "FL") echo 'selected' ?>>FL</option>
            
            <option value="GA" <?php if ( $values['state'] === "GA") echo 'selected' ?>>GA</option>
            <option value="HI" <?php if ( $values['state'] === "HI") echo 'selected' ?>>HI</option>
            <option value="ID" <?php if ( $values['state'] === "ID") echo 'selected' ?>>ID</option>
            
            <option value="IL" <?php if ( $values['state'] === "IL") echo 'selected' ?>>IL</option>
            <option value="IN" <?php if ( $values['state'] === "IN") echo 'selected' ?>>IN</option>
            <option value="IA" <?php if ( $values['state'] === "IA") echo 'selected' ?>>IA</option>
            
            <option value="ME" <?php if ( $values['state'] === "ME") echo 'selected' ?>>ME</option>
            <option value="MD" <?php if ( $values['state'] === "MD") echo 'selected' ?>>MD</option>
            <option value="MA" <?php if ( $values['state'] === "MA") echo 'selected' ?>>MA</option>
            
            <option value="MI" <?php if ( $values['state'] === "MI") echo 'selected' ?>>MI</option>
            <option value="MN" <?php if ( $values['state'] === "MN") echo 'selected' ?>>MN</option>
            <option value="MS" <?php if ( $values['state'] === "MS") echo 'selected' ?>>MS</option>
            
            <option value="MO" <?php if ( $values['state'] === "MO") echo 'selected' ?>>MO</option>
            <option value="MT" <?php if ( $values['state'] === "MT") echo 'selected' ?>>MT</option>
            <option value="NE" <?php if ( $values['state'] === "NE") echo 'selected' ?>>NE</option>
            
            <option value="NV" <?php if ( $values['state'] === "NV") echo 'selected' ?>>NV</option>
            <option value="NH" <?php if ( $values['state'] === "NH") echo 'selected' ?>>NH</option>
            <option value="NJ" <?php if ( $values['state'] === "NJ") echo 'selected' ?>>NJ</option>
            
            <option value="NM" <?php if ( $values['state'] === "NM") echo 'selected' ?>>NM</option>
            <option value="NY" <?php if ( $values['state'] === "NY") echo 'selected' ?>>NY</option>
            <option value="NC" <?php if ( $values['state'] === "NC") echo 'selected' ?>>NC</option>
            
            <option value="ND" <?php if ( $values['state'] === "ND") echo 'selected' ?>>ND</option>
            <option value="OH" <?php if ( $values['state'] === "OH") echo 'selected' ?>>OH</option>
            <option value="OK" <?php if ( $values['state'] === "OK") echo 'selected' ?>>OK</option>
            
            <option value="OR" <?php if ( $values['state'] === "OR") echo 'selected' ?>>OR</option>
            <option value="PA" <?php if ( $values['state'] === "PA") echo 'selected' ?>>PA</option>
            <option value="RI" <?php if ( $values['state'] === "RI") echo 'selected' ?>>RI</option>
            
            <option value="SC" <?php if ( $values['state'] === "SC") echo 'selected' ?>>SC</option>
            <option value="SD" <?php if ( $values['state'] === "SD") echo 'selected' ?>>SD</option>
            <option value="TN" <?php if ( $values['state'] === "TN") echo 'selected' ?>>TN</option>
            
            <option value="TX" <?php if ( $values['state'] === "TX") echo 'selected' ?>>TX</option>
            <option value="UT" <?php if ( $values['state'] === "UT") echo 'selected' ?>>UT</option>
            <option value="VT" <?php if ( $values['state'] === "VT") echo 'selected' ?>>VT</option>
            
            <option value="VA" <?php if ( $values['state'] === "VA") echo 'selected' ?>>VA</option>
            <option value="WA" <?php if ( $values['state'] === "WA") echo 'selected' ?>>WA</option>
            <option value="WV" <?php if ( $values['state'] === "WV") echo 'selected' ?>>WV</option>
            <option value="WI" <?php if ( $values['state'] === "WI") echo 'selected' ?>>WI</option>
            <option value="WY" <?php if ( $values['state'] === "WY") echo 'selected' ?>>WY</option>

    </select><br/><br/>

       Zip:<input name="zip" value="<?php echo $values['zip']; ?>" /> <br /><br/>
       Birthday:<input type="date" name="birthday" value="<?php echo $values['birthday']; ?>" /> <br /><br/>
       
       <input type="submit" value="submit" class="btn btn-primary" /> 
    </form>
    
</center>
</div>
    </body>
</html>