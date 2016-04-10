<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
    <!--Adds Updated information into the database-->
<center>
    <form action="#" method="post">   
       Full Name:&nbsp;<input name="fullname" value="<?php echo $fullname;?>" /> <br/><br/>
       Email:&nbsp; <input name="email" value="<?php echo $email; ?>" /> <br /><br/>
       Address:&nbsp;<input name="addressline1" value="<?php echo $addressline1; ?>" /> <br /><br/>
       City:&nbsp;<input name="city" value="<?php echo $city; ?>" /> <br /><br/>
       

    <select name="state">
            <option value="">Select State:</option>
            <option value="AL" <?php if ($state === "AL") echo 'selected' ?>>AL</option>
            <option value="AK" <?php if ($state === "AK") echo 'selected' ?>>AK</option>
            <option value="AZ" <?php if ($state === "AZ") echo 'selected' ?>>AZ</option>
            
            <option value="AR" <?php if ($state === "AR") echo 'selected' ?>>AR</option>
            <option value="CA" <?php if ($state === "CA") echo 'selected' ?>>CA</option>
            <option value="CO" <?php if ($state === "CO") echo 'selected' ?>>CO</option>
            
            <option value="CT" <?php if ($state === "CT") echo 'selected' ?>>CT</option>
            <option value="DE" <?php if ($state === "DE") echo 'selected' ?>>DE</option>
            <option value="FL" <?php if ($state === "FL") echo 'selected' ?>>FL</option>
            
            <option value="GA" <?php if ($state === "GA") echo 'selected' ?>>GA</option>
            <option value="HI" <?php if ($state === "HI") echo 'selected' ?>>HI</option>
            <option value="ID" <?php if ($state === "ID") echo 'selected' ?>>ID</option>
            
            <option value="IL" <?php if ($state === "IL") echo 'selected' ?>>IL</option>
            <option value="IN" <?php if ($state === "IN") echo 'selected' ?>>IN</option>
            <option value="IA" <?php if ($state === "IA") echo 'selected' ?>>IA</option>
            
            <option value="ME" <?php if ($state === "ME") echo 'selected' ?>>ME</option>
            <option value="MD" <?php if ($state === "MD") echo 'selected' ?>>MD</option>
            <option value="MA" <?php if ($state === "MA") echo 'selected' ?>>MA</option>
            
            <option value="MI" <?php if ($state === "MI") echo 'selected' ?>>MI</option>
            <option value="MN" <?php if ($state === "MN") echo 'selected' ?>>MN</option>
            <option value="MS" <?php if ($state === "MS") echo 'selected' ?>>MS</option>
            
            <option value="MO" <?php if ($state === "MO") echo 'selected' ?>>MO</option>
            <option value="MT" <?php if ($state === "MT") echo 'selected' ?>>MT</option>
            <option value="NE" <?php if ($state === "NE") echo 'selected' ?>>NE</option>
            
            <option value="NV" <?php if ($state === "NV") echo 'selected' ?>>NV</option>
            <option value="NH" <?php if ($state === "NH") echo 'selected' ?>>NH</option>
            <option value="NJ" <?php if ($state === "NJ") echo 'selected' ?>>NJ</option>
            
            <option value="NM" <?php if ($state === "NM") echo 'selected' ?>>NM</option>
            <option value="NY" <?php if ($state === "NY") echo 'selected' ?>>NY</option>
            <option value="NC" <?php if ($state === "NC") echo 'selected' ?>>NC</option>
            
            <option value="ND" <?php if ($state === "ND") echo 'selected' ?>>ND</option>
            <option value="OH" <?php if ($state === "OH") echo 'selected' ?>>OH</option>
            <option value="OK" <?php if ($state === "OK") echo 'selected' ?>>OK</option>
            
            <option value="OR" <?php if ($state === "OR") echo 'selected' ?>>OR</option>
            <option value="PA" <?php if ($state === "PA") echo 'selected' ?>>PA</option>
            <option value="RI" <?php if ($state === "RI") echo 'selected' ?>>RI</option>
            
            <option value="SC" <?php if ($state === "SC") echo 'selected' ?>>SC</option>
            <option value="SD" <?php if ($state === "SD") echo 'selected' ?>>SD</option>
            <option value="TN" <?php if ($state === "TN") echo 'selected' ?>>TN</option>
            
            <option value="TX" <?php if ($state === "TX") echo 'selected' ?>>TX</option>
            <option value="UT" <?php if ($state === "UT") echo 'selected' ?>>UT</option>
            <option value="VT" <?php if ($state === "VT") echo 'selected' ?>>VT</option>
            
            <option value="VA" <?php if ($state === "VA") echo 'selected' ?>>VA</option>
            <option value="WA" <?php if ($state === "WA") echo 'selected' ?>>WA</option>
            <option value="WV" <?php if ($state === "WV") echo 'selected' ?>>WV</option>
            <option value="WI" <?php if ($state === "WI") echo 'selected' ?>>WI</option>
            <option value="WY" <?php if ($state === "WY") echo 'selected' ?>>WY</option>

    </select><br/><br/>

       Zip:<input name="zip" value="<?php echo $zip; ?>" /> <br /><br/>
       Birthday:<input type="date" name="birthday" value="<?php echo $birthday; ?>" /> <br /><br/>
       
       <input type="submit" value="submit" class="btn btn-primary" /> 
    </form>
    
</center>
</div>
    </body>
</html>
